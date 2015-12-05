var myApp = angular.module('myApp', ['ngRoute', 'ngSanitize']);

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

//Main ctrl to display post list
myApp.controller('Main', function($scope, $http, $routeParams){
  $http.get('wp-json/posts/').success(function(result){
    $scope.posts = result;
  });
  //console.log('main file loaded');
})

//Content ctrl to handle the display of a single posts content
myApp.controller('Content', function($scope, $http, $routeParams){
  $http.get('wp-json/posts/' + $routeParams.ID).success(function(result){
    $scope.post = result;
  });
})

//Simple search to filter posts list
// -pass search input to filter, set posts to result
myApp.directive('searchForm', function(){
  return{
    restrict: 'EAC',
    template: 'Search post: <input type="text" name="s" ng-model="filter.s" ng-change="search()" >',
    controller: function($scope, $http){
      $scope.filter = { s: '' };
      $scope.search = function(){
        $http.get('wp-json/posts/?filter[s]=' + $scope.filter.s)
          .success(function(result){
            $scope.posts = result;
          });
      }
    }
  };
});
