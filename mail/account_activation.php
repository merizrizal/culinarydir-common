<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $email string */
/* @var $full_name string */
/* @var $userToken string */
/* @var $oassword string */
/* @var $isFromApi bool */
/* @var $isFromBackoffice bool */

$baseUrl = \Yii::$app->urlManager->createAbsoluteUrl('');
$baseUrl = !empty($isFromApi) ? str_replace('api/', '', $baseUrl) : $baseUrl;
$baseUrl = !empty($isFromBackoffice) ? str_replace('backoffice/', '', $baseUrl) : $baseUrl;

$activationLink = $baseUrl . 'site/activate-account?token=' . $userToken; ?>

<table class="body" style="margin:0;background:#f3f3f3;border-collapse:collapse;border-spacing:0;color:#0a0a0a;font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;height:100%;line-height:19px;margin:0;padding:0;text-align:left;vertical-align:top;width:100%">
    <tbody>
        <tr style="padding:0;text-align:left;vertical-align:top">
            <td align="center" class="center" style="-moz-hyphens:auto;-webkit-hyphens:auto;margin:0;border-collapse:collapse!important;color:#0a0a0a;font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;hyphens:auto;line-height:19px;margin:0;padding:0;text-align:left;vertical-align:top;word-wrap:break-word" valign="top">
                <center data-parsed="" style="min-width:580px;width:100%">
                    <table class="container float-center" style="margin:0 auto;background:#fefefe;background-color:#fff;border-collapse:collapse;border-spacing:0;float:none;margin:0 auto;padding:0;text-align:center;vertical-align:top;width:580px">
                        <tbody>
                            <tr style="padding:0;text-align:left;vertical-align:top">
                                <td style="-moz-hyphens:auto;-webkit-hyphens:auto;margin:0;border-collapse:collapse!important;color:#0a0a0a;font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;hyphens:auto;line-height:19px;margin:0;padding:0;text-align:left;vertical-align:top;word-wrap:break-word">
                                    <table class="row header" style="border-collapse:collapse;border-spacing:0;border-top:6px solid #e6e6e6;display:table;padding:0;position:relative;text-align:left;vertical-align:top;width:100%;background-color:#00001E">
                                        <tbody>
                                            <tr style="padding:0;text-align:left;vertical-align:top">
                                                <th class="small-12 large-12 columns first last" style="margin:0 auto;color:#0a0a0a;font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:19px;margin:0 auto;padding:0;padding-bottom:10px;padding-left:20px;padding-right:20px;text-align:left;width:560px">
                                                    <table style="border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%">
                                                        <tbody>
                                                            <tr style="padding:0;text-align:left;vertical-align:top">
                                                                <th style="margin:0;color:#0a0a0a;font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:19px;margin:0;padding:0;text-align:left">
                                                                    <table class="spacer" style="border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%">
                                                                        <tbody>
                                                                            <tr style="padding:0;text-align:left;vertical-align:top">
                                                                                <td height="10px" style="-moz-hyphens:auto;-webkit-hyphens:auto;margin:0;border-collapse:collapse!important;color:#0a0a0a;font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;font-size:10px;font-weight:400;hyphens:auto;line-height:10px;margin:0;padding:0;text-align:left;vertical-align:top;word-wrap:break-word">&nbsp;</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>

                                                                    <?= Html::img($baseUrl . 'media/img/asikmakan-logo.png', ['class' => 'img-responsive img-component', 'style' => 'height: 30px; margin-top: 5px;']); ?>

                                                                </th>
                                                                <th class="expander" style="margin:0;color:#0a0a0a;font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:19px;margin:0;padding:0!important;text-align:left;visibility:hidden;width:0">&nbsp;</th>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </th>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <table class="row" style="border-collapse:collapse;border-spacing:0;display:table;padding:0;position:relative;text-align:left;vertical-align:top;width:100%">
                                        <tbody>
                                            <tr style="padding:0;text-align:left;vertical-align:top">
                                                <th class="small-12 large-12 columns first last" style="margin:0 auto;color:#0a0a0a;font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:19px;margin:0 auto;padding:0;padding-bottom:10px;padding-left:20px;padding-right:20px;text-align:left;width:560px">
                                                    <table style="border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%">
                                                        <tbody>
                                                            <tr style="padding:0;text-align:left;vertical-align:top">
                                                                <th style="margin:0;color:#0a0a0a;font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:19px;margin:0;padding:0;text-align:left">
                                                                    <table class="spacer" style="border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%">
                                                                        <tbody>
                                                                            <tr style="padding:0;text-align:left;vertical-align:top">
                                                                                <td height="30px" style="-moz-hyphens:auto;-webkit-hyphens:auto;margin:0;border-collapse:collapse!important;color:#0a0a0a;font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;font-size:30px;font-weight:400;hyphens:auto;line-height:30px;margin:0;padding:0;text-align:left;vertical-align:top;word-wrap:break-word">&nbsp;</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>

                                                                    <p style="margin:0;margin-bottom:10px;color:#0a0a0a;font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:19px;margin:0;margin-bottom:10px;padding:0;text-align:left">
                                                                        Dear <?= $full_name ?>,
                                                                        <br />
                                                                        <br />
                                                                        Anda telah melakukan registrasi di <?= \Yii::$app->name ?> dengan email <?= $email ?>.

                                                                       	<?php
                                                                       	if (!empty($isFromBackoffice)): ?>

                                                                        <br />
                                                                        <br />
                                                                        Kata sandi anda adalah <b><?= $password ?></b>

                                                                        <?php
                                                                        endif; ?>

                                                                        <br />
                                                                        <br />
                                                                        Silahkan mengaktivasi akun anda dengan mengklik tombol di bawah ini:
                                                                        <br />
                                                                        <br />
                                                                        <?= Html::a(\Yii::t('app', 'Activate This Account'), $activationLink, ['style' => 'Margin:0;background:#e73b3b;border-radius:4px;color:#fff;display:block;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:700;line-height:24px;margin:0;padding:8px;text-align:center;text-decoration:none']) ?>
                                                                        <br /><br />
                                                                        Salam,<br />
																		Asikmakan
                                                                    </p>
                                                                </th>
                                                                <th class="expander" style="margin:0;color:#0a0a0a;font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:19px;margin:0;padding:0!important;text-align:left;visibility:hidden;width:0">&nbsp;</th>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </th>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <table class="row" style="border-collapse:collapse;border-spacing:0;display:table;padding:0;position:relative;text-align:left;vertical-align:top;width:100%">
                                        <tbody>
                                            <tr style="padding:0;text-align:left;vertical-align:top">
                                            </tr>
                                        </tbody>
                                    </table>

                                    <table class="spacer" style="border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top">
                                        <tbody>
                                            <tr style="padding:0;text-align:left;vertical-align:top">
                                                <td height="50px" style="-moz-hyphens:auto;-webkit-hyphens:auto;margin:0;border-collapse:collapse!important;color:#0a0a0a;font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;font-size:50px;font-weight:400;hyphens:auto;line-height:50px;margin:0;padding:0;text-align:left;vertical-align:top;word-wrap:break-word">&nbsp;</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <table align="center" class="wrapper bg-footer" style="background-color:#f3f3f3;border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%">
                        <tbody>
                            <tr style="padding:0;text-align:left;vertical-align:top">
                                <td class="wrapper-inner" style="-moz-hyphens:auto;-webkit-hyphens:auto;margin:0;border-collapse:collapse!important;color:#0a0a0a;font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;hyphens:auto;line-height:19px;margin:0;padding:0;text-align:left;vertical-align:top;word-wrap:break-word">
                                    <table class="row" style="border-collapse:collapse;border-spacing:0;display:table;padding:0;position:relative;text-align:left;vertical-align:top;width:100%">
                                        <tbody>
                                            <tr style="padding:0;text-align:left;vertical-align:top">
                                                <th class="small-12 large-12 columns first last" style="margin:0 auto;color:#0a0a0a;font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:19px;margin:0 auto;padding:0;padding-bottom:10px;padding-left:20px;padding-right:20px;text-align:left;width:560px">
                                                    <table style="border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%">
                                                        <tbody>
                                                            <tr style="padding:0;text-align:left;vertical-align:top">
                                                                <th style="margin:0;color:#0a0a0a;font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:19px;margin:0;padding:0;text-align:left">
                                                                    <table class="spacer" style="border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%">
                                                                        <tbody>
                                                                            <tr style="padding:0;text-align:left;vertical-align:top">
                                                                                <td height="30px" style="-moz-hyphens:auto;-webkit-hyphens:auto;margin:0;border-collapse:collapse!important;color:#0a0a0a;font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;font-size:30px;font-weight:400;hyphens:auto;line-height:30px;margin:0;padding:0;text-align:left;vertical-align:top;word-wrap:break-word">&nbsp;</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>

                                                                    <p class="text-center contact-text" style="margin:0;margin-bottom:10px;color:#777;font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;font-size:13px;font-weight:400;line-height:19px;margin:0;margin-bottom:10px;padding:0;text-align:center">
                                                                        Untuk informasi lebih lanjut, silahkan hubungi:
                                                                        <br />
                                                                        email: <a class="link" href="mailto:<?= \Yii::$app->params['supportEmail'] ?>" style="margin:0;color:#00B4ED;font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;text-decoration:none"><?= \Yii::$app->params['supportEmail'] ?></a> | phone: (+62) 813 8051 2707
                                                                        <br />
                                                                        &copy; <?= \Yii::$app->formatter->asDate(time(), 'yyyy') ?> <a href="<?= $baseUrl ?>">Asikmakan.com</a>, All Rights Reserved
                                                                    </p>
                                                                </th>
                                                                <th class="expander" style="margin:0;color:#0a0a0a;font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:19px;margin:0;padding:0!important;text-align:left;visibility:hidden;width:0">&nbsp;</th>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </th>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </center>
            </td>
        </tr>
    </tbody>
</table>