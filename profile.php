<!DOCTYPE html>
<html lang="en">

<head>
    <title>User Profile</title>
    <meta charset="utf-8">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>
    <!-- Header -->
    <header id="header">
        <div class="logo">
            <a href="index2.html">Nearby <span>EXPERTISE</span></a>
        </div>
        <a href="#menu">Menu</a>
    </header>

    <!-- Nav -->
    <nav id="menu"><ul class="links"><li><a href="index2.html">Home</a></li>
					<li><a href="services2.html">All Services</a></li>
					<li><a href="profile.php">Profile</a></li>
					<li><a href="apment.php">Make Appointment</a></li>
					<li><a href="contact us.html">Contact Us</a></li>
					
				</ul></nav>

    <!-- One -->
    <section id="One" class="wrapper style2">
        <div class="inner">
            <div class="container">
                <div class="profile-header">
                    <img src="images/profile2.png" alt="Profile Picture">
                    <div class="profile-name"><b>
                            <?php
                            // Start the session
                            session_start();

                            // Check if email is set in session
                            if(isset($_SESSION['email'])) {
                                // Database connection
                                $conn = mysqli_connect("localhost", "root", "", "nexpertise");
                                // Check connection
                                if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                                }

                                // Fetch user information from the userinfo table based on email
                                $email = $_SESSION['email'];
                                $sql = "SELECT name FROM userinfo WHERE email = '$email'";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    // Output data of each row
                                    while ($row = $result->fetch_assoc()) {
                                        echo $row["name"];
                                    }
                                } else {
                                    echo "0 results";
                                }
                            } else {
                                echo "User not logged in.";
                            }
                            ?>
                        </b></div>
                </div>

                <div class="profile-details">
                    <h2><b>Contact Information</b></h2>
                    <p>
                        <?php
                        // Check if email is set in session
                        if(isset($_SESSION['email'])) {
                            // Fetch contact information from the userinfo table based on email
                            $email = $_SESSION['email'];
                            $sql = "SELECT name, email, phone FROM userinfo WHERE email = '$email'";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                // Output data of each row
                                while ($row = $result->fetch_assoc()) {
                                    echo "Name: " . $row["name"] . "<br>";
                                    echo "Email: " . $row["email"] . "<br>";
                                    echo "Phone: " . $row["phone"] . "<br>";
                                }
                            } else {
                                echo "0 results";
                            }
                        } else {
                            echo "User not logged in.";
                        }
                        ?>
                    </p>
                </div>

                <div class="profile-details">
                    <h2><b>Appointments</b></h2>
                    <p>
                        <?php
                        // Check if email is set in session
                        if(isset($_SESSION['email'])) {
                            // Fetch appointments information based on the logged-in user's email
                            $email = $_SESSION['email'];
                            $sql = "SELECT * FROM appointments WHERE cus_email = '$email'";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                // Output data of each row
                                while ($row = $result->fetch_assoc()) {
                                    echo "Location: " . $row["location"] . "<br>";
                                    echo "Customer Phone: " . $row["cus_phone"] . "<br>";
                                    echo "Service Type: " . $row["service_type"] . "<br>";
                                    echo "Date: " . $row["date"] . "<br>";
                                    echo "Time: " . $row["time"] . "<br>";
                                    echo "Status: " . $row["status"] . "<br>";
                                    echo "Fees: " . $row["fees"] . "<br><br>";
                                }
                            } else {
                                echo "No appointments found.";
                            }
                        } else {
                            echo "User not logged in.";
                        }
                        ?>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <footer id="footer">
        <ul class="icons">
            <li><a href="contact us.html" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
            <li><a href="contact us.html" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
            <li><a href="contact us.html" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
            <li><a href="contact us.html" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
        </ul>
    </footer>
    <div class="copyright">
        <a href="index2.html">NEARBY EXPERTISE</a>
    </div>

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.scrollex.min.js"></script>
    <script src="assets/js/skel.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>
