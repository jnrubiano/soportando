<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of companyController
 *
 * @author felipe
 */
class TicketController extends BaseController {

    public function __construct() {
        //header('Access-Control-Allow-Origin: *');
        parent::__construct();
    }

    public function getList() {
        try {
            $tickets = TicketQuery::create()->find();
            foreach ($tickets as $ticket) {
                $ticket->getCompany();
                $ticket->getTicketStatus();
            }
            $this->_view->printJSON($tickets->toArray());
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
    }

    public function getTicket() {
        try {
            $this->setPost();
            $data = array();
            $t = TicketQuery::create()->findPk(intval($_POST["id"]));
            if ($t instanceof Ticket) {
                $t->getCompany();
                $t->getTicketType();
                $t->getTicketPriority();
                $c = $t->getCustomer();
                $uc = $c->getUser();
                $uc->setPass("");
                $uc->setRecoverCode(null);
                $uc->setRecoverDue(null);
                $u = $t->getUser();
                $u->setPass("");
                $u->setRecoverCode(null);
                $u->setRecoverDue(null);
                $u->getRol();
                $m = $t->getModule();
                $p = $m->getPackage();
                $p->getProject();
                $t->getTicketPriority();
                $t->getTicketStatus();
                $t->getTicketType();
                $data = $t->toArray(BasePeer::TYPE_PHPNAME, true, array(), true);
            }
            $this->_view->printJSON($data);
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
    }

    public function saveTicket() {

//Array
//(
//    [TicketId] => 1
//    [Description] => Error 1
//    [Reproducibility] => Hacer prueba 1
//    [Cid] => 1
//    [EngineerId] => 1
//    [TicketTypeId] => 2
//    [CompanyId] => 1
//    [ModuleId] => 3
//    [PriorityId] => 2
//    [TicketStatusId] => 3
//    [StatusDate] => 2016-04-24 20:48:53
//    [Company] => Array
//        (
//            [CompanyId] => 1
//            [Name] => Empresa 1
//        )
//
//    [Customer] => Array
//        (
//            [Cid] => 1
//            [Tel] => 123123
//            [Cel] => 3125289641
//            [Uid] => 5
//            [CompanyId] => 1
//            [User] => Array
//                (
//                    [Uid] => 5
//                    [Rid] => 5
//                    [Name] => Pepe Cliente
//                    [Login] => cliente
//                    [Pass] => 
//                    [Email] => felipecanol@gmail.com
//                    [LastAccess] => 
//                    [Active] => 1
//                    [RecoverCode] => 
//                    [RecoverDue] => 
//                )
//
//        )
//
//    [User] => Array
//        (
//            [Uid] => 1
//            [Rid] => 1
//            [Name] => Mario Soporte
//            [Login] => soporte
//            [Pass] => 
//            [Email] => felipecanol@gmail.com
//            [LastAccess] => 2016-03-12 06:28:12
//            [Active] => 1
//            [RecoverCode] => 
//            [RecoverDue] => 
//            [Rol] => Array
//                (
//                    [Rid] => 1
//                    [Name] => Ingeniero de soporte
//                )
//
//        )
//
//    [Module] => Array
//        (
//            [ModuleId] => 3
//            [PackageId] => 2
//            [Name] => Módulo 1
//        )
//
//    [TicketPriority] => Array
//        (
//            [PriorityId] => 2
//            [Name] => Medio
//            [Order] => 2
//        )
//
//    [TicketStatus] => Array
//        (
//            [TicketStatusId] => 3
//            [Name] => Ticket asignado a desarrollador
//        )
//
//    [TicketType] => Array
//        (
//            [TicketTypeId] => 2
//            [Name] => Error
//        )
//
//    [Project] => Array
//        (
//            [ProjectId] => 1
//            [Name] => Proyecto 1
//            [Packages] => Array
//                (
//                    [Package_0] => Array
//                        (
//                            [PackageId] => 1
//                            [ProjectId] => 1
//                            [Name] => Paquete 1
//                            [Modules] => Array
//                                (
//                                    [Module_0] => Array
//                                        (
//                                            [ModuleId] => 1
//                                            [PackageId] => 1
//                                            [Name] => Módulo 1
//                                        )
//
//                                    [Module_1] => Array
//                                        (
//                                            [ModuleId] => 2
//                                            [PackageId] => 1
//                                            [Name] => Módulo 2
//                                        )
//
//                                )
//
//                        )
//
//                    [Package_1] => Array
//                        (
//                            [PackageId] => 2
//                            [ProjectId] => 1
//                            [Name] => Paquete 2
//                            [Modules] => Array
//                                (
//                                    [Module_0] => Array
//                                        (
//                                            [ModuleId] => 3
//                                            [PackageId] => 2
//                                            [Name] => Módulo 1
//                                        )
//
//                                    [Module_1] => Array
//                                        (
//                                            [ModuleId] => 4
//                                            [PackageId] => 2
//                                            [Name] => Módulo 2
//                                        )
//
//                                )
//
//                        )
//
//                )
//
//        )
//
//    [Package] => Array
//        (
//            [PackageId] => 2
//            [ProjectId] => 1
//            [Name] => Paquete 2
//            [Modules] => Array
//                (
//                    [Module_0] => Array
//                        (
//                            [ModuleId] => 3
//                            [PackageId] => 2
//                            [Name] => Módulo 1
//                        )
//
//                    [Module_1] => Array
//                        (
//                            [ModuleId] => 4
//                            [PackageId] => 2
//                            [Name] => Módulo 2
//                        )
//
//                )
//
//        )
//
//)

        try {
            $r = array();
            $this->setPost();
            $data = $_POST["data"];
            if (intval($data["TicketId"]) > 0) {
                $ticket = TicketQuery::create()->filterByTicketId($data["TicketId"])->findOneOrCreate();
            } else {
                $ticket = new Ticket();
                $ticket->setTicketStatusId(1);
            }

            $company = CompanyQuery::create()->findPk($data["CompanyId"]);
            if ($company instanceof Company) {
                $ticket->setCompany($company);
            } else {
                $r["st"] = 1;
            }
            $customer = CustomerQuery::create()->findPk($data["Cid"]);
            if ($customer instanceof Customer) {
                $customer->setTel($data["Customer"]["Tel"]);
                $customer->setCel($data["Customer"]["Cel"]);
                $userCustomer = $customer->getUser();
                $userCustomer->setName($data["Customer"]["User"]["Name"]);
                //$userCustomer->setEmail($data["Customer"]["User"]["Email"]); //Por seguridad no se actualiza
                $ticket->setCustomer($customer);
            } else {
                $userCustomer = new User();
                $userCustomer->setRid(5);
                $userCustomer->setPass(sha1($this->generateRandomString()));
                $login = explode("@", $data["Customer"]["User"]["Email"]);
                $userCustomer->setLogin($login[0]);
                $userCustomer->setEmail($data["Customer"]["User"]["Email"]);
                $userCustomer->setName($data["Customer"]["User"]["Name"]);
                $customer = new Customer();
                $customer->setTel($data["Customer"]["Tel"]);
                $customer->setCel($data["Customer"]["Cel"]);
                $customer->setUser($userCustomer);
                $customer->setCompany($company);
                $ticket->setCustomer($customer);
            }
            $module = ModuleQuery::create()->findPk($data["ModuleId"]);
            if ($module instanceof Module) {
                $ticket->setModule($module);
            } else {
                $r["st"] = 2;
            }
            $type = TicketTypeQuery::create()->findPk($data["TicketTypeId"]);
            if ($type instanceof TicketType) {
                $ticket->setTicketType($type);
            } else {
                $r["st"] = 3;
            }
            $priority = TicketPriorityQuery::create()->findPk($data["PriorityId"]);
            if ($priority instanceof TicketPriority) {
                $ticket->setTicketPriority($priority);
            } else {
                $r["st"] = 4;
            }
            $ticket->setDescription($data["Description"]);
            $ticket->setReproducibility($data["Reproducibility"]);
            $ticket->setUser(Auth::getUser());
            if ($ticket->save()) {
                $r["st"] = 0;
            }
            $this->_view->printJSON($r);
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
    }

    public function listTicketType() {
        try {
            $this->_view->printJSON(TicketTypeQuery::create()->find()->toArray());
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
    }

    public function listTicketPriority() {
        try {
            $this->_view->printJSON(TicketPriorityQuery::create()->find()->toArray());
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
    }

    public function index() {
        Utility::redirect("/index");
    }

}
