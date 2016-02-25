'use strict';

/**
 * @ngdoc function
 * @name soportando.controller.admin:UserCtrl
 * @description
 * # MainCtrl
 * Controller of the soportando
 */
app.controller('AdmCustomerCtrl', function ($scope) {

    $scope.user = "LCano";

    $scope.form = {};

    $scope.editing = false;

    $scope.companies = [
        {id: 1, nombre: "Empresa 1"},
        {id: 2, nombre: "Empresa 2"},
        {id: 3, nombre: "Empresa 3"},
        {id: 4, nombre: "Empresa 4"}
    ];

    $scope.customers = [
        {
            empresa: "Empresa 1",
            contacto: "Pepe Perez",
            usuario: "pperez",
            acceso: "2016-01-01 10:13:58",
            estado: 1
        },
        {
            empresa: "Empresa 2",
            contacto: "Maria Rojas",
            usuario: "mrojas",
            acceso: "2016-01-01 10:13:58",
            estado: 0
        }
    ];

    $scope.editCustomer = function (customer) {
        $scope.editing = true;
        if (customer === null) {
            customer = {
                isNew: true,
                estado: 1
            };
        }
        $scope.form = customer;
    };

    $scope.saveCustomer = function (customer) {
        $scope.editing = false;
        if(customer.isNew){
            $scope.customers.push(customer);
        }
    };
});
