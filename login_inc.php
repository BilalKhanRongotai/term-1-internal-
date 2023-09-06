<?php
//calling tonnctions page
require 'connections.php';
require 'functions_Inc.php';

//cek if login button is clicked 
if (isset($_post['login_btn'])) {
// store email and password in varibles 
 $username = $_POST['email'];
 $pwd = $_POST['pwd'];

 // check iif text fields are empty  and set error message 
 if(emptyInputlogin($username, $pwd,)){
header('location:../login.php?error= empty_fields');
    //stop script
    exit();
 }
loginuser($conn, $username, $pwd);
} 
    // if credentsa are invalid retirect to login page 
 else{
    header('location;../login.php');
}
