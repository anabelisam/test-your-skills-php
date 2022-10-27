<?php

/* Este script genera una nueva contraseña cada vez que se ejecuta, tú debes organizar el código 
y utilizar funciones propias del lenguaje para optimizar el funcionamiento de este flujo de trabajo.

Además, explica lo siguiente: ¿por qué si tenemos una variable llamada $longPassword

Tip: Antes de realizar la optimización del flujo de trabajo, realiza el diagrama de flujo correspondiente al algoritmo actual y el acorde a tus mejoras sugeridas */

$newPassword = '';

$numbers = [1,2,3,4,5,6,7,8,9,0];
$letras = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
$longPassword = 6;

for ($i=0; $i < $longPassword/2; $i++) { 
    $newPassword .= $numbers[mt_rand(0,9)].$letras[mt_rand(0,25)];
}

echo $newPassword;
?>