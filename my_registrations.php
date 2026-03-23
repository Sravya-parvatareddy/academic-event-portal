<?php
session_start();
include("config.php");

if(!isset($_SESSION['student_email'])){
echo "Please login first";
exit();
}

$email = $_SESSION['student_email'];

$query = "SELECT events.event_name, events.event_date, events.event_time, events.location
FROM registrations
JOIN events ON registrations.event_id = events.id
WHERE registrations.student_email='$email'";

$result = mysqli_query($conn,$query);

echo "<h2>My Registered Events</h2>";

while($row = mysqli_fetch_assoc($result))
{
echo "Event Name: ".$row['event_name']."<br>";
echo "Date: ".$row['event_date']."<br>";
echo "Time: ".$row['event_time']."<br>";
echo "Location: ".$row['location']."<br>";

echo "<br><hr><br>";
}
?>