<?php
require_once '../common/bl.php';
require_once '../common/dal.php';
require_once '../models/models.php';

abstract class GetterSetter{
public function _get($name){
    $method=sprintf('get%s',ucfirst($name));
    if(!method_exists($this,$method)){
        throw new Exception();
      }
     return $this->$method(); 
}

public function _set($name, $v){
    $method=sprintf('set%s', ucfirst($name));
    if (!method_exists($this, $method)){
        throw new Exception();
    }
$this->$method($v);
}

    }
?>
