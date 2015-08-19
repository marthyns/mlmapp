<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 
	  include_once("config.php");
	 	
?>

<?php
// remove all session variables
session_unset(); 
// redirect to index when after session disstroy
if (session_destroy()) {
	//redirect back to index page
	header("Location:index.php");
}
?>

</body>
</html>