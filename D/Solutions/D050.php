<?php

$i ="2 3";

$i =explode(" ",$i);

$amount1 = $i[0];

$amount2 = $i[1];

if ($amount1 >5)
{
    $amount1 = 5;
}
if ($amount2 > 5)
{
    $amount2 = 5;
}

echo $amount1 + $amount2;

?>