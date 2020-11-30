<?php

$i = "2 2 6";

$dolls = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J",);

$i = explode(" ", $i);

$sum = $i[0] + $i[1] + $i[2];

$count = count($i);

$key = 0;

if (0<= $i[0] && $i[0] <= 10 && 0<= $i[1] && $i[1] <= 10 && 0<= $i[2] && $i[2] <= 10 && $sum == 10 && $count ==3)
{
  for ($n = 1; $n <= $i[$key]; $n++)
  {
    $doll_taken = array_shift($dolls);
    $first =$first.$doll_taken;
  }
  echo $first ."<br />" .PHP_EOL;
  $key +=1;
  
  for ($n = 1; $n <= $i[$key]; $n++)
  {
    $doll_taken = array_shift($dolls);
    $second =$second.$doll_taken;
  }
  echo $second. "<br />" .PHP_EOL;
  $key +=1;
  
  for ($n = 1; $n <= $i[$key]; $n++)
  {
    $doll_taken = array_shift($dolls);
    $third =$third.$doll_taken;
  }
  echo $third. "<br />" .PHP_EOL;
}
else
{
  echo "値を正しく入力してください。" .PHP_EOL;
}
  
?>