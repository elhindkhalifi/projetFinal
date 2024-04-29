<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


// Start session
session_start();

// Include config.php
require_once 'config.php';

// Autoload function
spl_autoload_register(function ($class) {
    $controllersPath = 'controllers/' . $class . '.php';
    $modelsPath = 'models/' . $class . '.php';

    if (file_exists($controllersPath)) {
        include $controllersPath;
    } elseif (file_exists($modelsPath)) {
        include $modelsPath;
    }
});

// Load controller and method from URL parameters
$controllerName = isset($_GET['controller']) ? $_GET['controller'] : 'HomeController';
$methodName = isset($_GET['method']) ? $_GET['method'] : 'index';

// Check if controller and method exist, otherwise fallback to defaults
$controllerName = file_exists('controllers/' . $controllerName . '.php') ? $controllerName : 'HomeController';
$methodName = method_exists($controllerName, $methodName) ? $methodName : 'index';

// Create instance of controller and call method
$controller = new $controllerName();
$controller->$methodName();


echo "End of index.php"; // Debugging statement

