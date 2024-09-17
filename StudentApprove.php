<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body style="margin: 50px;">
<h1>List Of Student New Registration</h1>
<a class="btn btn-primary" href="AdminPanel.html" role="button">Admin Panel</a>
<table class="table">
<thead>
    <tr>
        <th>ID</th>
        <th>FIRST NAME</th>
        <th>LAST NAME</th>
        <th>EMAIL</th>
        <th>MOBILE</th>
        <th>GENDER</th>
		<th>ADDRESS</th>
        <th>CITY</th>
        <th>PIN</th>
        <th>STATE</th>
        <th>COUNTRY</th>
        <th>COURSES</th>
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

// Fetch all pending student registrations
$sql = "SELECT * FROM studentreg WHERE status='pending'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <th>".$row["id"]."</th>
                <th>".$row["firstname"]."</th>
                <th>".$row["lastname"]."</th>
                <th>".$row["email"]."</th>
                <th>".$row["mobile"]."</th>
                <th>".$row["gender"]."</th>
                <th>".$row["address"]."</th>
                <th>".$row["city"]."</th>
                <th>".$row["pincode"]."</th>
                <th>".$row["state"]."</th>
                <th>".$row["country"]."</th>
                <th>".$row["courses"]."</th>
                <td><a href='approvestudent.php?id=".$row["id"]."' class='btn btn-success'>Approve</a></td>
                <td><a href='rejected.php?id=".$row["id"]."' class='btn btn-danger'>Reject</a></td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='14'>No pending registrations.</td></tr>";
}

$conn->close();
?>

</tbody>    
</table>    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
