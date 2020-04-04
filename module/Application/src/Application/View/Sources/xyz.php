<?php
function find_xyz() 
{
    $array = ['X', 'Y', 5, 9, 15, 23, 'Z'];
    foreach ($array as $key => $arr) {
        if (is_numeric($arr)) { 
            if (isset($array[($key-1)]) && is_string($array[($key-1)])) { 
                $array[($key-1)] = $arr-(2*($key-1));
            } 
        } else {
            if (is_string($array[$key]) && isset($array[($key+1)]) && is_numeric($array[($key+1)])) {  
                $array[$key] = $array[($key+1)]-(2*$key);
            } elseif (is_string($array[$key]) && isset($array[($key-1)]) && is_numeric($array[($key-1)])) {
                $array[$key] = $array[($key-1)]+(2*($key-1));
            } elseif (is_string($array[$key])) { 
                $array[$key] = $array[($key+2)]+(2*($key-1));
            }
        }
    }
    return $array;
}
?>