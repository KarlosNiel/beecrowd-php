<?php

$raio = fgets(STDIN);
$pi = 3.14159;

$area = $pi * $raio ** 2;

printf("A=%.4f" . PHP_EOL, $area);
