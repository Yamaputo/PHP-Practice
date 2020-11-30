<!DOCKTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>D087:文字をくっつける</title>
<style>
  h1 {
    color: #9999FF;
  }
</style>
</head>
<body>
<h1>D087:文字をくっつける</h1>
<?php

$num = 5;
$word1 = "a";
$word2 = "p";
$word3 = "p";
$word4 = "l";
$word5 = "e";

$word = $word1.$word2.$word3.$word4.$word5;

if (is_int($num)) {
  if ($num >= 1 || $num <=10) {
    echo $word;
  }
} 
else {
  echo "整数を入力してください。";
}

?>

</body>
</html>