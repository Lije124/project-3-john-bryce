<?php
    require_once 'dal.php';

    class PasswordHandler {
        private $salt;

        function __construct()
        {
            $this->salt = "myApp##";
        }
        public function getHash($plainPassword) {
            return MD5($this->salt.$plainPassword);
        }
    }