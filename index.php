<?php

ini_set("display_errors", 1);
include('knot.php');

ApplicationController::test($controllerClassName);

/*
// initiate
$controller = new $controllerClassName();

// run current action
$controller->$actionMethodName();

// debug
print $controller->getClassName();
print "<br/> controller: $controllerClassName <br/> action: $actionMethodName 
<br/> path: $controllerPath <br/> dir: ".__DIR__." <br/> file: ".__FILE__."
<br/>namespace: ".__NAMESPACE__." <br/>line: ".__LINE__." <br/>trait: ".__TRAIT__."";
*/
