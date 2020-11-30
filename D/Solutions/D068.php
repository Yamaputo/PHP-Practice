<?php

$n = 10;
$i = "SSSSSSSRRR";

$sunny = mb_substr_count($i, "S");

$rainy = $n - $sunny;

echo $sunny . "<br />" .PHP_EOL;

echo $rainy .PHP_EOL;

?>