<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>input</title>
</head>
<body>

<label >
        Ingrese la cantidad de inputs que quiere crear:
    <form action="inputs.php">
        <input type="text" name="Contador">
        <input type="Submit" value="Crear">
    </label>
    </form>

    <form action="inputs.php" method="post">
        <?php if (isset($_REQUEST['Contador'])) { ?>

            <br>

        <?php for ($i=1; $i <= $_REQUEST['Contador'] ; $i++) { ?>
            <input type="text"> <br>
        <?php } 
            } ?>
</form>


</body>
</html>