<?php

define("WEBSITE_TITLE", 'MY RACE');

// constants for database
define('DB_NAME', "race");
define('DB_USER', "root");
define('DB_PASS', "");
define('DB_TYPE', "mysql");
define('DB_HOST', "localhost");

define('DEBUG', true);

define('THEME', 'frontend/');

define('ADMIN', 'admin/');


if(DEBUG){
    
    ini_set('display_errors', 1);


}else{

    ini_set('display_errors', 0);
}