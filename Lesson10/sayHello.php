<?php 
class Base {
    public function sayHello() {
        echo 'Hello ';
    }
}

trait SayWorld {
    public function sayHello() {
        parent::sayHello();
        echo 'World';
    }
}

class MyHelloWorld extends Base {
    use SayWorld;
}

$o = new MyHelloWorld();
$o->sayHello();
?>
<?php
trait A {
    public function smallTalk() {
        echo 'a';
    }
    public function bigTalk() {
        echo 'A';
    }
}

trait B {
    public function smallTalk() {
        echo 'b';
    }
    public function bigTalk() {
        echo 'B';
    }
}

class Talker {
    use A, B {
        B::smallTalk insteadof A;  // Sử dụng smallTalk của trait B thay vì trait A
        A::bigTalk insteadof B;    // Sử dụng bigTalk của trait A thay vì trait B
        B::bigTalk as talk;        // Đặt lại tên phương thức bigTalk của trait B thành 'talk'
    }
}