<?php

$num1 = $_GET["num1"];
$num2 = $_GET["num2"];
$num3 = $_GET["num3"];
$media = ($num1 + $num2 + $num3) / 3;

print "Esse é o primeiro número: " . $num1 . "<br>";

print "Esse é o segundo número: " . $num2 . "<br>";

print "Esse é o terceiro número: " . $num3 . "<br>";

print "Essa é a média aritmética dos 3 números: " . $media;


//media_get.php?num1=10&num2=10&num3=10

?>
