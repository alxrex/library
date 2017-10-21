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
        var book_filter_temp = book;
        $scope.selectedBook = book_filter_temp;
    };
    
    $scope.checkUserStatus = function(){
        if($scope.selectedBook.user.length==0)
        {
            $scope.selectedBook.available = 1;
        }else
        {
            $scope.selectedBook.available = 0;
        }
    };

    $scope.saveUser = function(){

         //Insertar
        dataBook.update($scope.selectedBook)
        .success(function (data) {
            //Redireccionar
            /*$scope.status = data.status;
            $scope.mensaje = data.mensaje;*/
            
            $('#modalChangeStatus').modal('hide');
            //$('#modalChangeStatus').hide();
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

    $scope.deleteBook = function (id) {

        if(confirm('Do you want Delete this item?'))
        {
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
        }

    };

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
bookController.controller('editCtrlBook',['$scope','$location','dataBook','$routeParams',
    function($scope,$location,dataBook,$routeParams){

    $scope.id = $routeParams.book_id;
    $scope.book = {};
    $scope.status = '';
    $scope.mensaje = '';
    $scope.site_url =site_url;

    function getBook(id){
        dataBook.get(id)
            .success(function(data){
                $scope.book = data;
            }).error(function(error){
                $scope.status = 'No se puede cargar informacion - '+error.mensaje;
            });
    };
    getBook($scope.id);

    //Guardar Cambios
    $scope.save = function () {
        //Actualizar
        dataBook.update($scope.book)
        .success(function (data) {
            //Redireccionar
            $location.path('/success/');
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


}]);


//Success
bookController.controller('successCtrl',['$scope', '$location',
    function($scope,$location){
        //No se hace nada ^^
}]);
