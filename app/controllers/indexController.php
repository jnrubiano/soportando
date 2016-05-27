<?php

class IndexController extends BaseController {

    public function __construct() {
        //header('Access-Control-Allow-Origin: *');
        if(!Auth::check()){
            Utility::redirect("/login");
        }
        parent::__construct();
    }

    public function index() {
        try {
            // $this->_view->printJSON(array());
            $this->_view->printTemplate();
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
    }

}
