<?php 
require("config.php") ;
//validation before entery
//check if sesseions are set
( !empty($_SESSION['memberID']) && !empty($_SESSION["username"]))?  :  die("Sorry you are not allowed here at this time"); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Activation Code</title>
</head>
<body>
Hello <?php echo strtoupper($_SESSION["username"]) ?>, an activation link has been sent to <strong><?php echo $_GET["mail"] ?></strong>. Please follow that link
</body>
</html>