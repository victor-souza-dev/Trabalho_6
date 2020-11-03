<?php
$boolean = true;
$i = 50;

if(isset($_POST['btnA14'])) {
    while ($boolean) {
        $i = $i - 2;

        if ($i == 2) {
            echo $i . ".";
            $boolean = false;
        } elseif ($i > 2) {
            echo $i . ", ";
        }
    }
}