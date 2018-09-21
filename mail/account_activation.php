<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $email */
/* @var $full_name */
/* @var $user core\models\User */

$activationLink = Yii::$app->urlManager->createAbsoluteUrl(['site/activate-account', 'token' => $user->account_activation_token]); ?>

<div class="activation">
    <p>Hello <?= $full_name ?>,</p>

    <p>You've been registered with your email <?= $email ?></p>

    <p>Please follow the link below to activate your <?= Yii::$app->name ?> Account:</p>

    <p><?= Html::a(Html::encode($activationLink), $activationLink) ?></p>
</div>