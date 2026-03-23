<?php
$conn = mysqli_connect("localhost","root","","academic_event_portal",3307);

if(!$conn){
die("Connection failed: ".mysqli_connect_error());
}
?>