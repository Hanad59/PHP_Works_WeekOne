<?php

//Creating array using array() function
$Fruits = array("Apple", "Banana", "Grapes");

print_r($Fruits);
echo "<br>";
 echo $Fruits[0]." " . $Fruits[1]." ".$Fruits[2];
echo "<br>";
var_dump($Fruits);

echo "<br>";

//Creating array manually indexing
$Cities[0] = "Mogadishu";
$Cities[1] = "Hargeisa";
$Cities[2] = "Kismayo";
$Cities[3] = "Baidoa";

print_r($Cities);
echo "<br>";

echo "index 2: ".$Cities[2];

echo "<br>";

//Creating array with exlicit location
$Countries[0] = "Somalia";
$Countries[1] = "Ethiopia";
$Countries[2] = "Kenya";
$Countries[3] = "Djibouti";
$Countries[4] = "Uganda";
$Countries[5] = "Tanzania";
$Countries[6] = "Sudan";

var_dump($Countries);

echo "<br>";

//Array with different data types
$Student_info = array (
    "1",
    "Abdi Ali Nor",
    20,
    "Male",
    false
);

var_dump($Student_info);
echo "<br>";
print_r($Student_info);

echo "<br>";

//printing array using for loop
for($i=0; $i<count($Student_info); $i++){
    echo $Student_info[$i]."<br>";
}


//Printing array using foreach loop
foreach($Student_info as $value){
    echo "$value <br>";
}

//Calculatig sum of array elements
$numbers = array(1, 2, 3, 4, 5);
$sum = 0;
foreach($numbers as $n){
    $sum += $n;
}
echo "Sum of numbers: ".$sum;

echo "<br>";

//Creating array by adding the two arrays
$numbers1 = array(1, 2, 3);
$numbers2 = array(4, 5, 6);
for ($i = 0; $i < count($numbers1); $i++) {
    $combined_numbers[$i] = $numbers1[$i] + $numbers2[$i];
}
//Printing the combined array
foreach ($combined_numbers as $value) {
    echo "$value <br>";
}

echo "<br>";


?>