<?php
// This file generated by Propel 1.6.9 convert-conf target
// from XML runtime conf file /home/felipe/Documentos/Universidad/Software II/Soportando PHP/soportando/config/propel/runtime-conf.xml
$conf = array (
  'datasources' => 
  array (
    'Soportando' => 
    array (
      'adapter' => 'mysql',
      'connection' => 
      array (
        'dsn' => 'mysql:host=localhost;dbname=soportando;charset=UTF8',
        'user' => 'qantica',
        'password' => 'ambiok',
      ),
      'settings' => 
      array (
        'charset' => 
        array (
          'value' => 'utf8',
        ),
      ),
      'options' => 
      array (
        'MYSQL_ATTR_INIT_COMMAND' => 
        array (
          'value' => 'SET NAMES utf8 COLLATE utf8_unicode_ci',
        ),
      ),
    ),
    'default' => 'Soportando',
  ),
  'generator_version' => '1.6.9',
);
$conf['classmap'] = include(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'classmap-Soportando-conf.php');
return $conf;