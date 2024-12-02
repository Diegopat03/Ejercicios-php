<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Division</title>
</head>
<body>
    
<form>
    <label>
        <b>Division entre dos digitos</b>
        <br>
        Ingrese el primero digito: <br>
        <input type="number" name="numero1">
        <br>
        Ingrese el segundo digito: <br>
        <input type="number" name="numero2">
        <br>
        <br>
        <input type="submit" value="Sumar">
    </label>
</form>
<?php
if (isset($_REQUEST["numero1"])) {

    $num1= $_REQUEST["numero1"];
    $num2= $_REQUEST["numero2"];

    if ($num1>$num2) {
    $resultado=$num1 / $num2;
    echo "La Division entre $num1 y $num2 es: " . $resultado;
    } else {
    echo "El primer digito es menor al segundo, intente con numero distintos";
    }
}
?>
</body>
</html>