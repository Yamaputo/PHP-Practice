<?php
$n=100;
$t="poiuytrewqlkjhgfdsamnbvcxz";
$s="snn xufu ngebmv qwtg";
$a=array_combine(range("a","z"),str_split($t,1));
$d=$a;
for($i=1;$i<=$n-1;$i++){
  $d=array_flip($d);
  foreach($a as $key => $val){
    $d[$key]=$val;
  }
}
$rep=implode($d);
$b=array_combine(str_split($rep,1), range("a","z"));
$s=str_split($s);
foreach($s as $val){
  if($val==" "){
    echo " ";
  }else{
    echo $b[$val];
  }
}
?>