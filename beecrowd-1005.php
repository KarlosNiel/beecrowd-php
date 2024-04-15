<?php

$A = fgets(STDIN) * 3.5;
$B = fgets(STDIN) * 7.5;
$media = ($A + $B) / 11;

printf("MEDIA = %.5f" . PHP_EOL, $media);

