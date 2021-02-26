<?php

class Car {
    private $fuel;
    private $numberOfDoors;
    private $color;

    function __construct($fuel, $color, $numberOfDoors) {
        $this->setFuel($fuel);
    }

    protected function wheelPosition(){
        echo "Wheel id on the right side.";
    }

    public function setFuel($fuel) {
        $this->fuel = $fuel;
    }

    public function getFuel() {
        return $this->fuel;
    }
}

//$car = new Car('gas','red','4');
//print_r($car->getFuel());

class Ferrari extends Car{
    public function __construct($fuel, $color, $numberOfDoors)
    {
       $this->wheelPosition();;
    }
}

$ferrari = new Ferrari('petrol','red','2');
print_r($ferrari->getFuel());
