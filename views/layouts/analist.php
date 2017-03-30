<?php

//
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
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body ng-app="collections" style="background-color: #fafafa;" ng-cloak >
        <?php $this->beginBody() ?>
        <div layout="row" style="position: fixed; width: 100%;">
            <div flex-gt-sm="100" flex="100">
                <md-content>
                    <md-toolbar class="md-hue-2">
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
            </div>
        </div>
        <div layout="row" ng-controller="newCollections">
            <div flex-gt-sm="20" flex="20" style="margin-right: -18px;">
                <div class="row" style="margin-top: 64px;">
                    <div class="col-md-2" style="width: 293px;">
                        <div class="page-container" ui-view>
                            <div class="sidebar-menu fixed">
                                <div class="sidebar-menu-inner ps-container" >
                                    <header class="logo-env ng-scope" >
                                        <div class="logo">
                                        </div>
                                    </header>
                                    <section class="sidebar-user-info ng-scope" >
                                        <div class="sidebar-user-info-inner">
                                            <a href="#/app/extra-profile" class="user-profile">
                                                <img src="../../imagen/customer-service.png" width="60" height="60" class="img-circle img-corona" alt="user-pic">

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
                                            </ul>
                                        </div>
                                    </section>
                                    <sidebar-menu ng-hide="menuHorizontalIzq" >
                                        <ul id="main-menu" class="main-menu ng-scope" >
                                            <li class="ng-scope has-sub expanded">
                                                <a href="#/app/dashboard" class="ng-scope">
                                                    <i ng-if="item.icon" class="linecons-cog"></i>
                                                    <span class="title ng-binding ng-scope">Panel Principal</span>
                                                </a>

                                                <ul  class="ng-scope" style="display: block;">
                                                    <li  class="ng-scope">
                                                        <a href="/colletions/index"  class="ng-scope">
                                                            <span class="title ng-binding ng-scope">Cartera</span>
                                                        </a>
                                                    </li>
                                                    <li  class="ng-scope">
                                                        <a href="#/app/dashboard-variant-1"  class="ng-scope">
                                                            <span class="title ng-binding ng-scope">Reportantes</span>
                                                        </a>
                                                    </li>
                                                    <li  class="ng-scope">
                                                        <a href="#/app/dashboard-variant-1"  class="ng-scope">
                                                            <span class="title ng-binding ng-scope">Acreedores</span>
                                                        </a>
                                                    </li>
                                                    <li  class="ng-scope">
                                                        <a href="#/app/dashboard-variant-1"  class="ng-scope">
                                                            <span class="title ng-binding ng-scope">Informes</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </sidebar-menu>
                                    <sidebar-menu ng-show="menuHorizontalIzq">
                                        <div style="padding-left: 10px;"><a href="javascripts:;"><i class="material-icons "  style="color: #FFC107;">reply</i> <md-tooltip md-direction="right"> Regresar al menu</md-tooltip>
                                            </a><span style="color: #FFFFFF; margin-left: 79px"> Registros</span></div>
                                        <ul  class="main-menu ng-scope">
                                            <li  class="ng-scope" ng-repeat="business in showCase" style="height: 40px; color: #FFFFFF">
                                                <a href="#/app/dashboard-variant-1"  class="ng-scope">
                                                    {{business.name_business| uppercase}}
                                                </a>
                                            </li>
                                        </ul>
                                    </sidebar-menu>
                                    <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 3px;"><div class="ps-scrollbar-x" style="left: 0px; width: 0px;"></div></div>
                                    <div class="ps-scrollbar-y-rail" style="top: 0px; height: 648px; right: 2px;"><div class="ps-scrollbar-y" style="top: 0px; height: 439px;"></div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div flex-gt-sm="95" flex="40">
                <?= $content ?>
                <toaster-container toaster-options="{'time-out': 3000}"></toaster-container>
            </div>
        </div>

        <?php $this->endBody() ?>
    </body>


</html>
<?php $this->endPage() ?>
