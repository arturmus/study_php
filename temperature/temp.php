<?php
        $a = $_POST['temp'];
        $operation = isset($_POST['operation']);
        $converte = $_POST['converte'] ?? 'undefined';
    if ($operation === 'F') {
        $convert = (($a - 32) / 1.8);
        
}

    if ($operation === 'C') {
        $convert = ($a * 1.8 - 32);
       
}
 echo $convert;
