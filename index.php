<?php
session_start();
 require('dbconfig.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>Online feedback System</title>
	
	<!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="background:#66CCFF">
        <div class="container" >
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php" style="color:#FFFFFF">Feedback Management System</a>
				
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    
					 <li style="color:#FFFFFF">
                        <a style="color:#FFFFFF" href="index.php"><i class="fa fa-home fa-fw"></i>Home/Login</a>
                    </li>
					
					<li><a style="color:#FFFFFF" href="index.php?info=registration"><i class="fa fa-sign-out fa-fw"></i>Student Registration</a></li>
                    
                    <li><a style="color:#FFFFFF" href="index.php?info=regfac"><i class="fa fa-sign-out fa-fw"></i>Faculty Registration</a></li>
						
<!--                    <li class="dropdown">
                        <a style="color:#FFFFFF" href="#" class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-sign-in fa-fw"></i>Login
                        <span class="caret"></span></a>
                        <ul class="dropdown-menu">

                          <li><a href="index.php?info=login">Student</a></li>
                          <li><a href="index.php?info=faculty_login">Faculty</a></li> 
                          <li><a href="admin">Admin</a></li> 
                        </ul>
                      </li> -->

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

<?php 
        @$info=$_GET['info'];
        if($info!="")
        {
            if($info=="login") 	 include('login.php');

              else if($info=="faculty_login") 	 include('faculty_login.php');

             else if($info=="registration") 	include('registration.php');
            
             else if($info=="regfac") 	include('reg_faculty.php');
        }
        else 
            include('login.php'); ?>
    <!-- /.container -->
	
	<div class="navbar-fixed-bottom nav navbar-inverse text-center" style="padding:15px;height:40px; background:#66CCFF">
		<!--<span style="color:#FFFFFF">Developed for RIET College </span>-->
	</div>
    <!-- jQuery -->
    <script src="css/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="css/bootstrap.min.js"></script>

</body>

</html>