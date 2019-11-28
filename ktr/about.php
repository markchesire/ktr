<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	    <link rel="shortcut icon" href="uploads/logo.png">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta name="description" content="">
                    <meta name="author" content="">
                <title>About Kituro High School</title>
            <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/khs.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" media="all" href="calendar/jsDatePick_ltr.min.css" />
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
            <div class="logo"><img src="uploads/bannerlogo.jpg" width="300px" height="90px"></img></div>
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
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav navbar-right">
		        <li><a href="academics.php">Academics</a></li>
		        <li><a href="admissions.php">Admissions</a></li>
			    <li><a href="tenders.php">Tenders</a></li>
			    <li><a href="blog-post.php">Blog Post</a></li>
			    <li><a href="portfolio.php">Portfolio</a></li>
			    <li><a href="contact.php">Contact</a></li>
                <li class="active"><a href="about.php">About</a></li>
		    </ul>
        </div>
    </div>
</nav>
<div class="container" id="about-page-header">
   <div class="row" >
        <div class="col-lg-12" >
            <h1 class="about-page-header"><i class="fa fa-chevron-right" id="fa-fa-chevron-right"></i> About
            <small id="title">Below you can find more information of our school</small>
            </h1>
                <ol class="breadcrumb">
                    <li id="home"><a href="index.php"><i class="fa fa-home"></i>&nbsp;Home</a></li>
                    <li class="active" id="title">&laquo;&nbsp;Homepage</li>
                </ol>
        </div>
	</div>
<div class="row">
    <div class="col-md-6" id="gallery1">
        <img src="uploads/a.jpg" height="250px" width="500px"><br/><br/>
		<img src="uploads/admin-block.jpg" height="250px" width="500px"><br/><br/>
		<img src="uploads/students.jpg" height="250px" width="500px">
    </div>
    <div class="col-md-6">
        <h2 class="sch-desc">
		<?php include"js-js/newstitle3.js"?></h2>
		    <div class="sch-profile">
				<strong>Mission:</strong>&nbsp;&nbsp;&nbsp;<em>Be centre of academic excellence and discipline.</em><br/>
				<strong>Vision:</strong>&nbsp;&nbsp;&nbsp;<em>To be a top rated secondary school in the republic of Kenya</em><br/>
				<strong>Motto:</strong>&nbsp;&nbsp;&nbsp;<em>Hardwork never fails.</em>
                <p>
				    Kituro High School was established by catholic missionaries who settled in the area in the 1940's.It's a mixed public boarding school
					located in Baringo county,Baringo central constituency with current student population of 800 Students.
				</p>
				<p>
					Owed to the year it was established,the school was among the few and therefore served education seekers across the Republic of Kenya.
					It has excelled in its educational goals and other objectives including recreation and community services.
				</p>
                <p>
				    The school administration has contributed significantly in conservation of environment through maintenance of the community water catchment and by 
					dedicating large portion of its land to forestry
				</p>
				<div>
				<h3>Current School Population&nbsp;<em>(800)</em></h3>
				<?php  
				require"assets/include/conn.php";
		        ?>
				<table id="school-population-data">       
                    <tr id="">
					    <td id="td_form_id">Form ID</td>
                        <td id="td_form_name">Form Name</td>
				        <td id="td_male">Number of Male</td>
			            <td id="td_female">Number of Female</td>
				        <td id="td_total">Total</td>
				        <td id="td_action">Action</td>
                    </tr>
                </table>
				<?php  
				$sqlquery = "select * from school_population ORDER BY form_id ASC";
				$qury = mysqli_query($dblink, $sqlquery);
				while($row = mysqli_fetch_array($qury))
					echo "
				        <table class='tabletender'>
				            <tr class='tenderdetails'>
							    <td id='td_form_id_row0'>$row[0]</td>
							    <td id='td_form_name_row1'>$row[1]</td>
								<td id='td_male_row2'>$row[2]</td>
								<td id='td_female_row3'>$row[3]</td>
								<td id='td_total_row3'>$row[4]</td>
								<td id='td_total_row3'><a href='#'>Download</a></td>
							</tr>
						</table>";
		?>
				</div>
				<p>
				    <img src="uploads/address-desc.jpg" id="address-desc"> 
					</img>
				    <ol type="none">
				        <li class="fa fa-envelope">&nbsp;Postal Address:P.O BOX 114-30400 KABARNET</li>
				        <li class="fa fa-phone">&nbsp;&nbsp;Cellphone No:(+254)726 179177;770 464 394</li>
				        <li class="fa fa-envelope">&nbsp;&nbsp;Email Address:kiturohigh@gmail.com</li>
				        <li class="fa fa-map-marker">&nbsp;&nbsp;&nbsp;&nbsp;Location:Off Kabarnet Nakuru Highway,10km from Kabarnet</li>
						<li>
						    <div class="hover">View Calendar
				            <span class="hovertext"><div id="div3_example" style="margin:10px 0 30px 0;width:205px; height:230px;"></div></span>
							</div>
				        </li>
				    </ol>
				</p>
			</div>
    </div>
</div>
<br/>
<hr/>
<!-- Team Member Profiles -->
<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header"><i class="fa fa-wrench" id="logo-user"></i>&nbsp;Our Team</h3>
    </div>
<div class="col-sm-4">
    <img class="img-responsive img-thumbnail img-circle" src="uploads/s1.jpg" width="85">
        <h3>Mr.John Chemaen<small>Principal</small></h3>
        <p>
		Mr.John Chamean is our current school principal and has served in the school for a period of six months.We are gratefull for his stewardship
		</p>
        <ul class="list-unstyled list-inline list-social-icons">
            <li class="tooltip-social facebook-link"><a href="#facebook-profile" data-toggle="tooltip" data-placement="top" title="Follow us on Facebook"><i class="fa fa-facebook-square fa-2x"></i></a></li>
            <li class="tooltip-social twitter-link"><a href="#twitter-profile" data-toggle="tooltip" data-placement="top" title="Follow us on Twitter"><i class="fa fa-twitter-square fa-2x"></i></a></li>
			<li class="fa fa-phone">&nbsp; (+254) 0726 179 177</li>
        </ul>
</div>
<div class="col-sm-4">
    <img class="" src="uploads/s7.jpeg" width="250px" height="100px">
        <h3>B.O.G Members<small>Directors</small></h3>
        <p>From the left B.O.G chairman Mr.xxx xxx with other board members who are the current B.O.G members of the school</p>
        <ul class="list-unstyled list-inline list-social-icons">
            <li class="tooltip-social facebook-link"><a href="#facebook-profile" data-toggle="tooltip" data-placement="top" title="Follow us on Facebook"><i class="fa fa-facebook-square fa-2x"></i></a></li>
            <li class="tooltip-social twitter-link"><a href="#twitter-profile" data-toggle="tooltip" data-placement="top" title="Follow us on Twitter"><i class="fa fa-twitter-square fa-2x"></i></a></li>
		    <li class="fa fa-phone">&nbsp; (+254) 0726 179 177</li>
        </ul>
</div>
<div class="col-sm-4">
    <img class="" src="uploads/g.jpg" width="250px" height="100px">
        <h3>Alice Limo<small>Deputy Principal</small></h3>
        <p>Mrs.Alice Limo is our current deputy principal and we are grateful for her wonderful efforts to support learning as well as school management.</p>
        <ul class="list-unstyled list-inline list-social-icons">
            <li class="tooltip-social facebook-link"><a href="#facebook-profile" data-toggle="tooltip" data-placement="top" title="Follow us on Facebook"><i class="fa fa-facebook-square fa-2x"></i></a></li>
            <li class="tooltip-social twitter-link"><a href="#twitter-profile" data-toggle="tooltip" data-placement="top" title="Follow us on Twitter"><i class="fa fa-twitter-square fa-2x"></i></a></li>
			<li class="fa fa-phone">&nbsp; (+254) 0726 179 177</li>
        </ul>
</div>
<div class="col-sm-4">
    <img class="img-responsive img-thumbnail img-circle"  src="uploads/s2.jpg" width="75">
        <h3>Mr.John Chemaen<small>Head of science department</small></h3>
        <p>Mr.John Chemaen is the head of science department in the school,he manages all the sciences learning activities in the school.</p>
        <ul class="list-unstyled list-inline list-social-icons">
            <li class="tooltip-social facebook-link"><a href="#facebook-profile" data-toggle="tooltip" data-placement="top" title="Follow us on Facebook"><i class="fa fa-facebook-square fa-2x"></i></a></li>
            <li class="tooltip-social twitter-link"><a href="#twitter-profile" data-toggle="tooltip" data-placement="top" title="Follow us on Twitter"><i class="fa fa-twitter-square fa-2x"></i></a></li>
			<li class="fa fa-phone">&nbsp; (+254) 0726 179 177</li>
        </ul>
</div>
<div class="col-sm-4">
    <img class="img-responsive img-thumbnail img-circle"  src="uploads/s5.jpeg" width="75">
        <h3>Mr.John Chemaen<small>Head of humanities department</small></h3>
        <p>Mr.Mark Chesire is the head of humanities department in the school,he manages all the humanities learning activities in the school.</p>
        <ul class="list-unstyled list-inline list-social-icons">
            <li class="tooltip-social facebook-link"><a href="#facebook-profile" data-toggle="tooltip" data-placement="top" title="Follow us on Facebook"><i class="fa fa-facebook-square fa-2x"></i></a></li>
            <li class="tooltip-social twitter-link"><a href="#twitter-profile" data-toggle="tooltip" data-placement="top" title="Follow us on Twitter"><i class="fa fa-twitter-square fa-2x"></i></a></li>
		    <li class="fa fa-phone">&nbsp; (+254) 0726 179 177</li>
        </ul>
</div>
<div class="col-sm-4">
    <img class="img-responsive img-thumbnail img-circle"  src="uploads/s6.jpeg" width="75">
        <h3>Dorcas Kim's<small>Head of Mathematics department</small></h3>
        <p>Miss.Dorcas Kim's is the head of science department in the school,he manages all the mathematics learning activities in the school.</p>
        <ul class="list-unstyled list-inline list-social-icons">
            <li class="tooltip-social facebook-link"><a href="#facebook-profile" data-toggle="tooltip" data-placement="top" title="Follow us on Facebook"><i class="fa fa-facebook-square fa-2x"></i></a></li>
            <li class="tooltip-social twitter-link"><a href="#twitter-profile" data-toggle="tooltip" data-placement="top" title="Follow us on Twitter"><i class="fa fa-twitter-square fa-2x"></i></a></li>
			<li class="fa fa-phone">&nbsp; (+254) 0726 179 177</li>
		</ul>
</div>
</div>
<div class="row" id="notify-us">
    <div class="col-lg-12">
         <h2 class="page-header"></h2>
    </div>
We are thankful for the efforts of all our staff,subordinate staff members,parents and students as well as other well wishers for their continued support to ensure that all learning activities in the school
runs on well.We also want to thank our surrounding community for their support.
</div>
<br/><br/>
</div>
<div class="container">
    <hr>
</div>
<!-- Footer -->
<?php include"footer.php"?>
<!-- Footer-->
    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/khs.js"></script>
	<script type="text/javascript" src="calendar/jquery.1.4.2.js"></script>
    <script type="text/javascript" src="calendar/jsDatePick.jquery.min.1.3.js"></script>
	<script type="text/javascript" src="calendar/calender.js"></script>
</body>
</html>
