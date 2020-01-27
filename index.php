<?php
/**
 * Marcos Rivera
 * 01-22-2020
 * 328/food/index.php
 */

//Start a session
session_start();

ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require autoload file
require_once ("vendor/autoload.php");

//Instantiate Fat-Free framework (F3)
$f3 = Base::instance();

//Define a default route
$f3->route('GET /', function($f3) {
    $f3->set('title', 'All about Templating!');
    $views = new Template();
    echo $views->render("views/home.html");
});

$f3->run();