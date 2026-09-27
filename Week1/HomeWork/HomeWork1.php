<?php

echo "<h1 style='background-color: blue; color: white; padding: 20px; text-align: center; font-size: 55px'>First Home Work One, Week Two</h1>";

//Q.1: three integer number (print greatest and smallest)

echo "<div style='margin-left: 20px; font-size: 17px;'>";

echo "<h2 style='color: green;'>Q.1: Greatest and Smallest Three Integer Numbers</h2>";


$numbers = [12, 34, 100];

if ($numbers[0] > $numbers[1] && $numbers[0] > $numbers[2]) 
    echo "The greatest number is $numbers[0]";
elseif ($numbers[1] > $numbers[0] && $numbers[1] > $numbers[2])
    echo "The greatest number is $numbers[1]";
else
    echo "The greatest number is $numbers[2]", "<br>"; 



if ($numbers[0] < $numbers[1] && $numbers[0] < $numbers[2]) 
    echo "The greatest number is $numbers[0]";
elseif ($numbers[1] < $numbers[0] && $numbers[1] < $numbers[2])
    echo "The greatest number is $numbers[1]";
else
    echo "The greatest number is $numbers[2]";


echo "<br>";

//Q.2: number divisible by (3,5, both, none)

echo "<h2 style='color: green;'>Q.2: Divisible Number by (3,5, both and none)</h2>";

echo "<br>";

$num = 15;

if ($num % 3 == 0 && $num % 5 == 0)
    echo "The number that is divided by both 3 and 5 is $num";
elseif ($num % 5 == 0 && $num % 3 != 0)
    echo "The number that is divided by 5 only is $num";
elseif ($num % 3 == 0 && $num % 5 != 0)
    echo "The number that is divided 3 only is $num";
else
    echo "The numbers is not divided by 3 or 5";

echo "<br>";

//Q.3: odd number (2 to 20)


echo "<h2 style='color: green;'>Q.3: Odd Numbers (2 to 20)</h2>";



echo "<br>";

for ($list = 2; $list <= 20; $list++){
  if ($list % 2 != 0)
      echo "The odd numbers are $list", "<br>";

};

echo "<br>";

//Q.3: even number (35 to 7)

echo "<h2 style='color: green;'>Q.3: Even Numbers (35 to 7)</h2>";


for ($list = 35; $list >= 7; $list--){
  if ($list % 2 == 0)
      echo "The even numbers are: " .$list, "<br>";

}

echo "<br>";

//Q.4: numbers divisible by 2 and 5 at the same time (50 to 2)

echo "<h2 style='color: green;'>Q.4: Divisible Numbers by 2 and 5 (50 to 2)</h2>";


for ($m = 50; $m >= 2; $m--){
    if ($m % 2 == 0 && $m % 5 ==0)
        echo "The numbers divisible by 2 and 5 are: $m", "<br>" ;
}

echo "<br>";

// Q.5: reverse numbers (1,2,3,4,5)

echo "<h2 style='color: green;'>Q.5: Reverse Numbers</h2>";


$num = 12345;
$reverse = 0;

while ($num > 0){
    $digit = $num % 10;
    $reverse = ($reverse * 10) + $digit;
    $num = intdiv($num, 10);
}

echo "The reverse number is: " . $reverse; 


 echo "<br>";

 //Q.6: calculate lowest comman multiplier(LCM) of two postive integer numbers

 echo "<h2 style='color: green;'>Q.6: Lowest Common Multiplier (LCM) of Two Postive Integer Numbers</h2>";


 $number1 = 8;
 $number2 = 12;

 $max = ($number1 > $number2) ? $number1 : $number2;

 while (true) {
    if ($max % $number1 == 0 && $max % $number2 == 0){
        $LCM = $max;
        break;
    }
    $max++;
 }

 echo "LCM of $number1 and $number2 is: $LCM";


 echo "<br>";

 //Q.7: calculate highest comman factor (HCF) of two integer number

 echo "<h2 style='color: green;'>Q.7: Highest Common Fcator (HCF) of Two Integer Number</h2>";


$num1 = 18;
$num2 = 24;
$HCF = 1;

for ($h = 1; $h <= $num1 &&  $h <= $num2; $h++){
    if ($num1 % $h == 0 && $num2 % $h == 0){
        $HCF = $h;
    }
}

echo "HCF of $num1 and $num2 is: " . $HCF;


//Q.8: Mulltiplication Table (12*12) using nasted loops

echo "<h2 style='color: green;'>Q.8: Multiplication Table</h2>";

echo "<table border='1' style='border-collapse: collapse; margin: 0;'>";

for ($i = 1; $i <= 12; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= 12; $j++) {
        echo "<td style='padding: 5px; text-align: center;'>" . ($i * $j) . "</td>";
    }
    echo "</tr>";
}

echo "</table>";

//Q.9: prime and non-prime numbers

echo "<h2 style='color: green;'>Q.9: Prime and Non-Prime numbers</h2>";
$number = 17; 
$isPrime = true;

if ($number < 2) {
    $isPrime = false;
} 
else {
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            $isPrime = false;
            break;
        }
    }
}

if ($isPrime) {
    echo "$number is a Prime number.";
} else {
    echo "$number is a Non-Prime number.";
}

 echo "<br>";

 

//Q.10: prime numbers from (10 to 50)

echo "<h2 style='color: green;'>Q.10: Prime Numbers from (10 to 50)</h2>";


echo "Prime numbers between 10 and 50 are: ";

for ($num = 10; $num <= 50; $num++) {

    $isPrime = true;

    for ($i = 2; $i < $num; $i++) {

        if ($num % $i == 0) {
            $isPrime = false;
            break;
        }

    }

    if ($isPrime) {
        echo $num . " ,    ";
    }
}

echo "</div>";
?>
