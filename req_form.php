<?php 
  session_start();
  if(!isset($_SESSION['uname']))
    header('location:http://localhost/hostel_inventory_system/Home.php');
?>
<?php 
	$first_name=$_POST['item'];
	$last_name=$_POST['order_date'];
	$hostel=$_POST['received'];
	$subject=$_POST['price'];
	$quantity=$_POST['quantity'];
	$total=$_POST['total'];
  $hostel=$_POST['hostel'];

	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'hism');
	$q="Insert INTO inventory (item,order_date,received,price,quantity,total,hostel) values('$item','$order_date','$received',$price,$quantity,$total,$hostel)";
	$status=mysqli_query($con,$q);
	mysqli_close($con);

	header('location:http://localhost/hostel_inventory_system/insertform.php');
	?>
	<!DOCTYPE html>
  <head>
    <title>Deletion form</title>
   </head>
   <body>
    <h1>Book Reord Management</h1>
    <P><?php  
             echo $size." record deleted";   
        ?>
    </p>
    <p>Do you want to insert more record?</p>
    <a href="xyz">GO BACK TO HOME PAGE</a>
    </body>
    </html>