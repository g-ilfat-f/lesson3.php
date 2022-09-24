<?php
$array1 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$array2 = range(1, 10);

$sum = [];

for ($i = 0; $i < count($array1); $i++) {
    $sum[] = $array1[$i] * $array2[$i];
}
print_r($sum);




