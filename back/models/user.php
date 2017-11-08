<?php
require_once '../common/bl.php';
require_once '../common/dal.php';
require_once '../models/roleModels.php';
require_once '../common/passwordHandler.php';


Class User implements JsonSerializable {
    private $administrator_id;
    private $administrator_name;
    private $administrator_role;
    private $administrator_email;
    private $administrator_password;
    private $permission;

function __construct($dataArray){
    $this->administrator_id =$dataArray['administrator_id'];
    $this->administrator_name=$dataArray['administrator_name'];
    $this->administrator_role=$dataArray['administrator_role'];
    $this->administrator_email=$dataArray['administrator_email'];
    $this->administrator_password=$dataArray['administrator_password'];
    $this->permission=$dataArray['permission'];
} 


public function getAdminName(){
    return $this->administrator_name;
}
public function setAdminPassword(){
    $pw= new PasswordHandler();
    $this->administrator_password=$pw->getHash($password);
    }
    
public function jsonSerialize(){
 $dataArray=[
'administrator_id'=> 1,
'administrator_name'=>'Rosemary Saunders',
'administrator_role'=>'Owner',
'administrator_password'=>'',
'permission'=>'1'
 ];
return $dataArray;
 }
}