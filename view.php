<?php
$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'hism');
	$q="select * from inventory order by hostel";
	$result=mysqli_query($con,$q);
	$num=mysqli_num_rows($result);
	mysqli_close($con);
	?>

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
    Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
	<link rel="icon" href="https://www.google.com/imgres?imgurl=https%3A%2F%2Fwww.iiitbh.ac.in%2Fimg%2F150dpi.png&imgrefurl=https%3A%2F%2Fwww.iiitbh.ac.in%2F&docid=uUqcA62Sq0oikM&tbnid=Pt32zSLz3Es3qM%3A&vet=10ahUKEwiTu8iF7oLlAhWPSH0KHfg-CoQQMwhiKAAwAA..i&w=1447&h=1604&bih=597&biw=1242&q=IIIT%20BHAGALPUR%20LOGO&ved=0ahUKEwiTu8iF7oLlAhWPSH0KHfg-CoQQMwhiKAAwAA&iact=mrc&uact=8" type="image/x-icon" size="144x144" >
	<title>HOME PAGE</title>
	<link rel="stylesheet" type="text/css" href="./Home.css">
	<link rel="stylesheet" type="text/css" href="./Slideshow.css">
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
			<li><a class="active" href="admin_login.php"> &nbsp;Home</a></li>
			<li><a href="profile2.php">Peoples</a></li>
		</ul>
		</div>
		<div class="column">
			<div class="content side">
			<ul>
				<li><a href="admin_login.php"
					>Change password</a></li>
				<li><a href="insertform.php" >Add Items</a></li>
        <li><a href="updateform.php" >Update Items</a></li>        
        <li><a href="deleteform.php" >Delete Items</a></li>
        <li><a href="view.php" class="active">Item Details</a></li>
        <li><a href="insertform2.php">Add Room Inventory</a></li>
        <li><a href="update_inventory.php" >Update Inventory</a></li>
         <li><a href="hostel_details1.php" >Hostel Details</a></li>
        <li><a href="logout.php">Logout</a></li>
			</ul>
			</div>
		<div class="content middle" >
		 <style>
      table {
         border-collapse: collapse;
           border-spacing: 0;
         width: 100%;
         border: 1px solid #ddd;
        }

        th, td {
          text-align: left;
          padding: 20px;
        }

        tr:nth-child(even) {
          background-color: #f2f2f2;
        }
    </style>
     <table id="view_table" style="border-color:black; border-style:solid; background-color: #4CAF50; text-align:center; width:100%; border-radius:12px; box-sizing:border-box; margin:0 0 0 100px;"> 
  <tr>
    <th>Serial No</th>
    <th>Item</th>
    <th>Order Date</th>
    <th>Order from</th>
    <th>Price</th>
    <th>Quantity</th>
    <th>Total Price</th>
    <th>Hostel</th>
   </tr>
   <?php
   for($i=0;$i<$num;$i++){
      $row=mysqli_fetch_array($result);
   ?>
   <tr>
    <td><?php echo $row['sno']; ?></td> 
    <td><?php echo $row['item']; ?></td>
    <td><?php echo $row['order_date']; ?></td>
    <td><?php echo $row['received']; ?></td>
    <td><?php echo $row['price']; ?></td>
    <td><?php echo $row['quantity']; ?></td>
    <td><?php echo $row['total']; ?></td>
    <td><?php echo $row['hostel']; ?></td>
   </tr>
   <?php
   }
   ?>
   </table>
    </div>
	</div>
	<hr>
    
  <div class="footer">
    <marquee><h1>Welcome to Hostel Inventory Management System</h1></marquee>
  <div class="box"><a href="https://www.iiitbh.ac.in/index.html">IIIT BHAGALPUR</a></div>
  <div class="lin">
    <ul>
      <li><a href="admin_login.php"> &nbsp;Home</a></li>
      <li><a href="profile2.php">Peoples</a></li>
        </ul> 
  </div>       
  <p>Designed and Developed by Mukul Sharma,Vipul Kumar and Roushan Kumar.</p>
</div>
</body>
</html>
		
			
 
