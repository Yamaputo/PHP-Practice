<?php
$x=300;
$p=50;
$total=$x;
while($x>0){
  $x=floor($x*(100-$p)/100);
  $total+=$x;
}
echo $total;
