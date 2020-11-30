<!DOCKTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>D090:下一桁はいくつ</title>
<style>
  h1 {
    color: #9999FF;
  }
</style>
</head>
<body>
<h1>D090:下一桁はいくつ</h1>
<?php

$value = "50 30 100 4 5";
$value = explode(" ", $value);
$intVal = array_map('intval', $value);
$count = count($intVal);
$sum = ($intVal[0]+$intVal[1]+$intVal[2]+$intVal[3]+$intVal[4]);
$lastStr = ((int)mb_substr($sum, -1));

function judge($value) {
  return ($value > 101 || $value < 0);
}
$result = array_filter($value, "judge");
$resultCnt = count($result);

if ($count == 5) {
  if (preg_match('/^[-0-9]+$/', $value[0]) && preg_match('/^[0-9]+$/', $value[1]) && preg_match('/^[-0-9]+$/', $value[2]) && preg_match('/^[-0-9]+$/', $value[3]) && preg_match('/^[-0-9]+$/', $value[4])) {
    if ($resultCnt === 0) {
      echo $lastStr;
    } else {
      echo "1以上、100以下の整数を入力してください。";
    }
  } else {
    echo "整数を入力してください。";
  }
} else {
  echo "5つの整数を入力してくだい。";
}

?>

</body>
</html>