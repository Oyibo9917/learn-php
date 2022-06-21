<?php

$name = "Hello";
$address = "Foo"; 

// closure
$myFunction = function() { 
    var_dump($name, $address); // returns two error notice, since the variables aren´t defined 
}

?>