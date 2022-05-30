<?php
    class Object_{
        // Properties
        public $connect;

        //public $password
        public function connect($db_name)
        {
            $this->connect = new PDO("mysql:host=localhost;dbname=$db_name","root","");
            return $this->connect;
        }
    }
?>