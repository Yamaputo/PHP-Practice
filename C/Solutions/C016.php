<!DOCKTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>C016:Leet文字列</title>
<style>
  h1 {
    color: #3399FF;
  }
</style>
</head>
<body>
<h1>C016:Leet文字列</h1>
<?php

$str = 'APPLE';

$origin =array('A', 'E', 'G', 'I', 'O', 'S', 'Z');

$after = array(4, 3, 6, 1, 0, 5, 2);

for($i = 0; $i < 7; $i++){
  $str = str_replace($origin[$i], $after[$i], $str);
}

echo $str;


?>

</body>
</html>