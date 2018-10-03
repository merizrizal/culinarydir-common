<?php

/* @var $this yii\web\View */
/* @var $email frontend\controllers\SiteController */
/* @var $full_name frontend\controllers\SiteController */
/* @var $socmed frontend\controllers\SiteController */

?>
<div class="registration">
    <p>Hello <?= $full_name ?>,</p>

    <p>You've been successfully registered to <?= Yii::$app->name ?> with your <?= $socmed ?> Account.</p>

    <p>Your email : <?= $email ?></p>
</div>