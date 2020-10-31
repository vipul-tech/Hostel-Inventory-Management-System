<?php

if (isset($_POST['signup-submit'])) {
$conn=mysqli_connect('localhost','root');
	mysqli_select_db($conn,'hism');

  $name = $_POST['name'];
  $fname = $_POST['uname'];
  $password = $_POST['pwd'];
  $cnfpassword = $_POST['confirmpwd'];

  if($password !== $cnfpassword){
    header("location:localhost/hostel_inventory_system/signup.php?error=passwordcheck");
    exit();
  }
  else {

    $sql = "SELECT * FROM login_student WHERE username='$fname'";
    $res=mysqli_query($conn, $sql);
    $num1=mysqli_num_rows($res);
    $sql1="SELECT * FROM gmail where username='$fname'";
    $res1=mysqli_query($conn, $sql1);
    $num2=mysqli_num_rows($res1);
    //echo $num1;
    //echo $num2;

   // $stmt = mysqli_stmt_init($conn);
    if($num1==0){
      if($num2==1){
         $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
         mysqli_stmt_bind_param($stmt, "sssssss",$name, $fname, $hashedPwd);
          mysqli_stmt_execute($stmt);
      $sql2 = "INSERT INTO login_student (name, username, password) VALUES ('$name', '$fname', '$hashedPwd')";
      mysqli_query($conn,$sql2);
               
      header("location:http://localhost/hostel_inventory_system/signup.php?successfully signup");
      exit();
     }
   }
    else

      header("location:http://localhost/hostel_inventory_system/signup.php?error=userexists");

}
    /*else {
    //  mysqli_stmt_bind_param($stmt, "s", $fname);
      //mysqli_stmt_execute($stmt);
      //mysqli_stmt_store_result($stmt);
      //$resultCheck = mysqli_stmt_num_rows($stmt);
      //if ($resultCheck > 0) {
        //header("http://localhost/hostel_inventory_system/signup.php?error=userexists");
        //exit();
      }
      else {
        $sql = "INSERT INTO login_student (name, username, password) VALUES ('$name', '$fname', '$password')";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
          header("http://localhost/hostel_inventory_system/signup.php?error=sqlerror");
          exit();
        }
        else {

          $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

          mysqli_stmt_bind_param($stmt, "sssssss",$name, $fname, $hashedPwd);
          mysqli_stmt_execute($stmt);
          header("http://localhost/hostel_inventory_system/Home.php?signup=success");
          exit();
        }
      }
    }

  }*/
 // mysqli_stmt_close($stmt);
  mysqli_close($conn);

}
else {
  header("location:http://localhost/hostel_inventory_system/signup.php");
  exit();
}
