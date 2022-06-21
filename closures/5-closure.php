<!-- early-bind approach Part-2 -->

<?php

$rate = .05;

// Exports variable to closure's scope
// note that the use of '&' before '$rate' changes the early-binding and assign .1 to it..
$calculateTax = function ($value) use (&$rate) { // notice the & before $rate
    return $value * $rate;
};

$rate = .1;

print $calculateTax(100); // 10

?>