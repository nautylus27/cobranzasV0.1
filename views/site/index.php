<?php
/* @var $this yii\web\View */

$this->title = 'Cobranzas Dataservip';
?>
<div>
    <div class="text-left color-white ripple-effect md-whiteframe-6dp" style="background-image: url(../../imagen/backgroud-montain.jpg); background-size: 100% 120%; height: 380px;">
        <div style="padding-top: 168px; font-size: 37px; margin-left: 20px">Sistema de control y seguimiento</div>
        <div style=" margin-left: 27px">para la cartera moroza del transporte publico</div>
        <div style=" margin-left: 20px; margin-top: 10px;"> <md-button class="md-primary md-raised"  style="background-color: #00BCD4" >Leer Más</md-button></div>
    </div>
</div>
<div>
    <div style=" height: 256px;">
        <div ng-controller="AppCtrl" class="sample" layout="column" style="padding-top: 20px;" ng-cloak>
            <md-content class="md-padding ">
                <md-tabs md-selected="selectedIndex" md-border-bottom md-autoselect>
                    <md-tab ng-repeat="tab in tabs"
                            ng-disabled="tab.disabled"
                            label="{{tab.title}}">
                        <div class="demo-tab tab{{$index % 4}}" style="padding: 25px; text-align: center;">
                            <div ng-bind="tab.content"></div>
                            <br/>
                            <md-button class="md-primary md-raised"  style="background-color: #ffad08" >Leer Más</md-button>
                        </div>
                    </md-tab>
                </md-tabs>
            </md-content>
        </div>
    </div>
</div>



<div layout="row" layout-xs="column" class="layout-xs-column layout-row" style="padding-left: 30px; padding-right: 30px; padding-bottom: 30px;">

    <div flex="" style="padding: 10px;" >
        <div class="md-whiteframe-6dp" style="margin-left: auto;margin-right: auto; width: 85%">
            <div style="background-color: #E0E0E0; height: 90px; text-align: center; "></div>
            <div style=" background-color: #F5F5F5">
                <div style="text-align: center">
                    <i class="material-icons" style="font-size: 96px; margin-top: -48px; color: #00BCD4;">visibility</i>
                </div>
                <div style="text-align: center;margin-top: -15px;margin-bottom: 23px;">
                    <span style="font-size: 21px;">Visión</span>
                </div>
                <div style="text-align: center; background-color: #F5F5F5">
                    <span style="color: #3c2e3d;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris lacinia purus a tortor hendrerit, vel tristique turpis rhoncus. Fusce mattis eget massa sit amet scelerisque. Curabitur fringilla purus at mi vestibulum, id fringilla ligula vehicula.</span>
                </div>
            </div>
            <div style="background-color: #EEEEEE; height: 10px;"></div>
        </div>
    </div>
    <div flex="" style="padding: 10px;">
        <div class="md-whiteframe-6dp" style="margin-left: auto;margin-right: auto; width: 85%">
            <div style="background-color: #E0E0E0; height: 90px; text-align: center; "></div>
            <div style=" background-color: #F5F5F5">
                <div style="text-align: center">
                    <i class="material-icons" style="font-size: 96px; margin-top: -48px; color: #00BCD4;">public</i>
                </div>
                <div style="text-align: center;margin-top: -15px;margin-bottom: 23px;">
                    <span style="font-size: 21px;">Misión</span>
                </div>
                <div style="text-align: center; background-color: #F5F5F5">
                    <span style="color: #3c2e3d;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris lacinia purus a tortor hendrerit, vel tristique turpis rhoncus. Fusce mattis eget massa sit amet scelerisque. Curabitur fringilla purus at mi vestibulum, id fringilla ligula vehicula.</span>
                </div>
            </div>
            <div style="background-color: #EEEEEE; height: 10px;"></div>
        </div>
    </div>
    <div flex="" style="padding: 10px;">
        <div class="md-whiteframe-6dp" style="margin-left: auto;margin-right: auto; width: 85%">
            <div style="background-color: #E0E0E0; height: 90px; text-align: center; "></div>
            <div style=" background-color: #F5F5F5">
                <div style="text-align: center">
                    <i class="material-icons" style="font-size: 96px; margin-top: -48px; color: #00BCD4;">my_location</i>
                </div>
                <div style="text-align: center;margin-top: -15px;margin-bottom: 23px;">
                    <span style="font-size: 21px;">Objectivos</span>
                </div>
                <div style="text-align: center; background-color: #F5F5F5">
                    <span style="color: #3c2e3d;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris lacinia purus a tortor hendrerit, vel tristique turpis rhoncus. Fusce mattis eget massa sit amet scelerisque. Curabitur fringilla purus at mi vestibulum, id fringilla ligula vehicula.</span>
                </div>
            </div>
            <div style="background-color: #EEEEEE; height: 10px;"></div>
        </div>
    </div>
</div>
<div class="ripple-effect" style="padding: 20px;">
    <div class="text-center">
        <div style="margin-bottom: 20px;">
            <span style="font-size: 30px;">¿Como Trabajamos?</span>
        </div>
    </div>
    <div class="row" style="text-align: center; padding-bottom: 80px;">
        <div class="col-sm-4">
            <div > 
                <div style="background-color: #9a8d97" class="md-whiteframe-6dp">
                    <img src="../../imagen/stats.png" style="width: 40px;">
                    <span style="color:#ffffff">Cobradores de campo</span>
                </div>
                <div style="padding: 10px;">
                    <span style="color:#333">A través de nuestra plataforma podrás comunicarte con el tutor mediante Chat, Pizarra Interactiva y las herramientas de audio, y enviar archivos con tus preguntas y tareas.</span>
                </div>
            </div>
            <div >
                <div style="margin-top: 13px;">
                    <img src="../../imagen/customer-service.png" style="width: 40px;">
                    <span style="color:#00bcd4">Gestores telefónicos</span>
                </div>
                <div style="padding: 10px;">
                    <span style="color:#333">Contamos con un equipo de tutores de alto nivel académico, con títulos universitarios en su respectiva área de enseñanza.</span>
                </div>
            </div>
            <div>
                <div style="margin-top: 13px;">
                    <img src="../../imagen/banker.png" style="width: 40px;">
                    <span style="color:#00bcd4">Negociadores</span>
                </div>
                <div style="padding: 10px;">
                    <span style="color:#333">Contamos con un equipo de tutores de alto nivel académico, con títulos universitarios en su respectiva área de enseñanza.</span>
                </div>
            </div>
        </div>
        <div class="col-sm-4" >
            <div style="margin-left: 33px">
                <img src="../../imagen/network-1.png" style="width: 300px;">
            </div>
        </div>
        <div class="col-sm-4">
            <div > 
                <div style="background-color: #9a8d97" class="md-whiteframe-6dp">
                    <img src="../../imagen/collaboration.png" style="width: 40px;">
                    <span style="color:#ffffff">Supervisores</span>
                </div>
                <div style="padding: 10px;">
                    <span style="color:#333">Mejora tus calificaciones e índice académico trabajando con el mejor equipo de tutores en las diversas áreas de conocimientos que ofrecemos.</span>
                </div>
            </div>
            <div>
                <div style="margin-top: 13px;">
                    <img src="../../imagen/hombre-de-negocios.png" style="width: 40px;">
                    <span style="color:#00bcd4">Abogados</span>
                </div>
                <div style="padding: 10px;">
                    <span style="color:#333">Nuestras sesiones de clase son individuales y se desarrollan entorno a los requerimientos planteados por el estudiante al inicio de la sesión.</span>
                </div>
            </div>
            <div>
                <div style="margin-top: 13px;">
                    <img src="../../imagen/maps-and-flags-1.png" style="width: 40px;">
                    <span style="color:#00bcd4">Agencias Externas</span>
                </div>
                <div style="padding: 10px;">
                    <span style="color:#333">Nuestras sesiones de clase son individuales y se desarrollan entorno a los requerimientos planteados por el estudiante al inicio de la sesión.</span>
                </div>
            </div>
        </div>
    </div>
</div>