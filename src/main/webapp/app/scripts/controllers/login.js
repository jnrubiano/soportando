'use strict';

/**
 * @ngdoc function
 * @name soportando.controller:AboutCtrl
 * @description
 * # AboutCtrl
 * Controller of the soportando
 */
app.controller('LoginCtrl', ['$scope', '$location', 'AuthService', function ($scope, $location, AuthService) {
        $scope.form = {};
        $scope.sendLogin = function () {
            AuthService.login($scope.form).success(function (data) {
                if (data.sid) {
                    $location.path('/main');
                }
            }).error(function (data) {
                console.error("Login error", data);
            });
        };
    }]);
