<?php

class Persona{

    //Atributos
    private $nombre;
    private $edad;

    public function __construct($name,$age){
        $this->nombre = $name;
        $this->edad = $age;

    }
    public function __get($atrib){
        return $this->$atrib;

    }
    public function __set($atrib,$val){
        $this->$atrib = $val;

    }
    public function __destruct(){
        echo 'Objeto destruído';
    }
}
