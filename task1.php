<!DOCTYPE html>
<html ng-app="myApp">
<head>
 <title>Change Background Color of Whole Web Page with input value using AngularJS</title>
 <style>
 body {
 background-color: {{backgroundColor}};
 }
 </style>
</head>
<body ng-controller="myCtrl">
 <h1>Change Background Color of Whole Web Page with input value using AngularJS</h1>
 <input type="text" ng-model="backgroundColor" placeholder="Enter a color name or code">
 
 <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
 <script>
 var app = angular.module('myApp', []);
 app.controller('myCtrl', function($scope) {
 $scope.backgroundColor = "white"; // Set initial background color to white
 });
 </script>
</body>
</html>