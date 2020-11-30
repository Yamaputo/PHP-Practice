<?php

$n = "Yamamoto F";

$n = explode(" ",$n);

if($n[1]!="M" && $n[1]!="F")
{
  echo 'FかMを入力してください。';
}
else
{
  if($n[0]<0 || $n[0]>100)
  {
    echo '0~100文字いないで入力して下さい。';
  }
  else
  {
    if($n[1]=="M")
    {
      $gender = 'Mr.';
    }
    else
    {
      $gender ='Ms.';
    }
    echo 'Hi, '.$gender.$n[0];
  }
}

 ?>
