<?php

include_once 'config/db.php';
include_once 'viev/helpers.php';
include_once 'classes\getInfo.php';
include_once 'classes\sql.php';
session_start();
ini_set('display_errors',1);
error_reporting(E_ALL);


define('ROOT',dirname(__FILE__));
require_once(ROOT.'/components/router.php');


$router = new Router();
$router->run();
