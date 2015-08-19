<?php 
require("config.php") ;
//validation before entery
//check if sesseions are set
if( !empty($_GET['email']) && !empty($_GET['code'])){ 
    $email=$_GET['email'];
    $code=$_GET['code'];
    
    
    //check if email exists in database
    if (email_exist($email)&& verify_activation_code($code)){
        activate_member($email);
        echo "Congrats! Activation is successful.<a href='index.php'>Click here to login</a>";
    }  else {
        die(" Could not activate $email we are sorry ");
    }
} else {
    die("Sorry you are not allowed here at this time. Missing variables");
}


