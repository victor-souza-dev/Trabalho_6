<?php
$valor = $_POST['impar'];

$boolean = true;

$par = 0;
$impar = 1;

if ($valor != "") {

while ($boolean) {
    $par = $par + 2;
    $impar = $impar + 2;

    if ($par == $valor) {
        echo "O número é par!";
        $boolean = false;
    } elseif ($impar == $valor)
    {
        echo "O número é impar!";
        $boolean = false;
        }
    }
} else {
    echo "Comando inválido!";
}