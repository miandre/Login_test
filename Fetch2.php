<?php
    if($_SERVER['REQUEST_METHOD']=='POST'){

	$password = $_POST["password"];
	$username = $_POST["username"];

        $jsonSuccess['success'] = ' Registered new user: '.$username;
        $jsonFail['fail'] = ' Could not find user '.$username; 

        require_once('connect.php');


        $query =  "SELECT * FROM User WHERE username = ? AND password = ?";

        $statement= mysqli_stmt_init($con);
        if(!mysqli_stmt_prepare($statement, $query)){

        echo json_encode($jsonFail);

       }else{

	mysqli_stmt_bind_param($statement,"ss",$username, $password);
	mysqli_stmt_execute($statement);


	mysqli_stmt_store_result($statement);

        if( mysqli_stmt_num_rows($statement)>0){

	mysqli_stmt_bind_result($statement, $user_id, $name, $age, $username, $password);

	$user = array();

	while(mysqli_stmt_fetch($statement)){
		$user[name]= $name;
		$user[age]= $age;
		$user[username]= $username;
		$user[password]= $password;
	}

	   echo json_encode($user);

          }else{echo json_encode($jsonFail);
        }

	mysqli_stmt_close($statement);
	
}
mysqli_close($con);
?>					