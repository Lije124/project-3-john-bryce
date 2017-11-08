<?php
require_once'models.php';
require_once '../common/dal.php';

    
            
Class StudentModel extends Model implements JsonSerializable{

private $student_id;
private $student_name;
private $student_email;
private $student_phone;
private $student_image;

function __construct($params) 
{
   $this->tableName =`school_students`;
   $this->student_id= $params["student_id"];
   $this->student_name=$params["student_name"];
   $this->student_phone=$params["student_phone"];
   $this->student_email=$params["student_email"];
   $this->student_image= $params["student_image"];
}


public function getID()
{
    return $this->student_id;
}

function getName()
{
    return $this->student_name;
}

function getPhone()
{
    return $this->student_phone;
}

function getEmail()
{
    return $this->student_email;
}
function getImage()
{
    return $this->student_image;
 }

function jsonSerialize(){
    return[
       "student_id"=>$this->getID(),
       "student_name"=>$this->getName(),
       "student_phone"=>$this->getPhone(),
       "student_email"=>$this->getEmail(), 
       "student_image"=>$this->getImage()
              ];
}
}


?>