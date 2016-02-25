'use strict';

//var server = "http://localhost:8080/Soportando/rest/";
var server = "rest/";

/**
 * @ngdoc overview
 * @name frontendApp
 * @description
 * # frontendApp
 *
 * Main module of the application.
 */
var app = angular.module('frontendApp', [
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
                templateUrl: '/Soportando/app/views/main.html',
                controller: 'MainCtrl',
                controllerAs: 'main'
            })
            .when('/login', {
                templateUrl: '/Soportando/app/views/login.html',
                controller: 'LoginCtrl',
                controllerAs: 'login'
            })
            .otherwise({
                redirectTo: '/'
            });

    $httpProvider.interceptors.push(function ($q, $location, $cookies) {
        return {
            'request': function (config) {
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
                return config;
            },
            'response': function (response) {
                return response;
            }
        };
    });
});