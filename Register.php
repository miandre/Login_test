<?php
	$con = mysqli_connect("mysql7.000webhost.com","a6866500_iou","kth2016","a6866500_iou");

	$name = $_POST["name"];
	$age = $_POST["age"];
	$password = $_POST["password"];
	$username = $_POST["username"];

	$query= "INSERT INTO User (name, age, username, password) VALUES (?,?,?,?)"
	$statement = mysqli_stmt_init($con);
	if(!mysqli_stmt_prepare($con,$query)({

	}else

	mysqli_stmt_bind_param($statement,"siss",$name, $age, $username, $password);

	mysqli_stmt_execute($statement);

	mysqli_stmt_close($statement);
}
	mysqli_close($con);

?>