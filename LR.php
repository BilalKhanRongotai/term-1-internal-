<!-- Call up the header and navbar and set page title-->
<?php
$page_title = "Late Registration";
include 'includes/header.php';
include 'includes/nav.php';
?>

<!-- set the splitscreen -->
<div class="container" style="max-width:100%;">
    <div class="row split">
        <div class="col left" style="background-color:#633119;"> <!-- left col -->
            <div class="leftT" style="background-color:#c3ab14;"></div> <!-- top section of left col -->
            <div id="leftM"> <!-- middle section of left col -->
                <!-- i frame for songs -->
                <iframe class="video" id="video-player" width="240px" height="240px" frameborder="0"></iframe> 

                 <!-- div for song lyrics -->
                <div id="LyricsContainer" style="display: none; max-height:205px; background-color:#b18662; padding-left: 20px; padding-top: 10px;">  
                </div>

            </div>
            <div class=leftB style="background-color:#c3ab14;"> <!-- bottom section of left col -->
            </div>

        </div>
        <!-- right col -->
        <div class="col right" style="background-color:#7398aa;"> 
            <br>
            <div class="albumcover"><img src="image/LRcover.jpg" class="img-fluid" alt="Image could not load"></div> <!-- album cover -->
            <br>
            <h3 class="albumtitle">Late Registration</h3> <!-- title of the album -->
            <!-- Description/background of album -->
            <p class="albumdesp">Kanye West's second album, "Late Registration," was released in 2005 by Roc-A-Fella Records and Def Jam Recordings. The album builds upon the musical diversity of its predecessor, blending soul, funk, jazz, and classical music with West's signature hip-hop sound. "Late Registration" was a commercial and critical success, debuting at number one on the US Billboard 200 and earning West eight Grammy nominations, of which he won two.</p>
            <p class="albumdesp">The album explores the theme of social justice and equality, with a particular focus on the experiences of black Americans. "Diamonds from Sierra Leone" addresses the issue of conflict diamonds and the exploitation of African labor, while "Crack Music" critiques the US government's role in the crack epidemic of the 1980s and its impact on black communities. Collaborations with notable artists such as Adam Levine, Jamie Foxx, and Jay-Z further enhance the album's musical depth.</p>
            <p class="albumdesp">"Late Registration" also incorporates live instrumentation and orchestration alongside West's sample-based production style, creating a more expansive and cinematic sound. Tracks such as "Touch the Sky" and "Gone" showcase West's ability to blend diverse musical elements into a cohesive whole. Additionally, the album features interludes and skits that provide a satirical critique of contemporary culture and serve as social commentary.</p>
            <p class="albumdesp">Overall, "Late Registration" is a groundbreaking and ambitious album that solidified Kanye West's status as a creative force in the music industry. Its exploration of social and political issues remains relevant and resonant today, and its musical innovations continue to inspire and influence a new generation of artists.</p>

            <!-- tracklist -->
            <ul class="list-group">
                <li class="list-group-item albumtrack" style="background-color: #7398aa;">Wake Up Mr. West <!-- Song title -->
                    <span class="artist">• Kanye West • Bernie Mac</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="Bwyu-SZ7g_E"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics1" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                    <span class="badge bg-secondary text-dark icon" title="Interlude">I</span> <!-- Interlude symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #7398aa;">Heard 'Em Say <!-- Song title -->
                    <span class="artist">• Kanye West • Adam Levine</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="R6dH8iBHzb4"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics2" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #7398aa;">Touch The Sky <!-- Song title -->
                    <span class="artist">• Kanye West • Lupe Fiasco</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="B95OUKk7alM"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics3" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #7398aa;">Gold Digger <!-- Song title -->
                    <span class="artist">• Kanye West • Jamie Foxx</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="uVL4d8P44eM"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics4" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #7398aa;">Skit #1 <!-- Song title -->
                    <span class="artist">• Kanye West</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="G4qTNRbAp-c"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics5" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Interlude">I</span> <!-- Interlude symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #7398aa;">Drive Slow <!-- Song title -->
                    <span class="artist">• Kanye West • Paul Wall • GLC</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="Q1ViJEYNki4"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics6" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #7398aa;">My Way Home <!-- Song title -->
                    <span class="artist">• Kanye West • Common</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="TgAomHGqKUM"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics7" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #7398aa;">Crack Music <!-- Song title -->
                    <span class="artist">• Kanye West • The Game</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="2tmPSK-w90o"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics8" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #7398aa;">Roses <!-- Song title -->
                    <span class="artist">• Kanye West</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="Qxlnb1lEdEs"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics9" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #7398aa;">Bring Me Down <!-- Song title -->
                    <span class="artist">• Kanye West • Brandy</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="CZ_-O31R3p4"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics10" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #7398aa;">Addiction <!-- Song title -->
                    <span class="artist">• Kanye West</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="YuCwP-NbY0s"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics11" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #7398aa;">Skit #2 <!-- Song title -->
                    <span class="artist">• Kanye West</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="vRBOIbTyTnU"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics12" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Interlude">I</span> <!-- Interlude symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #7398aa;">Diamonds From Sierra Leone (Remix) <!-- Song title -->
                    <span class="artist">• Kanye West • Jay Z</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="4q7OpvvfjWs"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics13" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #7398aa;">We Major <!-- Song title -->
                    <span class="artist">• Kanye West • Nas • Realy Doe</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="_fr4SV4fGAw"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics14" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #7398aa;">Skit #3 <!-- Song title -->
                    <span class="artist">• Kanye West</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="HyXEzp85RGE"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics15" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Interlude">I</span> <!-- Interlude symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #7398aa;">Hey Mama <!-- Song title -->
                    <span class="artist">• Kanye West</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="B3NmMKfl3Ic"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics16" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #7398aa;">Celebration <!-- Song title -->
                    <span class="artist">• Kanye West</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="FZjlP-N7Hl4"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics17" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #7398aa;">Skit #4 <!-- Song title -->
                    <span class="artist">• Kanye West</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="Y4r6lS04RpQ"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics18" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                    <span class="badge bg-secondary text-dark icon" title="Interlude">I</span> <!-- Interlude symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #7398aa;">Gone <!-- Song title -->
                    <span class="artist">• Kanye West • Consequence • Cam'Ron</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="TwPCaWQIJME"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics19" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #7398aa;">Diamonds From Sierra Leone <!-- Song title -->
                    <span class="artist">• Kanye West</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="glTZy-Sujuw"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics20" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #7398aa;">Late <!-- Song title -->
                    <span class="artist">• Kanye West</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="YRwTaWWK3dI"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics21" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
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
    const lyrics21 = document.getElementById('lyrics21');

    // Change the content of the div when buttons are clicked
    lyrics1.addEventListener('click', () => {
        const lyrics = `"Wake Up Mr. West"
(feat. Bernie Mac)

Oh, ho-ho-ho!
I knew I was gon' see, I knew I was gon' see you again! Knew I was gon' see you again!
Where your goddamn book bag at?
Always carryin' that lil' book bag, nobody wants to see that!
Goddamn 4th grader, sit your ass down!
He wanna play it again like he got somethin' else to do
You ain't got somethin' else to do!
You ain't doin' nothin' wit' your life, notin' wit' your life!
You think this is?
You better look at me when I'm talkin' to you!
You think this shit easy, don't you?
You think this is promised!
Well ain't nothin' promised to you!
Look at my face, do I got a promised face?
Does it look like I promised you anything?
Kanye, nigga-is you snorin' in my class?
Wake up Mr. West!
Wake up Mr. West!`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics2.addEventListener('click', () => {
        const lyrics = `"Heard 'Em Say"
(feat. Adam Levine of Maroon 5)

Wake up Mr. West, Mr. West, Mr. West
Uh, yea, uh, yea, uh, yea

[Kanye West:]
And I heard 'em say, nothing's ever promised tomorrow today
From the Chi, like Tim it's a harder way
So this is in the name of love like Robert say
Before you ask me to go get a job today
Can I at least get a raise of the minimum wage?
And I know that the government administer AIDS
So I guess we just pray like the minister say
Allahu Akbar and throw in some hot cars
Things we see on the screen that's not ours
But these niggas from the hood so these dreams not far
Where I'm from the dope boys is the rock stars
But they can't cop cars without seeing cop cars
I guess they want us all behind bars – I know it

[Kanye West and Adam Levine:]
Uh, and I heard 'em say (Ooh), nothing's ever promised tomorrow today
And I heard 'em say
Nothing's ever promised tomorrow today (Nothing's ever promised tomorrow today)
But we'll a find a way
And nothing last forever but be honest babe
It hurts but it may be the only way

[Kanye West:]
They say people in your life are seasons
And anything that happen is for a reason
And niggas gun clapping and keep to squeezing
And Gran keep praying and keep believing
In Jesus, and one day that you see him
'Til then walk in his footsteps and try to be him
The devil is alive I feel him breathing
Claiming money is the key, so keep on dreaming
And put them lottery tickets just to tease us
My Aunt Pam can't put them cigarettes down
So now my little cousin smokin' them cigarettes now
His job try to claim that he too niggerish now
Is it 'cause his skin blacker than licorice now?
I can't figure it out, I'm sick of it now

[Kanye West and Adam Levine:]
Uh, and I heard 'em say (Ooh), nothing's ever promised tomorrow today
And I heard 'em say
Nothing's ever promised tomorrow today (Nothing's ever promised tomorrow today)
But we'll a find a way
And nothing last forever but be honest babe
It hurts but it may be the only way

[Adam Levine:]
With every worthless word we get more far away
And nothing's ever promised tomorrow today
And nothing lasts forever but be honest babe
It hurts but it may be the only way
Oohh, oohh, oohh, oohh`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics3.addEventListener('click', () => {
        const lyrics = `"Touch The Sky"
(feat. Lupe Fiasco)

[Kanye West:]
I gotta testify
Come up in the spot lookin' extra fly
'Fore the day I die, I'ma touch the sky
Gotta testify
Come up in the spot lookin' extra fly
'Fore the day I die, I'ma touch the sky

[Kanye West:]
Back when they thought pink Polos would hurt the Roc
Before Cam got the shit to pop
The doors was closed
I felt like Bad Boy's street team: I couldn't work the locks
Now let's go, take 'em back to the plan
Me and my momma hopped in that U-Haul van
Any pessimists, I ain't talk to them
Plus I ain't have no phone in my apart-a-ment
Let's take 'em back to the club
Least about an hour I stand on line
I just wanted to dance, I went to Jacob an hour
After I got my advance, I just wanted to shine
Jay favorite line: "Dawg, in due time!"
Now he look at me, like, "Damn, dawg! You where I am!"
A hip-hop legend
I think I died in that accident, 'cause this must be Heaven

[Kanye West:]
I gotta testify
Come up in the spot lookin' extra fly
'Fore the day I die, I'ma touch the sky
Gotta testify
Come up in the spot lookin' extra fly
'Fore the day I die, I'ma touch the sky

[Kanye West:]
Now let's take them hi-ah-igh-igh-igh-igh
(Top of the world, baby, top top of the world!)
A-la-la-la-lah-la-lah
(Top of the world, baby, on top of the world!)
Now let's take them hi-ah-igh-igh-igh-igh
(Top of the world, baby, top top of the world!)
A-la-la-la-lah-la-lah
(Top of the world, baby, on top of the world!)

[Kanye West:]
Back when Gucci was the shit to rock
Back when Slick Rick got the shit to pop
I'd do anything to say I got it
Damn, them new loafers hurt my pocket
Before anybody wanted K. West beats
Me and my girl split the buffet at KFC
Dog, I was havin' nervous breakdowns
Like "Man, these niggas that much better than me?"
Baby, I'm goin' on an aeroplane
And I don't know if I'll be back again
Sure enough, I sent the plane tickets
But when she came to kick it, things became different
Any girl I cheated on, sheets I skeeted on
Couldn't keep it at home, thought I needed a Nia Long
I'm tryin' to right my wrongs
But it's funny them same wrongs helped me write this song

[Kanye West:]
I gotta testify
Come up in the spot lookin' extra fly
'Fore the day you die, you gon' touch the sky
You gon' touch the sky, baby girl, testify
Come up in the spot lookin' extra fly
'Fore the day you die, you gon' touch the sky

[Lupe Fiasco:]
Yes, yes, yes, guess who's on third?
Lupe steal like Lupin the 3rd
Here like ear 'til I'm beer on the curb
Peachfuzz buzz but beard on the verge
Let's slow it down like we're on the syrup
Bottle-shaped body like Mrs. Butterworth
But, before you say another word
I'm back on the block like I'm layin' on the street
I'm tryna stop lyin' like I'm Mumm-Ra
But I'm not lyin' when I'm layin' on the beat, en garde
Or touché, Lupe cool as the unthawed
But I still feel possessed as a gun charge
Come as correct as a porn star
In a fresh pair steps in my best foreign car
So, I represent the first
Now let me end my verse right where the horns are, like uh

[Kanye West:]
I gotta testify
Come up in the spot lookin' extra fly
'Fore the day you die, you gon' touch the sky
You gon' touch the sky, baby girl, testify
Come up in the spot lookin' extra fly
'Fore the day you die, you gon' touch the sky

[Kanye West:]
We back at home, baby!
Sky high, I'm, I'm sky high!
I'm, I'm sky high!
I'm, I'm sky high!
I'm, I'm sky high!
I'm, I'm sky high!
Sky, sky high! I'm, I'm sky high!
Yeah, keep it rollin'!
Yeah, uh, feels good to be home, baby!
Feels good to be home!`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics4.addEventListener('click', () => {
        const lyrics = `"Gold Digger"
(feat. Jamie Foxx)

[Jamie Foxx:]
She take my money when I'm in need
Yeah, she's a triflin' friend indeed
Oh, she's a gold digger
Way over town that digs on me

[Kanye West (Jamie Foxx):]
(She give me money) Now, I ain't sayin' she a gold digger
(When I'm in need) But she ain't messin' with no broke niggas
(She give me money) Now, I ain't sayin' she a gold digger
(When I'm in need) But she ain't messin' with no broke niggas
(I gotta leave) Get down girl, go 'head, get down
(I gotta leave) Get down girl, go 'head, get down
(I gotta leave) Get down girl, go 'head, get down
(I gotta leave) Get down girl, go 'head

[Kanye West:]
Cutie the bomb, met her at a beauty salon
With a baby Louis Vuitton under her underarm
She said, "I can tell you rock, I can tell by your charm
Far as girls, you got a flock
I can tell by your charm and your arm"
But I'm lookin' for the one, have you seen her?
My psychic told me she'll have a ass like Serena
Trina, Jennifer Lopez, four kids
And I gotta take all they bad asses to ShowBiz?
Okay, get your kids, but then they got their friends
I pulled up in the Benz, they all got up in
We all went to din' and then I had to pay
If you fuckin' with this girl, then you better be paid
You know why? It take too much to touch her
From what I heard she got a baby by Busta
My best friend said she used to fuck with Usher
I don't care what none of y'all say, I still love her

[Kanye West (Jamie Foxx):]
(She give me money) Now, I ain't sayin' she a gold digger
(When I'm in need) But she ain't messin' with no broke niggas
(She give me money) Now, I ain't sayin' she a gold digger
(When I'm in need) But she ain't messin' with no broke niggas
(I gotta leave) Get down girl, go 'head, get down
(I gotta leave) Get down girl, go 'head, get down
(I gotta leave) Get down girl, go 'head, get down
(I gotta leave) Get down girl, go 'head

[Kanye West:]
Eighteen years, eighteen years
She got one of your kids, got you for eighteen years
I know somebody payin' child support for one of his kids
His baby mama car and crib is bigger than his
You will see him on TV any given Sunday
Win the Super Bowl and drive off in a Hyundai
She was supposed to buy your shorty Tyco with your money
She went to the doctor, got lipo with your money
She walkin' around lookin' like Michael with your money
Should've got that insured, Geico for your money
If you ain't no punk
Holla, "We want prenup! We want prenup!" (Yeah!)
It's somethin' that you need to have
'Cause when she leave yo' ass, she gon' leave with half
Eighteen years, eighteen years
And on the 18th birthday, he found out it wasn't his?

[Kanye West (Jamie Foxx):]
(She give me money) Now, I ain't sayin' she a gold digger
(When I'm in need) But she ain't messin' with no broke niggas
(She give me money) Now, I ain't sayin' she a gold digger
(When I'm in need) But she ain't messin' with no broke niggas
(I gotta leave) Get down girl, go 'head, get down
(I gotta leave) Get down girl, go 'head, get down
(I gotta leave) Get down girl, go 'head, get down
(I gotta leave) Get down girl, go 'head

[Kanye West:]
Now, I ain't sayin' you're a gold digger, you got needs
You don't want a dude to smoke, but he can't buy weed
You go out to eat, he can't pay, y'all can't leave
There's dishes in the back, he gotta roll up his sleeves
But while y'all washin', watch him
He gon' make it to a Benz out of that Datsun
He got that ambition, baby, look at his eyes
This week he moppin' floors, next week it's the fries
So stick by his side
I know there's dudes ballin', and yeah, that's nice
And they gonna keep callin' and tryin', but you stay right, girl
And when he get on, he'll leave yo' ass for a white girl

[Kanye West (Jamie Foxx):]
(I gotta leave) Get down girl, go 'head, get down
(I gotta leave) Get down girl, go 'head, get down
(I gotta leave) Get down girl, go 'head, get down
(I gotta leave) Get down girl, go 'head

[Kanye West:]
Let me hear that back`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics5.addEventListener('click', () => {
        const lyrics = `"Skit #1"

I brought you brothers here today to start our own fraternity
Broke Phi Broke, we ain't got it
Broke Phi Broke (we ain't got it)
No, we have no money
We are sharin' jeans
If I go outside, I got the only clothing on
How many cars do we own? (None!)
How many cars do we own? (None, sir!)
Should we let our women go and be with the cat with the car?
(Yes, we will!)
Why? Because we can't afford gas. Say it with me!
(We can't afford no gas!)
Say it!
(We can't afford no gas!)
So we ain't drivin'!
`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics6.addEventListener('click', () => {
        const lyrics = `"Drive Slow"
(feat. Paul Wall, GLC)

[Kanye West:]
Drive slow, homie
Drive slow, homie
You never know, homie, might meet some hoes, homie
You need to pump your brakes and drive slow, homie

[Kanye West:]
My homie Mali used to stay at 79th and May
One of my best friends from back in the day
Down the street from Calumet, a school full of Stones
He nicknamed me K-Rock so they would leave me alone
Bulls jacket with his hat broke way off
And walked around the mall with his radio face off
Plus he had the spinner from his Daytons in his hand
Keys in his hand, reason again to let you know he's the man
Back when we rocked Ellesses, he had dreams of Caprices
Drove by the teachers, even more by polices
How'd he get the cash? The day his father passed away
Left him with a little somethin', sixteen, he was stuntin'
Al B. Sure! Nigga with the hair all wavy
Hit Lake Shore, girls go all crazy
Hit the freeway, go at least 'bout eighty
Boned so much that summer, even had him a baby
See back-back then-then, if you had a car
You was the Chi-Town version of Baby
And I was just a virgin, a baby
One of the reasons I looked up to him crazy
I used to love to play my demo tape when the system yanked
Felt like I was almost signed when the shit got cranked
We'd take a Saturday and just circle the mall
They had they Lincolns and Auroras, we was hurtin' 'em all
With the girls a lot of flirtin' involved, but dog
Fuck all that flirtin' now I'm tryin' to get in some drawers
So put me on with these hoes, homie
He told me don't rush to get grown, drive slow, homie

[Kanye West:]
Drive slow, homie
Drive slow
You never know, homie, about these hoes, homie
You need to pump your brakes and drive slow, homie

[Paul Wall:]
What it do? I'm posted up in the parking lot, my trunk waving
The candy gloss is immaculate, it's simply amazing
Them elbows pokin' wide on that candy 'Lac
Trunk open, screens on, neons lit with fifth relaxed
I'm on a mission for dime-pieces and sexy ladies
Allow me to introduce you to my CL Mercedes
It's a star-studded event when I valet park
Open up my mouth and sunlight illuminates the dark
You see them fours crawling? You see them screens falling?
The disco ball in my mouth insinuates I'm ballin'
I'm leaning on the switch, sitting crooked in my slab
But I could still catch boppers if I drove a cab
A young Houston hard-hitter all about the scrilla
Ridin' something candy-coated, crawling like a caterpillar
I'm tipping on them fours, I'm jamming on that Screw
I'm looking for them hoes, baby, what it do? Drive slow, homie

[Kanye West and GLC:]
Turn your hazard lights on when you see them hoes
Drive slow, homie
If you're riding around the city with nowhere to go
Drive slow, homie
Live today, cause tomorrow, man, you never know
You never know, homie, might meet some hoes, homie
You need to pump your brakes and drive slow, homie

[GLC and Kanye West:]
My car's like the movie, my car's like the crib
I got more TVs in here than where I live
And that don't make no sense, but baby, I'm the shit
And everything I flip, you know it's something serious
I got the custom grill, I got the Brabus rims
I got the baller genetics, baby this evidence
You see a player flicking, and how you ain't convinced
That you should go on and kiss it, just a little bit (just a little bit)
I got my custom kicks, I got my Jesus chain
My canaries is gleamin' through my angel wings
They see me, hoes acting like they seen a king
With that mean lean, smoking on that finest Cali green
My wood-grain oak, I'm riding on Vogues
My cylinder quiet, like tip-toes
I sold Os, and this I know
When you see them hoes, little homie, drive slow
(drive slow, drive slow)

Yeah
Drive slow, homie
Drive slow, homie
You never know, homie, might meet some hoes, homie
You need to pump your brakes and drive slow, homie
Drive slow, homie`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics7.addEventListener('click', () => {
        const lyrics = `"My Way Home"
(feat. Common)

[Common:]
Yeah
They say home is where the hate is, my dome is where fate is
I stroll where souls get lost like Vegas
Seen through the eyes of rebel glasses
Pray to God that my arms reach the masses
The young smoke grass in grassless jungles
Rubber band together in cashless bundles
We wear struggling chains, divided only hustle remains
Making sense of it we hustle for change
Revolution ain't a game it's another name, for life fighting
Some wanna stay in their corner like Mike Tyson
Hypes fighting for hits to heighten they hell
Don't he know he could only get as high as he fell?
Show money becomes bail, relationships become jail
Children are unheld
I wish love was for sale, "Behold the Pale Horse"
Got me trapped like R. Kel', I bail and it

[Gil Scott-Heron:]
Might not be such a bad idea if I never
Never went home again
I'm on my way home
I left three days ago, but no one seems to know I'm gone
Home is where the hatred is; home is filled with pain and it
Might not be such a bad idea if I never
Never went home again`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics8.addEventListener('click', () => {
        const lyrics = `"Crack Music"
(feat. The Game)

[Kanye West and The Game:]
That's that crack music nigga
That real black music nigga
(La la la la la la la lah, la la la la la lah)
That's that crack music nigga
That real black music nigga
(La la la la la la la lah, la la la la la lah)

[Kanye West:]
How we stop the Black Panthers?
Ronald Reagan cooked up an answer
You hear that? What Gil Scott was hearin'
When our heroes or heroines got hooked on heroin
Crack raised the murder rate in D.C. and Maryland
We invested in that, it's like we got Merrill lynched
And we been hangin' from the same tree ever since
Sometimes I feel the music is the only medicine
So we, cook it, cut it, measure it, bag it
Sell it, the fiends cop it, nowadays they can't tell if
That's that good shit, we ain't sure man
Put the CD on your tongue, yeah that's pure man

[Kanye West and The Game:]
That's that crack music nigga
That real black music nigga
(La la la la la la la lah, la la la la la lah)
That's that crack music nigga
That real black music nigga
(La la la la la la la lah, la la la la la lah)

[Kanye West:]
From the place where the father's gone
The mothers is hardly home
And the Madigan's lock us up in the Audy Home
How the Mexicans say, we just tryin' to party holmes
They wanna pack us all in a box like Styrofoam
Who gave Saddam anthrax?
George Bush got the answers
Back in the hood it's a different type of chemical
Arm and Hammer baking soda raised they own quota
Right when our soldiers, ran for the stove 'cause
'Cause, dreams of being Hova
Went from bein' a broke man to bein' a dopeman
To bein' the President, look there's hope man
This that inspiration for the Moes and the Folks man
Shorty come and see his momma straight overdosin'
And this is the soundtrack
This the type of music that you make when you 'round that—

[Kanye West and The Game:]
Crack music nigga
That real black music nigga
(La la la la la la la lah, la la la la la lah)
That's that crack music nigga
That real black music nigga
(La la la la la la la lah, la la la la la lah)

[Kanye West:]
God, how could you let this happen?
(La la la la la la lah, la la la la la la lah)
(La la lah, la la lah)
(La la la la la la lah, la la la la la la lah)
(La la lah, la la lah)

[Kanye West and The Game:]
Uh, that's that crack music, crack music
That real black music, black music
(La la la la la la la lah, la la la la la lah)
That's that crack music nigga
That real black music nigga
(La la la la la la la lah, la la la la la lah)
(La la la la la la la lah, la la la la la lah)
(La la la la la la la lah, la la la la la lah)
Uh, that's that crack music, crack music
That real black music, black music
(La la la la la la la lah, la la la la la lah)

[Malik Yusef:]
Our Father, give us this day, our daily bread
Before the feds give us these days and take our daily bread
See I done did all this old bullshit
And to atone, I throw a little somethin' somethin' on the pulpit
We took that shit, measured it and then cooked that shit
And what we gave back was crack music
And now we ooze it through they nooks and crannies
So our mommas ain't got to be they cooks and nannies
And we gon' repo everything they ever took from granny
Now the former slaves trade hooks for Grammys
This dark diction has become America's addiction
Those who ain't even black use it
We gon' keep baggin' up this here crack music`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics9.addEventListener('click', () => {
        const lyrics = `"Roses"

[Kanye West:]
I know it's past visiting hours
But can I please give her these flowers?
The doctor don't wanna take procedures
He claim her heart can't take the anaesthesia
It'll send her body into a seizure
That little thing by the hospital bed, it'll stop beeping
Hey, chick, I'm at a loss for words
What do you say at this time? Remember when I was 9?
Tell her everything gon' be fine, but I be lyin'
Her family cryin', they want her to live, and she tryin'
I'm arguin' like what kind of doctor can we fly in
You know the best medicine go to people that's paid
If Magic Johnson got a cure for AIDS
And all the broke motherfuckers passed away
You telling me if my grandma's in the NBA
Right now she'd be OK? But since she
Was just a secretary, worked for the church for 35 years
Things 'sposed to stop right here
My grandfather tryin' to pull it together, he's strong
That's where I get my confidence from
I asked the nurse, "Did you do the research?"
She asked me, "Can you sign some T-shirts?"
Bitch, is you smoking reefer?
You don't see that we hurt? But still–

[Bill Withers and Tony Williams:]
I smile, when Rosie comes to see me
And I can't wait for a sunny day (Seeing it through your eyes)
Can't wait for the clouds to break

[Kanye West:]
They're outside of the emergency room, room
You can feel my heartbeat, beat, beat
If she gon' pull through, we gon' find out soon
But right now she asleep, sleep, sleep
My momma say they say she could pass away any day
Hey chick, what these doctors know anyway?
Let me see the X-rays, I ain't no expert, I'm just hurt
Cousin Kim took off of work
Plus my Aunt Shirley, Aunt Beverly, Aunt Clay and Aunt Jean
So many Aunties we could have an Auntie Team
Feel like Amerie, it's just "One Thing"
When they said that she made it you see their eyes gleam
I think we at a all-time high
To get there, we run, we fly, we drive
'Cause with my family we know where home is
And so instead of sending flowers, we the roses

[Bill Withers and Tony Williams:]
I smile, when Rosie comes to see me
And I can't wait for a sunny day (Seeing it through your eyes)
Can't wait for the clouds to break

[Bill Withers and Patti LaBelle:]
'Cause Rosie brings the sunshine (Oh)

[Bill Withers and Tony Williams:]
I smile, when Rosie comes to see me
And I can't wait for a sunny day (Seeing it through your eyes)
Can't wait for the clouds to break

[Bill Withers and Patti LaBelle:]
I, smile, when Rosie comes to see me
And I'm sad when Rosie goes away
'Cause Rosie brings the sunshine (Say)

[Patti LaBelle:]
Can't wait, I can't wait, no
Can't wait, I can't wait, no
Can't wait, I, can't wait
No, can't wait, for, for a sunny day
Momma can't wait, for the clouds to break
Mm mmm mm mm-mm mm-mm
Oh oh oh oh no no, say
Tellin' you the truth now
Said I can't wait, uh-uh
I won't wait, no`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics10.addEventListener('click', () => {
        const lyrics = `"Bring Me Down"
(feat. Brandy)

[Brandy:]
I always knew that one day, they'd try to bring me down
Way down, way down
One day, they'd tried to bring me down
Always knew that one day, they'd try to bring me down
Way down, they'd try to bring me down

[Kanye West:]
We gon' to Mass today, we have to pray
Besides what the pastor say, I have to say
Since Pac passed away
Most you rappers don't even deserve a track from me
You see, if you ever wanted to ever be anything
There'd always be somebody that shoot down any dream
There'll always be haters, that's the way it is
Hater niggas marry hater bitches and have hater kids
But they gon' have to take my life 'fore they take my drive
'Cause when I was barely livin', that's what kept me alive
Just the thought that maybe it could be better than what we at at this time
Make it out of this grind, 'fore I'm out of my mind
And get some leeway on the "he say, she say"
Your girl don't like me, how long has she been gay?
Spanish girls say, "Yo, no hablo inglés."
And everybody want to run to me for their single
It's funny how these wack niggas need my help
Wasn't around when I couldn't feed myself
Dawg, if I was you, I wouldn't feel myself
Dawg, if I was you, I'd kill myself!
Made a mil' myself and I'm still myself
And I'mma look in the mirror if I need some help
Now I'll speak from the heart, y'all all frontin'
Everybody feel a way about K but at least y'all feel something!

[Brandy:]
What you calling?
I let all in for getting what some get will get ya
What kind of dream we found?
See, I'm often catching crosswinds
Forgetting where the hell I met you
And try to bring me down

[Brandy:]
I always knew that one day, they'd try to bring me down
Way down, way down
One day, they'd tried to bring me down
Always knew that one day, they'd try to bring me down
Way down, they'd try to bring me down`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics11.addEventListener('click', () => {
        const lyrics = `"Addiction"

[Etta James:]
You make me smile with my heart, oh

[Kanye West, Etta James:]
Why everything that's supposed to be bad make me feel so good?
Everything they told me not to is exactly what I would
Man, I tried to stop man, I tried the best I could
But you make me smile

[Kanye West, Etta James:]
What's your addiction? Is it money? Is it girls? Is it weed?
I've been afflicted by not one, not two, but all three
She's got the same thing, about me, but more, about us
She's coming over, so I guess, that means, I'm her drugs
(You make me smile)
Just let me peek now, I mean damn, I'm so curious
She's got a lover, so the lies, and the lust, is a rush
Time's of the essence, I need, you to be spontaneous
Roll up the doja, Henny and Co-co-coca-Cola
(You make me smile with my heart, oh)
Then I'm co-coming over 'cause it's ne-never over

[Kanye West, Etta James:]
Why everything that's supposed to be bad make me feel so good?
Everything they told me not to is exactly what I would
Man, I tried to stop man, I tried the best I could
But you make me smile

[Kanye West, Etta James:]
I see the emotion in your eyes, that you, try not to show
We get the closest when you high, or you drunk, or you blown
So I pour the potion, so we could both get high, as we could go
Then I'll get the lotion, and do somethin' to me, when your thighs is exposed (You make me smile)
There's no turning back now, I mean I don't mean to impose
Not now but right now, I need you to undress, and then pose
I'm into that now, catch a vibe, when the doors, get closed
Roll up the doja, Henny and Co-co-coca Cola
(You make me smile with my heart)
And I keep co-coming over 'cause it's ne-never over

[Strings, Etta James:]
Why everything that's supposed to be bad make me feel so good?
Everything they told me not to is exactly what I would
Man, I tried to stop man, I tried the best I could
But you make me smile

[Kanye West, Etta James:]
Why everything that's supposed to be bad make me feel so good?
Everything they told me not to is exactly what I would
Man, I tried to stop man, I tried the best I could
But you make me smile

[Kanye West:]
I just wanted to ask you
Just wanted to um, let me, how would I put this uh
Let's say all your friends, remember the one
You said if you ever she would be the one
OK, OK, OK (You make me smile with my heart)
Well I was thinking, hypothetically
I mean don't take this seriously
Don't take me: I mean just, uh, not credibly
I'm feeling incredibly, I mean let it be
I just let it be
I mean you, her and me (You make me smile with my heart)
I mean you, her and me
Maybe, baby, baby
You know I was just kidding
Unless you gon' do it (You make me smile)`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics12.addEventListener('click', () => {
        const lyrics = `"Skit #2"

We broke, broke broke phi broke
We ain't got it
Broke, broke, broke phi broke
We ain't got it

Don't spend no money, ain't got no clothes
Ain't got no cars, ain't got no hoes

We broke, broke, broke phi broke
We ain't got it
Broke, broke, broke phi broke
We ain't got it

Got no money (got no money)
We got no clothes (got no clothes)
Ain't got no cars (ain't got no cars)
Can't get no hoes

We broke, broke, broke, broke, broke
Bunch of niggas broke, broke, broke, broke, broke!`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics13.addEventListener('click', () => {
        const lyrics = `"Diamonds From Sierra Leone (Remix)"
(feat. Jay-Z)

[Shirley Bassey:]
Diamonds are forever
They're all I need to please me
They can't stimulate or tease me
They won't leave in the night
Have no fear that they might desert me

[Kanye West & Shirley Bassey:]
(Diamonds are forever forever forever)
Throw your diamonds in the sky if you feel the vibe
(Diamonds are forever forever forever)
The Roc is still alive every time I rhyme
(Forever ever? Forever ever? Ever ever?
Ever ever? Ever ever? Ever ever? Ever ever?)

[Kanye West:]
Good mornin', this ain't Vietnam still
People lose hands, legs, arms, for real
Little was known of Sierra Leone
And how it connect to the diamonds we own
When I speak of diamonds in this song
I ain't talkin' about the ones that be glowin'
I'm talkin' about Roc-a-Fella, my home
My chain, these ain't conflict diamonds
Is they, Jacob? Don't lie to me, man
See, a part of me sayin' keep shinin'
How when I know what a blood diamond is?
Though it's thousands of miles away
Sierra Leone connects to what we go through today
Over here it's a drug trade, we die from drugs
Over there they die from what we buy from drugs
The diamonds, the chains, the bracelets, the charmses
I thought my Jesus piece was so harmless
'Til I seen a picture of a shorty armless
And here's the conflict
It's in a black person soul to rock that gold
Spend your whole life tryin' to get that ice
On a Polo rugby, it looks so nice
How can somethin' so wrong make me feel so right?
Right? 'Fore I beat myself up like Ike
You can still throw your Roc-a-Fella diamond tonight, 'cause

[Kanye West & Shirley Bassey:]
(Diamonds are forever forever forever)
Throw your diamonds in the sky if you feel the vibe
Diamonds are forever forever forever
The Roc is still alive every time I rhyme
(Forever ever? Forever ever? Ever ever?
Ever ever? Ever ever? Ever ever? Ever ever?)

[Kanye West:]
People askin' me is I'm gon' give my chain back
That'll be the same day I give the game back
You know the next question, dawg, "Yo, where Dame at?"
This track the Indian dance that bring our rain back
"What's up with you and Jay, man? Are y'all OK, man?"

[Jay-Z:]
Yup, I got it from here, 'Ye, damn
The chain remains, the gang is intact
The name is mine, I'll take blame for that
The pressure's on, but guess who ain't gonna crack?
Ha ha, pardon me, I had to laugh at that
How could you falter when you're the Rock of Gibraltar?
I had to get off the boat so I could walk on water
This ain't no tall order, this is nothin' to me
Difficult takes a day, impossible takes a week
I do this in my sleep
I sold kilos of coke, I'm guessin' I can sell CDs
I'm not a businessman; I'm a business, man!
Let me handle my business, damn
Kanyeez you got me, Freeway then Foxy
YG's, Teairra Mari, Peedi watch me
Bleek could be one hit away his whole career
As long as I'm alive he's a millionaire
And even if I die he's in my will somewhere
So he could just kick back and chill somewhere
Oh yeah, he don't even have to write rhymes
The Dynasty like my money: last three lifetimes
Shirley Bassey's in the rear
Sayin' exactly what I've been sayin' practically my whole career
The diamond is forever, I've been minin' this forever
Now the Louis Vuitton Don's timin' couldn't be better
People lined up to see the Titanic sinkin'
Instead we rose up from the ash like a phoenix
If you're waitin' for the end of the Dynasty sign
It would seem like forever is a mighty long time
(I'm Young, bitches!) Good night!`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics14.addEventListener('click', () => {
        const lyrics = `"We Major"
(feat. Nas, Really Doe)

[Really Doe:]
You motherfuckers better do your job and roll up
And watch how we roll up, and
I can't control it, I can't hold it, it's so nuts
I take a sip of that 'gnac, I wanna fuck
I take a hit of that chronic, it got me stuck
But really what's amazing is how I keep blazing
Towel under the door, we smoke until the day's end
Puff-puff, then pass, don't fuck up rotation
Hpnotiq for Henny? Now, nigga, that's a chaser
Turn nothing to something, now, pimping, that's a savior
Best things are green, now, pimpin', get your paper
High off the ground, from stair to skyscraper
Cool out, thinking we local, c'mon, homie, we major

[Kanye West:]
We major? C'mon, homie, we major
We major? C'mon, homie, we major
We major! C'mon, homie, we major
We major! C'mon

[Kanye West:]
Feeling better than some head on a Sunday afternoon
Better than a chick that say "Yes" too soon
Until you have a daughter; that's what I call karma
And you pray to God she don't grow breasts too soon
Projects tore up, gang signs is thrown up
Niggas hats broke off, that's how we grow up
Why else you think shorties write rhymes? Just to blow up?
Get they first car and then, IRS show up
He ain't never had shit, but he had that nine
Nigga come through flicking and he had that shine
Put two and two together and a little bad weather
Gon' be your whole family on that funeral line
Asked the reverend, "Was the strip clubs cool?
If my tips helped send a pretty girl through school?"
That's all I want, like winos want they good whiskey
I ain't in the Klan, but I brought my hood with me

[Really Doe:]
You motherfuckers better do your job and roll up
And watch how we roll up, and
I can't control it, I can't hold it, it's so nuts
I take a sip of that 'gnac, I wanna fuck
I take a hit of that chronic, it got me stuck
But really what's amazing is how I keep blazing
Towel under the door, we smoke until the day's end
Puff puff, then pass, don't fuck up rotation
Hpnotiq for Henny? Now, nigga, that's a chaser
Turn nothing to something, now, pimping, that's a savior
Best things are green, now, pimpin', get your paper
High off the ground, from stair to skyscraper
Cool out, thinking we local, c'mon, homie, we major

[Nas:]
We major? C'mon, homie, we major
We major? C'mon, homie, we major
We major! C'mon, homie, we major
We major! C'mon, homie, we major

[Nas:]
I heard the beat and I ain't know what to write
First line—should it be about the hoes or the ice?
Four-fours or Black Christ? Both flows'd be nice
Rap about big paper or the black man plight
At the studio console, asked my man to the right
"What this verse sound like? Should I freestyle or write?"
He said, "Nas, what the fans want is Illmatic, still"
Looked at the pad and pencil, and jotted what I feel
Been like twelve years since a nigga first signed
Now, I'm a free agent, and I'm thinking it's time
To build my very own Motown
'Cause rappers be deprived of executive nine-to-fives
And it hurts to see these companies be stealing the life
And I love to give my blood, sweat and tears to the mic
So y'all copped the LPs and y'all fiends got dealt
I'm Jesse Jackson on the balcony when King got killed
I survived the livest niggas around
Lasted longer than more than half of you clowns
Look, I used to cook before I had the game took
Either way, my change came like Sam Cooke

[Tony Williams & Nas:]
Ba-dop-ba-ba (Yeah, yeah, yeah-yeah, yeah-yeah)
Feeling better than I ever felt before today
Like better late than never; it's orientation
Still, we can make it better, throwing all your cares away
Oh, oh, oh, ooh!

[Really Doe & Tony Williams:]
You motherfuckers better do your job and roll up
And watch how we roll up, and (Ba-dop-ba-ba)
I can't control it, I can't hold it, it's so nuts
I take a sip of that 'gnac, I wanna fuck
I take a hit of that chronic, it got me stuck
But really what's amazing is how I keep blazing
Towel under the door, we smoke until the day's end
Puff-puff, then pass, don't fuck up rotation
Hpnotiq for Henny? Now, nigga, that's a chaser (Oh, oh, oh, ooh!)
Turn nothing to something, now, pimping, that's a savior (Ba-dop-ba-ba)
Best things are green, now, pimpin', get your paper
High off the ground, from stair to skyscraper
Cool out, thinking we local, c'mon, homie, we major

[Kanye West + Nas:]
We major? (C'mon, homie, we major)
We major? (C'mon, homie, we major)
We major (C'mon, homie, we major)
We major

[Tony Williams:]
Oh, oh, oh, ooh! Ba-dop-ba-ba
Feeling better than I ever felt before today
But better late than never; it's orientation
Still, we can make it better, throwing all your cares away
Oh, oh, oh, ooh!

[Kanye West & Tony Williams:]
Can I talk my shit again?
Can I talk my shit again?
I can't believe I'm back up in this motherfucker
I'ma be late, though
I gotta figure out what I'm finna wear
Yeah
The Roc is definitely in the building
G.O.O.D. Music's definitely in the building, ugh
I gotta say "What's up" to Tony Williams
On the vocals!
Sings—He sings quite beautifully, don't you agree?
Don't you agree?
Ugh
And Jon Brion on the keys right now
And Warryn Campbell on the keys right now
So they asked me,
"Why you call it Late Registration, 'Ye?"
'Cause we taking these motherfuckers back to school
La, la, la, la-la-la-la la
If you know this part right here, feel free to sing along
La la la la la, la-la-la

[Tony Williams & Kanye West:]
Ba-dop-bop-ba (Oh)
Feeling better than I ever felt before today (If you feeling good)
But better late than never; it's orientation (It's orientation)
But we can make it better, throwing all your cares away
We want you to get used to this
Oh, oh, oh, ooh! Ba-dop-bop-ba
Ugh, they can't do what we do, baby
Uh-uh! They can't do what we do baby
Uh-uh! They can't do what we do, baby
Yeah
Oh, oh, oh, ooh!
`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics15.addEventListener('click', () => {
        const lyrics = `"Skit #3"

This was founded years ago
By broke slaves, years ago
Who did not have, years ago
By broke brothas in the 20s, years ago
Who did not have when we could not eat
Hmm, remember that?
Eating all of our cereal with forks because we wanted to save the milk, do you remember that? Hmm?
Do you remember all those Christmases when your Mama walked in the room and pretended she was the tree, huh?
Remember that?`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics16.addEventListener('click', () => {
        const lyrics = `"Hey Mama"

(Hey Mama)
I wanna scream so loud for you, 'cause I'm so proud of you
Let me tell you what I'm about to do
(Hey Mama)
I know I act a fool but, I promise you I'm goin' back to school
I appreciate what you allowed for me
I just want you to be proud of me
(Hey Mama)

I wanna tell the whole world about a friend of mine
This little light of mine and I'm finna let it shine
I'm finna take y'all back to them better times
I'm finna talk about my mama if y'all don't mind
I was three years old when you and I moved to the Chi
Late December, harsh winter gave me a cold
You fixed me up something that was good for my soul
Famous homemade chicken soup, can I have another bowl?
You work late nights just to keep on the lights
Mommy got me training wheels so I could keep on my bike
And you would give anything in this world
Michael Jackson leather and a glove, but didn't give me a curl
And you never put no man over me
And I love you for that, mommy, can't you see?
Seven years old, caught you with tears in your eyes
'Cause a nigga cheatin', telling you lies, then I started to cry
As we knelt on the kitchen floor
I said mommy I'ma love you 'til you don't hurt no more
And when I'm older, you ain't gotta work no more
And I'ma get you that mansion that we couldn't afford
See you're unbreakable, unmistakable
Highly capable, lady that's makin' loot
A livin' legend too, just look at what heaven do
Send us an angel, and I thank you (Hey Mama)

(Hey Mama)
I wanna scream so loud for you, 'cause I'm so proud of you
Let me tell you what I'm about to do
(Hey Mama)
I know I act a fool but, I promise you I'm goin' back to school
I appreciate what you allowed for me
I just want you to be proud of me
(Hey Mama)

Forrest Gump mama said, "Life is like a box of chocolates."
My mama told me go to school, get your doctorate
Something to fall back on, you could profit with
But still supported me when I did the opposite
Now I feel like it's things I gotta get
Things I gotta do, just to prove to you
You was getting through, can the choir, please
Give me a verse of "You Are So Beautiful To Me"
Can't you see, you're like a book of poetry
Maya Angelou, Nikki Giovanni, turn one page and there's my mommy
Come on mommy just dance wit' me, let the whole world see your dancing feet
Now when I say Hey, y'all say, Mama, now everybody answer me (Hey Mama)

(Hey Mama)
I wanna scream so loud for you, 'cause I'm so proud of you
Let me tell you what I'm about to do
(Hey Mama)
I know I act a fool but, I promise you I'm goin' back to school
I appreciate what you allowed for me
I just want you to be proud of me
(Hey Mama)

I guess it also depends though if my ends low
Second, they get up you gon' get that Benzo
Tint the windows, ride around the city and let ya friends know (Hey Mama)
Tell your job you gotta fake em out
Since you brought me in this world, let me take you out
To a restaurant, upper echelon
I'ma get you a Jag, whatever else you want
Just tell me what kind of S-Type Donda West like?
Tell me the perfect color so I make it just right
It don't gotta be Mother's Day, or your birthday
For me to just call and say: (Hey Mama)

I wanna scream so loud for you, 'cause I'm so proud of you
Let me tell you what I'm about to do
(Hey Mama)
You know I love you so
I never let you go
Wrote this song just so you know
No matter where you go our love is true
Mama mama mama mama mama...
Mama mama mama mama mama...`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics17.addEventListener('click', () => {
        const lyrics = `"Celebration"

Yeah, you know what this is
It's a celebration, bitches!
Grab a drink, grab a glass
After that I grab yo ass

Why you actin' all... shy and all?
Why is y'all... lyin' for?
"I never did this before..." Stop that
What, you want some Patron? I got that
I mean I promise y'all, you fine and all
And your girlfriend, she kinda raw
But she not like you
No, she not like you
Right now I need you to mute all the monologue
All that talking is gon' give me a Tylenol
You put a nigga to sleep, I'm tired of y'all
Right now the Louis Vuitton don is signing off

But, I just thought you should know
We hit the liquor store
Got some Cris' and some Mo'
And we about to let it flow, oh, oh
Had some problems before
But see we let em go
Got an ounce of that 'dro
And we about to let it blow, oh, oh

Yeah, you know what this is
It's a celebration, bitches!
Grab a drink, grab a glass
After that I grab yo ass

See you know my style, I'm very wild
And I vow that my child will be well endowed
Like his daddy
And tell him that your mama had a fattie
He looked up at me
Said, "Daddy, that's the reason why you had me?"
Yep, we was practicing
'Til one day your ass bust through the packaging
You know what though? You my favorite accident
So go head pop some Cristal for my newborn child

'Cause now y'all know what this is
It's a celebration, bitches!
Grab a drink, grab a glass
After that I grab yo ass

But, I just thought you should know
We hit the liquor store
Got some Cris' and some Mo'
And we about to let it flow, oh, oh
Had some problems before but see we let em go
Got an ounce of that 'dro
And we about to let it blow, oh

Oh, oh!
We lookin' for some hoes, hoes!
Ow! `; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics18.addEventListener('click', () => {
        const lyrics = `"Skit #4"

Broke, broke, broke phi broke (we ain't got it)
Broke, broke, broke phi broke (we ain't got it)
Broke, broke broke phi broke (we ain't got it)
Broke, broke, broke phi-

[Leader:]
I've called this private meeting today because there is an imposter among us.
There is an imposter among us.
This brother right here has been out making beats on the side, yes he has.
Pretending he's broke walking amongst us.
This brother has been eating every day, can you believe that? Eating every day.
Pretending he's with us, he's not one of us.
I did not want to believe this, but I walked into the brother Kanye's closet and I found new shoes.
I found new shoes!
Kanye, would you like to step forward and explain these new shoes?!

[Kanye:] I was-you crazy, I wasn't, I didn't, um, I was just um, I was-

[Leader:] No, you speak up, brother!

[Kanye:] I was gon' stick-I'm trying to stick to my roots and-

[Leader:] What?

[Kanye:] I wanna stick to my roots, and-

[Leader:]
What?! You march your new shoes out of here, Kanye.
Don't you ever come back in 'em. Don't you ever come back smellin' all good, taking showers and shit like
That, all right? We don't appreciate that down here at Broke Phi Broke.

What's next?`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics19.addEventListener('click', () => {
        const lyrics = `"Gone"
(feat. Consequence, Cam'Ron)

Wished I had told ooh was (the) only one (uh oh!)
But it's too late, it's too late he's gone

[Kanye West:]
You sweat her and I ain't talking 'bout a Coogi
You a Big L and I ain't talking 'bout Cool J
See me at the airport, at least twenty Louis
Treat me like the Prince and this my sweet brother Numpsay
(Brother Numpsay!) groupies say I'm too choosy
Take em to the show and talk all through the movies
Says she want diamonds, I took her to Ruby Tuesdays
If we up in Fridays, I still have it my way

[Cam'ron:]
Gone we striving home
Gone I ride on chrome, it's too late

[Kanye West:]
Y'all don't want no prob' from me
What you rappers could get is a job from me
Maybe you could be my intern and in turn
I'll show you how I cook up summer in the winter
Aaron love the raw dog, when will he learn
Caught something on the Usher tour, he had to let it burn
Plus he already got three children
Arguin' over babysitters like bitch it's yo turn
"Damn Ye it'd be stupid to diss you
Even your superficial raps is super-official"
R-R-R-Roc Pastelle with Gucci on
With TVs in the ride, throw a movie on
Said he couldn't rap now he at the top with Doobie Long
'Cause I dookied on any song that they threw me on, gone

[Cam'ron:]
We striving home, gone
I ride on chrome
We striving home
We striving home, gone (Killa)
I ride on chrome

[Cam'ron:]
Knock knock, who's there? Killa Cam, Killa who?
Killa Cam, hustler, grinder, guerrilla true
Oh my chinchilla blue, blue you ever dealt with a dealer
Well here's the deal, ma we going to the dealer woo
No concealing, no ceiling I don't need a roof
Act up, get out, I don't need you poof
Poof be gone, damn tough luck dag
Dag niggas still doing puff-puff-pass
Pull the truck up fast and I tell 'em
Hey back in a touched up Jag shit
Y'all niggas wanna get in Cam's cerebellum
An old man just gon' tell em too late
Then I see how y'all gonna react when I'm gone
My last girl want me back then I'm on
Fine stay, you got the grind hey
Came back, read what the sign say
Yes I know you wanna see my demise
Yeah you church boy, acting like a thief in disguise
Ain't even my size, see the greed in my eyes
Ask Abby, I hustle, brought weed to the Chi, shit
And that ain't even a lie, please believe me
Gave Weezie a piece of the pie and
You can ask George or Regina
The whole West Side I explore with the Bimmer now

[Cam'ron:]
We striving home, I ride on chrome
Listen, homeboy, move on
That's your best bet, why's that, Cons'?

[Consequence:]
I been pouring out some liquor for the fact that my pal's gone
And trying to help his Momma with the fact that her child gone
And since we used to bubble like a tub full of Calgon
Guess it's only right that I should help her from now on
But since they got afoul on what could've gone wrong
Now they asking Cons, how long has this gone on
And maybe all this money might have gone to my head
'Cause they got me thinking money might have gone to the Feds
So I had gone to the dread, but he had gone up to bed
And when I came the next morning he was gone with my bread
And with that being said I had gone on my instincts
And gone to the spots where they go to get mixed drinks
But looking back now, I should've gone to the crib
And rented Gone With the Wind, 'cause I'da gone in by ten
But I had gone with my friend, and we had gone to the bar
And heard a nigga talking shit so I had gone to the car
And now the judge is telling me that I had gone too far
And now we gone for twenty years doing time behind bars
And since I gone to a cell for some petty crimes
I guess I gone to the well one too many times, 'cause I'm gone

[Kanye West:]
Uh-uh-uh, uh-uh-uh uh uh on, uh uh-uh on
Uh-uh on, uh uh-uh
I'm ahead of my time, sometimes years out
So the powers that be won't let me get my ideas out
And that make me wanna get my advance out
And move to Oklahoma and just live at my aunt's house
Yeah, I romance the thought of leaving it all behind
Kanye step away from the lime
Light like when I was on the grind
In the 1-9-9-9
Before model chicks was bending over
Or dealerships asked me, "Benz or Rover?"
Man, if I could just get one beat on Hova
We could get up off this cheap-ass sofa
What the summer of the Chi got to offer an eighteen-year-old?
Sell drugs or get a job, you gotta play your role
My dog worked at Taco Bell, hooked us up plural
Fired a week later, the manager count the churros
Sometimes I can't believe it when I look up in the mirro'
How we out in Europe, spending Euros
They claim you never know what you got 'til it's gone
I know I got it, I don't know what y'all on
I'ma open up a store for aspiring MCs
Won't sell 'em no dream, but the inspiration is free
But if they ever flip sides like Anakin
You'll sell everything including the mannequin
They got a new bitch, now you Jennifer Aniston
Hold on I'll handle it, don't start panickin', stay calm
Shorties at the door 'cause they need more
Inspiration for they life, they souls, and they songs
They said, "Sorry, Mr. West is gone"`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics20.addEventListener('click', () => {
        const lyrics = `"Diamonds From Sierra Leone"

[Shirley Bassey:]
Diamonds are forever
They won't leave in the night
I've no fear that they might
Desert me

[Shirley Bassey & Kanye West:]
Diamonds are forever (forever, forever)
Throw your diamonds in the sky if you feel the vibe
Diamonds are forever (forever, forever, forever)
The Roc is still alive every time I rhyme
Forever ever? Forever ever? Ever, ever? Ever, ever?
Ever, ever? Ever, ever? Ever, ever?

[Kanye West:]
Close your eyes and imagine, feel the magic
Vegas on acid, seen through Yves St. Laurent glasses
And I've realized that I've arrived
'Cause it take more than a magazine to kill my Vibe
Does he write his own rhymes? Well, sort of, I think 'em
That mean I forgot better shit than you ever thought of
Damn, is he really that caught up?
I ask, if you talkin' about classics, do my name get brought up?
I remember I couldn't afford a Ford Escort
Or even a four-track recorder
So it's only right that I let the top drop on a drop-top Porsche
Spoil yourself, that's important
If your stripper name "Porsche" and you get tips from many men
Then your fat friend, her nickname is "Minivan"
Excuse me, that's just the Henny, man
I smoke, I drink, I'm supposed to stop, I can't, because—

[Shirley Bassey & Kanye West:]
Diamonds are forever (forever, forever)
Throw your diamonds in the sky if you feel the vibe
Diamonds are forever (forever, forever, forever)
The Roc is still alive every time I rhyme
Forever ever? Forever ever? Ever, ever? Ever, ever?
Ever, ever? Ever, ever? Ever, ever?

[Kanye West:]
I was sick about awards, couldn't nobody cure me
Only playa that got robbed but kept all his jewelry
Alicia Keys tried to talk some sense in him
Thirty minutes later seein' there's no convincin' him
What more could you ask for? The international asshole
Who complain about what he is owed?
And throw a tantrum like he is three years old
You gotta love it though: somebody still speaks from his soul
And wouldn't change by the change or the game or the fame
When he came in the game, he made his own lane
Now all I need is y'all to pronounce my name
It's Kanye, but some of my plaques, they still say Kayne
Got family in the D, Kin-folk from Motown
Back in the Chi, them Folks ain't from Moe Town
Life movin' too fast, I need to slow down
Girl ain't give me no ass, you need to go down
My father been said I need Jesus
So he took me to church and let the water wash over my caesar
The preacher said we need leaders
Right then my body got still like a paraplegic
You know who you call; you got a message, then leave it
The Roc stand tall and you would never believe it
Take your diamonds and throw 'em up like you bulimic
Yeah, the beat cold, but the flow is anemic
After debris settles and the dust get swept off
Big K pick up where young Hov left off
Right when magazines wrote Kanye West off
I dropped my new shit, it sound like the best of
A&R's lookin' like, "Pssh, we messed up."
Grammy night, damn right, we got dressed up
Bottle after bottle 'til we got messed up
In the studio, with Really Doe, yeah, he next up
People askin' me if I'm gon' give my chain back
That'll be the same day I give the game back
You know the next question, dog: "Yo, where Dame at?"
This track the Indian dance to bring our reign back
"What's up with you and Jay, man? Are y'all OK, man?"
They pray for the death of our dynasty like "Amen"
R-r-r-r-right here stands a man
With the power to make a diamond with his bare hands

[Shirley Bassey & Kanye West:]
Diamonds are forever (forever, forever)
Throw your diamonds in the sky if you feel the vibe
Diamonds are forever (forever, forever, forever)
The Roc is still alive every time I rhyme
Forever ever? Forever ever? Ever, ever? Ever, ever?
Ever, ever? Ever, ever? Ever, ever?

[Shirley Bassey:]
Diamonds are forever (forever, forever)
Diamonds are forever (forever, forever, forever)
`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics21.addEventListener('click', () => {
        const lyrics = `"Late"

Little girl (A-ha-ha-ha-ha...)
Please stop your crying

I'll be late for that, baby, I'll wait for that
If you had a taste of that, you'd probably pay for that
I'm comin' in when I feel like
So turn this motherfucker up only if it feels right
I'll be late for that, I can't wait for that
I think I was made for that
So I'm comin' in when I feel like
So turn this motherfucker up only if it feels right

Little girl (A-ha-ha-ha-ha...)
Please stop your crying

Stop all your blood clot cryin', I was flyin'
Made it to school with barely enough time to sign in
Yeah, I hear the alarm, yeah, I hear you, Mom
Yeah, yeah, I don't wan' be broke when I'm thirty-one
They said the best classes go to the fastest, sorry, Mr. West
There's no good classes, and that's what yo' ass get
Not even electives? Not even prerequisites?
You mean I missed my major by a couple of seconds?
Now I'm in the shop class or the basket weavin'
With all the rest of the motherfuckers underachievin'
Man, this is an insult
I went to junior high with all of them and they been slow
If I can catch the beat then slow down the tempo
Just throw this at the end if I'm too late for the intro
Will I make it from the student loans to a Benzo?
Like old folks pissin', I guess it all depends, oh, oh

Little girl (A-ha-ha-ha-ha...)
Please stop your crying (Stop your cryin', baby)

I'll be late for that, baby, I'll wait for that
If you had a taste of that, you'd probably pay for that
I'm comin' in when I feel like
So turn this motherfucker up only if it feels right
I'll be late for that, I can't wait for that
I think I was made for that
So I'm comin' in when I feel like
So turn this motherfucker up only if it feels right

Little girl (A-ha-ha-ha-ha...)
Please stop your crying

You know when you be late you miss all the lights
That's right (that's right), that's right (that's right)
And when you get back she gon' start up a fight
That night (that night), that night
Baby, it's too late for that, lately I've been taking it slow
Try and make it to the party 'fore the guest list close
With the freshest hoes, the professors know
We about to get real unprofessional
Like them Eskimos, what would you do for a Klondike?
Or two dykes that look Christina Milian-like?
Hmm, I'll be on time for that
I ain't thought of no line that could rhyme with that
Yo, I'll be there in five minutes, five hours later?
"I'll be there in five minutes," go 'head, ride with it
I'm so live with it, look how I did it
Been bullshittin' but I finally arrived with it
I know it's late and I took all year but
You can stop complainin' 'cause I'm finally here, yeah

'Cause I'll erase away
'Cause I'll erase away
'Cause I'll erase away
'Cause I'll erase away
(A-ha-ha-ha-ha...)`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });
</script>

<!-- Call up the footer-->
<?php
include 'includes/footer.php';
?>