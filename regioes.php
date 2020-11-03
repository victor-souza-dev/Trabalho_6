<?php

if (isset($_POST['valor1'])) 
{
    echo "Norte";
} if (isset($_POST['valor2']))
{
    echo "Nordeste";
}
elseif (isset($_POST['valor3']))
{
    echo "Noroeste";
}elseif (isset($_POST['valor4']))
{
    echo "Leste";
}elseif (isset($_POST['valor5']))
{
    echo "Oeste";
}elseif (isset($_POST['valor6']))
{
    echo "Sudeste";
}elseif (isset($_POST['valor7']))
{
    echo "Sudoeste";
}elseif (isset($_POST['valor8']))
{
    echo "Sul";
}