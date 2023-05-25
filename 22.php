<?php
include "jq.php";
$id =$_GET['n1'];
$n =$_GET['n2'];
$g =$_GET['n3'];
$b =$_GET['n4'];
$c =$_GET['n5'];
$sql="insert into ntbl(id,name,gender,birth,course) 
values('$id','$n','$g','$b','$c')";

$qr=mysqli_query($con,$sql);
echo $qr;
if($qr == True)
{
    echo "new record";  
}
else 
{
    echo "error";
}


if(isset($_GET["select"]))

    $r ="select * from ntbl";
    $select = $con->query($r);
    if($select->num_rows>0)
    {
        while($row=$select->fetch_assoc())
        {
            echo $row["n1"]."".$row["n2"]."".$row["n3"]."".$row["n4"]."".$row["n5"]."<br>";
        }
    }
    else
    {
        echo "not match";
    }

    
?>