<?php

$M = [12 => 12];
$L = rtrim(fgets(STDIN));
$soma = 0;
$escolha = rtrim(fgets(STDIN));


for ($i = 0; $i < 12; $i++) {
    for ($j = 0; $j < 12; $j++) {
        $M[$i][$j] = rtrim(fgets(STDIN));
    }
}

for ($k = 0; $k < 12; $k++) {
    $soma += $M[$L][$k];
}

$media = $soma / 12;

if ($escolha == "S") {
    printf("%.1f" . PHP_EOL, $soma) ;
} elseif ($escolha == "M") {
    printf("%.1f" . PHP_EOL, $media);
}