<!DOCKTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>D111:文字を切り詰める</title>
<style>
  h1 {
    color: #3399FF;
  }
</style>
</head>
<body>
<h1>D111:文字を切り詰める</h1>

<?php
$n = 5;
$i = "AppleStore";

$len = strlen($i);

if(preg_match("/^[a-zA-Z]+$/", $i)){
  if(is_int($n)){
    if($n >=1 && $n <= 100){
      if($len >= $n && $len <= 100){
        $out = substr($i, 0 ,$n);
        echo $out.PHP_EOL;
      }else{
        echo "n ≦ 文字列 S の文字数 ≦ 100".PHP_EOL;
      }
    }else{
      echo "1 ≦ n ≦ 100".PHP_EOL;
    }
  }else{
    echo "整数 n".PHP_EOL;
  }
}else{
  echo "半角アルファベット".PHP_EOL;
}

?>

</body>
</html>