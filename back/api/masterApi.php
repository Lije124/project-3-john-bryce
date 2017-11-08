<?php
     require_once 'login.php';
     session_start();
     //$name = $_POST["administrator_name"];
    // $pass = $_POST["administrator_password"];

     $login = new Login();
     $_SESSION['loggedin'] = true;

     echo $login->doLogin('Rosemary', '123');
?>