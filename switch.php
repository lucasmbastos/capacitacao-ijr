<?php

while(true) {
    $userInput = readline("Digite um número de 0 - 6: ");
    $parsedUserInput = intval($userInput);

    switch ($parsedUserInput) {
        case 0:
            echo "O número é zero!";
            break;
        case 1:
        case 2:
            echo "O número é 2" . PHP_EOL;
        case 3:
            echo "O número é maior que zero, mas menor que 4";
            break;

        case 4:
        case 5:
        case 6:
            echo "O número é maior que 4";
            break;
        
        default:
            echo "O número é inválido";
            break;
    }
    echo PHP_EOL;
}