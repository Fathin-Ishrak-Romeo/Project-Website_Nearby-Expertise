<?php
// Start the session
session_start();

// Establish database connection
$conn = new mysqli("localhost", "root", "", "nexpertise");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve username (spID) and password from the form
    $spID = $_POST['username3'];
    $password = $_POST['password3'];

    // Query to fetch spID and password from the database based on the given spID
    $query = "SELECT spID, password FROM spnfo WHERE spID = ?";

    // Prepare the query
    $stmt = $conn->prepare($query);
    if ($stmt === false) {
        die("Error in preparing query: " . $conn->error);
    }

    // Bind parameters and execute the query
    $stmt->bind_param("s", $spID);
    $stmt->execute();

    // Store the result
    $result = $stmt->get_result();

    // Fetch the row as an associative array
    $row = $result->fetch_assoc();

    // Check if a row is returned and if the password matches
    if ($result->num_rows == 1 && password_verify($password, $row['password'])) {
        // Set session variable
        $_SESSION['spID'] = $row['spID'];

        // Redirect to serviceP.php
        header("Location: serviceP.php");
        exit();
    } else {
        // Redirect back to the login page with an error message
        header("Location: signup.php?error=invalid_credentials");
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
