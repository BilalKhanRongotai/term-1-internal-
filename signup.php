<?php 
$page_title= "Signup";
include 'includes/header.php';
include 'includes/nav.php';

//include_once('includes/connection.php')
?>

<div class="container fluid pt-5 pb-5">
    <div class="row">
        <div class="col-sm-3">
        <div class="col-sm-6">
        <h2>
            Sign Up
        </h2>
        <form class="form-control-lg" action="sign_inc.php">
            <div class="form-group row pt-3">
            <label for="email"class="col-sm-2 col-form-label">E-mail</label>
            <div class="col-sm-10">
                <input type="text" name="email" class="form-cotnrol" placeholder="Email">
            </div>
            <div class="form-group row pt-4">
            <label for="password"class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input type="password" name="pwd" class="form-cotnrol" placeholder="Password">
            </div>
            </div>
            <div class="form-group row pt-4">
            <label for="password"class="col-sm-2 col-form-label"> RepeatPassword</label>
            <div class="col-sm-10">
                <input type="password" name="repeat_pwd" class="form-cotnrol" placeholder="Repeat Password">
            </div>
            </div>
           
            <div class="form-group row pt-5">
            <label for="submit"class="col-sm-2 col-form-label">Signup</label>
            <div class="col-sm-10">
                <button type="signup" name="signup" class="form-cotnrol" placeholder="Signup">Signup</button>
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