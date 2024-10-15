<?php
// Establish database connection
$conn = new mysqli("localhost", "root", "", "nexpertise");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve username and password from form
    $username = $_POST['username1'];
    $password = $_POST['password2'];

    // SQL query to fetch admin details based on username and password
    $sql = "SELECT * FROM admintb WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Admin credentials are correct, redirect to add.php
        header("Location: ad.php");
        exit();
    } else {
        // Admin credentials are incorrect, redirect back to signup.php with error message
        header("Location: signup.php?error=Invalid credentials");
        exit();
    }
} else {
    // If the request method is not POST, redirect back to signup.php
    header("Location: signup.php");
    exit();
}

// Close database connection
$conn->close();
?>
