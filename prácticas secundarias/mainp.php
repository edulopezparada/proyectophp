<?php

require 'persona.php';

$p = new Persona('Rafael',24);
    echo $p->nombre. '<br>';
    echo $p->edad. '<br>';

    // unset($p);
    
$p->nombre = 'Lucas';

echo $p->nombre. '<br>';


var_dump($p);