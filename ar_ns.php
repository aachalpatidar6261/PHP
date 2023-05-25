<?php
$a = $_GET["n1"];
$b = $_GET["n2"];
$op=$_GET["op"];
 if($op==1)
 {
    echo "addition=".$a+$b;
 }
 elseif($op==2){
        echo "subtracts=".$a-$b;
}
elseif($op==3){
        echo "multiplied=".$a*$b;
}
elseif($op==4){
        echo "division=".$a/$b;
}
else 
{
        echo "invlid  value";
}
?>