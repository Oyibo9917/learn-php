<!-- 
EARLY-BINDING APPROACH.....
This means that variables passed to the closure's namespace using use keyword will have the same values
when the closure was defined -->

<?php

$rate = .05;

// Exports variable to closure's scope...
// note that $rate = .05 even when the function calls comes after its reinitialized to .1
$calculateTax = function ($value) use ($rate) {
    return $value * $rate;
};

$rate = .1; 

print $calculateTax(100); // 5

?>