<?php
define('ROOT', str_replace("index.php", "", $_SERVER["SCRIPT_FILENAME"]));
require("vendor/autoload.php");
require(ROOT . 'Router.php');
require(ROOT . 'Request.php');
require(ROOT . 'Dispatcher.php');

$dispatch = new Dispatcher();
$dispatch->dispatch();