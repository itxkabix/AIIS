<?php 
include("config.php");
$error="";
$msg="";
if(isset($_POST['send']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$subject=$_POST['subject'];
	$message=$_POST['message'];
	
	if(!empty($name) && !empty($email) && !empty($phone) && !empty($subject) && !empty($message))
	{
		
		$sql="INSERT INTO contact (name,email,phone,subject,message) VALUES ('$name','$email','$phone','$subject','$message')";
		   $result=mysqli_query($con, $sql);
		   if($result){
			   $msg = "<p class='alert alert-success'>Message Send Successfully</p> ";
		   }
		   else{
			   $error = "<p class='alert alert-warning'>Message Not Send Successfully</p> ";
		   }
	}else{
		$error = "<p class='alert alert-warning'>Please Fill all the fields</p>";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!--	Fonts
	========================================================-->
<link href="https://fonts.googleapis.com/css?family=Muli:400,400i,500,600,700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700" rel="stylesheet">
  
<!--	Css Link
	========================================================-->
	<link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,600,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">




<!--	Title
	=========================================================-->
<title>AIIS</title>
</head>
<body>


  
<section class="sub-header">
        <nav>
            <a href="index.html"><img src="images/logo.png"></a>
            <div class="nav-links" id="navLinks">  
                <i class="fa fa-close" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="about.html">ABOUT</a></li>
                    <li><a href="course.html">COURSE</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
            <h1>Contact Us</h1>
    </section>
    
          <!--	Contact Information -->
		  <section class="location">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d124425.17878375833!2d77.50400883906248!3d12.953488500000024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae15c2bd709005%3A0x72246a69e152cb34!2sAl-Ameen%20Institute%20of%20Information%20Sciences!5e0!3m2!1sen!2sin!4v1720163865405!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
    
    <section class="contact-us">
            <div class="row">
                <div class="contact-col">
                    <div>
                        <i class="fa fa-home"></i>
                        <span>
                            <h5>Hosur Road, Opp Lalbagh Main Gate</h5>
                            <p>Bangalore-560027, Karnataka</p>
                        </span>
                    </div>
                    <div>
                        <i class="fa fa-phone"></i>
                        <span>
                            <h5>080-221236379</h5>
                            <p>Monday to Saturday 10 Am to 4 Pm</p>
                        </span>
                    </div>
                    <div>
                        <i class="fa fa-envelope-o"></i>
                        <span>
                            <h5>alameencollege@gmail.com</h5>
                            <p>Email us your query</p>
                        </span>
                    </div>
                </div>
					<div class="col-lg-1"></div>
                    <div class="col-md-12 col-lg-7">
						<div class="container">
                        <div class="row">
							<div class="col-lg-12">
								<h2 class="text-secondary double-down-line text-center mb-5">Get In Touch</h2>
								<?php echo $msg; ?><?php echo $error; ?>
							</div>
						</div>  
						<div class="row">
							<div class="col-md-12">
								<form class="w-100" action="#" method="post">
									<div class="contact-col">
										
											
												<input type="text"  name="name"  placeholder="Your Name*">
											
											
												<input type="text"  name="email"  placeholder="Email Address*">
											
												<input type="text"  name="phone"  placeholder="Phone" maxlength="10">
											
												<input type="text" name="subject"   placeholder="Subject">
											
												
													<textarea name="message"  rows="5" placeholder="Type Comments..."></textarea>
												
											
										
										<button type="submit" value="send message" name="send" class="hero-btn red-btn">Send Message</button>
									</div>
								</form>
							</div>
						</div>
						</div>
					</div>
                </div>
            </div>
        </div>  
        <!--	Contact Inforamtion -->
        
       <!-------- footer ---------->

<section class="footer">
        <h4>About Us</h4>
        <p>Al-Ameen Institute Of Information Sciences<br>Hosur Road, Opp Lalbagh Main Gate, Bangalore-560027</p>
        <div class="icons">
            <a href="https://www.facebook.com/share/ND7dymJ5MY3uvbSw/?mibextid=qi20mg"><i class="fa fa-facebook"></i></a>
            <a href="https://www.instagram.com/itx_kabix/"><i class="fa fa-instagram"></i></a>
        </div>
        <p>Made with <i class="fa fa-heart-o"></i> by itx_kabix</p>
</section>    
  
  
<!----JavaScript for toggle menu---->
<script>
    var navLinks = document.getElementById("navLinks");

    function showMenu() {
        navLinks.style.right = "0";
    }

    function hideMenu() {
        navLinks.style.right = "-200px";
    }
</script> 
    
</body>
</html>    