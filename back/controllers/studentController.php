<?php

require_once 'controller.php';
require_once '../models/studentModels.php';
require_once '../common/bl.php';

class StudentController extends Controller{
       private $tableName='school_students';
       private $model;


function getAllStudents(){
$bl = new BL();	
$studentsArray=array();	
$allstudents=$bl->getAllTable($this->tableName);


foreach($allstudents as $row){
	$students= new StudentModel ($row);
array_push($studentsArray,$students->jsonSerialize());
}
return $studentsArray;
}


function getStudentById($id) {
           $bl=new BL();
            $dataArray = [
                "student_id" => $student_id,
                "student_name" => $student_name,
                "student_phone"=> $student_phone,
                "student_email"=>md5($student_email)

            ];
           
            $s = new StudentModel($dataArray);
            return $s->jsonSerialize();
        }



    
    function Create($phone){
        $bl =new BL();
        $newPhone = new PhoneModel(0, 's8 plus', 1);
        $newPhone=$bl->insertPhones($newPhone);
        return 1;
         
    }
}
?>