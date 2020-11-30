<?php

$one = 12;
$two = 13;
$sum = $one + $two;

if ($one < 1 || $one >13 || $two < 1 || $two >13) {
  echo "1以上13以下の値を入力してください。";
}
else {
  if ($sum <= 16) {
    echo "HIT". "<br />" .PHP_EOL;
    echo "合計値は". $sum. "です。".PHP_EOL;
  }
  else {
    echo "STAND". "<br />" .PHP_EOL;
    echo "合計値は". $sum. "です。".PHP_EOL;
  }
}


?>