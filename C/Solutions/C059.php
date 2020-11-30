<?php
$n=4;
$a=array(
  array(0,0,0,1),
  array(0,0,1,0),
  array(0,1,0,0),
  array(1,0,0,0),
);
$b=array(array());
for($l=0;$l<4;$l++){
  for($i=0;$i<$n;$i++){
    $b[$l][]=$a[$l][$i];
  }
}
for($l=0;$l<4;$l++){
  $cnt=0;
  for($i=0;$i<$n;$i++){
    $num=$b[$l][$i];
    if(stristr($num, 1)!==0){
      $cnt++;
    }
  }
  if($cnt!=0){
    echo 1;
  }else{
    echo 0;
  }
}
//38分掛かった
?>