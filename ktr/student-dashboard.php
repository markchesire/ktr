<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>student dashboard</title>
    <meta charset="utf-8">
	<link rel="shortcut icon" href="uploads/logo.png" type="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Le styles -->
    <link href="subjects-css/bootstrap.css" rel="stylesheet">
    <link href="subjects-css/bootstrap-responsive.css" rel="stylesheet">
    <link href="subjects-css/docs.css" rel="stylesheet">
    <link href="subjects-css/tm_docs.css" rel="stylesheet">
    <link href="subjects-css/prettify.css" rel="stylesheet">
  </head>
  <body data-spy="scroll" data-target=".bs-docs-sidebar">
    <!-- Navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top" id="advanced">
      <span class="trigger"><strong></strong><em></em></span>
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="home">
              
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
<!-- Subhead -->
<header class="jumbotron subhead">
  <div class="container">
    <h1>Portal</h1>
  </div>
</header>
  <div class="container">
    <!-- Docs nav -->
    <div class="row">
      <div class="span3 bs-docs-sidebar">
        <ul class="nav nav-list bs-docs-sidenav">
          <li><a href="#overview"><i class="icon-chevron-right"></i> Overview</a></li>
          <li><a href="#transitions"><i class="icon-chevron-right"></i>Exams</a></li>
          <li><a href="#modals"><i class="icon-chevron-right"></i>Fee Balance</a></li>
          <li><a href="#dropdowns"><i class="icon-chevron-right"></i>Assignments</a></li>
          <li><a href="logout-student.php"><i class="icon-chevron-right"></i>Logout</a></li>
          <li><a  href="#" id="portal1" data-toggle="tooltip" title="Any Query Contact Admin 0726179177"> Help </span></a></li>
          
      </div>
      <div class="span9">

      <section id="overview">
          <div class="page-header">
            <?php if (isset($_SESSION['admnumber'])):?>
            <h4 id="topic-header">Welcome
              <h4 id="topic-profile">[<?php echo $_SESSION['admnumber']?>]</h4>
            </h4>
          <?php endif?>
          </div>
          <h3>Contents</h3>
          <p>
            <ul type="square">
              <li>View Student Exams Performances</li>
              <li>View Fee Balance</li>
              <li>Get Assignments</li>
            </ul>
          </p>
        </section>
        <!-- Student Performance -->
        <section id="transitions">
          <div class="page-header">
            <h4 id="topic-header">Exam Records<small>&nbsp; Student performance analysis</small></h4>
          </div>
          <p>Student data here</p>
        </section>
        <!-- Fee Balance-->
        <section id="modals">
          <div class="page-header">
            <h4 id="topic-header">Fee Balance<small>&nbsp; Student Fee Balance</small></h4>
          </div>
          <p>student fee balance</p>
        </section>
        <!-- Assignments -->
        <section id="dropdowns">
          <div class="page-header">
            <h4 id="topic-header">Assignments<small>&nbsp;Get Assignments here</small></h4>
          </div>
         <p>Assignments</p>
        </section>
        <!-- Pressure -->
        <section id="scrollspy">
          <div class="page-header">
           
          </div>
          
        </section>
        <!-- Particulate nature of matter -->
        <section id="tabs">
          <div class="page-header">
            
          </div>
          
        </section>
      
        
       
      </div>
    </div>
  </div>
    <!-- Footer -->
    <footer class="footer">
      <div class="container">
        <div class="privacy pull-left">KTR&nbsp;&copy; 2016 | All rights reserved |<img src="elearning/uploads/power.jpg" width="150" height="200px"></img>
	    <img src="elearning/uploads/powerlogo.jpg" width="120" height="120px"></img></div>
        </ul>
      </div>
    </footer>
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
    <script src="subjects-js/jquery.js"></script>
    <script src="subjects-js/prettify.js"></script>
    <script src="subjects-js/bootstrap-transition.js"></script>
    <script src="subjects-js/bootstrap-alert.js"></script>
    <script src="subjects-js/bootstrap-modal.js"></script>
    <script src="subjects-js/bootstrap-dropdown.js"></script>
    <script src="subjects-js/bootstrap-scrollspy.js"></script>
    <script src="subjects-js/bootstrap-tab.js"></script>
    <script src="subjects-js/bootstrap-tooltip.js"></script>
    <script src="subjects-js/bootstrap-popover.js"></script>
    <script src="subjects-js/bootstrap-button.js"></script>
    <script src="subjects-js/bootstrap-collapse.js"></script>
    <script src="subjects-js/bootstrap-carousel.js"></script>
    <script src="subjects-js/bootstrap-typeahead.js"></script>
    <script src="subjects-js/bootstrap-affix.js"></script>
    <script src="subjects-js/application.js"></script>
    <script src="subjects-js/jquery.cookie.js"></script>
    <script src="subjects-js/scrolltext2.js"></script>
  </body>
</html>
