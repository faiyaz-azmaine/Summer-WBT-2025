<?php
$a = 25; $b = 40; $c = 30;

if ($a >= $b && $a >= $c) {
    $largest = $a;
} elseif ($b >= $a && $b >= $c) {
    $largest = $b;
} else {
    $largest = $c;
}

echo "Largest number among $a, $b, $c is: $largest<br><br>";
?>
