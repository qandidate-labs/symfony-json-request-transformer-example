var demoApp = angular.module('demoApp', []);

demoApp.controller('DefaultCtrl', function ($scope, $http) {
  $http.get('/hello/you').success(function(data) {
    $scope.name = data.name;
  });

  $http.post('/post', { "foo": "bar" }).success(function(data) {
    $scope.foo = data.foo;
  });
});
