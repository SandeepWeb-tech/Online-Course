<?php
include 'connection.php';
$message = "Data Deleted";
$mess = "Data Not Found";
$subjectid = $_GET['subjectid'];
$query = "DELETE FROM subject WHERE subjectid =  '$subjectid'";
$data = mysqli_query($conn , $query);

header('location:index.php');
if($data){
    echo "<script type='text/javascript'>alert('$message');</script>";
}else{
    echo "<script type='text/javascript'>alert('$mess');</script>";
}

?>