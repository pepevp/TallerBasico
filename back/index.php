<br>
<?php
echo "<html>";
echo "Taller inicio de PHP";
echo "<br></br>";

//Esto se genera en servidor
echo "bienvenido al taller de php";
echo "<br></br>";
echo $today = date("d/m/Y");

?>
</br>
<br></br>
<?php
echo "sesion 1";
echo "<br></br>";

define("PI", 3.1416);

echo PI;
?>
<br></br>

<?php
$Nombre="Carlos";
$Nombre="Eduardo";
echo $Nombre;
echo $Nombre;
echo "<br></br>";

//Indexado
$frutas=["Limón","pera"];

//Asociativo
$personas=["nombre"=> "Juan", "edad"=>30];

class Persona{
    public $nombre;
    public $edad;
}

$oNombre= new Persona();
$oNombre->nombre="Juan";
$oNombre->edad=30;

echo $oNombre->nombre;

echo "<br></br>";
var_dump($oNombre);
?>