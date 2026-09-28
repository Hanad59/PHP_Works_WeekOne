<?php

//Creating associative array using array() function
$Student = array(   
    "ID" => 1,
    "Name" => "Abdi Ali Nor",
    "Age" => 20,
    "Address" => "Mogadishu",
    "Email" => "abdi@example.com",
    "Gender" => "Male",
    "isMarried" => false
);

print_r($Student);
echo "<br>";

echo $Student["ID"];

echo "<br>";

//Creating associative array manually indexing
$Employee["ID"] = 1;
$Employee["Name"] = "John Doe";
$Employee["Age"] = 30;
$Employee["Gender"] = "Male";
$Employee["isMarried"] = true;
$Employee["Address"] = "New York";
$Employee["Email"] = "john@example.com";

print_r($Employee);
echo "<br>";

foreach ($Employee as$value) {
    echo "$value, <br>";
}

echo "<br>";

foreach ($Employee as $key => $value) {
    echo "$key: $value <br>";
}

//Two dimensional  array
$Students = array(
    array( 1, "Abdi Ali Nor", 20, "Mogadishu", "abdi@example.com" ),
    array( 2, "Asha Mohamed", 22, "Hargeisa", "asha@example.com" ),
    array( 3, "Mohamed Ahmed", 21, "Kismayo", "mohamed@example.com" ),
    array( 4, "Fatima Ali", 23, "Baidoa", "fatima@example.com" ),
    array( 5, "Hassan Abdi", 24, "Garowe", "hassan@example.com" ),
    array( 6, "Amina Yusuf", 25, "Berbera", "amina@example.com" )
);

print_r($Students);
echo "<br>";

echo "Student 1 Name: ".$Students[0][1]."<br>";

echo "<br>";

echo "Student 2 Age: ".$Students[1][2]."<br>";
echo "<br>";

foreach ($Students as $info) {
    foreach ($info as $value) {
        echo "$value, ";
    }
    echo "<br>";
}

//Two dimensional associative array
$Employees = array(
    array("ID" => 1,"Name" => "John Doe","Age" => 30,  "Gender" => "Male", "isMarried" => true, "Address" => "New York",  "Email" => "john@example.com" ),
    array("ID" => 2,"Name" => "Jane Smith", "Age" => 25, "Gender" => "Female", "isMarried" => false, "Address" => "Los Angeles", "Email" => "jane@example.com"),
    array( "ID" => 3, "Name" => "Michael Johnson", "Age" => 35, "Gender" => "Male", "isMarried" => true,  "Address" => "Chicago", "Email" => "michael@example.com" ),
    array( "ID" => 4,"Name" => "Emily Davis","Age" => 28,"Gender" => "Female","isMarried" => false, "Address" => "Houston",  "Email" => "emily@example.com" ),
    array("ID" => 5,"Name" => "David Wilson","Age" => 32,"Gender" => "Male","isMarried" => true, "Address" => "Phoenix", "Email" => "david@example.com"),
    array( "ID" => 6, "Name" => "Olivia Brown", "Age" => 27, "Gender" => "Female","isMarried" => false,  "Address" => "Philadelphia", "Email" => "olivia@example.com" )
);

print_r($Employees);
echo "<br>";

echo "Employee 1 Name: ".$Employees[0]["Name"]."<br>";

echo "<br>";
echo "Employee 2 Age: ".$Employees[1]["Age"]."<br>";
echo "<br>";

foreach ($Employees as $info) {
    foreach ($info as $key => $value) {
        echo "$key: $value, ";
    }
    echo "<br>";
}

?>