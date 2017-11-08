<?php

require_once "controller.php";
require_once '../models/courseModels.php';
require_once '../common/bl.php';

class CourseController extends Controller {
    private $tableName='school_courses';
    private $model;

function getAllCourses(){
$bl = new BL();	

$coursesArray=array();	

$allCourses=$bl->getAllTable($this->tableName);

foreach($allCourses as $row){
	$courses= new CourseModel($row);
array_push($coursesArray,$courses->jsonSerialize());
}
return $coursesArray;
}
} 
 
//    function Create($phone){
  //      $bl =new BL();
    //    $newPhone = new PhoneModel(0, 's8 plus', 1);
      //  $newPhone=$bl->insertPhones($newPhone);
        //return 1;
         
    ?>