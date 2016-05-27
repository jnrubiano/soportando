'use strict';

var server = "/soportando/";

/**
 * @ngdoc overview
 * @name soportando
 * @description
 * # soportando
 *
 * Main module of the application.
 */
var app = angular.module('soportando', [
    'ngAnimate',
    'ngAria',
    'ngCookies',
    'ngMessages',
    'ngResource',
    'ngRoute',
    'ngSanitize',
    'ngTouch'
]);
app.run(function (UserService, CompanyService, TicketService, $rootScope) {
    $rootScope.user = {};
    $rootScope.companies = [];
    $rootScope.projects = [];
    $rootScope.ticketPriority = [];
    $rootScope.ticketType = [];
    UserService.getUser().success(function (data) {
        $rootScope.user = data;
    });
    CompanyService.list().success(function (data) {
        $rootScope.companies = data;
    });
    CompanyService.getListModules().success(function (data) {
        $rootScope.projects = data;
    });
    TicketService.listTicketType().success(function (data) {
        $rootScope.ticketType = data;
    });
    TicketService.listTicketPriority().success(function (data) {
        $rootScope.ticketPriority = data;
    });
});
app.config(function ($routeProvider, $httpProvider) {
    $routeProvider
            .when('/', {
                templateUrl: '/soportando/public/views/main.html',
                controller: 'MainCtrl'
            })
            .when('/admin/customer', {
                templateUrl: 'public/views/admin/customer.html',
                controller: 'AdmCustomerCtrl'
            })
            .when('/ticket', {
                templateUrl: 'public/views/ticket.html',
                controller: 'TicketCtrl'
            })
            .otherwise({
                redirectTo: '/'
            });
});


function arrayObjectIndexOf(myArray, searchTerm, property) {
    var r = -1;
    if (myArray !== undefined) {
        $.each(myArray, function (i, value) {
            if (String(myArray[i][property]) === String(searchTerm))
                r = i;
        });
    }
    return r;
}

function searchInList(targetList, id, nameId) {
    var index = arrayObjectIndexOf(targetList, id, nameId);
    if (targetList === undefined)
        return "";
    if (index === -1) {
        return "";
    }
    return targetList[index];
}
