
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login Form::aprodhania</title>
    <!-- meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="Art Sign Up Form Responsive Widget, Audio and Video players, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, 
		Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design"
    />
    <!-- /meta tags -->
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
    <h1>Registration Form</h1>
    <div class=" ap-login-form">
        <h2>Registration</h2>
        <form action="process.php" method="POST">

		 <div class=" ap-form-group">
                <label>Name:</label>
                <div class="group">
                    <i class="fas fa-user-circle"></i>
                    <input type="text" name="name" class="form-control" placeholder="name" required="required" />
                </div>
            </div>
		
            <div class=" ap-form-group">
                <label>Username:</label>
                <div class="group">
                    <i class="fas fa-user"></i>
                    <input type="text" name="username" class="form-control" placeholder="Username" required="required" />
                </div>
            </div>
            <div class=" ap-form-group">
                <label>Password:</label>
                <div class="group">
                    <i class="fas fa-unlock"></i>
                    <input type="password" name="password" class="form-control" placeholder="Password" required="required" />
                </div>
            </div>

            <button name="submit" type="submit">Registration</button>
        </form>
        <p class=" ap-register-p">Already have an account?<a href="index.php" class="register"> Login</a></p>
    </div>
    <footer>
       <p class="copyright-agileinfo"> &copy; 2018 | Design Development by <a href=https://dribbble.com/aprodhania>aprodhania</a></p>
    </footer>

</body>

</html>