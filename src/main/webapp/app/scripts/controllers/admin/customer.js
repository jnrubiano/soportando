'use strict';

/**
 * @ngdoc function
 * @name soportando.controller.admin:UserCtrl
 * @description
 * # MainCtrl
 * Controller of the soportando
 */
app.controller('AdmCustomerCtrl', ['$scope', 'CompanyService', 'CustomerService', '$q', function ($scope, companyService, customerService, $q) {

        $scope.user = "LCano";
        $scope.form = {};
        $scope.editing = false;
        $scope.companies = [];
        $scope.customers = [];

        var domains = companyService.list().success(function (data) {
            $scope.companies = data;
        }).error(function (data, status, headers, config) {
            alert("Error al traer el listado de empresas.");
        });
        var cdata = customerService.list().success(function (data) {
            $scope.customers = data;
        }).error(function (data, status, headers, config) {
            alert("Error al traer el listado de clientes.");
        });
        $q.all([domains, cdata]).then(function (data) {

            $scope.editCustomer = function (customer) {
                $scope.editing = true;
                if (customer === null) {
                    customer = {
                        isNew: true,
                        user: {active: 1}
                    };
                } else {
                    customer.company = $scope.findCompany(customer.company);
                }
                $scope.form = customer;
            };

            $scope.saveCustomer = function (customer) {
                $scope.editing = false;
                if (customer.isNew) {
                    $scope.customers.push(customer);
                }
            };

            $scope.findCompany = function (obj) {
                var index = arrayObjectIndexOf($scope.companies, obj.companyId, "companyId");
                if ($scope.companies === undefined)
                    return {};
                if (index === -1)
                    return {};
                return $scope.companies[index];
            };


        });

    }
]);
