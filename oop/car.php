<?php

class Car
{

    private $currentSpeed;
    private $currentFuel;
    private $maximumFuel;

    createCar(Car* car, float maximumFuel, float currentFuel);
    accelerate(Car *car);
    breakCar(Car *car);
    fuelCar(Car *car, float amount);
    getPanelInformation(Car *car);
}