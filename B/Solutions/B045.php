<?php
$m=5;
$n=3;
$ms=array();
for($i=0;$i<$m;$i++){
  $c=-1;
  while($c<0||$c>99||in_array($p, $ms)){
    $a=rand(0,99);
    $b=rand(0,99);
    $c=$a+$b;
    $p=$a." + ".$b. " =";
  }
  $ms[]=$p;
}
$ns=array();
for($i=0;$i<$n;$i++){
  $c=-1;
  while($c<0||$c>99||in_array($p, $ns)){
    $a=rand(0,99);
    $b=rand(0,99);
    $c=$a-$b;
    $p=$a." - ".$b." =";
  }
  $ns[]=$p;
}
$mns=array_merge($ms,$ns);
shuffle($mns);
foreach($mns as $val){
  echo $val."<br>";
}
?>