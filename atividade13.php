<?php
$boolean = true;
$valor = $_POST['a13'];
$i = 1;
$resultado = $valor - 2;
if (isset($_POST['btnA13'])) {
    echo "<span>" . $i . "</span>";
while ($boolean) {
    $i = $i + 2;

    if ($i > $valor)
    {
        $boolean = false;
    }
    elseif ($i <= $valor) 
    {
        echo "<span>, " . $i . "</span>";
    }
}
}