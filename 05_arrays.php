<?php

// Create array
$fruits = [];
$fruits = array();

$fruits = ["banana", "Apple", "Orange"];


// Print the whole array
var_dump($fruits);

// Get element by index
echo $fruits[1].'<br>';

// Set element by index
$fruits[0] = 'Peach';

// Check if array has element at index 2
echo isset($fruits[2]). '<br>';
// Append element
$fruits[] = 'Peach';

var_dump($fruits). '<br>';

// Print the length of the array
echo count($fruits). '<br>';

// Add element at the end of the array
array_push($fruits, 'yam');
var_dump($fruits). '<br>';

// Remove element from the end of the array
array_pop($fruits);
var_dump($fruits). '<br>';
// Add element at the beginning of the array
array_unshift($fruits, 'bar');
var_dump($fruits). '<br>';
// Remove element from the beginning of the array
array_shift($fruits);
var_dump($fruits). '<br>';

// Split the string into an array
$string = "banana, Apple, Peach";
echo '<pre>';
var_dump(explode(",", $string));
echo '</pre>';
// Combine array elements into string
echo implode(" & ", $fruits);
// Check if element exist in the array
echo '<pre>';
var_dump(in_array('Apple', $fruits));
echo '</pre>';
// Search element index in the array
echo '<pre>';
var_dump(array_search('Apple', $fruits));
echo '</pre>';
// Merge two arrays
$vegetables = ["potato", "cucumber"];
// Sorting of array (Reverse order also)
echo '<pre>';
rsort($fruits);
echo '</pre>';

echo '<pre>';
var_dump($fruits);
echo '</pre>';

// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================

// Create an associative array
$person = [
    'name' => 'Brad',
    'surname' => 'Traversy',
    'age' => 30,
    'hobbies' => ['Tennis', 'Video Games'],
];

echo '<pre>';
print_r($person);
echo '</pre>';
// Get element by key
echo $person['name'].'<br>';
// Set element by key
$person['channel'] = 'New Boston';
echo $person['channel'].'<br>';

echo '<pre>';
print_r($person);
echo '</pre>';
// Null coalescing assignment operator. Since PHP 7.4
if (!isset($person['address'])) {
    $person['address'] = 'unknown';
}

    //shorthand for above
    $person['address'] ??= 'unknown';

echo '<pre>';
print_r($person);
echo '</pre>';
// Check if array has specific key

// Print the keys of the array
echo '<pre>';
print_r(array_keys($person));
echo '</pre>';
// Print the values of the array
echo '<pre>';
print_r(array_values($person));
echo '</pre>';
// Sorting associative arrays by values, by keys
asort($person);
echo '<pre>';
var_dump($person);
echo '</pre>';

// Two dimensional arrays

$todos = [
    ['title' => 'Todo title 1', 'completed' => true],
    ['title' => 'Todo title 2', 'completed' => false],
];

echo '<pre>';
var_dump($todos);
echo '</pre>';