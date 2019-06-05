<?php
require "connection.php";

if (isset($_POST['submit'])) {
	$file = $_FILES['notice_file'];
	//print_r($file)
	$fileName = $_FILES['notice_file']['name'];
	$fileTmpName = $_FILES['notice_file']['tmp_name'];
	$fileSize = $_FILES['notice_file']['size'];
	$fileError = $_FILES['notice_file']['error'];
	$fileType = $_FILES['notice_file']['type'];

	$fileExt = explode('.', $fileName);
	$fileActualExt = strtolower(end($fileExt));

	$allowedExt =array('pdf');

	if (in_array($fileActualExt, $allowedExt)) {
		if ($fileError === 0) {
			$fileDestination = 'uploads/notice/'.$fileName;
			move_uploaded_file($fileTmpName, $fileDestination);
			header("Location:maintain.php?uploadSuccess");
		}else{
			echo "There was an error uploding your file";
		}
	}else{
		echo "You cannot upload files of this type";
	}
	/*
	 $sql="insert into notice (event_title,) values (?,?,?)";
	 $stmnt=$conn=>prepare($sql);
	 $stmnt->execute(array($_POST["event_title"], $_POST[""]));
	 echo "<script>alert('Your Data is scucessfuly Updated')</script>";
	 include 'maintain.php';*/

}
?>
 