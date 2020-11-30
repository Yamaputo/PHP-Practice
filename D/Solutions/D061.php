<?php

$n = 0;

if ($n<0 || $n >100)
{
  echo "0から100の数字を入力してください。";
}
else
{
    if ($n == 0)
  {
    echo 1;
  }
  else
  {
    echo $n*3;
  }
}



?>