<?php 
session_start(); 
include "db-conx.php";

if (isset($_POST['name']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$name = validate($_POST['name']);
	$pass = validate($_POST['password']);

	if (empty($name)) {
		header("Location: sign.php?errori=Company Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: sign.php?errori=Password is required");
	    exit();
	}else{
		// hashing the password
        $pass = md5($pass);

        
		$sql = "SELECT * FROM splash WHERE name='$name' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['name'] === $name && $row['password'] === $pass) {
            	$_SESSION['mail'] = $row['mail'];
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: session.php");
		        exit();
            }else{
				header("Location: sign.php?errori=Incorect Company Name or Password");
		        exit();
			}
		}else{
			header("Location: sign.php?errori=Incorect Company Name or Password");
	        exit();
		}
	}
	
}else{
	header("Location: sign.php");
	exit();
}