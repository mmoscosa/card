<?php 
	include ("database.php");
	session_start(); 

	if($_SERVER['SCRIPT_NAME'] == '/login.php'){
		if(isset($_SESSION)){
			if ($_SESSION['granted'] == true) {
					header( 'Location: /?code='.$_SESSION['code']) ;
				}	
		}
	}elseif($_SERVER['SCRIPT_NAME'] == '/admin/send.php'){
		if(!isset($_SESSION)){
			header( 'Location: /admin/login.php');
		}else{
			if ($_SESSION['admin-granted'] != true) {
				header( 'Location: /admin/login.php');	
			}
		}
	}elseif ($_SERVER['SCRIPT_NAME'] == '/index.php') {
		if(isset($_GET['code'])){
			include ("../config/database.php");
			$query = "SELECT * FROM `contacts` WHERE `code` = '".$_GET['code']."'";
			$result = mysqli_query($db, $query);
			if($result->num_rows > 0){
				$row = $result->fetch_assoc();
				$_SESSION['granted'] = 'true';
				$_SESSION['code'] = $row['code'];
			}else{
				header( 'Location: /login.php');
			}
		}else{
			if(isset($_SESSION)){
				if ($_SESSION['granted'] != true) {
					header( 'Location: /login.php');
				}else{
					header( 'Location: /?code='.$_SESSION['code']);
				}
			}else{
				header( 'Location: /login.php');
			}
		}
	}
