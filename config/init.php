<?php

// Start Session
session_start();

// Config file
require_once 'config.php';

// Include Helpers
require_once 'helpers/system_helper.php';

// Autoloader
function my_autoloader($class_name) {
    require_once 'lib/' . $class_name . '.php';
}

spl_autoload_register('my_autoloader');
