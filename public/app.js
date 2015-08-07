'use strict';

// Declare app level module which depends on views, and components
angular.module('restoApp', [
  'ngRoute',
  'restoApp.view1',
  'restoApp.view2',
  'restoApp.version'
]).controller('MenuController', ['$scope', '$http', function($scope, $http){
    $http.get('/navegacao/menu').success(function(data){
        $scope.items = data.data;
    }).error(function(){
        alert('não consegui pegar o menu');
    });
}]);