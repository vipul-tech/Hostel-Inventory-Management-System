<!DOCTYPE html>
<html>
    <head>
    <title>ABOUT PAGE</title>
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
</head>
<body>
    <style>
.hostel {
      margin:5px;
      background-color:grey;
	  color:white;
	  display:block;
	  text-align:center;
}
.i1{
	float:right;
	padding:10px;
	height:100%;
}

.button {
  background-color:orange; 
  color: black; 
  width:25%;
  padding: 15px 32px;
  text-align: center;
  font-size: 25px;
  margin: 4px 2px;
}

.button:hover {
  background-color: #ff4336;
  color: white;
  width:25%;
  padding: 15px 32px;
  text-align: center;
  font-size: 25px;
  margin: 4px 2px;
}
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
			<li><a  href="Home.php"> &nbsp;Home</a></li>
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
			 	<a class="active" href="#Login">Login</a>
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

	<div class="hostel">
	<h1 style="text-align:center;color:orange;">Vikramaditya Hall of Residence (Boys Hostel-V)</h1>
	<img class="i1" src="H 5.png" style="width:50%;height:auto">
	
	<p>The <i>Vikramaditya Hall of Residence</i> i.e <i>Boys Hostel-V</i> is located outside the campus.<p>
	<p>It comprises of 1 floor.</p>
	<p>It has capacity of 18 students.</p>
	<p>Number of single room=2<p>
	<p>Number of double room=8<p>
	<p>Number of triple room=0<p>
	<p>Warden:Dr.Suraj</p>
	<p>Caretaker:Mr.Rahul</p>
	<br>
	<h3><p>Login for Warden</p>
	<p>And</p>
	<p>Caretaker</p></h3>
	<button onclick="document.getElementById('id03').style.display='block'" class="button" type="submit"  style="cursor:pointer;">Login</button>
    </div>
    <div id="id03" class="modal">
        <form class="modal-content animate" action="validate_hostels.php" method="post">
          <div class="imgcontainer">
            <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
            <script>
        // Get the modal
        var modal = document.getElementById('id03');

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
              <style>
               select {
                width: 100%; /* Full width */
                padding: 12px; /* Some padding */ 
                border: 1px solid #ccc; /* Gray border */
                border-radius: 4px; /* Rounded borders */
                box-sizing: border-box; /* Make sure that padding and width stays in place */
                margin-top: 6px; /* Add a top margin */
                margin-bottom: 16px; /* Bottom margin */
                resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
                  }
              </style>
              <input type="hidden" value="Vikramaditya Hall of Residence (Boys Hostel-V)" name="hostel" >
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
              <button type="button" onclick="document.getElementById('id03').style.display='none'" class="  cancelbtn">Cancel</button>
          </div>
        </form>
    
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