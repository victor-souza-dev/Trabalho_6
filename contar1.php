<?php
$contador = true;
$i = 1;
if (isset($_POST['btnContar1'])) {
    if ($_POST['contar1'] == "1") {
        echo "1";
    } else {
        echo "<span>1</span>";
while ($contador) {
    $i = $i + 1;
    if ($i != $_POST['contar1']) {
        echo "<span>, ". $i . "</span>";
    } else {
        echo "<span>, ". $i . ".</span>";
        $contador = false;
    }
}
}
}