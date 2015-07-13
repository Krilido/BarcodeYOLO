<?php
	session_destroy();
	if(isset($_POST['login'])){
		$user = $_POST['user'];
		$pass = $_POST['pass'];
		
		if(($user == 'admin') && ($pass == 'admin'))
		{
			//echo "admin";
			$_SESSION['admin']=$user;
			header('Location: report.php');
			
		} 
		else 
		{
			echo "User dan Pass Salah";
			header('Location: index.php');
		}
	}
?>