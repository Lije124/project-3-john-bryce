<?php
    require_once 'studentApi.php';
    require_once 'courseApi.php';
    require_once 'adminApi.php';
    require_once 'abstractApi.php';
    require_once '../controllers/courseController.php';
    require_once '../controllers/studentController.php';



    $method = $_SERVER['REQUEST_METHOD']; //verb
    
   /* if($method==  'PUT' || $method == 'DELETE') {
        parse_str(file_get_contents("php://input"),$post_vars);
        $params = $post_vars['activitiesArray']; 
    }
    else{
    $params = $_REQUEST['activitiesArray'];
    }*/
   $params = ($_REQUEST['activitiesArray']); 
    switch ($params['ctrl']) {
                   
            case 'StudentApi':
            $sapi = new StudentApi($params);
            $result = $sapi->gateway($method, $params);
            echo json_encode($result);
            break;
            case 'CourseApi':
            $capi = new CourseApi($params);
            $result  = $capi->gateway($method, $params);
            echo json_encode($result);
            break;
            case 'Admin':
            $aapi = new AdminApi();
            $result = $aapi->gateway($method, $params);
            echo json_encode($result);
            break;
    }
?>