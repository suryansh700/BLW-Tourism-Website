<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
// Connect to MySQL
$host = "localhost";
$user = "root";
$password = ""; // No password in XAMPP
$dbname = "blw_tourism";

// Create connection
$conn = new mysqli($host, $user, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get data from POST
$fullname = $_POST['fullname'] ?? '';
$email = $_POST['email'] ?? '';
$phone = $_POST['phone'] ?? '';
$destination = $_POST['destination'] ?? '';
$travel_date = $_POST['travel_date'] ?? '';
$guests = $_POST['guests'] ?? '';
$message = $_POST['message'] ?? '';

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO bookings (fullname, email, phone, destination, travel_date, guests, message) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssis", $fullname, $email, $phone, $destination, $travel_date, $guests, $message);

// Execute and give feedback
if ($stmt->execute()) {
  echo "<script>alert('Booking stored successfully!'); window.location.href='booking.html';</script>";
} else {
  echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
