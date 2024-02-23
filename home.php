<?php
session_start();

if(isset($_SESSION['name'])){
	$msg="You're Logged in as ".$_SESSION['name'];
}
else{
	header('location:index.php');
}
	
	if(@$_REQUEST['status']=='logout'){
		session_destroy();
		header('location:index.php');
	}
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Member Login</title>

    <!-- Bootstrap -->
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
<style>
.login_msg{
	float:right;	
	margin-right:50px;
	color:#000;
	
}
.logout_msg{
	float:right;
	color:#fff;
	margin-right:50px;
}
.h2_msg{
	margin-top:200px;
	text-align:center;
	font-size:100px;
	color:#73B56B;
	font-family: 'Pacifico', cursive;
}
.by_alamin{
	font-size:70px;
	color:#D78329;
}
.oop_msg{
	text-align:center;
	color:#fff;
	font-size:30px;
	font-family: 'Poiret One', cursive;
}
.logout_color{
	color:red;
}
</style>
<body>

<div class="login_msg">
<?php
echo @$msg;
?>
</div>

<br />
<div class="logout_msg">
<pre>
	<a class="logout_color" href="home.php?status=logout">Logout</a>
</pre>
</div>




    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  </body>
</html>