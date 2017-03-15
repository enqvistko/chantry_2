<?php
//echo "From read.php";

function getAll($tbl) {
	require_once("connect.php");
	$queryAll = "SELECT * FROM tbl_gal";
	//echo $queryAll;
	$runAll = mysqli_query($link, $queryAll);
	
	if($runAll) {
		return $runAll;
	
	}else{
		$error = "There was an error accessing this information. Please contact Web Admin for tech support.";
		return $error;
	}
	
	mysqli_close($link);
}

function getSchedule($tbl) {
	require_once("connect.php");
	$queryAll = "SELECT * FROM tbl_schedule";
	//echo $queryAll;
	$runAll = mysqli_query($link, $queryAll);
	
	if($runAll) {
		return $runAll;
	
	}else{
		$error = "There was an error accessing this information. Please contact Web Admin for tech support.";
		return $error;
	}
	
	mysqli_close($link);
}
?>