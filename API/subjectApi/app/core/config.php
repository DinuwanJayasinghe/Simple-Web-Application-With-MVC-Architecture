<?php

if ($_SERVER['SERVER_NAME'] == 'localhost') {

    // Database Configuration
    define('DBNAME', 'rest_test');
    define('DBHOST', 'localhost');
    define('DBUSER', 'root');
    define('DBPASS', '');

    // Link Configuration

    define('ROOT', 'http://localhost/subjectApi/public');
} else {

    // Database Configuration
    define('DBNAME', 'rest_test');
    define('DBHOST', 'localhost');
    define('DBUSER', 'root');
    define('DBPASS', '');

    // define('ROOT', 'https://www.yourwebsite.com'); //? Use this for online links...

}

// define('ROOT', 'http://localhost/New_Framework/public');

define( 'APP_NAME', 'My Website');
define( 'APP_DESC', 'Testing PHP MVC Framework...');

// true means show errors
define ('DEBUG', true);



defined('DS')? null : define('DS', DIRECTORY_SEPARATOR);
defined('SITE_ROOT')? null : define('SITE_ROOT', DS . 'xampp' . DS . 'htdocs' . DS . 'php_api');
defined('INC_PATH')? null : define('INC_PATH', SITE_ROOT.DS.'core');
defined('CORE_PATH')? null : define('CORE_PATH', SITE_ROOT.DS.'core');


