<?php
require("config.php");
if (!empty($_POST)) {
$username= $_POST["username"];
$password=$_POST["password"];
$cpassword=$_POST["confirm_password"];
$email=$_POST["email"];

$username_length=strlen(trim($username));
$password_length= strlen(trim($password));

if (empty($username) || empty($password) || empty($cpassword) || empty($email)) {
  $errors[]="All field are required";
}

if ($password!==$cpassword) {
  $errors[]="Password doesn`t match";
}

if ($username_length < 6 || $username_length > 32) {
  $errors[]="Username must be 6-32 characters";
}
if ($password_length < 6 || $password_length>32) {
  $errors[]="Password must be 6-32 characters";
}
if(validate_email($email)==FALSE){
    $errors[]="Email $email not valid. Please enter a valid email";
}
print_r($errors);

if (empty($errors)==TRUE) {
  if (member_exists($username)) {
    header("Location: register.php?error='User already exist'");
    die();
  }else{
    register($username,$email,$password);
    
    }
  }
  
}

/*
if(!empty($username) || !empty($password) || !empty($vpassword)|| !empty($email) ){
  if ($username_length < 6) {
    //redirect back to registeration page with error
    header("Location:register.php?error='Username should be at least characters'");
  }elseif($password !==$cpassword) {
    $errors[]="Passwords doesn't match";
    die($errors);
  }
} else{
  //redirect back to registeration page with error
  header("Location: register.php?error='All fields required'");
}*/