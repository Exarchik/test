<?php
// add libraries
require_once('config/main.php');
require_once('library/inputdata.php');
require_once('library/controller.php');
require_once('library/error.php');

// get controller and action names
$controllerName = InputData::controller();
$actionName = InputData::action();

// get controller class name, action method name and path to current controller
$controllerClassName = ucfirst(strtolower($controllerName))."Controller";
$actionMethodName = "action".ucfirst(strtolower($actionName));
$controllerPath  = "controllers/$controllerClassName.php";

// add current controller
if (file_exists($controllerPath)){
    require_once($controllerPath);
} else {
    Error::fileNotExist($controllerPath); 
}


