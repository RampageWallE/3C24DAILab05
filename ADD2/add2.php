<?php 
    $ColaPriceNow = $_POST['ColaPrice'];
    $SodaQuantity = $_POST['ColasNumber'];
        $ColasPriceNew = $ColaPriceNow  * 95/100;
        $TotalPrice = $ColasPriceNew * $SodaQuantity;
        $TotalPriceDiscount = $TotalPrice*7/100; 
        $TotalToPay = $TotalPrice - $TotalPriceDiscount;
        $Gifts = $SodaQuantity * 2;

        echo "<h1>SIMULADOR DE COMPRAS DE GASEOSAS</h1>";
        echo "<h3>RESULTADOS DE LOS DATOS PEDIDOS</h3>";
        echo "<h4>Los que pidio es: ".$SodaQuantity," gaseosa(s)</h4>";
        echo "<h4>Precio antiguo de la gaseosa: ".$ColaPriceNow," nuevos soles</h4>";
        echo "<h4>Nuevo precio de las gaseosas: ".$ColasPriceNew," nuevos soles</h4>";
        echo "<h4>Precio total de la compra es de: ".$TotalPrice," nuevos soles</h4>";
        echo "<h4>Descuento :".$TotalPriceDiscount," nuevos soles</h4>";
        echo "<h4>Total a pagar : ".$TotalToPay," nuevos soles</h4>";
        echo "<h4>Cantidad de caramelos de regalo: ".$Gifts,"</h4>";


?>