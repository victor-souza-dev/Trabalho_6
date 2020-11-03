<?php
$array = array(
    $_POST['n1'], $_POST['n2'], $_POST['n3'], 
    $_POST['n4'], $_POST['n5'], $_POST['n6'], 
    $_POST['n7'], $_POST['n8'], $_POST['n9'], 
    $_POST['n10'],
);

echo "<p>Número menor: " . min($array) . ".</p>";
echo "<p>Número maior: " . max($array) . ".</p>";