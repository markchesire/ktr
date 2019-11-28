<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
	<link rel="shortcut icon" href="uploads/logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Messages | opinions</title>

    
    <link href="admin/css/bootstrap.css" rel="stylesheet">

    
    <link href="admin/css/khs.css" rel="stylesheet">
    <link href="admin/font-awesome/css/font-awesome.min.css" rel="stylesheet">
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
                <div class="logo"><img src="admin/uploads/bannerlogo.jpg" width="300px" height="90px"></img></div>
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
				    <li class="active"><a href="messages-opinions.php">Messages/Opinions</a></li>
				    <li><a href="postacademics.php">Post Academics</a></li>
					<li><a href="postadmissions.php">Post Admissions</a></li>
					<li><a href="posttenders.php">Post Tenders</a></li>
					<li><a href="postlearning-stuff.php">Post Learning Stuff</a></li>
                    <li><a href="logoutadmin.php">Logout</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container" id="blogpost-page-header">

        <div class="row">

            <div class="col-lg-12" >
                <h1 class="blogpost-page-header"><i class="fa fa-comment" id="fa-fa-comments"></i>&nbsp;Messages and Opinions
                    <small id="title">View messages from other school stakeholders</small>
                </h1>
                <!--<ol class="breadcrumb">
                    <li id="home"><a href="index.php">Home</a>
                    </li>
                    <li class="active">view performance</li>
                </ol>-->
            </div>

        </div>
		<br/>
		<p class="logo1description">Contact messages </p>
        <hr/>
		
		<div class="tenderheader">
		
		<?php  
			 
				require"assets/include/conn.php";
				
		?>
		                <table class='tabletender'>
				            <tr class='tenderdetails'>
							    <td id="td_userid"><strong>User ID</strong></td>
							    <td id="td_firstname"><strong>Firstname</strong></td>
								<td id="td_surname"><strong>Surname</strong></td>
								<td id="td_mail"><strong>Email</strong></td>
								<td id="td_phone"><strong>Phone</strong></td>
								<td id="td_responsibility"><strong>responsibility</strong></td>
								<td id="td_message"><strong>message</strong></td>
							    <td id="td_date"><strong>Date</strong></td>
								<td id="td_delete_message"><strong>Action</strong></td>
							</tr>
						</table>
		<?php  
			 
				$sql = "select * from messages ORDER BY submission_date ASC";
				$qury = mysql_query($sql);
				while($row = mysql_fetch_array($qury))
					echo "
				        
				        <table class='tabletender'>
				            <tr class='tenderdetails'>
							    <td id='td_userid_row0'>$row[0]</td>
							    <td id='td_firstname_row0'>$row[1]</td>
								<td id='td_surname_row1'>$row[2]</td>
								<td id='td_email_row2'>$row[3]</td>
								<td id='td_phone_row3'>$row[4]</td>
								<td id='td_responsibility_row4'>$row[5]</td>
								<td id='td_message_row5'>$row[6]</td>
								<td id='td_date_row6'>$row[7]</td>
								<td id='td_delete_message_row'><input name='delete' type='submit' id='delete' value='delete'></td>
							</tr>
						</table>";
		?>
		</div></br>
		<p class="logo1description">Blog-post messages </p>
		<hr/>
		<div class="tenderheader">
		 <table class='tabletender'>
				            <tr class='tenderdetails'>
							    <td id="td_firstname"><strong>Comment ID</strong></td>
							    <td id="td_firstname"><strong>Comment</strong></td>
								<td id="td_firstname"><strong>Date of Submission</strong></td>
							    <td id="td_delete"><strong>Action</strong></td>
							</tr>
						</table>
		<?php  
			 
				$sql = "select * from comments ORDER BY submission_date ASC";
				$qury = mysql_query($sql);
				while($row = mysql_fetch_array($qury))
					echo "
				        
				        <table class='tabletender'>
				            <tr class='tenderdetails'>
							    
							    <td id='td_comments_row0'>$row[0]</td>
							    <td id='td_comments_row0'>$row[1]</td>
								<td id='td_comments_row0'>$row[2]</td>
								<td id='td_delete_row0'><input name='delete' type='submit' id='delete' value='delete'></td>
							</tr>
						</table>";
		?>
		</div><br/><br/>
		<p class="tenderheader">Form Four Results</p>
		Second term academic results
		<table class="tabletender">
		 <tr class="tenderdetails">
		 <td>FIRST NAME</td><td>SECOND NAME</td><td>ADMISSION NO:</td><td>POSITION</td><td>MARKS</td><td>GRADE</td>
		 </tr>
		 <tr>
		 <td>Mark</td><td>Chesire</td><td>5543</td><td>1</td><td>678</td><td>B+</td>
		 </tr>
		 <tr class="one">
		 <td>Alice</td><td>Limo</td><td>5542</td><td>1</td><td>700</td><td>B+</td>
		 </tr>
		 <tr>
		 <td>Mark</td><td>Chesire</td><td>5543</td><td>1</td><td>678</td><td>B+</td>
		 </tr>
		 <tr class="two">
		 <td>Alice</td><td>Limo</td><td>5542</td><td>1</td><td>700</td><td>B+</td>
		 </tr>
		 <tr>
		 <td>Mark</td><td>Chesire</td><td>5543</td><td>1</td><td>678</td><td>B+</td>
		 </tr>
		 <tr class="three">
		 <td>Alice</td><td>Limo</td><td>5542</td><td>1</td><td>700</td><td>B+</td>
		 </tr>
		 <tr>
		 <td>Mark</td><td>Chesire</td><td>5543</td><td>1</td><td>678</td><td>B+</td>
		 </tr>
		 <tr class="four">
		 <td>Alice</td><td>Limo</td><td>5542</td><td>1</td><td>700</td><td>B+</td>
		 </tr>
		 <tr>
		 <td>Mark</td><td>Chesire</td><td>5543</td><td>1</td><td>678</td><td>B+</td>
		 </tr>
		 <tr class="five">
		 <td>Alice</td><td>Limo</td><td>5542</td><td>1</td><td>700</td><td>B+</td>
		 </tr>
		</table>
		<br/>
		<p class="tenderheader">Form Three Results</p>
		<table class="tabletender">
		 <tr class="tenderdetails">
		 <td>FIRST NAME</td><td>SECOND NAME</td><td>ADMISSION NO:</td><td>POSITION</td><td>MARKS</td><td>GRADE</td>
		 </tr>
		 <tr>
		 <td>Mark</td><td>Chesire</td><td>5543</td><td>1</td><td>678</td><td>B+</td>
		 </tr>
		 <tr class="one">
		 <td>Alice</td><td>Limo</td><td>5542</td><td>1</td><td>700</td><td>B+</td>
		 </tr>
		 <tr>
		 <td>Mark</td><td>Chesire</td><td>5543</td><td>1</td><td>678</td><td>B+</td>
		 </tr>
		 <tr class="two">
		 <td>Alice</td><td>Limo</td><td>5542</td><td>1</td><td>700</td><td>B+</td>
		 </tr>
		 <tr>
		 <td>Mark</td><td>Chesire</td><td>5543</td><td>1</td><td>678</td><td>B+</td>
		 </tr>
		 <tr class="three">
		 <td>Alice</td><td>Limo</td><td>5542</td><td>1</td><td>700</td><td>B+</td>
		 </tr>
		 <tr>
		 <td>Mark</td><td>Chesire</td><td>5543</td><td>1</td><td>678</td><td>B+</td>
		 </tr>
		 <tr class="four">
		 <td>Alice</td><td>Limo</td><td>5542</td><td>1</td><td>700</td><td>B+</td>
		 </tr>
		 <tr>
		 <td>Mark</td><td>Chesire</td><td>5543</td><td>1</td><td>678</td><td>B+</td>
		 </tr>
		 <tr class="five">
		 <td>Alice</td><td>Limo</td><td>5542</td><td>1</td><td>700</td><td>B+</td>
		 </tr>
		</table>
		<br/>
		<p class="tenderheader">Form Two Results</p>
		<table class="tabletender">
		 <tr class="tenderdetails">
		 <td>FIRST NAME</td><td>SECOND NAME</td><td>ADMISSION NO:</td><td>POSITION</td><td>MARKS</td><td>GRADE</td>
		 </tr>
		 <tr>
		 <td>Mark</td><td>Chesire</td><td>5543</td><td>1</td><td>678</td><td>B+</td>
		 </tr>
		 <tr class="one">
		 <td>Alice</td><td>Limo</td><td>5542</td><td>1</td><td>700</td><td>B+</td>
		 </tr>
		 <tr>
		 <td>Mark</td><td>Chesire</td><td>5543</td><td>1</td><td>678</td><td>B+</td>
		 </tr>
		 <tr class="two">
		 <td>Alice</td><td>Limo</td><td>5542</td><td>1</td><td>700</td><td>B+</td>
		 </tr>
		 <tr>
		 <td>Mark</td><td>Chesire</td><td>5543</td><td>1</td><td>678</td><td>B+</td>
		 </tr>
		 <tr class="three">
		 <td>Alice</td><td>Limo</td><td>5542</td><td>1</td><td>700</td><td>B+</td>
		 </tr>
		 <tr>
		 <td>Mark</td><td>Chesire</td><td>5543</td><td>1</td><td>678</td><td>B+</td>
		 </tr>
		 <tr class="four">
		 <td>Alice</td><td>Limo</td><td>5542</td><td>1</td><td>700</td><td>B+</td>
		 </tr>
		 <tr>
		 <td>Mark</td><td>Chesire</td><td>5543</td><td>1</td><td>678</td><td>B+</td>
		 </tr>
		 <tr class="five">
		 <td>Alice</td><td>Limo</td><td>5542</td><td>1</td><td>700</td><td>B+</td>
		 </tr>
		</table>
		<br/>
		<p class="tenderheader">Form One Results</p>
		<table class="tabletender">
		 <tr class="tenderdetails">
		 <td>FIRST NAME</td><td>SECOND NAME</td><td>ADMISSION NO:</td><td>POSITION</td><td>MARKS</td><td>GRADE</td>
		 </tr>
		 <tr>
		 <td>Mark</td><td>Chesire</td><td>5543</td><td>1</td><td>678</td><td>B+</td>
		 </tr>
		 <tr class="one">
		 <td>Alice</td><td>Limo</td><td>5542</td><td>1</td><td>700</td><td>B+</td>
		 </tr>
		 <tr>
		 <td>Mark</td><td>Chesire</td><td>5543</td><td>1</td><td>678</td><td>B+</td>
		 </tr>
		 <tr class="two">
		 <td>Alice</td><td>Limo</td><td>5542</td><td>1</td><td>700</td><td>B+</td>
		 </tr>
		 <tr>
		 <td>Mark</td><td>Chesire</td><td>5543</td><td>1</td><td>678</td><td>B+</td>
		 </tr>
		 <tr class="three">
		 <td>Alice</td><td>Limo</td><td>5542</td><td>1</td><td>700</td><td>B+</td>
		 </tr>
		 <tr>
		 <td>Mark</td><td>Chesire</td><td>5543</td><td>1</td><td>678</td><td>B+</td>
		 </tr>
		 <tr class="four">
		 <td>Alice</td><td>Limo</td><td>5542</td><td>1</td><td>700</td><td>B+</td>
		 </tr>
		 <tr>
		 <td>Mark</td><td>Chesire</td><td>5543</td><td>1</td><td>678</td><td>B+</td>
		 </tr>
		 <tr class="five">
		 <td>Alice</td><td>Limo</td><td>5542</td><td>1</td><td>700</td><td>B+</td>
		 </tr>
		</table>
<br/>
        <div id="">
		<p><a href="printpdf.php"><i class="fa fa-download"></i>&nbsp;download</a></p>
	</div>
	<br/><br/>
    </div>
	
	
	
                        
    </div>

        <hr/>
    </div>
    <!-- /.container -->

    <div class="container">

        <hr>

        
            
                
                    
                
            
        

    </div>
    <!-- /.container -->
	
	    <!-- Footer -->
        
     <?php include"admin-footer.php"?>
<!-- Footer-->

    <!-- JavaScript -->
    <script src="admin/js/jquery-1.10.2.js"></script>
    <script src="admin/js/bootstrap.js"></script>
    <script src="admin/js/khs.js"></script>

</body>

</html>
