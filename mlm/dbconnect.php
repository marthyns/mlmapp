<?php

define("DB_SERVER", "localhost");

define("DBASE_NAME", 'letsliftghdb');

define("DBASE_USER", 'root');

define("DBASE_PASS", '');
define("WEB_URL", "localhost/letsliftgh/");

$connect_error = "We sincerely apologise. We are experiencing connection problems";

$con=mysqli_connect(DB_SERVER,DBASE_USER,DBASE_PASS,DBASE_NAME);

($con)? TRUE : die($connect_error);


?>