<?php
//  arguments are usually passed by value, which means that a copy of the value is used in the
// function and the variable that was passed into the function cannot be changed.

//If we call the function fix() without arguments it takes the default value as argument:

function fun($fix = 50){
    echo "$fix<br>";
}

fun(350);
fun(); // will use the default value of 50
?>