<?php

fscanf(STDIN, "%d", $a);
fscanf(STDIN, "%d %d", $b, $c);
fscanf(STDIN, "%s", $s);

$abc =  $a + $b + $c;
echo sprintf('%d %s', $abc, $s) . PHP_EOL;
