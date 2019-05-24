<?php
    
    function greetings() {
        print("Hello there!");
    }
    
    function repeat() {
        for($i =0; $i<10; $i++){
            print("This is repeat number " . ($i+1));
            print("<br/>");
        }
    }
    
    function dogAgeCalc($age) {
        $age = $age * 7;
        print("The age: ". $age);
    }
    
    function greet2($name) {
        print("Hello there " . $name);
    }
    
    function adding($x, $y) {
        print("The result is " . ($x + $y));
    }
    
    function doubled($value) {
        $value = $value + $value;
        return ($value);
    }
    
    
?>