<!DOCKTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>D110:3つの数字</title>
<style>
  h1 {
    color: #3399FF;
  }
</style>
</head>
<body>
<h1>D110:3つの数字</h1>

<?php

$i = "10 40 0";

$i = explode(" ", $i);

if($i[0] >= 0 && $i[0] <= 100 && $i[1] >= 0 && $i[1] <= 100 && $i[2] >= 0 && $i[2] <= 100){
  $sum = $i[0]*$i[1]*$i[2];
  echo $sum.PHP_EOL;
}else{
  echo "0 ≦ a, b, c ≦ 100".PHP_EOL;
}



?>

</body>
</html>