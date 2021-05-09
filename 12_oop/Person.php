<?php

class Person {
    public $name;
    public $surname;
    private $age;
    public static $counter = 0;

    public function __construct($name, $surname) {
        $this->name = $name;
        $this->surname = $surname;
        self::$counter++; // $this references the obj, self references the class, since static means the property is for the class  
    }

    public function setAge($age){
        $this->age = $age; 
    }
    
    public function getAge(){
        return $this->age; 
    }

    public static function getCounter() {
        return self::$counter;
    }
}