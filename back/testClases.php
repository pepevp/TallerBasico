<?php

include __DIR__ . "/interfaces/iAnimal.php";
include __DIR__ . "/interfaces/iVehiculo.php";
include __DIR__ . "/class/perro.php";
include __DIR__ . "/class/gato.php";
include __DIR__ . "/class/abstractTransporte.php";
include __DIR__ . "/class/bicicleta.php";
include __DIR__ . "/class/autobus.php";

$oPerro= new Perro();
$oPerro->hacerSonido();
echo "<br>";
$oGato= new Gato();
$oGato->hacerSonido();


echo "<br>";
echo "<br>";

$oBiclicleta= new Bicicleta();
$oBiclicleta->arrancar();
echo "<br>";
$oBiclicleta->detener();
echo "<br>";

$oAutobus= new autobus();
$oAutobus->arrancar();
echo "<br>";
$oAutobus->detener();



?>

