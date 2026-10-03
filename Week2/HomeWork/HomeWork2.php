<?php

echo "<h1 style='color: white; background-color: green; padding: 10px; text-align: center;'>HOME WORK,WEEK TWO PHP</h1>";

//Array of one dimension, initialize it to the following values
$Array = [5, -7, 12, 10, -7, 11, -6, 12, 1, -7, 2, 9];

echo "<h2 style='color: blue;'>Question 1: Array of one dimension</h2>";
// A--------------------Print all elements of the array--------------------
for ($i = 0; $i < count($Array); $i++) {
    echo $Array[$i] . " ";
}
echo "<br>";

// B--------------------Calculating and printing total of all elements of the array--------------------
$sum = 0;
for($i = 0; $i < count($Array); $i++) {
    $sum += $Array[$i];
}
echo "Total of all elements of the array: " . $sum . "<br>";

// C--------------------Calculating and printing  total of even elements of the array--------------------
$evenSum = 0;
for($i = 0; $i < count($Array); $i++) {
    if($Array[$i] % 2 == 0) {
        $evenSum += $Array[$i];
    }
}
echo "Total of even elements of the array: " . $evenSum . "<br>";

// D--------------------Calculating and printing  total of odd elements of the array--------------------
$oddSum = 0;
for($i = 0; $i < count($Array); $i++) {
    if($Array[$i] % 2 != 0) {
        $oddSum += $Array[$i];
    }
}
echo "Total of odd elements of the array: " . $oddSum . "<br>";

// E--------------------Finding minimum element and it's position in the array--------------------
$min = $Array[0];
$minPosition = 0;
for($i = 1; $i < count($Array); $i++) {
    if($Array[$i] < $min) {
        $min = $Array[$i];
        $minPosition = $i;
    }
}
echo "Minimum element of the array: " . $min . "<br>";
echo "Position of minimum element: " . $minPosition . "<br>";

// F--------------------Finding maximum element and it's position in the array--------------------
$max = $Array[0];
$maxPosition = 0;
for($i = 1; $i < count($Array); $i++) {
    if($Array[$i] > $max) {
        $max = $Array[$i];
        $maxPosition = $i;
    }
}
echo "Maximum element of the array: " . $max . "<br>";
echo "Position of maximum element: " . $maxPosition . "<br>";

echo "<br>";

echo "<h2 style='color: blue;'>Question 2: Associative array of two dimensions</h2>";

//2.Associative array of two dimensions
$associativeArray = array(
    "Light" => array("red" => "Light Red", "green" => "Light Green", "blue" => "Light Blue"),
    "Normal" => array("red" => "Normal Red", "green" => "Normal Green", "blue" => "Normal Blue"),
    "Dark" => array("red" => "Dark Red", "green" => "Dark Green", "blue" => "Dark Blue")
);
echo "<table border='1' style='border-collapse: collapse;'>";
echo "<tr><th></th><th>Red</th><th>Green</th><th>Blue</th></tr>";
foreach ($associativeArray as $row => $colors) {
    echo "<tr><td>" . $row . "</td>";
    foreach ($colors as $color => $value) {
        echo "<td>" . $value . "</td>";
    }
    echo "</tr>";
}
echo "</table>";

echo "<br>";

echo "<h2 style='color: blue;'>Question 3: Two-dimensional square array</h2>";

//3. Array of two dimensions (square array)


// 1) Array initialize 
$matrix = [
    [2, -6, 8],
    [-6, 1, 6],
    [7, 8, -6]
];

$rows = count($matrix);
$cols = count($matrix[0]);

// Variables calculate kara
$odd_count = 0;
$even_count = 0;
$total_sum = 0;

$row_sums = array_fill(0, $rows, 0);
$col_sums = array_fill(0, $cols, 0);

$diag1_sum = 0; 
$diag2_sum = 0; 

$min_val = $matrix[0][0];
$max_val = $matrix[0][0];

$min_pos = [];
$max_pos = [];

// Values loop dware calculate kara
for ($i = 0; $i < $rows; $i++) {
    for ($j = 0; $j < $cols; $j++) {
        $val = $matrix[$i][$j];
        
        // Odd/Even count
        if ($val % 2 != 0) {
            $odd_count++;
        } else {
            $even_count++;
        }
        
        // Row aani Column sums
        $row_sums[$i] += $val;
        $col_sums[$j] += $val;
        $total_sum += $val;
        
        // Diagonals
        if ($i == $j) {
            $diag1_sum += $val;
        }
        if ($i + $j == $rows - 1) {
            $diag2_sum += $val;
        }
        
        // Min Value check
        if ($val < $min_val) {
            $min_val = $val;
        }
        
        // Max Value check
        if ($val > $max_val) {
            $max_val = $val;
        }
    }
}

// Min aani Max che positions shodha
for ($i = 0; $i < $rows; $i++) {
    for ($j = 0; $j < $cols; $j++) {
        if ($matrix[$i][$j] == $min_val) {
            $min_pos[] = "[$i,$j,]";
        }
        if ($matrix[$i][$j] == $max_val) {
            $max_pos[] = "[$i,$j,]";
        }
    }
}

// Table HTML Format print kara
echo "<table border='1' cellpadding='5' cellspacing='0' style='border-collapse: collapse; text-align: center; font-family: Arial, sans-serif;'>";

// Total odd elements
echo "<tr><td colspan='5'><b>Total odd elements = $odd_count</b></td></tr>";

// Total even elements
echo "<tr><td colspan='5'><b>Total even elements = $even_count</b></td></tr>";

echo "<tr style='background-color: #888; color: white;'>";
echo "<td><b>$diag1_sum</b></td>";
for ($j = 0; $j < $cols; $j++) {
    echo "<td><b>{$col_sums[$j]}</b></td>";
}
echo "<td><b>$diag2_sum</b></td>";
echo "</tr>";

for ($i = 0; $i < $rows; $i++) {
    echo "<tr>";
    echo "<td><b>{$row_sums[$i]}</b></td>"; 
    for ($j = 0; $j < $cols; $j++) {
        echo "<td>{$matrix[$i][$j]}</td>"; 
    }
    echo "<td><b>{$row_sums[$i]}</b></td>"; 
    echo "</tr>";
}

echo "<tr style='background-color: #888; color: white;'>";
echo "<td><b>$diag2_sum</b></td>";
for ($j = 0; $j < $cols; $j++) {
    echo "<td><b>{$col_sums[$j]}</b></td>";
}
echo "<td><b>$diag1_sum</b></td>";
echo "</tr>";

echo "<tr><td colspan='5'><b>Total all elements = $total_sum</b></td></tr>";

$min_pos_str = implode(", ", $min_pos);
$min_count = count($min_pos);
echo "<tr><td colspan='5'>Min element is: $min_val in $min_count positions:<br>$min_pos_str</td></tr>";

$max_pos_str = implode(", ", $max_pos);
$max_count = count($max_pos);
echo "<tr><td colspan='5'>Maximum element is: $max_val in $max_count positions:<br>$max_pos_str</td></tr>";

echo "</table>";

echo "<br>";

echo "<h2 style='color: blue;'>Question 4: Associative array of two dimensions</h2>";


//4. Associative array of two dimensions 
$associativeArray = array(
    "CA202" => array("Name" => "Gedi Omar Hassan","Phone" => "612568923","Address" => "kahda" ),
    "CA227" => array("Name" => "Fatma Moktar Isak","Phone" => "617896542", "Address" => "Londan" ),
    "CA234" => array( "Name" => "Abdi Ali Nor","Phone" => "615228890","Address" => "hodan1")
);
echo "<table border='1' style='border-collapse: collapse;'>";
echo "<tr><th></th><th>Name</th><th>Phone</th><th>Address</th></tr>";
foreach ($associativeArray as $rowName => $row) {
    echo "<tr>";
    echo "<td>" . $rowName . "</td>";
    echo "<td>" . $row["Name"] . "</td>";
    echo "<td>" . $row["Phone"] . "</td>";
    echo "<td>" . $row["Address"] . "</td>";
    echo "</tr>";
}
echo "</table>";


echo "<br>";
echo "<h2 style='color: blue;'>Question 5: Student Transcript</h2>";


//5. Array of student transcript based on semesters (1,2,3)
    $Semester  = array(
        "Semester 1" => array("Course" => "Mathematics", "CW1" => "10", "Midterm" => "30", "CW2" => "15", "Final" => "40", "Total" => "95", "Status" => "Pass"),
        "Semester 2" => array("Course" => "Physics", "CW1" => "8", "Midterm" => "25", "CW2" => "12", "Final" => "35", "Total" => "80", "Status" => "Pass"),
        "Semester 3" => array("Course" => "Chemistry", "CW1" => "5", "Midterm" => "20", "CW2" => "10", "Final" => "30", "Total" => "65", "Status" => "Pass"),
        "Semester 4" => array("Course" => "Biology", "CW1" => "12", "Midterm" => "28", "CW2" => "14", "Final" => "38", "Total" => "92", "Status" => "Pass"),
        "Semester 5" => array("Course" => "Computer Science", "CW1" => "9", "Midterm" => "15", "CW2" => "20", "Final" => "0", "Total" => "44", "Status" => "Fail"),
        "Semester 6" => array("Course" => "English", "CW1" => "10", "Midterm" => "20", "CW2" => "15", "Final" => "25", "Total" => "70", "Status" => "Pass")
    );

echo "<table border='1' style='border-collapse: collapse;'>";
echo "<tr><th>Semester</th><th>Course</th><th>CW1</th><th>Midterm</th><th>CW2</th><th>Final</th><th>Total</th><th>Status</th></tr>";
foreach ($Semester as $semester => $details) {
    echo "<tr>";
    echo "<td>" . $semester . "</td>";
    echo "<td>" . $details["Course"] . "</td>";
    echo "<td>" . $details["CW1"] . "</td>";
    echo "<td>" . $details["Midterm"] . "</td>";
    echo "<td>" . $details["CW2"] . "</td>";
    echo "<td>" . $details["Final"] . "</td>";
    echo "<td>" . $details["Total"] . "</td>";
    echo "<td>" . $details["Status"] . "</td>";
    echo "</tr>";
}
echo "</table>";

?>