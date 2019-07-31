<?php
namespace common\models;

use yii\base\Model;
use core\models\User;
use core\models\UserAksesAppModule;

/**
 * Login form
 */
class LoginForm extends Model
{
    public $login_id;
    public $password;
    public $rememberMe = true;
    public $useSocmed = false;

    public $useToken = false;
    public $token;

    private $_user = false;


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            // login_id and password are both required
            [['login_id', 'password'], 'required'],
            // password is validated by validatePassword()
            ['password', 'validatePassword'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'login_id' => 'Email / Username',
            'password' => 'Password',
        ];
    }

    /**
     * Validates the password.
     * This method serves as the inline validation for password.
     *
     * @param string $attribute the attribute currently being validated
     * @param array $params the additional name-value pairs given in the rule
     */
    public function validatePassword($attribute, $params)
    {
        if (!$this->hasErrors()) {

            $user = $this->getUser();

            if (!$user || !$user->validatePassword($this->password)) {

                $this->addError($attribute, 'Email / Username atau Password salah.');
            }
        }
    }

    /**
     * Logs in a user using the provided login_id and password.
     *
     * @return boolean whether the user is logged in successfully
     */
    public function login($loginSource)
    {
        $notActive = false;
        $validate = true;
        $success = false;

        if (!$this->useSocmed && !$this->useToken) {

            $validate = $this->validate();
        }

        if ($validate && !empty($this->getUser()) && !($notActive = $this->getUser()->not_active)) {

            $modelUser = User::find()
                ->joinWith([
                    'userRoles' => function ($query) {

                        $query->andOnCondition(['user_role.is_active' => true]);
                    },
                    'userRoles.userLevel'
                ])
                ->andWhere(['user.id' => $this->getUser()->id])
                ->andWhere('"user_level"."app_akses" @> \'{"app_name" : ["' . $loginSource . '"]}\'')
                ->asArray()->one();

            if (!empty($modelUser)) {

                if (\Yii::$app->user->login($this->getUser(), $this->rememberMe ? 3600 * 24 * 30 : 0)) {

                    $data = [];

                    foreach ($modelUser['userRoles'] as $i => $dataUserRole) {

                        $data['user_level'][$i]['id'] = $dataUserRole['user_level_id'];
                        $data['user_level'][$i]['nama_level'] = $dataUserRole['userLevel']['nama_level'];
                        $data['user_level'][$i]['is_super_admin'] = $dataUserRole['userLevel']['is_super_admin'];
                    }

                    $userAkses = UserAksesAppModule::find()
                    ->joinWith(['userAppModule'])
                    ->andWhere(['user_akses_app_module.user_id' => \Yii::$app->user->getIdentity()->id])
                    ->andWhere(['user_akses_app_module.is_active' => true])
                    ->asArray()->all();

                    $data['user_akses'] = $userAkses;

                    \Yii::$app->session->set('user_data', $data);

                    $success = true;
                }
            } else {

                $this->addError('login_id', \Yii::t('app', 'You are not allowed to login'));
            }
        } else {

            if ($notActive) {

                $this->addError('login_id', \Yii::t('app', 'This user is not active'));
            }
        }

        return $success;
    }

    /**
     * Finds user by [[email / username]]
     *
     * @return User|null
     */
    public function getUser()
    {
        if ($this->_user === false) {

            if ($this->useToken) {

                $this->_user = User::findIdentityByAccessToken($this->token);
            } else {

                $validator = new \yii\validators\EmailValidator();

                if ($validator->validate($this->login_id)) {

                    $this->_user = User::findByEmail($this->login_id);
                } else {

                    $this->_user = User::findByUsername($this->login_id);
                }
            }
        }

        return $this->_user;
    }
}
