<?php

$i =0;

$grade = array(1 =>F, 2 => D, 3 => C, 4 => B, 5 => A);

if($i<1 || $in>6)
{
  echo '1から5の数値を入力して下さい。';
}
else
{
  echo $grade[$i];
}
?>
