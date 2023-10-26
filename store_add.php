<?php 
$page_title= "Store Add";
include 'includes/header.php';
include 'includes/nav.php';

//include_once 'includes/protect_admin_pages,php';
include_once('includes/connection.php')
?>

<div class="container fluid pt-5 pb-5">
    <div class="row">
        <div class="col-sm-3">
        <div class="col-sm-6">
        <h2>
            Store add
        </h2>

<?php
/*
if (isset($_GET['error'])) {
if($_GET['error']== "empty_fields"){
    echo '<div class="alert alert-danger" role="alert">
    Fill in all fields
    </div>';
}
if($_GET['error']== "invalid_email"){
    echo '<div class="alert alert-danger" role="alert">
    Invalid email
    </div>';
}
if($_GET['error']== "passwords_does_not_match"){
    echo '<div class="alert alert-danger" role="alert">
    passwords_does_not_match
    </div>';
}
if($_GET['error']== "password_is_too_long"){
    echo '<div class="alert alert-danger" role="alert">
    password_is_too_long maximum 10
    </div>';
}
if($_GET['error']== "password_is_too_short"){
    echo '<div class="alert alert-danger" role="alert">
    password_is_too_short minimum 8
    </div>';
}
if($_GET['error']== "email_is_in_use"){
    echo '<div class="alert alert-danger" role="alert">
    email_is_in_use
    </div>';
}if($_GET['error']== "invalid_email"){
    echo '<div class="alert alert-danger" role="alert">
    Invalid email
    </div>';
}
if($_GET['error']== "empty_fields"){
    echo '<div class="alert alert-danger" role="alert">
    Fill in all fields
    </div>';
}
}*/
?>


        <form class="form-control-lg" action="includes/store_add_inc.php" method="POST">
            <div class="form-group row pt-3">
            <label for="email"class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input type="text" name="name" class="form-cotnrol" placeholder="Name">
            </div>
            <div class="form-group row pt-4">
            <label for="price"class="col-sm-2 col-form-label">Price</label>
            <div class="col-sm-10">
                <input type="float" name="price" class="form-cotnrol" placeholder="Price">
            </div>
            </div>
           
            <div class="form-group row pt-5">
            <label for="submit"class="col-sm-2 col-form-label">Submit</label>
            <div class="col-sm-10">
                <button type="submit" name="submit_btn" class="form-cotnrol" placeholder="Signup">Submit</button>
            </div>
            </div>
            </div>
        </form>
        </div>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>







<?php
include 'includes/footer.php';
?>