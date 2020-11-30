<?php

$x = "7 20";

$arr = explode(" ", $x);

$z = floor($arr[1]/$arr[0]);

$y = $arr[1] % $arr[0];

if($y == 0){
  print "必要なティッシュの箱は". $z ."箱です。";
}
else{
  $z = $z + 1;
  print "必要なティッシュの箱は". $z ."箱です。";
}

?>
