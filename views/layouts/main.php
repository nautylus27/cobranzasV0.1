<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body ng-app="collections" style="background-color: #fafafa;" ng-cloak >
        <?php $this->beginBody() ?>

        <div class="wrap" >
            <md-content>
                <md-toolbar class="md-hue-2">
                    <!--#455272 color opcional para la barra-->
                    <div class="md-toolbar-tools" style="background-color: #0b0a0f;">

                        <md-button class="md-icon-button" aria-label="Settings" ng-disabled="true">
                            <i class="material-icons color-icono-white">monetization_on</i>
                        </md-button>
                        <h2 flex md-truncate style="margin-top: 10px;">Cobranzas</h2>
                        <div class="md-menu-demo md-whiteframe-6dp" ng-controller="BasicDemoCtrl as ctrl" ng-cloak>
                            <div class="menu-demo-container" layout-align="center center" layout="column" >
                                <md-menu>
                                    <md-button aria-label="Open phone interactions menu" class="md-icon-button" ng-click="ctrl.openMenu($mdMenu, $event)">
                                        <i class="material-icons" style="color: #FFC107">power_settings_new</i>
                                    </md-button>
                                    <md-menu-content width="4" style="margin-top: 41px; height: 350px;">
                                        <form ng-submit="submit()" ng-controller="login">
                                            <md-menu-item>
                                                <span style="text-align: center;background-color: #ffad08;height: 36px;padding: 10px;margin-left: 4px;margin-right: 4px;margin-top: -6px;color: #fff;">Iniciar Sesion</span>
                                            </md-menu-item>
                                            <md-menu-item>
                                                <div>
                                                    <md-input-container class="md-block" flex-gt-sm>
                                                        <label>Nombre de usuario</label>
                                                        <input type="text" ng-model="data.username">
                                                    </md-input-container>                                                     <!--<input type="text" placeholder="Usuario O Correo">-->
                                                </div>
                                            </md-menu-item >
                                            <md-menu-item style="margin-top: 30px;">
                                                <div>
                                                    <md-input-container class="md-block" flex-gt-sm>
                                                        <label>Contraseña</label>
                                                        <input type="password" ng-model="data.password">
                                                    </md-input-container>                                                     <!--<input type="text" placeholder="Usuario O Correo">-->
                                                </div>
                                            </md-menu-item >
                                            <md-menu-item style="margin-top: 38px;" class="md-in-menu-bar">
                                                <div style="text-align: center">
                                                    <button class="btn" style="background-color: #00BCD4; color: #FFFFFF; width: 250px;"  role="menuitem">Ingresar</button>
                                                </div>
                                            </md-menu-item>
                                            <md-menu-item  class="md-in-menu-bar" style="margin-top: -22px; margin-left: 6px;">
                                                <div>
                                                    <a href="javascripts:;" ng-click="" style="color:#FFAB00; font-size: 12px;">¿Olvido su contraseña?</a>
                                                </div>
                                       
                                            </md-menu-item>
                                        </form>
                                    </md-menu-content>
                                </md-menu>
                            </div>
                        </div>
                    </div>
                </md-toolbar>
            </md-content>
            <div class="container" style="width: 100%; padding: 0px !important;">
                <?= $content ?>
                <toaster-container toaster-options="{'time-out': 3000}"></toaster-container>
            </div>
        </div>
        <footer class="footer color-footer-main-black" style="background-color: #757575 !important;">
            <div class="container color-white" >
                <p class="text-center" style="font-size: 12px;">&copy; COBRANZAS - DATASERVIP <?= date('Y') ?></p>
            </div>
        </footer>

        <?php $this->endBody() ?>
    </body>


</html>
<?php $this->endPage() ?>
