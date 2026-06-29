<?php
// Simple Array
$arr = ["Apple", "Banana", "Cherry"];
echo $arr[0] . "<br>";
$arr[] = "Mango";

echo "<pre>";
var_dump($arr);
echo "</pre>";

// Different Type of element
$arr1 = ["Reduan", 20, "UIU", 243];
echo "<pre>";
var_dump($arr1);
echo "</pre>";

// Associative Array
$user = [
    'name' => "Reduan",
    'age' => 20,
    'varsity' => "UIU",
    'batch' => 243,
    'hobbies' => ["sleeping", "playing"]
];
echo $user["name"];
echo "<pre>";
var_dump($user);
echo "</pre>";



?>