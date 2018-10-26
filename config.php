<?php

ini_set('display_errors', 1);

define('CONSUMER_KEY', 'vfCDjQVBO5gg7OLhewzHoIBPh');
define('CONSUMER_SECRET', 'VbuAGY1YXVmhK6plZAqIQxMoLRM72kdq5fpWCUCV6FHTHgDMDB');
define('CONSUMER_URL', 'https://' . $_SERVER['HTTP_HOST'] . '/login.php');

define('DSN', 'mysql:host=localhost;dbname=dotinstall_tw_connect_php');

define('DB_USERNAME', 'dotinstalluser');

define('DB_PASSWORD', 'testtest');

session_start();



require_once(__DIR__. 'functions.php');
require_once(__DIR__. 'autoload.php');


