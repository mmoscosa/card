<?php
include ("../config/database.php");

if (!empty($_POST)) {
	session_start();
	$email = $_POST['email'];

	$query = "SELECT * FROM `contacts` WHERE `email` = '".$email."'";
	$result = mysqli_query($db, $query);

	if($result->num_rows > 0){
		$row = $result->fetch_assoc();
		
		$_SESSION['granted'] = 'true';
		$_SESSION['code'] = $row['code'];
		
		$result = array();
		$result['granted'] = true;
		$result['code'] = $row['code'];
		$result = json_encode($result);
		
		echo $result;
	}else{
		echo '0';
	}
}

