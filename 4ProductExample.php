<?php

class Product {
    // Properties
    private $description;
    private $quantity;
    private $price;

    // Constructor
    public function __construct($description, $quantity, $price) {
        if (!is_string($description)) {
            echo "Error: Description must be a string.\n";
            return;
        }
        if (!is_numeric($quantity) || !is_numeric($price)) {
            echo "Error: Quantity and price must be numbers.\n";
            return;
        }

        $this->description = $description;
        $this->quantity = $quantity;
        $this->price = $price;
    }

    // Setter for description
    public function setDescription($description) {
        if (is_string($description)) {
            $this->description = $description;
        } else {
            echo "Error: Description must be a string.\n";
        }
    }

    // Getter for description
    public function getDescription() {
        return $this->description;
    }

    // Setter for quantity
    public function setQuantity($quantity) {
        if (is_numeric($quantity)) {
            $this->quantity = $quantity;
        } else {
            echo "Error: Quantity must be a number.\n";
        }
    }

    // Getter for quantity
    public function getQuantity() {
        return $this->quantity;
    }

    // Setter for price
    public function setPrice($price) {
        if (is_numeric($price)) {
            $this->price = $price;
        } else {
            echo "Error: Price must be a number.\n";
        }
    }

    // Getter for price
    public function getPrice() {
        return $this->price;
    }

    // Method to calculate total price
    public function calculatePrice() {
        return $this->quantity * $this->price;
    }
}

// Create a Product object
$product = new Product("Laptop", 3, 800.50);

// Print all properties
echo "Description: " . $product->getDescription() . "\n";
echo "Quantity: " . $product->getQuantity() . "\n";
echo "Price per unit: " . $product->getPrice() . "\n";

// Print calculated total price
echo "Total Price: " . $product->calculatePrice() . "\n";

?>
