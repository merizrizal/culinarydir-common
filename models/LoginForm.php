<?php
namespace common\models;

use Yii;
use yii\base\Model;
use core\models\User;

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
                
                $this->addError($attribute, 'Email / Username atau password salah.');
            }
        }
    }

    /**
     * Logs in a user using the provided login_id and password.
     *
     * @return boolean whether the user is logged in successfully
     */
    public function login()
    {
        $notActive = false;
        $validate = true;

        if (!$this->useSocmed && !$this->useToken) {
            
            $validate = $this->validate();
        }

        if ($validate && !($notActive = $this->getUser()->not_active)) {
            
            if (Yii::$app->user->login($this->getUser(), $this->rememberMe ? 3600 * 24 * 30 : 0)) {

                $modelUser = User::find()
                    ->joinWith([
                        'userLevel',
                    ])
                    ->andWhere(['user.id' => Yii::$app->user->getIdentity()->id])
                    ->asArray()->one();

                $data['user_level']['id'] = $modelUser['userLevel']['id'];
                $data['user_level']['nama_level'] = $modelUser['userLevel']['nama_level'];
                $data['user_level']['is_super_admin'] = $modelUser['userLevel']['is_super_admin'];

                $userAkses = \core\models\UserAkses::find()
                    ->joinWith(['userLevel', 'userAppModule'])
                    ->andWhere(['user_akses.user_level_id' => $data['user_level']['id']])
                    ->asArray()->all();

                $data['user_level']['userAkses'] = $userAkses;

                Yii::$app->session->set('user_data', $data);

                return true;
            }
        } else {

            if ($notActive) {
                
                $this->addError('login_id', 'This user is not active');
            }

            return false;
        }
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
