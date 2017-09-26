﻿<?php
/**
 * Description
 *
 * @author dmitriy.fedosenko
 */
class Controller{
    
    public $controllerName = "application";
	
    public function getClassName(){
        return get_class($this);
    }
	
    public function render($viewName = 'default', $data = []){
        $viewPath = MainConfig::$baseDir."/views/$this->controllerName/$viewName.php";
        if (file_exists($viewPath)){
            require_once($viewPath);
        }else{
            Error::fileNotExist($viewPath); 
        }
    }
	
}
