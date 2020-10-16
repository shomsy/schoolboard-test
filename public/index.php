<?php

error_reporting(-1);
ini_set('display_errors', 'On');

define('APP_ROOT', __DIR__ . '/../');

require_once(APP_ROOT . '/vendor/autoload.php');
require_once(APP_ROOT . '/config/bootstrap.php');
require_once(APP_ROOT . '/config/router.php');
