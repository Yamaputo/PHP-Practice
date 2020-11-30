<?php
$t="A";
$u=3;
$a=array(18, 44, 86, 31, 90, 72, 48, 29, 55, 37, 91);
$b=array(103, 85, 39, 55, 51, 8, 80, 37, 21, 65, 54);
$na=array();
$nb=array();
foreach($a as $key => $val){
  if($val<=111 && $val>0){
    $na[]=$val;
  }
}
foreach($b as $key => $val){
  if($val<=111 && $val>0){
    $nb[]=$val;
  }
}
if($t=="A"){
  $my=$na;
  $op=$nb;
}elseif($t=="B"){
  $my=$nb;
  $op=$na;
}
$passer=$my[$u-1];
rsort($op);
$offsideline=$op[1];
$keeper=$op[0];
$offside=array();
foreach($my as $key => $val){
  if($val > $offsideline){
    $offside[]=$key+1;
  }
}
if(empty($offside)){
  echo "NONE";
}else{
  foreach($offside as $val){
    echo $val ."<br>";
  }
}
?>