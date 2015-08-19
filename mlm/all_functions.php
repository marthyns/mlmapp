<?php
/**
 * This function register users
 * @param type $username
 * @param type $email
 * @param type $password
 */
   function register($username,$email, $password){
    $con=mysqli_connect(DB_SERVER,DBASE_USER,DBASE_PASS,DBASE_NAME);
    $usname= trim($username);
    $mail= trim($email);
    $pass= sha1(trim($password));

    $sql = "INSERT INTO member (username, email, password)VALUES ('$usname', '$mail', '$pass')";
     if(mysqli_query($con,$sql)){
     	echo "user created";
      //set username sessions
      $_SESSION['username']=$username;
       //set password sessions
      $memberID=member_id_from_username($username);
      $_SESSION['memberID']=$memberID;
      //send emal activatin code to the email
      send_email_activation_code($mail);
       //Redirect after user has been created
      header("Location: user_registered.php?mail=$email");
     }else{
     	die("Sorry an error occured".mysql_error());
     };

     exit();
}
/**
 * this function genereate an activation code by using the username and current date seconds
 * @param string $email
 * 
 */
function send_email_activation_code($email){
    $current_date= date("s");
    $characters= trim($email.$current_date);
    $code=  sha1($characters);
    //echo $code;

    //create a db connection
    $con=mysqli_connect(DB_SERVER,DBASE_USER,DBASE_PASS,DBASE_NAME);
    
    //update user`s verification row with the code
    $query="UPDATE member SET email_activation_code = '$code' WHERE  email='$email'";
    (mysqli_query($con,$query))?TRUE: FALSE;
    // Email the user their activation link
    $to = "$email";              
    $from = "auto_responder@letsliftgh.com";
    $subject = 'Letsliftgh Account Activation';
    $message = '<!DOCTYPE html><html><head><meta charset="UTF-8"><title>Letsliftgh Message</title></head><body style="margin:0px; font-family:Tahoma, Geneva, sans-serif;"><div style="padding:10px; background:#333; font-size:24px; color:#CCC;"><a href="http://www.Letsliftgh.com"><img src="http://www.Letsliftgh.com/images/logo.png" width="36" height="30" alt="Letsliftgh" style="border:none; float:left;"></a>Letsliftgh Account Activation</div><div style="padding:24px; font-size:17px;">Hello,<br /><br />Click the link below to activate your account when ready:<br /><br /><a href="http://www.Letsliftgh.com/activation.php?email='.$email.'&code='.$code.'">Click here to activate your account now</a><br /><br />Login after successful activation using your:<br />* E-mail Address: <b>'.$email.'</b></div></body></html>';
    $headers = "From: $from\n";
    $headers .= "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\n";
    mail($to, $subject, $message, $headers);
    echo "Activation code has been sent to $email";
    exit();
}
/**
 * 
 * @param type $email user email
 * @return FALSE email not valid
 * @return TRUE email valid 
 */
function validate_email($email){
 if(filter_var($email, FILTER_VALIDATE_EMAIL)){
     return TRUE;
     }
     else{ 
     return FALSE;
     }
 exit();
}
/**
 * checks if an email exist in the database
 * @param type $email
 * @return boolean
 */
function email_exist($email){
    $email = trim($email);
    $con=mysqli_connect(DB_SERVER,DBASE_USER,DBASE_PASS,DBASE_NAME);
    $sql="SELECT * FROM member WHERE email = '$email'";
    $query = mysqli_query($con,$sql); 
    $data = mysqli_fetch_array($query, MYSQLI_NUM);
    if($data[0] > 1) {
        return TRUE;
    }else{
        return FALSE;
    }
}
/**
 * This function verifies if the activations code is same as the one in the database
 * @param  $code
 * @return boolean
 */
function verify_activation_code($code){
    $email = trim($code);
    $con=mysqli_connect(DB_SERVER,DBASE_USER,DBASE_PASS,DBASE_NAME);
    $sql="SELECT * FROM member WHERE email_activation_code = '$code'";
    $query = mysqli_query($con,$sql); 
    $data = mysqli_fetch_array($query, MYSQLI_NUM);
    if($data[0] > 1) {
        return TRUE;
    }else{
        return FALSE;
    }
    }

