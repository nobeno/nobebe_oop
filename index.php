<?php 

    $kid = new Kid();

    $kid->showName();

    $kid->setName('さゆり');
    $kid->setSex('girl');
    $kid->showName();

    class Kid{
        private $name;
        private $sex;

        function __construct(){
            $this->name = 'Seed';
            $this->sex  = 'boy';
        }

        public function setName($namae){
            $this->name = $namae;
        }

        public function setSex($seibetu){
            $this->sex = $seibetu;
        }

        public function getName(){
            return $this->name;
        }

        public function getSex(){
            return $this->sex;
        }

        public function showName(){
            if($this->sex == 'boy'){
                echo $this->name . 'くん<br>';
            }elseif($this->sex == 'girl'){
                echo $this->name . 'ちゃん<br>';
            }else{
                echo $this->name . 'さま<br>';
            }
        }


    }

 ?>