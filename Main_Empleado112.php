<?php
    require_once 'Empleado112.php';

    $empleado1=new Empleado("Sabrina", "Sabat", 3500);
    $empleado2=new Empleado("Bruno", "Lima", 1500);

    echo $empleado1->getNombreCompleto(). ". Debe pagar impuestos? ". '<b>'. ($empleado1->debePagarImpuestos()?'Si':'No').'</b><br>';

    echo '<br>'.$empleado2->getNombreCompleto() . ". Debe pagar impuestos? ". '<b>'. ($empleado2->debePagarImpuestos() ? 'Si' : 'No');


?>
