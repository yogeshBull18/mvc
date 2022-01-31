<?php
require '../system/helpers/constant.php';
require '../system/library/error/err.php';
require '../system/helpers/helpers.php';
require '../config/config.php';

spl_autoload_register(function ($class_name) {
    include 'classes/'.$class_name . '.php';
});

$route = new route();   