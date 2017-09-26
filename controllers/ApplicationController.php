<?php
/**
 * Description
 *
 * @author dmitriy.fedosenko
 */
class ApplicationController extends Controller{
    
    public $controllerName = 'application';
	
    public function actionDefault(){
        
        require_once(MainConfig::$baseDir."/models/info.php");
        $model = new InfoModel();
        
        
        $this->render("default",[$model->getData()]);
    }
    
}
