<?php
$a=array(274, 840);
rsort($a);
$len=strlen($a[0]);
foreach($a as $key => $val){
  $a[$key]=str_pad($a[$key],$len,0,STR_PAD_LEFT);
}
for($l=0;$l<$len;$l++){
  $sum=0;
  for($i=0;$i<2;$i++){
    $n=substr($a[$i],$l, 1);
    $sum+=$n;
  }
  $sum=substr($sum,-1);
  echo $sum;
}
//23分
?>