<?php
# 整数の入力
fscanf(STDIN, "%d", $a);
# スペース区切りの整数の入力
fscanf(STDIN, "%d %d", $b, $c);
# 文字列の入力
fscanf(STDIN, "%s", $s);

$abc =  $a + $b + $c;
echo sprintf('%d %s', $abc, $s) . PHP_EOL;
