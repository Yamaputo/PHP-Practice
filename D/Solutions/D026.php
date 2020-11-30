<?php

$fruits = [0=>'no', 1=>'yes', 2=>'yes', 3=>'yes', 4=>'yes', 5=>'yes', 6=>'no'];

//array_count_valuesを使用して値の使用回数をカウントする
$fruits_count = array_count_values($fruits);

foreach($fruits_count as $key => $value){
  echo 'key : '.$key;
  echo '<br>';
  echo ' value : '.$value;
  echo '<br>';
}

?>
