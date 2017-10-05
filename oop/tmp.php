<?php

class Car
{

    private $currentSpeed;
    private $currentFuel;
    private $maximumFuel;
    
    function __construct($maximumFuel, $currentFuel)
    {
        $this->currentSpeed = 0;
        $this->currentFuel = $currentFuel;
        $this->maximumFuel = $maximumFuel;    
    }

    function accelerate()
    {
        if($this->currentFuel > 0.2) {
            $this->currentFuel -= 0.2;
            $this->currentSpeed += 5;
        }
    }

    function breakCar()
    {
        $this->currentSpeed -= 5;
        $this->currentSpeed = max(0, $this->currentSpeed);
    }
    function fuelCar($amount)
    {
        $this->currentFuel += $amount;

        $this->currentFuel = min($this->currentFuel, $this->maximumFuel);
    }
    function getPanelInformation() {
        printf(
            "\e[0;32mCurrent Speed: %dkm/h\nCurrent Fuel: %.2f%%\n\n\e[0m",
            $this->currentSpeed,
            $this->currentFuel/$this->maximumFuel * 100.0
        );
    }
}