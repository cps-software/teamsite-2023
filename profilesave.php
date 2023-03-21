<?php session_start(); ?>

<!DOCTYPE html>
<!-- Save Profile to Database` -->

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Teamsite | Save Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="./bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="./bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
    
    <style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: <?php print($_SESSION['fav_color']); ?>;	}
    </style>
    
    <link href="./bootstrap/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../bootstrap/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="../assets/ico/favicon.png">
  </head>

  <body>
 		<!-- Check for valid session -->
		<?php include "./inc_session.php"; ?>
  
  	<div class="container">
  	
		<!-- ********** PHP Code Section ********** -->
		<?php
			$uid = $_SESSION['user_id'];
			$uname = $_SESSION['user_name'];
			$stid = $_POST['station'];
			$fname = $_POST['user-first-name'];
			$lname = $_POST['user-last-name'];
			$wphone = $_POST['user-work-phone'];
			$mphone = $_POST['user-mobile-phone'];
			$email = $_POST['user-email-address'];
			$urole = $_POST['user-job-role'];
			$pcomputer = $_POST['user-primary-computer'];
			$favcolor = $_POST['user-favorite-color'];
			$action = $_POST['submit'];

			if($action == "Save")
			{
				// build UPDATE query for username
				$query_update_profile = "UPDATE user_profile SET station_id='" . $stid . "'" . ", firstname='" . $fname . "'" . ",  lastname='" . $lname . "'" . ", work_phone='" . $wphone . "'" . ", mobile_phone='" . $mphone . "'" . ", email_address='" . $email . "'" . ", user_role='" . $urole . "'" . ", primary_computer='" . $pcomputer . "'" . ", favorite_color='" . $favcolor . "' WHERE id='" . $uid . "'";

	 			// Include MySQL server and Magellan database connection Include File
				include "./inc_dbconnect.php";

				// Run UPDATE query	
				$result = mysqli_query($connection, $query_update_profile);
				if (!$result) {
	  	  			die ('Select Query Failed: ' . mysql_error());
				} else {
					// print("Select Query Successful... ");
					$_SESSION['station_id']=$stid;
					$_SESSION['fav_color']=$favcolor;
				}
	
				mysqli_close($connection);
				
		  		print("<div class='hero-unit'>");
			  	print("<h1>Profile Saved</h1>");
			  	print("<hr />");
			  	print("<p>");
   				print("<a href='./profile.php' class='btn btn-primary btn-large'>My Profile</a>");
	  			print("&nbsp;");
  	  			print("<a href='./home.php' class='btn btn-large'>Home</a>");
	  			print("</p>");
				print("</div>");
			} else {
		  		print("<div class='hero-unit'>");
			  	print("<h1>Canceled</h1>");
			  	print("<hr />");
			  	print("<p>");
   				print("<a href='./profile.php' class='btn btn-primary btn-large'>My Profile</a>");
	  			print("&nbsp;");
  	  			print("<a href='./home.php' class='btn btn-large'>Home</a>");
	  			print("</p>");
				print("</div>");
			}
		?>

	</div> <!-- /container -->
  </body>
</html>
