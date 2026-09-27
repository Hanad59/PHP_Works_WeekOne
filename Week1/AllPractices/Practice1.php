<?php

echo "<h1>First Practice of PHP</h1>";

$name = " Mohamed";

echo "Welcome $name", "<br>";

$age = 20;

echo "Your age is $age", "<br>";

($age>18)?  print "Adult" : print "Young";

($age>18)?  "Adult" : "Young";

$district = 'Dharkenley';

echo "My district is $district", "<br>";

echo "Good" . " Morning" . $name, "<br>";

$Sp = "All students are ready to period";

echo "the length of this string \"$Sp\" is " . strlen( $Sp), "<br>";


$mess = "the books are ready for you";
echo "$mess", "<br>";
echo "are ready for you: " . str_replace("are ready for you", "are not ready for you", $mess);


define("PI", 3.14);
$radius = 4;
echo "<br>";
$area = PI * $radius * $radius;

echo "the area of circle: ", $area;



?>