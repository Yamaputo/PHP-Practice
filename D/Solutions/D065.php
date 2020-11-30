<?php

$i ="404";

if (is_numeric($i)) //数値かどうかのチェック
{
  if (strlen($i) == 3) //文字数チェック
  {
      $first = substr($i, 0, 1); //始めの文字を取得

      if ($first == 4)
      {
        echo "error".PHP_EOL;
      }
      elseif ($first == 2)
      {
        echo "ok".PHP_EOL;
      }
      else {
        echo "unknown".PHP_EOL;
      }
  }
  else
  {
    echo "三桁の数値を入力してください。".PHP_EOL;
  }
}
else
{
  echo "数値を入力してください。".PHP_EOL;
}

?>