<?php
include('database/database.php');
?>
<?php
if(isset($_REQUEST['submit'])){
	extract($_REQUEST);
	
	if($obj->IsLogin("reg_001",$username,$password)){
		header('location:home.php');
	}
	else{
		$err_msg="Your username or password is Invalid!";
	}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login & Registration Form::aprodhania</title>
    <!-- meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="Art Sign Up Form Responsive Widget, Audio and Video players, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, 
		Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design"
    />
    <!-- /meta tags -->
	<link rel="icon" href="images/fab.jpg" sizes="16x16" type="image/png">
    <!-- custom style sheet -->
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <!-- /custom style sheet -->
    <!-- fontawesome css -->
    <link href="css/fontawesome-all.css" rel="stylesheet" />
    <!-- /fontawesome css -->
    <!-- google fonts-->
    <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- /google fonts-->

</head>


<body>
    <h1>Login Form</h1>
    <div class=" ap-login-form">
        <h2>Login Here</h2>
        <form action="index.php" method="post">

            <div class=" ap-form-group">
                <label>Username:</label>
                <div class="group">
                    <i class="fas fa-user"></i>
                    <input name="username" type="text" class="form-control" placeholder="Username" required="required" />
                </div>
            </div>
            <div class=" ap-form-group">
                <label>Password:</label>
                <div class="group">
                    <i class="fas fa-unlock"></i>
                    <input name="password" type="password" class="form-control" placeholder="Password" required="required" />
                </div>
            </div>
            <div class="forgot">
                <a href="#">Forgot Password?</a>
                <p><input type="checkbox">Remember Me</p>
            </div>
            <button name="submit" type="submit">Login</button>
        </form>
        <p class=" ap-register-p">Don't have an account?<a href="register.php" class="register"> Register</a></p>
    </div>
    <footer>
        <p class="copyright-agileinfo"> &copy; 2018 | Design Development by <a href=https://dribbble.com/aprodhania>aprodhania</a></p>
    </footer>

</body>

</html>