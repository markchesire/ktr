<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<link rel="shortcut icon" href="uploads/logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>tenders</title>
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
                 var t = new Date()
                 document.write(t.getHours())
                 document.write(":")
                 document.write(t.getMinutes()+ 1)
                 document.write(":")
                 document.write(t.getSeconds())
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
                <h1 class="blogpost-page-header"><i class="fa fa-tasks" id="fa-fa-comments"></i>&nbsp;Tenders
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
		<p class="tender-update">No tenders currently</p>
        <hr/>
		<p class="tenderheader">Keep checking for more updates</p>
		<p class="tender-invite">Kituro high school invites interested and eligible bidders for the following:</p>
		<table class="tabletender">
		    <tr class="tenderdetails">
		        <td>ITEM NO:</td>
                <td>DESCRIPTION</td>
                <td>TENDER NUMBER</td>
                <td>CLOSING DATE</td>
                <td>STATUS</td>
                <td><a href="printpdf.php"><i class="fa fa-download"></i>&nbsp;download</a></td>
		    </tr>
		    <tr>
		        <td>1</td>
                <td>Tarmacking of foot path </td>
                <td>KTHS/20/2015-2016</td>
                <td id="tender-date">28/5/2016</td>
                <td id="tender-status">closed</td>
                <td><a href="printpdf.php"><i class="fa fa-download"></i>&nbsp;download</a></td>
		    </tr>
		    <tr class="one">
		        <td>2</td>
                <td>Tarmacking of foot path </td>
                <td>KTHS/20/2015-2016</td>
                <td id="tender-date">28/5/2016</td>
                <td id="tender-status-open">open</td>
                <td><a href="printpdf.php"><i class="fa fa-download"></i>&nbsp;download</a></td>
		    </tr>
		    <tr>
		        <td>3</td>
                <td>Tarmacking of foot path </td>
                <td>KTHS/20/2015-2016</td>
                <td id="tender-date">28/5/2016</td>
                <td id="tender-status">closed</td>
                <td><a href="printpdf.php"><i class="fa fa-download"></i>&nbsp;download</a></td>
		    </tr>
		    <tr class="two">
		        <td>4</td>
                <td>Tarmacking of foot path </td>
                <td>KTHS/20/2015-2016</td>
                <td id="tender-date">28/5/2016</td>
                <td id="tender-status-open">open</td>
                <td><a href="printpdf.php"><i class="fa fa-download"></i>&nbsp;download</a></td>
		    </tr>
		    <tr>
		        <td>5</td>
                <td>Tarmacking of foot path </td>
                <td>KTHS/20/2015-2016</td>
                <td id="tender-date">28/5/2016</td>
                <td id="tender-status">closed</td>
                <td><a href="printpdf.php"><i class="fa fa-download"></i>&nbsp;download</a></td>
		    </tr>
		</table>
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
