<?php
    if($_POST)
    {
        echo "<H3>LA FIGURA</H3>";
        $N=$_POST["txtNumero"];
        for($i=$N; $i>=1; $i--)
        {
            for($j=$N; $j>$i; $j--)
            {
                echo "_";   
            }
            for($k=1; $k<=$i; $k++)
            {
                echo"* ";
            }
            echo "<br>";
        }
    }
?>
