<?php

$members = "10 20 30 35 40";
$me = 30;

$members = explode(" ", $members);

array_push($members, $me); //配列に追加

sort($members); //昇順に並び替え

$result = array_search($me, $members); //キーを取得

echo ($result+1);

?>