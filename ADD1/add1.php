<?php
        $numero1 = $_POST['nhijos'];
        $numero2 = $_POST['cantven'];
        $comision = $numero2 * (7.5/100);
        $bonohijos = $numero1 * 50;
        $sueldofinal = (600 + $comision + $bonohijos)*89/100;
        echo "<h1>CACULADORA DE SUELDO NETO DE LA EMPRESA</h1>";
        echo "<h4>El suedo total es: ".$sueldofinal," nuevos soles<h4>";
        echo "<H2>DETALLES:</H2>";
        echo "<h4>Su sueldo basico es de 600 nuevos soles</h4>";
        echo "<h4>El bono por hijos es de: ".$bonohijos," nuevos soles</h4>" ;
        echo "<h4>La comison es igual  a: ".$comision," nuevos soles<h4>";
?>
