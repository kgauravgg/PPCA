<?php
require "connection.php";

if (isset($_POST['submit'])) {

	if ($_FILES['photo']['name'] != ""){

		$allowedExt=array('jpg','png','jpeg');
		$name=$_FILES['photo']['name'];

		if(in_array(strtolower(end(explode('.', $_FILES['photo']['name']))), $allowedExt)){
			if ($_FILES['photo']['error'] === 0) {
				if ($_FILES['photo']['size'] < 3000000) {
					$fileDestination = 'uploads/players/'. $_FILES['photo']['name'];
					move_uploaded_file($_FILES['photo']['tmp_name'], $fileDestination);
					//header("Location:maintain.php?upload3Success");
					$sql="insert into players (upload_date, name, jersey, role, height, weight, age, heigest_score, total_matches, total_runs, wickets, catches, sixers, boundrys, hundreds, fiftys, photo_name) values (CURRENT_DATE(),?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
					$stmnt=$conn->prepare($sql);
					$stmnt->execute(array($_POST["name"], $_POST["jersey"], $_POST["role"], $_POST["height"],$_POST["weight"], $_POST["age"], $_POST["heigest_score"],$_POST["total_matches"], $_POST["total_runs"], $_POST["wickets"], $_POST["catches"], $_POST["sixers"], $_POST["boundrys"], $_POST["hundreds"], $_POST["fiftys"], $name));
					echo "<script>alert('Your Data is successfully Updated');</script>";
					include 'maintain.php';
				} else {
					echo "<script>alert('Your file is too big!')</script>";
					include 'maintain.php';
				}
			} else {
				echo "<script>alert('There was an error while uploading your file')</script>";
				include 'maintain.php';
			}
		}else{
			echo "<script>alert('You cannot upload files of this type')</script>";
			include 'maintain.php';
		}
	}else{
		echo "<script>alert('You must select the photo.')</script>";
		include 'maintain.php';
	}
}
?>
 