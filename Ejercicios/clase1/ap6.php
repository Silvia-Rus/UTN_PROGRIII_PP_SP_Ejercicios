<!-- Silvia Rus Mata -->
<!-- Aplicación No 6 (Carga aleatoria)
Definir un Array de 5 elementos enteros y asignar a cada uno de ellos un número (utilizar la
función rand). Mediante una estructura condicional, determinar si el promedio de los números
son mayores, menores o iguales que 6. Mostrar un mensaje por pantalla informando el
resultado. -->

<?php

$array = [];
$sumaTotal = 0;
$tamanioArray = 5;

for($i = 0 ; $i < $tamanioArray ; $i++)
{
    array_push($array, rand(1,60));
    $sumaTotal = $sumaTotal + $array[$i];  
}

//var_dump($array);

if($sumaTotal / sizeof($array) > 6)
{
    printf("El promedio es mayor a 6");
}
else if ($sumaTotal / sizeof($array) == 6)
{
    printf("El promedio es igual a 6");
}
else
{
    printf("El promedio es menor a 6");
}










?>

