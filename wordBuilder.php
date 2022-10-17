<?php

/*
* ¿Podrías explicar qué hace este script con sólo leerlo? 
* ¿Cómo optimizarías esta lógica para que pueda construir cualquier palabra?
*/

$alfabeto = [
    'a' => 1,
    'b' => 2,
    'c' => 3,
    'd' => 4,
    'e' => 5,
    'f' => 6,
    'g' => 7,
    'h' => 8,
    'i' => 9,
    'j' => 10,
    'k' => 11,
    'l' => 12,
    'm' => 13,
    'n' => 14,
    'o' => 15,
    'p' => 16,
    'q' => 17,
    'r' => 18,
    's' => 19,
    't' => 20,
    'u' => 21,
    'v' => 22,
    'w' => 23,
    'x' => 24,
    'y' => 25,
    'z' => 26,
    ' ' => 27
];

function translateWords($array, $value){
    echo(array_keys($array, $value))[0];
}

translateWords($alfabeto, 8);
translateWords($alfabeto, 15);
translateWords($alfabeto, 12);
translateWords($alfabeto, 1);

?>