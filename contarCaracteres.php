<?php
$string = $_POST['caracter'];
$final = strval($string);
$contagem = strlen($final);

if (isset($_POST['btnCaracter'])) {
 echo "Número de caracteres: " . $contagem . " caracteres.";
} else {
    echo "Comando inválido!";
}