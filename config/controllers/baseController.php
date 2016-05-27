<?php

abstract class BaseController extends Controller {

    public function __construct() {
        parent::__construct();
    }

    /**
     * Method must implement all drivers that inherit from the class.
     */
    abstract public function index();

    /* Methods and functions for all controllers */

    function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

}
