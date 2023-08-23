<?php


$numbers = array(1, 2, 3, 4, 5);

echo "<h2>Numeric Array:</h2>";
echo "<ul>";
foreach($numbers as $number) {
    echo "<li>$number</li>";
}
echo "</ul>";


$person = array(
    "name" => "John",
    "age" => 30,
    "gender" => "male"
);

echo "<h2>Associative Array:</h2>";
echo "<ul>";
foreach($person as $key => $value) {
    echo "<li>$key: $value</li>";
}
echo "</ul>";


$fruits = array(
    array("name" => "apple", "color" => "red"),
    array("name" => "banana", "color" => "yellow"),
    array("name" => "orange", "color" => "orange")
);

echo "<h2>Multidimensional Array:</h2>";
echo "<ul>";
foreach($fruits as $fruit) {
    echo "<li>";
    foreach($fruit as $key => $value) {
        echo "$key: $value ";
    }
    echo "</li>";
}
echo "</ul>";

?>
