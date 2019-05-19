<?php

require_once '../vendor/autoload.php';

ini_set('display_errors', 1);

$controller = new \App\controllers\PhoneValidationController();

$controller->validatePhone(\App\Core\Request::instance());