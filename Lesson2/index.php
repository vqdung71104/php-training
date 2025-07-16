<!-- variable -->
<?php
    $txt = "Hello world";
    $x = 50;
    $y = 10.5;
    $b = true; 
    $cars = array("IT", "Sale", "CEO");
    $n = null;

    //link
    $tx1 = "Hello world";
    $tx1 .= "!";


    //if
    $t = date("H");
    if ($x < "30") {
        echo" Good day!";
    } elseif ($x < "20") {
        echo "Good morning!";
    } elseif ($x < "15") {
        echo "Good afternoon!";
    } else {
        echo "Good evening!";
    }

    // switch-case
    $favcolor = "red";
    switch($favcolor) {
        case "red":
            echo "Your favorite color is red!";
            break;
        case "blue":
            echo "Your favorite color is blue!";
            break;
        case "green":
            echo "Your favorite color is green!";
            break;
        default:
            echo "Your favorite color is neither red, blue, nor green!";
    }

    //while
    $x = 1;
    while($x <= 10) {
        echo "The number is: $x <br>";
        $x++;
    }
    //do-while
    $x = 1;
    do{
        echo "The number is: $x <br>";
        $x++;
    } while ($x <= 5);
    //for
    for ($x = 0; $x <= 5; $x++) {
        echo "The number is: $x <br>";
    }
    //foreach
    $colors = array("red", "green", "blue");
    foreach ($colors as $value) {
        echo "$value <br>";
    }

    //arrays
    $array = [];
    $array = array();

    $jobs = array("IT", "Sale", "CEO");
    //associative array
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    $age["Peter"] = "35";

    //multidimensional array
    $jobs = array(
        array("IT", 22, 18),
        array("Sale", 15, 13),
        array("CEO", 5, 2)
    );

    echo $jobs[0][0] . ", " . $jobs[0][1] . ", " . $jobs[0][2] . "<br>";


    
?>
