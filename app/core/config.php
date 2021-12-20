<?php

// Set website title
define("WEBSITE_NAME", "My Website");

// set database variables

define("DB_TYPE", 'mysql');
define("DB_NAME", 'pomora');
define("DB_USER", 'root');
define("DB_PASS", '');
define("DB_HOST", 'localhost');

// Protocal type http or https
define("PROTOCAL", 'http');

// Root and asset path
$path = str_replace('\\', '/' PROTOCAL . "://" . $_SERVER['SERVER_NAME'] . __DIR__ . "/");
$path = str_replace($_SERVER['DOCUMENT_ROOT'], "", $path);

define('ROOT', str_replace("app/core", "public", $path)); // path to public folder
define('ROOT', str_replace("app/core", "public/assets", $path)); // path to asset folder in public

// Set true to allow error reporting, set false when uploading online to stop error reporting\
define('DEBUG', true);
