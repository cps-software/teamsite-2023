<?php session_start(); ?>

<!DOCTYPE html>
<!-- Teamsite Home Page -->

<html lang="en">
  <head>
  	<meta charset="utf-8">
    <title>Teamsite | Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Le styles -->
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css" media="screen">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap-responsive.css" media="screen">
    
  	<style type="text/css">
  		body	{	padding-top: 60px;
  						padding-bottom: 18px;
  						background-color: <?php print($_SESSION['fav_color']); ?>;	}
  	</style>
  	
		<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->  	
  </head>
  <body> 		
    <!-- jQuery and Bootstrap js Scripts -->
		<!-- First version of jquery.js is if connected to Internet, second is local copy -->
		<!-- <script src="http://code.jquery.com/jquery.js"></script> -->
    <script src="./bootstrap/js/jquery191.js"></script>
    <script src="./bootstrap/js/bootstrap.js"></script>

		<!-- Check for valid session -->
		<?php include "./inc_session.php"; ?>

 		<!-- Include Menu Template Code from Include File -->
		<?php include "./inc_menu_index.php"; ?>

		<div class="container">
	    <h2>teamsite</h2>
   		<p>Welcome to the Teamsite online application. Build great things.<br /><br />
   		</p>
   		
		</div> <!-- container -->

		<!-- ********** Landing Page Image ********** -->
		<?php
			$stationid = $_SESSION['station_id'];
			$footername = "Chuck Sylvester";

			switch ($stationid)
			{
			case 826:
			  $home_image_src="./image/826_alexandriava-940x408.jpg";
			  $home_image_alt="Alexandria National Cemetery, VA";
			  $home_image_width="940";
			  $home_image_height="408";
			  break;
			case 805:
			  $home_image_src="./image/805_calverton-940x417.jpg";
			  $home_image_alt="Calverton National Cemetery, NY";
			  $home_image_width="940";
			  $home_image_height="417";
			  break;
			case 832:
			  $home_image_src="./image/832_biloxi-940x418.jpg";
			  $home_image_alt="Biloxi National Cemetery, MS";
			  $home_image_width="940";
			  $home_image_height="418";
			  break;
			case 839:
			  $home_image_src="./image/839_culpeper-940x418.jpg";
			  $home_image_alt="Culpeper National Cemetery, VA";
			  $home_image_width="940";
			  $home_image_height="418";
			  break;
			case 911:
			  $home_image_src="./image/911_florida-940x411.jpg";
			  $home_image_alt="Florida National Cemetery, FL";
			  $home_image_width="940";
			  $home_image_height="411";
			  break;
			case 888:
			  $home_image_src="./image/888_ftlogan-819x367.jpg";
			  $home_image_alt="Ft. Logan National Cemetery, CO";
			  $home_image_width="940";
			  $home_image_height="421";
			  break;
			case 890:
			  $home_image_src="./image/890_ftmcpherson-940x401.jpg";
			  $home_image_alt="Ft. McPherson National Cemetery, NE";
			  $home_image_width="940";
			  $home_image_height="401";
			  break;
			case 101:
			  $home_image_src="./image/101_ncso-940x462.jpg";
			  $home_image_alt="Jefferson Barracks National Cemetery, MO";
			  $home_image_width="940";
			  $home_image_height="462";
			  break;
			case 894:
			  $home_image_src="./image/894_ftsnelling-940x417.jpg";
			  $home_image_alt="Ft. Snelling National Cemetery, MN";
			  $home_image_width="940";
			  $home_image_height="417";
			  break;
			case 923:
			  $home_image_src="./image/923_greatlakes-940x420.jpg";
			  $home_image_alt="Great Lakes National Cemetery, MI";
			  $home_image_width="940";
			  $home_image_height="420";
			  break;
			case 928:
			  $home_image_src="./image/928_jacksonville-940x406.jpg";
			  $home_image_alt="Jacksonville National Cemetery, FL";
			  $home_image_width="940";
			  $home_image_height="406";
			  break;
			case 852:
			  $home_image_src="./image/852_jeffersonbarracks-940x416.jpg";
			  $home_image_alt="Jefferson Barracks National Cemetery, MO";
			  $home_image_width="940";
			  $home_image_height="416";
			  break;
			case 858:
			  $home_image_src="./image/858_littlerock-940x400.jpg";
			  $home_image_alt="Little Rock National Cemetery, AR";
			  $home_image_width="940";
			  $home_image_height="400";
			  break;
			case 859:
			  $home_image_src="./image/859_marietta-940x420.jpg";
			  $home_image_alt="Marietta National Cemetery, GA";
			  $home_image_width="940";
			  $home_image_height="420";
			  break;
			case 872:
			  $home_image_src="./image/872_quantico-940x374.jpg";
			  $home_image_alt="Quantico National Cemetery, VA";
			  $home_image_width="940";
			  $home_image_height="374";
			  break;
			case 901:
			  $home_image_src="./image/901_riverside-940x419.jpg";
			  $home_image_alt="Riverside National Cemetery, CA";
			  $home_image_width="940";
			  $home_image_height="419";
			  break;
			case 824:
			  $home_image_src="./image/824_woodlawn-940x402.jpg";
			  $home_image_alt="Woodlawn National Cemetery, NY";
			  $home_image_width="940";
			  $home_image_height="402";
			  break;
			default:
			  $home_image_src="./image/872_quantico-940x374.jpg";
			  $home_image_alt="Quantico National Cemetery, VA";
			  $home_image_width="940";
			  $home_image_height="374";
			}
	?>
		<div class="container">
			<div class="row">
				<div class="span12">
					<img src="<?php print($home_image_src); ?>" alt="<?php print($home_image_alt); ?>" style="width: <?php print($home_image_width); ?>px; height: <?php print($home_image_height); ?>px;">
				</div>
			</div>
		</div>
		
 		<!-- Include footer Template Code from Include File -->
		<?php
			include "./footer-inc.php";
		?>
		
  </body>
</html>