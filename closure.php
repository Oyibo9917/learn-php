<?php

/* closure
The scope of a variable is the part of the script where the variable can be referenced/used.
PHP has three different variable scopes:
*local
*global
*static
A closure is an anonymous function that can't access outside scope.
*/

// example1

$name = "Hello";
$address = "Foo"; 

// regular function
function myfunction(){
    var_dump($name, $address); //displays "hello" and "foo"
}

// closure
$myFunction = function() { 
  var_dump($name, $address); // returns two error notice, since the variables aren´t defined 
}

// To grant access to external varables use the 'use()' keyword.
// Note: a global variable can be accessed inside
$myFunction = function() use($name, $address) { 
    var_dump($name, $address); // returns "hello" and "foo"
}

// EARLY-BINDING APPROACH.....
// This means that variables passed to the closure's namespace using use keyword will have the same values
// when the closure was defined

// example 1

$rate = .05;

// Exports variable to closure's scope...
// note that $rate = .05 even when the function calls comes after its reinitialized to .1
$calculateTax = function ($value) use ($rate) {
    return $value * $rate;
};

$rate = .1; 

print $calculateTax(100); // 5

// example 2

$rate = .05;

// Exports variable to closure's scope
// note that the use of '&' before '$rate' changes the early-binding and assign .1 to it..
$calculateTax = function ($value) use (&$rate) { // notice the & before $rate
    return $value * $rate;
};

$rate = .1;

print $calculateTax(100); // 10