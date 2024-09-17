<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body style="margin: 50px;">
<h1>List Of Appointment</h1>
<a class="btn btn-primary" href="approveapp.php" role="button">Pending Appointments</a>
<table class="table">
<thead>
    <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Date</th>
                <th>Time</th>
                <th>Action</th>
				<th>Action</th>
		
		
</tr>
</thead>
<tbody>


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

// Fetch all pending appointments
$sql = "SELECT * FROM appointments WHERE status='pending'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["id"] . "</td>
                <td>" . $row["name"] . "</td>
                <td>" . $row["email"] . "</td>
                <td>" . $row["phone"] . "</td>
                <td>" . $row["appointment_date"] . "</td>
                <td>" . $row["appointment_time"] . "</td>
                <td><a href='approve.php?id=" . $row["id"] . "'>Approve</a></td>
				<td><a href='rejected.php?id=" . $row["id"] . "'>Reject</a></td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No pending appointments.";
}

$conn->close();
?>
</tbody>    
</table>    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>