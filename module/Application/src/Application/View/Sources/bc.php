<?php
function find_ac() 
{
    $a = 21;        // A = 21
    $b = null;
    $c = null;

    $ab = 23;       // A+B = 23
    $ac = -21;      // A+C = -21
    $b = ($ab-$a);  // B = 23 - 21
    $c = ($ac-$a);  // C = -21 - 21
    
    return array($b, $c);
}
?>