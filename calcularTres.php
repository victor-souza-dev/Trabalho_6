<?php
if ($_POST['n1'] == $_POST['n2'] && $_POST['n2'] == $_POST['n3']) {
    echo "Seu triângulo é: " . "Equilátero";
} elseif ($_POST['n1'] == $_POST['n2'] || $_POST['n1'] == $_POST['n3'] || $_POST['n2'] == $_POST['n3']) {
    echo "Seu triângulo é: " . "Isósceles";
} else {
    echo "Seu triângulo é: " . "Escaleno";
}