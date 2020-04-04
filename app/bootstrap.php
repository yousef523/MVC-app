<?php

//Load config
require_once "config/config.php";


//Load libraries
spl_autoload_register(function($class){
    require_once 'libraries/' . $class . '.php';
});