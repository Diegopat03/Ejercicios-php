<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <form target="Cuadro" method="POST" action="Calculo.php">
        Ingrese los numeros a calcular:
        <br>
        <input type="text" name="Num1" >
        <input type="text" name="Num2" >

        <br>
        <br>

        <input type="submit" value="+" name="Suma">
        <input type="submit" value="-" name="Resta" >
        <input type="submit" value="*" name="Multiplicacion">

    </form>
    <br>

    <iframe name="Cuadro"></iframe>

    

    
</body>
</html>