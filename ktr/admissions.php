<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="uploads/logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admissions</title>
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
                <h1 class="blogpost-page-header"><i class="fa fa-th-list" id="fa-fa-comments"></i>&nbsp;Admissions 
                </h1>
                <ol class="breadcrumb">
                    <li id="home"><a href="index.php"><i class="fa fa-home"></i>&nbsp;Home</a>
                    </li>
                    <li class="active" id="title">&laquo;&nbsp;Homepage</li>
                </ol>
            </div>
        </div>
        <div>
        <img src="uploads/admissions.jpg" id="admissions-logo" alt="picha"></img>
        </div>
        <br/>
        <div class="academicinfo">
            Students are selected based on academic merit and quota as per education policy.Academic merit is based on perfotmance at K.C.P.E exams.It's quoata system sees to it that the school admits students from every county in the county without bias to students from public schools as the current education system requires.
            School Uniform<br/>As per the school; school attire should be as follows:<br/>
            <span class="examinable-subjects">Boys Uniform</span><br/>   
                <ol>
                    <span class="check"> <li>Light Grey Strectch Shorts Mock Fly</li></span>
                    <span class="check"><li>Whit Shirt with Logo</li></span>
                    <span class="check"><li>School Tie Elastic</li></span>
                    <span class="check"> <li>Maroon Art Tabard</li></span>
                    <span class="check"><li>Navy pullover and Navy Slipover with logo Round Neck</li></span>
                    <span class="check"><li>Grey Socks</li></span>
                    <span class="check"><li>Black shoes only</li></span>
                    <span class="check"><li>Maroon Music Folders</li></span>
                    <span class="check"><li>White Sport Shoes Only</li></span>
                </ol> <br/>
                <span class="examinable-subjects">Girls Uniform</span>
                    <ol>
                        <span class="check"> <li>School Tartan pleated Skirt</li></span>
                        <span class="check"><li>White Peter Pan Blouse with Logo</li></span>
                        <span class="check"><li>Maroon Reading Pouch</li></span>
                        <span class="check"> <li>Maroon Art Tabard</li></span>
                        <span class="check"><li>Navy pullover and Navy Slipover with logo Round Neck</li></span>
                        <span class="check"><li>Navy Socks or Full tights</li></span>
                        <span class="check"><li>Black shoes only</li></span>
                        <span class="check"><li>Maroon Music Folders</li></span>
                        <span class="check"><li>White Sport Shoes Only</li></span>
                    </ol> <br/>
                    <span class="examinable-subjects">Any admission Query? Contact us below</span>
                    <!--form -->
            <?php  
             
                require"assets/include/conn.php";
                if(isset($_POST['submit'])){
                $firstname = $_POST["firstname"];
                $surname = $_POST["surname"];
                $email_address = $_POST["email_address"];
                $phone = $_POST["phone"]; 
                $responsibility = $_POST["responsibility"];
                $message = $_POST["message"]; 
                $name="";
                $alert="";
                $sqlquery = mysqli_query($dblink,"INSERT INTO messages VALUES (default,'$firstname','$surname','$email_address','$phone','$responsibility','$message',now())");
                $msg = "Thanks ".$name.", Message Submitted Successfully".$alert.",We will act on it:"."<br/></br/>";
                    
                }
            ?>
            <div style="color:red"><?php echo @$msg?></div>
            <div style="color:red">* (required.)</div>
            <form name="contactForm" onsubmit="return(checkForm());" method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="form-group col-lg-4">
                <label for="input1">First name</label>
                    <input type="text" name="firstname" class="form-control" id="input1"  value="" placeholder="Firstname">
                    
                    <div style="color:red">*</div>
                        </div>
                            <div class="form-group col-lg-4">
                                <label for="input1">Second name</label>
                                    <input type="text" name="surname" class="form-control" id="input1" placeholder="Surname">
                                    
                                    <div style="color:red">*</div>
                                        </div>
                                            <div class="form-group col-lg-4">
                                                <label for="input2">Email Address</label>
                                                    <input type="email" name="email_address" class="form-control" id="admission-mail" placeholder="Email Address">
                                                    
                                                    <div style="color:red">*</div>
                                                        </div>
                                                            <div class="form-group col-lg-4">
                                                                <label for="input1">Phone Number</label>
                                                                <input type="text" name="phone" class="form-control" id="input1"  Placeholder="Phone number">
                                                                
                                                                <div style="color:red">*</div>
                                                            </div>
                                                        <div class="form-group col-lg-4">
                                                    <label for="input1">Responsibility</label>
                                                <input type="text" name="responsibility" class="form-control" id="input1"   placeholder="Parent/teacher/Student">
                                                
                                                <div style="color:red">*</div>
                                            </div>
                                        <div class="clearfix"></div>
                                    <div class="form-group col-lg-12">
                                <label for="input1">Message</label>
                            <textarea name="message" class="form-control" rows="6" id="admission-message" placeholder="Enter your message here"></textarea>
                            
                            <div style="color:red">*</div>
                        </div>
                    <div class="form-group col-lg-12">
                <input type="submit" name="submit" value="Send" class="btn btn-success">
            </div>
        </div>
    </form>
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
    <script src="js-js/validate_user_input4.js"></script>
    <script src="js-js/validate_contact_input.js"></script>
</body>
</html>
