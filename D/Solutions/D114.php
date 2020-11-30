<!DOCKTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>D114:税込の価格</title>
<style>
  h1 {
    color: #3399FF;
  }
</style>
</head>
<body>
<h1>D114:税込の価格</h1>
<?php

$i = "11 1260";
$i = explode(" ", $i);
$per = $i[0];
$exTax = $i[1];

if($per >= 0 && $per <= 50){
  if($exTax > 1 && $exTax <= 10000){
    $price = floor(($exTax/100)*$per + $exTax);
    echo $price;
  }else{
    echo "1 ≦ b ≦ 10,000";
  }
}else{
  echo "0 ≦ a ≦ 50";
}

?>

</body>
</html>