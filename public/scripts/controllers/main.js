'use strict';

/**
 * @ngdoc function
 * @name soportando.controller:MainCtrl
 * @description
 * # MainCtrl
 * Controller of the soportando
 */
app.controller('MainCtrl', ['$scope', 'UserService', '$q',
    function ($scope, UserService, $q) {
        $scope.user = {};
        var user = UserService.getUser().success(function (data) {
            $scope.user = data;
        });
        $q.all([user]).then(function (data) {
            
        });
    }
]);
