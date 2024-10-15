<?php
include("header.php");
?>
<header id="header">
        <div class="logo">
            <a href="index.html">Nearby <span>EXPERTISE</span></a>
        </div>
</header>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style2.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <style>
        /* CSS for centering the login box and adjusting background image */
        .wrapper.style4 {
            background-color: #000;
            color: #bfbfbf;
            background-image: url('images/bgo.jpg');
            background-size: cover;
            background-attachment: fixed;
            background-position: center;
            position: relative;
            height: 100vh;
            display: flex;
            align-items: center;
        }

        .card {
            background: #f8f9fa;
            border-radius: 5%;
            width: 70%;
            margin: auto;
            padding: 20px;
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
<section id="one" class="wrapper style4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <div class="card">
                    <center>
                        <h3><b>LOGIN</b></h3><br>
                        <form class="form-group" method="POST" action="log.php">
                            <div class="form-group">
                                <label>Email:</label>
                                <input type="text" name="email" class="form-control" placeholder="Enter your email" required/>
                            </div>
                            <div class="form-group">
                                <label>Password:</label>
                                <input type="password" class="form-control" name="password2" placeholder="Enter Password" required/>
                            </div>
                            <input type="submit" id="inputbtn" name="patsub" value="Login" class="btn btn-success">
                        </form>
                    </center>
                </div>
            </div>
        </div>
    </div>
</section>
</body>

</html>

