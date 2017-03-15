<div ng-cloak ng-controller="modalNuevo" >
    <md-content>
        <md-tabs md-dynamic-height md-border-bottom>
            <md-tab label="cendente" >
                <md-content class="md-padding" style="background-color: #FFFFFF">
                    <div style="background-color: #EEEEEE; height: 30px;">
                        <span style="font-size: 20px;">Información del Cedente</span>
                    </div>
                    <div layout="row" layout-xs="column">
                        <div flex class="md-block" flex-gt-sm>
                            <md-input-container flex="80" >
                                <label>Tipo de Cendente </label>
                                <md-select name="type" ng-model="data.cedente" required>
                                    <md-option ng-repeat="parameter in parameters.data"  value={{parameter.id_donors}}>{{parameter.description_donors}}</md-option>
                                </md-select>
                            </md-input-container>
                        </div>
                        <div flex></div>
                        <div flex></div>
                    </div>
                    <div layout="row" layout-xs="column">
                        <div flex style="margin-right: 20px;">
                            <md-input-container class="md-block" flex-gt-sm>
                                <label>Descripción del Reportante</label>
                                <input ng-model="data.name" required>
                            </md-input-container>
                        </div>
                        <div flex>
                            <md-input-container class="md-block" flex-gt-sm>
                                <label>Departamento</label>
                                <md-select name="type" ng-model="data.departamento" required>
                                    <md-option value="amazonas">Amazonas</md-option>
                                    <md-option value="antioquia">Antioquia</md-option>
                                    <md-option value="Arauca">Arauca</md-option>
                                    <md-option value="atlantico">Atlántico</md-option>
                                    <md-option value="bogota">Bogotá</md-option>
                                    <md-option value="bolivar">Bolívar</md-option>
                                    <md-option value="boyaca">Boyacá</md-option>
                                    <md-option value="caldas">Caldas</md-option>
                                    <md-option value="caqueta">Caquetá</md-option>
                                    <md-option value="casanare">Casanare</md-option>
                                    <md-option value="cauca">Cauca</md-option>
                                    <md-option value="cesar">Cesar</md-option>
                                    <md-option value="choco">Chocó</md-option>
                                    <md-option value="cordoba">Córdoba</md-option>
                                    <md-option value="cundinamarca">Cundinamarca</md-option>
                                    <md-option value="guainia">Guainía</md-option>
                                    <md-option value="guaviare">Guaviare</md-option>
                                    <md-option value="huila">Huila</md-option>
                                    <md-option value="la_guajira">La Guajira</md-option>
                                    <md-option value="magdalena">Magdalena</md-option>
                                    <md-option value="meta">Meta</md-option>
                                    <md-option value="narino">Nariño</md-option>
                                    <md-option value="norte_de_santander">Norte de Santander</md-option>
                                    <md-option value="putumayo">Putumayo</md-option>
                                    <md-option value="quindio">Quindío</md-option>
                                    <md-option value="risaralda">Risaralda</md-option>
                                    <md-option value="san_andres_y_providencia">San Andrés y Providencia</md-option>
                                    <md-option value="santander">Santander</md-option>
                                    <md-option value="sucre">Sucre</md-option>
                                    <md-option value="tolima">Tolima</md-option>
                                    <md-option value="vale_del_cauca">Valle del Cauca</md-option>
                                    <md-option value="vaupes">Vaupés</md-option>
                                    <md-option value="vichada">Vichada</md-option>
                                </md-select>
                            </md-input-container>
                        </div>
                        <div flex style="margin-left: 20px;">
                            <md-input-container class="md-block" flex-gt-sm>
                                <label>Ciudad de Residencia</label>
                                <input ng-model="data.residencia" required>
                            </md-input-container>
                        </div>
                    </div>
                    <div layout="row" layout-xs="column">
                        <div flex>
                            <md-input-container class="md-block" flex-gt-sm>
                                <label>Teléfono Fijo y/o Celular</label>
                                <input ng-model="data.phone" required >
                            </md-input-container>
                        </div>
                        <div flex style="margin-right: 20px; margin-left: 20px;">
                            <md-input-container class="md-block" flex-gt-sm>
                                <label>Correo Electrónico Email</label>
                                <input ng-model="data.email">
                            </md-input-container>
                        </div>
                        <div flex style="margin-right: 20px;">
                            
                        </div>
                    </div>
                    <div style="background-color: #EEEEEE; height: 30px;">
                        <span style="font-size: 20px;">Datos Bancarios</span>
                    </div>
                    <div layout="row" layout-xs="column">
                        <div flex style="margin-right: 20px;">
                            <md-input-container class="md-block" flex-gt-sm>
                                <label>Nro de cuenta para consignar los saldos recuperados</label>
                                <input ng-model="data.residencia">
                            </md-input-container>
                        </div>
                        <div flex >
                            <div class="text-center" style="color: #9c9c9c;margin-top: 23px; margin-bottom: 7px;">Tipo de Cuenta</div>
                            <md-radio-group ng-model="data.group1">
                                <md-radio-button value="Ahorro" class="md-primary" style="margin-left: 106px;">Ahorro</md-radio-button>
                                <md-radio-button value="Corriente" style="margin-left: 106px;">Corriente</md-radio-button>
                            </md-radio-group>
                        </div>
                        <div flex>
                            <md-input-container class="md-block" flex-gt-sm>
                                <label>¿A cual banco pertenece la cuenta?</label>
                                <input ng-model="data.residencia">
                            </md-input-container>
                        </div>
                    </div>
                    <div>
                        <div></div>
                    </div>
                </md-content>
            </md-tab>
            <md-tab label="Acreedor">
                <md-content class="md-padding">
                </md-content>
            </md-tab>
            <md-tab label="Datos para el Reporte a DATASERVIP">
                <md-content class="md-padding">
                </md-content>
            </md-tab>
        </md-tabs>
    </md-content>
    <md-dialog-actions layout="row">

        <span flex></span>
        <md-button ng-click="answer('not useful')">
            Not Useful
        </md-button>
        <md-button ng-click="answer('useful')">
            Useful
        </md-button>
    </md-dialog-actions>
</div>