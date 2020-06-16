<?php
//Ejercicio1
$a=3;
$b=2;
$c=32;
echo '<p>Ejercicio 2 </p>';
echo $c+=$a;
echo '<br>';
echo $a*($a+$b);
echo '<br>_______________</br>';
//Ejercicio2
$valor=7;
echo '<p>Ejercicio 2 </p>';
if($valor> 5 and $valor<10){
    echo 'true';
}else{
    echo 'false';

}
echo '<br>';

if($valor>=0 and $valor<=20){
    echo 'true';

}else{
    echo 'false';

}
echo '<br>';
if($valor==='10'){
    echo 'true';

}else{
    echo 'false';

}
echo '<br>';
if ($valor>0 && $valor<5 || $valor>10 && $valor<15){
    echo 'true';
}else{
    echo 'false';

}
?>
