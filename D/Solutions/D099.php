<!DOCKTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>D099:短冊づくり</title>
<style>
  h1 {
    color: #3399FF;
  }
</style>
</head>
<body>
<h1>D099:短冊づくり</h1>

<?php

$para = "HIVE";
$len = strlen($para);

for($i = 1; $i <= $len; $i++){
  $word = substr($para, $i-1, 1);
  $output = $output.$word."<br>";
}

echo $output;



?>

</body>
</html>