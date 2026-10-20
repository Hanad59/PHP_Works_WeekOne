<!-- //multidimensional associative array to store information countries, their capitals and population -->

$countries = [
    ["name" => "USA", "capital" => "Washington, D.C.", "population" => 331000000],
    ["name" => "Canada", "capital" => "Ottawa", "population" => 38000000],
    ["name" => "Germany", "capital" => "Berlin", "population" => 83000000],
    ["name" => "France", "capital" => "Paris", "population" => 67000000],
    ["name" => "Japan", "capital" => "Tokyo", "population" => 126000000]
];

function capital($countryName, $countries) {
    foreach ($countries as $country) {
        if ($country["name"] === $countryName) {
            return $country["capital"];
        }
    }
    return "Country not found.";
}

echo "countries and their capitals:<br>";

foreach ($countries as $country) {
    echo "Country: " . $country["name"] . "<br>";
    echo "Capital: " . $country["capital"] . "<br><br>";
}




 
