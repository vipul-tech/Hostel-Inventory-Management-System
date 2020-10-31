<?php 
	session_start();
	$uname=$_POST['uname'];
	$psw=$_POST['psw'];
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'hism');
	$q="select * from login_admin where username='$uname' && password='$psw'";
	$result=mysqli_query($con,$q);
	$num=mysqli_num_rows($result);
	if($num==1){
		$_SESSION['uname']=$uname;
		header('location:http://localhost/hostel_inventory_system/admin_login.php');
	}
	else {
		header('location:http://localhost/hostel_inventory_system/Home.php');
	}
	?>