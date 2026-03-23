<?php
session_start();
include("config.php");

if(!isset($_SESSION['student_email'])){
echo "Please login first";
exit();
}

$email = $_SESSION['student_email'];
$event_id = $_GET['event_id'];

$query = "INSERT INTO registrations(student_email,event_id)
VALUES('$email','$event_id')";

if(mysqli_query($conn,$query)){
echo "Event Registered Successfully";
}else{
echo "Error: ".mysqli_error($conn);
}
?>