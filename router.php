<?php
/* echo $controller;
echo $action; */

include_once 'controllers/controller_' . $controller . '.php';
$classController = 'Controller' . ucfirst($controller);
$controller = new $classController;
$controller->$action();
