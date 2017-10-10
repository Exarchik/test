<?php

namespace test\library;

use test\config\MainConfig;

/**
 * Description
 *
 * @author dmitriy.fedosenko
 */
class Model{

  public $modelData;
  
  public $modelName;

  public function getClassInfo(){
    return print_r($this);
  }

  public function getClassName(){
    return get_class($this);
  }

}
