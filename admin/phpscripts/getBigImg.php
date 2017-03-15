<?php 
	
	include ('connect.php');
	$mysqli = new mysqli($config['mysql_server'], $config['mysql_user'], $config['mysql_password'], $config['mysql_db']);
	if ($mysqli->connect_errno) {
		printf("Connection failed: %s \n", $mysqli->connect_error);
		exit();
	}

	$mysqli->set_charset("utf8");

	$thumbs = $_GET["images"];

	$myQuery = "SELECT * FROM tbl_gal WHERE gal_id ='$thumbs'";

	$result = mysqli_query($mysqli, $myQuery);

	//echo mysqli_num_rows($result);
	echo json_encode(mysqli_fetch_assoc($result));
?>