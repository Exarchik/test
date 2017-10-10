<?php

use test\controller\ApplicationController;

ini_set("display_errors", 1);
include('knot.php');

// initiate
$controller = new $controllerClassNameNS();

// run current action
$controller->$actionMethodName();

// debug
print $controller->getClassName();
print "<br/> controller: $controllerClassName <br/> controllerNS: $controllerClassNameNS
<br/> action: $actionMethodName <br/> path: $controllerPath
<br/> dir: ".__DIR__." <br/> file: ".__FILE__."
<br/>namespace: ".__NAMESPACE__." <br/>line: ".__LINE__." <br/>trait: ".__TRAIT__."";
