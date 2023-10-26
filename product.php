<!-- Call up the header and navbar and set page title-->
<?php
$page_title= "Product page";
include 'includes/header.php';
include 'includes/nav.php';

include_once('includes/connection.php')
?>
<style>
/* Split the screen in half */
.split {
  height: 100%;
  width: 50%;
  position: fixed;
  z-index: 1;
  top: 0;
  overflow-x: hidden;
  padding-top: 20px;
}

/* Control the left side */
.left {
  left: 0;
  background-color: #111;
}

/* Control the right side */
.right {
  right: 0;
  background-color: grey;
}

/* If you want the content centered horizontally and vertically */
.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;

}


</style>

<div class="split left">
  <div class="centered">
    <img src="Image/3yrs.jpg" alt="Image not available">
    <h2 style="color: white;">Product name</h2>
    <p style="color: white;">Info on the product</p>
  </div>
</div>

<div class="split right">
  <div class="centered">
    
    <h2>More info on the product and form stuff</h2>
    <p>Some text here too.</p>
 
<button style='font-size:24px'>Wishlist <i class='far fa-heart'></i></button>
  </div>
</div>




  
