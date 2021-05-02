<?php

// while
// while (true) {
//     echo 'It is true';
// }
// Loop with $counter
$counter = 0;

while ($counter <= 10) {
    echo 'Enter passowrd'.'<br>';
    $counter++;
}
// do - while
do {
        echo 'Enter password'.'<br>';
        $counter++;

    }
    while ($counter <= 5) ;

// for
for ($i = 0; $i <= 5; $i++) {
    echo "Counting . '$i' ".'<br>';
}
// foreach
$fruits = ["Banana", "Apple", "Orange"];
foreach ($fruits as $index => $fruit) {
    echo "$fruit . '<br>'";
}
// Iterate Over associative array.
$person = [
    'name' => 'Brad',
    'surname' => 'Traversy',
    'age' => 30,
    'hobbies' => ['Tennis', 'Video Games'],
];

foreach ($person as $key => $value) {
    if (is_array($value)) {
        echo $key .' '. implode(",", $value) .'<br>';
    } else {
        echo $key .' '. $value .'<br>';
    }
}