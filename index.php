<?php 

    $kid = new Kid();

    echo $kid->showName().'<br>';

    $kid->setName('さゆり');
    $kid->setSex('girl');
    $kid->setAge('25');
    echo $kid->showName();
    

    class Kid{
        private $name;
        private $sex;
        private $age;

        function __construct(){
            $this->name = 'Seed';
            $this->sex  = 'boy';
            $this->age  = 10 ;
        }

        public function setName($namae){
            $this->name = $namae;
        }

        public function setSex($seibetu){
            $this->sex = $seibetu;
        }

        public function setAge($nenrei){
            $this->age = $nenrei;
        }


        public function getName(){
            return $this->name;
        }

        public function getSex(){
            return $this->sex;
        }

        public function getAge(){
            return $this->age;
        }

        //q1
        // public function showName(){
        //     if($this->sex == 'boy'){
        //         echo $this->name . 'くん<br>';
        //     }elseif($this->sex == 'girl'){
        //         echo $this->name . 'ちゃん<br>';
        //     }else{
        //         echo $this->name . 'さま<br>';
        //     }
        // }

        //q2
        public function showName(){
            $title = '';
            if ($this->sex == 'boy') {
                if ($this->age >= 12) {
                    $title = '君';
                }else{
                    $title = 'くん';
                }
            }elseif ($this->sex == 'girl'){
                if ($this->age >= 12) {
                    $title = 'さん';
                }else{
                    $title = 'ちゃん';
                }
            }else{
                    $title = 'にゃん';
                }
                return $this->name . $title;
            }
    }

 ?>