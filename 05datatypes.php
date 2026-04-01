<?php
    $integer = 10;
    $float = 3.14;
    $string = "Hello, World!";
    $boolean = true;
    echo "Integer: $integer<br>";
    echo "Float: $float\n<br>";
    echo "String: $string\n<br>";
    echo "Boolean: ";
    var_dump($boolean);
    echo "<br>";

    //Object
    class Car {
        public $make;
        public $model;
        public function __construct($make, $model) {
            $this->make = $make;
            $this->model = $model;
        }
    }
    $car = new Car("Toyota", "Corolla");

    //Array..
    $arr = array(1, 2, 3, 4, 5);
    echo "Array: ";
    print_r($arr);
    echo "<br>";
    var_dump($arr);
    echo "<br>";
    echo $arr[0];

    //NULL
    $nullValue = null;
    echo "Null value: ";
    var_dump($nullValue);
?>