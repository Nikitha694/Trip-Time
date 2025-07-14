<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<html>
    <head>
        <title>Guide Selection</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Tourism Management System In PHP" />
<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href="css/font-awesome.css" rel="stylesheet">
<!-- Custom Theme files -->
<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
    <script>
         new WOW().init();
    </script>
</head>
<body bgcolor="SpringGreen">
    <?php include('includes/header.php');?>
<!--- banner ---->
<div class="banner-3">
    <div class="container">
        <h1 class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;"> TT- Registration Form</h1>
    </div>
</div>
<!--- /banner ---->
<div class="privacy">
    <div class="container">
        <h2 class="wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;color:#00ad54;"><b>Registration Form</b></h2>
        <form method="post" action="l.php">
            <p style="width: 350px;">
                <b> Firstname:</b><br>
                <input type="text" name="firstname" id="fname" placeholder="firstname" class="form-control" required="">
            </p>
            <p style="width: 350px;">
                <b>Lastname:</b><br>
                <input type="text" name="Lastname" id="lname" placeholder="lastname" class="form-control" required="">
            </p>
             <p style="width: 350px;">
                <b> Tour:</b><br>
                <input type="radio" name="Tour" value="Araku" id="Araku" required="">Araku</input>&nbsp &nbsp &nbsp<a href="qr.php">Araku Guide Selection</a><br>
                <input type="radio" name="Tour" value="Vizag" id="Vizag" required>Vizag</input>&nbsp &nbsp &nbsp<a href="vizag.php">Vizag Guide Selection</a><br>
                <input type="radio" name="Tour" value="Amaravathi" id="Amaravathi"required>Amaravathi</input>&nbsp &nbsp &nbsp<a href="amaravathi.php">Amaravathi Guide Selection</a><br>
                <input type="radio" name="Tour" value="Tirupati" id="Tirupati"required>Tirupati</input>&nbsp &nbsp &nbsp<a href="qr.php">Tirupati Guide Selection</a><br>
            </p>
            <p style="width: 350px;">
                <b>Phone:</b><br>
                <input type="text" name="number" id="number" placeholder="Phone Number" class="form-control" required>
                <b>Number of Members:</b></br>
                <input type="text" name="Members" id="Members" placeholder="No.of Members" class="form-control" required="">
                <b>Start Date:</b><br> 
                <input type="date" name="stdate" id="stdate" class="form-control" required="">
                <b>End Date:</b>
                <input type="date" name="endate" id="endate" class="form-control" required="">
                <b>Address:</b>
                <textarea rows=4 cols=50 class="form-control"></textarea>
            </p>
                    <?php if($_SESSION['login'])
                    {?>
                        <li class="spe">
                        <button type="submit" name="Book" class="btn-primary btn">Submit</button>
                        </li>           
                        <?php } else {?>
                            <li class="sigi" align="center" style="margin-top: 1%">
                            <a href="#" data-toggle="modal" data-target="#myModal4" class="btn-primary btn">Submit</a></li>
                            <?php } ?>
        </form>
    </div>
</div>
        <?php include('includes/footer.php');?>
<!-- signup -->
<?php include('includes/signup.php');?>         
<!-- //signu -->
<!-- signin -->
<?php include('includes/signin.php');?>         
<!-- //signin -->
<!-- write us -->
<?php include('includes/write-us.php');?>
        </body>
        </html>
        <?php
        ?>