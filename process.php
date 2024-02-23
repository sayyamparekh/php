<?php
include('database/database.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>process data</title>
<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet" type="text/css"/>
</head>

<body>
<?php

$data=$_REQUEST;
extract($data);
if($obj->Insert("reg_001",$username,$name,$password)){
	echo "<script>alert('Successfully Insert');location.href='index.php';</script>";
}
else{
	echo "Insertion Fail!";	
}



//echo "<pre>";
//print_r($data);
?>
</body>
</html>