<?php

$i ="2 2 1";

$i = explode(" ", $i);

$flag = 0;

foreach ($i as $num)
{
  if ($flag == 0 || $flag == 2)
  {
    for ($c =1; $c <= $num; $c++)
    {
        $output1 = "A".$output1;
    }
    echo $output1;
    $output1 ="";
  }
  elseif ($flag == 1)
  {
  for ($c =1; $c <= $num; $c++)
    {
        $output2 = "B".$output2;
    }
    echo $output2;
  }
  $flag +=1;
}

?>