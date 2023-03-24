<!-- ********** Include Template: Connect to MySQL/MariaDB Server and Teamsite Database ********** -->

<?php

$servername=$_SERVER["SERVER_NAME"];

// determine local or remote server

if($servername=="localhost") {
	$connection = mysqli_connect("localhost", "csylvester", "AllieD#1993", "teamsite");
	if(!$connection) {
		print("Could not connect to localhost: " . mysql_error());
		die("<br />Terminating program </body></html>");
	} else {
		// print("MySQL connection on localhost created <br />");
		// $result = mysqli_query($connection, "SELECT DATABASE()");
		// $row = mysqli_fetch_row($result);
		// print("Default database is " . $row[0] . "<br />");	
	}

} else if($servername=="www.ncamagellan.com") {
	$connection = mysqli_connect("68.178.142.109", "ncamag", "Allie#1993");
	if(!$connection) {
		print("Could not connect to remote host: " . mysql_error());
		die("<br />Terminating program </body></html>");
	} else {
		print("MySQL connection on remote host created <br /><br />");
	}
	$db_selected = mysqli_select_db('ncamag', $connection);
	if (!$db_selected) {
		die ('Can\'t use ncamag : ' . mysql_error());
	} else {
		print("ncamag Database Selected <br /><br />");
	}

} else {
	$connection = mysqli_connect("188.121.40.173", "ncamagellan", "Allie#1993");
	if(!$connection) {
		print("Could not connect to remote host: " . mysql_error());
		die("<br />Terminating program </body></html>");
	} else {
		print("MySQL connection on remote host created <br /><br />");
	}
	$db_selected = mysqli_select_db('ncamagellan', $connection);
	if (!$db_selected) {
		die ('Can\'t use magellan : ' . mysql_error());
	} else {
		print("Magellan Database Selected <br /><br />");
	}
}
?>
