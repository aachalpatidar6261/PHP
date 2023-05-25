<?php
  // create connection .#confige file
$c=mysqli_connect("localhost","root","","logdb");

//check connection
if($c){
	echo"connected successsefully";
}

// IT IS CONNECTED TO DATABASE.
?>