<?php

class Bicycle {
    // Public properties
    public $brand;
    public $model;
    public $year;
    public $description;
    public $weight; // in grams

    // Constructor
    public function __construct($brand, $model, $year, $weight, $description = "Used bicycle") {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
        $this->weight = $weight;
        $this->description = $description;
    }

    // Getter for bike information
    public function getInfo() {
        return "{$this->brand} {$this->model} ({$this->year})";
    }

    // Getter for weight
    public function getWeight($inKilograms = false) {
        if ($inKilograms) {
            return $this->weight / 1000; // Convert grams to kilograms
        }
        return $this->weight; // Return weight in grams
    }

    // Setter for weight
    public function setWeight($weight) {
        $this->weight = $weight;
    }
}

// Create two Bicycle objects
$bike1 = new Bicycle("Giant", "Escape 3", 2021, 12000);
$bike2 = new Bicycle("Trek", "FX 2 Disc", 2022, 13500, "Brand new bicycle");

// Print bike information
echo $bike1->getInfo() . "\n";
echo $bike2->getInfo() . "\n";

// Print bike weight in kilograms
echo "Bike 1 Weight in kilograms: " . $bike1->getWeight(true) . " kg\n";
echo "Bike 2 Weight in kilograms: " . $bike2->getWeight(true) . " kg\n";

// Print bike weight in grams
echo "Bike 1 Weight in grams: " . $bike1->getWeight() . " g\n";
echo "Bike 2 Weight in grams: " . $bike2->getWeight() . " g\n";

?>
