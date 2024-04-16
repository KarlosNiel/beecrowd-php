<?php

$N = rtrim(fgets(STDIN));

for ($e = 1; $e <= 10; $e++) {
    $multiplicar = $e * $N;
    echo "$e x $N = $multiplicar" . PHP_EOL;
}

