<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	    <link rel="shortcut icon" href="uploads/logo.png">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta name="description" content="">
                    <meta name="author" content="">
                <title>Contact</title>
            <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/khs.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" media="all" href="calendar1/jsDatePick_ltr.min.css" />
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
<!-- HEADER NAVIGATION SECTION -->
<div class="logo">
    <img src="uploads/bannerlogo.jpg" width="300px" height="90px"></img></div>
	    <div class="name"><strong></strong></div>
		    <p class="day">
			    <small>
				    <script type="text/javascript">
                        var d = new Date()
                        var weekday = new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday")
                        document.write(""+""+""+ weekday[d.getDay()]+":")
                    </script>
				</small>
            </p>
			<p class="date">
			    <small>
                    <script type="text/javascript">
                        var d = new Date()
                        document.write(d.getDate())
                        document.write("/")
                        document.write(d.getMonth()+ 1)
                        document.write("/")
                        document.write(d.getFullYear()+",")
                    </script>
				</small>
            </p>
			<p class="time">
			    <small>
                    <script type="text/javascript">
                                        function current_time(id)
                                        {
                                            now = new Date;
                                            h = now.getHours();
                                            if(h<10){h = "0"+h;}
                                            m = now.getMinutes();
                                            if(m<10){m = "0"+m;}
                                            s = now.getSeconds();
                                            if(s<10){s = "0"+s;}
                                            result = ''+h+':'+m+':'+s;
                                            document.getElementById(id).innerHTML = result;
                                            setTimeout('current_time("'+id+'");',);
                                            return true;
                                        }
                                    </script>
                                    <span id="current_time"></span>
                                    <script type="text/javascript"> window.onload = current_time('current_time');
                                    </script>
				</small>
            </p>
        </div>

        <!-- HEADER LINKS-->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav navbar-right">
		        <li><a href="academics.php">Academics</a></li>
			    <li><a href="admissions.php">Admissions</a></li>
			    <li><a href="tenders.php">Tenders</a></li>
			    <li><a href="blog-post.php">Blog Post</a></li>
			    <li><a href="portfolio.php">Portfolio</a></li>
			    <li class="active"><a href="contact.php">Contact</a></li>
                <li><a href="about.php">About</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container" id="contact-page-header">
      
    <div class="row" >
        <div class="col-lg-12">
            <h1 class="contact-page-header"><i class="fa fa-envelope" id="fa-fa-envelope"></i>&nbsp;Contact 
		        <small id="title">Keep in touch with us incase of any need</small>
		    </h1>
            <ol class="breadcrumb">
                <li id="home"><a href="index.php"><i class="fa fa-home"></i>&nbsp;Home</a></li>
                <li class="active" id="title">&laquo;&nbsp;Homepage</li>
            </ol>
        </div>
        <div class="col-lg-12">
		     <div class="contactlogo">
		         <img src="uploads/logo.png" width="100" height="100" alt="logo"></img>
		     </div>
        <hr/>
        </div>

    </div>
<div class="row">

<div class="col-sm-8">
        <h3><?php include"js-js/newstitle4.js"?></h3>
            <p>Get in touch with us for any query or any other need if you wish,for any complementary we wish to know.Your security and privacy 
		    is guaranteed to be protected.we are grateful to get any of your responses.
		    </p>
			
			<!--form -->
			<?php  
			     
				require"assets/include/conn.php";
				if(isset($_POST['submit'])){
				$firstname = $_POST["firstname"];
			    $surname = $_POST["surname"];
			    $email_address = $_POST["email_address"];
			    $phone = $_POST["phone"];
			    $responsibility = $_POST["responsibility"];
			    $message = $_POST["message"]; 
			    $name="";
				$alert="";
				$sqlquery = mysqli_query($dblink,"INSERT INTO messages VALUES (default,'$firstname','$surname','$email_address','$phone','$responsibility','$message',now())");
				$msg = "Thanks ".$name.", Message Submitted Successfully".$alert.",We will act on it:"."<br/></br/>";	
				}
				mysqli_close($dblink);
			?>
			<div style="color:red"><?php echo @$msg?></div>
			<div style="color:red">* (required.)</div>
			<form name="contactForm" onsubmit="return(checkForm());" method="POST" enctype="multipart/form-data">
	    <div class="row">
	        <div class="form-group col-lg-4">
	            <label for="input1">First name</label>
	                <input type="text" name="firstname" class="form-control" id="input1"  value="" placeholder="Firstname">
					
					<div style="color:red">*</div>
	                    </div>
				            <div class="form-group col-lg-4">
	                            <label for="input1">Second name</label>
	                                <input type="text" name="surname" class="form-control" id="input1" placeholder="Surname">
									
									<div style="color:red">*</div>
	                                    </div>
	                                        <div class="form-group col-lg-4">
	                                            <label for="input2">Email Address</label>
	                                                <input type="email" name="email_address" class="form-control" id="input2" placeholder="Email Address(optional)">
													
													<div style="color:red">*</div>
	                                                    </div>
	                                                        <div class="form-group col-lg-4">
	                                                            <label for="input1">Phone Number</label>
	                                                            <input type="text" name="phone" class="form-control" id="input1"  Placeholder="Phone number">
																
																<div style="color:red">*</div>
	                                                        </div>
				                                        <div class="form-group col-lg-4">
	                                                <label for="input1">Responsibility</label>
	                                            <input type="text" name="responsibility" class="form-control" id="input1"   placeholder="Parent/teacher/Student">
												
												<div style="color:red">*</div>
	                                        </div>
	                                    <div class="clearfix"></div>
	                                <div class="form-group col-lg-12">
	                            <label for="input1">Message</label>
	                        <textarea name="message" class="form-control" rows="6" id="input1" placeholder="Enter your message here"></textarea>
							
							<div style="color:red">*</div>
	                    </div>
	                <div class="form-group col-lg-12">
	            <input type="submit" name="submit" value="Send" class="btn btn-success">
	        </div>
        </div>
    </form>	
		<!-- end of form-->			
</div>
<div class="col-sm-4">
    <h3 id="contact-header-details"><?php include "js-js/nudging1.js"?></h3>
    <p><i class="fa fa-map-marker" id="contact-icon-styles"></i>&nbsp;<em id="contact-details-styles">Address:</em> &nbsp;&nbsp; &nbsp;  P.O BOX 114-30400 KABARNET</p>
    <p><i class="fa fa-phone" id="contact-icon-styles"></i>&nbsp;<em id="contact-details-styles">Phone: </em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0726 179 177<em style="color:#F2990B">&nbsp;/&nbsp;</em>0770 464 394</p>
	<p><i class="fa fa-facebook" id="contact-icon-styles"></i>&nbsp;<em id="contact-details-styles">Facebook:</em>&nbsp;&nbsp;&nbsp; kths</p>
	<p><i class="fa fa-twitter" id="contact-icon-styles"></i>&nbsp;<em id="contact-details-styles">Twitter:</em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; @kths</p>
	<p><i class="fa fa-envelope" id="contact-icon-styles"></i>&nbsp;<em id="contact-details-styles">Email:</em><a href="" id="mail">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;kiturohigh@gmail.com</a></p>
	<div class="hover1">View Calendar
	<span class="hovertext1"><div id="div3_example" style="margin:10px 0 30px 0;width:205px; height:230px;"> </div></span>
	</div>
</div>
</div>
<br/>
<hr/>
</div>
<div class="container"><hr>
</div>
<br/></br/></br>
<!-- Footer-->
<?php include"footer.php"?>
    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/khs.js"></script>
	<script type="text/javascript" src="calendar1/jquery.1.4.2.js"></script>
    <script type="text/javascript" src="calendar1/jsDatePick.jquery.min.1.3.js"></script>
	<script type="text/javascript" src="calendar1/calender.js"></script>
	<script src="js-js/validate_user_input4.js"></script>
	<script src="js-js/validate_contact_input.js"></script>
</body>
</html>
