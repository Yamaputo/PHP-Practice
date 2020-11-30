<?php

$pass = "1AAA";

$len = strlen ($pass); //8


if (4 <= $len && $len <= 100)
{
  if (preg_match("/^[a-zA-Z0-9]+$/", $pass)) //半角英数字判定
  {
    $first = substr($pass, 0, 1);//パスワードの一文字目
    $cnt = mb_substr_count($pass, $first);//一文字目が何文字あるか
     if ($len == $cnt)
     {
       echo "全ての文字が同じです。";
     }
     else
     {
       echo "パスワードは" .$pass . "です。";
     }
    
  } else 
  {
    echo "すべて半角英数ではない";
  }
}
else
{
  echo "パスワードを4文字以上100文字以下で入力してください。";
}

?>