<?php

$sname= "Splash-mysql-app";
$unmae= "moeuser";
$password = "moepass";

$db_name = "moe_db";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}
