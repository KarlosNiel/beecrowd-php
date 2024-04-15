<?php

$X = [10];

for ($i = 0; $i < 10; $i++) {
    $X[$i] = rtrim(fgets(STDIN));

    if ($X[$i] < 1) {
        $X[$i] = 1;
    }

    echo "X[$i] = $X[$i]" . PHP_EOL;
}


