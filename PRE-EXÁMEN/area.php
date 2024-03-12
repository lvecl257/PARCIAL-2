<?php
    if($_POST)
    {
        echo "<H3>DIME LA FRASE EN ESALERA : </H3>";
        $base=$_POST["txtBase"];
        $altura=$_POST["txtAltura"];
        $area= $base * $altura;
        echo "EL AREA DEL RECTANGULO ES : " . $area;
    }
?>