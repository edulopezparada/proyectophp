<?php
class dado{ 
    private $puntos; 

    public function tirate(){ 
       $this->puntos=$randval = rand(1,6); 
    } 
    public function verDados(){
        $this->tirate();
        return $this ->puntos;
    }
} 

$mi_dado = new dado(); 

echo "<br>Ha salido un " . $mi_dado->verDados(); 

class informacion{
    public $nombre;
    private $apellido;
    private $f_nacimiento;
    public $edad;

    public function setFecha($f_nacimiento){
        $this->f_nacimiento = $f_nacimiento;
    }
    public function mostrarFecha(){
        return $this->f_nacimiento;
    }
    public function setApellido($apellido){
        $this->apellido = $apellido;
    }
    public function mostrarApellido(){
        return $this->apellido;
    }

}
 
$persona1 = new informacion();
$persona1->nombre = 'Edu';
$persona1->setApellido('Lopez Parada');
$persona1->setFecha('06-05-2000');
echo '<br>';
echo $persona1->nombre;
echo '<br>';
echo $persona1->mostrarApellido();
echo '<br>';
echo $persona1->mostrarFecha();
echo '<br>';
