<?php
include 'config.php';

if(empty($_POST)=== false){
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if(empty($username)=== TRUE || empty($password) === TRUE){
        $errors[] = 'You need to enter a username and password';
    } elseif (member_exists($username) === false) {
    $errors[] = 'Username does not exist. Please register';
    }elseif (member_active($username)=== FALSE){
        $errors[] = 'You account isn`t activated. An activation link was sent to your e-mail. Follow it';
    }else {
        $login = login($username, $password);
        if($login === FALSE){
            $errors[] = 'Username or password is in correct';
        }else{
            echo 'Success';
                // Set session variables
                 $memberID= member_id_from_username($username);
                //set username session
                $_SESSION["username"] = $username;
                //set user id session
                $_SESSION["memberID"]=$memberID;
                //set user password session
                $_SESSION["password"] = $password;
                //redirect to dashbord
                header("location: dashboard.php");
        }
    }
    
    print_r($errors);
}
?>