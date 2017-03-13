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
                                        <i class="material-icons" style="color: #00E5FF">power_settings_new</i>
                                    </md-button>
                                    <md-menu-content width="4" style="margin-top: 59px; height: 350px;">
                                        <form ng-submit="submit()" ng-controller="login">
                                            <md-menu-item>

                                            </md-menu-item>
                                            <md-menu-item>
                                                <div>
                                                    <i class="material-icons">settings</i> Configuración
                                                </div>
                                            </md-menu-item >
                                            <md-menu-item style="margin-top: 30px;">
                                            </md-menu-item >
                                            <md-menu-item style="margin-top: 38px;" class="md-in-menu-bar">

                                                <div style="text-align: center">
                                                    <span style="color:#BDBDBD">Cerrar Sesión</span><br>
                                                    <a href="javascripts:;" ng-click=""><i class="material-icons" style="color: #9E9E9E">power_settings_new</i></a>
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
            <div class="row" style="margin-top: 64px;">
                <div class="col-md-2" style="width: 293px;">
                    <div class="page-container" ui-view>
                        <div class="sidebar-menu fixed">
                            <div class="sidebar-menu-inner ps-container">
                                <header class="logo-env ng-scope" >
                                    <div class="logo">
                                        <!--                                        <a href="hr/" class="logo-expanded">
                                                                                    <span>HR</span>
                                                                                </a>-->
                                    </div>
                                    <!--                                    <div class="settings-icon">
                                                                            <a href="" ng-click="settingsPaneToggle()">
                                                                                <i class="material-icons" style="color: #FF9800">settings</i>
                                                                            </a>
                                                                        </div>-->
                                </header>
                                <section class="sidebar-user-info ng-scope" >
                                    <div class="sidebar-user-info-inner">
                                        <a href="#/app/extra-profile" class="user-profile">
                                            <img src="http://themes.laborator.co/xenon/assets/images/user-4.png" width="60" height="60" class="img-circle img-corona" alt="user-pic">

                                            <span>
                                                <strong>Israel David</strong>
                                                Administrador
                                            </span>
                                        </a>

                                        <ul class="user-links list-unstyled">
                                            <li>
                                                <a href="#/app/extra-profile" title="Editar Perfil">
                                                    <i class="linecons-user"></i>
                                                    Perfil
                                                </a>
                                            </li>
                                            <li class="logout-link">
                                                <a href="#/login" title="Home">
                                                    <i class="fa-home" style="color:#00BCD4"></i>
                                                </a>
                                            </li>
                                            <!--                                            <li class="logout-link">
                                                                                            <a href="#/login" title="Conectado">
                                                                                                <i class="fa-check-circle-o" style="color:#4CAF50"></i>
                                                                                            </a>
                                                                                        </li>-->
                                        </ul>
                                    </div>
                                </section>
                                <sidebar-menu>
                                    <ul id="main-menu" class="main-menu ng-scope" >
                                        <li class="ng-scope has-sub ">
                                            <a href="#/app/dashboard" class="ng-scope">
                                                <i ng-if="item.icon" class="linecons-cog"></i>
                                                <span class="title ng-binding ng-scope">Profesores</span>
                                            </a>

                                            <ul  class="ng-scope">
                                                <li  class="ng-scope">
                                                    <a href="#/app/dashboard-variant-1"  class="ng-scope">
                                                        <span class="title ng-binding ng-scope">Horas</span>
                                                    </a>
                                                </li>
                                                <li  class="ng-scope">
                                                    <a href="#/app/dashboard-variant-1"  class="ng-scope">
                                                        <span class="title ng-binding ng-scope">Minutos</span>
                                                    </a>
                                                </li>
                                                <li  class="ng-scope">
                                                    <a href="#/app/dashboard-variant-1"  class="ng-scope">
                                                        <span class="title ng-binding ng-scope">Rating</span>
                                                    </a>
                                                </li>
                                                <li  class="ng-scope">
                                                    <a href="#/app/dashboard-variant-1"  class="ng-scope">
                                                        <span class="title ng-binding ng-scope">Ganancia</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="ng-scope has-sub ">
                                            <a href="#/app/dashboard" class="ng-scope">
                                                <i ng-if="item.icon" class="linecons-cog"></i>
                                                <span class="title ng-binding ng-scope">Clientes</span>
                                            </a>

                                            <ul  class="ng-scope">
                                                <li  class="ng-scope">
                                                    <a href="#/app/dashboard-variant-1"  class="ng-scope">
                                                        <span class="title ng-binding ng-scope">Reservar Horarios</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="ng-scope has-sub ">
                                            <a href="#/app/dashboard" class="ng-scope">
                                                <i ng-if="item.icon" class="linecons-cog"></i>
                                                <span class="title ng-binding ng-scope">Materias</span>
                                            </a>

                                            <ul  class="ng-scope">
                                                <li  class="ng-scope">
                                                    <a href="#/app/dashboard-variant-1"  class="ng-scope">
                                                        <span class="title ng-binding ng-scope">Estadisticas</span>
                                                    </a>
                                                </li>
                                                <li  class="ng-scope">
                                                    <a href="#/app/dashboard-variant-1"  class="ng-scope">
                                                        <span class="title ng-binding ng-scope">Nuevas Materias</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </sidebar-menu>
                                <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 3px;"><div class="ps-scrollbar-x" style="left: 0px; width: 0px;"></div></div>
                                <div class="ps-scrollbar-y-rail" style="top: 0px; height: 648px; right: 2px;"><div class="ps-scrollbar-y" style="top: 0px; height: 439px;"></div></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" container" style="margin-top: 10px; width: 1048px; margin-left: 300px; background: #E0E0E0" >
                    <?= $content; ?>
                </div>
            </div>






            <!--            <div class="container" style="width: 100%; padding: 0px !important;">
                            <? $content ?>
                            <toaster-container toaster-options="{'time-out': 3000}"></toaster-container>
                        </div>-->
        </div>
        <footer class="footer color-footer-main-black">
            <div class="container color-white">
                <p class="text-center" style="font-size: 12px;">&copy; COBRANZAS - DATASERVIP <?= date('Y') ?></p>
            </div>
        </footer>

        <?php $this->endBody() ?>
    </body>


</html>
<?php $this->endPage() ?>
