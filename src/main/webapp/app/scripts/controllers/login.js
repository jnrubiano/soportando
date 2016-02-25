'use strict';

/**
 * @ngdoc function
 * @name frontendApp.controller:AboutCtrl
 * @description
 * # AboutCtrl
 * Controller of the frontendApp
 */
angular.module('frontendApp').controller('LoginCtrl', ['$scope', '$location', '$cookies', 'AuthService', function ($scope, $location, $cookies, service) {
        $scope.form = {};
        $scope.sendLogin = function () {
            service.login($scope.form).success(function (data) {
                if (data.sid) {
                    $cookies.put('JSESSIONID', data.sid, {expires: "Session"});
                    $location.path('/main');
                }
            }).error(function (data) {
                console.error("Login error", data);
            });
        };
    }]);
