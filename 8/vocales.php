<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contar vocales</title>
</head>
<body>
    <form>
    <label>
        Ingrese una palabra:
        <input type="text" name="Palabra">
        <br>
        <input type="submit" value="Contar">
    </label>
    </form>
    

    <?php

    if (isset($_REQUEST["Palabra"])) {
        $pal= $_REQUEST["Palabra"];

        $numvocales= 0;

        for ($i=0; $i < strlen($pal); $i++) { 
            switch ($pal[$i]) {
                case 'A':
                case 'a':
                    $numvocales++;
                    break;
                case 'E':
                case 'e':
                    $numvocales++;
                    break;
                case 'I':
                case 'i':
                    $numvocales++;
                    break;
                case 'O': 
                case 'o':
                    $numvocales++;
                    break;
                case 'U':
                case 'u':
                    $numvocales++;
                    break;
            }
        }
        if ($numvocales == 1) {
            echo "La palabra ingresada tiene $numvocales vocales";
        }else{
            echo "La palabra ingresada tiene $numvocales vocales";
        }
    }
    ?>
</body>
</html>