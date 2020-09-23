<?php
    class Funciones{
        protected $id;
        public function __construct($id){
            $this->id=$id;
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