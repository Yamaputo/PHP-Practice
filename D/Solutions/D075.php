<?php

$card = "1 2 3 5";

$card = explode(" ", $card);

if (count($card) != 4)
{
  echo "正しく入力してください。";
}else{
  for ($i=1; $i <=5; $i++)
  {
    $result = array_search($i, $card);
    if ($result ===FALSE)
    {
      echo $i;
    }
  }
}


?>