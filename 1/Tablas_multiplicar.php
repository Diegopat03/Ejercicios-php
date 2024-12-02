<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablas de multiplicar</title>
</head>
<body>
    <form action="Tablas_multiplicar.php">
        <label>
            Numero:
            <input type="text" name="Num">
            <input type="submit">
        </label>
    </form>

    <?php
    if (isset($_REQUEST["Num"])) {
        # code...
    
    $Num= 0;
    $numero = $_REQUEST["Num"];
    for ($i=0; $i <= 10 ; $i++) { 
        echo "<br>$numero X $i = " . $numero * $i ."<br>";
    }
}
    ?>


</body>
</html>