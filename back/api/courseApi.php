<?php
    require_once 'abstractApi.php';
    require_once '../controllers/studentController.php';

    class CourseApi extends Api{

        function Create($params) {
            $c = new CourseController;
            $c->Create($param);
        }
 
       function Read($params) {
            $c = new CourseController;
            $courses=$c->getAllCourses();
            if (array_key_exists("course_id", $params)) {
                $course = $c->getCourseById($params["course_id"]);
                return json_encode($course, JSON_PRETTY_PRINT);
            }
            else {
                return $courses;
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

