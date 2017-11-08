<?php
    require_once 'abstractApi.php';
    require_once '../controllers/studentController.php';

    class StudentApi extends Api{

        function Create($params) {
            $s = new StudentController;
            $s->Create($params);
        }

        function Read($params) {
            $s = new StudentController;
            $students=$s->getAllStudents(); 
           if (array_key_exists("student_id", $params)) {
               $student = $s->getStudentById($params["student_id"]);
                return json_encode($student, JSON_PRETTY_PRINT);
            }
            else {
                return $students;
                            }
        }        
                 function Update($params) {
             // TODO
         }
         function Delete($params) {
            // TODO
         }
    }
?>