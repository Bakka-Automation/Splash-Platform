<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="Stylee.css">
</head>
<body>
     <h1>Hello, <?php echo $_SESSION['name']; ?></h1>
     <a href="logout.php">Logout</a>
</body>
</html>

<?php 
}else{
     header("Location: sign.php");
     exit();
}
 ?>