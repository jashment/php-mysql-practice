<?php
    $name = $_GET['dogName'];
    $age = $_GET['dogAge'];
    
    echo("Your dog is named " . $name . " and your dog is " . $age . " human years old.");
    
    $dogAge = $age *7;
    echo("<br/> Your dog is " . $dogAge . " dog years old.");
?>