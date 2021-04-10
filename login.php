<?php
include 'connection.php';
$message = "wrong answer";
$id = mysqli_real_escape_string($conn ,$_POST['id']);
$name = mysqli_real_escape_string($conn ,$_POST['name']);
$desc = mysqli_real_escape_string($conn ,$_POST['desc']);

$my_connection = "INSERT INTO `subject` (`subjectid`, `coursename`, `description`) VALUES ('$id', '$name', '$desc');";

$user_job_submit = mysqli_query($conn,$my_connection);
header('location:index.php');
echo "<script type='text/javascript'>alert('$message');</script>";




?>