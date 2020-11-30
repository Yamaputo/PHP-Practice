<?php
$n=2;
$x=700;
$n1="600 200 200 400";
$n2="900 800 400 500";
$b=array();
for($i=1;$i<=$n;$i++){
  $b[]=explode(" ",${"n".$i});
}
foreach($b as $val){
  if($val[0]>=$x){
    $a[]=$val[1];
  }else{
    $a[]=$val[1]+ceil(($x-$val[0])/$val[2])*$val[3];
  }
}
print_r($a);
?>