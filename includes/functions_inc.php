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