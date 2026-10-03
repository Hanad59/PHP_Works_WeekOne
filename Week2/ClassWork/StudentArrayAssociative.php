<?php


//Associative array of two dimensions with table format
$Students = array(
        "CA221" => array(
        "Name" => "Abdi Ali Nor",
        "Phone" => 615443327,
        "Address" => "Mogadishu"        
),
    "CA223" => array(
        "Name" => "Asha Mohamed Abdi",
        "Phone" => 617665543,
        "Address" => "Hargeisa"
    ),
    "CA234" => array(
        "Name" => "Omar Hassan Mohamed",
        "Phone" => 618996644,
        "Address" => "Kismayo"
    )
);

echo "<h2 style='color: green;'>Associative Array of Two Dimensions with Table Format</h2>";
echo "<table border='1' style='border-collapse: collapse; margin: 0;'>";

echo "table border='1' style='border-collapse: collapse; margin: 0;'>";

echo "<tr>";

 foreach ($Students ["CA221"] as $key => $value) {
    echo "<th style='padding: 5px; text-align: center;'>$key</th>";
}
 echo "</tr>";

 foreach ($Students as $studentID => $studentInfo) {
    echo "<tr>";
  echo
    echo "</tr>";

?>