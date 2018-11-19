<?php

  if (isset($_SESSION['userLoggedIn'])) {
    $userLoggedIn = $_SESSION['userLoggedIn'];
    echo "<script>userLoggedIn = '$userLoggedIn';</script>";
  }
?>
<html>
<head>
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<title>Welcome to Auténtico!</title>
    	<link rel="stylesheet" href="assets/css/bootstrap.css" >
    	<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
    	<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous"> -->
    	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    	<link rel="stylesheet" type="text/css" href="assets/css/landing.css">
      <link rel="stylesheet" type="text/css" href="assets/css/register.css">
      <link rel="stylesheet" type="text/css" href="assets/css/browse.css">
      <link rel="stylesheet" type="text/css" href="assets/css/product.css">
      <?php include("includes/config.php"); ?>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="assets/js/register.js"></script>
      <script src="assets/js/script.js"></script>
</head>
<body>
    <div id="background">
    	<nav class="navbar navbar-inverse">
     		<div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        		<div class="navbar-header">
          		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
    		        <span class="sr-only">Toggle navigation</span>
    		        <span class="icon-bar"></span>
    		        <span class="icon-bar"></span>
    		        <span class="icon-bar"></span>
    	      	</button>
              <a class="navbar-brand" href="landing.php"><i class="fab fa-autoprefixer"></i> Auténtico!</a>
            </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li class="active"><a href="landing.php">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="browse.php">Browse</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="register.php">Log-In <i class="fas fa-user"></i></a></li>
                </li>
              </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>