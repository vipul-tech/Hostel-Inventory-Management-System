<!DOCTYPE html>
<html>
	<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="Art Sign Up Form Responsive Widget, Audio and Video players, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates,
    Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
	<link rel="icon" href="https://drive.google.com/open?id=1WfOGS5wVKduu8J69U59i1YyTOEI66v92" type="image/x-icon" size="144x144" >
	<title>HOME PAGE</title>
	<link rel="stylesheet" type="text/css" href="./Home.css">
	<link rel="stylesheet" type="text/css" href="./Login.css">
	<link rel="stylesheet" type="text/css" href="./Slideshow.css">
	<link rel="stylesheet" type="text/css" href="./admin_drop.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <!--<link href="//fonts.googleapis.com/css?family=Poiret+One&amp;subset=cyrillic,latin-ext" rel="stylesheet">-->
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
	background-size:90px 90px; padding-bottom: 20px; padding-top: 40px; font-size:30px;"><i>Indian Institute Of Information Technology, Bhagalpur</i></h2>
		<h3 style="top-padding: -20px;"><dfn>Hostel Inventory Managment System</dfn></h3>
		
	</div>
	<div class="ul">
		<ul>
			<li><a class="active" href="Home.php"> &nbsp;Home</a></li>
      <li><a href="profile1.php">Peoples</a></li>

		<li class="dropdown" style="float:center;">
			 	<a href="#Hostels">Hostels</a>
			 	<div class="dropdown-content">
      		<a href="hostel1.php">Chanakya Hall of Residence (Boys Hostel-I)</a>
			<a href="hostel2.php">Chandragupta Hall of Residence (Boys Hostel-II)</a>
     		<a href="hostel3.php">Ashoka Hall of Residence (Boys Hostel-III)</a>
			<a href="hostel4.php">Aryabhata Hall of Residence (Boys Hostel-IV)</a>
			<a href="hostel5.php">Vikramaditya Hall of Residence (Boys Hostel-V)</a>
			<a href="hostel6.php">Ganga Hall of Residence (Girls Hostel)</a>
   			 </div>
			</li>

			<li class="dropdown" style="float:center;">
			 	<a href="#Login">Login</a>
			 	<div class="dropdown-content">
      		<a onclick="document.getElementById('id01').style.display='block'" style="width:auto; cursor:pointer;">Student</a>
     			<a onclick="document.getElementById('id02').style.display='block'" style="width:auto; cursor:pointer;">Admin</a>
   			 </div>
			</li>
			<div id="id01" class="modal">
  			<form class="modal-content animate" action="validate_student.php" method="post">
    			<div class="imgcontainer">
    			  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    			  <script>
				// Get the modal
				var modal = document.getElementById('id01');

				// When the user clicks anywhere outside of the modal, close it
				window.onclick = function(event) {
    				if (event.target == modal) {
    				    modal.style.display = "none";
    					}
					}
			</script>
      				<img src="download.png" alt="Avatar" class="avatar">
    			</div>
    		 	<div class="container">
    		    	<label for="uname"><b>Username</b></label>
      				<input type="text" placeholder="Enter Username" name="uname" required>
      				<label for="psw"><b>Password</b></label>
      				<input type="password" placeholder="Enter Password" name="psw" required>
      				<button type="submit" name="login-submit" style="width: 100%; padding: 12px 20px; margin: 8px 0; color: black; display:inline-block; border: 1px solid #ccc; box-sizing: border-box; background-color: #F44336">Login</button>
      				<label>
        			<input type="checkbox" checked="checked" name="remember"> Remember me
      				</label></br>
              Don't have account ?<a style="color:black; " href="signup.php">signup</a>
    				</div>
    			 <div class="container" style="background-color:#f1f1f1">
      			 	<button type="button" onclick="document.getElementById('id01').style.display='none'" class="	cancelbtn">Cancel</button>

    		 	</div>
  			</form>
			</div>
			<div id="id02" class="modal">
  			<form class="modal-content animate" action="validate_admin.php" method="post">
    			<div class="imgcontainer">
    			  <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
    			  <script>
			// Get the modal
			var modal = document.getElementById('id02');
			// When the user clicks anywhere outside of the modal, close it
			window.onclick = function(event) {
    			if (event.target == modal) {
    			    modal.style.display = "none";
    				}
				}
			</script>
      				<img src="download.png" alt="Avatar" class="avatar">
    			</div>
    		 	<div class="container">
    		    	<label for="uname"><b>Username</b></label>
      				<input type="text" placeholder="Enter Username" name="uname" required>
      				<label for="psw"><b>Password</b></label>
      				<input type="password" placeholder="Enter Password" name="psw" required>
      				<button type="submit" style="width: 100%; padding: 12px 20px; margin: 8px 0; color: black; display:inline-block; border: 1px solid #ccc; box-sizing: border-box; background-color: #F44336; object-position: 10cm;">Login</button>
      				<label>
        			<input type="checkbox" checked="checked" name="remember"> Remember me
      				</label>
    				</div>
    			 <div class="container" style="background-color:#f1f1f1">
      			 	<button type="button" onclick="document.getElementById('id02').style.display='none'" class="	cancelbtn">Cancel</button>

    		 	</div>
  			</form>
			</div>
		</ul>
		</div>
		<div class="content mid">
      <div class="slideshow-container">

      <div class="mySlides fade">
        <div class="numbertext">1 / 3</div>
        <img src="a.jpg" style="width:100%">
        <div class="text">Rooms</div>
      </div>

      <div class="mySlides fade">
        <div class="numbertext">2 / 3</div>
        <img src="d.jpg" style="width:100%;">
          <div class="text">Hostel Inventory Management System</div>
      </div>

      <div class="mySlides fade">
        <div class="numbertext">3 / 3</div>
        <img src="c.jpg" style="width:100%">
        <div class="text">Inventory</div>
        </div>

      </div>

			<div style="text-align:center">
			  <span class="dot"></span> 
			  <span class="dot"></span> 
			  <span class="dot"></span> 
			</div>
			</div>
			<script>

    var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 4000); // Change image every 2 seconds
}
</script>	
	</div>
		<hr>
    
  <div class="footer">
    <marquee><h1>Welcome to Hostel Inventory Management System</h1></marquee>
  <div class="box"><a href="https://www.iiitbh.ac.in/index.html">IIIT BHAGALPUR</a></div>
  <div class="lin">
    <ul>
      <li><a href="Home.php"> &nbsp;Home</a></li>
      <li><a href="profile1.php">Peoples</a></li>
        </ul> 
  </div>       
  <p>Designed and Developed by Mukul Sharma,Vipul Kumar and Roushan Kumar.</p>
</div>
</body>
</html>

		
			
 
