<?php

// Define the Person class
class Person {
    public $firstName;
    public $lastName;
    private $age;

    // Constructor method to initialize properties
    public function __construct($firstName, $lastName, $age) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->setAge($age);
    }

    // Public method to return the full name
    public function getFullName() {
        return $this->firstName . ' ' . $this->lastName;
    }

    // Public method to set the age
    public function setAge($age) {
        if ($age > 0) {
            $this->age = $age;
        } else {
            echo "Age must be a positive number.";
        }
    }

    // Public method to return the age
    public function getAge() {
        return $this->age;
    }
}

// Define the Car class
class Car {
    public $make;
    public $model;
    protected $year;

    // Constructor method to initialize properties
    public function __construct($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    // Public method to return car information
    public function getCarInfo() {
        return "Make: " . $this->make . ", Model: " . $this->model . ", Year: " . $this->year;
    }
}

// Create an instance of the Person class
$person = new Person("John Paul", "Oliva", 19);

// Create an instance of the Car class
$car = new Car("Toyota", "Corolla", 2020);

// Display the person's full name and age
echo "Full Name: " . $person->getFullName() . "\n";
echo "Age: " . $person->getAge() . "\n";

// Update the age and display the updated age
$person->setAge(20);
echo "Updated Age: " . $person->getAge() . "\n";

// Display the car's information
echo "Car Info: " . $car->getCarInfo() . "\n";

?>
