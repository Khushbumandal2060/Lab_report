<?php

// Define the Student class
class Student {
    // Public properties
    public $name;
    public $surname;
    public $country;

    // Private property
    private $tuition = 5000; // Default value for demonstration

    // Protected property
    protected $indexNumber;

    // Getter methods for public properties
    public function getName() {
        return $this->name;
    }

    public function getSurname() {
        return $this->surname;
    }

    // Public method
    public function helloWorld() {
        return "Hello World";
    }

    // Protected method
    protected function helloFamily() {
        return "Hello Family";
    }

    // Private method
    private function helloMe() {
        return "Hello me!";
    }

    // Private getter method for tuition
    private function getTuition() {
        return $this->tuition;
    }

    // Public method to access tuition value indirectly
    public function showTuition() {
        return $this->getTuition();
    }
}

// Define the PartTimeStudent subclass
class PartTimeStudent extends Student {
    // Public method to call the protected helloFamily method
    public function helloParent() {
        return $this->helloFamily();
    }
}

// Create objects and demonstrate functionality
$student = new Student();
$student->name = "Golu";
$student->surname = "Mandal";
$student->country = "Nepal";

echo $student->getName() . "\n"; // Outputs: John
echo $student->getSurname() . "\n"; // Outputs: Doe
echo $student->helloWorld() . "\n"; // Outputs: Hello World
echo "Tuition: " . $student->showTuition() . "\n"; // Outputs: Tuition: 5000

$partTimeStudent = new PartTimeStudent();
$partTimeStudent->name = "Jyoti";
$partTimeStudent->surname = "Mandal";
$partTimeStudent->country = "Canada";

echo $partTimeStudent->getName() . "\n"; // Outputs: Jane
echo $partTimeStudent->getSurname() . "\n"; // Outputs: Smith
echo $partTimeStudent->helloParent() . "\n"; // Outputs: Hello Family
?>
