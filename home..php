<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <h1>Hello, <?php echo $_SESSION['name']; ?></h1>
<a href="home2.php"><h4>Click here</h4></a> 
   

<div style=" background-color: gray"><a href="logout.php"><h4>Logout</h4></a> </div>
   
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>