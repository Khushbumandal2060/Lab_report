<?php

// Define the HasInfo interface
interface HasInfo {
    public function getInfo();
}

// Address class implementing HasInfo interface
class Address implements HasInfo {
    public $street;
    public $number;
    public $city;

    // Constructor
    public function __construct($street, $number, $city) {
        $this->street = $street;
        $this->number = $number;
        $this->city = $city;
    }

    // Implement getInfo method
    public function getInfo() {
        return "Address: street {$this->street}, number {$this->number}, city {$this->city}";
    }
}

// Phone class implementing HasInfo interface
class Phone implements HasInfo {
    public $prefix;
    public $number;

    // Constructor
    public function __construct($prefix, $number) {
        $this->prefix = $prefix;
        $this->number = $number;
    }

    // Implement getInfo method
    public function getInfo() {
        return "Number: {$this->prefix} / {$this->number}";
    }
}

// User class implementing HasInfo interface
class User implements HasInfo {
    public $name;
    public $surname;
    private $address;
    private $phone;

    // Constructor
    public function __construct($name, $surname, Address $address, Phone $phone) {
        $this->name = $name;
        $this->surname = $surname;
        $this->address = $address;
        $this->phone = $phone;
    }

    // Implement getInfo method
    public function getInfo() {
        return "User: {$this->name} {$this->surname}\n" .
               $this->address->getInfo() . "\n" .
               $this->phone->getInfo();
    }
}

// Create objects
$address = new Address("Main Street", 123, "Malangwa");
$phone = new Phone("+977", "9844993922");
$user = new User("Chandani", "Mandal", $address, $phone);

// Call the getInfo method and print the output
echo $user->getInfo();

?>
