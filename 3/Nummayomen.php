<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numero mayor o menor</title>
</head>
<body>
    <label>
        <form action="Nummayomen.php">
        Ingrese el primero digito:
        <input type="Number" name="Numero1">
        <br>
        Ingrese el segundo digito:
        <input type="Number" name="Numero2">
        <br>
        <input type="submit" value="Verificar">

        </form>
    </label>

        <?php
        if (isset($_REQUEST["Numero1"])){
            $Num1= $_REQUEST["Numero1"];
            $Num2= $_REQUEST["Numero2"];

            if ($Num1 > $Num2) {
                echo "El Numero $Num1 es mayor que $Num2 ";

            } elseif ($Num1 == $Num2) {
                echo "Ambos numeros son iguales";
            } else {
                echo "El Numero $Num1 es menor que $Num2 ";
            }      
            }
        ?>
        
    
    
</body>
</html>