<!-- Call up the header and navbar and set page title-->
<?php
$page_title = "The Life Of Pablo";
include 'includes/header.php';
include 'includes/nav.php';
?>

<!-- set the splitscreen -->
<div class="container" style="max-width:100%;">
    <div class="row split">
        <div class="col left" style="background-color:#a75f3b;"> <!-- left col -->
            <div class="leftT" style="background-color:#412517;"></div> <!-- top section of left col -->
            <div id="leftM"> <!-- middle section of left col -->
                <!-- i frame for songs -->
                <iframe class="video" id="video-player" width="240px" height="240px" frameborder="0"></iframe> 

                 <!-- div for song lyrics -->
                <div id="LyricsContainer" style="display: none; max-height:205px; background-color:#e6dfcc; padding-left: 20px; padding-top: 10px;">  
                </div>

            </div>
            <div class=leftB style="background-color:#412517;"> <!-- bottom section of left col -->
            </div>

        </div>
        <!-- right col -->
        <div class="col right" style="background-color:#f58b49;"> 
            <br>
            <div class="albumcover"><img src="image/TLOPcover.jpeg" class="img-fluid" alt="Image could not load"></div> <!-- album cover -->
            <br>
            <h3 class="albumtitle">The Life Of Pablo</h3> <!-- title of the album -->
            <!-- Description/background of album -->
            <p class="albumdesp">The Life of Pablo is a deeply personal and eclectic album that showcases the many facets of Kanye West's artistry. Released in 2016, the album is a reflection of West's tumultuous personal life and artistic journey at the time, resulting in a disjointed but emotionally resonant work.</p>
            <p class="albumdesp">At its core, TLOP is a spiritual and introspective album that grapples with themes of faith, redemption, and self-discovery. Tracks like "Ultralight Beam" and "Father Stretch My Hands Pt. 1" are powerful and emotional expressions of West's spiritual journey, while "Waves" and "Real Friends" delve into his personal struggles and relationships.</p>
            <p class="albumdesp">Musically, TLOP is a diverse and experimental work that draws on a wide range of genres and styles, from gospel and soul to trap and electronic music. The album features contributions from a wide range of collaborators, including Chance the Rapper, Rihanna, and Kid Cudi, who add their own unique voices and perspectives to the mix.</p>
            <p class="albumdesp">Despite its sprawling and sometimes disjointed nature, TLOP is a testament to West's continued evolution as an artist and his willingness to take risks and push boundaries. The album is both a reflection of his personal struggles and a celebration of his musical legacy, showcasing the many facets of his artistry and paving the way for future innovation and experimentation.</p>

            <!-- tracklist -->
            <ul class="list-group">
                <li class="list-group-item albumtrack" style="background-color: #f58b49;">Ultralight Beam <!-- Song title -->
                    <span class="artist">• Kanye West • Chance The Rapper • The-Dream</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="6oHdAA3AqnE"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics1" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #f58b49;">Father Stretch My Hands Pt. 1 <!-- Song title -->
                    <span class="artist">• Kanye West • Kid Cudi</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="wuO4_P_8p-Q"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics2" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #f58b49;">Pt. 2 <!-- Song title -->
                    <span class="artist">• Kanye West • Desiigner</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="xp8z7pconzw"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics3" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #f58b49;">Famous <!-- Song title -->
                    <span class="artist">• Kanye West • Rihanna • Swizz Beatz</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="Lq2TmRzg19k"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics4" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #f58b49;">Feedback <!-- Song title -->
                    <span class="artist">• Kanye West</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="Q-fluWQ6zW8"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics5" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #f58b49;">Low Lights <!-- Song title -->
                    <span class="artist">• Kanye West</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="wj0C2oet2r0"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics6" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #f58b49;">Highlights <!-- Song title -->
                    <span class="artist">• Kanye West • Young Thug • The-Dream</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="AXz78NYL4r4"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics7" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #f58b49;">Freestyle 4 <!-- Song title -->
                    <span class="artist">• Kanye West • Desiigner</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="yt3rfHIijZQ"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics8" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #f58b49;">I Love Kanye <!-- Song title -->
                    <span class="artist">• Kanye West</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="ch8g-sJb6ow"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics9" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #f58b49;">Waves <!-- Song title -->
                    <span class="artist">• Kanye West • Chris Brown</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="ML8Yq1Rd6I0"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics10" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #f58b49;">FML <!-- Song title -->
                    <span class="artist">• Kanye West • The Weeknd</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="SHfB5HBFeTc"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics11" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #f58b49;">Real Friends <!-- Song title -->
                    <span class="artist">• Kanye West • Ty Dolla $ign</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="fWD9GF-Ogf4"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics12" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #f58b49;">Wolves <!-- Song title -->
                    <span class="artist">• Kanye West • Vic Mensa • Sia • Caroline Shaw</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="OZHjWc0Ssvk"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics13" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #f58b49;">Frank's Track <!-- Song title -->
                    <span class="artist">• Kanye West • Frank Ocean</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="6oaaKNXuUv4"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics14" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #f58b49;">Siiiiiiiiilver Surffffeeeeer Intermission <!-- Song title -->
                    <span class="artist">• Kanye West • Max B</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="SeeP7YhFy0Q"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics15" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                    <span class="badge bg-secondary text-dark icon" title="Interlude">I</span> <!-- Interlude symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #f58b49;">30 Hours <!-- Song title -->
                    <span class="artist">• Kanye West • André 3000</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="OH3bNgA1rkE"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics16" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #f58b49;">No More Parties In LA <!-- Song title -->
                    <span class="artist">• Kanye West • Kendrick Lamar</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="NnMuFqsmYSE"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics17" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #f58b49;">Facts (Charlie Heat Version) <!-- Song title -->
                    <span class="artist">• Kanye West</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="yiwDWKg9AMA"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics18" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #f58b49;">Fade <!-- Song title -->
                    <span class="artist">• Kanye West • Post Malone • Ty Dolla $ign</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="qOZ0hPp3OZU"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics19" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #f58b49;">Saint Pablo <!-- Song title -->
                    <span class="artist">• Kanye West • Sampha</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="w9rzz4pDFwA"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics20" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
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

    // Change the content of the div when buttons are clicked
    lyrics1.addEventListener('click', () => {
        const lyrics = `"Ultralight Beam"
(feat. Chance The Rapper, Kelly Price, Kirk Franklin & The-Dream)

[Samoria Green and Natalie Green:]
(Yes, God)
We don't want no devils in the house, God (Yes, Lord)
We want the lord (Yes, Jesus)
And that's it (Yes, God)
Hallej- hand over Satan (Yes, Jesus)
Jesus praise the Lord (Yes, God)
Hallelujah, God (Yes, God)
We don't want no devils in the house, God (Yes, Lord)
We want the lord (Yes, Jesus)
And that's it (Yes, God)
Hallej- hand over Satan (Yes, Jesus)
Jesus praise the Lord (Yes, God)

[Kanye West and The-Dream:]
I'm tryna keep my faith
We on an ultralight beam
We on an ultralight beam
This is a God dream
This is a God dream
This is everything
This is everything

[Kanye West and The-Dream:]
Deliver us serenity
Deliver us peace
Deliver us loving
We know we need it
You know we need it
You know we need it
That's why we need You now, oh
Pray for Paris
Pray for the parents
This is a God dream
This is a God dream
This is a God dream

[Kanye West and Kanye West:]
We on an ultralight beam
We on an ultralight beam
This is a God dream
This is a God dream
This is everything
Everything (Thing, thing, thing)

[The-Dream:]
I'm tryna keep my faith
But I'm looking for more
Somewhere I can feel safe
And end my holy war
I'm tryna keep my faith

[Kelly Price:]
So why send oppression, not blessings?
Why, oh, why'd You do me wrong? (More)
You persecute the weak
Because it makes You feel so strong (Safe)
Don't have much strength to fight
So I look to the light (War)
To make these wrongs turn right
Head up high, I look to the light
Hey, 'cause I know that You'll make everything alright
And I know that You'll take good care of Your child
Oh, no longer am afraid of the night
'Cause I, I look to the light

[Chance The Rapper:]
When they come for You, I will shield Your name
I will field their questions, I will feel Your pain
No one can judge
They don't, they don't know
They don't know
Foot on the Devil's neck 'til it drifted Pangaea
I'm moving all my family from Chatham to Zambia
Treat the demons just like Pam
I mean I fuck with your friends, but damn, Gina
I been this way since Arthur was anteater
Now they wanna hit me with the woo wap, the bam
Tryna snap photos of familia
My daughter look just like Sia, you can't see her
You can feel the lyrics, the spirit coming in braille
Tubman of the underground, come and follow the trail
I made Sunday Candy, I'm never going to hell
I met Kanye West, I'm never going to fail
He said, "Let's do a good ass job with 'Chance 3'"
I hear you gotta sell it to snatch the Grammy
Let's make it so free and the bars so hard
That there ain't one gosh darn part you can't tweet
This is my part, nobody else speak
This is my part, nobody else speak
This little light of mine
Glory be to God, yeah
I'ma make sure that they go where they can't go
If they don't wanna ride I'ma still give 'em raincoats
Know what God said when He made the first rainbow
Just throw this at the end if I'm too late for the intro
Ugh, I'm just having fun with it
You know that a nigga was lost
I laugh in my head
'Cause I bet that my ex looking back like a pillar of salt
Ugh, 'cause they'll flip the script on your ass like Wesley and Spike
You cannot mess with the light
Look at lil' Chano from 79th

[Kanye West and Kanye West:]
We on an ultralight beam
We on an ultralight beam
This is a God dream
This is a God dream
This is everything
Everything

[The-Dream and Natalie Greene:]
(Yes, God)
(Hallelujah)
I'm tryna keep my faith
(Yes, Jesus)
But I'm looking for more
Somewhere I can feel safe
And end my holy war

[Kirk Franklin:]
Father, this prayer is for everyone that feels they're not good enough
This prayer's for everybody that feel that they're too messed up
For everyone that feels they've said "I'm sorry" too many times
You can never go too far when you can't come back home again
That's why I need...
Faith, more, safe, war`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics2.addEventListener('click', () => {
        const lyrics = `"Father Stretch My Hands Pt. 1"
(feat. Kid Cudi)

[Pastor T.L. Barrett and Future:]
You're the only power (Power)
You're the only power that can
You're the only power (Power)
You're the only power that can
Oh, oh, oh, father...
(If young Metro don't trust you, I'm gon' shoot you)

[Kid Cudi and Pastor T.L. Barrett:]
Beautiful mornin', you're the sun in my mornin', babe
Who can I turn to?
Nothin' unwanted
After all, who can I turn to?
Beautiful mornin', you're the sun in my mornin', babe
If I don't turn to you
Nothin' unwanted
No other help I know, I stretch my hands

[Kanye West and Pastor T.L. Barrett:]
I just wanna feel liberated, I-I, na-na-na
Who can I turn to?
I just wanna feel liberated, I-I, na-na-na
After all, who can I turn to?
If I ever instigated, I am sorry
If I don't turn to you
Tell me who in here could relate, I-I-I
No other help I know, I stretch my hands

[Kanye West and Kelly Price:]
Now, if I fuck this model
And she just bleached her asshole
And I get bleach on my T-shirt
I'ma feel like an asshole
I was high when I met her
We was down in Tribeca
She'll get under your skin if you let her
She'll get under your skin if you-uh
I don't even wanna talk about it
I don't even wanna talk about it
I don't even wanna say nothin'
Everybody gon' say somethin'
I'd be worried if they said nothin'
Remind me where I know you from
She lookin' like she owe you some'n
You know just what we want
I wanna wake up with you in my...
I wanna wake up with you in my...

[Kid Cudi, Pastor T.L. Barrett and Kelly Price:]
Beautiful mornin', you're the sun in my mornin', babe
Who can I turn to?
Beautiful mornin'
Nothin' unwanted
After all, who can I turn to?
Beautiful mornin', you're the sun in my mornin', babe
If I don't turn to you
Nothin' unwanted
No other help I know, I stretch my hands

[Kanye West and Pastor T.L. Barrett:]
I just wanna feel liberated, I-I, na-na-na
Who can I turn to?
I just wanna feel liberated, I-I, na-na-na
After all, who can I turn to?
If I ever instigated, I am sorry
If I don't turn to you
Tell me who in here could relate, I-I-I
No other help I know, I stretch my hands`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics3.addEventListener('click', () => {
        const lyrics = `"Father Stretch My Hands Pt. 2"
(feat. Desiigner)

Faaaaaaaa— (Perfect)
Faaaaaaaa—
Faaaaaaaa—
Faaaaaaaa—
I told, I told, ayy-ayy, I told you

[Kanye West:]
Up in the mornin', miss you bad
Sorry I ain't call you back, same problem my father had
All this time, all he had, all he had
And what he dreamed, all his cash
Market crashed, hurt him bad
People get divorced for that
Dropped some stacks, pops is good
Mama passed in Hollywood
If you ask, lost my soul
Drivin' fast, lost control
Off the road, jaw was broke
'Member we all was broke
'Member I'm comin' back
I'll be takin' all the stacks, oh

[Desiigner and Kanye West:]
I got broads in Atlanta
Twistin' dope, lean, and the Fanta
Stacks, oh
Credit cards and the scammers
Hittin' off licks in the bando
Takin' all the stacks, oh
Black X6, Phantom
White X6 looks like a panda
Stacks, oh
Going out like I'm Montana
Hundred killers, hundred hammers
Black X6, Phantom
White X6, panda
Pockets swole, Danny
Sellin' bar, candy
Man I'm the macho like Randy
The choppa go Oscar for Grammy
Bitch nigga, pull up ya panty
Hope you killas understand me

[Kanye West and Desiigner:]
I just wanna feel liberated, I, I, I (Hey)
I just wanna feel liberated, I, I, I (Panda)
Panda, panda, panda, panda
Takin' all the stacks, oh
Panda, panda, panda
Stacks, oh
Takin' all the stacks, oh

[Desiigner and Kanye West:]
I got broads in Atlanta
Twist the dope, lean and shit, sippin' Fanta
Stacks, oh
Credit cards and the scammers
Wake up Versace, shit life Desiigner
Takin' all the stacks, oh
Whole bunch of lavish shit
They be askin' 'round town who be clappin' shit
I be pullin' up stuff in the Phantom ship
I got plenty of stuff of Bugatti, whip look how I try this shit
Black X6, Phantom
White X6, killin' on camera

[Pastor T. L. Barrett:]
My joy

[Caroline Shaw:]
How can I find you?
Who do you turn to?
How do I bind you?

[Pastor T. L. Barrett:]
If I don't turn to you
No other help I know, I stretch my hands`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics4.addEventListener('click', () => {
        const lyrics = `"Famous"
(feat. Rihanna & Swizz Beatz)

[Rihanna and Kanye West:]
Man, I can understand how it might be
Kinda hard to love a girl like me
I don't blame you much for wanting to be free
I just wanted you to know
Swizz told me let the beat rock

[Kanye West and Swizz Beatz:]
For all my Southside niggas that know me best
I feel like me and Taylor might still have sex
Why? I made that bitch famous (Goddamn)
I made that bitch famous
For all the girls that got dick from Kanye West
If you see 'em in the streets give 'em Kanye's best
Why? They mad they ain't famous (Goddamn)
They mad they're still nameless (Talk that talk, man)
Her man in the store tryna try his best
But he just can't seem to get Kanye fresh
But we're still hood famous (Goddamn)
Yeah, we're still hood famous

[Rihanna and Swizz Beatz:]
I just wanted you to know
I've loved you better than your own kin did
From the very start
I don't blame you much for wanting to be free
Wake up, Mr. West! Oh, he's up!
I just wanted you to know

[Kanye West and Swizz Beatz:]
I be Puerto Rican day parade floatin'
That Benz Marina Del Rey coastin'
She in school to be a real estate agent
Last month I helped her with the car payment
Young and we alive, whoo!
We never gonna die, whoo!
I just copped a jet to fly over personal debt
Put one up in the sky
The sun is in my eyes, whoo!
Woke up and felt the vibe, whoo!
No matter how hard they try, whoo!
We never gonna die

[Rihanna and Swizz Beatz:]
I just wanted you to know
Get 'em!

[Sister Nancy and Swizz Beatz:]
Bam, 'ey 'ey 'ey
Bam bam, bam, bam bam dilla
Bam bam 'ey 'ey 'ey
What a bam, bam, bam bam dilla
How you feeling right now? Let me see your lighters in the air
Bam bam 'ey 'ey 'ey 'ey 'ey
Bam bam 'ey 'ey 'ey
What a bam
Let me see your middle finger in the air

Bam 'ey 'ey 'ey
Bam bam, bam, bam bam dilla
Let me see you act up in this motherfucker
Bam bam 'ey 'ey 'ey
What a bam, bam, bam bam dilla
How you feelin', how you feelin', how you feelin' in this mother fucker, god damn

Bam bam 'ey 'ey 'ey 'ey 'ey
Bam bam 'ey 'ey 'ey
What a bam
One thing you can't do is stop us now
Bam 'ey 'ey 'ey
Bam bam bam, bam bam dilla
Ayy, you can't stop the thing now

Bam bam 'ey 'ey 'ey
What a bam, bam, bam bam dilla
Man, it's way too late, it's way too late, it's way too late, you can't fuck with us
Bam bam, 'ey 'ey 'ey 'ey 'ey
Bam bam, 'ey 'ey 'ey
What a bam
To the left, to the right

Bam 'ey 'ey 'ey
Bam bam bam, bam bam dilla
I wanna see everybody hands in the air like this
Bam bam 'ey 'ey 'ey
What a bam, bam, bam bam dilla
Bam bam 'ey 'ey 'ey 'ey 'ey
Bam bam 'ey 'ey 'ey
What a bam, bam

[Nina Simone:]
I just wanted you to know
I loved you better than your own kin did
From the very start
I don't blame you much for wanting to be free
I just wanted you to know
`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics5.addEventListener('click', () => {
        const lyrics = `"Feedback"

Ayy, ya heard about the good news?
Y'all sleeping on me, huh? Had a good snooze?
Wake up, nigga, wake up
We 'bout to get this paper

Money never made me
Make me do something? Nah, can't make me
Even if the money low, can't pay me
Even if the money low, can't play me

Ayy, ya heard about the good news?
Y'all sleeping on me, huh? Had a good snooze?
Wake up, nigga, wake up
We 'bout to get this paper

Pablo bought a Rolie and a rottweiler
Seem like the more fame, I only got wilder
Hands up, we just doing what the cops taught us
Hands up, we just doing what the cops taught us
I've been outta my mind a long time
I've been outta my mind a long time
I be saying how I feel at the wrong time
Might not come when you want but I'm on time

Ayy, ya heard about the good news?
Y'all sleeping on me, huh? Had a good snooze?
Wake up, nigga, wake up
We 'bout to get this paper

I can't let these people play me
Name one genius that ain't crazy
Follow our father
You borrow our motto
I'm a Chicago south sider
I'm a Chicago south sider

Ayy, ya heard about the good news?
Y'all sleeping on your boy, had a good snooze?
Wake up, nigga, wake up
It's time to get the paper

I've been outta my mind a long time
I've been outta my mind a long time
I know, I know, I shouldn't even bother
With all these gossiping, no-pussy-getting bloggers
Fashion show in Gotham, I need another costume
PETA mad cause I made a jacket outta' possum
Awesome, Steve Jobs mixed with Steve Austin
Rich slave in the fabric store picking cotton
If Hov J then every Jordan need a Rodman
Man, Jay, they don't really want no problems
Driving in the same car that they killed Pac in
Driving in the same urrr that they killed Pac in
Hands up, we just doing what the cops taught us
Hands up, hands up, then the cops shot us

Hold on, hold on, hold on
Wait a second, everybody here, I'm the ghetto Oprah
You know what that mean? You get a fur! You get a fur!
You get a jet! You get a jet! Big booty bitch for you! Woo!`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics6.addEventListener('click', () => {
        const lyrics = `"Low Lights"

You want me to give you a testimony about my life
And how good he's been to me
I don't know what to tell you about him
I love him so much with all my heart and my soul
With every bone in my body I love him so much
Because he's done so much for me
Every morning
Every day of my life
I won't always be crying tears
In the middle of the night, and I won't always have to wake up
By myself wondering how I'm gonna get through the day
I won't always have to think about what I'm gonna do
And how I'm gonna, how I'm gonna make it
How I'm gonna get there, because he...
He's gonna be there for me
Some day the sky above will open up
And he will reach out his hand and guide me through
Oh yes he will
I won't always be crying these tears
I won't always be feeling so blue
Some day, he will open up the door for me
And call my name
Some day he will
I don't know if anybody understands what that feels like
No matter what you've been through
Or where you've been he's always there
With his arms open wide
Accepting me
For who I am
And I love him so much
I couldn't do it without him I wouldn't want to
I'm crying now
It feels so good to be free
To be accepted for who you are and loved no matter what
Oh lord thank you
You are the joy of my life`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics7.addEventListener('click', () => {
        const lyrics = `"Highlights"
(feat. Young Thug & The-Dream)

[Kanye West and Young Thug:]
High lights
Tell my baby I'm back in town
High lights
Tell everybody I'm back in town
High lights
Tell my baby I'm back in town, town
High lights

[Kanye West and Young Thug:]
We only makin' the highlights
Tell my mama, tell my mama, that I only want my whole life to only be highlights
We only makin' the highlights
Tell my mama, tell my mama, that I only want my whole life to only be highlights

[Kanye West and Young Thug:]
Can we play that back one time?
And after that night I'm gon' wanna play this shit back, oh no
Sometimes I'm wishin' that my dick had GoPro
So I could play that shit back in slo-mo (Slow motion)
I just shot an amateur video; I think I should go pro

[Kanye West and Young Thug:]
We only makin' the highlights
(Slow motion, slow motion, slow motion)
We only makin' the highlights
Tell my mama, tell my mama, that I only want my whole life to only be highlights

[El Debarge and Kanye West:]
One life, one night
Uh
High lights
That's all I need
Livin' the life 'til I die

[Kanye West:]
I bet me and Ray J would be friends
If we ain't love the same bitch
Yeah, he might have hit it first
Only problem is I'm rich
Uh, 21 Grammys, superstar family
We the new Jacksons, I'm all about that action
I'm about that Farrakhan, life is a marathon
I'ma shift the paradigm, I'ma turn up every time
I'ma bust a coach's head open on some Diddy shit
If he ever talk to my son like an idiot
One time for a nigga really gettin' it
Two times cause we got the whole city lit
Advice to all my niggas: impregnate Bridget
So when she have a baby she gon' make another nigga
Got the Fruit of Islam in the trenches hah?
Even though they know Yeezus is a Christian hah?
She spent her whole check on some Christians
And that girl ain't even religious
Walkin', livin', breathin' god, you know my past well
Hard to believe in God, your nigga got killed
Blac Chyna fuckin' Rob, help him with the weight
I wish my trainer would, tell me what I overate
So when I'm on vacay, I need to kick back, heh?
What you want?
You want a boss or an R&B nigga with a six pack, heh, huh?
Uh, I need every bad bitch up in Equinox
I need to know right now if you a freak or not
I need every bad bitch up in Equinox
I need to know right now if you a freak or not

[The-Dream:]
I need every bad bitch up in Equinox
I wanna know right now if you a freak or not
I need every bad bitch up in Equinox
I wanna know right now if you a freak or not
Oh lord, oh lord
I need every bad bitch up in Equinox
I wanna know right now if you a freak or not
Bad bitch up in Equinox
I wanna know right now if you a freak or not
Oh lord, oh my lord`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics8.addEventListener('click', () => {
        const lyrics = `"Freestyle 4"
(feat. Desiigner)

[Kanye West:]
This that rap god shit nigga
I rip every one of these motherfuckers down, ayy
Rah, rah, rah
Rah, rah

[Kanye West:]
Closed eyes, see things
Fire up, tweaking
You in my freak dreams
You in my freak dreams
Bad bitch, you dig that
Get stacks, drive cars
Whip out, bitch out
Tits out, oh shit
My dick out, can she suck it right now?
Fuck, can she fuck right now?
I done asked twice now
Can you bring your price down?
Lil Boosie with the wipe down
A little woozy but I'm nice now
What the fuck right now?
What the fuck right now?
What the, what the fuck right now?
What if we fuck right now?
What if we fucked right in the middle
Of this motherfuckin' dinner table?
What if we fucked at this Vogue party?
Would we be the life of the whole party?
Shut down the whole party
Would everybody start fuckin'?
Would everybody start fuckin'?
Would everybody start fuckin'?
They don't want nothin'
You motherfuckers livin' like half of your level, half of your life
I smack her on her ass if she ghetto, I ain't gon' lie
We be in the bathroom fuckin' like "Baby, don't get too loud!"
I can, I can see it, yeah

[Desiigner:]
Hey, I want it right now
Ball on them niggas, get heated and shot down
You get hit with the pie now
Rolls with killer money nigga get by now
Right now, right now
I'm with niggas that have been to Versailles now
Side now, slide down`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics9.addEventListener('click', () => {
        const lyrics = `"I Love Kanye"

I miss the old Kanye, straight from the 'Go Kanye
Chop up the soul Kanye, set on his goals Kanye
I hate the new Kanye, the bad mood Kanye
The always rude Kanye, spaz in the news Kanye
I miss the sweet Kanye, chop up the beats Kanye
I gotta say, at that time I'd like to meet Kanye
See, I invented Kanye, it wasn't any Kanyes
And now I look and look around and there's so many Kanyes
I used to love Kanye, I used to love Kanye
I even had the pink Polo, I thought I was Kanye
What if Kanye made a song about Kanye?
Called "I Miss The Old Kanye"?
Man that'd be so Kanye
That's all it was Kanye, we still love Kanye
And I love you like Kanye loves Kanye`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics10.addEventListener('click', () => {
        const lyrics = `"Waves"
(feat. Chris Brown)

Turn it up!

[Kanye West:]
Step up in this bitch like (Turn it up!)
I'm the one your bitch like
Yeah I'm the one your bitch like (Turn it up!)
And I be talkin' shit like
I ain't scared to lose a fistfight (Turn it up!)
And she grabbin' on my, like
She wanna see if it'll fit right (Turn it up!)
That's just the wave

[Chris Brown and Akon:]
(Yeah) Waves don't die
Let me crash here for the moment, yeah
I don't need to own it
No lie
Waves don't die, baby
Let me crash here for a moment
Baby, I don't, I don't need to own you
(Yeah, yeah, yeah, yeah) (Turn it up!)

[Kanye West:]
Sun don't shine in the shade, ugh (Turn it up!)
Bird can't fly in a cage, ugh (Turn me up!)
Even when somebody go away (Turn it up!)
The feelings don't really go away
That's just the wave

[Chris Brown and Akon:]
(Yeah) Waves don't die
Let me crash here for the moment
I don't need to own it
No lie
Waves don't die, baby
Let me crash here for a moment
Baby, I don't, I don't need to own you
(Yeah, yeah, yeah, yeah)

[Chris Brown:]
No lie
No lie
No lie
You set the night on fire
I'm still gon' be here in the morning
No lie

[Chris Brown:]
No lie
Ooh baby, ooh baby, ooh yeah
You set the night on fire
I'm still gon' be here in the morning
No lie
`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics11.addEventListener('click', () => {
        const lyrics = `"FML"
(feat. The Weeknd)

[Kanye West:]
I been waiting for a minute
For my lady
So I can't jeopardize that for one of these hoes
I been living without limits
As far as my business
I'm the only one that's in control
I been feeling all I've given
For my children
I will die for those I love
God, I'm willing
To make this my mission
Give up the women
Before I lose half of what I own
I been thinking
About my vision
Pour out my feelings
Revealing the layers to my soul
My soul
The layers to my soul
Revealing the layers to my soul

[The Weeknd:]
They wish I would go ahead and fuck my life up
Can't let them get to me
And even though I always fuck my life up
Only I can mention me

[Kanye West:]
See, before I let you go
One last thing I need to let you know
You ain't never seen nothing crazier than
This nigga when he off his Lexapro
Remember that last time in Mexico?
Remember that last time, the episode?
Asking me why the hell I text in code?
Four times just to say, "Don't text me, ho"
Told you four times, "Don't test me, ho"
And we finna lose all self-control
But you ain't finna be raising your voice at me
Especially when we in the Giuseppe store
But I'ma have the last laugh in the end
'Cause I'm from a tribe called check a ho
Yeah, I'ma have to laugh Indian
'Cause I'm from a tribe called check a ho
And I...

[The Weeknd:]
They wish I would go ahead and fuck my life up
Can't let them get to me
And even though I always fuck my life up
Only I can mention me
They wish I would go ahead and fuck my life up
Can't let them get to me
And even though I always fuck my life up
Only I can mention me

[Kanye West and Section 25:]
See through the veil
And forget all of your cares
Throw them
Throw them away
Don't stop your loving
Don't stop for nothing
No, not for nothing
They don't wanna see me love you
Don't now, don't stop it
They always love it
They always wanna
They don't wanna see me love you
See through the veil
They don't wanna see me love you
And forget all your cares
They don't wanna see me love you
Throw them
Throw them away
Ooh, life's a feeling and
Ooh, the body is a feeling, yeah`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics12.addEventListener('click', () => {
        const lyrics = `"Real Friends"
(feat. Ty Dolla $ign)

[Kanye West:]
Real friends, how many of us?
How many of us, how many jealous? Real friends
It's not many of us, we smile at each other
But how many honest? Trust issues
Switched up the number, I can't be bothered
I cannot blame you for havin' an angle
I ain't got no issues, I'm just doin' my thing
Hope you're doin' your thing, too
I'm a deadbeat cousin, I hate family reunions
Fuck the church up by drinkin' at the communion
Spillin' free wine, now my tux is ruined
In town for a day, what the fuck we doin'?
Who your real friends? We all came from the bottom
I'm always blamin' you, but what's sad, you're not the problem
Damn I forgot to call her, shit I thought it was Thursday
Why you wait a week to call my phone in the first place?
When was the last time I remembered a birthday?
When was the last time I wasn't in a hurry?

[Ty Dolla $ign:]
Tell me you want your tickets when it's gametime
Even to call your daughter on her FaceTime
Even when we was young I used to make time
Now we be way too busy just to make time
Even for my...

[Kanye West, Kanye West and Ty Dolla $ign:]
Real friends
I guess I get what I deserve, don't I?
Word on the streets is they ain't heard from him
I guess I get what I deserve, don't I?
Talked down on my name, throwed dirt on him

[Kanye West and Ty Dolla $ign:]
I couldn't tell you how old your daughter was (Was)
Couldn't tell you how old your son is (Is)
I got my own Jr. on the way, dawg (Dawg)
Plus I already got one kid (Kid)
Couldn't tell you much about the fam though
I just showed up for the yams though
Maybe 15 minutes, took some pictures with your sister
Merry Christmas, then I'm finished, then it's back to business
You wanna ask some questions 'bout some real shit? (Shit)
Like I ain't got enough pressure to deal with (With)
Please don't pressure me with that bill shit (Shit)
Cause everybody got 'em that ain't children
Oh you've been nothin' but a friend to me
Niggas thinkin' I'm crazy, you defendin' me
It's funny I ain't spoke to niggas in centuries
To be honest, dawg, I ain't feelin' your energy
Money turn your kin into an enemy
Niggas ain't real as they pretend to be

[Kanye West and Ty Dolla $ign:]
Lookin' for all my real friends
How many of us? How many of us are real friends
To real friends, 'til the reel end
'Til the wheels fall off, 'til the wheels don't spin (Yeah yeah)
To 3 A.M., callin'
How many real friends?
Just to ask you a question
Just to see how you was feelin'
How many?
For the last you was frontin'
I hate when a nigga text you like, "What's up, fam? Hope you good"
You say, "I'm good, I'm great," the next text they ask you for somethin'
How many?
What's best for your family, immediate or extended
Any argument, the media'll extend it
I had a cousin that stole my laptop that I was fuckin' bitches on
Paid that nigga 250 thousand just to get it from him
Real friends
Huh?

[Kanye West, Kanye West and Ty Dolla $ign:]
Real friends
I guess I get what I deserve, don't I
Word on the streets is they ain't heard from him
I guess I get what I deserve, don't I
Talked down on my name, throwed dirt on him`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics13.addEventListener('click', () => {
        const lyrics = `"Wolves"
(feat. Vic Mensa, Sia, Caroline Shaw)

[Kanye West:]
Lost out, beat up
Dancin', down there
I found you, somewhere out
'Round 'round there, right right there
Lost and beat up
Down there, dancin'
I found you, somewhere out
Right down there, right 'round there

[Kanye West:]
Lost and, found out
Turned out, how you thought
Daddy, found out
That you turned out, how you turned out
If mama knew now
How you turned out, you too wild
You too wild, you too wild
You too wild, I need you now
Love you (Got to)
Love you (Love you)
Found you, found you
Right now, right now
Right now, right now
If your mama knew how
You turned out, you too wild
You too wild, you too wild
You too wild, and I need you now
Lost and found out

[Vic Mensa:]
Cry, I'm not sorry
Cry, who needs sorry when there's Hennessy?
Don't fool yourself
Your eyes don't lie, you're much too good to be true
Don't fire fight
Yeah, I feel you burning, everything's burning
Don't fly too high
Your wings might melt, you're much too good to be true
I'm just bad for you
I'm just bad, bad, bad for you

[Sia:]
I was lost and beat up
Turned out, burned up
You found me, through a heartache
Didn't know me, you were drawn in
I was lost and beat up
I was warm flesh, unseasoned
You found me, in your gaze
Well, I found me, oh, Jesus
I was too wild, I was too wild
I was too wild, I was too wild
I was too wild, I was too wild

[Kanye West:]
And I need you now
Lost and found out (Yeah)

[Kanye West:]
Yeah
You gotta let me know if I could be your Joseph
Only tell you real shit, that's the tea, no sip
Don't trip, don't trip, that pussy slippery, no whip
We ain't trippin' on shit, we just sippin' on this
Just forget the whole shit, we could laugh about nothin'
I impregnate your mind, let's have a baby without fuckin', yo
I know it's corny bitches you wish you could unfollow
I know it's corny niggas you wish you could unswallow
I know it's corny bitches you wish you could unfollow
I know it's corny niggas you wish you could unswallow
Ay, I know it's corny bitches you wish you could unfollow
I know it's corny niggas you wish you could unswallow
You tried to play nice, everybody just took advantage
You left your fridge open, somebody just took a sandwich
I said, "Baby, what if you was clubbin'
Thuggin', hustlin' before you met your husband?"
Then I said, "What if Mary was in the club
'Fore she met Joseph, around hella thugs?"
Cover Nori in lambs' wool
We surrounded by the fuckin' wolves
(What if Mary) "What if Mary
(Was in the club) Was in the club
'Fore she met Joseph with no love?"
Cover Saint in lambs' wool
(And she was) We surrounded by
(Surrounded by) The fuckin' wolves`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics14.addEventListener('click', () => {
        const lyrics = `"Frank's Track"
(performed by Frank Ocean)

[Frank Ocean:]
The rings all ringed out
Burn out, cave in
Blackened to dark out
I'm mixed now, fleshed out
There's light with no heat
We cooled out, it's cool out
Life is precious
We found out, we found out
We found out`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics15.addEventListener('click', () => {
        const lyrics = `"Siiiiiiiiilver Surffffeeeeer Intermission"
(feat. Max B)

[Max B and French Montana:]
Yeezy, Yeezy, what's good?
It's your boy Max B, what's going on?
Just checking in on you
Appreciate the love and support
The wave is here
You a wavey dude anyway, so you already know
Ain't no problem, man, the game...
You already know how this game thing goes
Do your wave nigga
You got the official wave man
Just, just doing you...
Doing you, doing your wave
And keep it loopy, I know you're going to keep it loopy man
Shout-out, just shout you out
Hollering at you man, it's all love
I appreciate the... the energy
And we here, hit the town, we do something big
We gonna make a big tsunami up in the joint
You already know what it is, ah
Silver Surfer, Silver Surfer in the flesh
Silver Surfer in the flesh
Max Biggaveli shout to Yeezy
What's good, I see you
It's love, appreciate it
It's honor, appreciate it
Ow, wavey, baby, yeah`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics16.addEventListener('click', () => {
        const lyrics = `"30 Hours"
(feat. André 3000)

[Arthur Russell:]
Baby lion goes
Where the islands go

[Kanye West:]
You say you never saw this comin', well, you're not alone
Million dollar renovations to a happy home
My ex says she gave me the best years of her life
I saw a recent picture of her, I guess she was right
I wake up, assessin' the damages
Checkin' MediaTakeOut
Pictures of me drunk walkin' out with a bitch
But it's blurry enough to get the fake out
I wake up, all veggies no eggs
I hit the gym, all chest no legs
Yep, then I made myself a smoothie
Yeah, then me and wifey make a movie
Chicago – St. Louis, St. Louis to Chicago
Ándale, ándale E.I., E.I., uh-oh
You had me drivin' far enough to switch the time zone
You was the best of all time at the time though
Yeah, you wasn't mine though

[Kanye West:]
But I still drove 30 hours
And I, I still drove 30 hours to you, yeah

[Kanye West:]
I remember rappin' for Jay and Cam
Young producer just trying to get his flows off
I remember being nervous to do Victoria's Secret
'Til I pictured everybody with they clothes off
Expedition was Eddie Bauer edition
I'm drivin' with no winter tires in December
Skrrt, skrrt, skrrt, like a private school for women
Then I get there and all the Popeye's is finished, girl
You don't love me, you just pretendin'
I need a happy beginnin', middle and endin'
Chicago, St. Louis, St. Louis to Chicago
It's gettin' hot in here, that's all that I know
Got a hotel room, three stars for you
You call down for an omelet, girl, it's 5 in the morning
You realize we at the DoubleTree, not the Aria
Only thing open is Waffle House, girl, don't start with me
I used the Western Union for you like it's no prob'
'Cause you was in college complainin' 'bout it's no jobs
But you were suckin' a nigga dick the whole time
Well, I guess a blowjob's better than no job

[Kanye West:]
And I drove back 30 hours

[Arthur Russell:]
Where the main ties onto the sail
Better on sighting
For astern, oh

[Kanye West and André 3000:]
3 Stacks, can you help me out?
30 hours
Yeah, this type of shit you just ride out to
30 hours
30 hours
I just be like, it was my idea to have an open relationship
Now a nigga mad
Now I'm 'bout to drive 90 miles like Matt Barnes to kill...
30 hours
Just to kill..
Just to...
Just to...
I'm about to drive 90
90 miles like Matt Barnes just to whoop a nigga ass
It was my idea and now a nigga (30 hours)
Now a nigga mad, now a nigga, uh
A stunna
Whoop him after school just to show I got class
Duh-duh-duh-duh-duh-duh-duh-duh
Duh-duh with you, yeah (30 hours)
You know what I'm sayin'? Drop some shit like that
Ayy, ayy whoop him after school just to
30 hours
Whoop him after school just to show I got class
Uh, 3 Stacks
30 hours
Just ride out to that
Check it out: this the bonus track, this the bonus
30 hours
My favorite albums used to have like bonus joints like this
That's why they kick it off like this
Yeah, just did that Madison Square Garden
30 hours
Had to put the flyest nigga on this shit, ayy, ayy
The pyramids shall rise
30 hours
Look at these ultralight beams flowin'
For all the moms, the dads, the kids, the families that shared this moment with us
Let's rock out for 'bout
30 hours
You know, ayy, you know
Ayy, you know, ayy, you know
30 hours
Whole design team, Yeezy team, music team
Remember when the whole block'd get shout out?
This my version of a shout-out track
30 hours
Let that motherfucker rock, let that, let that, yeah
To my brother Yasiin, holding it down in Africa
30 hours
To my family: thank you for holding me down
The media be acting like
30 hours
That's Gabe calling
Yo Gabe
I'm just doing a... I'm just doing an ad-lib track right now
What's up?
30 hours
30 hours`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics17.addEventListener('click', () => {
        const lyrics = `"No More Parties In LA"
(feat. Kendrick Lamar)

[Johnny "Guitar" Watson and Junie Morrison:]
La-di-da-da-a, da-a (I like this flavor)
La-da-da-da-di-da-da-a, la-a (La-a, la-a, la-a)
Let me tell you, I'm out here
From a very far away place
All for a chance to be a star
Nowhere seems to be too far

[Kanye West, Junie Morrison and Ghostface Killah:]
No more parties in L.A.
Please, baby, no more parties in L.A., uh
No more parties in L.A.
Please, baby, no more parties in L.A., uh
No more (Los Angeles)
Please (Shake that body, party that bod-)
Please (Shake that body, party that bod-)
Please (Shake that body, party that body)

[Kendrick Lamar and Kanye West:]
Hey, baby, you forgot your Ray Bans
And my sheets still orange from your spray-tan
It was more than soft porn for the K-Man
She remember my Sprinter, said "I was in the grape van"
Uhm—well, cutie, I like your bougie booty
Come, Erykah Badu-me—well, let's make a movie
Hell, you know my repertoire is like a wrestler
I show you the ropes, connect the dots
A country girl that love Hollywood
Mama used to cook red beans and rice
Now it's Denny's, 4 in the morning, spoil your appetite
Liquor pouring and niggas swarming your section with erection
Smoke in every direction, middle finger pedestrians
R&B singers and lesbians, rappers and managers
Music and iPhone cameras
This shit unanimous for you, it's damaging for you, I think
That pussy should only be holding exclusive rights to me, I mean
He flew you in this motherfucker on first class
Even went out his way so you could check in an extra bag
Now you wanna divide the yam like it equate the math?
That shit don't add up, you're making him mad as fuck
She said she came out here to find an A-list rapper
I said baby, "Spin that 'round and say the alphabet backwards"
You're dealing with malpractice, don't kill a good nigga's confidence
Just 'cause he a nerd and you don't know what a condom is
The head still good, though; the head still good, though
Make me say "Nam Myoho Renge Kyo"
Make a nigga say big words and act lyrical
Make me get spiritual, make me believe in miracles
Buddhist monks and Cap'n Crunch cereal
Lord have mercy, thou will not hurt me
Five buddies all herded up on a Thursday
Bottle service, head service, I came in first place
The opportunity, the proper top of breast and booty cheek
The pop community, I mean these bitches come with union fee
And I want two of these, moving units through consumer streets
Then my shoe released, she was kickin' in gratuity
And yeah, G, I was all for it
She said, "K-Lamar, you kinda dumb to be a poet
I'ma put you on game for the lames that don't know they're a rookie
Instagram is the best way to promote some pussy"

[Kanye West:]
Scary, scary
No more parties in L.A.
Please, baby, no more parties in L.A.

[Kanye West:]
Friday night, tryna make it into the city
Breakneck speeds, passenger seat—somethin' pretty
Thinking back to how I got here in the first place
Second-class bitches wouldn't let me on first base
A backpack nigga with luxury tastebuds
And the Louis Vuitton store got all of my pay stubs
Got pussy from beats I did for niggas more famous
When did I become A-list? I wasn't even on a list
Strippers get invited to where they only got hired
When I get on my Steve Jobs, somebody gon' get fired
I was uninspired since Lauryn Hill retired
And 3 Stacks, man, you preaching to the choir
Any rumor you ever heard about me was true and legendary
I done got Lewinsky'd and paid secretaries
For all my niggas with babies by bitches
That use their kids as meal tickets
Not knowin' the disconnect from the father
The next generation will be the real victims
I can't fault 'em, really
I remember Amber told my boy
No matter what happens, she ain't goin' back to Philly
Back to our regularly scheduled programmin'
Of weak content and slow jammin'
But don't worry, this one's so jammin'
You know it, L.A., it's so jammin'
I be thinkin' every day
Mulholland Drive need to put up some goddamn barricades
I be paranoid every time, the pressure
The problem ain't I be drivin', the problem is I be textin'
My psychiatrist got kids that I inspired
First song they played for me was 'bout their friend that just died
Textin' and drivin' down Mulholland Drive
That's why I'd rather take the 405
I be worried 'bout my daughter, I be worried 'bout Kim
But Saint is baby 'Ye, I ain't worried 'bout him
Had my life threatened by best friends with selfish intents
What I'm supposed to do?
Ride around with a bulletproof car and some tints?
Every agent I know, know I hate agents
I'm too black, I'm too vocal, I'm too flagrant
Something smellin' like shit, that's the new fragrance
It's just me, I do it my way, bitch
Some days I'm in my Yeezys, some days I'm in my Vans
If I knew y'all made plans, I wouldn't have popped the Xans
I know some fans thought I wouldn't rap like this again
But the writer's block is over; MCs, cancel your plans
A 38-year-old 8-year-old with rich nigga problems
Tell my wife that I hate the Rolls so I don't never drive it
It took six months to get the Maybach all matted out
And my assistant crashed it soon as they backed it out
Goddamn! Got a bald fade, I might slam
Pink fur, got Nori dressin' like Cam
Thank God for me! (Los Angeles)
Whole family gettin' money, thank God for E!
I love rockin' jewelry, a whole neck full
Bitches say he funny and disrespectful
I feel like Pablo when I'm workin' on my shoes
I feel like Pablo when I see me on the news
I feel like Pablo when I'm workin' on my house
Tell 'em party's in here, we don't need to go out
We need the turbo thots, high speed, turbo thots
Drop-dro-dro-dro-drop, like Robocop
She brace herself and hold my stomach, good dick'll do that
She keep pushin' me back, good dick'll do that
She push me back when the dick go too deep
This good dick'll put your ass to sleep
Get money (Money, money, money)!
Big, big money (Money, money, money!)
And as far as real friends, tell all my cousins I love 'em
Even the one that stole the laptop, you dirty motherfucker!

[Larry Graham:]
I just keep on lovin' you, baby
And there's no one else I know can take your pla-, pla-, pla-

[Kanye West, Junie Morrison and Ghostface Killah:]
Please, no more parties in L.A. (Shake that body, party that body)
Please, baby, no more parties in L.A., uh (Shake that body, party that body)
No more parties in L.A. (Los Angeles)
Please, baby, no more parties in L.A., uh
No more parties in L.A.
Please, baby, no more parties in L.A., uh

[Junie Morrison:]
Let me tell you, I'm out here from a very far away place
All for a chance to be a star
Nowhere seems to be too far
Swish`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics18.addEventListener('click', () => {
        const lyrics = `"Facts (Charlie Heat Version)"

Dirt and grime and filth inside
The story of my lifetime
Of cheating, stealing, never feeling
Pain of a brother, your dirty mother
Ha, ha, ha, look how far we are
G-G-G-Good work, Charlie
(Perfect!)

Yeezy, Yeezy, Yeezy just jumped over Jumpman
Yeezy, Yeezy, Yeezy just jumped over Jumpman
(You!)

Yeezy, Yeezy, Yeezy, I feel so accomplished
I done talked a lot of shit but I just did the numbers
Herzog and Adidas, man, you know they love it
If Nike ain't have Drizzy, man, they would have nothin', woo!
If Nike ain't have Don C, man, they would have nothin', ooh!
But I'm all for the family, tell 'em, "Get your money"
Yeezy, Yeezy, Yeezy, they line up for days
Nike out here bad, they can't give shit away
I stuck to my roots, I'm like Jimmy Fallon
I ain't dropped the album but the shoes went platinum (Woo!)
Every time I talk, they say I'm too aggressive
I was out here spazzin', now y'all get the message?!
On the field I'm over-reckless, on my Odell Beckham
2020, I'ma run the whole election, yah!
I've been trending years, y'all a couple days
Yeezy in the house and we just got appraised
Nike, Nike treat employees just like slaves
Gave LeBron a billi' not to run away (You!)
Ten-thousand dollar fur for Nori, I just copped it (You!)
Your baby daddy won't even take your daughter shoppin' (You!)
I done wore designers I won't wear again
Make 'em niggas famous, they get arrogant

Yeezy, Yeezy, Yeezy just jumped over Jumpman, ah!
Yeezy, Yeezy, Yeezy just jumped over Jumpman
(Sonic boom!)

Yeezy, Yeezy, Yeezy, this is pure luxury
I give 'em Grey Poupon on a DJ Mustard, ah!
If you ain't poppin' shit then why you rap for, huh?
Plus Kimoji just shut down the app store, ah!
And we made a million a minute, we made a million a minute
(We did)
Yeah, we made a million a minute, we made a million a minute, ah!
Do anybody feel bad for Bill Cosby?
Did he forget the names just like Steve Harvey? (You!)
Tell Adidas that we need a million in production (You!)
I done told y'all, all I needed was the infrastructure (Boom!)
Now we hottest in the streets, it ain't no discussion
James Harden, Swaggy P runnin' up the budget (Yoga flame!)
Keep the work at my baby mama's mama's house
I'm a jerk, you need to work, you need to call my spouse
Yeezy, Yeezy, take a picture with me on Rodeo
Yeezy, Yeezy, Yeezy, I might do my own hotel
Couches, couches, couches, couches, which one should I pick?
I need extra deep, I like my bitches extra thick (sonic boom!)
Every time I see the news, man it bring me home
Call up DJ Mano, shout out Twilite Tone
We just blessed to be alive, yeah, ain't that the truth?
So let's celebrate the life of Timbuck2
Timbuck2, Timbuck2

Ha, ha, ha, look how far we are, are, are, are, are, are, are
(Perfect!)`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics19.addEventListener('click', () => {
        const lyrics = `"Fade"
(feat. Post Malone & Ty Dolla $ign)

[Rare Earth:]
Your love is fadin'
Your love is fadin'
Your love is fadin'
I feel it's fadin'

[Ty Dolla $ign and Rare Earth:]
When no one ain't around (I feel it's fadin')
I think I think too much (I feel it's fadin')
Ain't nobody watchin' (I feel it's fadin')
I just fade away

[Ty Dolla $ign and Rare Earth:]
I feel it
Fade away
I feel it
I feel it
Fade away-ay-ay-ay
I think I think too much
I feel it
Your love is fadin'
I feel it

[Kanye West, Rare Earth and Ty Dolla $ign:]
Roll up, roll up; hold up, hold up; po' up, po' up
I feel it
I love to... I wanna... I'm tryna...
I feel it
I'ma rock the boat, work the middle 'til it hurt a little
I feel it
Your love is fadin'
I feel it
Fuckin' with a real ass nigga
I feel it
Fuck how you feel ass nigga
I feel it
Bitch better act like you know better
I feel it
Whoa

[Ty Dolla $ign and Rare Earth:]
When no one ain't around (I feel it's fadin')
I think I think too much (I feel it's fadin')
Ain't nobody watchin' (I feel it's fadin')
I just fade away (I feel it's fadin')

[Post Malone and Rare Earth:]
You don't even know, I've been so far gone (I feel it)
I've been so led on, I've been runnin' 'round (I feel it)
I've been on my shit, whole world on my dick (I feel it)
I just need to know (I can feel it)

[Ms. Barbara Tucker, Rare Earth and Post Malone:]
Oh, deep inside
Deep, deep, down inside
I feel it
Yes, deep inside
Deep, deep, down inside
I feel it
Oh, deep inside
Deep, deep, down inside
I feel it
Yes, deep inside
I get lifted, yes
Deep, deep, down inside
I can feel it
Oh, deep inside
Oh, I get lifted, yes
Deep, deep, down inside
I feel it
Yes, deep inside
Oh, I get lifted, yes
Deep, deep, down inside
I feel it
Oh, deep inside (Oh no, oh no, no, no, no)
Oh, I get lifted, yes
Deep, deep, down inside
I feel it
Yes, deep inside
Oh, I get lifted, yes
Deep, deep, down inside
I get
I feel it's fadin'
Oh, I get lifted, yes

[Rare Earth:]
I feel it fadin'
I feel it fadin'
I feel it
I feel it's fadin'`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics20.addEventListener('click', () => {
        const lyrics = `"Saint Pablo"
(feat. Sampha)

[Kanye West:]
Yeah, 9:08 L.A. time
Back in the lab and shit

[Kanye West:]
My wife said, "I can't say no to nobody"
And at this rate we gon' both die broke
Got friends that ask me for money knowin' I'm in debt
And like my wife said, I still didn't say no
People tryna say I'm goin' crazy on Twitter
My friends' best advice was to stay low
I guess it's hard to decipher all of the bills
Especially when you got family members on payroll
The media said it was outlandish spendin'
The media said he's way out of control
I just feel like I'm the only one not pretendin'
I'm not out of control, I'm just not in their control
I know I'm the most influential
That TIME cover was just confirmation
This generation's closest thing to Einstein
So don't worry about me, I'm fine
I can see a thousand years from now in real life
Skate on the paradigm and shift it when I feel like
Troll conventional thought, don't need to question
I know it's antiquated so sometimes I get aggressive
Thank God for Jay Electra, he down with the mission
Did it with no permission, on our own conditions
Most blacks with money have been beaten to submission
Yeezy with the big house, did it way different
Never listen to Hollywood producers
Don't stare at money too long, it's Medusa
The ultimate Gemini has survived
I wasn't supposed to make it past 25

[Sampha:]
Yeah, you're lookin' at the church in the night sky
Wonderin' whether God's gonna say hi
Oh, you're lookin' at the church in the night sky
And you wonder where is God in your nightlife
Yeah, you're lookin' at the church in the night sky
(Father, Father, Father in the night sky)
Wonderin' whether God's gonna say hi
Yeah, I feel like I'm home, yeah, yeah

[Kanye West:]
I've been wakin' the spirits of millions more to come
A million illegally downloaded my truth over the drums
I believe in the children, listen to the kids, bro
If the phone ringin', go and get your kids, ho
Brother Don Muhammad told the minister about the presentation
He sat back and smiled
Black on black lies is worse than black on black crime
The Jews share their truth on how to make a dime
Most black men couldn't balance a checkbook
But buy a new car, talkin' 'bout, "How my neck look?"
Well, it all looks great
Four hundred years later, we buyin' our own chains
The light is before us brothers, so the devil workin' hard
Real family stick together and see through the mirage
The smokescreens, perceptions of false reality
Who the real owner if your boss gets your salary?
I am one with the people
I am one with the people (Real!)
I've been woken from enlightened man's dream
Checkin' Instagram comments to crowd-source my self-esteem
Let me not say too much or do too much
'Cause if I'm up way too much, I'm out of touch
I'm prayin' a out-of-body experience will happen
So the people can see my light, now it's not just rappin'
God, I have humbled myself before the court
Drop my ego and confidence was my last resort
I know, I know He got a plan, I know I'm on Your beams
One set of footsteps, You was carryin' me
When I turned on the news and they was buryin' me
One set of footsteps, You was carryin' me
When I was negotiatin' with Apple, it was Larry and me
Told Tim Cook to call me, I was scary to see
I would've took a hundred million and gave twenty to Hov
I heard it's the way they did it when we only had a stove
But it's better that I stayed at home with my folks
'Cause if Jay a billionaire then I'ma never go broke
Only thing I ask is next time I'm on stage we all go
We all go
Not just by myself, lookin' for niggas like where's Waldo
She got the same shoes as my wife but she copped 'em at Aldo
Modern-day MJ, with a off-the-wall flow

[Sampha:]
Nightlife, walk all over me
Walk all over me
I'm deliverin' everything I've ever sent that you'll bring
Fly, fly, fly overseas
Fly overseas
Oh, anywhere, everything but in between
Oh, yeah

[Sampha:]
Yeah, you're lookin' at the church in the night sky
Wonderin' whether God's gonna say hi
Oh, you're lookin' at the church in the night sky
And you wonder where is God in your nightlife
Yeah, you're lookin' at the church in the night sky
Wonderin' whether God's gonna say hi
(Father, Father, Father in the night sky)
Oh, you're lookin' at the church in the night sky
And you wonder where is God in your nightlife
(Father, Father, Father in the night sky)

[Sampha:]
Please face me when I speak
Please say to me somethin' before you leave
You've been treatin' me like I'm invisible, now I'm visible to you
Oh, the invisible truths they sold
I can't quite understand the games you play
Understand, understand, understand I'm standin' under oath
And I promised I, I wouldn't fall anymore
But I'm cryin' at the bar
I'm wishin' that you saw my scars, man
I'm wishin' that you came down here and stood by me
And looked at me like you knew me
But I feel so alone
Like I don't know anyone except the night sky above

[Sampha:]
Yeah, you're lookin' at the church in the night sky
Wonderin' whether God's gonna say hi
Oh, you're lookin' at the church in the night sky
And you wonder where is God in your nightlife
Yeah, you're lookin' at the church in the night sky
(Father, Father, Father in the night sky)
Wonderin' whether God's gonna say hi
Oh, you're lookin' at the church in the night sky
And you wonder where is God in your nightlife
(Father, Father, Father in the night sky)`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });
</script>

<!-- Call up the footer-->
<?php
include 'includes/footer.php';
?>