// Factory, donde estan todos los servicios.

angular.module('testApp')
    .factory('dataBook', ['$http', function($http) {

    var urlBase = site_url +'api/book';
    var dataBook = {};

    //.........Acciones...........
    dataBook.get_all = function () {
        return $http.get(urlBase);
    };

    dataBook.save = function (data) {
        return $http.post(urlBase , data);
    };

    dataBook.get = function (id) {
        return $http.get(urlBase + '/' + id);
    };

    dataBook.update = function (data) {
        return $http.put(urlBase + '/' + data.id, data)
    };

    dataBook.delete = function (id) {
        return $http.delete(urlBase + '/' + id, { data:'id='+id } );
    };

    //Shared - Categories
    dataBook.getCategories = function(){
        return $http.get(site_url + 'api/category');
    };

    dataBook.getCategoriesByName = function(name){
        return $http.post(site_url+ 'api/category/search', {text:name});
    }


    return dataBook;
}]);