<?php
    $num1= $_REQUEST["Num1"];
    $num2= $_REQUEST["Num2"];
    
    if (isset($_POST['Suma'])) {
        $Calculo= $num1 + $num2;
        echo "$num1 + $num2 = ".$Calculo;
    }

    if (isset($_POST['Resta'])) {
        $Calculo= $num1 - $num2;
        echo "$num1 - $num2 = ".$Calculo;
    }

    if (isset($_POST['Multiplicacion'])) {
        $Calculo= $num1 * $num2;
        echo "$num1 * $num2 = ".$Calculo;
    }


    ?>