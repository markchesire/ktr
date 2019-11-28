<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
	<link rel="shortcut icon" href="uploads/logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Academics</title>

    <link href="css/bootstrap.css" rel="stylesheet">

    <link href="css/khs.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
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
				 <p class="day"><small>
				 <script type="text/javascript">
                 var d = new Date()
                 var weekday = new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday")
                 document.write(""+""+""+ weekday[d.getDay()]+":")
                 </script>
				 </small>
                 </p>
				 <p class="date"><small>
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
				 <p class="time"><small>
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
					<li class="active"><a href="tenders.php">Tenders</a></li>
					<li><a href="blog-post.php">Blog Post</a></li>
					<li><a href="portfolio.php">Portfolio</a></li>
					<li><a href="contact.php">Contact</a></li>
                    <li><a href="about.php">About</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container" id="blogpost-page-header">

        <div class="row">

            <div class="col-lg-12">
                <h1 class="blogpost-page-header"><i class="fa fa-th-list" id="fa-fa-comments"></i>&nbsp;Academics 
                    <small id="title">Performance</small>
                </h1>
                <ol class="breadcrumb">
                    <li id="home"><a href="index.php"><i class="fa fa-home"></i>&nbsp;Home</a>
                    </li>
                    <li class="active" id="title">&laquo;&nbsp;Homepage</li>
                </ol>
            </div>

        </div>
		
		
		<div>
		     <img src="uploads/logo.png" id="tenders-logo" alt="picha" width="50px" height="50px"></img>
		</div>
		<br/>
		<p class="logo1description">NOTHING BUT THE BEST</p>
        <div class="academicinfo">
             Kituro high school currently has a student population of 1000,we have a 4 streams per form 75 students per class,the school has recorded its own record
             of a consistent increase in performance trend since 2016 this attributed to hard work done by both ghe student,teachers and the entire school fraternity.</br>
             School curriculumn<br/>The school offers KCSE 8.4.4(Kenya national curriculumn system) from form 1 to form 4. It consists of:
            <ol>
                 <li>Examinable subjects</li>
                 <li>Non examinable subjects</li>
            </ol>
             <span class="examinable-subjects">Examinable subjects has the following catergories:</span><br/>
             Compulsory subjects   
            <ol>
                 <span class="check"> <li>Mathematics</li></span>
                 <span class="check"><li>English</li></span>
                 <span class="check"><li>Kiswahili</li></span>
            </ol> <br/>
             Humanities   
            <ol>
                 <span class="check"><li>History and Government</li></span>
                 <span class="check"><li>Geography</li></span>
                <span class="check"><li>Christian Religous Education</li></span>
            </ol><br/>
            Group Four   
            <ol>
                <span class="check"><li>Agriculture</li></span>
                <span class="check"><li>Computer Studies</li></span>
                <span class="check"><li>Kiswahili</li></span>
            </ol><br/>
            Group Five   
            <ol>
                <span class="check"><li>Germany</li></span>
                <span class="check"><li>Business Studeis</li></span>
                <span class="check"><li>Home science</li></span>
            </ol><br/>
            <span class="examinable-subjects">Non-examinable subjects consists of:</span>
            <ol>
                <span class="check"><li>P.E</li></span>
                <span class="check"><LI>Life Skills</li></span>
            </ol>
        </div>

        <hr/>
        <hr/>
    </div>
    <!-- /.container -->
    <div class="container">
        <hr>    
    </div>
    <!-- /.container -->
	
	    <!-- Footer -->
        <?php include"footer.php"?>
<!-- Footer-->

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/khs.js"></script>
</body>
</html>
