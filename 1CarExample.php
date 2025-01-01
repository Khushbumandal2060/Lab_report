<?php

// Define the Vehicle interface
interface Vehicle {
    public function startEngine();
    public function stopEngine();
}

// Define the Car class
class Car implements Vehicle {
    // Private properties
    private $make;
    private $model;
    private $year;

    // Constructor
    public function __construct($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    // Getter and setter methods
    public function getMake() {
        return $this->make;
    }

    public function setMake($make) {
        $this->make = $make;
    }

    public function getModel() {
        return $this->model;
    }

    public function setModel($model) {
        $this->model = $model;
    }

    public function getYear() {
        return $this->year;
    }

    public function setYear($year) {
        $this->year = $year;
    }

    // Methods
    public function start() {
        echo "Car started.\n";
    }

    public function displayInfo() {
        echo "Make: {$this->make}, Model: {$this->model}, Year: {$this->year}\n";
    }

    public function getDescription() {
        return "This is a {$this->year} {$this->make} {$this->model}.";
    }

    // Implementing Vehicle interface methods
    public function startEngine() {
        echo "Engine started.\n";
    }

    public function stopEngine() {
        echo "Engine stopped.\n";
    }
}

// Define the ElectricCar class
class ElectricCar extends Car {
    // Additional property
    private $batteryCapacity;

    // Constructor
    public function __construct($make, $model, $year, $batteryCapacity) {
        parent::__construct($make, $model, $year);
        $this->batteryCapacity = $batteryCapacity;
    }

    // Getter and setter for batteryCapacity
    public function getBatteryCapacity() {
        return $this->batteryCapacity;
    }

    public function setBatteryCapacity($batteryCapacity) {
        $this->batteryCapacity = $batteryCapacity;
    }

    // Additional method
    public function charge() {
        echo "The car is charging.\n";
    }

    // Override getDescription method
    public function getDescription() {
        return "This is a {$this->getYear()} {$this->getMake()} {$this->getModel()} with a battery capacity of {$this->batteryCapacity} kWh.";
    }
}

// Example usage
$car = new Car("Toyota", "Camry", 2020);
$car->start();
$car->displayInfo();
echo $car->getDescription() . "\n";
$car->startEngine();
$car->stopEngine();

$electricCar = new ElectricCar("Tesla", "Model 3", 2022, 75);
$electricCar->start();
$electricCar->displayInfo();
echo $electricCar->getDescription() . "\n";
$electricCar->charge();
$electricCar->startEngine();
$electricCar->stopEngine();

?>
