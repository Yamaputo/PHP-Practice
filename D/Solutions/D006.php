<?php

$i ="30 km";

$i = explode(" ", $i);


if ($i[1] =="km")
{
    $n = $i[0]*1000000;
}
if ($i[1] =="m")
{
    $n = $i[0]*1000;
}
if ($i =="cm")
{
    $n = $i[0]*10;
}

echo $n.mm;
?>
