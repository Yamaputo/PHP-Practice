<!DOCKTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>D103:逆さ読み</title>
<style>
  h1 {
    color: #3399FF;
  }
</style>
</head>
<body>
<h1>D103:逆さ読み</h1>

<?php

$i = "Kentucky";

$len = strlen($i);

if($len >=1 && $len <= 50){
  if(preg_match("/^[a-zA-Z]+$/", $i)){
    $rev = strrev($i);
    echo $rev;
  }else{
    echo "S は a ~ z、A ~ Z のアルファベットのみで構成される";
  }
}else{
  echo "1 ≦ 文字列 S の長さ ≦ 50";
}

?>

</body>
</html>