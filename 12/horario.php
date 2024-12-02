<?php
$boton1="";
$boton2="";
$boton3="";

if (isset($_POST['Boton1']))$boton1=$_POST['Boton1'];
if (isset($_POST['Boton2']))$boton2=$_POST['Boton2'];
if (isset($_POST['Boton3']))$boton3=$_POST['Boton3'];

if ($boton1) {
    date_default_timezone_set("America/Bogota");
    echo date('l jS \of F Y h:i:s A');
}
if ($boton2) {
    date_default_timezone_set("Europe/Madrid");
    echo date('l jS \of F Y h:i:s A');
}

if ($boton3) {
    date_default_timezone_set("Asia/Tokyo");
    echo date('l jS \of F Y h:i:s A');
}
?>