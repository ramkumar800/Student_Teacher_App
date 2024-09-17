<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "college";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the appointment ID from the request
$appointment_id = $_GET['id'];

// Update the status to 'approved'
$sql = "UPDATE studentreg SET status='approved' WHERE id=$appointment_id";

if ($conn->query($sql) === TRUE) {
    echo "Student approved successfully!";
	 echo "</br>";  
	 echo"Page Redirect within 5Sec";
header( "refresh:5;url=StudentApprove.php" );
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>