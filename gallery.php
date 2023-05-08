<!DOCTYPE html>
<html lang="en">
<?php
$page_title= "Kanye West :: Gallery";
include 'includes/header.php';
include 'includes/nav.php';
?>
<style>
   @import url('https://fonts.googleapis.com/css2?family=Lato:ital@1&display=swap');
  .gallery img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  align-content: center;
  object-position: center;
  transition: transform ease-in-out 0.5s;
}

#fullpage {
  display: none;
  position: absolute;
  z-index: 9999;
  top: 0;
  left: 0;
  width: 100vw;
  height: 100vh;
  background-size: contain;
  background-repeat: no-repeat no-repeat;
  background-position: center center;
  background-color: black;


}
.row > .column {
  padding: 0 8px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

.body{
  font-family: 'Lato', sans-serif;
}
</style>
<body>
<h2 class="white underlined margin-left"></h2>

<br>
<div class="gallery">

<div class="container" style="max-width:93%;">
  <div class="row">
    <div class="col grow">
   <img src="Image/Gallery10.jpg" class="hover-shadow preview" alt="Toy car on the road." />
    </div>
    <div class="col grow">
    <img src="Image/Gallery9.jpg"  class="img-fluid" alt="Image could not load">
    </div>
    <div class="col grow">
    <img src="Image/Gallery3.jpg" class="img-fluid" alt="Image could not load">
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col grow">
    <img src="Image/Gallery2.jpg" class="img-fluid" alt="Image could not load">
    </div>
    <div class="col grow">
    <img src="Image/Gallery5.jpg" class="img-fluid" alt="Image could not load">
    </div>
    <div class="col grow">
    <img src="Image/Gallery1.jpg" class="img-fluid" alt="Image could not load">
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col grow">
    <img src="Image/Gallery7.jpg" class="img-fluid" alt="Image could not load">
    </div>
    <div class="col grow">
    <img src="Image/Gallery8.jpg" class="img-fluid" alt="Image could not load">
    </div>
    <div class="col grow">
    <img src="Image/Gallery6.jpg" class="img-fluid" alt="Image could not load">
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col grow">
    <img src="Image/Gallery12.jpg" class="img-fluid" alt="Image could not load">
    </div>
    <div class="col grow">
    <img src="Image/Gallery13.jpg" class="img-fluid" alt="Image could not load">
    </div>
    <div class="col grow">
    <img src="Image/Gallery13.png" class="img-fluid" alt="Image could not load">
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col grow">
    <img src="Image/Gallery14.webp" class="img-fluid" alt="Image could not load">
    </div>
    <div class="col grow">
    <img src="Image/Gallery11.webp" class="img-fluid" alt="Image could not load">
    </div>
    <div class="col grow">
    <img src="Image/Gallery15.jpg" class="img-fluid" alt="Image could not load">
    </div>
  </div>
    <div class="col"></div>
  </div>
</div>
</div>
</body>
<?php
include 'includes/footer.php';
?>

</html>