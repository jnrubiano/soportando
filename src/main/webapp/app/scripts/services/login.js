'use strict';

/**
 * @ngdoc service
 * @name soportando.login
 * @description
 * # login
 * Factory in the soportando.
 */
app.factory('AuthService', ['$http', function ($http) {
    return {
        login: function (data) {
            return $http.post(server + 'auth/login', data);
        }
    };
}]);
