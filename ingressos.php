<?php
$valorIngresso = 25;
$estudante = $valorIngresso / 2;
$aposentado = ($valorIngresso / 100) * 30;
$aposentadoQuarta = ($valorIngresso / 100) * 80;
$final = $valorIngresso - $aposentado;
$finalQuarta = $valorIngresso - $aposentadoQuarta;
if (isset($_POST['estudante'])) 
{
    if (strftime('%A') == "quarta-feira") {
        echo "<h3> Valor a pagar: </h3>" . "<p>R$ 0,00</p>" . "Porcentagem de desconto: 100%";
    } else {
        echo "<h3> Valor a pagar: </h3>" . "<p>R$ " . $estudante . "</p>" . "Porcentagem de desconto: 50%";
    }
} elseif (isset($_POST['aposentado'])) 
{
    if (strftime('%A') == "quarta-feira") {
        echo "<h3> Valor a pagar: </h3>" . "<p>R$ " . $finalQuarta . "</p>" . "Porcentagem de desconto: 80%";
    } else {
        echo "<h3> Valor a pagar: </h3>" . "<p>R$ " . $final . "</p>" . "Porcentagem de desconto: 30%";
    }
} elseif (isset($_POST['demaisClientes'])) 
{
    if (strftime('%A') == "quarta-feira") {
        echo "<h3> Valor a pagar: </h3>" . "<p>R$ " . $estudante . "</p>" . "Porcentagem de desconto: 50%";
    } else {
        echo  "<h3> Valor a pagar: </h3>" . "<p>R$ " . $valorIngresso . "</p>" . "Porcentagem de desconto: 0%";
    }
}
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');

$semana = strtoupper(strftime('%A'));

echo "<h3>Dia da semana: " . $semana . "</h1>";