<?php

$level = 7;

if ($level <1 || $level > 100)
{
    echo "段数を1から100の中で入力してください。";
}
else
{
    $row = 0;

    $total = 0;

    for ($i = 1; $i <= $level; $i++)
    {
        $row = $row + 1;
        $total = $total + $row;
    }
    echo "7段の人間ピラミッドを作るには". $total . "人必要です。". PHP_EOL;
}

?>
