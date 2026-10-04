<?php

function WelcomeMsg($name){
    echo "Hi, $name Welcome to the Jamhuriya University of Science and Technology";
}

WelcomeMsg("Mohamed");

echo "<br>";
WelcomeMsg("Moktar");

echo "<br>";

function factorial($n){
    $result = 1;
    for($i = 1; $i <= $n; $i++)
        $result *= $i;
    echo "The Factorial of $n = ", $result;
}

factorial(5);

echo "<br>";

$a = 6;
factorial($a);

function factorialNumber($m){
    $resu = 1;
    for($i = 1; $i <= $m; $i++)
        $resu *= $i;
    return $resu;
}

echo "<br>";
echo "The Factorial of 4 = ", factorialNumber(4);

echo "<br>";

$array1 = array(9,3,4,7,8,5);

function passArray($arr){
    echo "The passed Array: ";
    for($i = 0; $i < count($arr); $i++){
        echo "$arr[$i], ";
        $arr[$i]++;
    }
    return $arr;

}

    echo "<br>";
    $a = passArray($array1);


    echo "<br>";
    echo "The modified Array: ";
    foreach($a as $v)
        echo "$v, ";

    //by value and by reference

    echo "<br>";
    $n = 5;

    function byValue($a){
        echo "The passed value of a = $a <br>";
        $a++;
        echo "The current value of a = $a <br>";

    }

    byValue($n);
    echo "The value of n after calling byValue() = $n <br>";

    function byReference(&$a){
        echo "The passed value of a = $a <br>";
        $a++;
        echo "The current value of a = $a <br>";
    }
    byReference($n);
    echo "The value of n after calling byReference() = $n <br>";

    function sum($a = 4, $b = 7){
        $total = $a + $b;
        echo "The sum of $a and $b = $total <br>";
    }

    sum(2,4);
    sum(5);
    sum();

    echo "<br>";
    echo "<br>";


    $name = "ALi";
    $age = 20;

    function test(){
        $address = "Hodan";
        global $name;
        echo "The name is $name <br>";
        echo "The age is: " . $GLOBALS['age'] . "<br>";
        echo "The address is $address <br>";
    }
    test();

    function counter(){
        static $count = 0;
        echo "The current value of count is: $count <br>";
        $count++;

    }

    echo "<br>";
    counter();
    counter();
    counter();
    counter();
?>