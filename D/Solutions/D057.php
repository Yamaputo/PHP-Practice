<?php

$grade = 2;

$i = "cartoy plamodel gameconsole";

$i = explode(" ",$i);

if ($grade !== 1 && $grade !== 2 && $grade !== 3)
{
  echo "1,2,3のどれか1つを入力してください。";
}
else
{
  if ($grade == 1)
  {
    echo $i[0];
  }
  elseif ($grade == 2)
  {
    echo $i[1];
  }
  elseif ($grade == 3)
  {
    echo $i[2];
  }
}
  

?>