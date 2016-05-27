'use strict';

/**
 * @ngdoc service
 * @name soportando.login
 * @description
 * # login
 * Factory in the soportando.
 */
app.factory('TicketService', ['$http', function ($http) {
        return {
            list: function () {
                return $http.get(server + 'ticket/getList');
            },
            getTicket: function (id) {
                return $http.post(server + 'ticket/getTicket', {id: id});
            },
            saveTicket: function (data) {
                return $http.post(server + 'ticket/saveTicket', {data: data});
            },
            listTicketType: function () {
                return $http.get(server + 'ticket/listTicketType');
            },
            listTicketPriority: function () {
                return $http.get(server + 'ticket/listTicketPriority');
            }
        };
    }]);
