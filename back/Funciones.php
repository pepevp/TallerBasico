<?php

// los que tienen & son parametros por referencia y los que no por valor.
//IMPORTANTE: los que van por valor solo se ven afectados dentro de la funcion, fuera mantienen el valor que tuvieran antes
function incrementarValor(&$numero, &$numero2, $numero3){
    $numero += 10;
    $numero2+=30;
    $numero3+=600;
}

$valor = 5;
$valor2 = 10;
$valor3 = 6;


incrementarValor($valor, $valor2, $valor3);//Los 2 primeros son referencias a las variables y el tercero es una copia.
echo $valor, " ";
echo $valor2, " ";
echo $valor3, " ";

echo "<br>";
function saludar($nombre = "amigo"){
    echo "Hola que tal estas, $nombre";
}

saludar("Juan");
echo "<br>";

//como la variable a existe dentro y fuera de la funcion, 
//la que va a utilizar al llamarse la funcion es la de dentro de la funcion
function suma($a, $b){
    $a = 100;
    return $a + $b;
}


function resta($a, $b, &$c){
    $a = 100;
    $c += 1000;
    return $a - $b;
}


$a = 10;
$b = 15;

$resultadoSuma = suma($a, $b);
echo " la suma da: ", $resultadoSuma;
echo "<br>";

$resultadoResta = resta($a, $b, $c);
echo " la resta da: ", $resultadoResta;

echo "<br>";

function adios(){
    echo "Nos vemos loco";
}

$miFuncion = 'adios'; //Asigno el nombre de la funcion a una variable
$miFuncion(); //Llamo a la funcion a traves de la variable

echo "<br>";

$miFuncionAnonima = function($nombre){
    return "Hola, $nombre";
};//Este ; por la carisima hace falta aqui

echo $miFuncionAnonima("Pepe");

?>