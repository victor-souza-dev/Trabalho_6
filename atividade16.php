<?php
$boolean = true;
$i = 1;
$calculo = $i * $i * $i * $i;
echo "<span style='border: 1.5px solid red; margin: 10px'>" . $calculo . "</span>";

while ($boolean) {
    $i = $i + 2;
    if ($i <= 200) {
        $calculo = $i * $i * $i * $i;
        echo ", " . "<span style='border: 1.5px solid red; margin: 10px'>" . $calculo . " </span>";
    } else {
        $boolean = false;
    }
}