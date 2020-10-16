<?php


use Pecee\SimpleRouter\SimpleRouter;

error_reporting(-1);
ini_set('display_errors', 'On');

require_once dirname(__DIR__ . '/../../') . '/vendor/autoload.php';

SimpleRouter::setDefaultNamespace('App\Controllers');
require_once dirname(__DIR__ . '/../../') . '/routes/web.php';
SimpleRouter::start();
