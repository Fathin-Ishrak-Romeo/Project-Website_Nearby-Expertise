<?php
session_start(); // Start session to store user data

// Database connection setup
$conn = new mysqli("localhost", "root", "", "nexpertise");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch form data
$email = $_POST['email'];
$password = $_POST['password2'];

// Prepare SQL statement to check email and password
$stmt = $conn->prepare("SELECT * FROM userinfo WHERE email=? AND password=?");
$stmt->bind_param("ss", $email, $password);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // If email and password match, redirect to index2.html
    $_SESSION['email'] = $email; // Store user email in session for further use if needed
    header("Location: index2.html");
    exit();
} else {
    // If email and password don't match, display error message
    echo "<script>alert('Invalid email or password');</script>";
}

$stmt->close();
$conn->close();
?>
