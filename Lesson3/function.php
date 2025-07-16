<?php
    fucntion greet() {
        echo "Hello, world!";
    }
    greet();
    function family($name) {
        echo "Hello, $name!";
    }
    family("John");
    function setHeight($height = 50) {
        echo "The height is: $height cm";
    }
    setHeight(350);
    setHeight(); // will use the default value of 50
    function addNumbers($a, $b) {
        return $a + $b;
    }
    $sum = addNumbers(5, 10);
    echo "The sum is: $sum";

    require_once('x.php');
    include_once('x.php');
?>


