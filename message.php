 <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
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

    // Get form data
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $country = $_POST['country'];
    $message = $_POST['subject'];

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO message (firstname, lastname, country, message) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $firstname, $lastname, $country, $message);

    // Execute statement
    if ($stmt->execute()) {
        echo "Message Sent successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close connection
    $stmt->close();
    $conn->close();
}
?>