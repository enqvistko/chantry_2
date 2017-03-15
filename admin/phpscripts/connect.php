<?php
	//set up connetion + passing permissions...
	$user ="root";
	$pass = "root";
	// ="" (PC)
	$url = "localhost";
	$db = "db_chantry";

	$link = mysqli_connect($url, $user, $pass, $db, "8888");
	//"8888" not needed for PC
	//Check the connection
	if(mysqli_connect_errno()) {
		printf("connect failed: %s\n",mysqli_connect_error());
		exit();
	
	}

	$config = array(
		"mysql_server" => "localhost",
		"mysql_user" => "root",
		"mysql_password" => "root",
		"mysql_db" => "db_chantry"
	);		
?>