<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<link rel="shortcut icon" href="uploads/logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>portfolio</title>
    <!--  core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Add custom CSS here -->
    <link href="css/khs.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<style>
.jc{
position:relative;
}
</style>
	<script language="JavaScript1.2">

//Trembling message script- (c) Dynamic Drive (www.dynamicdrive.com)
//For full source code, 100's more DHTML scripts, and TOS,
//visit http://www.dynamicdrive.com

var ns6=document.getElementById&&!document.all
var ie=document.all

var customcollect=new Array()
var i=0

function jiggleit(num){
if ((!document.all&&!document.getElementById)) return;
customcollect[num].style.left=(parseInt(customcollect[num].style.left)==-1)? customcollect[num].style.left=1 : customcollect[num].style.left=-1
}

function init(){
if (ie){
while (eval("document.all.jiggle"+i)!=null){
customcollect[i]= eval("document.all.jiggle"+i)
i++
} 
}
else if (ns6){
while (document.getElementById("jiggle"+i)!=null){
customcollect[i]= document.getElementById("jiggle"+i)
i++
}
}
if (customcollect.length==1)
setInterval("jiggleit(0)",80)
else if (customcollect.length>1)
for (y=0;y<customcollect.length;y++){
var tempvariable='setInterval("jiggleit('+y+')",'+'100)'
eval(tempvariable)
}
}
window.onload=init
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
					<li><a href="tenders.php">Tenders</a></li>
					<li><a href="blog-post.php">Blog Post</a></li>
					<li class="active"><a href="portfolio.php">Portfolio</a></li>
					<li><a href="contact.php">Contact</a></li>
                    <li><a href="about.php">About</a></li>  
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <div class="container" id="portfolio-page-header">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="portfolio-page-header"><i class="fa fa-camera" id="fa-fa-camera"></i>&nbsp;Portfolio
                    <small id="title">View school developments and projects</small>
                </h1>
                <ol class="breadcrumb">
                    <li id="home"><a href="index.php"><i class="fa fa-home"></i>&nbsp;Home</a>
                    </li>
                    <li class="active" id="title">&laquo;&nbsp;Homepage</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7">
                    <img src="uploads/admin-block.jpg" id="portfolio-admin-block-img"></img>
            </div>
            <div class="col-md-5">
                <h3 id="portfolio-admin-block-desc"><?php include "js-js/nudging.js"?></h3>
                <p>This admin block was bulid in 1996 by community in support of the school,one of the important resource in this school which holds a variety of
				departments as well as the principal and deputy principal offices,it was refurbished in 2008 using cdf funds of value 100k</p>
            </div>
        </div>
        <hr/>
        <div class="row">
            <div class="col-md-7">
                    <img src="uploads/a.jpg" id="portfolio-classes-img"></img>
            </div>
            <div class="col-md-5">
                <h3>Classes</h3>
                <p>This admin block was bulid in 1996 by community in support of the school,one of the important resoucre in ths school which hold a variety of
				departments as well as the principal and deputy principal offices,it was refurbished in 2008 using cdf funds of value 100k</p>
            </div>
<div class="footer-border"></div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-7">
                   <img src="uploads/library.png" id="portfolio-library-img"></img>  
            </div>
            <div class="col-md-5">
                <h3>Library</h3>
                <p>This admin block was bulid in 1996 by community in support of the school,one of the important resoucre in ths school which hold a variety of
				departments as well as the principal and deputy principal offices,it was refurbished in 2008 using cdf funds of value 100k</p>
            </div>
<div class="footer-border"></div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-7">
                <img src="uploads/dorms.png" id="portfolio-dorms-img"></img>
            </div>
            <div class="col-md-5">
                <h3>Dorms</h3>
                <p> This admin block was bulid in 1996 by community in support of the school,one of the important resoucre in ths school which hold a variety of
				departments as well as the principal and deputy principal offices,it was refurbished in 2008 using cdf funds of value 100k</p>
            </div>
<div class="footer-border"></div>
        </div>
        <hr>
		<div class="row">
            <div class="col-md-7">
                <img src="uploads/dininghall.png" id="portfolio-dininghall-img"></img> 
            </div>
            <div class="col-md-5">
                <h3>Dining Hall</h3>
                <p>This admin block was bulid in 1996 by community in support of the school,one of the important resoucre in ths school which hold a variety of
				departments as well as the principal and deputy principal offices,it was refurbished in 2008 using cdf funds of value 100k</p>
            </div>
            <div class="footer-border"></div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-7">
                 <img src="uploads/fields.jpg" id="portfolio-fields-img"></img>
            </div>
            <div class="col-md-5">
                <h3>PLAYING FIELDS</h3>
                <p>This admin block was bulid in 1996 by community in support of the school,one of the important resoucre in ths school which hold a variety of
				departments as well as the principal and deputy principal offices,it was refurbished in 2008 using cdf funds of value 100k</p> 
            </div>
            <div class="footer-border"></div>
        </div>
		<br/>
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
