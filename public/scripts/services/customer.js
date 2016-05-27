'use strict';

/**
 * @ngdoc service
 * @name soportando.login
 * @description
 * # login
 * Factory in the soportando.
 */
app.factory('CustomerService', ['$http', function ($http) {
        return {
            list: function () {
                return $http.get(server + 'customer/getList');
            }
        };
    }]);
