<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <label >
        Ingrese la cantidad de nombres que quiere registrar:
    <form action="arreglo.php">
        <input type="text" name="Contador">
        <input type="Submit" value="Crear">
    </label>
    </form>

    <form action="crear.php" method="post">
        <?php if (isset($_REQUEST['Contador'])) { ?>

            <br>

        <?php for ($i=1; $i <= $_REQUEST['Contador'] ; $i++) { ?>
            <input type="text" name="Nombres[]" placeholder="Nombre"> <br>
        <?php } 
            } ?>

        <input type="submit" value="Registrar">

    </form>


    

</body>
</html>