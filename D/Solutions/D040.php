<?php

$percentage = '30 30 40 50 10 10 20';

$percentage = explode(" ", $percentage);

$sum = 0;

foreach($percentage as $number){
  if($number >= 30){
    $sum++;
  }
}

echo "今週の外出日数は".$sum."です。";

?>
