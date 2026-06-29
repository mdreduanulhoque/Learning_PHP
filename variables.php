<?php
// Single line comment

/* 

Muti
line
comment

*/ 

$name = "Sadik";
$age = 20;
$isFather = False;
$budget = 20.99;
$salary = null;

echo "Hello " . $name . "<br>";
echo "Hello {$name} <br>";
echo "Age is {$age} yesrs old <br>";
echo "Budget is {$budget} taka <br>";
echo "Salary is {$salary} <br> <br>";

// printing data type 

echo gettype($name) . "<br>";
echo gettype($age) . "<br>";
echo gettype($isFather) . "<br>";
echo gettype($budget) . "<br>";
echo gettype($salary) . "<br> <br>";

// For more information use var_dump()
var_dump($name);
echo "<br>";
var_dump($age);
echo "<br>";
var_dump($isFather);
echo "<br>";
var_dump($budget);
echo "<br>";
var_dump($salary);
echo "<br> <br>";

// Check if variable belongs to a specific data type
var_dump(is_int($name));
echo "<br>";
var_dump(is_int($age));
echo "<br>";
var_dump(is_bool($isFather));
echo "<br>";
var_dump(is_bool($budget));
echo "<br> <br>";

// is a variable defined or not?
var_dump(isset($name));
echo "<br>";
var_dump(isset($age));
echo "<br>";
var_dump(isset($country));
echo "<br>";
var_dump(isset($salary));
echo "<br> <br>";









?>