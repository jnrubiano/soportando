'use strict';

/**
 * @ngdoc service
 * @name soportando.login
 * @description
 * # login
 * Factory in the soportando.
 */
app.factory('UserService', ['$http', function ($http) {
        return {
            getUser: function () {
                return $http.get(server + 'user/getUser');
            }
        };
    }]);
