#include <stdio.h>

typedef struct car {
    int currentSpeed;
    float currentFuel;
    float maximumFuel;
} Car;

void createCar(Car* car, float maximumFuel, float currentFuel);
void accelerate(Car *car);
void breakCar(Car *car);
void fuelCar(Car *car, float amount);

void getPanelInformation(Car *car);