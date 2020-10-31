<!DOCTYPE html>
<html>
<head>
<title>PROFILE PAGE</title>
 <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="Art Sign Up Form Responsive Widget, Audio and Video players, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates,
    Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design"/>
<link rel="icon" href="https://www.google.com/imgres?imgurl=https%3A%2F%2Fwww.iiitbh.ac.in%2Fimg%2F150dpi.png&imgrefurl=https%3A%2F%2Fwww.iiitbh.ac.in%2F&docid=uUqcA62Sq0oikM&tbnid=Pt32zSLz3Es3qM%3A&vet=10ahUKEwiTu8iF7oLlAhWPSH0KHfg-CoQQMwhiKAAwAA..i&w=1447&h=1604&bih=597&biw=1242&q=IIIT%20BHAGALPUR%20LOGO&ved=0ahUKEwiTu8iF7oLlAhWPSH0KHfg-CoQQMwhiKAAwAA&iact=mrc&uact=8" type="image/x-icon" size="144x144" >
	<link rel="stylesheet" type="text/css" href="./Home.css">
	<link rel="stylesheet" type="text/css" href="./Login.css">
	<link rel="stylesheet" type="text/css" href="./Slideshow.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
  
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display:block;
  }
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8);
  width:65%;
  margin:60px;
}


.container {
  padding: 0 16px;
  text-align :center;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: #f44336;
  font-size:20px;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}
</style>
</head>
<body>
<div class="first">
		<h2 style="background-image:url('download.png'); background-repeat: no-repeat;
	background-position:8px 0px;
	background-size:90px 90px; padding-bottom: 20px; padding-top: 40px; font-size:30px;" ><i>Indian Institute Of Information Technology, Bhagalpur</i></h2>
		<h3 style="top-padding: -20px;"><dfn>Hostel Inventory Managment System</dfn></h3>
		
	</div>
	<div class="ul">
		<ul>
			<li><a  href="Home.php"> &nbsp;Home</a></li>
			<li><a href="profile1.php" class="active">Peoples</a></li>
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
			 	<a  href="#Login">Login</a>
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
      				<button type="submit" style="width: 100%; padding: 12px 20px; margin: 8px 0; color: black; display:inline-block; border: 1px solid #ccc; box-sizing: border-box; background-color: #F44336">Login</button>
      				<label>
        			<input type="checkbox" checked="checked" name="remember"> Remember me
      				</label>
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
<div>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="brb1.jpg" alt="brb" style="width:100%">
      <div class="container">
        <h2>Dr.Biswajit R. Bhowmik</h2>
        <p class="title">Admin</p>
        <p>E-mail: brbhowmik.cse@iiitbh.ac.in</p>
        <p>Mobile:</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="Hiranmoy.jpg" alt="hiranmoy" style="width:100%">
      <div class="container">
        <h2>Dr.Hiranmoy Pal</h2>
        <p class="title">Warden(Hostel 1)</p>
        <p>hpal.math@iiitbh.ac.in</p>
        <p>Mobile: +91-7632995206</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="pradeep.jpg" alt="pradeep" style="width:100%">
      <div class="container">
        <h2>Dr. Pradeep Kumar Biswal</h2>
        <p class="title">Warden(Hostel 2)</p>
        <p>E-mail: pkbiswal.cse@iiitbh.ac.in</p>
        <p>Mobile: +91-7632995200</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="sandeep1.jpg" alt="sandeep" style="width:100%">
      <div class="container">
        <h2>Dr. Sandeep Raj</h2>
        <p class="title">Warden(Hostel 3)</p>
        <p>E-mail: sraj.ece@iiitbh.ac.in</p>
        <p>Mobile: +91-9386199102</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="dheeraj2.jpg" alt="dheeraj" style="width:100%">
      <div class="container">
        <h2>Dr. Dheeraj Kumar Sinha</h2>
        <p class="title">Warden(Hostel 4)</p>
        <p>E-mail: dksinha.ece@iiitbh.ac.in</p>
        <p>Mobile: +91-7632995205</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="suraj.jpg" alt="suraj" style="width:100%">
      <div class="container">
        <h2>Dr. Suraj</h2>
        <p class="title">Warden(Hostel 5)</p>
        <p>E-mail:suraj.ece@iiitbh.ac.in</p>
        <p>Mobile:</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="theja1.jpg" alt="tejaswini" style="width:100%">
      <div class="container">
        <h2>Dr. Thejaswini M</h2>
        <p class="title">Warden(Girl's Hostel)</p>
        <p>E-mail: mthejaswini.cse@iiitbh.ac.in</p>
        <p>Mobile:</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="team2.jpg" alt="Naveen" style="width:100%">
      <div class="container">
        <h2>Mr.Naveen Kumar</h2>
        <p class="title">Caretaker(Hostel 1)</p>
        <p>E-mail:</p>
        <p>Mobile:</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="team3.jpg" alt="Ajit" style="width:100%">
      <div class="container">
        <h2>Mr. Ajit Kumar</h2>
        <p class="title">Caretaker(Hostel 2,3,4&5)</p>
        <p>E-mail:</p>
        <p>Mobile:</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

</div>
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
