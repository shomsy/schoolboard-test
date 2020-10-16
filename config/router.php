<?php

use Pecee\SimpleRouter\SimpleRouter;

SimpleRouter::setDefaultNamespace('App\Controllers');
require_once(APP_ROOT . '/routes/web.php');
SimpleRouter::start();
