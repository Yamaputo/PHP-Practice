<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>C032:お得な買い物</title>
</head>
<body>
<h1>C032:お得な買い物</h1>
<?php

$productNum = array(5 ,3,  2, 1);

$n = 5;
$p1 = "0 320";
$p2 = "3 1700";
$p3 = "2 2000";
$p4 = "1 1100";
$p5 = "0 10";

//条件
$miss;
if($n <= 1000 && $n >= 0){
}else{
  $putput .= "1 ≦ N ≦ 1000";
  $miss ++;
}

if($miss >1){//条件を満たしていない
  echo $output;
}else{
  $pointArr = array();
  for($i = 1; $i <= $n; $i++){
    $p = explode(" ", ${'p'.$i});
    $multi = $productNum[$p[0]];
    $price = $p[1];
    $div = floor($price/ 100);
    $point = $multi * $div;
    array_push($pointArr, $point);
  }
  
  $pointSum = array_sum($pointArr);
  echo $pointSum;
}


?>
</body>
</html>