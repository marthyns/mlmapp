<?php
/**
 * This checks if member is active
 * @param type $username
 * @return boolean
 */
function member_active($username){
    $username = trim($username);
    $con=mysqli_connect(DB_SERVER,DBASE_USER,DBASE_PASS,DBASE_NAME);
    $sql="SELECT * FROM member WHERE username = '$username' AND member_active = 1";
    $query = mysqli_query($con,$sql); 
    $data = mysqli_fetch_array($query, MYSQLI_NUM);
    if($data[0] > 1) {
        return TRUE;
    }else{
        return FALSE;
    }
}
/**
 * This function activates the member
 * @param type $email
 */
function activate_member($email){
    $email = trim($email);
    $con=mysqli_connect(DB_SERVER,DBASE_USER,DBASE_PASS,DBASE_NAME);
    $query="UPDATE member SET member_active = 1 WHERE  email='$email'";
    (mysqli_query($con,$query))?TRUE: FALSE;
}
/**
 * Gets member id using username 
 * @param type $username
 * @return type Member ID
 */

function member_id_from_username($username){
    $memberID="";
    $username = trim($username);
    $con=mysqli_connect(DB_SERVER,DBASE_USER,DBASE_PASS,DBASE_NAME);
    $sql="SELECT * FROM member WHERE username= '$username'";
    $results = mysqli_query($con,$sql); 
    while($row = mysqli_fetch_assoc($results)) {
    $memberID = $row['member_id'];
    }
    return $memberID;
    
}
/**
 * Gets the member register date
 * @param string $memberID
 */
function get_date_registered($username){
    $date="";
    $username = trim($username);
    $con=mysqli_connect(DB_SERVER,DBASE_USER,DBASE_PASS,DBASE_NAME);
    $sql="SELECT * FROM member WHERE username= '$username'";
    $results = mysqli_query($con,$sql); 
    while($row = mysqli_fetch_assoc($results)) {
    $date = $row['register_date'];
    }
    return $date;
}
/**
 * 
 * @param type $username
 * @param type $password
 * @return boolean
 */
function login($username, $password){
    $member_id = member_id_from_username($username);
    $username = trim($username);
    $password = sha1($password);
    
    $con=mysqli_connect(DB_SERVER,DBASE_USER,DBASE_PASS,DBASE_NAME);
    $sql="SELECT * FROM member WHERE username = '$username' AND password='$password'"; 
    $query = mysqli_query($con,$sql);
     $data = mysqli_fetch_array($query, MYSQLI_NUM);
     if($data[0] >= 1) {
        return TRUE;
    }else{
        return FALSE;
    }
}

/**
 * Checks if member Exists
 * @param type $username
 * @return boolean
 */

function member_exists($username){
    $username=trim($username);
    $con=mysqli_connect(DB_SERVER,DBASE_USER,DBASE_PASS,DBASE_NAME);
    $sql="SELECT * FROM member WHERE username = '$username'"; 
    $query = mysqli_query($con,$sql);
    $data = mysqli_fetch_array($query, MYSQLI_NUM);
    if($data[0] > 1) {
        return TRUE;
    }else{
        return FALSE;
    }
}
