<!DOCKTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>D106:割った余り</title>
<style>
  h1 {
    color: #3399FF;
  }
</style>
</head>
<body>
<h1>D106:割った余り</h1>

<?php

$i1 = 6;
$i2 = 3;

if (is_int($i1) && is_int($i2)){
  if($i1 >=1 && $i1 <=100 && $i2 >=1 && $i2 <=100){
    if($i1 > $i2){
      $rem = $i1%$i2;
      echo $rem;
    }else{
      echo "M < N";
    }
  }else{
    echo "1 ≦ N, M ≦ 100";
  }
}else{
  echo "N, M は整数";
}

?>

</body>
</html>