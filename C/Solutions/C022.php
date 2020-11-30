<!DOCKTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>C022</title>
<style>

</style>
</head>
<body>

<h1>C022:ローソク足</h1>


<?php

$n = 5;
$data1 = "11 14 16 10";
$data2 ="12 15 17 10";
$data3 = "13 11 14 11";
$data4 ="12 10 13 8";
$data5 ="11 13 14 10";

$dataAll= [];

for($i = 1; $i <= $n; $i++){
  $data = explode(' ', ${'data'.$i});
  if($i == 1){
    $result = array_merge($dataAll, $data);
  }else{
    $result = array_merge($result, $data);
  }
}

echo "始値は" .$result[0] ."です。" . "<br>" .PHP_EOL;
echo "最高値は" .max($result) ."です。" . "<br>" .PHP_EOL;
echo "最安値は" .min($result) ."です。" . "<br>" .PHP_EOL;
echo "終値は" .end($result) ."です。" . "<br>" .PHP_EOL;

?>

</body>
</html>