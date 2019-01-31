<?php
define('DS', DIRECTORY_SEPARATOR);
$sitePath = realpath(dirname(__FILE__) . DS);
define('SITE_PATH', $sitePath);

define('DB_USER', 'postgres');
define('DB_PASS', '1234');
define('DB_HOST', 'localhost');
define('DB_NAME', 'test_work');