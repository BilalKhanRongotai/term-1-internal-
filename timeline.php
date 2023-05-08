<!DOCTYPE html>
<html>
<?php
$page_title= "Kanye West :: Home";
include 'includes/header.php';
include 'includes/nav.php';
?>

<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  @import url('https://fonts.googleapis.com/css2?family=Lato:ital@1&display=swap');
* {
  box-sizing: border-box;
}

body {
  background-color: black;
  font-family: 'Lato', sans-serif;
  color: pink;
}
h2{
  text-align: center;
  font-family: Arial, Helvetica, sans-serif;
  color: pink;
}
h4{
  color:gray;
}
/* The actual timeline (the vertical ruler) */
.timeline {
  position: relative;
  max-width: 1200px;
  margin: 0 auto;
}

/* The actual timeline (the vertical ruler) */
.timeline::after {
  content: '';
  position: absolute;
  width: 6px;
  background-color: pink;
  top: 0;
  bottom: 0;
  left: 50%;
  margin-left: -3px;
}

/* Container around content */
.container {
  padding: 10px 40px;
  position: relative;
  background-color: inherit;
  width: 50%;
}

/* The circles on the timeline */
.container::after {
  content: '';
  position: absolute;
  width: 25px;
  height: 25px;
  right: -17px;
  background-color: grey;
  border: 4px solid red;
  top: 15px;
  border-radius: 50%;
  z-index: 1;
   
}

/* Place the container to the left */
.left {
  right: 25.5%;
  
}

/* Place the container to the right */
.right {
  left: 50%;
  margin-left: 3px;
}

/* Add arrows to the left container (pointing right) */
.left::before {
  content: " ";
  height: 0;
  position: absolute;
  top: 22px;
  width: 0;
  z-index: 1;
  right: 30px;
  border: medium solid white;
  border-width: 10px 0 10px 10px;
  border-color: transparent transparent transparent white;
}

/* Add arrows to the right container (pointing left) */
.right::before {
  content: " ";
  height: 0;
  position: absolute;
  top: 22px;
  width: 0;
  z-index: 1;
  left: 30px;
  border: medium solid white;
  border-width: 10px 10px 10px 0;
  border-color: transparent white transparent transparent;
 
}

/* Fix the circle for containers on the right side */
.right::after {
  left: -16px;
}

/* The actual content */
.content {
  padding: 10px 20px;
  background-color: #1D1D1D;
  position: relative;
  border-radius: 6px;
  border-color: red;
}

/* Media queries - Responsive timeline on screens less than 600px wide */
@media screen and (max-width: 600px) {
  /* Place the timelime to the left */
  .timeline::after {
  left: 31px;
  }
  
  /* Full-width containers */
  .container {
  width: 100%;
  padding-left: 70px;
  padding-right: 25px;
  }
  
  /* Make sure that all arrows are pointing leftwards */
  .container::before {
  left: 60px;
  border: medium solid white;
  border-width: 10px 10px 10px 0;
  border-color: transparent white transparent transparent;
  }

  /* Make sure all circles are at the same spot */
  .left::after, .right::after {
  left: 15px;
  }
  
  /* Make all right containers behave like the left ones */
  .right {
  left: 0%;
  }
}
/* Style the links inside the sidenav */
#mySidenav a {
  position: absolute; /* Position them relative to the browser window */
  left: -80px; /* Position them outside of the screen */
  transition: 0.3s; /* Add transition on hover */
  padding: 15px; /* 15px padding */
  width: 170px; /* Set a specific width */
  text-decoration: none; /* Remove underline */
  font-size: 20px; /* Increase font size */
  color: white; /* White text color */
  border-radius: 0 5px 5px 0; /* Rounded corners on the top right and bottom right side */
}

#mySidenav a:hover {
  left: 0; /* On mouse-over, make the elements appear as they should */
}

/* The about link: 20px from the top with a green background */
#EarlyL {
  top: 20px;
  background-color: black;
  
}

#second{
  top: 80px;
  background-color: gray; 
}

#third {
  top: 140px;
  background-color: black; 
  color: pink;
}

#fourth{
  top: 200px;
  background-color: #555 /* Light Black */
}

</style>
</head>
<body>
<div id="mySidenav" class="sidenav" style="position:fixed">
  <a href="#Early" id="EarlyL">Early Life</a>
  <a href="#2000" id="second">2000s</a>
  <a href="#" id="third">2010s</a>
  <a href="#" id="fourth">2020s</a>
</div>
<h2>Kanye West Timeline</h2>

<div class="timeline">
  <div class="container left">
    <div class="content" id="Early">
      <h4>8th June 1977 <br> Atlanta, Georgia USA </h4>
      <p>Kanye Omari West is born in Atlanta, Georgia in 1977 his parents are the late Donda Williams and Ray West.</p>
      <img src="Image/bby.jpg" style="width:25%">
    </div>
  </div>
  <div class="container right">
    <div class="content">
      <h4>1980</h4>
      <p>Kanye's parents get divorced. Kanye and his mother Donda moved to Chicago after this.</p>
      <img src="Image/3yrs.jpg" style="width:35%">
    </div>
  </div>
  <div class="container left">
    <div class="content">
    <h4>1990 <br> Humble Beginnings</h4>
      <p>When Kanye was 13 years old, his mother payed for the studio.</p>
    </div>
  </div>
  <div class="container right">
    <div class="content">
      <h4>1996 <br>The Journey Begins</h4>
      <p>Kanye went viral for the first time in 1996, his freestyle outside a Fat Beats store in Chicago became famous.</p>
      <img src="Image/freestyle.jpg" style="width:50%">
    </div>
  </div>
  <div class="container left">
    <div class="content">
      <h4>1998 <br> The Big Break</h4>
      <p>In 1998, Kanye sold his first few beats to local Chicago artists to Gravity and Dupri. He dropped out of College to pursue music full-time. </p>
    </div>
  </div>
  <div class="container right">
    <div class="content" id="2000">
      <h4>2000 <br> Jay-Z</h4>
      <p>In 2000 Kanye produced for Roc-a-Fella Records one of the biggest record companies in the world. He would produce for Jay-Z who at the time was the biggest hip hop star in the world.</p>
    </div>
  </div>
  <div class="container left">
    <div class="content">
      <h4>2001</h4>
      <p>In 2001 Kanye would produce 5 songs for Jay-Z's 'Blueprint' making him the hottest producer on the planet as the 'Blueprint' would go on to be double platinium.</p>
    </div>
  </div>
  <div class="container right">
    <div class="content">
      <h4>2002 <br> Solo</h4>
      <p> After a late studio session, Kanye would drive home where he would get into a car crash which resulted in his mouth being wired shut but this wouldn't stop him from recording his debut single <br> "Through The Wire"</p>
    </div>
  </div>
  <div class="container left">
    <div class="content">

      <h4><br>   <img src="Image/TCDcover.webp" style="width:35%"><b>The College Dropout</b></h4>  
    <p>"The College Dropout" is Kanye West's debut album released in 2004. It features a unique blend of soulful samples and introspective lyrics, showcasing West's talent as both a rapper and producer. With hit singles like "Jesus Walks" and "Through the Wire," the album quickly became a critical and commercial success, earning widespread praise for its innovation and fresh take on hip-hop, cementing West's place as one of the most important and influential artists of his generation.</p>
      
    </div>
  </div>
  <div class="container right">
    <div class="content" >
    <h4><br>   <img src="Image/LRcover.jpg" style="width:35%"><b>Late Registration</b></h4>  
      <p>"Late Registration" is Kanye West's second studio album released in 2005. It features collaborations with a diverse array of artists and showcases West's evolution as a producer, incorporating live instrumentation and orchestration into his sound. The album received widespread critical acclaim for its musicality and lyrical depth, cementing West's position as one of the most innovative and boundary-pushing artists of his time.</p>
    </div>
  </div>
</div>

</body>

</html>

