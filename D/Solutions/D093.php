<!DOCKTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>D093:切りの良い番号</title>
<style>
  h1 {
    color: #9999FF;
    margin: 0;
    text-align: center;
  }

</style>
</head>
<body>
<h1>D093:切りの良い番号</h1>

<?php
$num = 1111;
$len = strlen($num);

if ($len == 4) {
  $num1 = substr($num, 0, 1);
  $num2 = substr($num, 1, 1);
  $num3 = substr($num, 2, 1);
  $num4 = substr($num, 3, 1);
  if ($num1 == $num2 && $num2 == $num3 && $num3 == $num4) {
    echo "おめでとうございます！ゾロ目が出ました！". "<br>" .PHP_EOL;
    echo $num;
  } else {
    echo "No" .PHP_EOL;
  }
}
if ($len == 5) {
  $num1 = substr($num, 0, 1);
  $num2 = substr($num, 1, 1);
  $num3 = substr($num, 2, 1);
  $num4 = substr($num, 3, 1);
  $num4 = substr($num, 4, 1);
  if ($num1 == $num2 && $num2 == $num3 && $num3 == $num4 && $num4 == $num5) {
    echo $num;
  } else {
    echo "No";
  }
}

?>

</body>
</html>