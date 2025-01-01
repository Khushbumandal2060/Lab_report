<?php

// Base User class
class User {
    protected $name;
    protected $surname;
    protected $username;
    protected $is_admin = false;

    // Constructor
    public function __construct($name, $surname, $username) {
        $this->name = $name;
        $this->surname = $surname;
        $this->username = $username;
    }

    // Method to check if user is admin
    public function isAdmin() {
        return $this->is_admin;
    }

    // Method to print full name
    public function getFullName() {
        $fullName = "{$this->name} {$this->surname}";
        if ($this->is_admin) {
            $fullName .= " (admin)";
        }
        return $fullName;
    }
}

// Customer class extending User
class Customer extends User {
    private $city;
    private $state;
    private $country;

    // Constructor
    public function __construct($name, $surname, $username) {
        parent::__construct($name, $surname, $username);
    }

    // Setter for location properties
    public function setLocation($city, $state, $country) {
        $this->city = $city;
        $this->state = $state;
        $this->country = $country;
    }

    // Getter for location
    public function getLocation() {
        return "{$this->city}, {$this->state}, {$this->country}";
    }
}

// AdminUser class extending User
class AdminUser extends User {
    // Constructor
    public function __construct($name, $surname, $username) {
        parent::__construct($name, $surname, $username);
        $this->is_admin = true;
    }
}

// Create objects
$user = new User("Nikhil", "Singh", "NikhilSingh");
$admin = new AdminUser("Khushi", "Mandal", "KhushiMandal");
$customer = new Customer("Jyoti", "Mandal", "Jyotimandal");
$customer->setLocation("Bagmati", "Kathmandu", "Nepal");

// Print details
echo $user->getFullName() . "\n";
echo "Is Admin: " . ($user->isAdmin() ? "Yes" : "No") . "\n\n";

echo $admin->getFullName() . "\n";
echo "Is Admin: " . ($admin->isAdmin() ? "Yes" : "No") . "\n\n";

echo $customer->getFullName() . "\n";
echo "Is Admin: " . ($customer->isAdmin() ? "Yes" : "No") . "\n";
echo "Location: " . $customer->getLocation() . "\n";

?>
