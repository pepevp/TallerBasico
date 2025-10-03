<?php
/*
○ Utilice una estructura condicional if-else para verificar si un número es
positivo, negativo o cero.

○ Utilice un bucle for para imprimir los números del 1 al 10.

○ Utilice un bucle while que sume los números del 1 al 100 y muestre el
resultado.

○ Utilice switch para mostrar el día de la semana basado en un número (1-7).

○ Cree un array de nombres y use foreach para imprimir cada nombre.
*/

$numero1=-1;
if($numero1<0){
    echo "el numero es negativo";
}else{
    if($numero1>0){
        echo "el numero es positivo";
    }else{
        echo "el numero es 0";
    }
}

for ($i=0; i<10; i++) {
echo "$i";
}


?>