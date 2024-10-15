

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Booking</title>
    <link rel="stylesheet" href="assets/css/main.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        input, select {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: lightcoral;
            color: white;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <header id="header">
        <div class="logo">
            <a href="index2.html">Nearby <span>EXPERTISE</span></a>
        </div>

    </header>

<section id="one" class="wrapper style4">
    <div class="container">
        <h2>Book an Appointment</h2>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

            <label for="service">Service Type</label>
            <select id="service" name="service" onchange="fetchDoctors()" required>
                <option value="">Select Service</option>
                <option value="Light/Fan Fix">Light/Fan Fix</option>
                <option value="Circuit Installation">Circuit Installation</option>
                <option value="Fridge Servicing">Fridge Servicing</option>
                <option value="AC Servicing">AC Servicing</option>
                <option value="Tap Fix">Tap Fix</option>
                <option value="Water Pipe Fix">Water Pipe Fix</option>
                <option value="Water Line Installation">Water Line Installation</option>
                <option value="House Cleaning">House Cleaning</option>
                <option value="Painting">Painting</option>
            </select>

            <label for="date">Preferred Date:</label>
            <input type="date" id="date" name="date" required><br><br>
            <label for="time">Preferred Time:</label>
            <input type="time" id="time" name="time" required><br><br>
            <label for="customer_name">Your Name:</label>
            <input type="text" id="customer_name" name="customer_name" required><br><br>

            <label for="customer_phone">Your Phone Number:</label>
            <input type="text" id="customer_phone" name="customer_phone" required><br><br>

            <label for="customer_location">Your Location:</label>
            <input type="text" id="customer_location" name="customer_location" required><br><br>

            <input type="submit" value="Book Appointment">
        </form>
    </div>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Start the session
        session_start();

        // Database connection setup
        $conn = new mysqli("localhost", "root", "", "nexpertise");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Fetch form data
        $date = $_POST['date'];
        $time = $_POST['time'];
        $service = $_POST['service'];
        $customer_name = $_POST['customer_name'];
        $customer_phone = $_POST['customer_phone'];
        $customer_location = $_POST['customer_location'];
        
        // Check if email is set in session
        if(isset($_SESSION['email'])) {
            // Retrieve the user's email from the session
            $customer_email = $_SESSION['email'];

            // Prepare SQL Insert Statement
            $stmt = $conn->prepare("INSERT INTO appointments (service_type, time, date, cus_name, cus_phone, cus_email, location) VALUES (?, ?, ?, ?, ?, ?, ?)");
            if (!$stmt) {
                die("Error: " . $conn->error);
            }
            $stmt->bind_param("sssssss", $service, $time, $date, $customer_name, $customer_phone, $customer_email, $customer_location);
            if (!$stmt->execute()) {
                echo "Error: " . $stmt->error;
            } else {
                echo("<script>window.location.href = 'congo.html';</script>");
            }

            $stmt->close();
        } else {
            echo "User not logged in.";
        }

        $conn->close();
    }
    ?>
    </section>
</body>
</html>
