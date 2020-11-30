<?php

$n = 1.1;

if($n<0 || $n>100)
{
  echo '0~100の数値を入力してください。';
}

if(0<=$n && $n<=30)
{
  echo 'sunny';
}
if(31<=$n && $n<=70)
{
  echo 'cloudy';
}
if(71<=$n && $n<=100)
{
  echo 'rainy';
}


 ?>
