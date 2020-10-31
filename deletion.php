<?php 
  session_start();
  if(!isset($_SESSION['uname']))
    header('location:http://localhost/hostel_inventory_system/Home.php');
?>
<?php
$size=sizeof($_POST);
$j=0;
for($i=0;$i<$size;$i++,$j++)
{
	$index="b".$j;
	if(isset($_POST[$index]))
		$bid[$i]=$_POST[$index];
}
$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'hism');

for($k=0;$k<=$size;$k++)
{
	$q="delete from inventory where sno=".$bid[$k];
	$result=mysqli_query($con,$q);
}
 if ($result)
  $message='<script> alert("Delete Successfully"); </script>';
    else
        $message = "Deletion Failed";
mysqli_close($con); 
header('location:http://localhost/hostel_inventory_system/deleteform.php');
?>
<script> 
var res=<? echo $result; ?>
if (res)
alert("Delete Successfully"); 
else
alert("Deletion Failed"); 
</script>
