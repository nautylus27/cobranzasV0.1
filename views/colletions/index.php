<div layout="row" style="padding-top: 10px;">
    <div flex="70" class="md-whiteframe-6dp" >
        <div style="height: 91px; margin-top: 42px; margin-left: 10px;">
            <div><span style="font-size: 26px;">Detalles de la cartera de cobro</span></div>
            <div><span style="color: #BDBDBD; font-size: 13px;">Formulario para ingresar la información de los Cedentes y relacionarlos con sus respectivos Acreedores </span></div>
        </div>
        <div ng-controller="AngularWayCtrl as showCase">
            <table datatable="ng" class="row-border hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>FirstName</th>
                        <th>LastName</th>
                    </tr>
                </thead>
                <tbody>
                    <tr ng-repeat="person in showCase">
                        <td>{{ person.id}}</td>
                        <td>{{ person.firstName}}</td>
                        <td>{{ person.lastName}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div flex hide-sm hide-xs>
        <div style="padding-left:10px; padding-right: 10px;" ng-controller="countPay">
            <div style="background-color: #E0E0E0; height: 183px;"  class="md-whiteframe-6dp">
                <div style="background-color: rgba(158, 158, 158, 0.25); height: 30px;"></div>
                <div class="text-center"><i class="material-icons text-center" style="font-size: 130px; color: #66BB6A; margin-top: 89px;">attach_money</i></div>
            </div>  
            <div style="background-color: #FAFAFA; height: 515px;"  class="md-whiteframe-6dp">
                <div style="text-align: center; font-size: 27px;">
                    <div style="padding-top:90px">
                        <span >Valor a cobrar</span>
                    </div>
                </div>
                <div style="text-align: center"><span ng-count-to="{{countTo}}" value="{{countFrom}}" duration="4" filter="currency" params="$" style="font-size: 27px; "></span></div>
                <!--                <div >
                
                                    <div layout="row" layout-xs="column">
                                        <div flex>
                                            <span style="color: #4CAF50">No Vencidas</span>
                                        </div>
                                        <div flex>
                                            <span ng-count-to="{{countToN}}" value="{{countFromN}}" duration="4" filter="currency" params="$" ></span>
                                        </div>
                                        <div flex>
                                            <span ng-count-to="{{countToNp}}" value="{{countFromNp}}" duration="4"  ></span>
                                        </div>
                                    </div>
                                    <div layout="row" layout-xs="column">
                                        <div flex>
                                           <span style="color: #F44336">Vencidas</span>
                                        </div>
                                        <div flex>
                                            <span ng-count-to="{{countToV}}" value="{{countFromV}}" duration="4" filter="number"></span>
                                        </div>
                                        <div flex>
                                            <span ng-count-to="{{countToVp}}" value="{{countFromVp}}" duration="4" ></span>
                                        </div>
                                    </div>
                
                                </div>-->
            </div>
        </div>
    </div>
</div>

