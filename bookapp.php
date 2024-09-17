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
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $appointment_date = $_POST['appointment_date'];
    $appointment_time = $_POST['appointment_time'];

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO appointments (name, email, phone, appointment_date, appointment_time) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $email, $phone, $appointment_date, $appointment_time);

    // Execute statement
    if ($stmt->execute()) {
        echo "Appointment booked successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close connection
    $stmt->close();
    $conn->close();
}
?>