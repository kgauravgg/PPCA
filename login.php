<?php
	require 'connection.php';
	session_start();
	$username = $_POST['username'];
	$password = $_POST['password'];


	$sql = "select * from login where username=? and password=?";
	$stmnt = $conn->prepare($sql);
	if ($stmnt->execute(array($username, $password))) {
		$data = $stmnt->fetchAll();
		if(count($data)>0)
		{
			session_start();
			$_SESSION["username"]=$username;
		    header("Location:maintain.php");
		}
		else
		{
			include 'index.php';
			echo "<script>alert('Your UserID or Password is not correct')</script>";
	
		}
	}
	else{
		echo "<script>alert('Something is wrong. Please contact to PPCL admin')</script>";
        header("Location:index.php");
	}
?>