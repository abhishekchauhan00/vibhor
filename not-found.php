<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Welcome to RK International School</title>

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

    <div class="loader-backdrop">           <!-- Loader -->
        <div class="loader">
            <div class="ball-1"></div>
            <div class="ball-2"></div>
        </div>
    </div>

    <header>            <!-- Header = Topbar + Navigation Bar -->
        <div class="topbar">            <!-- Dark Blue Topbar -->
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <span class="call-us"><i class="fa fa-phone"></i> +91-7900638867 / +91-9456638800 </span>          <!-- Change Phone Number Here -->
                    </div>

                </div>
            </div>
        </div>

        <nav class="navbar navbar-default"> <!-- Navigation Bar -->
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

    <div class="page-header">
        <div class="container">
            <h1>Page Not Found</h1>
            <ul class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li class="active">Page Not Found</li>
            </ul>
        </div>
    </div>

    <div class="container">
        <div class="col-sm-12">
            <div class="row">
                <div class="not-found">
                    <span class="number">4<span class="color2">0</span>4</span>
                    <h2>Psst! Looks like you're lost.</h2>
                    <br/><br/>
                    <a href="index.php" class="btn btn-primary">Home Page</a>
                </div>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>

	<div id="back"><i class="fa fa-angle-up"></i></div>     <!-- Back To Top -->

    <!--jQuery Version 2.2.1-->
    <script src="js/jquery.min.js" type="text/javascript"></script>

    <!--Bootstrap Framework version 3.3.7-->
    <script src="js/bootstrap.min.js" type="text/javascript"></script>

    <!--Custom Script-->
    <script src="js/main.js" type=text/javascript></script>

</body>

</html>
