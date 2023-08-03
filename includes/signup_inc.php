<?php 

//Calling the connections page
require('connection.php');
//Calling the functions_inc page
require('functions_inc.php');

if($_SERVER['REQUEST METHOD']=='POST'){
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
    $repeat_pwd = mysqli_real_escape_string($conn, $_POST['repeat_pwd']);
}
//Validate email 
if (invalidEmail($email)!== false){
    header("Location: ../signup.php?error=invalid_email");
    exit();
}
createUser($conn, $email, $pwd);
{
    header("Location: ../signup.php");
    exit();
}



?>





