<?php

fscanf(STDIN, "%s", $string);

$strings = str_split($string);

$result = array_sum($strings);

echo $result;
