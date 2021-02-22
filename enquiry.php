<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>Enquiry| RK International School</title>

<!--Bootstrap Framework Version 3.3.7 -->
<link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">

<!--Font Awesome Version 4.5.0 -->
<link href="css/font-awesome.min.css" type="text/css" rel="stylesheet">

<!--Stylesheet -->
<link href="css/style.css" type="text/css" rel="stylesheet">
<link href="css/components.css" type="text/css" rel="stylesheet">

<!--Google Fonts-->
<link href='https://fonts.googleapis.com/css?family=Oswald:300,700,400' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400italic,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

<!-- Respond.js and HTML shiv provide HTML5 support in older browsers like IE9 and 8 -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<div class="loader-backdrop"> <!-- Loader -->
  <div class="loader">
    <div class="ball-1"></div>
    <div class="ball-2"></div>
  </div>
</div>
<header> <!-- Header = Topbar + Navigation Bar -->
  <div class="topbar"> <!-- Dark Blue Topbar -->
    <div class="container">
      <div class="row">
        <div class="col-sm-6"> <span class="call-us"><i class="fa fa-phone"></i> +91-7900638867 / +91-9456638800 </span> <!-- Change Phone Number Here --> 
        </div>
      </div>
    </div>
  </div>
  <nav class="navbar navbar-default"> 
    <!-- Navigation Bar -->
    <div class="container-flude" style="margin: 0 10px;">
      <div class="navbar-header">
       	<!-- <h3>RK INTERNATIONAL</h3>-->
        <a class="navbar-brand" href="index.php"><img src="images/logo3.png" alt="" style="width: 100%;"></a> 
        <!-- Replace with your Logo -->  
      </div><button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navigation" aria-expanded="false"> 				<span class="sr-only">Toggle Menu</span><i class="fa fa-bars"></i> <span>Menu</span> </button>
      <?php include 'menu.php' ?>
    </div>
  </nav>
</header>
<div class="page-header" style="padding: 95px 10px 5px 10px;">
  <div class="container">
    <h1>Enquiry Form </h1>
    <ul class="breadcrumb">
      <li class="active">Session - 2021-2022 </li>
    <!--  <li>Session (2021-22)</li>-->
    </ul>
  </div>
</div>
<div class="container mt-40 mb-60">
  <div class="row">
    <div class="col-sm-7 mt-20">
      <h4 class="heading">Enquiry Form <span class="color2"> Session (2021-22)</span></h4>
    <form class="form" action="mail/mail.php" onsubmit="return validate();" method="post">
    <div class="form-group">
        <input class="form-control" type="text" name="txtname" id="txtname" placeholder="Student Name"> 
        <input class="form-control" type="text" name="txtage" id="txtage" placeholder="Age"> 
       <!-- <input class="form-control" type="text" name="txtdob" id="txtdob" placeholder="Date of Borth [dd-mm-yyyy]">-->
        <input class="form-control" type="text" name="txtclass" id="txtclass" placeholder="For Admission in Class">
        <input class="form-control" type="email" name="txtemail" id="txtemail" placeholder="Email address"> 
        <input class="form-control" type="phone" name="txtphone" id="txtphone" placeholder="Phone No" maxlength="10">
        <input class="form-control" type="text" name="txtpschool" id="txtpschool" placeholder="Previous School's Name"> 
        <textarea class="form-control" rows="3" name="txtmessage" id="txtmessage" placeholder="Message"></textarea>
     
        <button class="btn btn-primary btn-effect" name="send" id="send" value="Submit">SEND </button>
        <button class="btn btn-primary btn-effect" name="Reset" type="reset" value="Reset">RESET </button>
 <?php error_reporting(0); if ($_GET["err"]!="") echo   "<div class=\"breadcrumb\" style=\"color:#C00; font-weight:600; background:#FFC;\">". $_GET["err"]."</div>";?>
    </div>
</form>
    </div>
    <div class="col-sm-5 mt-20">

    <h4 class="heading"> &nbsp; &nbsp; <span class="color2"> &nbsp;</span></h4>    <img src="images/enqu.jpg"/>
      <!--  <h4 class="heading">Or Contact us <span class="color2">directly</span></h4>
       <address>
      <strong>RK International Schools</strong> <br/>
      <span>Pocket E, Shradha Puri Phase-II,<br/>
      Opp. Kailashi Hospital, Behind Hotel Orien,<br/>
      NH-58 Bypass, <br/>
      Meerut</span>
      </address>
      <a href="tel:+91-9568149464" class="phone"><i class="fa fa-phone fa-fw"></i> +91-7900638867</a> <a href="tel:+91-9456638800" class="phone"><i class="fa fa-phone fa-fw"></i> +91-9456638800</a> <a href="mailto:school@rkinternational.org" class="email"><i class="fa fa-envelope fa-fw"></i> school@rkinternational.org, rkimeerut@gmail.com</a> <br/>
      <h5 class="heading">We're <span class="color2">Social</span></h5>
      <ul class="social">
        <li><a href="https://twitter.com/meerut_rk"><i class=" fa fa-facebook"></i></a></li>
        <li><a href="https://facebook.com/rki.sharadhapuri.3"><i class=" fa fa-twitter"></i></a></li>
        <li><a href="mailto:rkimeerut@gmail.com"><i class=" fa fa-envelope"></i></a></li>
      </ul>-->
    </div>
    <div class="clearfix"></div>
  </div>
</div>
<?php include 'footer.php'; ?>
<div id="back"><i class="fa fa-angle-up"></i></div>
<!-- Back To Top --> 

<!--jQuery Version 2.2.1--> 
<script src="js/jquery.min.js" type="text/javascript"></script> 

<!--Bootstrap Framework version 3.3.7--> 
<script src="js/bootstrap.min.js" type="text/javascript"></script> 
<script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script> 

<!--jQuery Form for Ajax Submission--> 
<script src="js/jquery.form.min.js" type="text/javascript"></script> 

<!--jQuery Validate for Form Validation before submission--> 
<script src="js/jquery.validate.min.js" type="text/javascript"></script> 

<!--Custom Script--> 
<script src="js/main.js" type=text/javascript></script>
</body>
</html>