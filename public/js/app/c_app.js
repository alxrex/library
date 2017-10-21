'use strict';

//Controlador
var bookController = angular.module('bookController',[]);
var label = 'Book';

//Listado
bookController.controller('listCtrlBook',['$scope','dataBook',function($scope,dataBook){

    $scope.mensaje = '';
    $scope.books = [];
    $scope.selectedBook = {};
    console.log('Listado Books');

    $scope.setSelected = function (book){
        $scope.selectedBook = book;
    };
       

    /*$scope.deleteBook = function (id) {

        dataBook.delete(id)
            .success(function (data) {
            
            $scope.status=true;
            $scope.mensaje = label + ' Eliminado satisfactoriamente!';

            //Eliminar de Vista Listado
            for (var i = 0; i < $scope.books.length; i++) {
                var data = $scope.books[i];
                if (data.id === id) {
                    $scope.books.splice(i, 1);
                    break;
                }
            }
            location.reload();
        }).
        error(function(error) {
            $scope.status=error.status;
            $scope.mensaje = 'No se pudo eliminar '+label+': ' + error.mensaje;
        });

    };*/

    //Get all Books
    dataBook.get_all()
        .success(function (data){
            $scope.status=true;
            $scope.mensaje = label + 'Consulta exito';
            $scope.books = data;
        }).error(function(error) {
            $scope.status=error.status;
            $scope.mensaje = 'No se pudo obtener información : ' + error.mensaje;
        });
}]);




//NUEVO
bookController.controller('newCtrlBook',['$scope', '$location','dataBook',
    function($scope,$location,dataBook){

        console.log('Create');
    $scope.book = {};
    $scope.categories = [];
    $scope.site_url = site_url;
    
    $scope.category = "";
    $scope.c = {};


    $scope.status = '';
    $scope.mensaje = '';

    //Obtiene Listado de categorias
    /*function getCategories(){
        dataBook.getCategories()
        .success(function(data){
            $scope.categories = data;
        }).error(function(error){
            $scope.status=error.status;
            $scope.mensaje = 'No se puede cargar informacion - '+error.mensaje;
        });
    };*/
    //getCategories();

    //SelectUI Selected
    $scope.setCategorySelected = function(item,model){
        $scope.category = item;
        console.log(item.id);
        $scope.book.category_id = item.id;
    };

    //Busca Categorias Ajax
    $scope.searchCategories = function(name){
       dataBook.getCategoriesByName(name).
       success(function(data){
            $scope.categories = data;
       });
    };


    //Guardar
    $scope.save = function () {

        //Insertar
        dataBook.save($scope.book)
        .success(function (data) {
            //Redireccionar
            $scope.status = data.status;
            $scope.mensaje = data.mensaje;
            $location.path('/list/');
        }).
        error(function(error) {

            $scope.status = 'error';
            $scope.mensaje = '';
            for(var line in error)
            {
                for(var error_field in error[line])
                {
                    $scope.mensaje += error[line][error_field];
                }
            }
        });
    };

}]);



//***********************       UPDATE      ******************************************
bookController.controller('editarCtrl',['$scope','$location','dataBook','$routeParams',
    function($scope,$location,dataBook,$routeParams){

    $scope.id = $routeParams.book_id;
    $scope.book = {};
    $scope.status = '';
    $scope.mensaje = '';
    $scope.site_url =site_url;

    function getBook(id){
        dataBook.get(id)
            .success(function(data){
                $scope.mensaje = data.mensaje;
                $scope.status = data.status;
                $scope.book = data;
            }).error(function(error){
                $scope.status = 'No se puede cargar informacion - '+error.mensaje;
            });
    };

    //Guardar
    $scope.save = function () {
        //Actualizar
        dataBook.update($scope.book)
        .success(function (data) {
            //Redireccionar
            $scope.status = data.status;
            $scope.mensaje = data.mensaje;
            $location.path('/success/');
        }).
        error(function(error) {
            $scope.status = error.estatus;
            $scope.mensaje = 'No se pudo actualizar '+label+': ' + error.mensaje;
            if(error.error)
            {
                $scope.mensaje = 'Existen errores de validación: <br />';

                for(var line in error)
                {
                    for(var error_field in error[line])
                    {
                        $scope.mensaje += error[line][error_field];
                    }
                }
            }
        });

    };

}]);


//Success
bookController.controller('successCtrl',['$scope', '$location',
    function($scope,$location){
        //No se hace nada ^^
}]);

bookController.directive('ngConfirmClick', [
        function(){
            return {
                priority: 1,
                terminal: true,
                link: function (scope, element, attr) {
                    var msg = attr.ngConfirmClick || "Estas seguro?";
                    var clickAction = attr.ngClick;
                    element.bind('click',function (event) {
                        if ( window.confirm(msg) ) {
                            scope.$eval(clickAction)
                        }
                    });
                }
            };
    }])