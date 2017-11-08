<?php
    require_once '../models/user.php';
    require_once 'masterApi.php';

    class Login {
        public function doLogin($administrator_name, $administrator_password) {
           // if ($user == 'Rosemary' && $pass== '123') {

               // GOTO SQL and bring User - if no rows - return false
                $user = new User(1, 'Rosemary Saunders', 1);
            
                    //$_SESSION['user'] = $usr;
                  // $_SESSION['user']->getAdminName();
                
                return json_encode($user, JSON_PRETTY_PRINT);
           // }    
        }
    }