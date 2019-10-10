<?php

echo "Van welk getal wil je de faculteit zien ?\n";
$keuze = readline();

$num = $keuze;
$factorial = 1 ;
 while ($num >= 1){
    $factorial = $factorial * $num ;
    $num--;
 }
 echo "De faculteit van $keuze is $factorial";