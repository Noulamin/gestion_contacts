<?php
    class bnadem {
        protected $name;
        public $longueur;

        public function present (){
            echo "hi my name is $this->name";
        }

        public function __construct($name, $longueur){

            $this->name = $name;
            $this->longueur = $longueur;
        }
    }

    class apprenant extends bnadem{
        protected $minhaa;

        public function __construct($name, $longueur, $minha)
        {
            parent::__construct($name, $longueur);
            $this->minhaa = $minha;
        }

        public function likan()
        {
            echo $this->name;
        }

        public function present (){
            echo "tan9ra fyoucode";
        }
    }

    $object = new apprenant("Ilyasse","1.7m","1000dh");
    echo $object->minhaa;

?>