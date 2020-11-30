<!DOCKTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>D101:偶数派と奇数派</title>
<style>
  h1 {
    color: #3399FF;
  }
</style>
</head>
<body>
<h1>D101:偶数派と奇数派</h1>

<?php

$i = "14 13";

$i = explode(" ", $i);


if ($i[0] >=1 && $i[0] <= 50 && $i[1] >=1 && $i[1] <= 50){
  $evenodd1 = $i[0]%2;
  $evenodd2 = $i[1]%2;
  if($evenodd1 != $evenodd2){
    echo "OK";
  }else{
    echo "NG";
  }
}else{
  echo "1 ≦ N, M ≦ 50";
}

?>

</body>
</html>