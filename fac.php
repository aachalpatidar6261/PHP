<?Php
$num=$_GET['num'];
$fac=1;
for($i=1;$i<=$num;$i++)
{
	$fac=$fac*$i;
}
echo $fac;
?>

