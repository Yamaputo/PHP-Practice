<!DOCKTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>D100:区切り文字の統一</title>
<style>
  h1 {
    color: #3399FF;
  }
</style>
</head>
<body>
<h1>D100:区切り文字の統一</h1>

<?php

$i = "ruby_python_java-php ";

$n1 = mb_substr_count($i, "_");
$n2 = mb_substr_count($i, "-");

if ($n1 >= $n2){
  $output = str_replace("-", "_", $i);
}else{
  $output = str_replace("_", "-", $i);
}

echo $output;

?>

</body>
</html>