<?php

function sumValues($value1, $value2=0)
{
    return $value1 + $value2;
}

function iHaveNoReturn()
{
    echo "Nem todas as funções precisam de um return";
}

echo sumValues(4, 5);
echo PHP_EOL;
readline("Next...");

echo sumValues(5);
echo PHP_EOL;
readline("Next...");

iHaveNoReturn();