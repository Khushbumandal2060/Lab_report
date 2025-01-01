<?php

// Define the Shape interface
interface Shape {
    public function calculateArea();
}

// Circle class implementing Shape interface
class Circle implements Shape {
    private $radius;

    // Constructor
    public function __construct($radius) {
        $this->radius = $radius;
    }

    // Implement calculateArea method
    public function calculateArea() {
        return pi() * pow($this->radius, 2);
    }
}

// Square class implementing Shape interface
class Square implements Shape {
    private $side;

    // Constructor
    public function __construct($side) {
        $this->side = $side;
    }

    // Implement calculateArea method
    public function calculateArea() {
        return pow($this->side, 2);
    }
}

// Create objects and calculate areas
$circle = new Circle(5); // Circle with radius 5
$square = new Square(4); // Square with side 4

// Print areas
echo "Circle Area: " . $circle->calculateArea() . "\n";
echo "Square Area: " . $square->calculateArea() . "\n";

?>
