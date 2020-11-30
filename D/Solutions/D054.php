<?php

$i = "111111111";

$len = mb_strlen($i);

if ($len < 1 || $len > 21)
{
    echo "文字列は1から20の間の数値を入力してください。";
}
else
{
    if ($len >= 11)
    {
        echo "OK".PHP_EOL;
    }
    else
    {
        $short = 11 - $len;
        echo $short. "本足りません。" .PHP_EOL;
    }
}
?>