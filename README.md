# Ejercicios para optimizar código en PHP
![PHPLOGO](https://www.php.net/images/logos/new-php-logo.png)

💁🏻‍♀️ En este repositorio encontrarás scripts escritos en PHP con diferentes tipos de errores y malas prácticas, tu misión será encontrar la forma más óptima de ejecutar la misma lógica de acuerdo al objetivo que encontrarás al principio de cada documento. Aquí un ejemplo 👇🏼
<br>
## example.php

### Realiza la suma de dos números través de variables. Optimiza el siguiente bloque de código.

_**Paso 1:** Primero analizamos cada línea_
```sh
$firstNumber = 8; //La variable $firstNumber tiene asignado un valor entero de 8
$secondNumber = 10; //La variable $secondNumber tiene asignado un valor entero de 10
$result = 0; //La variable $result tiene asignado un valor de 0

$result = 8 + 10; //La variable $result está recibiendo el valor resultante de la suma del número 8 + 10, pero no está usando las variables
echo $result;
```

_**Paso 2:** Resolvamos el problema reduciendo la cantidad de líneas de código y usando las variables dadas_
 
```sh
//Cambiamos los valores estáticos de números por las variables y asignamos el valor resultante a $result
$result = $firstNumber + $secondNumber;
echo $result;
```

_**Paso 3:** Encontrar otra forma de hacerlo_
```sh
echo $result = $firstNumber + $secondNumber;
```

_**Paso 4:** Otra variación podría ser_
```sh
echo $firstNumber + $secondNumber;
```

_**Paso 5:** La podemos convertir en una función que muestre el resultado desde adentro:_
```sh
function sumatoriaEcho($fNumber, $sNumber) {
    echo $fNumber + $sNumber;
}
sumatoriaEcho($firstNumber, $secondNumber);
```
_**Paso 6:** La podemos convertir en una función que retorne el resultado y lo mostremos al llamar:_
```sh
function sumatoriaReturn($fNumber, $sNumber) {
    return $fNumber + $sNumber;
}
echo sumatoriaReturn($firstNumber, $secondNumber);
```

### Todas nos resuelven el problema, pero tú ¿Con cuál solución te quedas?

<br>
<br>

Author @anabelisam <br>
[![Twitter URL](https://img.shields.io/twitter/url/https/twitter.com/anabelisam_.svg?style=social&label=Follow%20%40anabelisam_)](https://twitter.com/anabelisam_)

