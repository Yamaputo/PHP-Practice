<!DOCKTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>D102:運賃の計算</title>
<style>
  h1 {
    color: #3399FF;
  }
</style>
</head>
<body>
<h1>D102:運賃の計算</h1>

<?php

$section = 5;

if ($section >= 1 && $section <= 30){
  $ride = 100;
  $fare = 100 + $section*10; 
  echo $fare;
}else{
  echo "1 ≦ N ≦ 30";
}


?>

</body>
</html>