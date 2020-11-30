<!DOCKTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>D119:円周率の日</title>
<style>
  h1 {
    color: #3399FF;
  }
</style>
</head>
<body>
<h1>D119:円周率の日</h1>
<?php

$n = 11;
$pi = "3.141592653589793";
$out = substr($pi, 0, $n+2);

if($n >=1 && $n <= 15){
  echo $out;
}else{
  echo "1 ≦ N ≦ 15".PHP_EOL;
}

?>

</body>
</html>