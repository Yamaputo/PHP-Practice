<?php

$i = "W S S W W W S S S W";

$num_w = mb_substr_count($i, "W");

$n = explode(" ", $i);

print_r($n);

$cnt = count($n);

if ($cnt !=10)
{
    echo "10個のWかSを入力してください。";
}
else
{
    if ($num_w >=5)
    {
        echo "OK". PHP_EOL;
    }
    else
    {
        echo "NG". PHP_EOL;
    }
}

?>

<form action="post" action=>

</form>