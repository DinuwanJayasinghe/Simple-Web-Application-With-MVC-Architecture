<?php

session_start();

require '../app/core/init.php';

//Debug

DEBUG ? ini_set('display_errors', 1) : ini_set('display_errors', 0);
    
//  Create  a object of App class

$app = new App();

// Run loadController here

$app->loadController();
