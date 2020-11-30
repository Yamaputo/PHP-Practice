<!DOCKTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>D089:数字の取得</title>
<style>
  h1 {
    color: #9999FF;
  }
</style>
</head>
<body>
<h1>D089:数字の取得</h1>
<?php

$i = "100donky";

$num = ((int)preg_replace('/[^0-9]/', '', $i)); 
$str = str_replace($num, '', $i);
$str_cnt = strlen($str);

if (is_int($num)) {
  if ($str_cnt >=1 && $str_cnt <= 5) {
    if (preg_match('/^[a-zA-Z]+$/', $str)) {
      if ($num >=1 && $num <=100) {
        echo $num;
      } else {
        echo "1以上、100以下";
      }
    } else {
      echo "半角英数字";
    }
  } else {
    echo "1文字以上、5文字以下の単位を入力してください。";
  }
} else {      
  echo "整数を入力してください。";
}

?>

</body>
</html>