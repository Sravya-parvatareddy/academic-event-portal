<?php
session_start();
include("config.php");

/* check login */
if(!isset($_SESSION['student_email'])){
echo "Please login first";
exit();
}

/* get events from database */
$query = "SELECT * FROM events";
$result = mysqli_query($conn,$query);

echo "<h2>Available Events</h2>";

while($row = mysqli_fetch_assoc($result))
{
echo "Event Name: ".$row['event_name']."<br>";
echo "Date: ".$row['event_date']."<br>";
echo "Time: ".$row['event_time']."<br>";
echo "Location: ".$row['location']."<br>";

echo "<a href='register.php?event_id=".$row['id']."'>Register</a>";

echo "<br><br><hr><br>";
}
?>