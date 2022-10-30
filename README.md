![header](https://github.com/anabelisam/modularization-exercices-php/blob/main/assets/header.png)

<div align="center">

## Pon a prueba tus conocimientos en PHP

💁🏻‍♀️ Aquí encontrarás scripts escritos en PHP, cada uno tiene diferentes tipos de malas prácticas, **tu misión será encontrar la forma más óptima de ejecutar la misma lógica de acuerdo al objetivo que está al principio de cada documento.**

## ¿Aceptas el reto?
Si tu respuesta es sí, sigue leyendo...

</div>

**Si es tu primera vez usando PHP**👇🏼
- Cada uno de los archivos de extensión .php son scripts independientes, esto quiere decir que debes ejecutarlo cada uno de forma independiente y cada uno tiene una función, resultado y objetivo diferente.

- **Si no tienes tu servidor local configurado** puedes ir a (replit)[https://replit.com/] y podrás ejecutar online cada uno de estos scripts sólo con copiar y pegar el código.

- **Envía un PR con tus soluciones y te dejaré feedback**

---
Aquí un ejemplo 👇🏼
## example.php

### Realiza la suma de dos números través de variables. Optimiza el siguiente bloque de código.

_**Paso 1:** Analizar línea por línea_
```php
$firstNumber = 8; //La variable $firstNumber tiene asignado un valor entero de 8
$secondNumber = 10; //La variable $secondNumber tiene asignado un valor entero de 10
$result = 0; //La variable $result tiene asignado un valor de 0

$result = 8 + 10; //La variable $result está recibiendo el valor resultante de la suma del número 8 + 10, pero no está usando las variables
echo $result;
```
_**Paso 2:** Ahora intenta hacerlo con menos líneas de código_
```php
//Cambiamos los valores estáticos de números por las variables y asignamos el valor resultante a $result
$result = $firstNumber + $secondNumber;
echo $result;
```
_**Paso 3:** Encuentra otra forma de hacerlo_
```php
echo $result = $firstNumber + $secondNumber;
```

_**Paso 4:** Otra variación podría ser..._
```php
echo $firstNumber + $secondNumber;
```
_**Paso 5:** La podemos convertir en una función que muestre el resultado desde adentro:_
```php
function sumatoriaEcho($fNumber, $sNumber) {
    echo $fNumber + $sNumber;
}
sumatoriaEcho($firstNumber, $secondNumber);
```
_**Paso 6:** La podemos convertir en una función que retorne el resultado y lo mostremos al llamar:_
```php
function sumatoriaReturn($fNumber, $sNumber) {
    return $fNumber + $sNumber;
}
echo sumatoriaReturn($firstNumber, $secondNumber);
```

<div align="center">

## Todas nos resuelven el problema, pero tú ¿Con cuál solución te quedas?

Author @anabelisam <br>
[![Twitter URL](https://img.shields.io/twitter/url/https/twitter.com/anabelisam_.svg?style=social&label=Follow%20%40anabelisam_)](https://twitter.com/anabelisam_)
</div>
