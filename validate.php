<?php session_start(); ?>

<!DOCTYPE html>
<!-- Get credentials from Sign In page and verify valid user -->

<html lang="en">
    <head>
	    <meta charset="utf-8" />
		<title>Validate</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- bootstrap styles -->
        <link href="./bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="./bootstrap/css/bootstrap-responsive.css" rel="stylesheet">

        <!-- cps styles -->
        <link href="./style/teamsite.css" rel="stylesheet">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src="../bootstrap/js/html5shiv.js"></script>
        <![endif]-->

        <!-- Fav and touch icons
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
        <link rel="shortcut icon" href="../assets/ico/favicon.png">
        -->
	</head>
	<body>
		<!-- ********** JavaScript: load the home.php page ********** -->
		<script>
            function getHome() {
                window.location = "./home.php";
            }
		</script>

        <?php
        print($_POST["user-name"] . "<br />");
        print($_POST["user-password"] . "<br />");
        ?>
	
        <div class="container">
            <div class="row">
                <div class="span12">
                    <div class="well">
                        <h1>Teamsite</h1>
                        This is a restricted website for authorized use only.<hr />

                        <?php
                        $uname=$_POST["user-name"];
                        $upass=$_POST["user-password"];
                        $continue = 0;
                        // Include MariaDB server and teamsite database connection Include File
                        include "./inc_dbconnect.php";

                        // build SELECT query for username
                        $query_username = "SELECT * FROM user_account WHERE username='" . $uname . "'";
                
                        // Run SELECT query	against user_account
                        $result = mysqli_query($connection, $query_username);
                        if (!$result) {
                            die ('Select Query Failed: ' . mysql_error());
                        } else {
                            print("Select Query Successful <br /><br />");
                        }			
            
                        // Get Value from selected row		
                        $row1 = mysqli_fetch_array($result);
                        if (!$row1) {
                            print("No Rows Found" . mysql_error());
                            print("<br /><br />");
                        } else {
                            print("Row Found");
                            print($row1['id'] . " | " . $row1['username'] . " | " . $row1['password']);
                            print("<br /><br />");
                        }			

                        // Verify Username - check for exact match and input isn't blank
                        if ($uname == $row1['username'] and $uname != "") {
                            print("Name: ");
                            print("<i class='icon-ok'></i>");
                            print("<br />");
                            $continue += 1;
                        } else {
                            print("Name: ");
                            print("<i class='icon-remove'></i>");
                            print("<br />");
                        }

                        // Verify Password - check for exact match and input isn't blank
                        if ($upass == $row1['password'] and $upass != "") {
                            print("Password: ");
                            print("<i class='icon-ok'></i>");
                            print("<br />");
                            $continue +=1;
                        } else {
                            print("Password: ");
                            print("<i class='icon-remove'></i>");
                            print("<br />");
                        }
                        
                        if ($continue == 2){
                            // store session data
                            $_SESSION['user_id']=$row1['id'];
                            $_SESSION['user_name']=$row1['username'];
                            // build SELECT query for station_id and favorite color
                            $query_stationid = "SELECT * FROM user_profile WHERE user_account_id='" . $_SESSION['user_id'] . "'";
                            // Run SELECT query	against user_profile
                            $result = mysqli_query($connection, $query_stationid);
                            if (!$result) {
                                die ('Select Query Failed: ' . mysql_error());
                            } else {
                			    print("<br />Select Query Successful <br /><br />");
                            }			
                            // Get Value from selected row		
                            $row2 = mysqli_fetch_array($result);
                            if (!$row2) {
                                print("No Rows Found" . mysql_error());
                                print("<br /><br />");
                            } else {
                                print("Row Found");
                                print("<br /><br />");
                            }			
                            $_SESSION['station_id']=$row2['station_id'];
                            $_SESSION['fav_color']=$row2['favorite_color'];

                            // Call JavaScript function to load home page, either immediately or after a short delay
                            print("<hr />");
                            print("Redirecting to home page...<br />");
                            print("<script>getHome();</script>");
                            // print("<script type='text/javascript'>setTimeout(function() {getHome()},3000);</script>");
                            print("<h3>");
                            print("<a class='btn' href='./home.php' >Continue to Site</a>");
                            print("</h3>");
                        }
                        else
                        {
                            // Destroy Session
                            session_destroy();
                            print("<hr />");
                            print("<h3>");
                            print("<a class='btn' href='./index.php' >Try Again</a>");
                            print("</h3>");
                        }
                        mysql_close($connection);						
                        ?>

                    </div> <!-- well -->
                </div> <!-- span12 -->
            </div> <!-- row -->
        </div> <!-- /container -->

	</body>
</html>
