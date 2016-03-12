'use strict';

var server = "rest/";

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
]).config(function ($routeProvider, $httpProvider) {
    $routeProvider
            .when('/', {
                templateUrl: '/soportando/app/views/main.html',
                controller: 'MainCtrl'
            })
            .when('/login', {
                templateUrl: 'app/views/login.html',
                controller: 'LoginCtrl'
            })
            .when('/admin/customer', {
                templateUrl: 'app/views/admin/customer.html',
                controller: 'AdmCustomerCtrl'
            })
            .otherwise({
                redirectTo: '/'
            });

    $httpProvider.interceptors.push(function ($q, $location, $cookies) {
        return {
            'request': function (config) {
                console.log(config);
                if (!/\.html$/.test(config.url) && false) {
                    config.timeout = $q(function (resolve, reject) {
                        $.ajax({
                            url: server + 'auth/login',
                            type: 'GET',
                            dataType: 'json',
                            success: function (data) {
                                if (data.status) {
                                    resolve();
                                } else {
                                    $location.path('/login');
                                    reject();
                                }
                            },
                            error: function () {
                                reject();
                            }
                        });
                        jQuery.getJSON(server + 'auth/login', function (data) {
                            if (data.status) {
                                resolve();
                            } else {
                                $location.path('/login');
                                reject();
                            }
                        }).fail(function () {
                            reject();
                        });
                    });
                }
                return config;
            },
            'response': function (response) {
                return response;
            }
        };
    });
});


function arrayObjectIndexOf(myArray, searchTerm, property) {
    if (myArray !== undefined)
        for (var i = 0, len = myArray.length; i < len; i++) {
            if (String(myArray[i][property]) === String(searchTerm))
                return i;
        }
    return -1;
}