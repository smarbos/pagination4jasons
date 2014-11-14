(function() {

  var app = angular.module('gemStore', ['ngRoute']);

   app.controller('StoreController', ['$http', function($http){
    var store = this;
    store.products = [];
    $http.get('store-products.json').success(function(data){
              store.products = data;
              ndata = store.products.length; 
              console.log('App.storeController = ' + ndata);             
              });
  }]);

  app.directive('flowType', function(){
    return {
        restrict: 'E',
        templateUrl: 'flowtype-directive.js'
    };
  });
/*
  app.factory("Item", ['$http', function($http){
    return {
    total: function() {
      var items = this;
    items = [];
    $http.get('store-products.json').success(function(data){
      items = data;
              console.log('App.factory = ' + items.length);  
              
      console.log('total() = ' + items.length);
      return items.length;
});
    }
  };
 }]);
*/

/*
  app.service('Item', ['$http', function($http){
      $http.get('store-products.json').success(function(data){ return data.length;});
  }]);
 */


 /*
 app.factory('Data', ['$http', function($http){
    $http.get('store-products.json').success(function(data){ return data.length;});
    return {message: 'data'}
  }]);
*/

  app.factory('Data', function($http, $q){
    var store = this;
    var deferrer = $q.defer();
    store.products = [];
    $http.get('store-products.json').success(function(data){
    ndata = data.length;
    console.log('Data = ' + ndata);
    deferrer.resolve(ndata);
    }
  )
  
  return deferrer.promise; 
  });

 function PaginationDemoCtrl($scope, Data){
  $scope.data = Data;
 }


  angular.module('ui.bootstrap.demo', ['ui.bootstrap']);
  app.controller('PaginationDemoCtrl', function ($scope, Data) {

  Data.then(function(data){
    $scope.data = data;
    console.log($scope.data);
    });
  $scope.currentPage = 4;

  $scope.setPage = function (pageNo) {
    $scope.currentPage = pageNo;
  };

  $scope.pageChanged = function() {
    console.log('Page changed to: ' + $scope.currentPage);
  };

  $scope.maxSize = 5;
  $scope.bigTotalItems = 175;
  $scope.bigCurrentPage = 1;
});
})();
