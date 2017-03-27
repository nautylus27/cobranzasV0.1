<div layout="row"  layout-xs="column"style="padding-top: 10px; position: static; margin-top: 60px;">
    <div flex style="margin-right: 20px;">
        <md-input-container class="md-block" flex-gt-sm >
            <label>Tipo de Cendente </label>
            <md-select name="type" ng-model="data.cedente" ng-change="typeR(data.cedente)">
                <md-option ng-repeat="parameter in parameters.data"    value={{parameter.id_donors}}>{{parameter.description_donors}}</md-option>
            </md-select>
        </md-input-container>
    </div>
</div>


<!--<div layout="row" style="padding-top: 10px; position: static; margin-top: 60px;" >
    <div  class="md-whiteframe-6dp" >
        <div style="height: 91px; margin-top: 42px; margin-left: 10px;">
            <div><span style="font-size: 26px;">Detalles de la cartera de cobro</span></div>
            <div><span style="color: #BDBDBD; font-size: 13px;">Formulario para ingresar la información de los Cedentes y relacionarlos con sus respectivos Acreedores </span></div>
        </div>
        <div>
            <table datatable="ng" class="row-border hover">
                <thead>
                    <tr>
                        <th>Tipo de Cedente</th>
                        <th>Nombre</th>
                        <th>Teléfono</th>
                        <th>Correo</th>
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
                        <td>{{myInfo.cedentes.assignor}}</td>
                        <td>{{myInfo.cedentes.name_assignor}}</td>
                        <td>{{myInfo.cedentes.phone_assignor}}</td>
                        <td>{{myInfo.cedentes.email_assignor}}</td>
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
