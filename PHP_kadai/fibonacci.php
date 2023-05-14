<?php
$awk[0] = 0;
$awk[1] = 1;

echo "{$awk[0]} \n";
echo "{$awk[1]} \n";

$i = 2;
$awk[$i] = $awk[$i-2] + $awk[$i-1];
$f = $awk[$i];

while($f <= 10000) {
    $awk[$i] = $awk[$i-2] + $awk[$i-1];
    echo "{$awk[$i]} \n";
    $f = $awk[$i];
    ++ $i;
}