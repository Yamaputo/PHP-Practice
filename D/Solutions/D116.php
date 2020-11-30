<!DOCKTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>D116:サービス料金</title>
<style>
  h1 {
    color: #3399FF;
  }
</style>
</head>
<body>
<h1>D116:サービス料金</h1>
<?php

$i = 4001;

if($i >= 100 && $i <= 100000){
  $a = substr($i, 0, -2);
  echo $a ."00" .PHP_EOL;
}else{
  echo "100 ≦ x ≦ 100,000";
}

?>

</body>
</html>