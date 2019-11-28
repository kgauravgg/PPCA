<?php
require "connection.php";

if (isset($_POST['submit'])) {
    if($_FILES['achievement']['name'] != ""){

        $name=$_FILES['achievement']['name'];
        $allowedExt=array('jpg','png','jpeg');

        if(in_array(strtolower(end(explode('.', $_FILES['achievement']['name']))), $allowedExt)){
            if($_FILES['achievement']['error']===0){
                if ($_FILES['achievement']['size']<1000000) {

                    $fileDestination='uploads/achievements/'.$_FILES['achievement']['name'];
                    move_uploaded_file($_FILES['achievement']['tmp_name'], $fileDestination);

                    $sql="insert into achivement (upload_date,file_name) values (current_date (),?)";
                    $stmnt=$conn->prepare($sql);
                    $stmnt->execute(array($name));
                    echo "<script>alert('Your Data is successfully Updated')</script>";
                    include 'maintain.php';
                }
                else{
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