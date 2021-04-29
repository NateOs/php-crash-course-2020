<?php

// Declaring numbers
$a =5;
$b = 4;
$c = 1.2;
// Arithmetic operations
echo ($a + $b) + $c; 
// Assignment with math operators
echo ($a + $b) + $c; 

// Increment operator
echo $a++.'<br>';
echo ++$a.'<br>';
// Decrement operator
echo $a--.'<br>';
echo --$a.'<br>';
// Number c1hecking functions
is_float(1.25);
is_double(1.25);
is_numeric(1.25);
is_int(1.25);
// Conversion
$strNumber = '12.34';
$number = (float)$strNumber;
// Number functions
echo 'These are: abs, floor, ceiling, round, min, max etc'.'<br>';
// Formatting numbers
$number = 12345678.123455;
echo number_format($number, 2, );
// https://www.php.net/manual/en/ref.math.php
