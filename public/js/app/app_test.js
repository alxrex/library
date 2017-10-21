'use strict';

var site_url = 'http://localhost/library/public/'
var template_url = 'http://localhost/library/public/template/'

  var testApp =  angular.module("testApp",
    ['ngRoute',
    'ngSanitize',
    'ui.bootstrap',
    'ui.select',
    'angular.filter', 'bookController']);

	//----Routing & multiples Views
  	testApp.config(['$routeProvider',
      function($routeProvider){
  			$routeProvider
          .when('/list/',{
            templateUrl: template_url+'book/list.html',
            controller: 'listCtrlBook'
          })
          .when('/create/',{
            templateUrl: site_url+'template/book/new',
            controller: 'newCtrlBook'
          })
          .when('/edit/:book_id?',{
              templateUrl: function(urlattr){
                return site_url+'template/book/edit/'+urlattr.book_id
            },
            controller: 'editCtrlBook'
          })
          .otherwise({
  					redirectTo: '/list/'
  				});
  	}]);

//Configuracion de Global para DatePicker
testApp.config(function (datepickerConfig, datepickerPopupConfig) {
    datepickerPopupConfig.currentText = "Hoy";
    datepickerPopupConfig.clearText = "Limpiar";
    datepickerPopupConfig.closeText = "Cerrar";
    datepickerConfig.formatMonth = 'MM';
    datepickerConfig.startingDay=1;   //Comenzar Lunes
});

//Aberracion de IE- No guardar cache para Ajax.
testApp.config(['$httpProvider', function($httpProvider) {
    //initialize get if not there
    if (!$httpProvider.defaults.headers.get) {
        $httpProvider.defaults.headers.get = {};
    }
    //disable IE ajax request caching
    $httpProvider.defaults.headers.get['If-Modified-Since'] = '0';
}]);
