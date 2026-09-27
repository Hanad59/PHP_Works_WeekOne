<?php

$month = "March";

if ($month == "March")
    echo "it's spring time";

echo "<br>";

$x = 4;
$y = 6;

if ($x > $y) {
    echo "$x is greater than $y";
}

if ($x < $y) {
    echo "$x is less than $y";
}

echo "<br>";
$mark = 35;

if ($mark >= 50)
echo "PASSED";
else
echo "FAILED";

echo "<br>";
$mark = 80;

if ($mark >= 95)
echo "Your grade is A+";
elseif ($mark >= 90)
echo "Your grade is A";
else if ($mark >= 85)
echo "Your grade is B+";
else if ($mark >= 80)
echo "Your grade is B";
else if ($mark >= 70)
echo "Your grade is C+";
else
echo "Your grade is F";


echo "<br>";
$month = "jdfgkdfg";

switch ($month) {
    case "January":
    case "February":
    case "March":
        echo "It's Winter time!";
        break;
    case "April":
    case "May":
    case "June":
        echo "It's Spring time!";
        break;
    case "July":
        echo "It's Summer time!";
        break;
    default:
        echo "Invalid Month";
        break;
}

echo "<br>";
$page = "About";

switch ($page):
case "Home":
echo "You selected Home Page";
break;
case "About":
echo "You selected About Page";
break;
case "News":
echo "You selected News Page";
break;
case "Contact":
echo "You selected Contact Page";
break;
case "Contact":
echo "You selected Contact Page";
break;
default:
echo "Invalid Page";
endswitch;



echo "<br>";
$mark = 65;

switch ($mark) {
case ($mark >= 90):
echo "Your grade is A";
break;
case ($mark >= 80):
echo "Your grade is B";
break;
case ($mark >= 70):
echo "Your grade is C";
break;
case ($mark >= 60):
echo "Your grade is D";
break;
case ($mark >= 50):
echo "Your grade is E";
break;
default:
echo "Your grade is F";

}

echo "<br>";
$fuel = 1;

echo ($fuel <= 1) ? "Fill Tank Now" : "It's Enough Fuel";

echo "<br>";

$mark = 35;
$message = ($mark >= 50) ? "PASSED" : "FAILED";

echo $message

?>