<?php
$w=7;
$h=6;
$n=1;
$x=3;
$y=4;
$d="L";
$c=5;

if($d=="U"){
  $yy=$c%$h;
  $move=$y+$yy;
  if($move>$h-1){
    $move=$move-$h;
  }else{
    $move=$y+$yy;
  }
  echo "(" . $x . "," . $move . ")";
}elseif($d=="D"){
  $yy=$c%$h;
  $move=$y-$yy;
  if($move<0){
    $move=$h+$move;
  }else{
  }
  echo "(" . $x . "," . $move . ")";
}elseif($d=="R"){
  $xx=$c%$w;
  $move=$x+$xx;
  if($move>$w-1){
    $move=$move-$w;
  }else{
    $move=$x+$xx;
  }
  echo "(" . $move . "," . $y . ")";
}elseif($d=="L"){
  $xx=$c%$w;
  $move=$x-$xx;
  if($move>0){
  }else{
    $move=$x-$move;
  }
  echo "(" . $move . "," . $y . ")";
}

?>