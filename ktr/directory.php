<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Alumni | Directory </title>
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
	<style type="text/css">
        #bgimg {
        background-image: url('uploads/background.jpg');
		background-repeat: x;
        }
    </style>

    	  
	  

  </head>

  <body data-spy="scroll" data-target=".bs-docs-sidebar">

    

<!-- Subhead -->
<header class="jumbotron subhead" id="bgimg">

  <div class="container">
    <h1>Alumni <em>Kituro High School</em></h1>
  </div>
</header>
  <div class="container">
<span class="brand" id="brand-desc">Kituro High School</span>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="home" id="brand-desc">
                <a href="alumni.php">&laquo;&nbsp;Back </a>
              </li>
              
              
            </ul>
          </div>
    <!-- Docs nav -->
    <div class="row">
      <div class="span3 bs-docs-sidebar" >
        <ul class="nav nav-list bs-docs-sidenav" id="navigation">
          <li><a href="#overview"><i class="icon-chevron-right"></i>2017</a></li>
          <li><a href="#transitions"><i class="icon-chevron-right"></i>2016</a></li>
          <li><a href="#modals"><i class="icon-chevron-right"></i>2015</a></li>
          <li><a href="#dropdowns"><i class="icon-chevron-right"></i>2014</a></li>
          <li><a href="#scrollspy"><i class="icon-chevron-right"></i>2013</a></li>
          <li><a href="#tabs"><i class="icon-chevron-right"></i>2012</a></li>
          <li><a href="#tooltips"><i class="icon-chevron-right"></i>2011</a></li>
          <li><a href="#popovers"><i class="icon-chevron-right"></i>2010</a></li>
        </ul>
      </div>
      <div class="span9" id="navigation-list">


        <!-- 2017 Alumni -->
        <section id="overview">
          <div class="page-header">
            <h4 id="topic-header">&nbsp;<em>2017&nbsp;Alumni</em></h4>
          </div>
          <div class="tenderheader">
		<?php  
			 
				require"assets/include/conn.php";
				
		?>
		                
		<?php  
			 
				$sqlquery = "select * from dir_alumni where endyear = '2017' ORDER BY firstname";
				$result = mysqli_query($dblink,$sqlquery);
				while($row = mysqli_fetch_array($result))
					echo "
				        
				        <table class='tabletender'>
				            <tr class='tenderdetails'>
							    <td id='td_firstname_row1'>$row[0]</td>
								<td id='td_surname_row2'>$row[1]</td>
								<td id='td_admno_row3'>$row[2]</td>
								<td id='td_phone_row4'>$row[3]</td>
								<td id='td_mail_row5'>$row[4]</td>
								<td id='td_year_row6'>$row[5]</td>
								<td id='td_img_row7'><img src='".$row['img']."' id='uploaded-image' class='img-responsive img-thumbnail img-circle'></td>
							</tr>
						</table>";
		?>

		  </div>
          
        </section>



        <!-- 2016 Alumni-->
        <section id="transitions">
          <div class="page-header">
            <h4 id="topic-header">&nbsp;<em>2016 &nbsp;Alumni</em></h4>
			<?php  
			 
				$sqlquery = "select * from dir_alumni where endyear = '2016' ORDER BY firstname";
				$result = mysqli_query($dblink,$sqlquery);
				while($row = mysqli_fetch_array($result))
					echo "
				        
				        <table class='tabletender'>
				            <tr class='tenderdetails'>
							    <td id='td_firstname_row1'>$row[0]</td>
								<td id='td_surname_row2'>$row[1]</td>
								<td id='td_admno_row3'>$row[2]</td>
								<td id='td_phone_row4'>$row[3]</td>
								<td id='td_mail_row5'>$row[4]</td>
								<td id='td_year_row6'>$row[5]</td>
								<td id='td_img_row7'><img src='".$row['img']."' id='uploaded-image' class='img-responsive img-thumbnail img-circle'></td>
							</tr>
						</table>";
		?>
          </div>
          
        </section>



        <!-- 2015 Alumni-->
        <section id="modals">
          <div class="page-header">
            <h4 id="topic-header">&nbsp;<em>2015 &nbsp;Alumni</em></h4>
			<?php  
			 
				$sqlquery = "select * from dir_alumni where endyear = '2015' ORDER BY firstname";
				$result = mysqli_query($dblink,$sqlquery);
				while($row = mysqli_fetch_array($result))
					echo "
				        
				        <table class='tabletender'>
				            <tr class='tenderdetails'>
							    <td id='td_firstname_row1'>$row[0]</td>
								<td id='td_surname_row2'>$row[1]</td>
								<td id='td_admno_row3'>$row[2]</td>
								<td id='td_phone_row4'>$row[3]</td>
								<td id='td_mail_row5'>$row[4]</td>
								<td id='td_year_row6'>$row[5]</td>
								<td id='td_img_row7'><img src='".$row['img']."' id='uploaded-image' class='img-responsive img-thumbnail img-circle'></td>
							</tr>
						</table>";
		?>
          </div>
		</section>
		  
        <!--2014 Alumni-->
        <section id="dropdowns">
          <div class="page-header">
            <h4 id="topic-header">&nbsp;<em>2014 &nbsp;Alumni </em></h4>
			<?php  
			 
				$sqlquery = "select * from dir_alumni where endyear = '2014' ORDER BY firstname";
				$result = mysqli_query($dblink,$sqlquery);
				while($row = mysqli_fetch_array($result))
					echo "
				        
				        <table class='tabletender'>
				            <tr class='tenderdetails'>
							    <td id='td_firstname_row1'>$row[0]</td>
								<td id='td_surname_row2'>$row[1]</td>
								<td id='td_admno_row3'>$row[2]</td>
								<td id='td_phone_row4'>$row[3]</td>
								<td id='td_mail_row5'>$row[4]</td>
								<td id='td_year_row6'>$row[5]</td>
								<td id='td_img_row7'><img src='".$row['img']."' id='uploaded-image' class='img-responsive img-thumbnail img-circle'></td>
							</tr>
						</table>";
		?>
          </div>
         </section>


        <!-- 2013 Alumni-->
        <section id="scrollspy">
          <div class="page-header">
            <h4 id="topic-header">&nbsp;<em>2013 &nbsp;Alumni</em></h4>
			<?php  
			 
				$sqlquery = "select * from dir_alumni where endyear = '2013' ORDER BY firstname";
				$result = mysqli_query($dblink,$sqlquery);
				while($row = mysqli_fetch_array($result))
					echo "
				        
				        <table class='tabletender'>
				            <tr class='tenderdetails'>
							    <td id='td_firstname_row1'>$row[0]</td>
								<td id='td_surname_row2'>$row[1]</td>
								<td id='td_admno_row3'>$row[2]</td>
								<td id='td_phone_row4'>$row[3]</td>
								<td id='td_mail_row5'>$row[4]</td>
								<td id='td_year_row6'>$row[5]</td>
								<td id='td_img_row7'><img src='".$row['img']."' id='uploaded-image' class='img-responsive img-thumbnail img-circle'></td>
							</tr>
						</table>";
		?>
          </div>
         </section>

        <!-- 2012 Alumni -->
        <section id="tabs">
          <div class="page-header">
            <h4 id="topic-header">&nbsp;<em>2012 &nbsp;Alumni</em></h4>
			<?php  
			 
				$sqlquery = "select * from dir_alumni where endyear = '2012' ORDER BY firstname";
				$result = mysqli_query($dblink,$sqlquery);
				while($row = mysqli_fetch_array($result))
					echo "
				        
				        <table class='tabletender'>
				            <tr class='tenderdetails'>
							    <td id='td_firstname_row1'>$row[0]</td>
								<td id='td_surname_row2'>$row[1]</td>
								<td id='td_admno_row3'>$row[2]</td>
								<td id='td_phone_row4'>$row[3]</td>
								<td id='td_mail_row5'>$row[4]</td>
								<td id='td_year_row6'>$row[5]</td>
								<td id='td_img_row7'><img src='".$row['img']."' id='uploaded-image' class='img-responsive img-thumbnail img-circle'></td>
							</tr>
						</table>";
		?>
          </div>
         </section>

        <!--2011 Alumni-->
        <section id="tooltips">
          <div class="page-header">
            <h4 id="topic-header">&nbsp;<em>2011 &nbsp;Alumni</em></h4>
			<?php  
			 
				$sqlquery = "select * from dir_alumni where endyear = '2011' ORDER BY firstname";
				$result = mysqli_query($dblink,$sqlquery);
				while($row = mysqli_fetch_array($result))
					echo "
				        
				        <table class='tabletender'>
				            <tr class='tenderdetails'>
							    <td id='td_firstname_row1'>$row[0]</td>
								<td id='td_surname_row2'>$row[1]</td>
								<td id='td_admno_row3'>$row[2]</td>
								<td id='td_phone_row4'>$row[3]</td>
								<td id='td_mail_row5'>$row[4]</td>
								<td id='td_year_row6'>$row[5]</td>
								<td id='td_img_row7'><img src='".$row['img']."' id='uploaded-image' class='img-responsive img-thumbnail img-circle'></td>
							</tr>
						</table>";
		?>
          </div>
         </section>

      <!-- 2010 Alumni -->
      <section id="popovers">
        <div class="page-header">
          <h4 id="topic-header">&nbsp;<em>2010 &nbsp;Alumni</em></h4>
		  <?php  
			 
				$sqlquery = "select * from dir_alumni where endyear = '2010' ORDER BY firstname";
				$result = mysqli_query($dblink,$sqlquery);
				while($row = mysqli_fetch_array($result))
					echo "
				        
				        <table class='tabletender'>
				            <tr class='tenderdetails'>
							    <td id='td_firstname_row1'>$row[0]</td>
								<td id='td_surname_row2'>$row[1]</td>
								<td id='td_admno_row3'>$row[2]</td>
								<td id='td_phone_row4'>$row[3]</td>
								<td id='td_mail_row5'>$row[4]</td>
								<td id='td_year_row6'>$row[5]</td>
								<td id='td_img_row7'><img src='".$row['img']."' id='uploaded-image' class='img-responsive img-thumbnail img-circle'></td>
							</tr>
						</table>";
		?>
        </div>
      </section>

      
			 
            <hr class="bs-docs-separator">
          
		   
		   
		   <div class="row text-center">

            <div class="col-lg-12" id="pagination-list">
                <ul id="pagination">
                    <li><a href="#">&laquo;</a></li>
                    <li><a href="directory-2009.php">1</a></li>
                    <li><a href="directory-2001.php">2</a></li>
					<li><a href="directory-1993.php">3</a></li>
                    <li><a href="directory-1985.php">4</a></li>
					<li><a href="directory-1977.php">5</a></li>
					<li><a href="directory-1969.php">6</a></li>
                    
                    <li><a href="#">&raquo;</a>
                    </li>
                </ul>
            </div>
			

            </div>



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
    <script src="subjects-js/scrolltext.js"></script>

  </body>
</html>
