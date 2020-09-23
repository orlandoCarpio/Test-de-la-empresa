<?php
    class Funciones{
        protected $id;
        public function __construct($id){
            $this->id=$id;
        }
        public function entero(){
            return (preg_match("/^([0-9])*$/",$this->id))?true:false;
        }
        public function mayor(){
            return ($this->id>=2)?true:false;
        }
        public function par(){
            return ($this->id%2==0)?true:false;
        }
        public function positivo(){
            return (is_int(+$this->id))?true:false;
        }
        public function guardar(){
            $_SESSION['array'][]=$this->id;
            return;
        }
        public function mostrar($array){
            foreach ($array as  $value) {
                echo "<h4>Ingresé al array y tengo el ID: ".$value."</h4>";
            }
            session_destroy();
        }
    }