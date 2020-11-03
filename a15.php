<?php
$array = array();
for ($i = 2; $i < 100000; $i = $i + 2) {
    if ($_POST['um'] == $i) {
        $array[] = 1;

    
    } if ($_POST['dois'] == $i) {
        $array[] = 2;

    } if ($_POST['tres'] == $i) {
        $array[] = 3;

    }  if ($_POST['quatro'] == $i) {
        $array[] = 4;

       
    } if ($_POST['cinco'] == $i) {
        $array[] = 5;

      
    } if ($_POST['seis'] == $i) {
        $array[] = 6;

       
    } if ($_POST['sete'] == $i) {
        $array[] = 7;

        
    }  if ($_POST['oito'] == $i) {
        $array[] = 8;

        
    }  if ($_POST['nove'] == $i) {
        $array[] = 9;

       
    } if ($_POST['dez'] == $i) {
        $array[] = 10;

    } if ($_POST['onze'] == $i) {
        $array[] = 11;

    
    } if ($_POST['doze'] == $i) {
        $array[] = 12;

    } if ($_POST['treze'] == $i) {
        $array[] = 13;

    }  if ($_POST['quatorze'] == $i) {
        $array[] = 14;

       
    } if ($_POST['quinze'] == $i) {
        $array[] = 15;

      
    } if ($_POST['dezesseis'] == $i) {
        $array[] = 16;

       
    } if ($_POST['dezessete'] == $i) {
        $array[] = 17;

        
    }  if ($_POST['dezoito'] == $i) {
        $array[] = 18;

        
    }  if ($_POST['dezenove'] == $i) {
        $array[] = 19;

       
    } if ($_POST['vinte'] == $i) {
        $array[] = 20;
    }
}
    echo "<p>" . count($array) . " dos 20 valores informados são Pares.</p>";
?>