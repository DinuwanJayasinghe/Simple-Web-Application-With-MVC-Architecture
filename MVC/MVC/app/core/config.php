<?php

if ($_SERVER['SERVER_NAME'] == 'localhost') {

    // Database Configuration
    define('DBNAME', '');
    define('DBHOST', 'localhost');
    define('DBUSER', 'root');
    define('DBPASS', '');

    // Link Configuration

    define('ROOT', 'http://localhost/projectmvc/public');
} else {

    // Database Configuration
    define('DBNAME', '');
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
