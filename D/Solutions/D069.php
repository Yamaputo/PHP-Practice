<?php

$i = "50 100 60 80 90 99 78";

$i =explode(" ",$i);

$sum = $i[0]+$i[1]+$i[2]+$i[3]+$i[4]+$i[5]+$i[6];

$ave = $sum /7;

$round = round($ave, 1);

printf("%.1f\n", $round) .PHP_EOL;

// print number_format($round, 1) .PHP_EOL;

?>