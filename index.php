<?php
    session_start();
    session_destroy();
?>

<!DOCTYPE html>
<!-- Teamsite Landing/Signin Screen -->

<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Teamsite | Sign In</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Teamsite Web Application">
        <meta name="author" content="csylvester">

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
        <!-- ********** Main Area ********** -->
        <div class="container">
            <div class="row">
                <div class="span12">
                    <div class="well"> <!-- newer Bootstrap version calls this "card" -->
                        <h1>Teamsite</h1>
                        This is a restricted website for authorized use only.
                        <br /><br />
            
                        <!-- ********** Signin Form ********** -->
                        <form class="form-signin" method="post" action="validate.php">
                            <h2 class="form-signin-heading">Please sign in</h2>
                            <label>Name
                                <input type="text" name="user-name" class="input-block-level" autofocus>
                            </label>
                            <label>Password
                                <input type="password" name="user-password" class="input-block-level">
                            </label>
                            <label class="checkbox">
                                <input type="checkbox" value="remember-me"> Remember me
                            </label>
                            <input class="btn btn-primary" type="submit" name="submit" value="Sign In">
                            <a href="./about/" class="btn btn-link">Learn More</a>
                        </form>
                    </div> <!-- well -->
                </div> <!-- span12 -->
            </div> <!-- row -->
        </div> <!-- /container -->

        <div class="container">
            <br />
            <footer>
                <?php
                    print("<p style='color:darkslategray;font-size:small'>Copyright (c) 2013 - 2023 by Chuck Sylvester</p>");
                ?>
            </footer>
        </div>
    </body>
</html>
