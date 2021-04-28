<?php 
session_start(); 
include "db-conx.php";

if (isset($_POST['mail']) && isset($_POST['password'])
    && isset($_POST['name']) && isset($_POST['re_password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$mail = validate($_POST['mail']);
	$pass = validate($_POST['password']);

	$re_pass = validate($_POST['re_password']);
	$name = validate($_POST['name']);

	$user_data = 'mail='. $mail. '&name='. $name;


	if (empty($mail)) {
		header("Location: sign.php?erroru=Mail is required&$user_data");
	    exit();
	}else if(!preg_match("#^[a-z0-9_-]+((\.a-z0-9_-]+){1,})?@[a-z0-9_-]+((\.a-z0-9_-]+){1,})?\.[a-z]{2,30}$#i",$mail)){
        header("Location: sign.php?erroru=Mail is wrong Please check your mail&$user_data");
	    exit();
	}else if(empty($pass)){
        header("Location: sign.php?erroru=Password is required&$user_data");
	    exit();
	}

	else if(empty($re_pass)){
        header("Location: sign.php?erroru=Re Password is required&$user_data");
	    exit();
	}

	else if(empty($name)){
        header("Location: sign.php?erroru=Name is required&$user_data");
	    exit();
	}

	else if($pass !== $re_pass){
        header("Location: sign.php?erroru=The confirmation password  does not match&$user_data");
	    exit();
	}

	else{

		// hashing the password
        $pass = md5($pass);

	    $sql = "SELECT * FROM splash WHERE mail='$mail' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: sign.php?erroru=The Company Name is taken try another&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO splash(mail, password, name) VALUES('$mail', '$pass', '$name')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: sign.php?success=Your account has been created successfully");
	         exit();
           }else {
	           	header("Location: sign.php?erroru=unknown error occurred&$user_data");
		        exit();
           }
		}
	}
	
}else{
	header("Location: sign.php");
	exit();
}