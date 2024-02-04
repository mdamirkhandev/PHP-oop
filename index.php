<?php

// class Car
// {
//     private $color;
//     private $brand;
//     private $wheels = 4;
//     public function __construct($color, $brand)
//     {
//         $this->color = $color;
//         $this->brand = $brand;
//     }
//     public function getCarInfo()
//     {
//         echo "Color: " . $this->color . "<br> Brand: " . $this->brand . "<br> Wheels: " . $this->wheels . "<br> ____________<br>";
//     }
// }

// $car1 = new Car("blue", "honda");
// $car2 = new Car("red", "toyota");
// $car3 = new Car("green", "bmw");

// $car1->getCarInfo();
// $car2->getCarInfo();
// $car3->getCarInfo();


class employee
{
    public $name;
    public $age;
    public $salary;

    function __construct($name, $age, $salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }

    function info()
    {
        echo '<h1>Employee Information</h1>';
        echo 'Name: ' . $this->name . '<br>';
        echo 'Age: ' . $this->age . '<br>';
        echo 'Salary: ' . $this->salary . '<br>';
        echo '___________<br>';
    }
}

class manager extends employee
{
    private $ta = 1000;
    private $pb = 2000;
    private $total;

    function info()
    {
        $this->total = $this->salary + $this->ta + $this->pb;
        echo '<h1>Manager Information</h1>';
        echo 'Name: ' . $this->name . '<br>';
        echo 'Age: ' . $this->age . '<br>';
        echo 'Salary: ' . $this->total . '<br>';
        echo '___________<br>';
    }
}

// $e1 = new employee('Amir', '31', 5000);
// $e2 = new employee('Ali', '32', 6000);
// $e3 = new employee('Ahmad', '33', 7000);
//Manager class

$e2 = new employee('Ali', '32', 5000);
$e1 = new manager('Amir', '31', 6000);

$e1->info();
$e2->info();
// $e3->info();
