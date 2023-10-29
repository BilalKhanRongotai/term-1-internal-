<!-- Call up the header and navbar and set page title-->
<?php
$page_title= "Wishlist";
include 'includes/header.php';
include 'includes/nav.php';

include_once('includes/connection.php')
?>

<h1 style="color: white;  text-align: center;">Wishlist</h1>
<!-- Cards -->
<div class="row row-cols-1 row-cols-md-2 g-4">

  <div class="col">
    <div class="card card-left">
      <img src="image/card1.webp" class="card-img-top" alt="Image could not load">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">...</p>
        
      </div>
    </div>
  </div>
  
  <div class="col">
    <div class="card card-right">
      <img src="image/card2.jpg" class="card-img-top" alt="Image could not load">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">...</p>
      
      </div>
    </div>
  </div>
 
  <div class="col">
    <div class="card card-left">
      <img src="image/card3.jpg" class="card-img-top" alt="Image could not load">
      <div class="card-body">
        <h5 class="card-title">Card Title</h5>
        <p class="card-text">...</p>
     
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card card-right">
      <img src="image/card4.jpg" class="card-img-top" alt="Image could not load">
      <div class="card-body">
        <h5 class="card-title">Cart Title</h5>
        <p class="card-text">...</p>
 
      </div>
    </div>
  </div>
</div>





<?php
include 'includes/footer.php';
?>