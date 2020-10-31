<?php 
  session_start();
  if(!isset($_SESSION['uname']))
    header('location:http://localhost/hostel_inventory_system/Home.php');
?>
<?php 
	$hostel_no=$_POST['hostel'];
	$room_no=$_POST['room_no'];
	$room_type=$_POST['room_type'];
	$occupied_status=$_POST['occupied_status'];
	$occupant_rollno=$_POST['occupant_rollno'];
	$chair=$_POST['chair'];
	$tables=$_POST['tables'];
	$fans=$_POST['fans'];

	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'hism');
	$q="Insert INTO room_inventory (hostel_no,room_no,room_type,occupied_status,occupant_rollno,chair,tables,fans) values('$hostel_no','$room_no','$room_type','occupied_status','occupant_rollno',$chair,$tables,$fans)";
	$status=mysqli_query($con,$q);
	mysqli_close($con);

	header('location:http://localhost/hostel_inventory_system/insertform2.php');
	?>