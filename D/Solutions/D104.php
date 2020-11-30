<!DOCKTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>D104:送料の計算</title>
<style>
  h1 {
    color: #3399FF;
  }
</style>
</head>
<body>
<h1>D104:送料の計算</h1>

<?php

$i = 9;

if ($i >=1 && $i <= 50){
  if ($i >10){
    $extra = $i - 10;
    $sum = 1000 + $extra*150;
    echo $sum;
  }else{
    echo 1000;
  }
}else{
  echo "1 ≦ N ≦ 50";
}

?>

</body>
</html>