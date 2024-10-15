<!DOCTYPE html>
<html lang="en">
<head>
    <title>Nearby Expertise</title>
    <meta charset="utf-8">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style1.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<style >
    
     .form-control {
    border-radius: 0.75rem;
}
.wrapper.style4 {
				background-color: #000;
				color: #bfbfbf;
				background-image: url('images/conBG.jpg');
				background-size: cover;
				background-attachment: fixed;
				background-position: center;
				position: relative;
			}
            .register .nav-tabs {
  margin-top: 3%;
  border: none;
  background: black;
  border-radius: 1.5rem;
  width: 28%;
  float: right;
}
.register .nav-tabs .nav-link.active {
  width: 120px;
  color: black;
  border: 2px solid black;
  border-top-left-radius: 1.5rem;
  border-bottom-left-radius: 1.5rem;
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

<script>
    var check = function() {
  if (document.getElementById('password').value ==
    document.getElementById('cpassword').value) {
    document.getElementById('message').style.color = '#5dd05d';
    document.getElementById('message').innerHTML = 'Matched';
  } else {
    document.getElementById('message').style.color = '#f55252';
    document.getElementById('message').innerHTML = 'Password fields doesnot match';
  }
}

function alphaOnly(event) {
  var key = event.keyCode;
  return ((key >= 65 && key <= 90) || key == 8 || key == 32);
};

function checklen()
{
    var pass1 = document.getElementById("password");  
    if(pass1.value.length<6){  
        alert("Password must be at least 6 characters long. Try again!");  
        return false;  
  }  
}

</script>
</head>

<body>
    <!-- Header -->
<header id="header" class="alt"><div class="logo"><a href="index.html">Nearby <span>EXPERTISE</span></a></div>
    
</header> 

	
<section id="one" class="wrapper style4">
<div class="container register" style="font-family: 'IBM Plex Sans', sans-serif; background-color:transparent;">
                <div class="row" >
                    <div class="col-md-3 register-left" style="margin-top: 10%;right: 5%">
                             </div>
                             
                    <div class="col-md-9 register-right" style="margin-top: 40px; left: -128px;">
                        <div style="position:absolute; top:5px;">
                            <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist" style="width: 40%;">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Customer</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Provider</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#admin" role="tab" aria-controls="admin" aria-selected="false">Admin</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">SIGN UP</h3>
                                <form method="post" action="func2.php">
                                <div class="row register-form">
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control"  placeholder="Name" name="fname"  onkeydown="return alphaOnly(event);" required/>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Your Email" name="email"  />
                                        </div>
                                        <div class="form-group">
                                            <input type="tel" minlength="10" maxlength="10" name="contact" class="form-control" placeholder="Contact"  />
                                        </div>
                                        
                                        <div class="form-group">
                                        <p> <b>Already have an account?</b> <br> 
                                            <a href="login.php">Login</a></p>

                                        </div>
                                    </div>
                                
                                    <div class="col-md-6">
                                    <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password" id="password" name="password" onkeyup='check();' required/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <input type="password" class="form-control"  id="cpassword" placeholder="Confirm Password" name="cpassword"  onkeyup='check();' required/><span id='message'></span>
                                        </div>
                                        <input type="submit" class="btnRegister" name="patsub1" onclick="return checklen();" value="Register"/>
                                    </div>

                                </div>
                            </form>
                            </div>

                            
                            <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <h3 class="register-heading">Login as <br> Service Provider</h3>
                                <form method="post" action="func1.php">
                                    <div class="row register-form">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="tel" minlength="1" maxlength="10" name="username3" class="form-control" placeholder="User ID" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="password" class="form-control" placeholder="Password" name="password3" required/>
                                            </div>
                                            <input type="submit" class="btnRegister" name="docsub1" value="Login"/>
                                        </div>
                                    </div>
                                </form>
                            </div>


                            <div class="tab-pane fade show" id="admin" role="tabpanel" aria-labelledby="profile-tab">
                                <h3  class="register-heading">Admin  Login</h3>
                                <form method="post" action="fad.php">
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="User Name" name="username1" onkeydown="return alphaOnly(event);" required/>
                                        </div>
                                        


                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password" name="password2" required/>
                                        </div>
                                        
                                        <input type="submit" class="btnRegister" name="adsub" value="Login"/>
                                    </div>
                                </div>
                            </form>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            </section>
    </body>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
<script src="assets/js/jquery.min.js"></script><script src="assets/js/jquery.scrollex.min.js"></script><script src="assets/js/skel.min.js"></script><script src="assets/js/util.js"></script><script src="assets/js/main.js"></script>
    </html>

  