<?php

$vals = [
    'a',
    'b',
    'c',
    'd',
];

foreach ($vals as $val) {
    fscanf(STDIN, "%s", $$val);
}

$match = 0;
foreach(getCounts($a) as $aCount) {
    foreach(getCounts($b) as $bCount) {
        foreach(getCounts($c) as $cCount) {
            if (isEqual($aCount, $bCount, $cCount, $d)) {
                $match++;
            }
        }
    }
}

echo $match;

function getCounts($val) {
    return range(0, $val);
}

function isEqual($a, $b, $c, $d) {
    return (int) $d === addAll($a, $b, $c);
}

function addAll($a, $b, $c) {
    return 500 * $a + 100 * $b + 50 * $c;
}
