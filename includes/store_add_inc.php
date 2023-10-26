<?php 

//Calling the connections page
require('connection.php');
//Calling the functions_inc page
require('functions_inc.php');

if($_SERVER['REQUEST_METHOD']=='POST'){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $price = mysqli_real_escape_string($conn, $_POST['price']);
    $category = mysqli_real_escape_string($conn, $_POST['category']);
    $year = mysqli_real_escape_string($conn, $_POST['year']);
    $image = mysqli_real_escape_string($conn, $_POST['image']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);



    //Validate email
    
    
    /*if (emptyInputSignup($email, $pwd, $repeat_pwd)!== false){
        header("Location: ../signup.php?error=empty_fields&email=" . $email . "&pwd=" . $pwd . "&pwd_repeat=" . $repeat_pwd);
        exit();
    }

    if (invalidEmail($email)!== false){
        header("Location: ../signup.php?error=invalid_email");
        exit();
    }

    if(pwdMatch($pwd, $repeat_pwd)!== false)
    {
        header("Location: ../signup.php?error=passwords_does_not_match");
        exit();
    }

    if(longPwd($pwd) !==false){
        header("Location: ../signup.php?error=password_is_too_long");
        exit();
    }
    if(shortPwd($pwd) !==false){
        header("Location: ../signup.php?error=password_is_too_short");
        exit();
    }

    if(emailExists($conn, $email)){
        header("Location: ../signup.php?error=email_is_in_use");
        exit();
    }
    */

createItem($conn, $name, $price, $category, $year, $image, $description);

} else {
    header("Location: ../store_add.php");
    exit();

}


?>
