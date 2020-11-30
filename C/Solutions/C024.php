<!DOCKTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>C024</title>
<style>

</style>
</head>
<body>

<h1>C024:ミニ・コンピュータ</h1>


<?php

$n = 3;
$o1 = "SET 1 -23";
$o2 = "SUB 77";
$o3 = "SET 1 0";


$var1 = 0;
$var2 = 0;

for($i = 1; $i <= $n; $i++){
  $o = explode(' ', ${'o'.$i});
  if($o[0] == "SET"){
    if($o[1] == 1){
      $var1 = $o[2];
    }else{
      $var2 = $o[2];
    }
  }elseif($o[0] == "ADD"){
    $cal = $var1 + $o[1];
    $var2 = $cal;
  }elseif($o[0] == "SUB"){
    $cal = $var1 - $o[1];
    $var2 = $cal;
  }
}

echo $var1 ." ". $var2;

?>

</body>
</html>