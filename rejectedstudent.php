<?php
// Database connection
$host = "127.0.0.1";
$port = "3308"; // You specified port 3308
$username = "root";
$password = "";
$dbname = "college";

// Create connection
$conn = new mysqli($host, $username, $password, $dbname, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the appointment ID from the request
$appointment_id = $_GET['id'];

// Update the status to 'Rejected'
$sql = "UPDATE studentreg SET status='rejected' WHERE id=$appointment_id";

if ($conn->query($sql) === TRUE) {
    echo "Appointment Rejected successfully!";
	 echo "</br>";  
	 echo"Page Redirect within 5Sec";
header( "refresh:5;url=StudentApprove.php" );
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>