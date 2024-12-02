<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diferencia_Digitos</title>
</head>
<body>
    <form >
        <label >
            Ingrese el primer numero:
            <input type="number" name="Numero1">
            <br>

            Ingrese el segundo numero:
            <input type="number" name="Numero2">
            <br>
            <input type="submit" value="Diferenciar">


        </label>
    </form>
    <?php
    if (isset($_REQUEST["Numero1"])) {
        $num1= $_REQUEST["Numero1"];
        $num2= $_REQUEST["Numero2"];

        if ($num1 >= $num2) {
            $diferencia= $num1 - $num2;
            echo "La diferencia entre el numero " . $num1 . " y ". $num2 . " es: ". $diferencia;
        } else {
            $diferencia= $num2 - $num1;
            echo "La diferencia entre el numero " .$num2. " y ". "$num1". " es: ". $diferencia;
        }
    }
    ?>
</body>
</html>