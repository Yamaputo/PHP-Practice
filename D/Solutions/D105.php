<!DOCKTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>D105:長さの一致</title>
<style>
  h1 {
    color: #3399FF;
  }
</style>
</head>
<body>
<h1>D105:長さの一致</h1>

<?php

$i1 = "BookStore";
$i2 = "Applecake";

$len1 = strlen($i1);
$len2 = strlen($i2);

if($len1 >=1 && $len1 <= 100 && $len2 >=1 && $len2 <= 100){
  if(preg_match("/^[a-zA-Z]+$/", $i1) && preg_match("/^[a-zA-Z]+$/", $i2)){
    if ($len1 == $len2){
      echo "OK";
    }else{
      echo "NG";
    }
  }else{
    echo "S は a ~ z、A ~ Z のアルファベットのみで構成される";
  }
}else{
  echo "1 ≦ 文字列 S の長さ ≦ 100";
}

?>

</body>
</html>