<?php
require_once "Person.php";

//Inheritance

class Student extends Person { 
    public string $studentId;

    public function __construct($name, $surname, $studentId)
    {
        parent::__construct($name, $surname); //inheriting these properties from parent
        $this->studentId = $studentId;
        $this->age = 18;
    }
    
}