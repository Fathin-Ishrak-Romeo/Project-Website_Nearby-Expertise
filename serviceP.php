<!DOCTYPE html>
<?php 
include('func1.php');
$con = mysqli_connect("localhost", "root", "", "nexpertise");

// Get the service provider's spID from session
$spID = $_SESSION['dname'];

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['cancel'])) {
    $appointment_id = $_POST['cancel'];
    $query = "UPDATE alc SET status = 'Done' WHERE serial_no = $appointment_id";
    mysqli_query($con, $query); 
}

// Fetch appointments for the service provider from the database
$query = "SELECT alc.serial_no, alc.name, alc.location, alc.contact, alc.date, alc.time
          FROM alc
          WHERE alc.spID = ?";

// Prepare the query
$stmt = $con->prepare($query);
if ($stmt === false) {
    die("Error in preparing query: " . $con->error);
}

// Bind parameter and execute the query
$stmt->bind_param("s", $spID);
$stmt->execute();

// Store the result
$result = $stmt->get_result();

// Check if appointments exist
if ($result->num_rows > 0) {
    // Fetch all rows as an associative array
    $appointments = $result->fetch_all(MYSQLI_ASSOC);
} else {
    // No appointments found
    $appointments = [];
}

// Close the statement
$stmt->close();

// Close database connection
$con->close();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointments</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
<b><a class="nav-link" href="signup.php"><i class="fa fa-power-off" aria-hidden="true"></i> Logout</a></b>
<h2>Appointments</h2>
    <form action="serviceP.php" method="post">
        <table>
            <thead>
                <tr>
                    <th>Serial No</th>
                    <th>Name</th>
                    <th>Location</th>
                    <th>Contact</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($appointments as $appointment): ?>
                    <tr>
                        <td><?php echo $appointment['serial_no']; ?></td>
                        <td><?php echo $appointment['name']; ?></td>
                        <td><?php echo $appointment['location']; ?></td>
                        <td><?php echo $appointment['contact']; ?></td>
                        <td><?php echo $appointment['date']; ?></td>
                        <td><?php echo $appointment['time']; ?></td>
                        <td class="ass">
                            <button class="cancelo" type="submit" name="cancel" value="<?php echo htmlspecialchars($appointment['serial_no']); ?>">DONE</button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </form>

</body>
</html>
