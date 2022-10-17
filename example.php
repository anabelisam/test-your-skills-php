<?php

/*
Objetivo: Realiza la suma de dos números través de variables.
Optimiza el siguiente bloque de código.
*/

//Analicemos cada línea
$firstNumber = 8; //La variable $firstNumber tiene asignado un valor entero de 8
$secondNumber = 10; //La variable $secondNumber tiene asignado un valor entero de 10
$result = 0; //La variable $result tiene asignado un valor de 0

$result = 8 + 10; //La variable $result está recibiendo el valor resultante de la suma del número 8 + 10
echo $result;


//Resolvamos el problema reduciendo la cantidad de líneas de código
$result = $firstNumber + $secondNumber; //Cambiamos los valores estáticos de números por las variables en la misma línea que asignamos el valor resultante a $result
echo $result;

//Otra forma de hacerlo
echo $result = $firstNumber + $secondNumber;

//Una más
echo $firstNumber + $secondNumber;

//La podemos convertir en una función que muestre el resultado desde adentro:
function sumatoriaEcho($fNumber, $sNumber) {
    echo $fNumber + $sNumber;
}
sumatoriaEcho($firstNumber, $secondNumber);

//La podemos convertir en una función que retorne el resultado y lo mostremos al llamar:
function sumatoriaReturn($fNumber, $sNumber) {
    return $fNumber + $sNumber;
}
echo sumatoriaReturn($firstNumber, $secondNumber);

//Todas nos resuelven el problema, pero tú ¿Con cuál solución te quedas?
