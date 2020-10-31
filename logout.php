<?php
  session_start();
  session_destroy();
  header('location:http://localhost/hostel_inventory_system/Home.php');
  
?>