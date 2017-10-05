#include "car.h"

void createCar(Car* car, float maximumFuel, float currentFuel) {
    car->currentSpeed = 0;
    car->maximumFuel = maximumFuel;
    car->currentFuel = currentFuel;
}

void accelerate(Car *car) {
    if (car->currentFuel >= 0.2) {
        car->currentFuel -= 0.2;

        car->currentSpeed = car->currentSpeed += 5;
    }
}

void breakCar(Car *car) {
    car->currentSpeed -= 5;

    if(car->currentSpeed < 0)
        car->currentSpeed = 0;
}

void fuelCar(Car *car, float amount) {
    car->currentFuel += amount;

    if(car->currentFuel > car->maximumFuel)
        car->currentFuel = car->maximumFuel;
}

void getPanelInformation(Car *car) {
    printf(
        "\e[0;32mCurrent Speed: %dkm/h\nCurrent Fuel: %.2f%%\n\n\e[0m",
        car->currentSpeed,
        car->currentFuel/car->maximumFuel * 100.0
    );
}