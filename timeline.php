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
  background-color: #555; 
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
.white{
padding-top: 50px;
padding-left: 200px;
}
</style>
</head>
<!--Timeline code-->
<body>
  <!--Side navigation bar to redirect to certain parts of the page -->
<div id="mySidenav" class="sidenav" style="position:fixed">
  <a href="#Early" id="EarlyL">Early Life</a>
  <a href="#2000" id="second">2000s</a>
  <a href="#2010" id="third">2010s</a>
  <a href="#" id="fourth">2020s</a>
</div>
<!-- The video -->
<div style="position: absolute; z-index: -99; width: 100%; height: 760px">
  <iframe
    frameborder="0"
    height="100%"
    width="100%"
    src="https://www.youtube.com/embed/X3d5rT7FGLE?controls=0&amp;start=1&autoplay=1&mute=1&loop=1"
  >
  </iframe>
</div>

<div class="video-content">
  <h1 class="white">Kanye West: The perfect Egoist</h1>
  <p class="white">Kanye West's life is marked by a compelling mix of artistic brilliance, controversy, and personal struggles. Rising to fame as a successful rapper and producer, he has constantly pushed boundaries and challenged traditional norms within the music industry. Beyond his creative pursuits, Kanye has been open about his mental health battles and has made headlines for his outspoken nature and political endeavors. </p>
  
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


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
  <div class="container left">
    <div class="content">

      <h4><br>   <img src="Image/GraduationCover.jpg" style="width:35%"><b>Graduation</b></h4>  
    <p>"Graduation" is the third studio album by American rapper and producer Kanye West, released in 2007. The album features a more electro-pop and futuristic sound compared to his previous works, influenced by Daft Punk and other electronic music producers. With hit singles such as "Stronger" and "Good Life," the album became a commercial and critical success, praised for its innovative production and West's lyrical themes of personal growth and success. "Graduation" further established West as a major force in the music industry and solidified his reputation as a boundary-pushing artist.</p>
      
    </div>
  </div>
  <div class="container right">
    <div class="content" >
    <h4><br>   <img src="Image/Gallery8.jpg" style="width:35%"><b>Donda West Death</b></h4>  
      <p>Donda West was the mother of Kanye West and a former English professor. She passed away in November 2007, a day after receiving cosmetic surgery. Her death was a devastating loss for Kanye, who was very close to his mother and often referenced her in his music. Donda's passing also had a significant impact on Kanye's life and career, leading him to take a hiatus from music and focus on his personal well-being. Despite the tragedy, Donda's memory and legacy live on through her son's music and philanthropic efforts.</p>
    </div>
  </div>
  <div class="container left">
    <div class="content">

      <h4><br>   <img src="Image/808sCover.jpeg" style="width:35%"><b>808s and Heartbreaks</b></h4>  
    <p> "808s & Heartbreak" is Kanye West's fourth studio album released in 2008. The album features a more experimental sound, heavy use of autotune, and themes of heartbreak, loss, and loneliness. Despite mixed reviews, the album has since been recognized for its influence on popular music and cemented Kanye's reputation as a visionary artist willing to take risks. The albums dark themes are based off the personal tragedies Kanye was facing at the time which were his mother passing away and dealing a break up with his girlfriend.</p>   
    </div>
  </div>
  <div class="container right">
    <div class="content" >
    <h4><b>Kanye interupts Taylor Swift</b><br> 2009</h4>  
      <p>The Taylor Swift incident happened during the 2009 MTV Video Music Awards when Kanye West interrupted Swift's acceptance speech for Best Female Video, causing a stir in the audience and backlash against West. The incident remains a significant moment in both their careers and in the history of the MTV Video Music Awards, The two have since reconciled.</p>
    </div>
</div>
<div class="container left">
    <div class="content"id="2010">

      <h4><br>   <img src="Image/MBDTFcover.jpeg" style="width:25%"><b>My Beautiful Dark Twisted Fantasy</b></h4>  
    <p> 
"My Beautiful Dark Twisted Fantasy" is the fifth studio album by American rapper and producer Kanye West, released in 2010. The album is a sonic masterpiece, featuring lush and layered production, grandiose arrangements, and introspective lyrics exploring themes of fame, love, and self-doubt. The album was met with widespread critical acclaim and commercial success, cementing West's position as one of the most innovative and influential artists of his generation. "My Beautiful Dark Twisted Fantasy" is often regarded as one of the greatest albums of all time, and its impact can still be heard in today's music.</p>   
    </div>
  </div>
  <div class="container right">
    <div class="content" >
    <h4><b>Kanye West Presents: Good Music Cruel Summer,</b><br> 2012</h4>  
      <p>"Cruel Summer" is a collaborative album by artists signed to Kanye West's GOOD Music label, released in 2012. The album features contributions from artists such as Kid Cudi, Pusha T, and Big Sean, and showcases a diverse range of musical styles. Despite mixed reviews, it remains an important piece of West's discography and a testament to his ability to curate talented artists.</p>
    </div>
</div>
<div class="container left">
    <div class="content">

      <h4><br>   <img src="Image/YeezusCover.jpeg" style="width:35%"><b>        YEEZUS</b></h4>  
    <p> 
    "Yeezus" is the sixth studio album by Kanye West, released in 2013. The album showcases a bold and experimental sound, characterized by abrasive electronic beats, industrial influences, and aggressive lyrics. With its raw and confrontational approach, "Yeezus" challenged conventional notions of hip-hop and pushed the boundaries of artistic expression. While initially divisive among fans and critics, the album has since been recognized as a daring and influential work that solidified West's reputation as an innovative and boundary-pushing artist.</p>   
    </div>
  </div>
</div>

</body>

</html>

