<?php
	define('HOST','localhost');
	define('USERNAME', 'root');
	define('PASSWORD','');
	define('DB','cvforyou_db');
	
	$con = mysqli_connect(HOST,USERNAME,PASSWORD,DB);
	
	$username = $_POST['username'];
	$pass = $_POST['password'];
	
	$sql = "insert into new (location, email) values ('$username','$pass')";
	
	if(mysqli_query($con, $sql)){
		echo 'success';
	}
?>