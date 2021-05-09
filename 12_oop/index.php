<?php

require_once "Person.php";
require_once "Student.php";

// What is class and instance
    // Classes are programming language structures that define what class objects include in terms of data stored in variables also known
    //  as properties, and behavior of the objects defined by functions also known as methods.

    // Objects are instances of the created classes.

    //the constructor function is a function on the class, called immediately on  the object when an instance is initiated

// Create Person class in Person.php

// Create instance of Person

// $p = new Person('Brad', 'Traversy');
// $p->setAge(30); /* trying to set the Age directly won't work because its a private property on the class, therefore you use 
//                 *the method "setAge" on the function. */
// echo $p->getAge(30);

// echo '<pre>';
// var_dump($p);
// echo '</pre>';

// $p2 = new Person('John','Smith');
// $p3 = new Person('Jane','Samonas');

// echo '<pre>';
// var_dump($p2);
// echo '</pre>';
// echo Person::getCounter(); //accessing the counter on the Person class

// Using setter and getter

$student = new Student('Nathan', 'Sodja', '1234'); //because student extends person, it also requires the same args

echo '<pre>';
var_dump($student);
echo '</pre>';
