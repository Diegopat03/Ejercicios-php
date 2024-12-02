<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horoscopo</title>
</head>
<body>
    <form action="Signo.php" target="Cuadro" method="POST">
        Escriba su mes de nacimiento:

        <input type="text" name="Mes">

        <br>

        Digite el dia de nacimiento:

        <input type="Number" name="Dia">
        <br>

        <input type="submit" name="Signo" value="Tu Signo">

    </form>
    <br>

    <iframe name="Cuadro"></iframe>


    
</body>
</html>