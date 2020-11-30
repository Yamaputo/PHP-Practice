<!DOCKTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>D120:鉛筆の数</title>
<style>
  h1 {
    color: #3399FF;
  }
</style>
</head>
<body>
<h1>D120:鉛筆の数</h1>
<?php

$dozen = 4;

if ($dozen >= 1 && $dozen <= 50){
  $pen = $dozen*12;
  echo $pen.PHP_EOL;
}else{
  echo "1 ≦ N ≦ 50".PHP_EOL;
}

?>

</body>
</html>