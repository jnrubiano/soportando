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
class UserController extends BaseController {

    public function __construct() {
        //header('Access-Control-Allow-Origin: *');
        parent::__construct();
    }

    public function getUser() {
        try {
            $user = Auth::getUser();
            if ($user instanceof User) {
                $user->getRol();
                $user = $user->toArray(BasePeer::TYPE_PHPNAME, true, array(), true);
                unset($user["Pass"]);
                unset($user["RecoverCode"]);
                unset($user["RecoverDue"]);
                unset($user["LastAccess"]);
            } else {
                $user = array();
            }
            $this->_view->printJSON($user);
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
    }

    public function index() {
        Utility::redirect("/index");
    }

}
