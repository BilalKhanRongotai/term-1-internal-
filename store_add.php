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
            Sign Up
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
            </div>
            <div class="form-group row pt-4">
            <label for="price"class="col-sm-2 col-form-label">Price</label>
            <div class="col-sm-10">
                <input type="float" name="price" class="form-cotnrol" placeholder="Price">
            </div>
            </div>
            <div class="form-group row pt-4">
            <label for="price"class="col-sm-2 col-form-label">Category</label>
            <div class="col-sm-10">
            <select class="form-control" name="category" id="exampleFormControlSelect1">
                <option>Shoes</option>
                <option>Tops</option>
                <option>Bottoms</option>
                <option>Vinyl</option>
                <option>Cds</option>
                <option>Miscellaneous</option>
            </select>
            </div>
            </div>
            <div class="form-group row pt-4">
            <label for="price"class="col-sm-2 col-form-label">Year</label>
            <div class="col-sm-10">
            <select class="form-control" name="year" id="exampleFormControlSelect1">
                <option>2023</option>
                <option>2022</option>
                <option>2021</option>
                <option>2020</option>
                <option>2019</option>
                <option>2018</option>
                <option>2017</option>
                <option>2016</option>
                <option>2015</option>
                <option>2014</option>
                <option>2013</option>
                <option>2012</option>
                <option>2011</option>
                <option>2010</option>
                <option>2009</option>
            </select>
            </div>
            <div class="form-group row pt-4">
            <label for="price"class="col-sm-2 col-form-label">Image</label>
            <div class="col-sm-10">
                <input type="file" name="image" class="form-cotnrol" placeholder="Image">
            </div>
            </div>
            <div class="form-group row pt-3">
            <label for="email"class="col-sm-2 col-form-label">Description</label>
            <div class="col-sm-10">
                <textarea type="text" name="description" class="form-cotnrol" placeholder="description" style="width:500px; height:300px">
                
                </textarea>
            </div>
            </div>
            <div class="form-group row pt-5">
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