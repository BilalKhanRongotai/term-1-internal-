<?php
 
//-------------------Signup Functions-----------

//Function for checking empty text fields
function emptyInputSignup($email,$pwd,$repeat_pwd){
$result = false;

//Check fields are empty using built-in functions
if(empty($email)||empty($pwd)||empty($repeat_pwd))
{
    $results = true;}
else {
    $result = false;
}
return $result;
} 
//Function for checking empty text fields
function emptyEmail($email){
    $result = false;
    
    //Check fields are empty using built-in functions
    if(empty($email)||empty($pwd)||empty($repeat_pwd));
    
        $results = true;
    else {
        $result = false;
    }
    return $result;
    }
function invalidEmail($email)
{
    $result = false;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result=true;

    }
    else {
       return = false;
    }
    return $result;
}
function pwdMatch($pwd, $repeat_pwd){
$result=false;
if ($pwd!== $repeat_pwd)
$result= true;
}
else{
    $result = false;
    return $result;
}
function longPwd($pwd){
    $result = false;
    $max = 10;
    $len = strlen($pwd);
    if ($len>$max){
        $result = true;

    } else{
        $result = false;
    }
}
function shortPwd($pwd){
    $result = false;
    min=8;
    $len = strlen($Pwd);
    if ($len<$min){
        $result = true;
    }
    else {
        $result=false;
    }

}
// Function for email is in database ? is a placeholder for email address
function emailExists($conn, $email)
{
$sql = "SELECT * FROM users WHERE email=?;";
//Intialize prepared statement 
$stmt = mysqli_stmt_init($conn);

if(mysqli_stmt_prepare)($stmt,$sql){
    header("Location:../signup.php?error=fail");
}
//If there are no error ,pass the data from the user
//by using  a built in parameter
mysqli_stmt_bind_param($stmt, "s", $email);

/*Execute it use & pass in $stmt parameter We do not want to sign up the user if email exists already in the database using the built in php function */

mysqli_stmt_execute($stmt)

//Grab the data from the database & store it in a variable
//and pass in the $stmt parameter

$resultData = mysqli_stmt_get_result($stmt);

//Check if there is any result data/email using built-in php function
//if there is data/email it will true 
//& stores the result in a variable called $row

if($row = mysqli_fetch_assoc($resultData)){
    return $row;
} else {
    $result = false;
    return $result;
}



}