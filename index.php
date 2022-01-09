<?php 
include('connection.php');
session_start();
 ?>

<html>

<head>
    <title>Online Notice Board</title>
    <link rel="stylesheet" href="css/bootstrap.css" />
    <script src="js/jquery_library.js"></script> 
    <script src="css/style.css"></script>
    
</head>

<body style="background-color: #fbf4e5" id="body">
    <nav class="navbar navbar-default navbar-fixed-top" style="background:#212f3d">
        <div class="container">

            <ul class="nav navbar-nav navbar-left">
                <li><a href="index.php"><strong><img style="width:130px; height:30px" src="images/brand.png"></strong></a></li>


                <li><a href="index.php?option=about"><span class="glyphicon glyphicon-user"></span> About</a></li>



                <li><a href="index.php?option=contact"><span class="glyphicon glyphicon-phone"></span>Contact</a></li>

            </ul>


            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php?option=New_user"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="index.php?option=login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>

            </ul>



        </div>
    </nav>

    <div class="container">
        <div class="row">
            <!-- container -->
            <div class="col-sm-8">
                <?php 
		@$opt=$_GET['option'];
		
		if($opt!="")
		{
			if($opt=="about")
			{
			include('about.php');
			}
			else if($opt=="contact")
			{
			include('contact.php');
			}
			
			else if($opt=="New_user")
			{
			include('registration.php');
			}
			
			
			else if($opt=="login")
			{
			include('login.php');
			}
		}
		
		
?>


            </div>
        </div>
    </div>



    <br />
    <br />
    <br />
    <br />

    <br>
    <br>
    
  

    <!-- footer-->
    <nav class="navbar navbar-default navbar-bottom" style="background:#212f3d">
        <div class="container">

            <ul class="nav navbar-nav navbar-left">


                <li><a href="https://twitter.com/fahmidtasin"> Developed by Fahmid Shafath Tasin</a></li>

            </ul>

        </div>
    </nav>
    <!-- footer-->

</body>

</html>
