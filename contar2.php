<?php
$contador = true;
$i = 100;
if (isset($_POST['btnContar2'])) {
    echo "<span>100</span>";
while ($contador) {
    $i = $i + 10;
    if ($i != "300") {
        echo "<span>, ". $i . "</span>";
    } else {
        echo "<span>, ". $i . ".</span>";
        $contador = false;
    }
}
}