<?php

$i = "-1 4 5000";

$i = explode(" ", $i);

$cnt = count($i);

if ($cnt !=3)
{
  echo "3文字入力してください。";
}
else
{
  if ( 1 <= $i[0] && $i[0]  <= 1000 && 1 <= $i[1] && $i[1]  <= 1000 && 1 <= $i[2] && $i[2]  <= 10000)
  {
    $numDisc = ceil($i[0]/$i[1]);
    $yen = $numDisc*$i[2];
    echo $yen;    
  }
  else
  {
    echo "範囲内の数字を入力してください。";
  }

}

?>