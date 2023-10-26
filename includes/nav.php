<?php
session_start();
if (!isset($_SESSION['Email'])){
$_SESSION['Email']="Logged Out";}
?>

<!-- Nav Bar -->
<nav class="navbar navbar-expand-lg bg-dark no-padding z50">
  <div class="container-fluid z50" style="background-color: rgba(0, 0, 0, 0.2);">

  <!-- Logo Image/Home page link -->
  <a href="index.php" title="Home"><img src="image/logo.png" style="width:70px;height:80px;" alt="home"></a>

  <!-- Dropdown menu or when on phones -->
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Page links -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item " >
          <a class="nav-link " href="music.php" style=" color:white">Music</a>
        </li>
        <li class="nav-item " >
          <a class="nav-link " href="yeezy.php" style=" color:white">Fashion</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="timeline.php" style="color:white">Timeline</a>
        </li>
        <li class="nav-item " >
          <a class="nav-link " href="gallery.php" style=" color:white">Gallery</a>
        </li>
          <li  style=" color:white">
          <a>
          <!--<?php       
          echo $_SESSION["Email"];
          ?>-->
          </a>
          </li>
          
        <!--
        <li class="nav-item " >
          <a class="nav-link " href="feedback.php" style=" color:white">Enquire</a>
        </li>
-->
        
        <li class="nav-item " >
          <a class="nav-link " href="store.php" style=" color:white">Store</a>
        </li>
  	    
      </ul>
    </div>
    <!-- Page links on right of nav bar -->
    
    <div class="collapse navbar-collapse position-absolute top-25 end-0 "  id="navbarNav">
      <ul class="navbar-nav " >
        <li class="nav-item " >
          <a class="nav-link " href="wishlist.php" title="Wishlist" style=" font-size:30px;color:white"><i class='far fa-heart'></i></a>
        </li>


        <li class="nav-item dropdown" >
          
          <a class="nav-link " href="#" title="Profile" style=" font-size:30px;color:white"><i class="fas fa-user "></i></a>
        </li>


        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>


      </ul>
    </div>

  </div>
  
</nav>