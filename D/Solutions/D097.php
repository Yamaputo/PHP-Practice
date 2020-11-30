<!DOCKTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>D097:梅雨入りの予想</title>
<style>
  h1 {
    color: #3399FF;
  }
</style>
</head>
<body>
<h1>D097:梅雨入りの予想</h1>
<h3></h3>

<?php

$i = "1 0 0 1 1 1 1";

$i = explode(" ", $i);

$b = 0;

$rain = 0;
$noRain = 0;

for($a = 0; $a < 7; $a++){
  if ($i[$a] == 1){
    $rain += 1;
  }else{
    $noRain += 1;
  }
}

if($rain >= 5){
  echo "yes";
}else{
  echo "no";
}


?>

</body>
</html>