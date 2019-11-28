<?php include"assets/include/functions.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	    <link rel="shortcut icon" href="uploads/logo.png">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta name="description" content="">
                    <meta name="author" content="">
                <title>Blog Post </title>
            <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/khs.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" media="all" href="calendar2/jsDatePick_ltr.min.css" />
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
<!-- HEDER NAVIGATION LINKS-->
<div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav navbar-right">
	    <li><a href="academics.php">Academics</a></li>
		<li><a href="admissions.php">Admissions</a></li>
		<li><a href="tenders.php">Tenders</a></li>
		<li class="active"><a href="blog-post.php">Blog Post</a></li>
		<li><a href="portfolio.php">Portfolio</a></li>
		<li><a href="contact.php">Contact</a></li>
        <li><a href="about.php">About</a></li>
    </ul>
</div>
</div>
</nav>
<div class="container" id="blogpost-page-header">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="blogpost-page-header"><i class="fa fa-comments" id="fa-fa-comments"></i>&nbsp;Blog Post
                <small id="title">Current and events scheduled to happen soon</small>
            </h1>
            <ol class="breadcrumb">
                <li id="home"><a href="index.php"><i class="fa fa-home"></i>&nbsp;Home</a></li>
                <li class="active" id="title">&laquo;&nbsp;Homepage</li>
            </ol>
        </div>

    </div>
<div class="row">
    <div class="col-lg-8">
        <!-- the actual blog post: title/author/date/content -->
        <hr/>
            <p style="color:red"><i class="fa fa-clock-o" id="fa-fa-clock-o"></i><?php include"js-js/newstitle5.js"?></p>
                <hr/>
				
				<div class="span1 offset1">
                <div class="circle">
                <span class="event-date">sept<br>13</span>
                </div>
                </div>
				<div id="blogpost-events-canvas">
				<strong id="blogpost-events-title">Science congress
				<div class="hover2">View Calendar
		            <span class="hovertext2"><div id="div3_example" style="margin:10px 0 30px 0;width:205px; height:230px;"> </span></div>
				</div>
				</strong>
				</div>
				<div id="blogpost-science-congress-desc">
				<p class="blogpost"><strong>Venue:</strong> Kituro high school auditorium, on <strong>13/9/2016 </strong>as from <strong>8AM</strong></p>
                <img src="uploads/science.jpg" alt="image" id="blogpost-event-img"></img>
                <hr/>
                <p>
				    Baringo county schools are scheduled to held a county science congress for all the schools within the county.All schools are required to
				    prepare their students in advance to avoid any crisis during the function,avail all the needed materials to the students.Students are required to
				    arrive in time and conduct themselves with high accordance of discipline.We are well prepared to ensure the success of the event.
				</p>
				</div>
				<div class="footer-border"></div>
                <p style="color:red"><i class="fa fa-clock-o" id="fa-fa-clock-o"></i> Posted on September 12, 2016 at 7:08 AM</p>
                <hr/>
				<div class="span1 offset1">
                <div class="circle">
                <span class="event-date">sept<br>12</span>
                </div>
                </div>
				<div id="blogpost-events-canvas">
				<strong id="blogpost-events-title">Academic Day</strong>
				</div>
				<div id="blogpost-academic-day-desc">
				<p class="blogpost"><strong>Venue:</strong> Kituro high school auditorium, on <strong>12/9/2016</strong> as from <strong>8AM</strong></p>
                <img src="uploads/academics.jpg" alt="image" id="blogpost-event-img"></img>
                <hr>
                <p>
				    Baringo county schools are scheduled to held a county science congress for all the schools within the county.All schools are required to
				    prepare their students in advance to avoid any crisis during the function,avail all the needed materials to the students.Students are required to
				    arrive in time and conduct themselves with high accordance of discipline.We are well prepared to ensure the success of the event.
			    </p>
				</div>
				<div class="footer-border"></div>
                <p style="color:red"><i class="fa fa-clock-o" id="fa-fa-clock-o"></i> Posted on September 11, 2016 at 11:030 AM</p>
                <hr/>
				<div class="span1 offset1">
                <div class="circle">
                <span class="event-date">sept<br>11</span>
                </div>
                </div>
				<div id="blogpost-events-canvas">
				<strong id="blogpost-events-title">County Competitions</strong>
				</div>
				<div id="blogpost-county-competition-desc">
				<p class="blogpost"><strong>Venue:</strong> Keturwo high school auditorium, on <strong>11/9/2016</strong> as from <strong>8AM</strong></p>
                <img src="uploads/games.jpg" alt="image" id="blogpost-event-img"></img>
                <hr>
                <p>
				    Baringo county schools are scheduled to held a county science congress for all the schools within the county.All schools are required to
				    prepare their students in advance to avoid any crisis during the function,avail all the needed materials to the students.Students are required to
				    arrive in time and conduct themselves with high accordance of discipline.We are well prepared to ensure the success of the event.
				</p>
				</div>
                <div class="footer-border"></div>
				<br/>
                <!-- the comment box -->
                <div class="well">
                    <h4>Leave a Comment:</h4>
					 <?php  
			 
				require"assets/include/conn.php";
				if(isset($_POST['submit'])){ 
                $comments = $_POST["comments"];
                $name="";
                $alert="";
				
				{
					$sqlquery= mysqli_query($dblink,"INSERT INTO comments VALUES (default,'$comments',now())");
					$msg = "Thanks ".$name.", Comment Submitted Successfully".$alert.",We Appreciate:"."<br/></br/>";
				}  
				}
			?>
                    <div style="color:red"><?php echo @$msg?></div>
                    <form name="blogForm" onsubmit="return(checkComment());" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <textarea name="comments" class="form-control" rows="3" id="input4"></textarea>
                        </div>
                        <input type="submit" name="submit" value="Submit"class="btn btn-primary">
                    </form>
                </div>
				<hr>
				<!-- the comments -->
            <h3>Date and Time</h3>
        <p style="color:red">School requests that all event dates and time should be carefully adhered to for the success of any scheduled event.</p>
    </div>
<div class="col-lg-4">
    <div class="well">
	<p class="mission">Mission:</p>
	Be centre of academic excellence and discipline.
    <p class="vision">Vision:</p>
	To be a top rated secondary school in the republic of Kenya
	<p class="motto">Motto:</p>
    Hardwork never fails.
	</div>
	<p class="blogpost"><br/>Opening and closing school term dates</p> 
	
    <div class="well">
        <h4> 3rd term 2016</h4>
            <ol type="none">
			    <li>Opening:&nbsp; 15/08/2016</li>
				<li>Closing:&nbsp; 28/11/2016 </li>
			</ol>
    </div>
    <div id="">
	<strong id="blogpost-events-title">ARCHIVES</strong>
	</div>
	<p class="blogpost">2015 Price Giving Day</p>
    <div class="well">
        <div class="row">
            <div class="col-lg-6">
                <img src="uploads/comrades.jpg" id="blogpost-archive-images">
            </div>
        </div>
    </div>
    <p class="blogpost">2015 Technology Innovators Champions</p>
        <div class="well">
            <div class="row">
                <div class="col-lg-6">
                    <img src="uploads/technology.png" id="blogpost-archive-images">
                </div>
                        
            </div>
        </div>
	<p class="blogpost">2015 Karoke Champions</p>
        <div class="well">
            <div class="row">
                <div class="col-lg-6">
                    <img src="uploads/karoke.jpg" id="blogpost-archive-images">
                </div>
            </div>
        </div>
				
	<p class="blogpost">2015 Annual General Meeting</p>
        <div class="well">
            <div class="row">
                <div class="col-lg-6">
                    <img src="uploads/agm.jpg" id="blogpost-archive-images">
                </div>
            </div>
        </div>
	
    </div>
 </div>
</div>
<div class="container"><hr></div>
<!-- Footer -->
<?php include"footer.php"?>
<!-- End Footer-->
    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/khs.js"></script>
	<script type="text/javascript" src="calendar2/jquery.1.4.2.js"></script>
    <script type="text/javascript" src="calendar2/jsDatePick.jquery.min.1.3.js"></script>
	<script type="text/javascript" src="calendar2/calender.js"></script>
	<script type="text/javascript" src="js-js/validate_user_input7.js"></script>
</body>
</html>
