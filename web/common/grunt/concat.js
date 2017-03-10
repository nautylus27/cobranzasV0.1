module.exports = {
    // JS FILES
    loginjs: {
        src: [
            '../../vendor/bower/angular/angular.js',
        ],
        dest: '../../web/theme/js/tareas-login.js'
    },
    appjs: {
        src: [
            '../../vendor/bower/angular/angular.js',
            '../../vendor/bower/angular-animate/angular-animate.js',
            '../../vendor/bower/angular-aria/angular-aria.js',
            '../../vendor/bower/angular-messages/angular-messages.min.js',
            '../../vendor/bower/angular-material/angular-material.min.js',
       
            '../../web/fount/collections.js',
        ],
        dest: '../../web/theme/js/tareas-app.js'
    },
    // CSS FILES
    logincss: {
        src: [
        ],
        dest: '../../web/theme/css/tareas-login.css'
    },
    appcss: {
        src: [
            '../../vendor/bower/angular-material/angular-material.css',
//            '../../vendor/bower/angular-carousel/dist/angular-carousel.css',
//            '../../vendor/bower/AngularJS-Toaster/toaster.css',
//            '../../web/css/xenon-core.css',
//            '../../vendor/bower/angular-material-data-table/dist/md-data-table.min.css',
//            '../../vendor/bower/ng-scrollbar/dist/ng-scrollbar.css',
            '../../web/fount/collections.css',
            
        ],
        dest: '../../web/theme/css/tareas-app.css'
    }
};