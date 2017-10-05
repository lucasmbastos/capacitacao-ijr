<?php
require_once("tmp.php");

$ourCar = new Car(10, 0);

while(1) {
    printf(
        "Escolha a opção:\n1- Acelerar\n2- Frear\n3- Abastecer\n4- Olhar o visor\nOpção: "
    );

    $option = readline();
    $option = intval($option);
    
    printf("\n");

    switch($option) {
        case 1:
        $ourCar->accelerate();
        break;

        case 2:
        $ourCar->breakCar();
        break;

        case 3:
        printf("Quantos litros você irá abastecer: ");
        
        $fuelToAdd = readline();
        $fuelToAdd = intval($fuelToAdd);
        
        $ourCar->fuelCar($fuelToAdd);
        break;

        case 4:
        $ourCar->getPanelInformation();
        break;

        default:
        printf("Opção não válida!\n");
        break;
    }

}