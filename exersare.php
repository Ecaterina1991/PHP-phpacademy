<?php

$sex=mt_rand(1,2);
$zi=mt_rand(0,31);
$luna = mt_rand(1,12);
$an=mt_rand(1970,2023);
$ult=mt_rand(1,9);
$cnp=$sex.$an.$luna.$zi.$ult;

echo "CNP-ul generat este".$cnp;
?>