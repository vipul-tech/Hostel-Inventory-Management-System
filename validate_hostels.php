
<?php 
	session_start();
	$uname=$_POST['uname'];
	$psw=$_POST['psw'];
	$hostel=$_POST['hostel'];
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'hism');
	$q="select * from hostel1 where username='$uname' and password='$psw' and hostel='$hostel'";
	$result=mysqli_query($con,$q);
	$num=mysqli_num_rows($result);
	if($num==1){
		$_SESSION['uname']=$uname;
		$_SESSION['hostel']=$hostel;
		header('location:http://localhost/hostel_inventory_system/hostels.php');
	}
	else 
		header('location:http://localhost/hostel_inventory_system/Home.php');
	?>