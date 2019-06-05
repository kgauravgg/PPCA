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
			header("Location:/maintain.php");
		else
		{
			echo "failed to login";
		}
	}
	else{
		echo "Error executng query!";
	}
?>