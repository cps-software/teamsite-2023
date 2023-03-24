<?php session_start(); ?>

<!DOCTYPE html>
<!-- View and Manage User Profile -->

<html lang="en">
	<head>
  	<meta charset="utf-8">
    <title>Teamsite | Profile</title>
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
		<!-- Check for valid session -->
		<?php include "./inc_session.php"; ?>

		<!-- Include Menu Template Code from Include File -->
		<?php include "./inc_menu_profile.php"; ?>

    	<!-- jQuery and Bootstrap js Scripts -->
    	<script src="http://code.jquery.com/jquery.js"></script>
    	<script src="./bootstrap/js/bootstrap.js"></script>

		<!-- ********** PHP Section to Fetch Information ********** -->
		
		<div class="container">
		
		<!-- PHP Variables and Database Select -->
		<?php
			$uid = $_SESSION['user_id'];
			$uname = $_SESSION['user_name'];
			$footername = "Chuck Sylvester";
			
			// build SELECT query for username
			$query_get_profile = "SELECT * FROM user_profile WHERE user_account_id='" . $uid . "'";

	 		// Include MySQL server and Magellan database connection Include File
			include "./inc_dbconnect.php";			

			// Run SELECT query	
			$result = mysqli_query($connection, $query_get_profile);
			if (!$result) {
	    		die ('Select Query Failed: ' . mysql_error());
			} else {
				// print("Select Query Successful... ");
			}			
	
			// Get Value from selected row		
			$row = mysqli_fetch_array($result);
			if (!$row) {
	    		print("No Rows Found" . mysql_error());
	    		print("<br /><br />");
			} else {
				// print("Row Found... ");
			}
			
			$fname=$row['firstname'];
			$lname=$row['lastname'];
			$stationid=$row['station_id'];
			$wphone=$row['work_phone'];
			$mphone=$row['mobile_phone'];
			$email=$row['email_address'];
			$role=$row['user_role'];
			$pcomputer=$row['primary_computer'];
			$favcolor=$row['favorite_color'];

			mysqli_close($connection);						
		?>
		</div>  <!-- /container -->

    <!-- Page Header -->
		<div class="container">
	    <h2>My Profile</h2>
				<p>Review and update your profile settings.<br /><br /></p>
		</div> <!-- container -->

		<!-- *********************** User Profile Form ****************************** -->
		<div class="container">
			<form class="form" method="post" action="profilesave.php">

			<!-- *********************** Hidden Fields *************************** -->
			<input type="hidden" name="user-account-id" value="<?php print($uid); ?>">
			<input type="hidden" name="user-account-name" value="<?php print($uname); ?>">
			<input type="hidden" name="contact-date" value="<?php print($cdate); ?>">
			<input type="hidden" name="contact-time" value="<?php print($ctime); ?>">

			<!-- *********************** User Information *************************** -->
			<div class="well">
				<span class="lead">User Information</span>
				<br /><br />
				<table>
					<tr>
						<td>
							<label class="label">User ID</label>
							<p>
								<input type="text" class="span3" name="user-id-ro" value="<?php print($uname); ?>" disabled>
							</p>
						</td>
						<td colspan="2">
							&nbsp;<label class="label">Station</label>
							<p>
								&nbsp;<select class="span5" name="station">
								  <option value="826" <?php if ($stationid == '826') print('selected'); ?>>826 &nbsp;Alexandria National Cemetery, VA</option>
								  <option value="832" <?php if ($stationid == '832') print('selected'); ?>>832 &nbsp;Biloxi National Cemetery, MS</option>
								  <option value="805" <?php if ($stationid == '805') print('selected'); ?>>805 &nbsp;Calverton National Cemetery, NY</option>
								  <option value="839" <?php if ($stationid == '839') print('selected'); ?>>839 &nbsp;Culpeper National Cemetery, VA</option>
								  <option value="911" <?php if ($stationid == '911') print('selected'); ?>>911 &nbsp;Florida National Cemetery, FL</option>
								  <option value="888" <?php if ($stationid == '888') print('selected'); ?>>888 &nbsp;Ft. Logan National Cemetery, CO</option>
								  <option value="890" <?php if ($stationid == '890') print('selected'); ?>>890 &nbsp;Ft. McPherson National Cemetery, NE</option>
								  <option value="894" <?php if ($stationid == '894') print('selected'); ?>>894 &nbsp;Ft. Snelling National Cemetery, MN</option>
								  <option value="923" <?php if ($stationid == '923') print('selected'); ?>>923 &nbsp;Great Lakes National Cemetery, MI</option>
								  <option value="928" <?php if ($stationid == '928') print('selected'); ?>>928 &nbsp;Jacksonville National Cemetery, FL</option>
								  <option value="852" <?php if ($stationid == '852') print('selected'); ?>>852 &nbsp;Jefferson Barracks National Cemetery, MO</option>
								  <option value="858" <?php if ($stationid == '858') print('selected'); ?>>858 &nbsp;Little Rock National Cemetery, AR</option>
								  <option value="859" <?php if ($stationid == '859') print('selected'); ?>>859 &nbsp;Marietta National Cemetery, GA</option>
								  <option value="101" <?php if ($stationid == '101') print('selected'); ?>>101 &nbsp;National Cemetery Scheduling Office</option>
								  <option value="872" <?php if ($stationid == '872') print('selected'); ?>>872 &nbsp;Quantico National Cemetery, VA</option>
								  <option value="901" <?php if ($stationid == '901') print('selected'); ?>>901 &nbsp;Riverside National Cemetery, CA</option>
								  <option value="824" <?php if ($stationid == '824') print('selected'); ?>>824 &nbsp;Woodlawn National Cemetery, NY</option>
								</select>
							</p>
						</td>
					</tr>
					<tr>
						<td>
							<label class="label">First Name</label>
							<p>
								<input type="text" class="span3" name="user-first-name" value="<?php print($fname); ?>">
							</p>
						</td>
						<td>
							&nbsp;<label class="label">Last Name</label>
							<p>
								&nbsp;<input type="text" class="span3" name="user-last-name" value="<?php print($lname); ?>">
							</p>
						</td>
					</tr>
					<tr>
						<td>
							<label class="label">Work Phone</label>
							<p>
								<input type="text" class="span3" name="user-work-phone" value="<?php print($wphone); ?>">
							</p>
						</td>
						<td>
							&nbsp;<label class="label">Mobile Phone</label>
							<p>
								&nbsp;<input type="text" class="span3" name="user-mobile-phone" value="<?php print($mphone); ?>">
							</p>
						</td>
						<td>
							&nbsp;<label class="label">Email Address</label>
							<p>
								&nbsp;<input type="text" class="span4" name="user-email-address" value="<?php print($email); ?>">
							</p>
						</td>
					<tr>
					</tr>
						<td>
							<label class="label">Job Role</label>
							<p>
								<select class="span3" name="user-job-role">
							  	<option value="Cemetery Director" <?php if ($role == 'Cemetery Director') print('selected'); ?>>Cemetery Director</option>
							  	<option value="Cemetery Representative" <?php if ($role == 'Cemetery Representative') print('selected'); ?>>Cemetery Representative</option>
							  	<option value="Cemetery Groundskeeper" <?php if ($role == 'Cemetery Groundskeeper') print('selected'); ?>>Cemetery Groundskeeper</option>
									<option disabled>--------------------</option>
							  	<option value="NCSO Director" <?php if ($role == 'NCSO Director') print('selected'); ?>>NCSO Director</option>
							  	<option value="NCSO Scheduling Agent" <?php if ($role == 'NCSO Scheduling Agent') print('selected'); ?>>NCSO Scheduling Agent</option>
									<option disabled>--------------------</option>
							  	<option value="MPS Director" <?php if ($role == 'MPS Director') print('selected'); ?>>MPS Director</option>
							  	<option value="MPS Agent" <?php if ($role == 'MPS Agent') print('selected'); ?>>MPS Agent</option>
									<option disabled>--------------------</option>
							  	<option value="System Administrator" <?php if ($role == 'System Administrator') print('selected'); ?>>System Administrator</option>
								</select>
							</p>
						</td>
						<td>
							&nbsp;<label class="label">Primary Computer</label>
							<p>
								&nbsp;<select class="span3" name="user-primary-computer">
							  	<option value="Windows PC" <?php if ($pcomputer == 'Windows PC') print('selected'); ?>>Windows PC</option>
									<option value="Windows Tablet" <?php if ($pcomputer == 'Windows Tablet') print('selected'); ?>>Windows Tablet</option>
							  	<option value="Apple MacBook" <?php if ($pcomputer == 'Apple MacBook') print('selected'); ?>>Apple MacBook</option>
									<option value="Apple iPad" <?php if ($pcomputer == 'Apple iPad') print('selected'); ?>>Apple iPad</option>
								</select>
							</p>
						</td>
						<td>
							&nbsp;<label class="label">Favorite Color</label>
							<p>
								&nbsp;<select class="span4" name="user-favorite-color">
							  	<option value="AliceBlue" <?php if ($favcolor == 'AliceBlue') print('selected'); ?>>Alice Blue</option>
							  	<option value="Azure" <?php if ($favcolor == 'Azure') print('selected'); ?>>Azure</option>
							  	<option value="Beige" <?php if ($favcolor == 'Beige') print('selected'); ?>>Beige</option>
							  	<option value="CadetBlue" <?php if ($favcolor == 'CadetBlue') print('selected'); ?>>Cadet Blue</option>
							  	<option value="DarkGray" <?php if ($favcolor == 'DarkGray') print('selected'); ?>>Dark Gray</option>
							  	<option value="DarkKhaki" <?php if ($favcolor == 'DarkKhaki') print('selected'); ?>>Dark Khaki</option>
							  	<option value="DarkSeaGreen" <?php if ($favcolor == 'DarkSeaGreen') print('selected'); ?>>Dark Sea Green</option>
							  	<option value="GhostWhite" <?php if ($favcolor == 'GhostWhite') print('selected'); ?>>Ghost White</option>
							  	<option value="Ivory" <?php if ($favcolor == 'Ivory') print('selected'); ?>>Ivory</option>
							  	<option value="Khaki" <?php if ($favcolor == 'Khaki') print('selected'); ?>>Khaki</option>
							  	<option value="LightCoral" <?php if ($favcolor == 'LightCoral') print('selected'); ?>>Light Coral</option>
							  	<option value="LightPink" <?php if ($favcolor == 'LightPink') print('selected'); ?>>Light Pink</option>
							  	<option value="LightSalmon" <?php if ($favcolor == 'LightSalmon') print('selected'); ?>>Light Salmon</option>
									<option value="LightYellow" <?php if ($favcolor == 'LightYellow') print('selected'); ?>>Light Yellow</option>
							  	<option value="MediumTurquoise" <?php if ($favcolor == 'MediumTurquoise') print('selected'); ?>>Medium Turquoise</option>
							  	<option value="MintCream" <?php if ($favcolor == 'MintCream') print('selected'); ?>>Mint Cream</option>
							  	<option value="MistyRose" <?php if ($favcolor == 'MistyRose') print('selected'); ?>>Misty Rose</option>
							  	<option value="OldLace" <?php if ($favcolor == 'OldLace') print('selected'); ?>>Old Lace</option>
							  	<option value="Snow" <?php if ($favcolor == 'Snow') print('selected'); ?>>Snow</option>
							  	<option value="White" <?php if ($favcolor == 'White') print('selected'); ?>>White</option>
								</select>
							</p>
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<input class="btn btn-primary" type="submit" name="submit" value="Save">
							<input class="btn" type="submit" name="submit" value="Cancel">
						</td>
					</tr>
				</table>
				
				</div>  <!-- /well -->

				</form>
		</div>  <!-- /container -->

		<!-- ********** New HTML5 tag: footer ********** -->
 		<!-- Include Footer Template Code from Include File -->
 		<?php
		  include "./footer-inc.php";
		?>
		
  </body>
</html>