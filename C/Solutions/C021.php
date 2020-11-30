<!DOCKTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>C021</title>
<style>

</style>
</head>
<body>

<h1>C021:暴風域にいますか？</h1>


<?php

$typhoon = "0 0 1 2";
$n = 3;
$humanPlace1 = "0 0";
$humanPlace2 = "1 1";
$humanPlace3 = "4 2";

$typhoon = explode(' ', $typhoon);
$xc = $typhoon[0];
$yc = $typhoon[1];
$r1 = $typhoon[2];
$r2 = $typhoon[3];

$results = array();
for($i = 1; $i <= $n; $i++){
  $humanPlace = explode(' ', ${'humanPlace'.$i});
  $fml = (($humanPlace[0] - $xc)**2 + ($humanPlace[1] - $yc)**2);
  if($r1**2 <= $fml && $fml <= $r2**2){
    $result = "ヒットする";
  }else{
    $result = "ヒットしない";
  }
  array_push($results, $result);
}

foreach($results as $key => $val){
  echo $key ."番目の人は" . $val ."<br>" .PHP_EOL;
}

?>

</body>
</html>