<!DOCKTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>D086:門松の作成</title>
</head>
<body>

<?php

$len = 100;
$whole_len = $len * 5;

if ($len <0 || $len >100) {
  echo "1以上、100以下の数値を入力してください。";
}
else {
  echo $whole_len;
}

?>

</body>
</html>