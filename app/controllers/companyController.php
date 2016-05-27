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
class CompanyController extends BaseController {

    public function __construct() {
        //header('Access-Control-Allow-Origin: *');
        parent::__construct();
    }

    public function getList() {
        try {
            $this->_view->printJSON(CompanyQuery::create()->find()->toArray());
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
    }

    public function getListModules() {
        try {
            $ps = ProjectQuery::create()->find();
            foreach ($ps as &$p) {
                $pqs = $p->getPackages();
                foreach ($pqs as &$pq) {
                    $pq->getModules();
                }
            }
            $this->_view->printJSON($ps->toArray());
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
    }

    public function index() {
        Utility::redirect("/index");
    }

}
