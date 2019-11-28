<?php
require "connection.php";

if (isset($_POST['submit'])) {
	if($_FILES['notice_file']['name'] != "") {

		$allowedExt =array('pdf');
		$name=$_FILES['notice_file']['name'];

		if (in_array(strtolower(end(explode('.', $_FILES['notice_file']['name']))), $allowedExt)) {
			if ($_FILES['notice_file']['error'] === 0) {
				if ($_FILES['notice_file']['size']<1000000) {
					$fileDestination = 'uploads/notice/'.$_FILES['notice_file']['name'];
					move_uploaded_file($_FILES['notice_file']['tmp_name'], $fileDestination);

					$sql="insert into notice (upload_date,title,file_name) values (CURRENT_DATE(),?,?)";
					$stmnt=$conn->prepare($sql);
					$stmnt->execute(array($_POST["title"], $name));
					echo "<script>alert('Your Data is successfully Updated')</script>";
					include 'maintain.php';
				}else{
					echo "<script>alert('Your file is too big!')</script>";
					include 'maintain.php';
				}
			}else{
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
 