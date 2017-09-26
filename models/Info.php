<?php
/**
 * Description 
 *
 * @author dmitriy.fedosenko
 */
class InfoModel {
    
    public $info;
    
    public function getData(){
        
        $this->info = InputData::request();
        return $this->info;
    }
}
