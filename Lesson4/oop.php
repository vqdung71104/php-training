<?php
//class definition
public class SimpleClass {
    public $property1 = "Hello World!";
    public $property2 = 42;

    public function displayProperties() {
        echo $this->property1 . "<br>";
        echo "The answer is: " . $this->property2 . "<br>";
    }
}
//structure of the class
public class Person{
    private $name;
    private $age;
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
    public function getName() {
        return $this->name;
    }
    public function getAge() {
        return $this->age;
    }
    public function sayHello() {
        echo "hello, my name is " . $this->name . " and I am " . $this->age . " years old.<br>";
    }
}
$p1 = new Person("John", 30);
$p1->sayHello();
?>