'use strict';

/**
 * @ngdoc service
 * @name soportando.login
 * @description
 * # login
 * Factory in the soportando.
 */
app.factory('CompanyService', ['$http', function ($http) {
        return {
            list: function () {
                return $http.get(server + 'company/list');
            }
        };
    }]);
