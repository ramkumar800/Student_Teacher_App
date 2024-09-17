<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Search</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body style="margin: 50px;">
<h1>Search Result</h1>
<table class="table">
<thead>
    <tr>
        <th>ID</th>
        <th>FIRST NAME</th>
        <th>LAST NAME</th>
        <th>EMAIL</th>
        

		
		
</tr>
</thead>
<tbody>


<?php
// database.php

// Database connection settings
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "college";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if search term is provided
if (isset($_GET['q'])) {
    $searchTerm = $conn->real_escape_string($_GET['q']);

    // SQL query to search the database
    $sql = "SELECT * FROM teacherre WHERE fname LIKE '%$searchTerm%' OR email LIKE '%$searchTerm%'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            echo
         "<tr>
    <th>".$row["id"] ." </th>
    <th>".$row["fname"] ." </th>
    <th>".$row["lname"] ." </th>
    <th>".$row["email"] ." </th>
</tr>";
		}
		
	 } else {
        echo "0 results found";
    }
}

// Close connection
$conn->close();
?>
</tbody>    
</table>    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>