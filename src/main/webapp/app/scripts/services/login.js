'use strict';

/**
 * @ngdoc service
 * @name frontendApp.login
 * @description
 * # login
 * Factory in the frontendApp.
 */
angular.module('frontendApp').factory('AuthService', ['$http', function ($http) {
    return {
        login: function (data) {
            return $http.post(server + 'auth/login', data);
        }
    };
}]);
