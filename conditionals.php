<?php

// == -> Checks if values are same or not
// === -> checks if the values and datatyoes are sname or not
// != -> checks if values are different or not
// !=== -> checks if values and datatypes are different or not
// <, >, <=, >= -> with their traditinal meaning

$n = 10;

if($n < 5){
    echo "The number is less than 5 <br>";
}else if($n < 10){
    echo "The number is not greater than 10 <br>";
}else{
    echo "The number is greater than 10 <br>";
}

// Logical operator
// && , || , !

if($n > 10 && $n < 15){
    echo "The number is between 10 and 15 <br>";
}

// Use of switch case as same as C

?>