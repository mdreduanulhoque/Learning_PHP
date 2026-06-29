<?php

// For loop
for($i = 0; $i < 6; $i++){
    echo $i . " ";
}
echo "<br>";

// WHile loop
$i = 1;
while($i <= 10){
    echo $i . " ";
    $i++;
}
echo "<br>";

// For-each loop
$arr = ["Appke", "Banana", "Mango"];
foreach($arr as $fruite ){
    echo $fruite . " ";
}



?>