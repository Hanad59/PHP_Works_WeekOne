<?php

$count = 1;

while ($count <= 18){
    echo "$count, ";
    $count++;
}

echo "<br>";

$j = 1;

while ($j <= 12){
    echo "12 * $j= " . 12 * $j . "<br>";
    $j++;
}

echo "<br>";

$week = 3;
$day = 7;

for ($j = 1; $j <= $week; $j++){
    echo "week $j: <br>";

    for ($k = 1; $k <= $day; $k++){
        echo "&nbsp; &nbsp;Day $k <br>";
    }
}





?>