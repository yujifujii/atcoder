<?php

fscanf(STDIN, "%d", $num_count);
$line = fgets(STDIN);
$nums = explode(' ',$line);

$count = 0;

while ($halfs = getHalfs($nums)) {
    $nums = $halfs;
    $count++;
}

echo $count, PHP_EOL;


function getHalfs($nums)
{
    $halfs = [];

    foreach ($nums as $num) {
        if (!isEven($num)) {
            return false;
        }
        $halfs[] = $num / 2;
    }

    return $halfs;
}

function isEven($num)
{
    return !($num % 2);
}
