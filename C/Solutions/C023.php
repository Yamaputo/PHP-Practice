<!DOCKTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>C023</title>
<style>

</style>
</head>
<body>

<h1>C023:クジの当選番号</h1>


<?php

$ans = "1 2 3 4 5 6";
$n =3;
$yours1 = "1 5 4 2 3 6";
$yours2 = "9 6 2 7 1 5";
$yours3 = "32 9 87 33 41 60";

$ans = explode(' ', $ans);
$result = array();

for($i =1; $i <= $n; $i++){
  $yours = explode(' ', ${'yours'.$i});
  $cnt = 0;
  foreach($yours as $key => $val){
    if(in_array($ans[$key], $yours)){
      $cnt++;
    }
  }
  array_push($result, $cnt);
}

foreach($result as $val){
  echo "一致する数字の数は" . $val . "です。<br>";
}

?>

</body>
</html>