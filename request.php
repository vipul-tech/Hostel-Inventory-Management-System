<?php
//  $servername = "root"; //change this  accordingly
//  $dBUsername = "root";
//  $dBPassword = "root";
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	$hostel_name = $_POST['hostel'];
	$name=$_POST['name'];
	$roll = $_POST['roll_no'];
	$today_date =  date("Y-m-d");
    $time = date("h:i A");

    $dBName = "hism";
 // session_start();
  $conn=mysqli_connect('localhost','root');
  mysqli_select_db($conn,$dBName);

  if (!$conn) {
    die("Connection Failed: ".mysqli_connect_error());
  }
//if(isset($_POST['submit'])){
	/*echo "<script type='text/javascript'>alert('hello')</script>";*/

   /* $query7 = "SELECT * FROM hostel1 WHERE hostel = '$hostel_name'";
    $result7 = mysqli_query($conn,$query7);
    $row7 = mysqli_fetch_assoc($result7);
    $hostel_id = $row7['hostel'];

    $query6 = "SELECT * FROM Hostel_Manager WHERE Hostel_id = '$hostel_id'";
    $result6 = mysqli_query($conn,$query6);
    $row6 = mysqli_fetch_assoc($result6);
    $hos_man_user = $row6['Hostel_man_id'];*/
	$query = "INSERT INTO Message (sender_name,sender_id,hostel_id,subject_h,message,msg_date,msg_time) VALUES ('$name','$roll','$hostel_name','$subject','$message','$today_date','$time')";
    $result = mysqli_query($conn,$query);
    if($result){
         echo "<script type='text/javascript'>alert('Message sent Successfully!')</script>";
    }
    else{
         echo "<script type='text/javascript'>alert('Error in sending message!!! Please try again.')</script>";
   }
  //}
  mysqli_close($conn);
  header('location:http://localhost/hostel_inventory_system/student_login.php');


?>	
			
 
