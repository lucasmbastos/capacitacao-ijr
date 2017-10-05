#include "car.h"

int main() {
    int option;
    float fuelToAdd;
    Car ourCar;
    
    createCar(&ourCar, 10,0);

    while(1) {
        printf(
            "Escolha a opção:\n1- Acelerar\n2- Frear\n3- Abastecer\n4- Olhar o visor\n Opção: "
        );

        scanf("%d", &option);
        printf("\n");

        switch(option) {
            case 1:
            accelerate(&ourCar);
            break;

            case 2:
            breakCar(&ourCar);
            break;

            case 3:
            printf("Quantos litros você irá abastecer: ");
            scanf("%f", &fuelToAdd);
            fuelCar(&ourCar, fuelToAdd);
            break;

            case 4:
            getPanelInformation(&ourCar);
            break;

            default:
            printf("Opção não válida!\n");
            break;
        }

    }
}