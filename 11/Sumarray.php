<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <label >
        Ingrese la cantidad de Numero que quiere registrar:
    <form action="Sumarray.php">
        <input type="Number" name="Contador">
        <input type="Submit" value="Crear">
    </label>
    </form>

    <form action="suma.php" method="post">
        <?php if (isset($_REQUEST['Contador'])) { ?>

            <br>

        <?php for ($i=1; $i <= $_REQUEST['Contador'] ; $i++) { ?>
            <input type="Number" name="Numeros[]" > <br>
        <?php } 
            } ?>

        <input type="submit" value="Registrar">


    </form>

    



    

</body>
</html>