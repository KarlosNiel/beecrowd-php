<?php

$A = fgets(STDIN) * 2;
$B = fgets(STDIN) * 3;
$C = fgets(STDIN) * 5;

$media = ($A + $B + $C) / 10;

printf("MEDIA = %.1f" . PHP_EOL, $media);

