<?php
//Ejercicio 1
$arreglo = [
    'keyStr1' => 'lado',
    0 => 'ledo',
    'keyStr2' => 'lido',
    1 => 'lodo',
    2 => 'ludo'
];

$cadena1 = implode( "," , $arreglo);
$arreglo2 = array_reverse ($arreglo);
$cadena2 = implode( "," , $arreglo2);
?>
<!doctype html>
<p> <?php echo $cadena1 ?> </p>
<p> decirlo al revés lo dudo. </p>
<p> <?php echo $cadena2 ?> </p>
<p> ¡Que trabajo me ha costado! </p>
</html>