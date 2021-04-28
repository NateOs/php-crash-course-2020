<?php

// What is a variable

// Variable types
echo 'Availble vars in php: string, int, float, boolean'.'<br>';
// Declare variables
$name = 'Zura';
$age = 28;
$isMale = true;
$height = 1.85;
$salary = null;
// Print the variables. Explain what is concatenation
echo $name.'<br>';
echo $age;
echo $isMale.'<br>';
echo $height.'<br>';
echo $salary.'<br>';
// Print types of the variables
echo gettype($name).'<br>';
echo gettype($age).'<br>';
echo gettype($height).'<br>';
echo gettype($isMale).'<br>';
echo gettype($salary).'<br>';
// Print the whole variable
var_dump($name);
// Change the value of the variable
echo $name = 'Kufu'.'<br>';
// Print type of the variable
echo gettype($name).'<br>';
// Variable checking functions
is_string($name);
// Check if variable is defined
isset($name);
isset($address);
// Constants

// Using PHP built-in constants