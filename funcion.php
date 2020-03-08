<?php

/**
 * Brief and simple script to sum two int params
 */
$a = rand(1, 10);
$b = rand(1, 10);

/**
 * Brief and simple script to sum two int params.
 *
 * This function receives as arguments two integer numbers, $a and $b, previously randomly and automatically
 * generated by the script; then the function adds both arguments and returns the result of the operation;
 * finally, the result is assigned to a variable $resultado, and it is printed with echo alongside $a and $b values.
 *
 * @param int $a
 * @param int $b
 *
 * @return int
 */
function suma($a, $b)
{
    return $a + $b;
}

$resultado = suma();
echo "Suma de " . $a . "+" . $b . "=" . $resultado;