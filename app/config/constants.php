<?php
// Project Name
define('PROJECT_NAME', 'blog');
// App Root Directory
define('APPROOT', dirname(dirname(__FILE__)) );
// URL Root
define('URLROOT', 'http://'.$_SERVER['HTTP_HOST'].'/'.PROJECT_NAME);

// database config
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', PROJECT_NAME);
