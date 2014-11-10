(function(){
	angular.module('gemStore')
    .service('jsonMaker', ['$http', function($http) {

	var ndata = this;
	    store.products = [];
	    $http.get('store-products.json').success(function(data){
	              store.products = data;
	              property = store.products.length;             
	              });

}])();
});