<?php
// Abstract class Animal
abstract class Animal {
    protected $name;
    
    public function __construct($name) {
        $this->name = $name;
    }
    
    // Phương thức trừu tượng (abstract method)
    abstract public function makeSound();
    
    // Phương thức thông thường
    public function eat() {
        return $this->name . " đang ăn";
    }
}

// Lớp con kế thừa từ Animal
class Dog extends Animal {
    public function makeSound() {
        return $this->name . " sủa: Gâu gâu!";
    }
}

class Cat extends Animal {
    public function makeSound() {
        return $this->name . " kêu: Meo meo!";
    }
}

// Sử dụng
$dog = new Dog("Bobby");
echo $dog->makeSound() . "\n"; // Bobby sủa: Gâu gâu!
echo $dog->eat() . "\n";       // Bobby đang ăn


// Interface Flyable
interface Flyable {
    public function fly();
}

// Interface Swimmable
interface Swimmable {
    public function swim();
}

// Lớp Bird kế thừa Animal và triển khai Flyable
class Bird extends Animal implements Flyable {
    public function makeSound() {
        return $this->name . " hót: Chíp chíp!";
    }
    
    public function fly() {
        return $this->name . " đang bay trên trời";
    }
}

// Lớp Duck kế thừa Animal và triển khai cả Flyable và Swimmable
class Duck extends Animal implements Flyable, Swimmable {
    public function makeSound() {
        return $this->name . " kêu: Quạc quạc!";
    }
    
    public function fly() {
        return $this->name . " đang bay thấp";
    }
    
    public function swim() {
        return $this->name . " đang bơi dưới nước";
    }
}

// Sử dụng
$bird = new Bird("Chích chòe");
echo $bird->makeSound() . "\n"; // Chích chòe hót: Chíp chíp!
echo $bird->fly() . "\n";       // Chích chòe đang bay trên trời

$duck = new Duck("Vịt Donald");
echo $duck->makeSound() . "\n"; // Vịt Donald kêu: Quạc quạc!
echo $duck->fly() . "\n";       // Vịt Donald đang bay thấp
echo $duck->swim() . "\n";      // Vịt Donald đang bơi dưới nước
?>