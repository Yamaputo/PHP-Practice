<?php
$n=7;
$k=3;
$p=3;
$a=array("dog", "cat", "bird", "cow", "bear", "rabbit", "mouse");
sort($a);
$key=$k*($p-1);
for($i=0;$i<$k;$i++){
  if(empty($a[$key])){
    break;
  }
  echo $a[$key]." ";
  $key++;
}
print_r($a[8]);
//19分
?>