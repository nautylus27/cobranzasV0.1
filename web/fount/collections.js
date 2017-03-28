/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


var app = angular.module('collections', ['ngMaterial', 'toaster', 'datatables', 'ngCountTo', 'chart.js']);
app.config(function ($mdThemingProvider) {
    $mdThemingProvider.theme('default')
            .primaryPalette('blue-grey')
            .accentPalette('orange');
});





app.config(function ($mdIconProvider) {
    $mdIconProvider
            .iconSet("call", 'img/icons/sets/communication-icons.svg', 24)
            .iconSet("social", 'img/icons/sets/social-icons.svg', 24);
})
app.controller('BasicDemoCtrl', function DemoCtrl($mdDialog) {
    var originatorEv;

    this.openMenu = function ($mdMenu, ev) {
        originatorEv = ev;
        $mdMenu.open(ev);
    };

    this.notificationsEnabled = true;
    this.toggleNotifications = function () {
        this.notificationsEnabled = !this.notificationsEnabled;
    };

    this.redial = function () {
        $mdDialog.show(
                $mdDialog.alert()
                .targetEvent(originatorEv)
                .clickOutsideToClose(true)
                .parent('body')
                .title('Suddenly, a redial')
                .textContent('You just called a friend; who told you the most amazing story. Have a cookie!')
                .ok('That was easy')
                );

        originatorEv = null;
    };

    this.checkVoicemail = function () {
        // This never happens.
    };
});



//**CONTROLLER
//**
//**
//**
//


app.controller('AppCtrl', AppCtrl);
function AppCtrl($scope, $log) {
    var tabs = [
        {title: 'Consultas en listas de ilocalizables', content: "Tenemos alianzas con Bases de Datos a nivel nacional con otras entidades como: financieras o bancarias, entidades de salud, en el sector transportador; para consultar la cédula de ciudadanía del deudor moroso con el objetivo de localizarlo."},
        {title: 'comunicacion al titular de la informacion', content: "Dandole al artículo 12 de la ley 1266 de tratamiento de datos Habeas Data, enviaremos por correo certificado una carta al acreedor comunicándole que se encuentra con un saldo en mora. Dicha comunicación se enviará a la última dirección que el afectado halla suministrado a la fuente de información."},
        {title: 'acuerdos de pagos de los deudores', content: "Gestionamos acuerdos de pago con los deudores, con plazos dependientes del valor de la deuda reportada."},
        {title: 'seguimiento a los acuerdos de pago', content: "Estamos al tanto de las fechas en las que los deudores se comprometen a pagar, los llamamos para recordarles el cumplimiento de cada cuota y los reportamos cuando no se cumple el pago de las mismas."},
        {title: 'actualizacion de la informacion', content: " Actualizaremos permanente la información de las personas reportadas en las Bases de Datos tanto positiva como negativamente."},
        {title: 'reporte negativo', content: "Si al cabo de 20 días de enviada la comunicación al deudor, éste no se presenta para solucionar el valor del reporte, realizaremos un reporte negativo a la central de riesgos de DATACREDITO, para cerrarle las puertas crediticias no sólo en el sector del transporte, sino también en el sector comercial para tener mayor probabilidad de recuperación de la cartera en mora."},
        {title: 'almacenamiento fisico de la informacion', content: " Creamos, almacenamos y actualizamos una carpeta individual por cada deudor con sus documentos de soporte."},
    ],
            selected = null,
            previous = null;
    $scope.tabs = tabs;
    $scope.selectedIndex = 2;
    $scope.$watch('selectedIndex', function (current, old) {
        previous = selected;
        selected = tabs[current];
        if (old + 1 && (old != current))
            $log.debug('Goodbye ' + previous.title + '!');
        if (current + 1)
            $log.debug('Hello ' + selected.title + '!');
    });
    $scope.addTab = function (title, view) {
        view = view || title + " Content View";
        tabs.push({title: title, content: view, disabled: false});
    };
    $scope.removeTab = function (tab) {
        var index = tabs.indexOf(tab);
        tabs.splice(index, 1);
    };
}

//*****//
/**
 * Created by Kupletsky Sergey on 16.09.14.
 *
 * Hierarchical timing
 * Add specific delay for CSS3-animation to elements.
 */

(function ($) {
    var speed = 2000;
    var container = $('.display-animation');
    container.each(function () {
        var elements = $(this).children();
        elements.each(function () {
            var elementOffset = $(this).offset();
            var offset = elementOffset.left * 0.8 + elementOffset.top;
            var delay = parseFloat(offset / speed).toFixed(2);
            $(this)
                    .css("-webkit-animation-delay", delay + 's')
                    .css("-o-animation-delay", delay + 's')
                    .css("animation-delay", delay + 's')
                    .addClass('animated');
        });
    });
})(jQuery);

/**
 * Created by Kupletsky Sergey on 04.09.14.
 *
 * Ripple-effect animation
 * Tested and working in: ?IE9+, Chrome (Mobile + Desktop), ?Safari, ?Opera, ?Firefox.
 * JQuery plugin add .ink span in element with class .ripple-effect
 * Animation work on CSS3 by add/remove class .animate to .ink span
 */

(function ($) {
    $(".ripple-effect").click(function (e) {
        var rippler = $(this);

        // create .ink element if it doesn't exist
        if (rippler.find(".ink").length == 0) {
            rippler.append("<span class='ink'></span>");
        }

        var ink = rippler.find(".ink");

        // prevent quick double clicks
        ink.removeClass("animate");

        // set .ink diametr
        if (!ink.height() && !ink.width())
        {
            var d = Math.max(rippler.outerWidth(), rippler.outerHeight());
            ink.css({height: d, width: d});
        }

        // get click coordinates
        var x = e.pageX - rippler.offset().left - ink.width() / 2;
        var y = e.pageY - rippler.offset().top - ink.height() / 2;

        // set .ink position and add class .animate
        ink.css({
            top: y + 'px',
            left: x + 'px'
        }).addClass("animate");
    })
})(jQuery);




app.controller('login', ['$scope', 'toaster', '$http', function ($scope, toaster, $http) {

        $scope.data = {username: null, password: null};
        $scope.submit = function () {

            $http({method: 'POST', url: '/site/logincollections', data: $scope.data}).
                    then(function (response) {
                        var parameters = response.data;

                        toaster.pop({
                            type: parameters.type,
                            title: parameters.title,
                            body: parameters.message,
                            showCloseButton: true,
                        });
                        if (parameters.type === "success") {
                            var parametersJson = JSON.stringify(parameters);
                            var url = "/dash/index";
                            window.location.href = url;
                        }

                    }, function (response) {
                        $scope.data = response.data || "Request failed";
                        $scope.status = response.status;
                    });
        };

    }])


app.controller('AngularWayCtrl', ['$scope', 'toaster', '$http', function ($scope, toaster, $http) {

        var showCase1 = [{
                "id": 860,
                "firstName": "Superman",
                "lastName": "Yoda"
            }, {
                "id": 870,
                "firstName": "Foo",
                "lastName": "Whateveryournameis"
            }, {
                "id": 590,
                "firstName": "Toto",
                "lastName": "Titi"
            }, {
                "id": 803,
                "firstName": "Luke",
                "lastName": "Kyle"
            },
            {
                "id": 803,
                "firstName": "Luke",
                "lastName": "Kyle"
            }
            ,
            {
                "id": 803,
                "firstName": "Luke",
                "lastName": "Kyle"
            }
            ,
            {
                "id": 803,
                "firstName": "Luke",
                "lastName": "Kyle"
            }
            ,
            {
                "id": 803,
                "firstName": "Luke",
                "lastName": "Kyle"
            }
            ,
            {
                "id": 803,
                "firstName": "Luke",
                "lastName": "Kyle"
            }
            ,
            {
                "id": 803,
                "firstName": "Luke",
                "lastName": "Kyle"
            }
            ,
            {
                "id": 803,
                "firstName": "Luke",
                "lastName": "Kyle"
            }
            ,
            {
                "id": 803,
                "firstName": "Luke",
                "lastName": "Kyle"
            }
            ,
            {
                "id": 803,
                "firstName": "Luke",
                "lastName": "Kyle"
            }
            ,
            {
                "id": 803,
                "firstName": "Luke",
                "lastName": "Kyle"
            }
            ,
            {
                "id": 803,
                "firstName": "Luke",
                "lastName": "Kyle"
            }
        ];

        $scope.showCase = showCase1;


    }])

app.controller('countPay', function ($scope) {






});








//*****//



app.controller('newCollections', function ($scope, $http, $mdDialog, $mdMedia) {

    $scope.menuHorizontalIzq = false;
    $scope.customFullscreen = $mdMedia('xs') || $mdMedia('sm');
    $scope.showModal = function (ev, arg) {

        $mdDialog.show({
            controller: DialogController,
            templateUrl: '/colletions/modalnew',
            parent: angular.element(document.body),
            targetEvent: ev,
            clickOutsideToClose: true
        })
                .then(function (answer) {
                    $scope.status = 'You said the information was "' + answer + '".';
                }, function () {
                    $scope.status = 'You cancelled the dialog.';
                });
    };


    $scope.countTo = 1860;
    $scope.countFrom = 0;
    $scope.filter = 'number';

    $scope.countToendtnovencidas = 860;
    $scope.countFromstartnovencidas = 0;
    $scope.countToendtnovencidasporcen = 30;
    $scope.countFromstartnovencidasporcen = 0;

    $scope.countToendtvencidas = 1000;
    $scope.countFromstartvencidas = 0;
    $scope.countToendtvencidasporcen = 70;
    $scope.countFromstartvencidasporcen = 0;




    $http({method: 'POST', url: '/donors/querytypedonors'}).
            then(function (response) {
                $scope.parameters = response.data;
            }, function (response) {
                $scope.data = response.data || "Request failed";
                $scope.status = response.status;
            });


    $scope.parJson = function (json) {
        return angular.fromJson(json);
    }
   
    $scope.typeR = function (id_business) {

        $scope.menuHorizontalIzq = true;
        $scope.effectHide = 'ng-hide';
        $scope.showCase = {};
        $http({method: 'POST', url: '/colletions/queryclasificationreports', data: id_business}).
                then(function (response) {
                    var parameters = response.data;
                    $scope.showCase = parameters;
                }, function (response) {
                    $scope.data = response.data || "Request failed";
                    $scope.status = response.status;
                });

    }


})




function DialogController($scope, $mdDialog, $http, toaster) {
    $scope.hide = function () {
        $mdDialog.hide();
    };
    $scope.cancel = function () {
        $mdDialog.cancel();
        $scope.$broadcast('timer-resume');
        $scope.timerRunning = true;
    };
    $scope.cancelConnection = function () {
        $scope.matterSelection = true;
    };
    $scope.answer = function (answer) {
        $mdDialog.hide(answer);
    };

    $scope.pizarra = function (matter) {
        console.log(matter);
        window.location.href = "/site/pizarra";
    };

    $scope.closeClass = function () {
        console.log('Holla desde close clase');
//        $http.get('/classes/default/close').then(function (res) {}, function (err) {
//            console.log(err)
//        });
    }

    $http({method: 'POST', url: '/donors/querytypedonors'}).
            then(function (response) {
                $scope.parameters = response.data;
            }, function (response) {
                $scope.data = response.data || "Request failed";
                $scope.status = response.status;
            });





    $scope.data = {cedente: null, identificationcedente: null, typeIdentificationcedente: null, name: null, departamento: null, residencia: null, phone: null, email: null, numberaccount: null, typeaccount: null, bank: null, clasification: null, identificationacre: null, typeIdentification: null, nameacree: null, departamentoacree: null, residenciaacree: null, phoneacree: null, emailacreer: null, vradecuado: null, reportdate: null, che: null, ce: null, cp: null, fc: null, lc: null, li: null, pa: null, rc: null, rcb: null};

    $scope.saveNew = function () {
        $http({method: 'POST', url: '/colletions/registernew', data: $scope.data}).
                then(function (response) {
                    var parameters = response.data;
                    console.log(parameters);
                    toaster.pop({
                        type: parameters.type,
                        title: parameters.title,
                        body: parameters.message,
                        showCloseButton: true,
                    });


                }, function (response) {
                    $scope.data = response.data || "Request failed";
                    $scope.status = response.status;
                });
    };





}


app.controller("LineCtrl", function ($scope) {

    $scope.labels = ["January", "February", "March", "April", "May", "June", "July"];
    $scope.series = ['Series A', 'Series B'];
    $scope.data = [
        [65, 59, 80, 81, 56, 55, 40],
        [28, 48, 40, 19, 86, 27, 90]
    ];
    $scope.onClick = function (points, evt) {
        console.log(points, evt);
    };
    $scope.datasetOverride = [{yAxisID: 'y-axis-1'}, {yAxisID: 'y-axis-2'}];
    $scope.options = {
        scales: {
            yAxes: [
                {
                    id: 'y-axis-1',
                    type: 'linear',
                    display: true,
                    position: 'left'
                },
                {
                    id: 'y-axis-2',
                    type: 'linear',
                    display: true,
                    position: 'right'
                }
            ]
        }
    };
});

app.controller("BarCtrl", function ($scope) {
    $scope.labels = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio'];
    $scope.series = ['Series A', 'Series B'];

    $scope.data = [
        [65, 59, 80, 81, 56, 55, 40],
        [28, 48, 40, 19, 86, 27, 90]
    ];
});


app.controller("BaseCtrl",
        function ($scope) {
            $scope.labels = ["hace 30 o menos", "Entre 30 y 60", "Entre 60 y 90", "Mas de 90"];
            $scope.data = [25, 50, 70, 100];
            $scope.type = 'polarArea';

            $scope.toggle = function () {
                $scope.type = $scope.type === 'polarArea' ?
                        'pie' : 'polarArea';
            };
        });




app.controller('actualizarInformacion', ['$scope', 'toaster', '$http', function ($scope, toaster, $http) {

        $scope.info = function () {
            toaster.pop({
                type: 'info',
                title: 'Actualizando Informacion',
                body: 'Buscando nuevo ingreso...',
                showCloseButton: true,
            });
        };
    }])

app.controller('listBusiness', ['$scope', 'toaster', '$http', function ($scope, toaster, $http) {
        $http({method: 'POST', url: '/donors/querytypedonors'}).
                then(function (response) {
                    $scope.parameters = response.data;
                }, function (response) {
                    $scope.data = response.data || "Request failed";
                    $scope.status = response.status;
                });

    }])

