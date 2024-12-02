<?php
include "Sumarray.php";
echo'<pre>';
$Num= $_POST['Numeros'];
$suma= array_sum($Num);
echo "La suma es: $suma";
?>