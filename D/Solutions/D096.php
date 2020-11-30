<!DOCKTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>D096:含んではいけない文字</title>
<style>
  h1 {
    color: #3399FF;
  }
</style>
</head>
<body>
<h1>D096:含んではいけない文字</h1>
<h3></h3>

<?php

$i = "I";

$judge1 = strpos($i, 'I');
$judge2 = strpos($i, 'l');
$judge3 = strpos($i, 'i');

if ($judge1 !== false || $judge2 !== false || $judge3 !== false){
  echo "caution";
}

?>

</body>
</html>