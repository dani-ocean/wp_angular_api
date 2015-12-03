var myApp = angular.module('myApp', ['ngRoute']);

myApp.config(function($routeProvider, $locationProvider){
  $locationProvider.html5Mode(true);

  $routeProvider
  .when('/', {
    templateUrl: myLocalized.partials + 'main.html',
    controller: 'Main'
  })
  .when('/:ID', {
    templateUrl: myLocalized.partials + 'content.html',
    controller: 'Content'
  })

})

myApp.controller('Main', function($scope, $http, $routeParams){
  $http.get('wp-json/posts/').success(function(result){
    $scope.posts = result;
  });
  //console.log('main file loaded');
})

myApp.controller('Content', function($scope, $http, $routeParams){
  $http.get('wp-json/posts/' + $routeParams.ID).success(function(result){
    $scope.post = result;
  });
});
