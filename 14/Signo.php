<?php

$M=$_POST["Mes"];
$D =$_POST["Dia"];

if (isset($_POST['Signo'])){
    if (($M == "Enero" && $D <= 19)){
        echo "Tu signo Zodiacal es Capricornio";
    }
    elseif ($M == "Enero" && $D > 19) {
        echo "Tu signo Zodiacal es Acuario";
    }
    elseif ($M == "Febrero" && $D <= 18) {
        echo "Tu signo zodiacal es Acuario";
    }
    elseif ($M == "Febrero" && $D > 19) {
        echo "Tu signo zodiacal es Piscis";
    }
    elseif ($M == "Marzo" && $D <= 20) {
        echo "Tu signo zodiacal es Piscis";
    }
    elseif ($M == "Marzo" && $D > 21) {
        echo "Tu signo zodiacal es Aries";
    }
    elseif ($M == "Abril" && $D <= 19) {
        echo "Tu signo zodiacal es Aries";
    }
    elseif ($M == "Abril" && $D > 20) {
        echo "Tu signo zodiacal es Tauro";
    }
    elseif ($M == "Mayo" && $D <= 21) {
        echo "Tu signo zodiacal es Tauro";
    }
    elseif ($M == "Mayo" && $D > 21) {
        echo "Tu signo zodiacal es Geminis";
    }
    elseif ($M == "Junio" && $D <= 20) {
        echo "Tu signo zodiacal es Geminis";
    }
    elseif ($M == "Junio" && $D > 21) {
        echo "Tu signo zodiacal es Cancer";
    }
    elseif ($M == "Julio" && $D <= 22) {
        echo "Tu signo zodiacal es Cancer";
    }
    elseif ($M == "Julio" && $D > 23) {
        echo "Tu signo zodiacal es Leo";
    }
    elseif ($M == "Agosto" && $D <= 22) {
        echo "Tu signo zodiacal es Leo";
    }
    elseif ($M == "Agosto" && $D > 23) {
        echo "Tu signo zodiacal es Virgo";
    }
    elseif ($M == "Septiembre" && $D <= 22) {
        echo "Tu signo zodiacal es Virgo";
    }
    elseif ($M == "Septiembre" && $D > 23) {
        echo "Tu signo zodiacal es Libra";
    }
    elseif ($M == "Octubre" && $D <= 22) {
        echo "Tu signo zodiacal es Libra";
    }
    elseif ($M == "Octubre" && $D > 23) {
        echo "Tu signo zodiacal es Escorpio";
    }
    elseif ($M == "Noviembre" && $D <= 21) {
        echo "Tu signo zodiacal es Escorpio";
    }
    elseif ($M == "Noviembre" && $D > 22) {
        echo "Tu signo zodiacal es Sagitario";
    }
    elseif ($M == "Diciembre" && $D <= 21) {
        echo "Tu signo zodiacal es Sagitario";
    }
    elseif ($M == "Diciembre" && $D > 22) {
        echo "Tu signo zodiacal es Capricornio";
    }
}


?>