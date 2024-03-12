<?php
    if($_POST)
    {
        echo "<H3>DIME LA FRASE EN ESALERA : </H3>";
        $Frase=$_POST["txtFrase"];
        $t=strlen($Frase);
        for($i=0; $i<$t; $i++)
        {
            for($j=0; $j<$i; $j++)
            {
                echo $Frase[$j];
            }
            echo "<br>";
        }
    }
?>