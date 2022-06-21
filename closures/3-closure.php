<?php

$name = "Hello";
$address = "Foo"; 

// To grant access to external varables use the 'use()' keyword.
// Note: a global variable can be accessed inside
$myFunction1 = function() use ($name, $address) { 
    var_dump($name, $address); // returns "hello" and "foo"
}

?>