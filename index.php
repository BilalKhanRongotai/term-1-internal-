<!-- Call up the header, navbar, and carousel-->
<?php
$page_title= "Home";
include 'includes/header.php';
include 'includes/nav.php';
include 'includes/carousel.php';
?>
<br>
<h2 class="white centered underlined">The website for all things Ye</h2>

<br>
<div class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col">
    <div class="card card-left">
      <img src="image/card1.webp" class="card-img-top" alt="Image could not load">
      <div class="card-body">
        <h5 class="card-title">Hip Hop</h5>
        <p class="card-text">Kanye West has an amazing and extensive discography of groundbreaking mucsic. Over the years Ye has released many influencial albums that have changed the hip hop industry forever. Here you can see all of his albums and songs.</p>
        <a href="music.php" class="btn btn-dark">Music</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card card-right">
      <img src="image/card2.jpg" class="card-img-top" alt="Image could not load">
      <div class="card-body">
        <h5 class="card-title">Yeezy</h5>
        <p class="card-text">Founded by Kanye West, clothing brand Yeezy is known for its minimalist and futuristic designs. In collabaration with adidas, Yeezys footwear and assortment of other items has become very popular. Here you can see some of yeezys best, most popular colthes.</p>
        <a href="yeezy.php" class="btn btn-dark">Fashion</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card card-left">
      <img src="image/card3.jpg" class="card-img-top" alt="Image could not load">
      <div class="card-body">
        <h5 class="card-title">The life of Kanye</h5>
        <p class="card-text">Across the years Kanye west has lived a very interesting and exiting life. Throughout the years he has done alot of very important things. You can look here to learn more about the life of Ye, the artist formerly known as Kanye West.</p>
        <a href="#" class="btn btn-dark">History</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card card-right">
      <img src="image/card4.jpg" class="card-img-top" alt="Image could not load">
      <div class="card-body">
        <h5 class="card-title">Images</h5>
        <p class="card-text">With a career as prolific as Ye's there will be a copious amount of photos, images, and art. We have gone ahead and compiled it all into one gallery so that you can take a look at it yourself.</p>
        <a href="#" class="btn btn-dark">Gallery</a>
      </div>
    </div>
  </div>
</div>



<!-- Call up the footer-->
<?php
include 'includes/footer.php';
?>