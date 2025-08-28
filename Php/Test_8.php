<?php
$principal = 1000;
$rate = 5; // in %
$time = 2; // in years

$si = ($principal * $rate * $time) / 100;

echo "Principal = $principal, Rate = $rate%, Time = $time years<br>";
echo "Simple Interest = $si<br><br>";
?>
