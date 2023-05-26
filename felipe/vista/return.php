<?php

// Función para sumar dos números
function sumar($a, $b) {
    return $a + $b;
}
// Función para restar dos números
function restar($a, $b) {
    return $a - $b;
}
// Función para multiplicar dos números
function multiplicar($a, $b) {
    return $a * $b;
}

// Función para dividir dos números
function dividir($a, $b) {
    if ($b != 0) {
        return $a / $b;
    } else {
        return "Error: División por cero no permitida.";
    }
}
// RESULTADO DE LAS OPERACIONES
$resultadoSuma = sumar(5, 2);
$resultadoResta = restar(2, 7);
$resultadoMultiplicacion = multiplicar(3, 4);
$resultadoDivision = dividir(6, 8);
echo "Division: " . $resultadoDivision . "<br>";
echo "Suma: " . $resultadoSuma . "<br>";
echo "Resta: " . $resultadoResta . "<br>";
echo "Multiplicacion: " . $resultadoMultiplicacion . "<br>";

?>