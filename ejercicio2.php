<?php
//Ejercicio 2
$paises = [
    "España" =>["Madrid","Barcelona","Vigo"],
    "USA" =>["Washington D.C","New York","Dallas"],
    "Italia" =>["Roma","Florencia","Milán"],
    "Brasil" =>["Sao Paulo","Rio de Janeiro","Sorocaba"],
    "Portugal" =>["Lisboa","Porto","Valença"],
];

foreach($paises as $pais => $ciudades){
    echo '<p>';
    echo "$pais:";
    foreach($ciudades as $ciudad){
        echo " $ciudad";
    }
    echo '.</p>';
};
//Ejercicio 3
$valores = [23, 54, 32, 67, 34, 78, 98, 56, 21, 34, 57, 92, 12, 5, 61];
//Mayores
rsort($valores);
$idx=0;
do {
    echo $valores[$idx]. ',';
    $idx =$idx +1;
}while($idx<3);
echo "<br>********<br>";
//Menores
sort($valores);
$idy=0;
do {
    echo $valores[$idy]. ',';
    $idy =$idy +1;
}while($idy<3)


?>
