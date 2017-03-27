<div layout="row" style="padding-top: 10px; position: static; margin-top: 60px;">
    <div flex="70"  >
        <div style="height: 91px; margin-top: 42px; margin-left: 10px;">
            <div><span style="font-size: 26px;">Panel Principal</span></div>
            <div><span style="color: #BDBDBD; font-size: 13px;">Resumen de la informacion mas relevante sobre los periodos de cobranzas (Evolución Mensual de Cobranzas)</span></div>
        </div>
        <div ng-controller="BarCtrl" class="md-whiteframe-6dp">
            <canvas id="bar" class="chart chart-bar" chart-data="data" chart-labels="labels" width="400" style="width: 500px; height: 400px;" > chart-series="series"
            </canvas>
        </div>
    </div>
    <div flex hide-sm hide-xs ng-controller="BaseCtrl" style="margin-top: 135px;">
        <div style="padding-left:10px; padding-right: 10px;" >
            <canvas id="base" class="chart-base" chart-type="type"
                    chart-data="data" chart-labels="labels" >
            </canvas> 
        </div>
    </div>
</div>
<div layout="row"  ng-controller="countPay" style="margin-top: 30px;" >
    <div flex="" class="text-center">
        <div layout="row" layout-xs="column">
            <div flex>
                <div>Valor Total a Pagar</div>
                <span ng-count-to="{{countTo}}" value="{{countFrom}}" duration="4" filter="currency" params="$" style="font-size: 27px; "></span>
            </div>
            <div flex>
                <div style="text-align: center;">
                    <div layout="row" layout-xs="column">
                        <div flex style="color: #00BCD4;">
                             <div><span>No Vencidas</span></div>
                             <span ng-count-to="{{countToendtnovencidas}}" value="{{countFromstartnovencidas}}" duration="4" filter="currency" params="$" style="font-size: 27px;" ></span>
                        </div>
                        <div flex style="color: #F44336;">
                            <div><span>Vencidas</span></div>
                            <span ng-count-to="{{countToendtvencidas}}" value="{{countFromstartvencidas}}" duration="4" filter="currency" params="$" style="font-size: 27px;" ></span>
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
            </div>
        </div>
    </div>
    <div flex class="text-center" ng-controller="actualizarInformacion">
        <div><span style="font-size: 20px; margin-left: 262px;">Distribución según el plazo de cobranzas</span></div>
        <div><md-button class="md-primary md-raised" ng-click="info();" style="background-color: #FFC107; margin-left: 270px;"  >Actualizar Información</md-button></div>
    </div>
</div>








<!--<div class="row" style="margin-top: 85px;">
    <div><span style="font-size: 20px; margin-left: 17px;">Panel Principal</span></div>
    <div ng-controller="BarCtrl">
        <div layout="row" layout-xs="column" style="margin-left: 16px; margin-top: 20px;">
            <div flex="70">
                <canvas id="bar" class="chart chart-bar" chart-data="data" chart-labels="labels" width="400" style="width: 500px; height: 400px;" > chart-series="series"
                </canvas>
            </div>
            <div flex>
                I'm below on mobile, and to the right on larger devices.
            </div>
        </div>

    </div>
</div>-->





