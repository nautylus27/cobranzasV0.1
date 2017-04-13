<div layout="row" class="md-whiteframe-6dp " layout-xs="column" style="padding-top: 10px; position: static; margin-top: 65px; padding-right: 10px; padding-left: 10px; background-color: rgba(44, 46, 47, 0.75);height: 186px; margin-right: 2px;">
    <div flex layout="column" style="margin-left:10px;" >
        <div style="height: 91px; margin-top: 10px;">
            <div layout="row" layout-xs="column">
                <div flex>
                   <span style="font-size: 26px; color:#fafafa">Detalles de la cartera de cobro</span>
                </div>
                <div flex class="text-right">
                    <span style="color: #BDBDBD">Fecha (<?php echo date('Y-m-d'); ?>)</span>
                </div>
            </div>
            <div><span style="color: #BDBDBD; font-size: 13px;">Formulario para ingresar la información de los Cedentes y relacionarlos con sus respectivos Acreedores </span></div>
            <div>
                <div layout="row" layout-xs="column" style="margin-top: 43px;">
                    <div flex="30">
                        <md-input-container class="md-block" flex-gt-sm >
                            <label style="color: #FFFFFF">Tipo de Cendente </label>
                            <md-select name="type"  ng-model="data.cedente" ng-change="typeR(data.cedente)">
                                <md-option ng-repeat="parameter in parameters.data" value={{parameter.id_donors}}>{{parameter.description_donors}}</md-option>
                                <md-option value='all'>Todos</md-option>
                            </md-select>
                        </md-input-container>
                    </div>
                    <div flex class="text-center" style="margin-top: -26px;">
                        <md-input-container class="md-block" flex-gt-sm>
                            <div><span ng-count-to="{{countTo}}" value="{{countFrom}}" duration="4" filter="currency" params="$" style="color: #FFC107; font-size: 30px" ></span></div>
                            <div><span style="color:#fafafa;">Valor total a cobrar</span></div>
                        </md-input-container>
                    </div>
                    <div flex class="text-center" style="margin-top: -26px;">
                        <md-input-container class="md-block" flex-gt-sm>
                            <div><span ng-count-to="{{countToendtnovencidas}}" value="{{countFromstartnovencidas}}" duration="4" filter="currency" params="$" style="color:#FFC107; font-size: 30px" ></span></div>
                            <div><span style="color:#fafafa;">No Vencidas</span></div>
                        </md-input-container>
                    </div>
                    <div flex class="text-center" style="margin-top: -26px;">
                        <md-input-container class="md-block" flex-gt-sm>
                            <div><span ng-count-to="{{countToendtvencidas}}" value="{{countFromstartvencidas}}" duration="4" filter="currency" params="$" style="color: #FFC107; font-size: 30px"></span></div>
                            <div><span style="color:#fafafa;">Vencidas</span></div>
                        </md-input-container>
                    </div>
                    <div flex="10" class="text-right" style="margin-top: 31px;">
                        <md-button class="md-fab md-primary" aria-label="Use Android" style="background-color: #00BCD4" ng-click="showModal($event, ['/collections/modelnew'])">
                            <i class="material-icons" style=" font-size: 30px; padding-top: 10px;">note_add</i>
                        </md-button>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</div>
<div layout="row"  style="height:540px;" ng-cloak>
    <div flex layout="column" style="margin-left: 10px; margin-top: 60px;" ng-hide="loadtable" >
        <table datatable="ng" class="row-border hover" ng-cloak="" >
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Teléfono</th>
                    <th>Correo</th>
                    <th style="text-align: center">Valor Adeudado</th>
                    <th>Intereses</th>
                    <th>Total A Pagar</th>
                    <th>Fecha de Reporte</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                <tr ng-repeat="person in showCase" ng-init="myInfo = parJson(person.parameters)" >
                    <td>{{myInfo.acreedor.name_creditor}}</td>
                    <td>{{myInfo.acreedor.phone_creditor}}</td>
                    <td>{{myInfo.acreedor.email_creditor}}</td>
                    <td style="text-align: center; color: #FF0000">{{myInfo.acreedor.vr_adeudado|currency}}</td>
                    <td></td>
                    <td></td>
                    <td>{{myInfo.acreedor.date_report}}</td>
                    <td><i class="material-icons">assignment_ind</i></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div ng-show="loadtable" style="margin-left: 25%;margin-right: 25%;width: 735px; margin-top: 176px;">
        <div style="margin-left: 44%; margin-right: 50%; margin-bottom: 30px;"><md-progress-circular md-mode="indeterminate"></md-progress-circular></div>
        <hr>
        <div class="text-center"><span style="font-size: 20px; color:#FFC107">Cargando Data...</span></div>
     </div>
   
</div>



















<!--<div layout="row"  layout-xs="column"style="padding-top: 10px; position: static; margin-top: 60px; padding-right: 10px; padding-left: 10px;">
    <div flex layout="column" >
        <div style="height: 91px; margin-top: 10px;">
            <div><span style="font-size: 26px; color:#9E9E9E">Detalles de la cartera de cobro</span></div>
            <div><span style="color: #BDBDBD; font-size: 13px;">Formulario para ingresar la información de los Cedentes y relacionarlos con sus respectivos Acreedores </span></div>
        </div>
                <div>
                    <table datatable="ng" class="row-border hover">
                        <thead>
                            <tr>
        
                                <th>Nombre</th>
                                <th>Clasificación</th>
                                <th>Nombre</th>
                                <th>Teléfono</th>
                                <th>Correo</th>
                                <th>Valor Adeudado</th>
                                <th>Fecha de Reporte</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr ng-repeat="person in showCase" ng-init="myInfo = parJson(person.parameters)">
                                <td>{{myInfo.cedentes.name_assignor}}</td>
                                <td>{{myInfo.acreedor.clasification}}</td>
                                <td>{{myInfo.acreedor.name_creditor}}</td>
                                <td>{{myInfo.acreedor.phone_creditor}}</td>
                                <td>{{myInfo.acreedor.email_creditor}}</td>
                                <td>{{myInfo.acreedor.vr_adeudado}}</td>
                                <td>{{myInfo.acreedor.date_report}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
    </div>
    <div flex layout="column">
        <div layout="row" layout-xs="column" class="text-center">
            <div flex>
                <md-button class="md-fab md-primary" aria-label="Use Android" style="background-color: #00BCD4" ng-click="showModal($event, ['/collections/modelnew'])">
                    <i class="material-icons" style=" font-size: 30px; padding-top: 10px;">note_add</i>
                </md-button>
            </div>
        </div>
        <div layout="row" layout-xs="column" class="text-center">
            <div flex><span>Agregar Nuevo registro a la cartera</span></div>
        </div>
    </div>

        <div flex layout="column">
            <div style="background-image: url(../../imagen/montana.jpg); height: 183px;"  class="md-whiteframe-6dp">
                <div style="background-color: rgba(158, 158, 158, 0.25); height: 15px;"></div>
                <div class="text-center"><i class="material-icons text-center" style="font-size: 130px; color: #FFC107; margin-top: 89px;">unarchive</i></div>
            </div>  
            <div style="background-color: #FAFAFA; height: 527px;"  class="md-whiteframe-6dp">
                <div style="text-align: center; font-size: 27px;">
                    <div style="padding-top:90px">
                        <span>Valor a cobrar</span>
                    </div>
                </div>
                <div style="text-align: center">
                    <span ng-count-to="{{countTo}}" value="{{countFrom}}" duration="4" filter="currency" params="$" style="font-size: 27px; "></span>
                </div>
                <hr>
                <div style="text-align: center; margin-top: 60px;">
                    <div layout="row" layout-xs="column">
                        <div flex>
                            <span style="font-size: 20px;">No Vencidas</span>
                        </div>
                        <div flex>
                            <span style="font-size: 20px;">Vencidas</span>
                        </div>
                    </div>
                </div>
                <div style="text-align: center;">
                    <div layout="row" layout-xs="column">
                        <div flex style="color: #00BCD4;">
                            <span ng-count-to="{{countToendtnovencidas}}" value="{{countFromstartnovencidas}}" duration="4" filter="currency" params="$" ></span>
                        </div>
                        <div flex style="color: #F44336;">
                            <span ng-count-to="{{countToendtvencidas}}" value="{{countFromstartvencidas}}" duration="4" filter="currency" params="$" ></span>
                        </div>
                    </div>
                </div>
                <div style="text-align: center;">
                    <div layout="row" layout-xs="column">
                        <div flex style="color: #d0c0bd;">
                            (<span ng-count-to="{{countToendtnovencidasporcen}}" value="{{countFromstartnovencidasporcen}}" duration="4" filter="number" ></span>%)
                        </div>
                        <div flex style="color: #d0c0bd;">
                            (<span ng-count-to="{{countToendtvencidasporcen}}" value="{{countFromstartvencidasporcen}}" duration="4" filter="number" ></span>%)
                        </div>
                    </div>
                </div>
                <div style="text-align: center; margin-top: 104px;">
                    <div>
                        <md-button class="md-primary md-raised"  style="background-color: #00BCD4" ng-click="showModal($event, ['/collections/modelnew'])" >Nuevo Ingreso</md-button>
                    </div>
                </div>
            </div>
        </div>
</div>
<div layout="row" flex="20">
    <md-input-container class="md-block" flex-gt-sm >
        <label>Tipo de Cendente </label>
        <md-select name="type" ng-model="data.cedente" ng-change="typeR(data.cedente)">
            <md-option ng-repeat="parameter in parameters.data" value={{parameter.id_donors}}>{{parameter.description_donors}}</md-option>
            <md-option value='all'>Todos</md-option>
        </md-select>
    </md-input-container>
</div>
<div layout="row" style="margin-left: 10px;">
    <md-input-container class="md-block" flex-gt-sm >
        <label>Tipo de Cendente </label>
        <md-select name="type" ng-model="data.cedente" ng-change="typeR(data.cedente)">
            <md-option ng-repeat="parameter in parameters.data" value={{parameter.id_donors}}>{{parameter.description_donors}}</md-option>
            <md-option value='all'>Todos</md-option>
        </md-select>
    </md-input-container>
</div>


<div layout="row" style="padding-top: 10px; position: static; margin-top: 60px;" >
        <div>
            <table datatable="ng" class="row-border hover">
                <thead>
                    <tr>
                        
                        <th>Nombre</th>
                        <th>Clasificación</th>
                        <th>Nombre</th>
                        <th>Teléfono</th>
                        <th>Correo</th>
                        <th>Valor Adeudado</th>
                        <th>Fecha de Reporte</th>
                    </tr>
                </thead>
                <tbody>
                    <tr ng-repeat="person in showCase" ng-init="myInfo = parJson(person.parameters)">
                        <td>{{myInfo.cedentes.name_assignor}}</td>
                        <td>{{myInfo.acreedor.clasification}}</td>
                        <td>{{myInfo.acreedor.name_creditor}}</td>
                        <td>{{myInfo.acreedor.phone_creditor}}</td>
                        <td>{{myInfo.acreedor.email_creditor}}</td>
                        <td>{{myInfo.acreedor.vr_adeudado}}</td>
                        <td>{{myInfo.acreedor.date_report}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    <div flex hide-sm hide-xs>
        <div style="padding-left:10px; padding-right: 10px;">
            <div style="background-image: url(../../imagen/montana.jpg); height: 183px;"  class="md-whiteframe-6dp">
                <div style="background-color: rgba(158, 158, 158, 0.25); height: 15px;"></div>
                <div class="text-center"><i class="material-icons text-center" style="font-size: 130px; color: #FFC107; margin-top: 89px;">unarchive</i></div>
            </div>  
            <div style="background-color: #FAFAFA; height: 527px;"  class="md-whiteframe-6dp">
                <div style="text-align: center; font-size: 27px;">
                    <div style="padding-top:90px">
                        <span>Valor a cobrar</span>
                    </div>
                </div>
                <div style="text-align: center">
                    <span ng-count-to="{{countTo}}" value="{{countFrom}}" duration="4" filter="currency" params="$" style="font-size: 27px; "></span>
                </div>
                <hr>
                <div style="text-align: center; margin-top: 60px;">
                    <div layout="row" layout-xs="column">
                        <div flex>
                            <span style="font-size: 20px;">No Vencidas</span>
                        </div>
                        <div flex>
                            <span style="font-size: 20px;">Vencidas</span>
                        </div>
                    </div>
                </div>
                <div style="text-align: center;">
                    <div layout="row" layout-xs="column">
                        <div flex style="color: #00BCD4;">
                            <span ng-count-to="{{countToendtnovencidas}}" value="{{countFromstartnovencidas}}" duration="4" filter="currency" params="$" ></span>
                        </div>
                        <div flex style="color: #F44336;">
                            <span ng-count-to="{{countToendtvencidas}}" value="{{countFromstartvencidas}}" duration="4" filter="currency" params="$" ></span>
                        </div>
                    </div>
                </div>
                <div style="text-align: center;">
                    <div layout="row" layout-xs="column">
                        <div flex style="color: #d0c0bd;">
                            (<span ng-count-to="{{countToendtnovencidasporcen}}" value="{{countFromstartnovencidasporcen}}" duration="4" filter="number" ></span>%)
                        </div>
                        <div flex style="color: #d0c0bd;">
                            (<span ng-count-to="{{countToendtvencidasporcen}}" value="{{countFromstartvencidasporcen}}" duration="4" filter="number" ></span>%)
                        </div>
                    </div>
                </div>
                <div style="text-align: center; margin-top: 104px;">
                    <div>
                        <md-button class="md-primary md-raised"  style="background-color: #00BCD4" ng-click="showModal($event, ['/collections/modelnew'])" >Nuevo Ingreso</md-button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
-->
