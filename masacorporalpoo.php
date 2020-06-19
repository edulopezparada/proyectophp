<?php
    class Persona{
        public $edad;
        public $altura;
        public $peso;
        public $imc;
        //getters
        public function getEdad(){
            return $this->edad;

        }
        public function getALtura(){
            return $this->altura;

        }
        public function getPeso(){
            return $this->peso;

        }
        //setters
        public function setEdad($edad){
         $this->edad=$edad;

        }
        public function setAltura($altura){
            $this->altura=$altura;
   
        }
        public function setPeso($peso){
            $this->peso=$peso;
   
        }
        public function setIMC($imc){
            $this->imc=$imc;
   
        }
        public function IMC(){
            return $this->imc = $this->peso/($this->altura **2);
   
        }   
        public function IMC2(){
            if($this->imc <= 15){
                return 'Delgadez muy severa';
            }
            if($this->imc <= 15.9){
                return 'Delgadez severa';
            }
            if($this->imc <= 18.4){
                return 'Delgadez muy severa';
            }
            if($this->imc <= 24.9){
                return 'Peso saludable';
            }
            if($this->imc <= 29.9){
                return 'Sobrepeso';
            }
            if($this->imc <= 34.9){
                return 'Obesidad Severa';
            }
            if($this->imc >= 40){
                return 'Obesidad mórbida';
            }
        }
    }
    $maria= new Persona();
    $maria->setEdad('28');
    $maria->setAltura('1.75');
    $maria->setPeso('75');

    echo "<h3>Maria</h3>";
    echo "Edad: ".$maria->edad;
    echo "<br/>Altura: ".$maria->altura;
    echo "<br/>Peso: ".$maria->peso;
    echo "<br/>IMC: ".$maria->IMC();
    echo "<br/>Rango: ".$maria->IMC2();

    $edu= new Persona();
    $edu->setEdad('20');
    $edu->setAltura('1.69');
    $edu->setPeso('66');

    echo "<h3>Edu</h3>";
    echo "Edad: ".$edu->edad;
    echo "<br/>Altura: ".$edu->altura;
    echo "<br/>Peso: ".$edu->peso;
    echo "<br/>IMC: ".$edu->IMC();
    echo "<br/>Rango: ".$edu->IMC2();

    ?>
    