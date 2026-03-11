<?php

$num1 = $_POST["num1"];

print "Esse é o primeiro número: " . $num1 . "<br>";

$num2 = $_POST["num2"];

print "Esse é o segundo número: " . $num2 . "<br>";

$num3 = $_POST["num3"];

print "Esse é o terceiro número: " . $num3 . "<br>";

$media = ($num1 + $num2 + $num3) / 3;

print "Essa é a média aritmética dos 3 números: " . $media;

?>