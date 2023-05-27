<!-- Call up the header and navbar and set page title-->
<?php
$page_title = "Donda";
include 'includes/header.php';
include 'includes/nav.php';
?>

<!-- set the splitscreen -->
<div class="container" style="max-width:100%;">
    <div class="row split">
        <div class="col left" style="background-color:#343434;"> <!-- left col -->
            <div class="leftT" style="background-color:black;"></div> <!-- top section of left col -->
            <div id="leftM"> <!-- middle section of left col -->
                <!-- i frame for songs -->
                <iframe class="video" id="video-player" width="240px" height="240px" frameborder="0"></iframe> 

                 <!-- div for song lyrics -->
                <div id="LyricsContainer" style="display: none; max-height:205px; background-color:lightgrey; padding-left: 20px; padding-top: 10px;">  
                </div>

            </div>
            <div class=leftB style="background-color:black;"> <!-- bottom section of left col -->
            </div>

        </div>
        <!-- right col -->
        <div class="col right" style="background-color:grey;"> 
            <br>
            <div class="albumcover"><img src="image/DondaCover.jpeg" class="img-fluid" alt="Image could not load"></div> <!-- album cover -->
            <br>
            <h3 class="albumtitle">Donda</h3> <!-- title of the album -->
            <!-- Description/background of album -->
            <p class="albumdesp">Donda, the tenth studio album released by Kanye West in 2021, is a deeply personal and emotionally charged work that serves as a tribute to West's late mother, after whom the album is named. The album is a sprawling and ambitious work that draws on a wide range of musical styles and influences, from gospel and R&B to trap and drill.</p>
            <p class="albumdesp">Thematically, Donda is a deeply introspective and personal work that explores West's complex relationship with his mother and the impact that her loss has had on his life and creative vision. Tracks like "Jail" and "God Breathed" showcase West's powerful vocals and introspective lyricism, while "Off the Grid" and "Pure Souls" feature dynamic and high-energy collaborations with a range of notable artists, including The Weeknd, Kid Cudi, and Lil Baby.</p>
            <p class="albumdesp">Musically, Donda is a diverse and eclectic work that showcases West's innovative production style and his ability to blend disparate genres and influences into a cohesive whole. The album features a wide range of collaborators, including Jay-Z, Marilyn Manson, and The LOX, who bring their own unique perspectives and musical styles to the mix.</p>
            <p class="albumdesp">Overall, Donda is a powerful and emotionally charged work that serves as a testament to the enduring legacy of West's mother and the transformative power of personal growth and self-discovery. The album is a powerful and inspiring work that showcases West's continued growth and evolution as an artist and as a person, and stands as a defining work of his career.</p>

            <!-- tracklist -->
            <ul class="list-group">
                <li class="list-group-item albumtrack" style="background-color: grey;">Donda Chant <!-- Song title -->
                    <span class="artist">• Kanye West • Syleena Johnson</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="6_Y6tThuw9I"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics1" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Interlude">I</span> <!-- Interlude symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: grey;">Jail <!-- Song title -->
                    <span class="artist">• Kanye West • Jay-Z • Francis And The Lights</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="IviYsgJXG5k"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics2" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: grey;">God Breathed <!-- Song title -->
                    <span class="artist">• Kanye West • Vory</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="aIhdYj4tfFo"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics3" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: grey;">Off The Grid <!-- Song title -->
                    <span class="artist">• Kanye West • Fivio Foreign • Playboi Carti</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="EbDMNjT-QpI"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics4" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: grey;">Hurricane <!-- Song title -->
                    <span class="artist">• Kanye West • The Weeknd • Lil Baby</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="bPjZmQAvk_8"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics5" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: grey;">Praise God <!-- Song title -->
                    <span class="artist">• Kanye West • Baby Keem • Travis Scott</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="9sJZOGxRxwM"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics6" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: grey;">Jonah <!-- Song title -->
                    <span class="artist">• Kanye West • Lil Durk • Vory</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="txion5seTBA"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics7" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: grey;">Ok Ok <!-- Song title -->
                    <span class="artist">• Kanye West • Fivio Foreign • Rooga • Lil Yachty</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="nQ94QQinn5o"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics8" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: grey;">Junya <!-- Song title -->
                    <span class="artist">• Kanye West • Playboi Carti</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="uZET6hpfV-4"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics9" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: grey;">Believe What I Say <!-- Song title -->
                    <span class="artist">• Kanye West</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="Qp-O4eIUgf0"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics10" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: grey;">24 <!-- Song title -->
                    <span class="artist">• Kanye West • Vory</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="o9GXiQBUK4Y"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics11" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: grey;">Remote Control <!-- Song title -->
                    <span class="artist">• Kanye West • Young Thug</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="0Rtek05tOKU"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics12" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: grey;">Moon <!-- Song title -->
                    <span class="artist">• Kanye West • Kid Cudi • Don Toliver</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="fMjasXiIhiQ"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics13" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: grey;">Heaven And Hell <!-- Song title -->
                    <span class="artist">• Kanye West</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="Xlvk8K0Wbpo"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics14" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: grey;">Donda <!-- Song title -->
                    <span class="artist">• Kanye West • Stalone • The World Famous Tony Williams</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="ofIluxP1nEU"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics15" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: grey;">Keep My Spirit Alive <!-- Song title -->
                    <span class="artist">• Kanye West • Conway TM • Westside Gunn</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="V5VYKkx7N-g"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics16" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: grey;">Jesus Lord <!-- Song title -->
                    <span class="artist">• Kanye West • Jay Electronica</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="Fmz2IjrQiWM"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics17" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: grey;">New Again <!-- Song title -->
                    <span class="artist">• Kanye West • Chris Brown</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="X74OxXravDo"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics18" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: grey;">Tell The Vision <!-- Song title -->
                    <span class="artist">• Kanye West • Pop Smoke</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="5Z2NpIh1gV0"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics19" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Interlude">I</span> <!-- Interlude symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: grey;">Lord I Need You <!-- Song title -->
                    <span class="artist">• Kanye West • Sunday Service Choir</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="U1JLaEBl7ik"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics20" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: grey;">Pure Souls <!-- Song title -->
                    <span class="artist">• Kanye West • Shenseea • Roddy Ricch</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="i1nindf1meE"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics21" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: grey;">Come To Life <!-- Song title -->
                    <span class="artist">• Kanye West</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="yblfMrUeiP4"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics22" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: grey;">No Child Left Behind  <!-- Song title -->
                    <span class="artist">• Kanye West • Sunday Service Choir • Vory</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="sDJBhQv85K0"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics23" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: grey;">Jail, Pt. 2 <!-- Song title -->
                    <span class="artist">• Kanye West • FATL • DaBaby • Marilyn Manson</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="UArRcQEgxp8"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics24" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: grey;">Ok Ok, Pt. 2 <!-- Song title -->
                    <span class="artist">• Kanye West • Rooga • Shenseea</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="RVPEzbhSjFw"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics25" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: grey;">Junya, Pt. 2 <!-- Song title -->
                    <span class="artist">• Kanye West • Playboi Carti • Ty Dolla $ign</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="fRtqzjFLVF4"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics26" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: grey;">Jesus Lord, Pt. 2 <!-- Song title -->
                    <span class="artist">• Kanye West • The LOX • Jay Electronica</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="HWzLbfkoztE"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics27" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: grey;">Life Of The Party <!-- Song title -->
                    <span class="artist">• Kanye West • Andre 3000</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="7YNL5DCRNec"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics28" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Deluxe"><span class="fas fa-star"></span></span> <!-- Deluxe song symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: grey;">Up From The Ashes <!-- Song title -->
                    <span class="artist">• Kanye West</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="NcH7gveMJ1o"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics29" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Deluxe"><span class="fas fa-star"></span></span> <!-- Deluxe song symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: grey;">Remote Control Pt 2 <!-- Song title -->
                    <span class="artist">• Kanye West • Young Thug • Kid Cudi</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="IsYOlnRNfiM"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics30" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Deluxe"><span class="fas fa-star"></span></span> <!-- Deluxe song symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: grey;">Never Abandon Your Family <!-- Song title -->
                    <span class="artist">• Kanye West</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="GKuVipCSp_A"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics31" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Deluxe"><span class="fas fa-star"></span></span> <!-- Deluxe song symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: grey;">Keep My Spirit Alive Pt 2 <!-- Song title -->
                    <span class="artist">• Kanye West • KayCyy • Westside G • CTM</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="Fe8IKAJxZ_g"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics32" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Deluxe"><span class="fas fa-star"></span></span> <!-- Deluxe song symbol -->
                </li>
                <br>
            </ul>
        </div>
    </div>
</div>
<!-- Javascript -->
<script>
    // I frame / song code
    // Get refrences to the button and iframe
    const videoButtons = document.querySelectorAll('.video-button');
    const videoPlayer = document.getElementById('video-player');

    // Give function to buttons
    videoButtons.forEach((button) => {
        button.addEventListener('click', () => {
            const videoId = button.getAttribute('data-video-id');
            const videoUrl = `https://www.youtube.com/embed/${videoId}?autoplay=1&rel=0&modestbranding=1&fs=0`;
            videoPlayer.setAttribute('src', videoUrl);
        });
    });

    // Lyrics code
    // Get references to the button and the div
    const LyricsContainer = document.getElementById('LyricsContainer');

    // Add click event listeners to other buttons to change the content of the div
    const lyrics1 = document.getElementById('lyrics1');
    const lyrics2 = document.getElementById('lyrics2');
    const lyrics3 = document.getElementById('lyrics3');
    const lyrics4 = document.getElementById('lyrics4');
    const lyrics5 = document.getElementById('lyrics5');
    const lyrics6 = document.getElementById('lyrics6');
    const lyrics7 = document.getElementById('lyrics7');
    const lyrics8 = document.getElementById('lyrics8');
    const lyrics9 = document.getElementById('lyrics9');
    const lyrics10 = document.getElementById('lyrics10');
    const lyrics11 = document.getElementById('lyrics11');
    const lyrics12 = document.getElementById('lyrics12');
    const lyrics13 = document.getElementById('lyrics13');
    const lyrics14 = document.getElementById('lyrics14');
    const lyrics15 = document.getElementById('lyrics15');
    const lyrics16 = document.getElementById('lyrics16');
    const lyrics17 = document.getElementById('lyrics17');
    const lyrics18 = document.getElementById('lyrics18');
    const lyrics19 = document.getElementById('lyrics19');
    const lyrics20 = document.getElementById('lyrics20');
    const lyrics21 = document.getElementById('lyrics21');
    const lyrics22 = document.getElementById('lyrics22');
    const lyrics23 = document.getElementById('lyrics23');
    const lyrics24 = document.getElementById('lyrics24');
    const lyrics25 = document.getElementById('lyrics25');
    const lyrics26 = document.getElementById('lyrics26');
    const lyrics27 = document.getElementById('lyrics27');
    const lyrics28 = document.getElementById('lyrics28');
    const lyrics29 = document.getElementById('lyrics29');
    const lyrics30 = document.getElementById('lyrics30');
    const lyrics31 = document.getElementById('lyrics31');
    const lyrics32 = document.getElementById('lyrics32');

    // Change the content of the div when buttons are clicked
    lyrics1.addEventListener('click', () => {
        const lyrics = `"Donda Chant"
(feat. Syleena Johnson)

[Syleena Johnson:]
Donda, Donda, Donda, Donda, Donda, Donda
Donda, Donda, Donda, Donda, Donda, Donda
Donda, Donda, Donda, Donda, Donda, Donda
Donda, Donda, Donda, Donda, Donda, Donda
Donda, Donda, Donda, Donda, Donda, Donda
Donda, Donda, Donda, Donda, Donda, Donda
Donda, Donda, Donda, Donda, Donda, Donda
Donda, Donda, Donda, Donda, Donda, Donda
Donda, Donda, Donda, Donda, Donda, Donda
Donda, Donda, Donda, Donda, Donda, Donda`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics2.addEventListener('click', () => {
        const lyrics = `"Jail"
(feat. Jay-Z, Francis And The Lights)

[Kanye West:]
Take what you want
Take everything
Take what you want
Take what you want

Better that I change my number so you can't explain
Violence in the night, violence in the night
Priors, priors, do you have any product?
Well, that one time
I'll be honest, I'll be honest
We all liars
Let it go

I'll be honest, we all liars
I'll be honest, we all liars
I'm pulled over and I got priors
Guess we goin' down, guess who's goin' to jail?

Guess who's goin' to jail tonight?
Guess who's goin' to jail tonight?
Guess who's goin' to jail tonight?
God gon' post my bail tonight

[Kanye West & Francis And The Lights:]
Don't you curse at me on text, why you try to hit the flex?
I hold up, like, "What?"
I scroll, I scroll up like, "Next"
Guess who's getting 'exed?
Like, next
Guess who's getting 'exed?
You made a choice that's your bad, single life ain't so bad
But we ain't finna go there
Something's off, I'll tell you why
Guess who's goin' to jail tonight?
What a grand plan to sell you out
I could scream and shout, let it out

[Kanye West:]
I'll be honest, we all liars
I'll be honest, we all liars
I'm pulled over and I got priors
Guess we goin' down, guess who's goin' to jail?

Guess who's goin' to jail tonight?
Guess who's goin' to jail tonight?
Guess who's goin' to jail tonight?
God gon' post my bail tonight

[Jay-Z:]
God in my cell, that's my celly
Made in the image of God, that's a selfie
Pray five times a day, so many felonies
Who gon' post my bail? Lord, help me
Hol' up, Donda, I'm with your baby when I touch back road
Told him, "Stop all of that red cap, we goin' home"
Not me with all of these sins, castin' stones
This might be the return of The Throne (Throne)
Hova and Yeezus, like Moses and Jesus
You are not in control of my thesis
You already know what I think 'bout think pieces
Before you ask, he already told you who he think he is
Don't try to jail my thoughts and think pre-cents
I can't be controlled with programs and presets
Reset
On my cell, in my cell tonight
Don't have to see you to touch you
This is what braille look like, it's on sight
If they take me to jail, call my girl, tell her send my mail
We know what Hell look like
Still, it's a hell of a life, yikes

[Kanye West:]
Guess who's goin' to jail tonight?
Guess who's goin' to jail tonight?
Guess who's goin' to jail tonight?
God gon' post my bail tonight`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics3.addEventListener('click', () => {
        const lyrics = `"God Breathed"
(feat. Vory)

[Kanye West:]
I know God breathed on this
I know God breathed on this
I know God breathed on this
I know God breathed on this

[Kanye West & Vory:]
I know He got His hands on this
I know we got a chance on this
No, I never planned on this
I might need a band on this
This might get banned off rip
Gon' say somethin' for y'all quick
Let me know something, who y'all with?
Don't know nothing, I know this

[Kanye West:]
I know God breathed on this
I know God breathed on this
I know God breathed on this
I know God breathed on this

[Vory:]
Oh-oh, oh-oh
Breathed on this, breathed, breathed, oh, oh

[Kanye West:]
More than I can say for you
Before the sons and the daughters
Before the sun and the water
More than I can say for you
But the truth still for you
Once I saw what the Lord do
God, the Son, all the glory
God, the Father, like Maury
Don't care what you say, nothin' on me
I don't care 'bout the lawyer fees
I don't care 'bout your loyalties
God will solve it all for me
Trust man, he a failure
Trust, and God'll heal ya'
Dustin, he a Hoffman
Don't fall what they offerin', uh
Fall far too often, yeah, call God but don't call enough
Fall down but don't fall in love, I know God is all in us

I know God breathed on this
I know God breathed on this
I know God breathed on this
I know God breathed on this
I know God breathed on this
I know God breathed on this
I know God breathed on this
I know God breathed on this

[Vory:]
Devil on my shoulders, I can't let 'em breathe
Brush 'em off my sleeve, I'm filled with memories
Pray they remember me, oh, oh-oh
And I know there's an angel watchin' over me
(All times), I inhaled and breathed
They hearts are filled with greed
Okay, now they want the old me
Not too big on peoples talkin'
Okay, now they gotta show me
Okay, okay, Devil's talkin' to me, angel's talkin' to me
But Angels start to tell me, "It's okay to not feel okay"
I know that you'd be proud if you was here today
But it's okay 'cause I'm okay

I know God breathed on me
I know God breathed on me
I know God breathed on me
I know God breathed on me
`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics4.addEventListener('click', () => {
        const lyrics = `"Off The Grid"
(feat. Fivio Foreign, Playboi Carti)

[Kanye West (Playboi Carti):]
(What? Yeah)
Boy (What?)

We off the grid, grid, grid
This for my kid, kid, kid
For when my kid kid kids have kids
Everything we did for the crib

Everything we did, how we live (What?)
All this smoke got a scent
All that smoke heaven sent (Scent)
Everything I spoke, what I meant (Ah)
Never disguise my intent, lines outside the event
Brought my life out the trench
God, thank God, look what He did, did, did, did, did, did
We off the grid, grid, grid, grid, grid (Ayy)
What?
We off the grid, grid, grid, grid

[Playboi Carti:]
I'm off the grid (Homicide, homicide, what?)
Got tats on my ribs (Ah), tattoos on my ribs (What?)
I just tatted my kid, Onyx (Slatt)
I just threw twenty K on these ****, we was at Onyx (Ah, what?)
I just bought me some brand new clothes, Dover Street Market (Givenchy)
Ayy, we just took the route to Charlotte (Yeah, ah, what? Yeah)
I'm in the Rolls-Royce **** on—what you call it? (Yeah, yeah)
I light a opp blunt and let your **** try it (Ah)
Uh, them off the grid, I'm on a **** diet (What?)

[Kanye West:]
We off the grid, grid, grid, grid
This for my kid, kid, kid
Everything we did for the crib did here
Flexin' with the business trip
Going cray, take some G6
Lit, lit, '76
He spit this
We off the grid, grid, grid

[Fivio Foreign:]
Yeah, look, when I was in jail, I was lowkey (Uh)
Shout out to supporters that wrote me
Eat food, work out and then go sleep
You know I'm prayin', he carryin' both feet (Yeah)
**** know we got God with us (God with us)
You look at me and see a God figure (Uh)
And when I start vibin', I know that He with me
And I'ma always catch a hard shiver (Uh)
I know it's demons in that dark liquor (Uh)
We buy a bottle and squash with ya (Uh)
Everybody turn into a harsh ****
But my pockets bigger and my heart richer (Uh)
My mind smarter, my grind harder (Skrr)
And my car quicker (Skrrt)
I met her in church, she pray for me
She my God-sister (She my God-sister, yeah)
I'm only trustin' the people I keep close
**** sellin' they soul for a repost
Remember when I was broke, wearin' cheap coats
Now it's diamonds and houses and C notes (Uh)
****, I'm feelin' marvelous (I'm feelin' marvelous)
Who let the monster loose? (Who let the monster loose? Huh)
They call me a product of my environment (Uh)
I tell them, "Nah, I'm what God produced" (Baow)
Defense good, and them guards can shoot (Baow)
I put 'em on you, it get hard to move
Tattoo in my face is the mark of truth
Gotta watch what you say when they market you (Huh)
I already predicted this (I already predicted this, huh)
Y'all only witnessed it (Y'all only witnessed it)
Look, got a couple old friends that I'm not really clickin' with
I know they pray that we settle our differences
I pray that they lower all my **** sentences
I got some demons I'm not even dealin' with
They in they feelings, I'm not really feelin' it
And I know some members that gave back they membership
****, you switched up, huh, like how you not feelin' me?
Look, I act like I care, but I don't really care
Now I live in a new buildin' with amenities
I got a new ceilin' with a chimney
I got a few **** wanna finish me
I don't get too friendly with the enemy
You gotta move different when you in the industry, woo, yeah
You gotta move different when you in the industry, huh
You gotta move different when you in the, look
God blessed me with amazing grace (Uh)
She fell in love with my day to day (Uh)
I just want my problems to fade away (Uh)
Man, I'm tired of ****, I need Gatorade
Boy, I got on my feet and I made a name
And I made it a necklace, huh
When you from the bottom and you workin' hard
Just to get to the top, then they gotta respect it
If you got a voice, then you gotta project it
If you got a wrong, then you gotta correct it
If you got a name, then you gotta protect it
If you give me shock, then you gotta electric (Woo)
Tryna live a new life, so I got a new plan that I gotta finesse with (Look, yeah)
'Cause they want me to lose, they ain't part of the Woos
I been tryin' so hard not to move reckless

[Kanye West:]
We off the grid, grid, grid
This for my kid, kid, kid
Everything we did for the crib did here
Flexin’ with the business trip
Going cray, take some G6 (Ah)
Lit, lit, '76
He split lids, then ask for shade, tsk-tsk-tsk
Take this trip, trip, trip, this, this
This, this, this, this
You all still lit, lit, lit
I'm off the grid, grid, grid, grid
Off the grid, grid, grid, grid

First, it go viral, then they get digital
Then they get critical, no, I'm not doin' no interview
Mask on my face, you can't see what I'm finna do
Had to move away from people that's miserable
Don't wanna link you, I ain't finna sit with you
Ain't finna talk to you, ain't finna get with you
Don't get me mad 'cause I don't wanna injure you
She put my paintings inside of her living room
Look at the problems and issues I'm livin' through
They tryna drown me, I rise to my pinnacle
Walked through the block like the neighborhood general
Drop me the lo' and then that's where I send it to
I was forgettin' you, now I remember, now I remember
Did what I want and I say what I want
And I thought you was with me, like how you get sensitive?
I got this God power, that's my leverages
I got this Holy Water, that's my beverages
I gotta help myself out of selfishness
I just bought a floor out of Selfridges
I gotta make sure they know who they messin' with
I gotta tell 'em "sorry," they too delicate
I gotta stay with God where the blessings is
I ain't deliverin' Heavenly messages just for the hell of it
Don't try to test me, I keep it clean, but it can get messy
I talk to God every day, that's my bestie
They playin' soccer in my backyard, I think I see Messi
And this money could never neglect me
I pray that my family, they never resent me
And she fell in love with me soon she met me
We both got a bag but my bag is more heavy
We had to stop countin', it's gettin' too petty
You not a real stepper, you can't overstep me
Just sit back and listen and watch how He bless me
He wait 'til I fall and then pull up and catch me
Your check is too small, you can't run up and check me
Nah, nah, I get 'em fast, see
You feel a way, then go pull up and get me
Might do somethin' wild if I feel like you press me
Nah, I get 'em fast, see
You feel a way, then go pull up and get me
Might do somethin' wild if I feel like you press me

We off the grid, grid, grid
This for my kid, kid, kid
For when my kid, kid, kids have kids
Everything we did for the crib

Pray for what folks and them did
Only thing we pray God forgive-give-give
May God forbid-bid-bid
He hit one of the kids, kids, kids
Took off His list, list, list
Look what they did, did, did
Pray for the crib, crib, crib
Some say A-A-Adam could never be bla-a-ack
'Cause a black man'll never share his rib, rib, rib, rib, rib, rib`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics5.addEventListener('click', () => {
        const lyrics = `"Hurricane"
(feat. The Weeknd & Lil Baby)

[The Weeknd:]
See this in 3D, all lights out for me
All lights out for me, lightning strikes the beach
Eighty degrees, warm it up for me
Finally free, found the God in me
And I want you to see, I can walk on water
Thousand miles from shore, I can float on the water
Father, hold me close, don't let me drown
I know you won't

[Lil Baby:]
Yeah, walkin' on the bridge, I threw my sins over the deep end
Sippin' 'til my stomach hurt, this month I done lost three friends
Early mornin', brainstormin', normally I can't sleep in
Sometimes I just wanna restart it, but it all depends
If I'ma be that same young, hungry ... from West End
Wrote my hardest wrongs and the crazy part, I ain't have no pen
Maybach interior came with sheepskin
Still remember when I just had three bands
Now I'm the one everyone call on 'cause I got deep pants
Bro told me to wait to beat the game, it's only defense and
Never fazed by names that they might call me, but they gon' respect
And I feel like you better off tryin' to call, I might not get the message
She just tried to run off with my heart, but I blocked off the exit, yeah

[The Weeknd:]
Oh-oh, I know You won't (I know You won't)
I know You won't (Oh, yeah, oh, yeah, yeah, yeah)
I know You won't
I know that You look over us
So we silently sleep
Bring down the rain, yeah, oh

[Kanye West:]
Mm-mm-mm-mm-mm, I was out for self
Mm-mm-mm-mm-mm, I was up for sale, but I couldn't tell
God made it rain, the devil made it hail
Dropped out of school, but I'm that one at Yale
Made the best tracks and still went off the rail
Had to go down, down, down, this the new town, town, town
This the new ten, ten, ten, I'm goin' in, in, in
Here I go on a new trip, here I go actin' too lit
Here I go actin' too rich, here I go with a new chick
And I know what the truth is, still playin' after two kids
It's a lot to digest when your life always movin'
Architectural Digest, but I needed home improvement
Sixty-million-dollar home, never went home to it
Genius gone clueless, it's a whole lot to risk
Alcohol anonymous, who's the busiest loser?
Heated by the rumors, read into it too much
Fiendin' for some true love, ask Kim, "What do you love?"
Hard to find what the truth is, but the truth was that the truth suck
Always seem to do stuff, but this time it was too much
Mm-mm-mm-mm-mm, everybody so judgemental
Everybody so judgemental
Everybody hurts, but I don't judge rentals
Mm-mm-mm-mm-mm, it was all so simple

[The Weeknd:]
I see you in 3D, the dawn is bright for me
No more dark for me, I know You're watchin' me
Eighty degrees, burnin' up the leaves
Finally, I'm free, finally, I'm free
As I go out to sea, I can walk on water
Won't you shine Your light? Demons stuck on my shoulder
Father, hold me close, don't let me drown
I know You won't`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics6.addEventListener('click', () => {
        const lyrics = `"Praise God"
(feat. Baby Keem & Travis Scott)

That she wrote, "Speech to the Young: Speech to the Progress-Toward"
Say to them, say to the down-keepers, the sun-slappers
The self-soilers, the harmony-hushers
Even if you are not ready for the day, it cannot always be night
Serve, flex, I do work (Work)
Six, I'm like Mike
He's out of sight, woo
You done got me piped
Two-man like Ike
Six out the spot (Uh, uh)
Into the night

Yeah, I'm shakin' the drop (Drop)
I'm still up on top (Aight)
I been had the bop
The devil my opp, can't pay me to stop (It's lit)
My God at the top (La Flame)

We gon' praise our way out the grave, dawg
Livin', speakin', praise God
Walkin' out the graveyard back to life
I serve, follow your word, see with new sight, into the night (Hey)

Yeah, this life I'm livin' (I'm livin')
All the advice been tipped in (That thang)
Gave me that grip, no slippin' (That grip)
Out of my mind, went trippin' (My mind)
Tell me take two when I'm on one (I'm on)
That lookout like no one
Kept it real tight like your son (Your son)
Yeah (La Flame)

We gon' praise our way out the grave, dawg
Livin', speakin', praise God
Walkin' out the graveyard back to life
I serve, follow your word, see with new sight, into the night

Still on side, huh, still outside
****, attention, still outside, huh, still outside
Tame Imp—, Tame Impala, ****
Tame Impala, stay outside, huh
And I'm still outside, I'm still outside, still outside, huh
Let's get right, huh, let's get right, uh, let's get right, uh, huh
Let's get right, let's get (Ayy, ayy, ayy), let's get right
Let's get (Ayy, ayy, ayy), let's get—
Look at new scenes, I opened my life, I'm subject to memes
I signed a few ****, I polished their dreams
An angel on earth, come under my wing
Stop runnin' your publishers, ****
They publish the headlines and say the wrong things
Y'all treat your Lord and Savior like renters' insurance, you know what I mean?
Bada the bada the boom, I bada the boom, I bada the bing
I need a new girl, my old one was mean
I had to let go, forgave all them evils that came to my shows
I channeled them bad **** all in abode
I channeled your trust, I channeled the turbulence, came with the life
I gathered my sinners and asked if I'm right, let's get
I just get right, ****, huh
Let's get right, let's get right, let's get right, shh, shh
Ain't on sight, it's on sight
I don't know you, you, you, you, it's on sight
I don't know you, you, you, you (Ayy, ayy), let's get right
Ayy, all of my **** on Channel 5
I don't channel ten 'til it go time
Used to throw up my uncle's spaghetti
Been told to tote since before I was ready
Back when my mama told me that I was challenged
A single Black woman, you know that she petty
I turned a heavy heart to two million dollars
I put that in totals, reverse outta debty
I gotta, I gotta put on a rager one time
I swung the powder, went major one time
I know some white people servin' no time
I gotta do it for me, do it for, pray for me
Do it for all the ones dyin'
I wanna do it for all the ones cryin'
I wanna, uh, uh, uh, let's get right, huh`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics7.addEventListener('click', () => {
        const lyrics = `"Jonah"
(feat. Lil Durk & Vory)

[Vory:]
Like who's here when I need a shoulder to lean on?
I hope you're here when I need the demons to be gone
And it's not fair that I had to fight 'em all on my own
Like who's here when I need a shoulder to lean on?
I hope you're here when I need the demons to be gone
And it's not fair that I had to fight 'em all on my own

Hard to keep my focus on what matters
Mandem hit my line like, "Some ... just got hit up on your block"
You can rest assured it's not us
'Cause we been out the wave catchin' waves
They say, "We ain't seen you on the block"
'Cause I been out the way
Chasin' millions in my sleep, I found the better way
Somewhere on an island, let me kick it, this my getaway
I pour up a drink for all my ... who ain't see the day
Tryna finish this with who I started with
Way too many fallen soldiers, no, I can't forgot
Hope they got headphones up in Heaven
You can vibe out and just hear this ...
It's just certain ... you can't forget

Like who's here when I need a shoulder to lean on?
I hope you're here when I need the demons to be gone
And it's not fair that I had to fight 'em all on my own
Like who's here when I need a shoulder to lean on?
I hope you're here when I need the demons to be gone
And it's not fair that I had to fight 'em all on my own

[Lil Durk:]
Kanye and Jay still brothers, they both billionaires
And we ain't see it, I lost my brother when we was millionaires
I wasn't scared to die, but him, that was my biggest fear
I got your son and your daughter like you still here
Know how it feel to lose a brother, we got a bond still
Twenty-six years, pops got out to see his son killed
And I don't give a ... if I hang with a Crip, I see blood still
I can be the cleanest millionaire, I'm from the mud still
Died with his chain on, I call it blood diamonds
It's to the point I drop my own lo' so they could find us
And it's been months and they still haven’t
Kanye did it for the city, he co-signed

[Vory:]
Like who's here when I need a shoulder to lean on?
I hope you're here when I need the demons to be gone
And it's not fair that I had to fight 'em all on my own

[Kanye West:]
Smoke a opp pack ain't funny like that
It get ugly like that, can't get no money like that
Holy Father, please, let me step in
Can't talk to buddy like that, it get bloody like that
Whole lotta steppers and they steppin'
And they sunny like that
And they comin' right back
And when you on tour, bet you check-in
'Cause my guys back to work, it's a Monday like that
And when you text, change the beginnin' of every word
You will speak to me with only no cap
Me and your big homie go back
And homie don't rap, you don't know me like that

[Vory:]
Like who's here when I need a shoulder to lean on?
I hope you're here when I need the demons to be gone
And it's not fair that I had to fight 'em all on my own
Like who's here when I need a shoulder to lean on?
I hope you're here when I need the demons to be gone
And it's not fair that I had to fight 'em all on my own

Like who's here when I need a shoulder to lean on?
I hope you're here when I need the demons to be gone
And it's not fair that I had to fight 'em all on my own
Like who's here when I need a shoulder to lean on?
I hope you're here when I need the demons to be gone
And it's not fair that I had to fight 'em all on my own`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics8.addEventListener('click', () => {
        const lyrics = `"Ok Ok"
(feat. Fivio Foreign, Rooga, Lil Yachty)

[Kanye West (Fivio Foreign):]
Okay, now they got me, wanna rap again
Heal the wound and then you stab me in my back again (Uh)
You the type to play the joke and try to hide your hand (Uh)
Not the type to come around and try to play your friend (Bomb)
You the type to cut the grass and snake your bestest man
I'm the type to close the deal and cut my ... in
See me in person, I look like a ghost (Grr)
See me in person, I look like a ghost (Bow)
You wanna come in and play with the G.O.A.T (Bow)
You wanna come in and play with the G.O.A.T (God body)
All you rap ... sound like me, can't tell who is who
You got no real identity, can't tell you from you
Price went up (Yeah), angel investor (Yeah)
Price went up (Uh), angel investor (Yeah)

Okay, okay, I'm not okay
Think they're good, it's not okay
Okay, okay, not okay (Uh)
Think they’re good, get out the way (Uh)

[Lil Yachty:]
Who said I did what? What did they do?
Why the hell you hatin' so damn hard? Someone must pay you
They don't keep me 'round 'cause I'm straight truth
My dawg locked up, had more home runs than Babe Ruth (Boom)
Had them chickens cleanin' my house, I told them, "Be of use" (Brr)
If I see disloyalty, then we gon' cut 'em loose (Yeah)
Havin' my hands 'round her neck, grip tight like a noose (Hee)
Tell you a story with a bad ending 'cause I'm not a Seuss (Yeah, bih')
Passin' 'round ... to the thugs for an immunity boost (Go)
Double cup filled to the top with the serenity juice (Yessir)
Moment of silence, R.I.P to Juice (Yeah, hey)
If they say it's up, it's up, I don't need a truce (Damn)
Everything I do is solely for the broken youth (Sheesh, yes)
I just took her over the mountain with my index (Wow)
She told me to go to Hell like I ain't been yet (Yuh)
And I still put in overtime like I ain't win yet

[Kanye West (Lil Yachty):]
Okay, okay, I'm not okay (Yuh)
Think they're good, it's not okay
Okay, okay, not okay
Think they're good, get out the way

[Rooga:]
Yeah, it's been plenty times you closed the door on me
That ... really show me how much you say you a bro to me
Showed you love and you constantly cold-shouldered me
But ain't no goin' back to fixin' up, that's the older me, yeah
I'm done with all the fake ... I had enough of that, yeah
I done had too many ... stab me in the back (Yeah, yeah, yeah)
They say they with you, but they really puttin' on a act
That's when ... hit the fan and all of a sudden, all the facts show
You gotta chin up and show a ... tough love
Let 'em go without you, just to show 'em what it was
We was so close, you would've thought we was blood
We got the same pain, we come from the mud
I swear this ... make me wanna put my all in it, yeah
You can hear the pain 'cause I put my heart in it, yeah
Most of these ... ain't real, they don't wanna see me winnin', no
Most of these ... ain't real, they don't wanna see me winnin', no

[Kanye West (Rooga):]
But it's okay, we gon' be okay
Only show up when we cut the cake (Oh, yeah)
Showin' love but we okay (We okay)
Find God 'fore it's too late`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics9.addEventListener('click', () => {
        const lyrics = `"Junya"
(feat. Playboi Carti)

Junya Watanabe on my wri', wri'
Junya Watanabe on my wri', wri'
Tell 'em this, did he miss?
Junya Watanabe on my, mmh
I can't really see, where did I miss? (Mmh, mmh)

Ex-strippers (Mmh, mmh)
New killers (Mmh, mmh), Chi' ... tell 'em (Mmh, mmh)
This on Donda (Mmh, mmh), on my mama (Mmh, mmh)
Made a promise (Mmh)

Junya Watanabe on my wri'
Junya Watanabe on my wri'
Tell 'em this, did he miss? (Wri')
Junya Watanabe on my, mmh
I can't really see, where did I miss? (Mmh)
Junya Watanabe on my wri' (Mmh, mmh)
Junya Watanabe on my

All summer (Mmh, mmh), all summer (Mmh, mmh)
.45 gunners (Mmh, mmh), in pajamas (Mmh, mmh)
They piranhas (Mmh, mmh)
Buy out the store in hours like we planned it

Junya Watanabe on my wri'
Junya Watanabe on my wri'
Tell 'em this, did he miss?
Junya Watanabe on my, mmh
I can't really see, where did I miss? (Mmh)
Junya Watanabe on my wri'

For five summers, hold up, uh
For five summers, hold up
For five summers, hold up, uh
For five summers, hold up, uh
We took over, hold up, uh
We took over, hold up
We took over, hold up
We took over, hold up

Born in Atlanta (Mmh, mmh)
Not Montana (Mmh, mmh)
'Scuse my manners (Mmh, mmh)
I got standards

Uh, yeah, 'scuse my manners (Mmh, mmh)
I got standards (Mmh, mmh)
I got status (Mmh, mmh)
You don't want static (Mmh, mmh)

See more comments (Mmh, mmh)
Than I see commas (Mmh, mmh)
They going dummy (Mmh, mmh)
We going Donda (Mmh, mmh)
Let me be honest (Mmh, mmh)
Let me be honest (Mmh, mmh)
I won with the bucks, boy
Let me Giannis (Mmh, mmh)
I won with the bucks, boy (Mm, mm)
The spirit is on us (Mmh, mmh)
The spirit of Donda
God's time can't fit on a wrist
Junya wanna have me on my ( Wri', wri', wri')
Move out of the way of my release (Yeah, yeah, yeah)
Tryna get me off my Qs and Ps (Yeah, yeah, yeah, watch it)
Why can't losers never lose in peace? (Yeah, yeah, watch it)
Ain't nobody 'round me losing sleep
Better find God 'fore He find me
Tell the Devil good night, go to sleep`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics10.addEventListener('click', () => {
        const lyrics = `"Believe What I Say"

[Lauryn Hill:]
Yo, yo (Check our situation)
My men and my women
(Yo) Yo, yo (Check our situation)
My men and my wom...

[Kanye West:]
You need somethin' unexpected, some form of weapon
You ask him to feel protected, and still feel protected
Just one time for the record, just one time for the record
Don't agree with the message, don't agree with the methods

Don't let, don't let the lifestyle drag you down
Who knows when was the last time you felt the love
One last sparkle to follow in my light
One last sparkle to follow

Man, it's too early
What the hell you doin' wakin' me up at 5:30?
Why the hell are you worried?
Play somethin' that is very, very vibe-worthy
I don't know want my mind alerting
People sayin' tweetin' gonna make you die early
How 'bout have my heart hurtin'?
Hold it all inside, that could make you die early
Go on and get your best attorney
Something's there, feel it when I heard it
Just release the spirit, let it flow though
How these ... leaving now with one leg like Flo-Jo?
Nail me to the cross with long nails, like Coco
Free Throat Coat for the throat goats
Even if I gotta do it solo, even if I gotta do it with no promo
I ain't got my point across
'Til we finally get across and pass the point
So there's a couple things that I gotta quote
Don't involve yourself in things you don't have to know
I ain't never question what you was askin' for
I gave you every single thing you was askin' for
I don't understand how anybody could ask for more
Got a list of even more, I just laugh it off
I be goin' through things I had to wrote
Celebrity drama that only Brad'll know
Too many family secrets, somebody passin' notes
Things I cried about, I found laughable
Lil' baby Jesus, ain't laughing, no
Don't involve yourself in things they ain't have to know
The big man upstairs ain't laughin', no
Don't involve yourself in things they ain't have to know

[Buju Banton:]
Now here we are
You know I'm not about it
Showed you my all
I let you into my thoughts

[Kanye West:]
Don't let, don't let the lifestyle drag you down
Who knows when was the last time you felt the love
One last sparkle to follow in my light
One last sparkle to follow in love
One last sparkle to follow in my light
One last sparkle to follow

[Buju Banton:]
Okay, I didn't throw a fit when you said you wanted to leave
I told you I loved you, but you didn't believe
You were too easily fooled, so easily deceived
By some dude who's more rather into greed
Played by your emotions, you were swamped by your needs
Told me, I didn't believe, you said I was out to deceive, ahaha
You said that I lie, how did I? I told you everything, didn't I?
But you just could not believe, man, I'm so peeved
Your friends all up in your head even when we're in bed
Your mind's elsewhere, and you say you care? Haha
I'm laughin' at you all, you think you got me? No, no
My back ain't against the wall (The wall, the wall, the wall, the wall, the wall)

[Kanye West:]
Don't let, don't let the lifestyle drag you down
Who knows when was the last time you felt the love
One last sparkle to follow in my light (Right on)
One last sparkle to follow`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics11.addEventListener('click', () => {
        const lyrics = `"24"
(feat. Vory)

Dear God, make it alright
Only You can make it alright
Dear Lord, make it alright
Nothing else ever feels right
Dear God, make it alright
Nothing else ever feels right
Na-na-na, nothing else ever feels right

Exhausted
Never the right time to go
Right time to go
Never the right time to go
God loves you
Love when He choose your steps
Gotta make it right 'fore you left
Gotta make it right before you
Everybody wanna feel like
Everything gon' be right
New me over the old me
Let it out, let it all out
God, please set it alright
Make it right, now that feels right
Nothing else ever feels right
Nothing else ever feels right

Save me, yeah, make it alright
Bow our heads 'cause it's alright, alright, mm-mm
Twenty-four hours
Twenty-four candles
Twenty-four hours
Yeah, yeah
Yeah, yeah, yeah, yeah, yeah
Throw our hands up in the sky
Yes, Lord, we put 'em high
Yeah, yeah
Yeah, yeah

Yeah, know you're alive and God's not finished
Know you're alive and God's not finished
I know you're alive, God's not finished
I know you're alive and God's not
The Devil's a lie, but now he finished
Devil's a lie and now he fin...
Devil's a lie and now he finished
Throw our hands up in the sky
Yes, Lord, we wave 'em high

We gonna be okay, we gonna be okay
We gonna be okay, we gonna be okay
We gonna be okay, we gonna be okay

God's not finished, God's not finished
God's not finished, God's not finished
God's not finished, God's not finished
God's not finished, God's not finished

Know we gon' be okay, we gonna be okay
We gonna be okay, we gonna be okay
God's not finished, God's not finished
God's not finished, we gonna be okay

Throw our hands up in the sky
Yes, Lord, we wave 'em high
Mm-mm-mm, mm-mm`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics12.addEventListener('click', () => {
        const lyrics = `"Remote Control"
(feat. Young Thug)

[Kanye West:]
Please don't ask again, who's up in the van?
They my only fans
I was in my hovercraft, had another laugh
How you roll with them? When you know I'm him

Got it on remote control
Got it on remote control
Got it on remote control, like a CEO
I thought you should know

On my Instagram, it get outta hand
Why you so mad?

He got it on remote control, like a CEO
Feelin' like the man, feelin' like the man
I was in my hovercraft, floatin' down the path
God just grabbed my hand, had a bigger plan

[Kanye West (Young Thug):]
He got this on remote control
He got it on remote control
('Trol)
Woah-woah, woah-woah

[Young Thug:]
I just, oh, I owe you a load
I live on the Titanic (Oh), I can rock your boat (Spider)
Hoppin' out the brand new Rolls (Skrrt, skrrt)
Hoppin' out the brand new Rolls (Skrrt, skrrt)
Jesus sent me brand new clothes (Skrrt, skrrt)
Wrist still thirty-two below (Yeah)
I want my mob ties to shine (Hah)
I could caress your mind with the right time (Time)
Don't you give your love up, this is the right sign (Sign), sign (Yeah)
I treat you lovely and righteous and kind (Hah)
And we'll be lastin' with another 'til we die (Yeah)
I'd give you kids at the drop of a dime (Dime)
Oh-woah, told the ... fold my clothes (Fold my clothes)
Take it to the light like a strobe (Yeah)
Taking me to court like O (Taking me to court like OJ)
Paparazzi sleep at my door
I just thought that you should know (Sleep at my door)
I get frozen like the North Pole
Don't you freeze up on a pole

[Pre-Chorus: Young Thug]
He got this on remote control like a sink in gold
He got it, no fight, no more meds, twilight in the game
He got it on my hover craft, have another laugh
Pop on a handstand, twilight in the man

[Young Thug (Kanye West):]
He got it on remote control
(He got it on remote control)
He got it on remote control, like that's to know
Should know

[Tony Halstead (as The Globglogabgalab):]
Ooh, ha-ha-ha, mmh, splendid
Simply delicious, oh, ha-ha-ha
I am the Glob-glo-gab-galab
The shwabble-dabble-wabble-gabble flibba blabba blab`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics13.addEventListener('click', () => {
        const lyrics = `"Moon"
(feat. Kid Cudi, Don Toliver)

I wanna go to the moon, don't leave so soon (Don't leave so soon)
How could I get through? (How could I get through?)
I wanna go to the moon, don't leave so soon (Don't leave so soon)
How could I get through? (How could I get through?)
I wanna go to the moon, don't leave so soon (Don't leave so soon)
How could I get through? (How could I get through?)

Mhm, here we go strappin', we up
Never forget all the memories
Sittin', I sip out my cup
Thinkin' I should be a better me
Truly I'm blessed from the start
So much to say in these melodies, oh
Stare at the sky, the moon singin' sweet
Oh, my God, such a sweet moment
Angels, they say I'm not ever weak, such a lonely moment
Heaven knows I might never sleep, trouble in my soul
Hey, I've been prayin', life can be drainin', oh
Hey, we were late, tryna keep haulin' on
I'm ashamed and yet, what I will see, ain't nobody knows, so I go

How can I get through? (Don't leave so soon)
How can I get through? (To the moon)
How can I get through? (To the moon)
Early afternoon, I wanna go to the moon (Take you to the moon)
Don't leave so soon (Woah)
Don't leave so soon
How could I get through? (Yeah)
How can I get through? (Ooh)
Early afternoon, I wanna go to the moon (Ooh, take you to the moon)
Don't leave so soon (Ooh)
Don't leave so soon (Don't leave so soon)
How could I get through? (How could I get through?)

Yeah-yeah
Woah-oh, oh-oh, oh-oh
Woah-oh, oh-oh, oh-oh`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics14.addEventListener('click', () => {
        const lyrics = `"Heaven And Hell"

Children growing, women producing
Men go work and some go stealing
Everyone's got to make a living

No more promos, no more photos
No more logos, no more chokeholds
We on Bezos, we get payrolls
Trips to Lagos, connect like LEGOs
Make this final, make this, my eyes closed
Burn false idols, Jesus' disciples
I can feel your pain now, I done bled my vein out
New level the game now, simulation changed
No more problems, no more argue
No more askin', "Who really are you?"
I know the real you, you know we feel you
You know He hears you, you know we with you
Straight from Beirut, Chicago, Beirut
You cray? We cray, too
You pray? We pray, too
Never too late for Him to save you
This your movie 'cause no one can play you
Devil, lay down, Devil, lay down
This that level, make devils pray now (Heaven and Hell)
Hold up, no peace, hold up, police
Don't call police, just stay focused (Is on Earth)
Pray for new life, pray for new breath
Hey, Lord, make sure it's safe for who's left (Heaven and Hell)
Know you can't find a place to rest
Know the Lord my bulletproof vest (Is on Earth)
When we survive, know that we blessed
Save my people through the music

Let it grrat, let it grrat, grrat
Let it grrat, grrat, grrat, grrat, grrat
Let it grrat, grrat, grrat
Let it grrat, let it grrat, grrat
Let it grrat, grrat, grrat, grrat, grrat
Let it grrat`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics15.addEventListener('click', () => {
        const lyrics = `"Donda"
(feat. Stalone & The World Famous Tony Williams)

Forever, yeah
Can you hear me? Yeah
Forever, yeah
Forever, forever, no
Oh yeah, glory, glory, glory
Glory, glory, glory, glory

It feels good to be home
And to all of you, I thank you so much for your support
For your support of me for so many years
And more importantly, for the work you continue to do
What do you want me to talk about?
Well, he said something that was a little bit dangerous
He told me I could talk about anything I wanted to
And you know, I am my son's mother
The man I describe in the introduction as being so decidedly different
My son (When you're runnin' outta time and you're not outta time)
And what made the project extra special to me is
I got a chance to share not only what he has meant to me
But what he has meant to a generation (Change the time)
As one writer said, we came from somewhere
Not just from the wombs of our mothers and the seeds of our fathers
But from a long line of generations who came before us

It's the kingdom (It's the kingdom)
And the power (And the power)
And the glory (And the glory)
Forever (Forever)
It's the kingdom (It's the kingdom)
And the power (And the power)
And the glory (And the glory)
Forever (Forever)

Forever, yeah
Forever, yeah
Forever, forever, no
Oh yeah, glory, glory, glory
What did I teach him? (Glory)
And why Kanye ain't scared?`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics16.addEventListener('click', () => {
        const lyrics = `"Keep My Spirit Alive"
(feat. Conway The Machine & Westside Gunn)

Ooh, ooh
Keep my spirit alive
Keep my spirit alive, alive

More than anything
You can take it all, but the Lord on my side
Spirit won't die, die
Oh, oh, my life
Is in His hands, so I don't stress, I pray and strategize

Yo
Flushed the work just in time and they raided, thank God (Thank God)
Screamin' through the GT roof like ****, we done made it, thank God (Thank God)
Hundred-round drum didn't jam when my shooter tried to spray it, thank God (Thank God)
Couple thousand grams, got two thousand grands when we waited, thank God (Thank God)
I was facin' fifteen and I beat it (And I beat it)
Just spent about twenty up at Neimans (Up at Neimans)
Did two hundred in a Demon (In a Demon, skrrt)
I'm the illest **** and I mean it (And I mean it)
My homie droppin' bodies for no reason (Boom, boom, boom, boom, boom)
Now his kids see him on the weekends (Ah)
Got the baking soda for the remix (Remix)
Millionaires on, I can see it

More than anything
You can take it all, but the Lord on my side
Spirit won't die, die
Oh, oh, my life
Is in His hands, so I don't stress, I pray and strategize

Yeah, don't hate me, 'cause my heart is full of love
No weapon formed against me 'cause I'm covered in the blood
Layin' in the hospital when I got shot, fam
Mama prayed for me, said she left it in God's hands, yeah
So I'ma leave it in God's hands
Everything I'm doin' now is God's plan
Doctor said I wouldn't walk no more, now I stand
Then I ran, here I am, Machine

Keep my spirit alive, alive
More than anything
You can take it all, but the Lord on my side

Well, between a mix of bad schools with the fast food
Bad had tools and a bad mood
If you don't turn to a lil' Gotti, they gon' drain all the strength in your lil' body
They turned me into a lil' Gotti, uh, yeah
Not Wakanda but Wakanda is kinda like what we 'bout to make
And who gon' make it? Kan', duh
Who the squad? Donda
Who the mom? Donda
Who can see? Don, duh, get Don C
Who needs practice? I don't do rehearsals
And I don't do commercials, 'cause they too commercial
Give it all to God and let Jesus reimburse you
She said "You in the studio with who? I'ma hurt you"
How I'm forty-two and you got a curfew?
How nerves dictate how they gon' curve you?
Quiet all the cordialness
We walk in God's spiritual ordinance
We know the Blacks, the orphans refused to be runaways
Rebel, renegade, must stay paid

More than anything
You can take it all, but the Lord on my side
Spirit won't die, die
Oh, oh, my life
Is in His hands, so I don't stress, I pray and strategize`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics17.addEventListener('click', () => {
        const lyrics = `"Jesus Lord"
(feat. Jay Electronica)

[Kanye West:]
Tell me if you know someone that needs (Jesus, Lord)
Now we've been through a lot of things
Tell me if you know someone that needs (Jesus, Lord)
He lives in a lot of things
Tell me if you know someone that needs (Jesus, Lord)
Been through a lot of things
Tell me if you know someone that needs (Jesus, Lord)

Sittin' by myself, I'm just thinkin'
About all I've been through, I wish I was dreamin'
Man, it's hard to be an angel when you surrounded by demons (Jesus)
I watched so many people leave (Lord)
I see 'em change by the season, that's mama's seasonin'
God got you, the devil's watchin', he just peekin' in
I know I made a promise that I'd never let the reaper in (Jesus)
But lately, I've been losin' all my deepest friends (Lord)
And lately, I've been swimmin' on the deepest end
It's just drugs, it ain't no hugs, it ain't no love there
You been down so much you don't even know what's upstairs (Jesus)
Suicidal thoughts got you wonderin' what's up there (Lord)
And while I introduce the party, you say it's up there
Too many pills, so much potions, so much pain, too many emotions
And everything that you do good, it just go unnoticed (Jesus)
Did He tell you that you good and just stay focused? (Lord)
Mama, you was the life of the party
I swear you brought life to the party
When you lost your life, it took the life out the party (Jesus)
That woman rode with me like a Harley (Lord)
Visions of my cousins in a cell really scarred me
Movin' to the hood was like signin' up for the army
'Cause they been killin' ... since ... was watchin' Barney (Jesus)
You want dreams to come true? But I have nightmares (Lord)
'Cause if that come to life, then I might not be right here
Been in the dark so long, don't know if the light here
But I'm just reaching for the stars like Buzz Lightyear (Jesus)
And now I'm lightyears ahead of those nightmares (Lord)
I deaded those night terrors when the night clears
And if I talk to Christ, can I bring my mother back to life?
And if I die tonight, will I see her in the afterlife? (Jesus)
But back to reality, where everything's a tragedy (Lord)
You better have a strategy or you could be a statistic
Little boy dies, he's just one of the mystic
And mama steady crying 'cause she really the victim (Jesus)
And she's getting high and she's getting addicted (Lord)
And her older boy just stuck with the picture, painted vivid
That's a family portrait, and her daughter just absorbed it
Sixteen, pregnant, baby daddy say she should abort it (Jesus)
But we can't afford it, so she decides to move forward (Lord)
Baby shower time, father didn't show up
Now she just feeling nauseous like she finna throw up
The water flows down her legs, yeah, it's finna go up (Jesus)
A year done went by, her daughter just turned one (Lord)
And she's still dependent on her mom
Big brother in the streets, he went and bought him a gun
He want revenge 'cause the pain, feelin' numb (Jesus)
And her mom still doing drugs 'cause that's the only time she feel loved (Lord)
Is it real love? Do the scars really heal up?
From all the pain that done built up, but they don't feel us (Jesus)
A week done flew by, big bro ridin' then he see the guys (Lord)
Left his little brother on the side, bleeding from the side
He seein' red, it's like he's bleeding through his eyes
To see him dead, the only thing that'll help the grieving up inside (Jesus)
Even let him get the last meal
He done with the streets after this, this his last kill (Lord)
He gotta show him that it's that real
He ran up on him with the pipe like, "... stand still" (Jesus)
"You took my brother life, you made my mother cry" (Lord)
"Tell me one reason I shouldn't send you up to Christ"
He said, "Go 'head, take my life, I've seen everything but Christ"
Then big bro just blacked out and all you seen was the light (Jesus, Lord)

Tell me if you know someone that needs (Jesus, Lord)

[Jay Electronica:]
Uh-huh, in the name of the true and living God, the beneficent, the merciful (Hallelujah)
Thank you for bringing me up the rough side of the mountain like Ertuğrul (Jesus)
Every knee bowed and every tongue confessed and paid homage (Lord)
To the monk who visited Rothschilds like Thelonious did Pannonica (Shoo)
It's Jay Elec-entendre-nica comin' through your monitor
Back from the great beyond like the Son of Man or the Son of Donda? (Jesus)
I never rolled the GSXR or the R6 or the Honda (Lord)
But I flew my Ducati through North America like Wakanda
Earthquakes will strike this nation for what Bush did to Rwanda (Facts)
What the Clintons did to Haiti and Downing Street did to Ghana (Jesus)
In Tenochtitlan, they call me Terremoto, El Negro Loco (Lord)
I shake the tectonic plates of the game if I lay one vocal
The God is interstellar while you fellas remain local
My bars is like the pyramid temples of Pacal Votan (Jesus)
As sure as the DOJ confirmed Ezekiel's Wheel (Lord)
I could change the world like Yacub with two pieces of steel
My sword and my microphone, I swore to the Christ's throne
But when you great, they wanna say you took a L, José Castille (Jesus)
I'm in the fight here, fight here for what seemed like lightyears (Lord)
My rugged cross and thorny crowns squeeze out Christ tears
Thirty pieces of silver clout, my Pierre price tier
It's a war outside, it's a war outside (Jesus)
It's like the last days of Sodom and Gomorrah outside (Lord)

[Kanye West:]
Tell me if you know someone that needs (Jesus, Lord)
Now we've been through a lot of things
Tell me if you know someone that needs (Jesus, Lord)
He lives in a lot of things
Tell me if you know someone that needs (Jesus, Lord)
Been through a lot of things
Tell me if you know someone that needs (Jesus, Lord)

[Larry Hoover Jr. (Kanye West):]
What up, Ye? This Larry Hoover Jr
First and foremost, I wanna thank you for taking the fight for my father to the Oval Office
You might not have been the only one that could've did that
But you were the one that did do that
And with your assistance, we can continue to let the world take part in this fight
You know, to me, it kinda feels like
Me, my mother, my brothers, and my kids
Have all been incarcerated through this journey
And we haven't even been to jail
We have been looked at and treated as criminals
For being a part of this family
My father's truth and the reality that he raised me in
Is that he wanted to make a change in this community (Tell me if you know someone that needs)
'Cause the conditions in this capitalist society is what made him
And it is what made the children of today
After twenty-five years of bein' locked down, twenty-three and one
My father has not called any shots from one of the most secure and segregated prisons in the world
And will not, once released, call any shots for the Gangster Disciples
If my father's intentions were to lead us to death, destruction
Into the Hell that he has had to live in for the past twenty-six years
Man, he would be dead to me
I didn't sign up for that
I didn't stay on this journey this long for that
All my life, man
I've been waitin' for my father to come home
They told me when I graduate eighth grade, he would be home
Then they told me when I graduate from high school, he would be home
I went away to Morris Brown, I graduated and he still ain't home
Now I'm a adult, and my daughter went away to college and graduated
He still not home
Now even more than that, my son, he graduated eighth grade and we still waitin'
Matter of fact, he hasn't hugged, kissed, or touched any of his grandchildren
And they haven't been able to touch they grandfather
Even though it is not seen that way for some of us
But for many of us, Larry Hoover is a beacon of hope for his community
Who deserves to breathe free air
Free my father (Jesus), Mr. Larry Hoover Sr. (Lord)`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics18.addEventListener('click', () => {
        const lyrics = `"New Again"
(feat. Chris Brown)

[Kanye West:]
If I hit you with a "W-Y-D?"
You better not hit me with a "H-E-Y"
It better be like "Hiii" with a bunch of I's
Or "Heyyy" with a bunch of Y's
I, I lived a hundred lives, uh
So that mean I had a hundred wives
And I am just simply high off life for the hundredth time

Never let nobody curve me that don't deserve me
Should I really have bought the Burberry last Thursday?
Wear a different color jersey every Thursday
'Posed to meet in Malibu, you postin' pics in Jersey
Is to lay me or play me a bigger flex though?
'Cause you know you'd never live up to my ex though
If we dive, it's the deep end, baby, let's go
I'll be gone by the weekend, baby, XO

Most insane out-of-body experience
And I repent for everything I'ma do again (I accept Him)
And I repent for everything I'ma do again

[Chris Brown (Kanye West):]
Thank You, thank You, thank You for Your mercy, make me new
Make me new again, make me new again
Make me new again, make me new again
I repent for everything that I'ma do again
Make me new again, make me new again
Make me new again
(Last night don't count)
(This morning don't count)

[Kanye West:]
If you take the ride, please don't close your eyes, uh
In a den of thieves, every man disguise, uh
Keep your mask on, keep it henne-tized, uh
It's a rollercoaster, keep your hands inside, uh
Wanna bring your pain, 'member this advice, uh
What they vandalize, He'll evangelize, uh
He gon' part the tides, He gon' part the skies, uh
Did it for the fame, 'member this advice, uh
What they vandalize, He'll evangelize, uh
What they vandalize, He'll evangelize, uh
He gon' part the tides, He gon' part the skies, uh
When they start to lie, 'member this advice, uh
What they vandalize, He'll evangelize, uh
When they start to lie, 'member this advice, uh
What they vandalize, He'll evangelize, uh

[Sunday Service Choir:]
Make me new again, make me new again
Make me new again, make me new again
Make me new again, make me new again
Make me new again, make me new again
Make me new again, make me new again
Make me new again, make me new again
Make me new again, make me new again
Make me new again, make me new again
Make me new again, make me new again
Make me new again, make me new again`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics19.addEventListener('click', () => {
        const lyrics = `"Tell The Vision"
(performed by Pop Smoke)

... we made it
... we made it
... we made it

... we made it (Grr, woo, bah)
... we made it, we made it (Woo)
... we made it (Woo)
Thank God that I made it (Grrt, bah)
... we made it, we made it (Woo)
Look, mama, I made it (Grrt)

Look, I remember the days, same 'fit for a week straight
I used to eat fifty-cent cake, now it's Philippe's
It's Philippe's for the steak
Buy it, I don't care what it cost
And I always keep a pole
I did a hundred on a pro
If you droppin' a woo, we come where you live
Glock 9, infrared
Pull up and empty the clip
Dread had the strap all summer
In the Floss movin' reckless
Do not play with me, ... I keep a K with me

... we made it (Grr, woo)
... we made it, we made it (Woo)
... we made it (Woo)
Thank God that I made it`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics20.addEventListener('click', () => {
        const lyrics = `"Lord I Need You"
(feat. Sunday Service Choir)

Well, Lord, I need You to wrap Your arms around me
Wrap Your arms around with Your mercy
Lord, I need You to wrap Your arms around me
I give up on doin' things my way
And tell me everything's gonna be alright, oh

When you said give me a ring, you really meant a ring, huh?
Turned out to be more than just a fling, huh?
Three hours to get back from Palm Springs, huh?
Who you know spend an hour in Walgreens, huh?
You know you'll always be my favorite prom queen
Even when we in dad shoes or mom jeans
Too many complaints made it hard for me to think
Would you shut up? I can't hear myself drink
We used to do the freak like seven days a week
It's the best collab since Taco Bell and KFC, uh
Talk to me nicely, don't come at me loud
You had a Benz at sixteen, I could barely afford a Audi
How you gon' try to say sometimes it's not about me?
Man, I don't know what I would do without me
Billionaire sport, step up to the court
They rented a room, we bought the resort
God got me, baby, God got the children
The devil run the playground, but God own the buildin'
Time and silence a luxury
Cussin' at your baby mama, guess that's why they call it custody
God got us, baby, God got the children
The devil run the playground, but God own the buildin'
Time and space is a luxury
But you came here to show that you still in love with me
Startin' to feel like you ain't been happy for me lately, darlin'
'Member when you used to come around and serenade me, woah
But I guess it's gone different in a different direction lately
Tryna do the right thing with the freedom that you gave me (Wheezy outta here)
Your gun off safety
Speak first, don't break me
Harsh words, you're angry
Lord, don't take me, oh, oh

Well, Lord, I need You to wrap Your arms around me
Wrap Your arms around with Your mercy
Lord, I need You to wrap Your arms around me
I give up on doin' things my way
And tell me everything's gonna be alright, oh (Wheezy outta here)`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics21.addEventListener('click', () => {
        const lyrics = `"Pure Souls"
(feat. Shenseea & Roddy Ricch)

Life change when you famous
I remember, back before the chains, we was nameless
Went through stages just to hop on new stages
Open up your eyes, man, they only entertainers
And I cannot sell my soul (Soul)
And I cannot sell my soul (Soul)
And I cannot sell my soul (Yeah, soul)
And I cannot sell my soul (Jesus saved my soul)
And I cannot sell my soul

I've been at the top shinin' like a light pole
And I'm just a product of whatever I was raised in
This money sanctified, so I gotta say it again
They said I was mad at the Grammys
But I'm lookin' at my Grammy right now
Pulled up on Ye, and I said, "They don't understand me"
I just want my dawg to pipe down
'Cause when you really came from the trenches
You was raised in the trenches (Mm)
You feel like you trailblazed for the trenches (Mm)
I hope God can forgive me for the days that I was sinnin' (Mhm)

The truth is only what you get away with, huh?
(Man, all these lyin' ...)
I said the truth is only what you get away with, huh?
Ayy, that's why a lot of these ... be fakin', huh
Made it through the trials and tribulations, huh
Yeah, yeah, yeah, yeah

Uh, uh, well, well, here goes
Well, here goes, but here goes
I was one of them weirdos of the pure soul
That would go to the flea market to buy fake clothes
Every color Girbauds, every Cutlass is cold
Every cousin that stole, every summer was cold
Out of all of the Moes, out of all of the Folks
After all of the jokes, I'm the one that was chose
All of my friends love to gangbang
How we in my car and you say we ain't in the same lane?
When we both had Pelles on
And we was scammin' for the prom before Chief Keef was "Bang, Bang"
Always had mob ties
Stood on my six points, how could I not rise?
Love, truth, peace, freedom, justice, but I'm not five
This Southside, and we outside
This Southside, and we outside
This Southside, and we outside
This Southside, and we outside
This Southside, and we outside
And for all the guys that went to the White House and said, "Free the old man"
Every day I put my life on the line to feed the whole clan
Personal worth is not what a person is worth
I can give a dollar to every person on Earth
Man, it's gotta be God's plan
Man, I swear these boys keep playin'
We gon' have to square up then
We gon' have to send it up then
We gon' have to send it up then
We gon' have to send it up then, uh
We gon' have to send it up then
We gon' have to send it up then
My favorite place to send it

It ain't how it used to be
This the new me, so get used to me
It ain't how it used to be
This the new me, so get used to me
Lookin' in the mirror, it's the truth of me
Lookin' at my kids, it's the proof of me
Devil get behind me, I'm loose, I'm free
Father, Holy Spirit, let loose on me
Father, I'm Yours exclusively
Devil get behind me, I'm loose, I'm free
Father, Holy Spirit, let loose on me
Father, I'm Yours exclusively
Devil get behind me, I'm loose, I'm free
Devil get behind me, I'm loose, I'm free

The truth is only what you get away with, huh
I said the truth is only what you get away with, huh?
Ayy, that's why a lot of these ... be fakin', huh
Made it through the trials and tribulations, huh

Woah, oh, yeah-yeah
The truth the only thing you get away with (Can't get away)
Oh, no (No)
The truth the only thing you get away with (Woah-woah, oh)
The truth (I did it), the truth
The truth the only thing you get away with
Oh-oh (Altogether, trust again)
The truth the only thing you get away with
(I can trust again, I can only trust in Him, woah)
The truth (Oh, yeah)
The truth the only thing you get away with (Can't get away)
Oh, oh
The truth the only thing you get away with
The truth (The truth), the truth (Woah)
He know every side of, every side of you (Oh)
Don't shine through
They could never hide from you (The truth)
He can see it, birdseye view
The truth the only thing you get away with
Won't get away
Oh, oh
They can never hide from you
They can never hide, hide from you (No, no)
The truth
The truth the only thing you get away with
Get away, get away, oh-woah
The truth the only thing you get away with
The truth, the truth
The truth the only thing you get away with
`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics22.addEventListener('click', () => {
        const lyrics = `"Come To Life"

My soul cries out Hallelujah and I thank God for saving me
I thank God for...

Here go all your problems again (I thank God)
Three, two, one, you're pinned (I thank God)
Uncle now he back in the pen' (Hallelujah)
Auntie shut down again
Did she finally come to life? (Thank you, Jesus)
Ever wish you had another life?
Ever wish you had another life?
Ever wish you had another life?

Don't you wish the night would go numb?
I've been feelin' low for so long
I ain't had a high in so long
I been in the dark for so long
Night is always darkest 'fore the dawn
Gotta make my mark 'fore I'm gone
I don't wanna die alone
I don't wanna die alone
I get mad when she gone
Mad when she home
Sad when she gone
Mad when she home
Sad when she gone (Loosen right now, the spirit that wants to run)
Floatin' on a silver lining (In the name of Jesus)
Yeah, you know where to find me, ridin' on a silver lining
And my God won't deny me, tell the Devil, "Get behind me"
All the stars are aligned, lift me up every time
You know exactly where to find me

Hallelujah (Thank you, Jesus)
Hallelujah (Yes)
Hallelujah...

Did those ideas ever really come to life?
Make it all come to life
Make it all come to life
Prayin' for a change in your life
Well, maybe it's gon' come tonight

Sadness settin' in again
Three, two, one, you're pinned
Uncle right back in the pen'
Tell me how auntie been
Took your thoughts and penciled 'em in
Should've wrote 'em down in pen
And maybe they'll come to life
And maybe they'll come to life
Sadness settin' in again
Three, two, one, you're pinned
Uncle right back to the pen'
Tell me how auntie been
Thoughts, you had penciled 'em in
Probably should've wrote 'em in pen
And maybe they'll come to life
They could finally come to life
They could finally come to life

You know where to find me, they cannot define me
So they crucify me, how so fazed when I leave?
Come and purify me, come and sanctify me
You the air that I breathe, the ultra-ultralight beam
Brought a gift to Northie, all she want was Nikes
This is not about me, God is still alive, so I'm free
Floatin' on a silver lining, floatin' on a silver lining
So when I'm free, I'm free`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics23.addEventListener('click', () => {
        const lyrics = `"No Child Left Behind"
(feat. Sunday Service Choir & Vory)

[Vory:]
No child left behind
No child left behind
No child left behind
No child left behind
No child left behind

Back again, I used my back against the wall
Never called on y'all, never count on y'all
I'll always count on God
Back again, I used my back against the wall
Never called on y'all, never count on y'all
I'll always count on God

[Kanye West:]
He's done miracles on me
He's done miracles on me
He's done miracles on me
He's done miracles on me
He's done miracles on me
He's done miracles on me`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics24.addEventListener('click', () => {
        const lyrics = `"Jail, Pt. 2"
(feat. Francis And The Lights, DaBaby & Marilyn Manson)

[Kanye West:]
Take what you want
Take everything
Take what you want
Take what you want

Better that I change my number so you can't explain
Violence in the night, violence in the night
Priors, priors, do you have any product?
Well, that one time, I'll be honest
I'll be honest, we all liars, let it go

[Kanye West & Marilyn Manson:]
I'll be honest, we all liars
I'll be honest, we all liars
I'm pulled over and I got priors
Guess we goin' down, guess who's goin' to jail?

Guess who's goin' to jail tonight?
Guess who's goin' to jail tonight?
Guess who's goin' to jail tonight?
God gon' post my bail tonight

[Kanye West & Francis And The Lights:]
Don't you curse at me on text, why you try to hit the flex?
I hold up, like, "What?" I scroll, I scroll up like, "Next"
Guess who's getting X'ed? Like, next
Guess who's getting X'ed?
You made a choice, that's your bad
Single life ain't so bad
But we ain't finna go there
Something's off, I'll tell you why
Guess who's goin' to jail tonight
What a grand plan to sell you out
I could scream and shout, let it out

[Kanye West & Marilyn Manson:]
I'll be honest, we all liars
I'll be honest, we all liars
I'm pulled over and I got priors
Guess we goin' down, guess who's goin' to jail?

Guess who's goin' to jail tonight?
Guess who's goin' to jail tonight?
Guess who's goin' to jail tonight?
God gon' post my bail tonight

[DaBaby:]
Man, tell them haters open up the jail (Open up the jail)
And you can tell my baby mamas get the bail money (Bail me)
I said one thing they ain't like, threw me out like they ain't care for me
Threw me out like I'm garbage, huh?
And that food that y'all took off my table
You know that feed my daughters, huh? (Mmm)
But I ain't really mad, 'cause when I look at it
I'm getting them snakes up out my grass and, ... that's a good habit
I'm ready for war, let's get at 'em
And teaming up ain't gon' help 'em
'Cause beating the odds too deep
Just me and God, ... I'm good at it
Matter of fact, I'm great at it, my cell phone back at it
I know these people gon' try to tell me how to talk
Don't know what I seen or what I was taught
My mama worked two or three jobs to take care of three of her kids, my uncles watched
Yeah, we was raised by the crack addicts
Mmm, raised by the drug dealers, killers, and the junkies (Junkies)
Mama couldn't save us 'cause she had to get the
Mama couldn't save us 'cause she had to get the money
Feel like your world falling, getting too hard to catch it, ain't it?
You and your girl arguin', you don't like how she actin' lately
Giving it everything that you can give and you don't get half the patience
You was busy hustlin', the things come with your hustle
They got in her head, corrupted her
Yeah, that's probably what happened, ain't it?
Large amount of capital, invested in myself
Underground, I ain't even have a basement, I read the affidavit
Let's see what it is with you
Only thing I did to you
Was always keep it real and true
Guilty, guess they gon' have to take me

[Kanye West & Marilyn Manson:]
Guess who's goin' to jail tonight?
Guess who's goin' to jail tonight?
Guess who's goin' to jail tonight?
God gon' post my bail tonight`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics25.addEventListener('click', () => {
        const lyrics = `"Ok Ok, Pt. 2"
(feat. Rooga & Shenseea)

[Kanye West (Fivio Foreign):]
Okay, now they got me wanna rap again
Healed up wound and then you stab me in my back again (Uh)
You the type to play the joke and try to hide your hand (Uh)
Not the type to come around and try to play your friend
You the type to cut the grass and snake your bestest man
I'm the type to close the deal and cut my ... in
See me in person, I look like a ghost (Grrr)
See me in person, I look like a ghost (Baow)
You wanna come in and play with the G.O.A.T. (Baow)
You wanna come in and play with the G.O.A.T. (God body)
All you rap ... sound like me, can't tell who is who
You got no real identity, can't tell you from you
Price went up (Yeah), angel investor (Yeah)
Price went up (Uh), angel investor

[Kanye West (Shenseea):]
Okay, okay, I'm not okay (Not okay)
Think you're good, it's not okay (No, they all away)
Okay, okay, not okay (I'm not okay)
Think you're good, get out the way
(Ah, Shenseea)

[Shenseea:]
Nuh trust any and any man (Any man)
Pree dem man, mi play along (Play along)
Watch how dem ah sing mi song
Suddenly dem tun ah fan
Aim with precision
Fi number one position
Write the plan, right my wrong
And look, now I'm the boss in charge
Used to talk down 'pon me, now me on top
Left mi inna struggle suh nuh badda come back
Tek mi fi granted, tek mi fi soft
And if yuh play hard
If yuh let me down, mi nah have nuh food fi give yuh, right? Yuh know mi lock di shop down
Mi did like when you show luv to mi face, then chat behind mi back
Nuh trust people, cyaan trust people
From dem eat the fruit, mankind tun evil
Get cut off, you will get cut off
Mi nuh cyar how much memories we have in the past
Yuh bruk up wid yuh ex, still in love, suh yuh single
Mi bruk up wid mi ex, him dead to me, I'm a widow
Get cut off, you will get cut off
Mi nuh cyar how much memories we have in the past (Hmm)
Bruk up wid yuh ex, still in love, suh yuh single
Mi bruk up wid mi ex, him dead to me, I'm a widow, uh

[Rooga:]
Yeah, it's been plenty times you closed the door on me
That ... really show me how much you say you a bro to me
Showed you love and you constantly cold-shouldered me
But ain't no goin' back to fixin' up, that's the older me, yeah
I'm done with all the fake ... I had enough of that, yeah
I done had too many ... stab me in the back (Yeah, yeah, yeah)
They say they with you, but they really puttin' on an act
That's when ... hit the fan and all of a sudden, all the facts show
You gotta chin up and show a ... tough love
Let 'em go without you just to show 'em what it was
We was so close, you would've thought we was blood
We got the same pain, we come from the mud
I swear this ... make me wanna put my all in it, yeah
You can hear the pain 'cause I put my heart in it, yeah
Most of these ... ain't real, they don't wanna see me winnin', no
Most of these ... ain't real, they don't wanna see me winnin', no

[Kanye West (Rooga):]
But it's okay, we gon' be okay
Only show up when we cut the cake (Oh, yeah)
Showin' love, but we okay (We okay)
Find God 'fore it's too late`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics26.addEventListener('click', () => {
        const lyrics = `"Junya, Pt. 2"
(feat. Playboi Carti & Ty Dolla $ign)

[Kanye West:]
Junya Watanabe on my wri', wri'
Junya Watanabe on my wri', wri'
Tell 'em this, did he miss?
Junya Watanabe on my, mmh
I can't really see, where did I miss? (Mmh, mmh)

Ex-strippers (Mmh, mmh)
New killers (Mmh, mmh)
Chi' ... tell 'em (Mmh, mmh)
This on Donda (Mmh, mmh)
On my mama (Mmh, mmh)
Made a promise (Mmh)

Junya Watanabe on my wri'
Junya Watanabe on my wri'
Tell 'em this, did he miss?
Junya Watanabe on my, mmh
I can't really see, where did I miss? (Mmh)
Junya Watanabe on my wri' (Mmh, mmh)
Junya Watanabe on my

All summer, mmh, mmh, all summer, mmh, mmh
Four-five gunners, mmh, mmh, in pajamas, mmh, mmh
They piranhas, mmh, mmh
Buy out the store in hours like we planned it

Junya Watanabe on my wri'
Junya Watanabe on my wri'
Tell 'em this, did he miss?
Junya Watanabe on my, mmh
I can't really see, where did I miss? (Mmh)
Junya Watanabe on my wri'

[Playboi Carti & Kanye West:]
For five summers, hold up, uh
For five summers, hold up
For five summers, hold up, uh
For five summers, hold up, uh
We took over, hold up, uh
We took over, hold up
We took over, hold up
We took over, hold up
Born in Atlanta, mmh, mmh
Not Montana, mmh, mmh
'Scuse my manners, mmh, mmh
I got standards, uh, yeah
'Scuse my manners (Mmh, mmh)
I got standards (Mmh, mmh)
I got status (Mmh, mmh)
You don't want static (Mmh, mmh)
I'm from Atlanta, hold up (Mmh, mmh)
Came from the attic, hold up, yeah (Mmh, mmh)
I'm in Mercedes, uh, uh (Mmh, mmh)
This not practice, uh (Mmh, mmh)
I'm not leavin', hold up, uh (Mmh, mmh)
Where's my mattress? Hold up (Mmh, mmh)
In the back of my mansion, mmh (Mmh, mmh)
Hundred K on my mattress, uh (Mmh, mmh)
Yeah, I'm all about fashion, yeah (Mmh, mmh)
And she all about fashion, hold up (Mmh, mmh)
She rock YEEZY, hold up (Mmh, mmh)
So we always matchin', hold up, uh (Mmh, mmh)
Carti and Yeezy (Mmh, mmh)
How'd that happen? (Mmh)

[Ty Dolla $ign:]
Junya Watanabe, ayy
Jun Takahashi, ayy (Ayy, ayy)
Undercover, ayy (Ayy, ayy)
Eat up like hibachi, yeah, yeah (Ayy)
These Bottega, ayy
Slime green like wasabi, yeah, yeah (Ayy, ayy)
I know the steppers and hitters (Ayy)
They don't do karate, ooh (Ayy, ayy)
I drive the Lam' and the Chevy
I keep my bro in the back of the Kelly, yeah (Ayy, ayy)
I got a house on the hill and it's empty
I'm with my girl, why you keep tryna tempt me? (Ayy)
Cullinan truck now, the Bentley
Came with a umbrella like Mr. Bentley (Ayy)
Uh, I'm really him evidently
Putting it on, but it's really in me
I was created in the image of God
Junya Watanabe on my (Woo, woo, woo)
Boolies on my couch, stays on my
Mike Amiri, did he miss?
Junya Watanabe on my (Woo, woo, woo, woo)

On my
I'm just tryna find our way, yeah
Look what God done done for the kid`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics27.addEventListener('click', () => {
        const lyrics = `"Jesus Lord, Pt. 2"
(feat. The LOX & Jay Electronica)

[Kanye West:]
Tell me if you know someone that needs (Jesus Lord)
Now, we've been through a lot of things
Tell me if you know someone that needs (Jesus Lord)
We done seen a lot of things
Tell me if you know someone that needs (Jesus Lord)
Been through a lot of things
Tell me if you know someone that needs (Jesus Lord)

Sittin' by myself, I'm just thinkin'
About all I've been through, I wish I was dreaming
Man, it's hard to be an angel when you surrounded by demons (Jesus Lord)
I watched so many people leave, I see 'em change by the season
That's mama's seasonin'
God got you, the devil's watchin', he just peekin' in
I know I made a promise that I'd never let the reaper in (Jesus)
But lately, I've been losing all my deepest friends (Lord)
And lately, I've been swimmin' on the deepest end
It's just drugs, it ain't no hugs, it ain't no love there
You've been down so much, you don't even know what's upstairs (Jesus)
Suicidal thoughts got you wonderin' what's up there (Lord)
And while they introduce a party, they say it's up there
Too many pills, so much potions, so much pain, too many emotions
And everything that you do good, it just go unnoticed (Jesus)
Did He tell you that you good and just stay focused? (Lord)
Mama, you was the life of the party
I swear you brought life to the party
When you lost your life, it took the life out the party (Jesus)
That woman rode with me like a Harley (Lord)
Visions of my cousin in a cell really scarred me
Movin' to the hood was like signin' up for the army
'Cause they've been killin' ... since ... was watchin' Barney (Jesus)
You want dreams to come true? But I had nightmares (Lord)
'Cause if that come to life, then I might not be right here
Been in the dark so long, don't know if the light here
But I'm just reaching for the stars like Buzz Lightyear (Jesus)
And now I'm lightyears ahead of those nightmares (Lord)
I deaded those night tears when the night clears
And if I talk to Christ, could I bring my mother back to life?
And if I die tonight, will I see her in the afterlife? (Jesus)
But back to reality, where everything's a tragedy (Lord)
And better have a strategy or you could be a statistic
Little boy dies, he's just one of the mystic
And mama's steady crying 'cause she really the victim (Jesus)
Now she's getting high and she's getting addicted (Lord)
And her older boy just stuck with the picture, painted vivid
That's a family portrait and her daughter just absorbed it
Sixteen, pregnant, baby daddy say she should abort it (Jesus)
But we can't afford it, so she decides to move forward (Lord)
Baby shower time, father didn't show up
And she just feeling nauseous like she finna throw up
The water flows down her legs, yeah, it's finna go up (Jesus)
A year done went by, her daughter just turned one (Lord)
And she's still dependent on her mom
Big brother in the streets, he went and bought him a gun
He want revenge 'cause the pain feelin' numb (Jesus)
And her mom still doing drugs 'cause that's the only time she feel loved (Lord)
But is it real love? Do the scars really heal up?
From all the pain that done built up, but they don't feel us (Jesus)
A week done flew by, big bro ridin', then he see the guys (Lord)
Left his little brother on the side, bleeding from the side
He seein' red, it's like he's bleeding through his eyes
To see him dead, the only thing that'll help the grieving up inside (Jesus)
He even let him get they last meal
He done with the streets after this, this his last kill (Lord)
He gotta show him that it's that real
He ran up on him with the pipe like, "... stand still" (Jesus)
"You took my brother life, you made my mother cry" (Lord)
"Tell me one reason I shouldn't send you up to Christ"
He said, "Go 'head, take my life, I've seen everything but Christ"
Then big bro just blacked out and all you seen was the light (Jesus Lord)

Tell me if you know someone that needs (Jesus Lord)

[Jay Electronica:]
Uh-huh, in the name of the true and living God, the beneficent, the merciful
Thank you for bringing me up the rough side of the mountain like Ertuğrul (Jesus)
Every knee bowed and every tongue confessed and paid homage (Lord)
To the monk who visit Rothschilds like Thelonious did Pannonica (Sheesh)
It's Jay Elec-entendre-nica comin' through your monitor
Back from the great and yonder, the son of man and the son of Donda (Jesus)
I never rolled the jix or the R6 or the Honda (Lord)
But I flew my Ducati through North America like Wakanda
Earthquakes'll strike this nation for what Bush did to Rwanda (Facts)
What the Clintons did to Haiti and Downing Street did to Ghana
In Tenochtitlan, they call me Terremoto, El Negro Loco (Jesus Lord)
I shape the tectonic plates of the game if I lay one vocal
The God is interstellar while you fellas remain local
My bars is like the pyramid temples of Pacal Votan (Jesus)
As sure as the DOJ confirmed Ezekiel's Wheel (Lord)
I could change the world like Yakub with two pieces of steel
My sword or my microphone, I swore to the Christ's throne
But when you great, they wanna say you took an L, José Castillo (Jesus)
I'm in the fight here, fight here, for what seemed like lightyears (Lord)
My rugged cross and thorny crowns squeeze out Christ tears
Thirty pieces of silver clout, my Pierre price tier
It's a war outside, it's a war outside (Jesus)
It's like the last days of Sodom and Gomorrah outside (Lord)

[Kanye West:]
Tell me if you know someone that needs (Jesus Lord)

[Sheek Louch:]
Donnie, Ye, what up ... ?
Get that money and ... forget 'em
I ain't need 'em, but my moms is with 'em (Jesus)
Thirty-eight, look how the streets did 'em (Lord)
All these trophies, but where do I sit 'em?
I was born to rock a crown, ... yeah, I knocked it down
Holy water, ... but out here, we turn to brown (Jesus)
Donnie, if you ain't loyal, you from a different soil (Lord)
Your flame too low for that water to boil
If I wasn't rappin', the calls would stop
You ain't really happy for me, you mad that I popped (Jesus)
... a car, five houses like, "Look what I copped" (Lord)
Devil like, "Jesus Christ, he gotta be stopped"
I don't say "What's up?", you basically blocked
You see it on my hip, just know that it's cocked (Jesus)
Always look 'em in the face when I deal with my opp (Lord)
I'm from the bottom, but Lord knows it's better up top ...

[Jadakiss:]
Yeah, viral pictures (Viral), Bible scriptures (Yeah)
One thing 'bout the devil, he's liable to get you (Yeah, Jesus)
Long as my good days outweigh my bad days (Lord)
I don't count the money, I just know how much the bag weighs (I know)
Broke down soon as I seen him bring the coffin in
Lord knows, I just really wanna see you walk again (Uh, Jesus)
Million dollars cashiers check to the offerin' (Lord)
They can talk about me all they want, I'ma talk to Him (Uh-huh)
Some ... get shot in they mouth, never talk again (Yuh)
After that, they go and get veneers or the porcelain (Jesus)
We all need Him, is you ready to meet Him? (Lord, ready?)
Doin' dumb ... but keep tryin' for your freedom
Uh, if you don't die, then you try again (Yeah)
You get your angel wings, then you fly again (Jesus, fly)
Ain't no "I" in "Team", it's an "I" in "Win" (Lord, win)
They got they eye on me, I got my eye on Him (What's up?)

[Styles P:]
Some fam died, some friends died
I am feeling rage on the inside, where is mine? (Jesus)
Love and hate is a thin line, get two for the tenth time (Lord)
Dyin' on the eleventh, my ...
I'm just down here stuntin' on the seventh, my ...
By the way, is a ghetto up in heaven, my ... (Jesus)
If it is, keep the chariot revvin', my ... (Lord)
Yeah, that's what my momma be sayin'
And before you go to war, know it's honor in prayin'
There'll be vomit on the toilet after last night (Jesus)
These ... ballin' they move, yeah, they gotta be playin', not the lottery (Lord)
I am in the flower, ... the pottery
Jargon is angelic, you don't get it, then pardon me
Got coke from Jesus, now I'm talkin' to Jesus (Jesus)
Real shallow ... probably pray for a gray coupe (Lord)
Maybe the Lykan or a mansion out in the Seychelles
Ghost

[Kanye West:]
Tell me if you know someone that needs (Jesus Lord)
And we done been a lot of things
Tell me if you know someone that needs (Jesus Lord)
We done seen a lot of things
Tell me if you know someone that needs (Jesus Lord)
Been through a lot of things
Tell me if you know someone that needs (Jesus Lord)

[Larry Hoover Jr. (Kanye West):]
What up, Ye? This Larry Hoover Jr
First and foremost, I wanna thank you for taking the fight for my father to the Oval Office
You might not have been the only one that could've did that, but you were the one that did do that
And with your assistance, we can continue to let the world take part in this fight
You know, to me it kind of feels like, me, my mother, my brothers, and my kids have all been incarcerated through this journey and we haven't even been to jail
We have been looked at and treated as criminals for being a part of this family
My father's truth and the reality that he raised me in is that he wanted to make a change in this community (Tell me if you know someone that needs)
Because the conditions in this capitalist society is what made him and it's what made the children of today
After twenty-five years of bein' locked down, twenty-three and one, my father has not called any shots from one of the most secure and segregated prisons in the world
And will not, once released, call any shots for the Gangster Disciples
If my father's intentions were to lead us to death, destruction, into the hell that he has had to live in for the past twenty-six years
Man, he would be dead to me
I didn't sign up for that
I didn't stay on this journey this long for that
All my life, man, I've been waitin' for my father to come home
They told me when I graduate eighth grade, he would be home
Then they told me when I graduate from high school, he would be home
I went away to Morris Brown, I graduated, and he still ain't home
Now I'm an adult, and my daughter went away to college and graduated
He still not home
Now even more than that, my son, he graduated eighth grade and we still waitin'
Matter of fact, he hasn't hugged, kissed, or touched any of his grandchildren
And they haven't been able to touch they grandfather
Even though it is not seen that way for some of us, but for many of us, Larry Hoover is a beacon of hope for his community who deserves to breathe free air
Free my father (Jesus), Mr. Larry Hoover Sr. (Lord)`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics28.addEventListener('click', () => {
        const lyrics = `"Life Of The Party"
(feat. IRKO)

It's after hours at that glamorous blind spot
Where they're taking it easy, swapping personal experiences
Let's listen in America Today
Life of the party, mhm, 'til I almost cry, mhm
It's the life of the party, to think I could've almost died
Lord, help us

Hey, Miss Donda
You run into my mama, please tell her I said, "Say something"
I'm startin' to believe ain't no such thing as Heaven's trumpets
No after-over, this is it, done
If there's a Heaven, you would think they'd let ya speak to your son
Maybe she has in the form of a baby's laugh
I heard passing by in a stroller remindin' me, "Hey, keep rolling"
I don't know, maybe she has with a prick of a blade of grass
I've been layin' on way too long, got me itchy
Got up and roamed a lil' more
Miss Donda, you see my mama, tell her I'm lost
You see, she'd always light a cigarette, we talk, I would cough
Exaggeratin' a lil' bit so she get the point
Tryna get her to stop smokin', I would leave and fire up a joint
'Til I quit, started back up again, twenty years later
All that time, y'all thought a nigga was high, thought I was crazy
My mom, she ain't cut no corners
Got me back on track, I don't miss her overstepping
But do miss her showin' Seven civilian life shit
Ah, Miss Donda, you see my mama, whisper her this:
The real reason I was geeked to go to church
Must confess, when y'all grown-ups would be in Bible study
That girl helping me with my homework? Her and I were fuckin'
So pure and perverted, so spirit spinning and dirty
So on, so on, and so on, we hoped that no one heard us
Shitsh, ah, ah
And to this day, I think her mama knew but let us explore
Miss Donda, you see my father, please, ask him why he never married
Always smiled, but was he happy inside?
Because I carried my mother's name, did he carry shame with him?
I'm sure she did it out of spite, it was her decision at birth
Shit, she probably was hurt, ah, poor baby
Two young people with different views, a lot for a young lady
No coincidence, they both passed away from heart conditions
There's a dissidence at play, dad and mom do hard division
Three Thou', poster child for big dick niggas raised by their mothers
I'm supposed to smile as if God knew that I would be troubled
Keeps me around, for what? I don't know
But I do know that it's crucial, that we do so, pronto
I don't know how much long though

Straight from Shibuya, on some zen
We back, ramped up, we on ten
It's a marathon and look, we comin' for the win
Just like Puff told Christopher, we gon' win big (C'mon)
Put the whole family on, look at what my Kim did
Just like Puff told Christopher, we gon' win big (Uh)
We gon' win big (What?)

Southside gang mentality way heavy
I was thinkin' out the box even in a Box Chevy
And my favorite art teacher name was Mrs. Levy
'Round the time, I learned to put my feelings to a medley (The life of the party)
I ain't turn in homework for like four months and I bet she let me
She saw the vision
"Yeezy you special, go make your own decisions then"
Man, that was a good choice, faith driving us like a Rolls Royce
They tried to take my voice away, I ain't try to take ya choice away
I just prayed the water break, just for my daughter sake, from a slip-up
Fake signatures from fake managers, it all damage her, good Lord
Give 'em enough of they own rope to hang 'em with
The paparazzi never really got what my angle is
They treat my married life like some type of entanglement
My neighbor still dissin', wonderin' why I ain't sayin' it
I can smell the setup, that's that 2Pac in Vegas hit
I revealed myself and some don't know what to make of it
God has said himself to make sure that the baby live
And if Ye ain't here, then tell me who gonna say this here?
Wait a minute, wait a minute, wait a goddamn minute
Let me stop playing with it, hopped in a Lamb' with it
Hopped in a Lamb' with it, in a damn pandemic
Know that Uncle Sam gotta have his damn hand in it

Listen, straight from Shibuya, on some zen
I'm on ten, it's a marathon and look, we comin' for the win
Just like Puff told Christopher, we gon' win big (C'mon)
Put the whole family on, look at what my Kim did
Just like Puff told Christopher, we gon' win big (Uh)
We gon' win big (What?)

Do y'all feel me? Really?
Get off Scott Free, I'm talking Ridley
Get off our knees, that's if you're with me
Get off your knees, that's if you're with me
Get off your knees and let's get free
Get off your knees and let's get free
Really, I mean really
Really, I mean really
I need release, I don't need police
I'm like, "Nigga, puh-lease"
Y'all can't hear me, (Harmonizing), for the real me
For the real me, I mean, mhmm-mm

Alright, it's gonna shoot us in the- woah, uh-oh, uh-oh
Ready mama? (Yup)
I'm so proud of you, yup, you're gonna have so much fun
They gonna shoot us in the air, mama, okay?
C'mon, P, I got you, it's okay, mama
Hold your head back, hold your head back (Three, two, one)
Daddy's here, daddy's here, daddy's right here
It's okay, mama, daddy's here, daddy here
Help, help, daddy's right here, I'm scared
Okay, okay, I got you, it's okay
Okay, we goin' slow, we goin' slow down
It's okay, stop cryin', daddy got you, see, it's over, you did it, P!
You already did it! See? It's already over! Yay! You did it!
Big Girl! It's already over! It's already over, it's already over
Daddy right here, daddy right here
I told you I'm not gon' let you go
I'm not gon' let you go, mama, okay?
Daddy got you, daddy gon' bring us all the way down, okay?
How was it? (We good)
You did a good job (It was scary)
Good job! (Our daughter got more heart than you)`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics29.addEventListener('click', () => {
        const lyrics = `"Up From The Ashes"

Up from the ashes, into the sky
Found a Redeemer, how I survive
Boys hug their mothers, Mary and Christ
Your light has healed me, blessed with new life

I could tell you, He could show you
God in Heaven, shinin' on you
Through your message, now I know you
I come to you empty, free of my pride

(Ooh, ooh-ooh, ooh-ooh)
Praise You only, now and forever
All the glory, it belongs to You
By Christ's power, we're victorious
Been set f-

I come to you empty, free of my pride
We walk by faith and not by our sight
Declaring the vict'ry, one day at a time
God is our shepherd, light in the night
Cure for the sick, He's eyes for the blind

I could tell you, He can show you
God in Heaven, shinin' on you
Through your message, now I know You
I come to You empty, free of my pride

I come to You empty`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics30.addEventListener('click', () => {
        const lyrics = `"Remote Control Pt 2"
(feat. Young Thug, Kid Cudi)

Please don't ask again, who's up in the van?
They my only fans
I was in my hovercraft, had another laugh
How you roll with them? When you know I'm him

Got it on remote control
Got it on remote control
Got it on remote control, like a CEO
I thought you should know

On my Instagram, it get outta hand
Why you so mad?

He got it on remote control, like a CEO
Feelin' like the man, feelin' like the man
I was in my hovercraft, floatin' down the path
God just grabbed my hand, had a bigger plan

He got this on remote control
He got it on remote control
'Trol
Woah-woah, woah-woah

I just, oh, I owe you a load
Aaliyah on the Titanic (Oh), I can rock your boat (Spider)
Hoppin' out the brand new Rolls (Skrrt, skrrt)
Hoppin' out the brand new Rolls (Skrrt, skrrt)
Jesus sent me brand new clothes (Skrrt, skrrt)
Wrist still thirty-two below (Yeah)
I want my mob ties to shine (Hah)
I could caress your mind with the right time (Time)
Don't you give your love up, this is the right sign (Sign), sign (Yeah)
I treat you lovely and righteous and kind (Hah)
And we'll be lastin' with another 'til we die (Yeah)
I'd give you kids at the drop of a dime (Dime)
Oh-woah, told the **** fold my clothes (Fold my clothes)
Take it to the light like a strobe (Yeah)
Taking me to court like O (Taking me to court like OJ)
Paparazzi sleep at my door, I just thought that you should know (Sleep at my door)
I get frozen like the North Pole, don't you freeze up on a pole

He got this on remote control like a sink in gold
He got it, no fight, no more meds, twilight in the game
He got it on my hover craft, have another laugh
Pop on a handstand, twilight in the man

He got it on remote control
He got it on remote control
He got it on remote control, like that's to know
Should know

You not understand, I am not your mans
See, I'm super, I got plans, trips across the land
Diamonds dancin' on my hands, Cudder in demand
All in pink like Killa' Cam, holy ****
Watch 'em go, baby like what she see, hey
In the evening, it's the time, and it's right, hey
Takin' it solo, lose the bag, it's disco, hey
Just a **** doin' damage plus some damage, you know, it's a thing
And we ridin', it's a little bit of liquor and we slidin', it's on
And we 'bout it, say goodbye to the worries, baby, so long
Feelin' she love my shine, oh
**** color outside the lines, I am so out of **** control
And I'm fallin', glowin' in the mold
And she said she understands the code, see, we play our roles
This is how it goes, innocent, ooh
And I'm tryna find you in my dreams, ooh
See, I'm just a creature in the night, she gives me what I like
Electric through my bones, feels so right

Ooh, ha-ha-ha, mmh, splendid
Simply delicious, oh, ha-ha-ha
I am the Glob-glo-gab-galab
The shwabble-dabble-wabble-gabble flibba blabba blab
I'm full of shwibbly liber-kind
I am the yeast of thoughts and minds
Shwabble dabble glibble glabble schribble shwap glab
Dibble dabble shribble shrabble glibbi-glap shwap
Shwabble dabble glibble glabble shwibble shwap-dap
Dibble dabble shribble shrabble glibbi-shwap glab
Shwabble dabble glibble glabble schribble shwap glab
Dibble dabble shribble shrabble glibbi-glap shwap
Shwabble dabble glibble glabble shwibble shwap-dap
Dibble dabble shribble shrabble glibbi-shwap glab
Ooh, ha ha ha, mmm, splendid
Simply delicious
Ohm, ha ha ha ha`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics31.addEventListener('click', () => {
        const lyrics = `"Never Abandon Your Family"

Two lessons that he passed along to his children
The first is that, no matter what, you never abandon your family
The second was that, no matter what, you love unconditionally
It is that kind of love that made my father the kind of father and the kind of man he is
He vowed that he would never walk away from his family, and he never has

You know why my spirit's callin'
Darkness can't take light from me
Haven't you gone far enough?
Sacrificed the ones you love
Gave up on your sanity
Like some twisted fantasy
What would I say to everything?
Your actions cost everything

My, my, my family
My family, I'm losing my family
I'm losing my family
Losing my family

Cried out to you in my sleep, you thought it was a dream
"Why won't you answer me? I'm in the room"
"Tell mom you're sorry," she's screaming at me
"Daddy, how could you leave? Daddy, how could you leave?"
"Come back tonight, daddy, please, come back tonight, daddy, please"
"Daddy, how could you leave? Daddy, how could you leave?"
She don't know what this means, "How'd you become so mean?"
I wish I never screamed, "Alcohol when you breathe"
These things, these things, these things, these things, they sting
"Daddy promise you'll stay, don't you love me? Love me"

Two lessons that he passed along to his children
The first -is that, no matter what, you never abandon your family
-Is that, no matter what, you never abandon your family
-Is that, no matter what, you never abandon your family
-Is that, no matter what, you never abandon your family
-Is that, no matter what, you never abandon your family
-Is that, no matter what, you never abandon your family
-Is that, no matter what, you never abandon your family
It is that kind of love that made my father the kind of father and the kind of man he is
He vowed that he would never walk away from his family, and he never has`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics32.addEventListener('click', () => {
        const lyrics = `"Keep My Spirit Alive Pt 2"
(feat. KayCyy, Westside Gunn, Conway the Machine)

Ooh, ooh
Keep my spirit alive
Keep my spirit alive, alive

More than enough
You can take it all, but the Lord on my side
The spirit won't die, die
Oh, oh, my life, yeah
Is in His hands, so I don't stress, I pray and strategize

Yo
Flushed the work just in time and they raided, thank God (Thank God)
Screamin' through the GT roof like ****, we done made it, thank God (Thank God)
Hundred-round drum didn't jam when my shooter tried to spray it, thank God (Thank God)
Couple thousand grams, got two thousand grands when we waited, thank God (Thank God)
I was facin' fifteen and I beat it (And I beat it)
Just spent about twenty up at Neimans (Up at Neimans)
Did two hundred in a Demon (In a Demon, skrrt)
I'm the illest **** and I mean it (And I mean it)
My homie droppin' bodies for no reason (Boom, boom, boom, boom, boom)
Now his kids see him on the weekends (Ah)
Got the baking soda for the remix (Remix)
Millionaires on, I can see it

More than enough
You can take it all, but the Lord on my side
The spirit won't die, die
Oh, oh, my life, yeah
Is in His hands, so I don't stress, I pray and strategize

Yeah, don't hate me, 'cause my heart is full of love
No weapon formed against me 'cause I'm covered in the blood
Layin' in the hospital when I got shot, fam
Mama prayed for me, said she left it in God's hands, yeah
So I'ma leave it in God's hands
Everything I'm doin' now is God's plan
Doctor said I wouldn't walk no more, now I stand
Then I ran, here I am, Machine

Keep my spirit alive
More than enough
You can take it all, but the Lord on my side

Well, between a mix of bad schools with the fast food
Bad had tools and a bad mood
If you don't turn to a lil' Gotti, they gon' drain all the strength in your lil' body
They turned me into a lil' Gotti, uh, yeah
Not Wakanda but Wakanda is kinda like what we 'bout to make
And who gon' make it? Kan', duh
Who the squad? Donda
Who the mom? Donda
Who can see? Don, duh, get Don C
Who needs practice? I don't do rehearsals
And I don't do commercials, 'cause they too commercial
Give it all to God and let Jesus reimburse you
She said "You in the studio with who? I'ma hurt you"
How I'm forty-two and you got a curfew?
How nerves dictate how they gon' curve you?
Quiet all the cordialness
We walk in God's spiritual ordinance
We know the Blacks, the orphans refused to be runaways
Rebel, renegade, must stay paid

More than enough
You can take it all, but the Lord on my side
The spirit won't die, die
Oh, oh, my life, yeah
Is in His hands, so I don't stress, I pray and strategize`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });
</script>

<!-- Call up the footer-->
<?php
include 'includes/footer.php';
?>