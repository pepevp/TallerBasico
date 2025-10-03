<?php
/*
○ Defina dos variables con valores numéricos y realice operaciones aritméticas
básicas (suma, resta, multiplicación, división, módulo).

○ Use operadores de comparación para verificar si una variable es mayor,
menor o igual que la otra.

○ Usa un operador ternario para determinar si una variable es par o impar.

○ Aplica operadores lógicos para verificar si ambas variables son mayores de
10 y muestra un mensaje dependiendo del resultado.

○ Implementa operadores de incremento y decremento y muestra cómo
cambian los valores de las variables.
*/

$a = 10;
$b = 2;

echo $a + $b;
echo "<br></br>";
echo $a - $b;
echo "<br></br>";
echo $a * $b;
echo "<br></br>";
echo $a / $b;
echo "<br></br>";
echo $a % $b;
echo "<br></br>";


if($a > $b){
    echo "a es mayor que b";
}else{
    echo "b es mayor que a";
}
echo "<br></br>";

$c = 8;
$d = 12;


echo $c > $d ? "c es mayor que d" : "d es mayor que c";
echo "<br></br>";

if($a > 10 && $b > 10){
    echo "a y b son mayores que 10";
}else{
    echo "a y b son menores o igual que 10";
}
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