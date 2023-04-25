<!DOCTYPE html>
<html lang="en">
<?php
$page_title= "Kanye West :: Gallery";
include 'includes/header.php';
include 'includes/nav.php';
?>
<style>
/* (A) WHOLE PAGE */
* { box-sizing: border-box; }
body { 
  background: #eee;
  background-color: beige;


}
 
/* (B) GALLERY WRAPPER */
.gallery {
  /* (B1) GRID LAYOUT - 3 IMAGES PER ROW */
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  grid-gap: 20px;
 
  /* (B2) OPTIONAL WIDTH RESTRICT */
  max-width: 1000px;
  margin: 0 auto;
  overflow: hidden;
/* (C) GALLERY IMAGES */
.gallery img {
  /* (C1) DIMENSION */
  width: 100%;
  height: 150px; /* optional */
  padding: 10px;
 
  /* (C2) COLORS */
  border: 1px solid #ddd;
  background: #fff;
 
  /* (C3) IMAGE RESIZE */
  /* cover | contain | fill | scale-down */
  object-fit: contain;
  position: relative;
}
}
/* (D) ON SMALL SCREENS - 2 IMAGES PER ROW */
@media only screen and (max-width: 600px) {
  .gallery {
    grid-template-columns: repeat(2, 1fr);
  }
}
/* (E) OPTIONAL ZOOM ON HOVER */
.gallery img:hover {
  z-index: 9;
  transform: scale(1.3);
  /* linear | ease | ease-in | ease-out | ease-in-out */
  transition: transform ease 0.5s;
}
/* (F) FULLSCREEN MODE */
.gallery img.full {
  position: fixed;
  top: 0; left: 0; z-index: 999;
  height: 800px;

  background: rgba(0, 0, 0, 0.7);
}
.gallery img.full:hover {
  z-index: 999;
  transform: none;
}
</style>
<div class="gallery">
  <img src="Image/Gallery1.jpg" style="width:50%" title="TITLE 1" >
  <img src="Image/Gallery2.jpg" style="width:100%" title="TITLE 1" >
  <img src="Image/Gallery3.jpg" style="width:50%" title="TITLE 1" >
  <img src="Image/Gallery5.jpg" style="width:100%" title="TITLE 1" >
  <img src="Image/Gallery6.jpg" style="width:100%" title="TITLE 1" >
  <img src="Image/Gallery7.jpg" style="width:100%" title="TITLE 1" >
  <img src="Image/Gallery8.jpg" style="width:100%" title="TITLE 1" >
  <img src="Image/Gallery9.jpg" style="width:50%" title="TITLE 1" >
</div>
<script>
    window.onload = () => {
  for (let i of document.querySelectorAll(".gallery img")) {
    i.onclick = () => i.classList.toggle("full");
  }
};
</script>
<?php
include 'includes/footer.php';
?>

</html>