<!DOCKTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>D067</title>
</head>
<body>
    

<?php

$push = 0;

if ($push == 0 || $puch%2 == 0)
{
  echo "OFF";
}
else
{
  echo "ON";
}

?>

<form method="post" action="D067_page01.php">
<input type="button" onclick="history.back()" value="戻る">
</form>

</body>
</html>