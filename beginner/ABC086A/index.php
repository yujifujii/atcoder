<?php

fscanf(STDIN, "%d %d", $a, $b);

$result = ($a * $b % 2) ? 'Odd' : 'Even';

echo $result;
