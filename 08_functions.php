<?php

// Function which prints "Hello I am Zura"
function hello()
{
    echo 'Hello';
}
hello();
// Function with argument
function helloFirstName($firstName)
{
    echo "Hello ${firstName}";
}
helloFirstName('Nathan');
// Create sum of two functions
function sum( $a, $b)
{
    $sumOfAB = $a + $b;
    echo "Sum of '$a' & '$b' is ${sumOfAB}" . '<br>';
}
sum(20, 40);
// Create function to sum all numbers using ...$nums
function sum2(...$nums) {
    $sum = 0;
    foreach ($nums as $n) {
        $sum += $n;
    }
    return $sum;
}
echo sum2(1,2,3,4,5,6). '<br>';
// Arrow functions
function sum3(...$nums)
{
    return array_reduce($nums, fn($carry, $n) => $carry + $n);
}

echo sum3(1,2,3,4,5,6);
