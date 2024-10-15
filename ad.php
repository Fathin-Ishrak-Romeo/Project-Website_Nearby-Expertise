<?php
session_start();

// Check if the admin is logged in
// Database connection setup
$conn = new mysqli("localhost", "root", "", "nexpertise");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch all appointment details
$sql = "SELECT * FROM appointments";
$result = $conn->query($sql);

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve inputs from the form
    $spID = $_POST['spID'];
    $serial_no = $_POST['serial_no'];

    // Fetch appointment details using the serial_no
    $appointment_sql = "SELECT * FROM appointments WHERE serial_no = '$serial_no'";
    $appointment_result = $conn->query($appointment_sql);
    if ($appointment_result->num_rows == 1) {
        $row = $appointment_result->fetch_assoc();
        // Post appointment details to the alc table
        $insert_sql = "INSERT INTO alc (spID, serial_no, name, location, contact, date, time) 
                       VALUES ('$spID', '$serial_no','" . $row['cus_name'] . "', '" . $row['location'] . "', '" . $row['cus_phone'] . "', '" . $row['date'] . "', '" . $row['time'] . "')";
        if ($conn->query($insert_sql) === TRUE) {
            // Update the status of the appointment to "Allocated"
            $update_status_sql = "UPDATE appointments SET status = 'Allocated' WHERE serial_no = '$serial_no'";
            if ($conn->query($update_status_sql) === TRUE) {
                echo "<script>alert('Appointment details updated successfully!');</script>";
            } else {
                echo "Error updating status: " . $conn->error;
            }
        } else {
            echo "Error posting appointment details: " . $conn->error;
        }
    } else {
        echo "Appointment not found";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
<b><a class="nav-link" href="signup.php"><i class="fa fa-power-off" aria-hidden="true"></i> Logout</a></b>
    <h2>Admin Panel - Appointment Details</h2>
    <table>
        <tr>
            <th>Serial No</th>
            <th>Customer Name</th>
            <th>Customer Phone</th>
            <th>Service Type</th>
            <th>Date</th>
            <th>Time</th>
            <th>Fees</th>
            <th>Status</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['serial_no'] . "</td>";
                echo "<td>" . $row['cus_name'] . "</td>";
                echo "<td>" . $row['cus_phone'] . "</td>";
                echo "<td>" . $row['service_type'] . "</td>";
                echo "<td>" . $row['date'] . "</td>";
                echo "<td>" . $row['time'] . "</td>";
                echo "<td>" . $row['fees'] . "</td>";
                echo "<td>" . $row['status'] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='8'>No appointments found</td></tr>";
        }
        ?>
    </table>
    
    <h2>Allocate Appointment</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="spID">Service Provider ID:</label>
        <input type="text" id="spID" name="spID" required><br><br>
        <label for="serial_no">Appointment ID:</label>
        <input type="text" id="serial_no" name="serial_no" required><br><br>
        <input type="submit" value="Allocate Appointment">
    </form>
</body>
</html>
