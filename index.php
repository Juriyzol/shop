<?php

// main
ini_set('display_errors', 1);
error_reporting(E_ALL);

// include files
define('ROOT', dirname(__FILE__));
require_once(ROOT.'/components/Router.php');

// db

// router

$router = new Router();
$router->run();

/*
	Тестовое описание
*/









