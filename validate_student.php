
<?php 
	session_start();
	$uname=$_POST['uname'];
	$psw=$_POST['psw'];
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'hism');
	$q="select * from login_student where username='$uname'";
	 $result = mysqli_query($con, $q);
	 $num=mysqli_num_rows($result);
	//$row = mysqli_fetch_array($result);
    if($num==1){
     // $pwdCheck = password_verify($psw, $row['password']);

		//if($pwdCheck == true){
		$_SESSION['uname']=$uname;
		echo "<script type='text/javascript'>alert('Login succesfully')</script>";
		header('location:http://localhost/hostel_inventory_system/student_login.php?login=successs');
		}
	else {
		echo "<script type='text/javascript'>alert('Wrong  Password')</script>";
		header('location:http://localhost/hostel_inventory_system/Home.php?error=wrong');
	}
//}
	/*else {
		echo "<script type='text/javascript'>alert('Wrong  Password')</script>";
		header('location:http://localhost/hostel_inventory_system/Home.php?error=wrongpwd');
	}*/

	?>

	<?php

/*if (isset($_POST['login-submit'])) {
    session_start();
	$uname=$_POST['uname'];
	$psw=$_POST['ps
	$con=mysqli_connect('localh
	}ost','root');
	mysqli_select_db($con,'hism');
	$q="select * from login_student where username='$uname' and password='$psw'";
	$result=mysqli_query($con,$q);
	$num=mysqli_num_rows($result);
  if (empty($uname) || empty($psw)) {
    header("location:http://localhost/hostel_inventory_system/Home.php?error=emptyfields");
    exit();
  }
  else {
        if(isset($_SESSION['unmae'])){
          echo "<script type='text/javascript'>alert('Set')</script>";
        }
        else {
          echo "<script type='text/javascript'>alert('Not SET')</script>";
        }
        if($num==1){
       		 $_SESSION['uname']=$uname;
        	 header("location:http://localhost/hostel_inventory_system/student_login.php?login=success");
  		}
      }

       // header("Location: ../index.php?error=strangeerr");
        //exit();
      //}
    }
    else{
      header("location:http://localhost/hostel_inventory_system/Home.php?error=nouser");
      exit();
    }
*/