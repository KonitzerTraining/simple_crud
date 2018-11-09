<?php
require_once 'Routing.php';

session_start();

$routing = new Routing();
$controllerPath = $routing->route();


/**
 * loader
 */

require_once strtolower($controllerPath).'/'.strtolower($controllerPath).'.controller.php';

//$controller = new MainController();
$className = $controllerPath . 'Controller';
$controllerInstance = new $className();
