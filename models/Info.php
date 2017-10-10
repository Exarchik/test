<?php

namespace test\models;

use test\library\InputData;
use test\library\Model;

/**
 * Description
 *
 * @author dmitriy.fedosenko
 */
class InfoModel extends Model{

    public $info;

    public function getData(){

        $this->info = InputData::request();
        return $this->info;
    }
}
