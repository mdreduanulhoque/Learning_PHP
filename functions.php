<?php

function sum($a, $b){
    return $a+$b;
}

function greet($name = "Sir"){
    echo "Hello {$name} <br>";
}

greet();
greet("Rahim");
echo sum(4,3);

?>