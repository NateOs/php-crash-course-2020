<?php

$age = 20;
$salary = 300000;

// Sample if
if ($age === 20) {
    echo '1'.'<br>';
}
// Without circle braces
if ($age === 20) 
    echo '1'.'<br>';

// Sample if-else
if ($age === 21) {
    echo '1'.'<br>';
} else {
    echo '2'.'<br>';
}
// Difference between == and ===
//* == doesnt check type, but === checks type
// if AND
if ($age > 20 && $salary === 300000) {
    echo "Do something";
}
// if OR

// Ternary if
echo $age < 22 ? 'Young' : 'Old';

// Short ternary
$myAge = $age ?: 18;
echo '<pre>';
print_r($myAge);
echo '</pre>';

// Null coalescing operator
$myName = isset($name) ? $name : 'John';
$myName = $name ?? 'John';

// switch
$userRole = 'admin'; // editor, user, admin
switch ($userRole) {
    case 'admin':
        echo 'admin';
        break;
    case 'editor': 
        echo 'editor';
        break;
    case 'user': 
        echo 'user';
        break;
    default: 
    echo 'Invalid role';
}
