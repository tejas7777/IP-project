<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Gym management</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
	  
	  
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="site.php">Cliffy's Gymnasium</a>
	      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav nav ml-auto">
	          <li class="nav-item"><a href="site.php#home-section" class="nav-link"><span>Home</span></a></li>
	          <li class="nav-item"><a href="site.php#programs-section" class="nav-link"><span>Programs</span></a></li>
	          <li class="nav-item"><a href="site.php#services-section" class="nav-link"><span>Services</span></a></li>
	          <li class="nav-item"><a href="site.php#about-section" class="nav-link"><span>About</span></a></li>
	          <li class="nav-item"><a href="site.php#coaches-section" class="nav-link"><span>Coaches</span></a></li>
              <li class="nav-item"><a href="site.php#blog-section" class="nav-link"><span>Blog</span></a></li>
              <li class="nav-item"><a href="Registration1.php" class="nav-link"><span>Register</span></a></li>
	          <li class="nav-item"><a href="site.php#contact-section" class="nav-link"><span>Contact</span></a></li>
	        </ul>
	      </div>
	    </div>
	  </nav><br><br><br><br>
	  
	  <section class="ftco-section contact-section ftco-no-pb" id="contact-section">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-3">
			<div class="col-md-7 heading-section text-center ftco-animate">
			  <span class="subheading" style="color: #42c0fb;"><strong>Registeration II</strong></span>
			  <h2 class="mb-4">Fill your details</h2>
			  <p>Already a member? <a href="login.php" style="color: #42c0fb;">Register now</a></p>
			</div>
		  </div>

<?php include("mysqlconnection.php"); 
session_start();
$_SESSION['name'] = $_POST['name'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['password'] = $_POST['password'];
$_SESSION['username'] = $_POST['username']
?>


<form action="submit2.php" Method = "POST" class="bg-light p-4 p-md-5 contact-form" id="user-registration-form">

<div class="form-group">
                  <label for="gender">Choose gender *</label>
					<ul style="list-style: none;" required>
						<li class="radio"><input name="gender" value="Male"  type="radio" class="userRatings" > <label>Male :</label></li>
						<li class="radio"><input name="gender" value="Female"  type="radio" class="userRatings" > <label>Female :</label></li>
					</ul>
                </div>
                
                <div class="form-group">
				  <label for="age">Age *</label>
				  <input type="age" class="form-control" name = "age" required style="width : 50%;">
				</div>
				<div class="form-group">
				  <label for="phone">Phoneno *</label>
				  <input type="tel" class="form-control" name = "phoneno" required style="width : 50%;">
                </div>
                <!---BRANCH-------------------------------------------------------------------------------------------------->

                <div class="form-group">
                        <label for="branch">Choose your branch/city : *</label><br>
                        <?php
                  
                  //Choose branch
                  $sql = "Select branch_address,branch_id from branch";
                  
                  if(($result = $conn->query($sql))->num_rows>0)
                    {
                        echo "<select name='branch' class='form-control' name='branch' id='form-control-branch' required style='width : 50%;'>";
                        echo "<option disabled value>Select an option</option>";
                        while($row = $result->fetch_assoc())
                        {
                            //<option  value="1">Mr. Khan</option>
                            echo "<option  value=".$row['branch_id'].">".$row['branch_address']."</option>";
                            //echo "<p>".$row['trianer_name']."</p>";
                        }
                        
                      echo "</select>"  ;
                      
                    }
                  ?>

						    
				</div>

                <!-------Time Slot--------------------------------------------------------------------------->

                <div class="form-group">
                  <label for="membership-plan">Choose a timeslot *</label>
                  
                  <?php
                  /*
				  <ul style="list-style: none;" required>
						<li class="radio"><input name="timeslot" value="1"  type="radio" class="user" > <label>Morning </label></li>
						<li class="radio"><input name="timeslot" value="2"  type="radio" class="user" > <label>Noon </label></li>
						<li class="radio"><input name="timeslot" value="3"  type="radio" class="user" > <label>Afternoon</label></li>
						<li class="radio"><input name="timeslot" value="4"  type="radio" class="user" > <label>Evening</label></li>
                      </ul>
                     */
                    
                    
                  
                    //Choose branch
                    $sql = "Select timeslot_id,time_slot from timeslot";
                    
                    if(($result = $conn->query($sql))->num_rows>0)
                      {
                        
                       echo "<ul style='list-style: none;' required>";
                          
  
                          while($row = $result->fetch_assoc())
                          {
                            echo "<li class='radio'><input name='timeslot' value=".$row['timeslot_id']."  type='radio' class='user' id='form-control-timeslot' > <label>".$row['time_slot']."</label></li>";
                            
                              //echo "<option  value=".$row['trainer_id'].">".$row['trianer_name']."</option>";
                              
  
                          }
                          
  
                        echo "</ul>"  ;
  
                        
                      }
  
  
  
            
                ?>
				</div>

                <!---CLASSES------------------------------------------------>
                <div class="form-group">
					<label for="classes">Choose your classes : *</label>
					<ul style="list-style: none;" required>
							<li class="checkbox"><label><input name="classes[]" value="Muscle Building" type="checkbox" class="userRatings">Muscle Building</label></li>
							<li class="checkbox"><label><input name="classes[]" value="Cardio Exercise" type="checkbox" class="userRatings">Cardio Exercise</label></li>
							<li class="checkbox"><label><input name="classes[]" value="Power Yoga" type="checkbox" class="userRatings">Power Yoga</label></li>
							<li class="checkbox"><label><input name="classes[]" value="Aerobics program" type="checkbox" class="userRatings">Aerobics program</label></li>
							<li class="checkbox"><label><input name="classes[]" value="Crossfit program" type="checkbox" class="userRatings">Crossfit program</label></li>
							<li class="checkbox"><label><input name="classes[]" value="Basic Exercise and Stretching" type="checkbox" class="userRatings">Basic Exercise and Stretching</label></li>
					</ul>
                </div>
                
                <!-----------------------MEMBERSHIP PLAN-------------------------------------------------->

                <div class="form-group">
				  <label for="membership-plan">Choose a membership plan *</label>
				  <?php
				  /*
				  <ul style="list-style: none;" required>
						<li class="radio"><input name="plan" value="1"  type="radio" class="userRatings" > <label>1 month &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Rs 300/-</label></li>
						<li class="radio"><input name="plan" value="2"  type="radio" class="userRatings" > <label>3 months &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Rs 750/-</label></li>
						<li class="radio"><input name="plan" value="3"  type="radio" class="userRatings" > <label>6 months &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Rs 1350/-</label></li>
					  </ul>
                */
                
                $sql = "Select * from plan";
                    
                    if(($result = $conn->query($sql))->num_rows>0)
                      {
                        
                       echo "<ul style='list-style: none;' required>";
                          
  
                          while($row = $result->fetch_assoc())
                          {
                            
                              
                              //echo "<option  value=".$row['trainer_id'].">".$row['trianer_name']."</option>";
                              
                              echo "<li class='radio'><input name='plan' value=".$row['plan_id']."  type='radio' class='userRatings'  > <label>".$row['plan_duration']." month &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['plan_fee']."/-</label></li>";
  
                          }
                          
  
                        echo "</ul>"  ;
  
                        
                      }
  
  
  
            
				
				
				?>
        </div>
        
        <label class="form-group"> Get Trainer </label><br>
        <input type="button" onclick="gettrainer()" value="Check available trainers" class="btn btn-primary py-3 px-5" style="color : #42c0fb;" >

        <div id="trainer-div">

        </div><br><br>

<!-----------SUBMIT BUTTON--------------------------------------------------------------------------------------->



<div class="form-group">
				  <input type="submit" class="btn btn-primary py-3 px-5" value = "Register" style="color : #42c0fb;">
</div>
                    </div><br><br><br>


</form>

<footer class="ftco-footer ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">About <span><a href="site.php">Cliffy's Gymnasium.</a></span></h2>
              <p>Help you find your starting point to build your path to success.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Links</h2>
              <ul class="list-unstyled">
                <li><a href="site.php#home-section"><span class="icon-long-arrow-right mr-2"></span>Home</a></li>
                <li><a href="site.php#about-section"><span class="icon-long-arrow-right mr-2"></span>About</a></li>
                <li><a href="site.php#services-section"><span class="icon-long-arrow-right mr-2"></span>Services</a></li>
                <li><a href="site.php#coaches-section"><span class="icon-long-arrow-right mr-2"></span>Coaches</a></li>
                <li><a href="site.php#contact-section"><span class="icon-long-arrow-right mr-2"></span>Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Services</h2>
              <ul class="list-unstyled">
                <li><a href="site.php#v-pills-1"><span class="icon-long-arrow-right mr-2"></span>Gym Fitness</a></li>
                <li><a href="site.php#v-pills-08"><span class="icon-long-arrow-right mr-2"></span>Crossfit</a></li>
                <li><a href="site.php#v-pills-6"><span class="icon-long-arrow-right mr-2"></span>Yoa</a></li>
                <li><a href="site.php#v-pills-7"><span class="icon-long-arrow-right mr-2"></span>Aerobics</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">Carter Road, Bandra (west), Mumbai, Maharashtra, India.</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+91 9897846828</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">cliffy@protonmail.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAdNCH_q2D6gJkUcQNp0GYf2SLs1yx04DA&sensor=true"></script>
  <script src="js/google-map.js"></script>
  
  <script src="js/main.js"></script>
  <script>
function gettrainer()
{
	var branch=document.getElementById('form-control-branch').value;
	var timeslot=document.getElementById('form-control-timeslot').value;
	var obj=new XMLHttpRequest();
	var url="trainer.php?branch="+branch+"&timeslot="+timeslot;
	obj.onreadystatechange=function()
	{
		if(this.readyState == 4 && this.status == 200)
		{
			var s=this.responseText;
			var t=this.responseText;
			document.getElementById('trainer-div').innerHTML = s;
			
		}
	};
	obj.open("GET",url,true);
	obj.open("GET",url,true);
	obj.send();
}
</script>

    
  </body>
</html>
