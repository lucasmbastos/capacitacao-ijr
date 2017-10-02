<?php

echo $thisVariableDoesntExists;

$colors = ["green", "blue", "yellow"];
echo $colors[0] . PHP_EOL;
echo $colors[4];

readline("Next...");

function divide($num1, $num2) {
    if ($num2 == 0)
        throw new Exception("Não existe divisão por 0");
    else
        return $num1/$num2;
}

echo divide(4,2);
echo PHP_EOL;
readline("Next...");

try {
    echo divide(4,0);
} catch (Exception $e) {
    echo $e . PHP_EOL;
}

readline("Next...");
echo divide(4,0);