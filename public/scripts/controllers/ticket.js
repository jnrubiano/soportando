'use strict';

/**
 * @ngdoc function
 * @name soportando.controller:MainCtrl
 * @description
 * # MainCtrl
 * Controller of the soportando
 */

app.controller('TicketCtrl', ['$scope', 'TicketService', 'CompanyService', '$q', '$rootScope',
    function ($scope, TicketService, CompanyService, $q, $rootScope) {
        $scope.showData = false;
        $scope.activeForm = false;
        $scope.tickets = [];
        $scope.ticket = {};
        $scope.companies = [];
        var srv1 = TicketService.list().success(function (data) {
            $scope.tickets = data;
        });
        $q.all([srv1]).then(function (data) {
            $scope.$watch("tickets", function (value) {//I change here
                $('#ticketList').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false,
                    "bDestroy": true
                });
                //$scope.editorDesc = $("#Descripcion").wysihtml5();
                //$scope.editorRepr = new wysihtml5.Editor("Reproducibilidad", {});
            });
            $scope.$watch("ticket.Module", function (value) {
                if (value) {
                    $scope.ticket.ModuleId = value.ModuleId;
                }
            });
            $scope.$watch("ticket.Company", function (value) {
                if (value) {
                    $scope.ticket.CompanyId = value.CompanyId;
                }
            });
            $scope.$watch("ticket.Project", function (value) {
                if (value) {
                    $scope.ticket.Package = searchInList($scope.ticket.Project.Packages, $scope.ticket.Module.Package.PackageId, "PackageId");
                }
            });
            $scope.$watch("ticket.Package", function (value) {
                if (value) {
                    $scope.ticket.Module = searchInList($scope.ticket.Package.Modules, $scope.ticket.Module.ModuleId, "ModuleId");
                }
            });
            $scope.$watch("ticket.TicketPriority", function (value) {
                if (value) {
                    $scope.ticket.PriorityId = value.PriorityId;
                }
            });
            $scope.$watch("ticket.TicketType", function (value) {
                if (value) {
                    $scope.ticket.TicketTypeId = value.TicketTypeId;
                }
            });
            $scope.showData = true;
            $scope.newTicket = function () {
                $scope.ticket = {};
                $scope.activeForm = true;
            };
            $scope.cancelForm = function () {
                $scope.ticket = {};
                $scope.activeForm = false;
            };
            $scope.editTicket = function (id) {
                TicketService.getTicket(id).success(function (data) {
                    $scope.ticket = data;
                    $scope.ticket.Company = searchInList($rootScope.companies, $scope.ticket.CompanyId, "CompanyId");
                    $scope.ticket.TicketPriority = searchInList($rootScope.ticketPriority, $scope.ticket.PriorityId, "PriorityId");
                    $scope.ticket.TicketType = searchInList($rootScope.ticketType, $scope.ticket.TicketTypeId, "TicketTypeId");
                    $scope.ticket.Project = searchInList($rootScope.projects, $scope.ticket.Module.Package.Project.ProjectId, "ProjectId");
                    $scope.activeForm = true;
                }).error(function (data) {
                    alert("Error al obtener ticket " + id);
                });
            };
            $scope.saveTicket = function () {
                TicketService.saveTicket($scope.ticket).success(function (data) {
                    console.log(data);
                }).error(function (data) {
                    alert("Error al guardar el ticket.");
                });
            };
        });
    }
]);
