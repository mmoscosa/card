<?php
include ("../config/database.php");

if (!empty($_POST)) {
	session_start();
	$username = $_POST['username'];
	$password = $_POST['password'];
	$password = md5($password);
	
	$query = "SELECT * FROM `admin` WHERE `username` = '".$username."' AND `password` = '".$password."'";
	$result = mysqli_query($db, $query);

	if($result->num_rows > 0){
		$row = $result->fetch_assoc();	
		
		$_SESSION['admin-granted'] = 'true';
		echo 'admin granted';
		
	}else{
		echo '0';
	}
}

