<?php

class LoginController extends BaseController {

    public function __construct() {
        parent::__construct();
        $this->_view->setLayout("empty");
        if(Auth::check()){
            Utility::redirect("/index");
        }
    }

    public function index() {
        try {
            $this->_view->printTemplate();
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
    }

    public function init() {
        try {
            if (Auth::login($this->post("user"), $this->post("pass"))) {
                Utility::redirect("/index");
            } else {
                $this->_view->assign("error", "Error en el usuario o contraseña.");
            }
            $this->index();
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
    }
    
    public function close(){
        Auth::logout("/login");
    }

}
