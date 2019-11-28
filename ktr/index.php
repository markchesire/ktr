<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<link rel="shortcut icon" href="uploads/logo.png">
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <meta name="description" content="">
    <meta name="author" content="">

    <title>WELCOME KITURO HIGH SCHOOL</title>
	
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/khs.css" rel="stylesheet">
	<link href="css/search.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style/style-style.css">
	
	<script>
	
	  // When the document loads do everything inside here ...
	  $(document).ready(function(){
		
		// When a link is clicked
//		$("a.tab").click(function () {
			
			
			// switch all tabs off
		//	$(".active").removeClass("active");
			
			// switch this tab on
		//	$(this).addClass("active");
			
			// slide all content up
		//	$(".content").slideUp();
			
			// slide this content up
		//	var content_show = $(this).attr("title");
		//	$("#"+content_show).slideDown();
//return false;

		  
	//	});

  $('.flexslider').flexslider({
 animation: "fade"
  });
  $('.tooltip').tooltipster({
		animation: 'grow',
		position:'bottom-left',
                offsetY:-5,
                maxWidth: 300,
                theme: '.tooltipster-light',
		interactive:true,
		content:'' //$(this).parent().find('p').html()
	
	});	
	  });
  </script>
  
  
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
                    <!-- You'll want to use a responsive image option so this logo looks good on devices - I recommend using something like retina.js (do a quick Google search for it and you'll find it) -->
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
                            <li><a href="about.php">About</a></li> 
                        </ul>
                    </div>
                <!-- /.navbar-collapse -->
            </div>
		
        </nav>
        
                <div id="homebanner">
				    <div class="flexslider">
                        <ul class="slides">
                            <li class="" style="width: 100%; float: left; margin-right: -100%; position: relative; display: none;"><img src="img/a.jpg" alt="" border="0"></li>
                            <li class="flex-active-slide" style="width: 100%; float: left; margin-right: -100%; position: relative; display: list-item;"><img src="img/b.jpg" alt="" border="0"></li>
                            <li style="width: 100%; float: left; margin-right: -100%; position: relative;"><img src="img/c.jpg" alt="" border="0"></li>
                            <li style="width: 100%; float: left; margin-right: -100%; position: relative;"><img src="img/d.jpg" alt="" border="0"></li>
							<li style="width: 100%; float: left; margin-right: -100%; position: relative;"><img src="img/e.jpg" alt="" border="0"></li>
							<li style="width: 100%; float: left; margin-right: -100%; position: relative;"><img src="img/g.jpg" alt="" border="0"></li>
                        </ul>
                       <div id="homebannerstrip"><img src="img/innerbannerstrip.png" alt="" height="157" width="1050"></div>
                    </div>
                </div>
                <div class="section">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-4" id="graph-holder">
                                <div class="header">KCSE PERFORMANCE 2015</div>
								
								
								
								<!--<div id="analysis-charts">
			                    <img src='libchart/PoweredBy.png'>
			                    </div>-->
								
					
								<?php include"graph.php"?>

								
								
								<div id="key">
								X-axis:Number of students;Y-axis:Grades;hover:To get value
								</div>
				                
					           <br/>
					        </div>
					        <div class="col-lg-4 col-md-4" id="results-analysis">
                                <h3><i class="fa fa-pencil"></i> Principals Message</h3>
                                <p>
								    At Kituro we believe that we offer the very best of teaching and learning.The school administration is dedicated to a student centered
								     program that promotes academic excellence through an enriched rigorous interdisciplinary curriculumn.our goal is tp produce 
								     critical thinkers. problem solving and future leaders of high intergrity.
								    <p>Principal</br>
								    Mrs. Grace Cheruiyot.
								    </p>
								    <p><h3>Contact us on:</h3>
								           <span class="check"><li><em id="contact-numbers">020 456 567</em></li></span>
								           <span class="check"><li><em id="contact-numbers">020 456 567</em></li></span>
								    </p>
					            </p>
								
								
								
                                
				            </div>
                            <div class="col-lg-4 col-md-4" id="events-news">
                                <h3><i class="fa fa-folder-open"></i> <?php include"js-js/newstitle.js"?> 
								
								</h3>
					            <?php include"animate.php"; ?>
						        <img src="uploads/updates.jpg" id="moreupdates"></img>
                            </div>
				        </div>
						<br/>
						<div class="pics-border"></div>
				        <div class="col-lg-4 col-md-4">
				            <img src="uploads/admin-block.jpg" id="admin-block" alt="pic"></img>
				            <img src="uploads/pic-footer.jpg" id="picfooter" alt="picfooter"></img> 
				            <div class="col-lg-4 col-md-4">
				                <img src="uploads/students.jpg" id="studentspic" alt="pic"></img>
				                <img src="uploads/pic-footer.jpg" id="studentspicfooter" alt="picfooter"></img>
				            </div>
				            <div class="col-lg-4 col-md-4">
				                <img src="img/a.jpg" id="comrades" alt="pic"></img>
				                <img src="uploads/pic-footer.jpg" id="comradesfooter" alt="picfooter"></img>
				            </div>
				        </div>
                    </div>
                </div>
				 
                <?php require"footer.php"?>
				
	
		   </div>
		  <!--script content-->
          <script src="js-js/jquery_002.js"></script>
          <script src="js-js/jquery_003.js"></script>		  
		 

</body>
</html>
