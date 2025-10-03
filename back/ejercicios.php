<?php
/*

1. Crea un archivo PHP que haga lo siguiente:
○ Define variables de distintos tipos: un entero, un flotante, una cadena y un
booleano. Luego imprime el valor y tipo de cada variable utilizando la función
var_dump().

○ Crea un array asociativo que contenga información de una persona (nombre,
edad, ciudad).

○ Define una constante llamada NOMBRE_CURSO con el valor "Programación
PHP" y muestra su valor en pantalla.

○ Crea una función que reciba un array de números y devuelva la suma de
todos sus elementos. Llámala con un array de ejemplo y muestra el
resultado.

○ Declara una variable con el valor null y utiliza la función is_null() para
verificar si la variable tiene valor null.

*/

$nombre="Carlos";
$apellido1="Basulto";
$apellido2="Pardo";
$edad=45;
$altura=1.79;
$soltero=false;

var_dump($nombre);
echo "<br></br>";
echo "<br></br>";

var_dump($nombre,$apellido1,$apellido2,$edad);
echo "<br></br>";
echo "<br></br>";

$aPersona=["nombre"=>"Carlos","apellido1"=>"Basulto","apellido2"=>"Pardo","edad"=>45,"altura"=>1.79,"soltero"=>false];

var_dump($aPersona);
echo "<br></br>";
echo "<br></br>";


define("NOMBRE_CURSO","Curso de PHP");
echo NOMBRE_CURSO;
echo "<br></br>";
echo "<br></br>";

$tipoNULL=NULL;
//isNULL()
if(is_null($tipoNULL)){
    echo"es nulo";
}
echo "<br></br>";
echo "<br></br>";


$numero1=5;
$numero2=10;

$resultado=$numero1+$numero2;
echo $resultado;
echo "<br></br>";
echo "<br></br>";


$a = 10;
$b = 3;
echo $a + $b; // Imprime 13
echo "<br></br>";
echo $a - $b; // Imprime 7
echo "<br></br>";
echo $a * $b; // Imprime 30
echo "<br></br>";
echo $a / $b; // Imprime 3.3333
echo "<br></br>";
echo $a % $b; // Imprime 1 (resto de la división)
echo "<br></br>";
echo $a ** $b; // Imprime 1000 (10 elevado a la potencia de 3)

echo "<br></br>";
echo "<br></br>";

$miNombre="Carlos ";

$miNombre=$miNombre . "Basulto Pardo";

echo $miNombre;
echo "<br></br>";
echo "<br></br>";


$a=10;
$b=3;

if($a==$b){
    echo"Es igual";
}else{
    echo"no es igual";
}
echo "<br></br>";
echo "<br></br>";

$esMayorDeEdad= ($b>=18) ? true:false;

echo $esMayorDeEdad;

var_dump($esMayorDeEdad);

echo "<br></br>";
echo "<br></br>";

$x=5;

echo ++$x;
echo "<br></br>";

echo $x;
echo "<br></br>";

echo $x++;
echo "<br></br>";

echo $x;
echo "<br></br>";

?>