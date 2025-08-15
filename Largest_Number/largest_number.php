<?php
$num1 = 4;
$num2 = 5;
$num3 = 6;

$largest = $num1;

if ($num2 > $largest) {
    $largest = $num2;
}

if ($num3 > $largest) {
    $largest = $num3;
}

echo "The largest number is: " . $largest;

?>
