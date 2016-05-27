<?php
require_once APP_ROOT . 'config/propel/runtime/lib/Propel.php';
$filename = APP_ROOT . "app/models/conf/Soportando-conf.php";
if (file_exists($filename)) {
    Propel::init($filename);
    set_include_path(APP_ROOT . "app/models/classes" . PATH_SEPARATOR . get_include_path());
}


