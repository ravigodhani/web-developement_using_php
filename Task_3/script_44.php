<!-- Write a PHP script to extract the values from an associative array using the array_values()
function. -->

<?php

$student = array(
    "first_name" => "Ravi",
    "last_name" => "Godhani",
    "age" => 20,
    "email" => "ravigodhani6@gmail.com"
);

$keys = array_values($student);

echo "Keys from the associative array:<br>";

print_r($keys);

?>