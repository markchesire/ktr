<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
	<title>elearn | Homepage</title>
	<meta charset="utf-8">
    <link rel="shortcut icon" href="uploads/logo.png" type="" />
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="" content="">  
	<link rel="stylesheet" href="elearning/css/bootstrap.css" type="text/css" media="screen">
	<link rel="stylesheet" href="elearning/css/responsive.css" type="text/css" media="screen">
	<link rel="stylesheet" href="elearning/css/style.css" type="text/css" media="screen">
	<link rel="stylesheet" href="elearning/css/touchTouch.css" type="text/css" media="screen">
	<link rel="stylesheet" href="elearning/css/kwicks-slider.css" type="text/css" media="screen">
	<script type="text/javascript" src="elearning/js/jquery.js"></script>
	<script type="text/javascript" src="elearning/js/jquery.kwicks-1.5.1.js"></script>
	<script type="text/javascript" src="elearning/js/superfish.js"></script>
	<script type="text/javascript" src="elearning/js/scrolltext.js"></script>
	</head>
	<body> 
<!-- header start -->
<header>
      <div class="container clearfix">
    <div class="row">
          <div class="span12">
        <div class="navbar navbar_">
              <div class="container">
            <h1 class="brand brand_"><img alt="" src="elearning/uploads/ktr.jpg"></h1>
            <a class="btn btn-navbar btn-navbar_" data-toggle="collapse" data-target=".nav-collapse_">Menu <span class="icon-bar"></span> </a>
            <div class="nav-collapse nav-collapse_  collapse">
            <ul class="nav sf-menu">
				   <!-- <li class="" class="sub-menu" ><a href="elearn-index.php"><img src="elearning/uploads/home.png" ></img></a>-->
            <li class="" class="sub-menu"><a href="#">Form 1</a>
				    <ul>
                <li><a href="mathematics.php">Mathematics</a></li>
                <li><a href="biology.php">Biology</a></li>
                <li><a href="physics.php">Physics</a></li>
					      <li><a href="chemistry.php">Chemistry</a></li>
					      <li><a href="histo.php">History & Gov</a></li>
					      <li><a href="geography.php">Geography</a></li>
					      <li><a href="cre.php">C.R.E</a></li>
					      <li><a href="agriculture.php">Agriculture</a></li>
					      <li><a href="business-studies.php">Business Studies</a></li>
					      <li><a href="Computer-studies.php">Computer Studies</a></li>
                <li><a href="homescience.php">Home Science</a></li>
            </ul>
				    </li>
            <li class="sub-menu"><a href="#">Form 2</a>
				    <ul>
                  <li><a href="mathbook2.php">Mathematics</a></li>
                  <li><a href="bio-book2.php">Biology</a></li>
                  <li><a href="physics-book2.php">Physics</a></li>
					        <li><a href="chem-book2.php">Chemistry</a></li>
					        <li><a href="histo-book2.php">History & Gov</a></li>
					        <li><a href="geo-book2.php">Geography</a></li>
					        <li><a href="cre-book2.php">C.R.E</a></li>
					        <li><a href="agri-book2.php">Agriculture</a></li>
					        <li><a href="bizna-book2.php">Business Studies</a></li>
					        <li><a href="Com-book2.php">Computer Studies</a></li>
                  <li><a href="homescience-book2.php">Home Science</a></li>
            </ul>
				    </li>
            <li class="sub-menu"><a href="#">Form 3</a>
				    <ul>
                  <li><a href="mathbook3.php">Mathematics</a></li>
                  <li><a href="biobook3.php">Biology</a></li>
                  <li><a href="physics-book3.php">Physics</a></li>
					        <li><a href="chembook3.php">Chemistry</a></li>
					        <li><a href="histo-book3.php">History & Gov</a></li>
					        <li><a href="geobook3.php">Geography</a></li>
					        <li><a href="crebook3.php">C.R.E</a></li>
					        <li><a href="agribook3.php">Agriculture</a></li>
					        <li><a href="biznabook3.php">Business Studies</a></li>
					        <li><a href="combook3.php">Computer Studies</a></li>
                  <li><a href="homesciencebook3.php">Home Science</a></li>
            </ul>
				    </li>
            <li class="sub-menu"><a href="process.html">Form 4</a>
				    <ul>
                  <li><a href="mathbook4.php">Mathematics</a></li>
                  <li><a href="biobook4.php">Biology</a></li>
                  <li><a href="physics-book4.php">Physics</a></li>
					        <li><a href="chembook4.php">Chemistry</a></li>
					        <li><a href="histobook4.php">History & Gov</a></li>
					        <li><a href="geobook4.php">Geography</a></li>
					        <li><a href="crebook4.php">C.R.E</a></li>
					        <li><a href="agribook4.php">Agriculture</a></li>
					        <li><a href="biznabook4.php">Business Studies</a></li>
					        <li><a href="combook4.php">Computer Studies</a></li>
                  <li><a href="homesciencebook4.php">Home Science</a></li>
            </ul>       
            </li>
            <li><a href="logout-student2.php">Logout</a></li>
            </ul>
            </div>
          </div>
          </div>
      </div>
    </div>
  </div>
</header>
<div class="bg-content">
    <div class="container">
     <div class="row">
        <div class="span12"> 
        <!-- slider -->
        <div class="flexslider">
              <ul class="slides">
                 <li> <img src="elearning/img/book.jpg" alt="" > </li>
                 <li> <img src="elearning/img/book1.jpg" alt="" > </li>
                 <li> <img src="elearning/img/book2.jpg" alt="" > </li>
                 <li> <img src="elearning/img/book3.jpg" alt="" > </li>
                 <li> <img src="elearning/img/book4.jpg" alt="" > </li>
              </ul>
            </div>
        <span id="responsiveFlag"></span>
        <div class="block-slogan">
        <h2>Welcome</h2>
        <div>
            <p >There is no end to education.It's not that you read a book,pass and examination and finish with education.The whole of life from the moment you are born
to the moment you die is a process of learning.
            <p id="ticker"></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
      <div class="row">
        <article class="span6">
              <?php if (isset($_SESSION['admnumber'])):?>
              <h3>Kituro High School<h5 id="logged-profile">LoggedIn&nbsp;<em id="logged-profile-msg">[<?php echo $_SESSION['admnumber']?>]</em></h5></h3>
            <?php endif?>
              <div class="wrapper">
              <figure class="img-indent" ><img src="elearning/uploads/logo.jpg" width="50px" height="100px"alt="" /></figure>
              <div class="inner-1 overflow extra">
                  <div class="txt-1" id="motto">We are determined to teach,prepare students for real world.
                </div>
          </div>
        </article> 
      </div>
    </div>
  </div>
</div>
<!-- footer -->
<footer>
      <div class="container clearfix">
        <ul class="list-social pull-right">
          <li><a class="icon-1" href="#"></a></li>
          <li><a class="icon-3" href="#"></a></li>
        </ul>
    <div class="privacy pull-left">KTR&nbsp;&copy; 2016 | All rights reserved |<img src="elearning/uploads/power.jpg" width="150" height="200px"></img>
	<img src="elearning/uploads/powerlogo.jpg" width="120" height="120px"></img></div>
</div>
</footer>
</body>
</html>