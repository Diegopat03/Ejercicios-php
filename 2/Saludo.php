<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saludo</title>
</head>
<body>
    <form action="">
        <label >
            Nombre y Apellido:
            <input type="text" name="Nombres">
            <input type="submit">
        </label>
    </form>

    <?php
    if (isset($_REQUEST["Nombres"])) {
    $Nomb = $_REQUEST["Nombres"];
    echo "Bienvenido " . $Nomb . " Que deseas hacer?";
}

    ?>
</body>
</html>