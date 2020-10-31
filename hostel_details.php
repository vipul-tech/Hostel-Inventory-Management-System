<?php 
  session_start();
  if(!isset($_SESSION['uname']))
    header('location:http://localhost/hostel_inventory_system/Home.php');
?>
<!DOCTYPE html>
<html>
	<head>
	 <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="Art Sign Up Form Responsive Widget, Audio and Video players, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates,
		Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design"	/>
	<link rel="icon" href="https://www.google.com/imgres?imgurl=https%3A%2F%2Fwww.iiitbh.ac.in%2Fimg%2F150dpi.png&imgrefurl=https%3A%2F%2Fwww.iiitbh.ac.in%2F&docid=uUqcA62Sq0oikM&tbnid=Pt32zSLz3Es3qM%3A&vet=10ahUKEwiTu8iF7oLlAhWPSH0KHfg-CoQQMwhiKAAwAA..i&w=1447&h=1604&bih=597&biw=1242&q=IIIT%20BHAGALPUR%20LOGO&ved=0ahUKEwiTu8iF7oLlAhWPSH0KHfg-CoQQMwhiKAAwAA&iact=mrc&uact=8" type="image/x-icon" size="144x144" >
	<title>HOME PAGE</title>
	<link rel="stylesheet" type="text/css" href="./Home.css">
	<link rel="stylesheet" type="text/css" href="./Slideshow.css">
	<link rel="stylesheet" type="text/css" href="./req_from.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
<body>
	 <style>
.lin ul li{ 
  list-style-type:none;
  display:inline-block;
  padding:10px;
  }
.lin ul a{
  color:white;
  text-decoration:none;
}

.box{
  width:25%;
  color: white;
  padding: 20px 25px;
  text-align: center;
  border:4px solid white;
  font-size:40px;
  text-decoration: none;
  display: inline-block;
}
.box a{
  text-decoration:none;
  color:white;
}

.footer {
   position: relative;
   left: 10;
   padding: 0.5cm;
   bottom: 10;
   margin:-14px;
   width: 102%;
   background-color: black;
   color: white;
   text-align: center;
}
</style>
	<div class="first">
		<h2 style="background-image:url('download.png'); background-repeat: no-repeat;
	background-position:8px 0px;
	background-size:90px 90px; padding-bottom: 20px; padding-top: 40px; font-size:30px;" ><i>Indian Institute Of Information Technology, Bhagalpur</i></h2>
		<h3 style="top-padding: -20px;"><dfn>Hostel Inventory Managment System</dfn></h3>
		
	</div>
	<div class="ul">
		<ul>
			<li><a class="active" href="student_login.php"> &nbsp;Home</a></li>
			<li><a href="profile.php">Peoples</a></li>
		</ul>
		</div>
		<div class="column">
			<div class="content side">
			<ul>
				<li><a href="student_login.php">Request Form</a></li>
				<li><a href="change_password.php">Change password</a></li>
				<li><a href="hostel_details.php" class="active">Hostel Details</a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>
			</div>
		<div class="content middle" >
			<div class="container">
  <form action="hdetails.php" method="post">
    <label for="hostel">Hostel No</label>
    <select id="hostel" name="hostel">
      <option value="Chanakya Hall of Residence (Boys Hostel-I)">Chanakya Hall of Residence (Boys Hostel-I)</option>
      <option value="Chandragupta Hall of Residence (Boys Hostel-II)">Chandragupta Hall of Residence (Boys Hostel-II)</option>
      <option value="Ashoka Hall of Residence (Boys Hostel-III)">Ashoka Hall of Residence (Boys Hostel-III)</option>
      <option value="Aryabhata Hall of Residence (Boys Hostel-IV)">Aryabhata Hall of Residence (Boys Hostel-IV)</option>
      <option value="Vikramaditya Hall of Residence (Boys Hostel-V)">Vikramaditya Hall of Residence (Boys Hostel-V)</option>
      <option value="Ganga Hall of Residence (Girls Hostel)">Ganga Hall of Residence (Girls Hostel)</option>
    </select>

    <input type="submit" name="submit" value="Submit">

  </form>
</div>
      	</div>
	</div>
	<hr>
    
  <div class="footer">
    <marquee><h1>Welcome to Hostel Inventory Management System</h1></marquee>
  <div class="box"><a href="https://www.iiitbh.ac.in/index.html">IIIT BHAGALPUR</a></div>
  <div class="lin">
    <ul>
      <li><a href="student_login.php"> &nbsp;Home</a></li>
      <li><a href="profile.php">Peoples</a></li>
        </ul> 
  </div>       
  <p>Designed and Developed by Mukul Sharma,Vipul Kumar and Roushan Kumar.</p>
</div>
</body>
</html>
