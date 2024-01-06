<?php

// This is a deliberate mistake
$variable1 = 10;
$variable2 = "20"; // Note the incorrect usage of quotes

// Attempting to add a string and an integer (causing a type mismatch)
$result = $variable1 + $variable2;

// This line is intentionally missing a semicolon
echo "The result is: " . $result;

// Intentional syntax error: Missing closing parenthesis
if ($variable1 > 5) {
    echo "Variable1 is greater than 5";
}

// Attempting to call an undefined function


?>
