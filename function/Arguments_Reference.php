<?php
/* 
When a function argument is passed by reference, changes to the argument also change
 the variable that was passed in. To turn a function argument into a reference,
  the & operator is used:
*/

function fun(&$var){
   $var *= 2;
}

$num =4 ;
fun($num);
echo $num; 
?>
