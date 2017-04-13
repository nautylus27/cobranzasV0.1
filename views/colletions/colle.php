<div ng-cloak >
    <div style="height: 51px;padding-top: 10px;">
        <span style="font-size: 22px; margin-left: 16px; margin-top: 13px;">Nuevo Ingreso Cartera/Cobro</span>
    </div>
    <md-content>
        <md-tabs md-dynamic-height md-border-bottom>
            <md-tab label="cendente" >
                <md-content class="md-padding" style="background-color: #FFFFFF">
                    <div style="height: 30px;">
                        <i class="material-icons" style="color: #00BCD4">person_pin</i><span style="font-size: 15px;">Información del Cedente</span>
                    </div>
                    <div layout="row" layout-xs="column">
                        <div flex style="margin-right: 20px;">
                            <md-input-container class="md-block" flex-gt-sm >
                                <label>Tipo de Cendente </label>
                                <md-select name="type" ng-model="data.cedente" required>
                                    <md-option ng-repeat="parameter in parameters.data"  value={{parameter.id_donors}}>{{parameter.description_donors}}</md-option>
                                </md-select>
                            </md-input-container>
                        </div>
                        <div flex>
                            <md-input-container class="md-block" flex-gt-sm>
                                <label>Número de Identificación</label>
                                <input ng-model="data.identificationcedente" required>
                            </md-input-container>
                        </div>
                        <div flex>
                            <div class="text-center" style="color: #9c9c9c; margin-bottom: 7px;">Tipo de Identificación</div>
                            <md-radio-group ng-model="data.typeIdentificationcedente">
                                <md-radio-button value="cedula" class="md-primary" style="margin-left: 59px; float: left">Cedúla</md-radio-button>
                                <md-radio-button value="NIT" style="margin-left: 163px;">NIT</md-radio-button>
                            </md-radio-group>
                        </div>
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
                    <div style=" height: 30px;">
                        <i class="material-icons" style="color: #00BCD4">credit_card</i><span style="font-size: 15px;">Datos Bancarios</span>
                    </div>
                    <div layout="row" layout-xs="column">
                        <div flex style="margin-right: 20px;">
                            <md-input-container class="md-block" flex-gt-sm>
                                <label>Nro de cuenta para consignar los saldos recuperados</label>
                                <input ng-model="data.numberaccount">
                            </md-input-container>
                        </div>
                        <div flex >
                            <div class="text-center" style="color: #9c9c9c;margin-top: 23px; margin-bottom: 7px;">Tipo de Cuenta</div>
                            <md-radio-group ng-model="data.typeaccount">
                                <md-radio-button value="Ahorro" class="md-primary" style="margin-left: 106px;">Ahorro</md-radio-button>
                                <md-radio-button value="Corriente" style="margin-left: 106px;">Corriente</md-radio-button>
                            </md-radio-group>
                        </div>
                        <div flex>
                            <md-input-container class="md-block" flex-gt-sm>
                                <label>¿A cual banco pertenece la cuenta?</label>
                                <input ng-model="data.bank">
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
                    <md-content class="md-padding" style="background-color: #FFFFFF">
                        <div style="height: 30px;">
                            <i class="material-icons" style="color: #00BCD4">person_pin</i><span style="font-size: 15px;">Información del Acreedor</span>
                        </div>
                        <div layout="row" layout-xs="column" style="margin-bottom: -25px;">
                            <div flex style="margin-right: 20px;">
                                <md-input-container class="md-block" flex-gt-sm>
                                    <label>Clasificación</label>
                                    <md-select name="type" ng-model="data.clasification" required>
                                        <md-option ng-repeat="parameter in parameters.data"  value={{parameter.description_donors}}>{{parameter.description_donors}}</md-option>
                                    </md-select>
                                </md-input-container>
                            </div>
                            <div flex>
                                <md-input-container class="md-block" flex-gt-sm>
                                    <label>Número de Identificación</label>
                                    <input ng-model="data.identificationacre" required>
                                </md-input-container>
                            </div>
                            <div flex>
                                <div class="text-center" style="color: #9c9c9c; margin-bottom: 7px;">Tipo de Identificación</div>
                                <md-radio-group ng-model="data.typeIdentification">
                                    <md-radio-button value="cedula" class="md-primary" style="margin-left: 59px; float: left">Cedúla</md-radio-button>
                                    <md-radio-button value="NIT" style="margin-left: 163px;">NIT</md-radio-button>
                                </md-radio-group>
                            </div>
                        </div>
                        <div layout="row" layout-xs="column" style="margin-bottom: -25px;">
                            <div flex style="margin-right: 20px;">
                                <md-input-container class="md-block" flex-gt-sm>
                                    <label>Descripción del Acreedor</label>
                                    <input ng-model="data.nameacree" required>
                                </md-input-container>
                            </div>
                            <div flex>
                                <md-input-container class="md-block" flex-gt-sm>
                                    <label>Departamento</label>
                                    <md-select name="type" ng-model="data.departamentoacree" required>
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
                                    <input ng-model="data.residenciaacree" required>
                                </md-input-container>
                            </div>
                        </div>
                        <div layout="row" layout-xs="column" style="margin-bottom: -20px;">
                            <div flex>
                                <md-input-container class="md-block" flex-gt-sm>
                                    <label>Teléfono Fijo y/o Celular</label>
                                    <input ng-model="data.phoneacree" required >
                                </md-input-container>
                            </div>
                            <div flex style="margin-right: 20px; margin-left: 20px;">
                                <md-input-container class="md-block" flex-gt-sm>
                                    <label>Correo Electrónico Email</label>
                                    <input ng-model="data.emailacreer">
                                </md-input-container>
                            </div>
                            <div flex >
                                <md-input-container class="md-block" flex-gt-sm>
                                    <label>Vr Adeudado</label>
                                    <input ng-model="data.vradecuado">
                                </md-input-container>
                            </div>
                        </div>
                        <div layout="row" layout-xs="column" >
                            <div flex="20" class="md-block" flex-gt-sm>
                                <md-input-container>
                                    <label>Fecha Reporte</label>
                                    <md-datepicker ng-model="data.reportdate"></md-datepicker>
                                </md-input-container>
                            </div>
                            <div flex class="md-block" flex-gt-sm>
                                <div class="text-center" style="margin-bottom: 10px;">
                                    <span style="color: #9c9c9c;">Documentos Físicos que soportan el reporte *</span>
                                </div>

                                <div layout="row" layout-xs="column">
                                    <div flex>
                                        <md-checkbox ng-model="data.che" aria-label="Checkbox 1"></md-checkbox><span>Cheque</span>
                                    </div>
                                    <div flex>
                                        <md-checkbox ng-model="data.ce" aria-label="Checkbox 1"></md-checkbox><span>Comprobante de Egreso</span>
                                    </div>
                                    <div flex>
                                        <md-checkbox ng-model="data.cp" aria-label="Checkbox 1"></md-checkbox><span>Comprobante de Pago</span>
                                    </div>
                                </div>
                                <div layout="row" layout-xs="column">
                                    <div flex>
                                        <md-checkbox ng-model="data.fc" aria-label="Checkbox 1"></md-checkbox><span>Factura Cambiaria</span>
                                    </div>
                                    <div flex>
                                        <md-checkbox ng-model="data.lc" aria-label="Checkbox 1"></md-checkbox><span>Letra de Cambio</span>
                                    </div>
                                    <div flex>
                                        <md-checkbox ng-model="data.li" aria-label="Checkbox 1"></md-checkbox><span>Libranza</span>
                                    </div>
                                </div>
                                <div layout="row" layout-xs="column">
                                    <div flex>
                                        <md-checkbox ng-model="data.pa" aria-label="Checkbox 1"></md-checkbox><span>Pagaré</span>
                                    </div>
                                    <div flex>
                                        <md-checkbox ng-model="data.rc" aria-label="Checkbox 1"></md-checkbox><span>Recibo de Caja</span>
                                    </div>
                                    <div flex>
                                        <md-checkbox ng-model="data.rcb" aria-label="Checkbox 1"></md-checkbox><span>Recibo de Consignación Bancaria</span>
                                    </div>
                                </div>
                                <div layout="row" layout-xs="column" style="margin-bottom: -3px;">
                                    <div flex>
                                        <md-input-container class="md-block" flex-gt-sm>
                                            <label>Otro</label>
                                            <input ng-model="data.otro">
                                        </md-input-container>
                                    </div>
                                    <div flex>

                                    </div>
                                    <div flex>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </md-content>
                </md-content>
            </md-tab>
            <md-tab label="Datos para el Reporte a DATASERVIP">
                <md-content class="md-padding" style="background-color: #FFFFFF">
                    <div style="height: 30px;">
                        <i class="material-icons" style="color: #00BCD4">local_taxi</i><span style="font-size: 15px;">Información del Vehículo</span>
                    </div>
                    <div layout="row" layout-xs="column">
                        <div flex  style="margin-right: 20px;">
                            <md-input-container class="md-block" flex-gt-sm>
                                <label>Placa del Vehículo</label>
                                <input ng-model="data.placa_vehiculo">
                            </md-input-container>
                        </div>
                        <div flex style="margin-right: 20px;">
                            <md-input-container class="md-block" flex-gt-sm>
                                <label>Marca del Vehículo</label>
                                <input ng-model="data.marca_vehiculo">
                            </md-input-container>
                        </div>
                        <div flex>
                            <md-input-container class="md-block" flex-gt-sm>
                                <label>Empresa Afiliadora</label>
                                <input ng-model="data.empresa_afiliadora">
                            </md-input-container>
                        </div>
                    </div>
                    <div layout="row" layout-xs="column">
                        <div flex style="margin-right: 20px;">
                            <md-input-container class="md-block" flex-gt-sm>
                                <label>Motivo del Reporte</label>
                                <input ng-model="data.motivo_reporte">
                            </md-input-container>
                        </div>
                        <div flex>
                            <md-input-container>
                                <label>Fecha Reporte</label>
                                <md-datepicker ng-model="data.date_report_dataservip"></md-datepicker>
                            </md-input-container>
                        </div>
                        <div flex>
                        </div>
                    </div>
                </md-content>
            </md-tab>
            <md-tab label="Resumen">
                <md-content class="md-padding">
                    <div layout="row" layout-xs="column" style="margin-top: -6px">
                        <div flex>
                            <div><i class="material-icons" style="color: #00BCD4">person_pin</i><span>Informacion del Cedente</span></div>
                            <div style="margin-left: 40px;">
                                <div><span style="color: #9E9E9E">Tipo de cendente</span>: <span>{{data.cedente}}</span></div>
                                <div><span style="color: #9E9E9E">Número de Identificación</span>: <span>{{data.identificationcedente}}</span></div>
                                <div><span style="color: #9E9E9E">Tipo de Identificación</span>: <span>{{data.typeIdentificationcedente}}</span></div>
                                <div><span style="color: #9E9E9E">Nombre del reportante</span>: <span>{{data.name}}</span></div>
                                <div><span style="color: #9E9E9E">Departamento</span>: <span>{{data.departamento}}</span></div>
                                <div><span style="color: #9E9E9E">Ciudad de Residencia</span>: <span>{{data.residencia}}</span></div>
                                <div><span style="color: #9E9E9E">Teléfono Fijo y/o Celular</span>: <span>{{data.phone}}</span></div>
                                <div><span style="color: #9E9E9E">Correo Electrónico Email</span>: <span>{{data.email}}</span></div>
                            </div>
                        </div>
                        <div flex>
                            <div><i class="material-icons" style="color: #00BCD4">person_pin</i><span>Información del Acreedor</span></div>
                            <div style="margin-left: 40px;">
                                <div><span style="color: #9E9E9E">Clasificación</span><span>: {{data.clasification}}</span></div>
                                <div><span style="color: #9E9E9E">Número de Identificación</span><span>: {{data.identificationacre}}</span></div>
                                <div><span style="color: #9E9E9E">Tipo de Identificación</span><span>: {{data.typeIdentification}}</span></div>
                                <div><span style="color: #9E9E9E">Descripción del Acreedor</span><span>: {{data.nameacree}}</span></div>
                                <div><span style="color: #9E9E9E">Departamento</span><span>: {{data.departamentoacree}}</span></div>
                                <div><span style="color: #9E9E9E">Ciudad de Residencia</span><span>: {{data.residenciaacree}}</span></div>
                                <div><span style="color: #9E9E9E">Teléfono Fijo y/o Celular</span><span>: {{data.phoneacree}}</span></div>
                                <div><span style="color: #9E9E9E">Correo Electrónico Email</span><span>: {{data.emailacreer}}</span></div>
                                <div><span style="color: #9E9E9E">Vr Adeudado</span><span>: {{data.vradecuado}}</span></div>
                                <div><span style="color: #9E9E9E">Fecha Reporte</span><span>: {{data.reportdate}}</span></div>
                            </div>
                        </div>
                    </div>
                    <div layout="row" layout-xs="column">
                        <div flex>
                           <div><i class="material-icons" style="color: #00BCD4">credit_card</i><span>Datos Bancarios</span></div>
                            <div style="margin-left: 40px;">
                                <div><span style="color: #9E9E9E">Nro de cuenta para consignar los saldos recuperados</span><span>: {{data.numberaccount}}</span></div>
                                <div><span style="color: #9E9E9E">Tipo de cuenta</span><span>: {{data.typeaccount}}</span></div>
                                <div><span style="color: #9E9E9E">¿A cual banco pertenece la cuenta?</span><span>: {{data.bank}}</span></div>
                            </div>
                        </div>
                    </div>
                    <div layout="row" layout-xs="column" style="margin-top: 8px;">
                        <div flex>
                            <div><i class="material-icons" style="color: #00BCD4">local_taxi</i><span>Información del Vehículo</span></div>
                            <div style="margin-left: 40px;">
                                <div><span style="color: #9E9E9E">Placa del Vehículo</span><span>: {{data.placa_vehiculo}}</span></div>
                                <div><span style="color: #9E9E9E">Marca del Vehículo</span><span>: {{data.marca_vehiculo}}</span></div>
                                <div><span style="color: #9E9E9E">Empresa Afiliadora</span><span>: {{data.empresa_afiliadora}}</span></div>
                                <div><span style="color: #9E9E9E">Motivo del Reporte</span><span>: {{data.motivo_reporte}}</span></div>
                                <div><span style="color: #9E9E9E">fecha Reporte</span><span>: {{data.date_report_dataservip}}</span></div>
                            </div>
                        </div>
                        <div flex>
                            <div><i class="material-icons" style="color: #00BCD4">archive</i><span>Documentos Físicos que soportan el reporte *</span></div>
                            <div style="margin-left: 40px;">
                               
                            </div>
                        </div>
                    </div>
                    <md-dialog-actions layout="row" style="margin-top: -10px;">
                        <span flex></span>
                        <md-button ng-click="answer('not useful')" style="background-color: #E0E0E0">
                           cancelar
                        </md-button>
                        <md-button ng-click="saveNew()" style="background-color: #FFC107; color: #FFFFFF">
                            Guardar
                        </md-button>
                    </md-dialog-actions>
                </md-content>
            </md-tab>
        </md-tabs>
    </md-content>

</div>