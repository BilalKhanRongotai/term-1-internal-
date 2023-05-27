<!-- Call up the header and navbar and set page title-->
<?php
$page_title = "Donda 2";
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
            <div class="albumcover"><img src="image/Donda2Cover.webp" class="img-fluid" alt="Image could not load"></div> <!-- album cover -->
            <br>
            <h3 class="albumtitle">Donda 2</h3> <!-- title of the album -->
            <!-- Description/background of album -->
            <p class="albumdesp">"Donda 2" is a demo album by Kanye West that was exclusively released on the Stem Player. It was unfinished, but four songs were made available on February 23, 2022, and additional songs were later included in updates. West began recording and producing the album in early January 2022 and continued into the following month. The album was preceded by the singles "Eazy" and "City of Gods," both of which charted inside the top 50 of the US Billboard Hot 100.</p>
            <p class="albumdesp">West held an accompanying performance showcasing songs from the first iteration of the album at LoanDepot Park on February 22, 2022, selling out 47 IMAX theaters across the United States. The "V2.22.22 Miami" version of the album received mixed reviews from music critics, who criticized its subject matter, song structures, and lack of an identifiable concept. Some critics were more negative towards West's vocals, while a few complimented certain elements of the production.</p>
            <p class="albumdesp">Due to its exclusive Stem Player release, the album was heavily pirated in February 2022, with emulators of the device shared online. Billboard deemed the album ineligible for its album charts, citing its bundling rules, and the album did not debut on other record charts worldwide.</p>
            <p class="albumdesp">Despite the mixed reception and controversial release, "Donda 2" showcases Kanye West's ongoing experimentation with sound and his willingness to push boundaries in the music industry. The album features collaborations with notable artists such as Tyler, The Creator and The Weeknd, and continues West's exploration of gospel music and themes of faith. While it remains to be seen if "Donda 2" will see a wider release or if West will continue to work on and refine the album, it is clear that his passion for music and his desire to innovate remain as strong as ever.</p>

            <!-- tracklist -->
            <ul class="list-group">
                <li class="list-group-item albumtrack" style="background-color: grey;">True Love <!-- Song title -->
                    <span class="artist">• Kanye West • XXXTENTACION</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="k7H2C5L8X7I"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics1" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: grey;">Broken Road <!-- Song title -->
                    <span class="artist">• Kanye West • Don Toliver</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="CEp9RR_QTso"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics2" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: grey;">Get Lost <!-- Song title -->
                    <span class="artist">• Kanye West</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="Iqos-yN1eI8"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics3" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: grey;">Too Easy <!-- Song title -->
                    <span class="artist">• Kanye West</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="TSM34kTgqq8"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics4" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: grey;">Flowers <!-- Song title -->
                    <span class="artist">• Kanye West</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="GWb0HXQHZ4M"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics5" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: grey;">Security <!-- Song title -->
                    <span class="artist">• Kanye West</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="vzu9PKB8bLY"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics6" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: grey;">We Did It Kid <!-- Song title -->
                    <span class="artist">• Kanye West • Migos • Baby Keem</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="XhcH_sv8cBk"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics7" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: grey;">Pablo <!-- Song title -->
                    <span class="artist">• Kanye West • Future • Travis Scott</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="gy1ZxhwLqn4"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics8" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: grey;">Louie Bags <!-- Song title -->
                    <span class="artist">• Kanye West • Jack Harlow</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="Zs7ih-9_49k"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics9" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: grey;">Happy <!-- Song title -->
                    <span class="artist">• Kanye West • Future</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="kS31GIHf3Vo"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics10" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: grey;">Sci Fi <!-- Song title -->
                    <span class="artist">• Kanye West • Sean Leon</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="H6-141ItZQk"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics11" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: grey;">Selfish <!-- Song title -->
                    <span class="artist">• Kanye West • XXXTENTACION</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="yIh1OM7rnIs"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics12" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: grey;">Lord Lift Me Up <!-- Song title -->
                    <span class="artist">• Kanye West • Vory</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="uTxaib4feBY"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics13" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: grey;">City Of Gods <!-- Song title -->
                    <span class="artist">• Kanye West • Fivio Foreign • Alicia Keys</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="c850yN8OKyk"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics14" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: grey;">First Time In A Long Time <!-- Song title -->
                    <span class="artist">• Kanye West • Soulja Boy</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="EwOzgwqbzbE"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics15" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: grey;">Eazy <!-- Song title -->
                    <span class="artist">• Kanye West • The Game</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="k57uWi8P2oc"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics16" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
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

    // Change the content of the div when buttons are clicked
    lyrics1.addEventListener('click', () => {
        const lyrics = `"True Love"
(feat. XXXTENTACION)

[XXXTENTACION:]
True love shouldn't be this complicated
I thought I'd die in your arms, I thought I'd die in your—
True love shouldn't be this complicated
I thought I'd die in your arms, I thought I'd die in your—

[Kanye West:]
No hard feelings, but these feelings harder
No-no hard feelings, but these feelings harder
No-no hard feelings, but these feelings harder

Wait, when you see the kids? I'll see y'all tomorrow
Wait, when the sun set? I see y'all tomorrow
Wait, when I pick 'em up, I feel like they borrowed
When I gotta return them, scan 'em like a bar code
Wait, no hard feelings, but these feelings hard though
Wait, who got the kids in those "What are those?"
Wait, why they can't wear Yeezys with the cargos?
Y'all know Nike don't like me, y'all take it too far, though
At least have 'em in some Mike's, he played for Chicago
I only see three kids, who watchin' Chicago?
And you know all the nannies they're Danny Nesbrasco
Let the kids dig a tunnel to my house like Chapo
Only neighbor in the hood with a door they can knock on
I leave the light on

[XXXTENTACION (Kanye West):]
True love shouldn't be this complicated
(Daddy's not gone, you see the light on)
I thought I'd die in your arms, I thought I'd die in your—
(Daddy's at home, tell Gekyume)
True love shouldn't be this complicated
(Daddy's not gone, tell Gekyume)
I thought I'd die in your arms, I thought I'd die in your—
(Daddy's at home)

[XXXTENTACION:]
Oh, woah, oh, woah, oh, woah
Oh, woah, oh, woah, oh, woah (Love)
Oh, woah, oh, woah, oh, woah
Oh, woah, oh, woah, oh, woah

[Kanye West:]
No hard feelings, but these feelings harder
No-no hard feelings, but these feelings harder
No hard feelings, but these feelings harder

[XXXTENTACION:]
True love shouldn't be this complicated
I thought I'd die in your arms, I thought I'd die in your—
True love shouldn't be this complicated
I thought I'd die in your arms, I thought I'd die in your—
`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics2.addEventListener('click', () => {
        const lyrics = `"Broken Road"
(feat. Don Toliver)

What does it mean to find your soul?
Pay the toll on the broken road
Pay the toll on the broken road
What does it mean to find your soul?
Pay the toll on the broken road
Pay the toll on the broken road

Baby, I'm free, baby, I'm free, like a homeless person
No matter how much you got, you can't own this person
Sometimes I feel like the only honest person
When somebody snatch your soul and karate didn't work
When you 'bout to lose all hope, the sun rose and opened roads
What if the surgeon really the serpent? I paid for BBLs and Birkins
That wasn't me, that was Tyler Durden
And I ain't gon' lie, I get tired of splurgin'
Love isn't perfect, love is a version of bein' a virgin again
I was told it's how you interpreted it (What does it mean to find your soul?)
Pay the toll, pay the toll (Pay the toll on the broken road)
Pay the toll, pay the toll (Pay the toll on the broken road)

What does it mean to find your soul?
Pay the toll on the broken road
Pay the toll on the broken road
What does it mean to find your soul?
Pay the toll on the broken road
Pay the toll on the broken road`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics3.addEventListener('click', () => {
        const lyrics = `"Get Lost"

I still get lost in night
Lost in my dreaming time
Memories back from fine
Back to get all my time
I still get lost, what's mine?
Memories back from time
All my thoughts on at night
All my life's on the line
I still get lost in night
Memories back from mine
'Member we had one night?
'Member we had the night?
I still get lost sometimes
Memories haunting mind
'Member we had the mind?
'Member we had the mind?
I'm gon' get lost sometimes
'Member we cry sometimes
I went through fine, oh, fine
When you was mine, oh, mine
Somehow we got to meet
Now I keep to darker streets
Fucked up without the love
Parker without the cleats
Fucked up and on repeat
Above the night I beat
I done went back to sleep
With a new sight to see, what do you write for me?
What will fit right for me?
I did what's right for me
I fought from fighting me
Well, I would like to see
I still get lost sometimes
Far from my state of mind
Stay on the vibes alright
When do I cross your mind?
When do you see my pride?
I've got a Pablo shine
Pride is the number line
Okay, well, never mind
Okay, then, never mind
Do I still cross your mind?
If not, then, never mind
If not, then, never mind`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics4.addEventListener('click', () => {
        const lyrics = `"Too Easy"

Two of them, two keys
Too breeze, too easy
Too breeze, too easy
Too breeze, too easy (Yeah)

Remember at the dawn, waiting for my whole life (Yeah)
Doing all that producing at midnight (Yeah)
Living on utter bliss, nothing but no mind (Yeah)
Turn around to leave nothing but new light (Yeah)

Ain't no one love me
I ain't even gonna love me
I needed you to love me
Love me
Ain't no one love me
I ain't even gonna love me
I needed you to love me
Love me
Ain't no one love me
I ain't even gonna love me
I needed you to love me
Love me

Remember at the dawn, waiting for my whole life (Yeah)
Doing all that producing at midnight (Yeah)
Living on utter bliss, nothing but no mind (Yeah)
Turn around to leave nothing but new light (Yeah)

Ain't no one love me
I ain't even gonna love me
I needed you to love me
Love me
Ain't no one love me
I ain't even gonna love me
I needed you to love me
Love me

Ain't no one love me
I ain't even gonna love me
I needed you to love me
Love me
Ain't no one love me
I ain't even gonna love me
I needed you to love me
Love me
Ain't no one love me
I ain't even gonna love me
I needed you to love me
Love me`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics5.addEventListener('click', () => {
        const lyrics = `"Flowers"

Gonna set You free

They know something
Some things don't matter (Set me free)
You wish I ain't me
You and time matter (Gonna set You)
You wish I ain't me
I don't find out
You wish I ain't me
**** inside now

Why you so scared that somebody find out?
I am a flex, imagine your ex face when he find out
I am the best, you hit the top, wait 'til they find out (Set me free)
He not a threat, send him a text, put him on timeout (Set me free)

Keep the flowers, send a hunnid thousand (Set me free)
Keep the flowers, send a hunnid thousand (Set me free)
Keep the flowers, I said hunnid thousand
Took you out that metro housin', drop your name on my new album (Gonna set You free)

Your life finna change right now (Set me free)
Your life finna change right now
Balenciaga for all your friends, Hermès for the argument
Your life finna change right now (It's gonna set You free)

Why you so scared that somebody find out?
I am a flex, imagine your ex face when he find out
I am the best, you hit the top, wait 'til they find out
He not a threat, send him a text, put him on timeout

Your life finna change right now
Balenciaga for all your friends, Hermès for the argument
Your life finna change right now

Don't bring friends around, I wouldn't— behind your back
That's the new rule, rules are rules
And not now then when, if not me then who?
You blacked out your page, went missing for days
They know you with me
You blacked out your page and switched up your boots
They know you with me
You switched up the Benz, you switched it again
I know what you need
You usually go combo, they don't even call you
They know you with me (Gonna set You free)

Your life finna change right now (It's gonna set You free)
Your life finna change right now (Gonna set You free)

Lord, take me
Lord, take me
Lord, take me where You wanna take me
Too much trauma lately, your life finna change right now (Gonna set You free)

Your life finna change right now (Set me free)
Your life finna change right now (Gonna set You free)
Your life finna change right now (Set me free)
Your life finna change right now (Gonna set You free)

(Set me free)
(Gonna set You free)
(Set me free)
(Gonna set You free)`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics6.addEventListener('click', () => {
        const lyrics = `"Security"

No, you can't be on my mama album

Pops home, I ain't gettin' frisked
I put your security at risk
Pops home, I ain't gettin' frisked
I put your security at risk
I put the security at risk
Okay, we gon' make this an event?
Y'all gon' need security for this

Hmm, yeah, uh
I ain't getting frisked, I put your security at risk
I walk in the crib, no gettin' frisked
Butt-naked in the kitchen cooking grits
Tell yo' mama, "Come give me a kiss"
Security gon' need security for this

I ain't gettin' frisked
I put your security at risk
I ain't gettin' frisked
Don't put the security at risk

Never take the family picture off the fridge
Never stand between a man and his kids
Y'all ain't got enough security for this
Y'all ain't got enough security for this
I put your security at risk
I make your security acquit
Like, "We don't get paid enough for this"`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics7.addEventListener('click', () => {
        const lyrics = `"We Did It Kid"
(feat. Migos, Baby Keem)

Not nice, or the meanest
Feelin' sorry for my mama'nem
Survivor's guilt really get old
Whole gang in the end zone
Not nice, or the meanest
Heaven's Gate when I get home
Color palates lookin' Pantone
'Bout to turn into a phantom
Cameras off, get to flippin' lights
She ain't happy with the other guy
Had a argument the other night
I ain't even get to 'pologize
While I'm in the meetings lookin' disguised
I'ma show face until I get tired
Don't care about event size
Lookin' at you through a fisheye
I'm never nice, or the meanest
I'm tired, I'm tired, I'm tired, I'm tired, I'm tired

We here, you can't deny that we here, we here (Woo)
Hands up, me throwin' for my fan (Migo)
God's home, Rest In Peace to my man (Uh, hey)
Hands up, thirty piece for the tan (Uh, woo)
Run a 'thon, everything that we planned

Huncho, I **** big, you did it kid, you did it kid (We did it)
Like a **** just got potty trained
Hourglass, how her body came (Yeah)
Chop 'em down, with the what-it-name (Grrah)
Know what I'm sayin'? I'm tellin 'ya
Pushin' P, be a better me? (P)
**** ridin' with a felony
See the jealousy
The struggle made me a better me (Go)
Why you talkin', is you payin' me?
Lamborghini coated candy (Skrrt)
If I **** her, she gon' have the baby
I'm the plan A, and the Plan B (Hey)
Quarter million to the nannies (Go)
I'm the head of the family (Hey)
My momma had to cry for this
My gang had to slide for this (Slide)
Pistol P had to die for this (Die)
Doin' time through the wire for this (Hey)
Fresh out the bricks to a brick (Brick)
We steppin' outside with the **** (Outside)
Hannah Montana with grits (Hannah)
That honey bun gon' make 'em blitz (Grah)
I'm up, I'm rich, look at my ****, she fine and rich (Look)
Studied the game and I find the glitch
Hustla', I got a mind like Mitch (Hey)
He not poppin', he kinda lit
He not wealthy, he kinda rich (Kinda)
**** ain't trippin', just signed this ****
Hunnid mill', we'll split (Split it)
If it's fifty mill', we'll split
If it's two in one, they'll split (Split)
Three **** split a G6
These platinum plaques ain't nothin'
I stand up and take a ****
I stand up and, take a **** (Hey)
This a hunnid thousand on the wrist (Hunnid)
Get the money, never politic
Floor seats, Atlanta versus the Knicks
Young **** with the birds, Kyle Pitts (Brr)
In the 'adium, 'cedes Benz (Yeah)
Kid gon' play with 'em, he got friends
He know Migo dem, knock off limbs
Yeah, we did it kid, to the M's
Ridin' Presidential with the rims (Skrrt)
Helpin' Ye find Kim in the black double M Benz (Maybach)
No new friends, Nobu with my twins (Nobu)
Remember we kicked that door down because they didn't let us in (Woo)
Born to win, I committed a sin with a see-through lens (See-through)
I filled up all my pockets, now you get a pocket to pick
Thank God I'm alive and rich (Alive)
No lie, I survived the trench
Pay my tithe, livin' marvelous (Tithes)
That's the reason I don't talk of this (Hey)
Hand-built it like a carpenter did it
Shootin' bullets out the cars for this (Grrah)
Tattoos and the scars for this (Tats)
Remember when we used to borrow fits (Hey)`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics8.addEventListener('click', () => {
        const lyrics = `"Pablo"
(feat. Future, Travis Scott)

Who they waitin' on? That's Pablo
Take my heart, run (Take my heart, run)
Just don't go numb (Just don't go numb)
Just don't go dumb (Just don't go dumb)
Let's have some fun (Let's have some fun)
Pull out your tongue (Pull out your tongue, yeah)
What you waitin' on? (What you waitin' on?)
Who they waitin' on? That's Pablo
Take my heart, run (Take my heart, run)
Just don't go numb (Just don't go numb)
Just don't break nothin' (Just don't break nothin')
Let's just have fun (Let's just have fun)
Pull out your tongue (Pull out your tongue)
What you waitin' on? (What you waitin' on?)
Who they waitin' on? That's Pablo

I never saw this stuff as blind (Chi', Chi', Chi', Chi')
Some gon say that love is blind (Chi', Chi', Chi', Chi')
Show me something new in town (Chi', Chi', Chi', Chi')
Pick me up before I drown (Chi', Chi', Chi')
Pick me up before I drown
Pick me up before I drown
Satan himself is back in town
Pick me up before I drown
Feelin' up, uh, you wait
And I know, you ain't
Throwin' up, like, who ain't?
Throwin' up, ayy, who ain't?
Throwin' up, mmm, you can't
Run it up, mmm, you faint (You faint)

Who they waitin' on? That's Pablo
Take my heart, run (Take my heart, run)
Just don't go numb (Just don't go numb)
Just don't go dumb (Just don't go dumb)
Let's have some fun (Let's have some fun)
Pull out your tongue (Pull out your tongue)
What you waitin' on? (What you waitin' on?)
Who they waitin' on? That's Pablo
Take my heart, run (Take my heart, run)
Just don't go numb (Just don't go numb)
Just don't go dumb (Just don't go dumb)
Let's have some fun (Let's have some fun)
Pull out your tongue (Pull out your tongue)
What you waitin' on? (What you waitin' on?)
Who they waitin' on? That's Pablo

Comin' from the blitz, turn to your ashtray
You can have a bad day
Pull up with a stick, three thou' shots, André
Top of the world, **** get starstruck, I just be oiled up
Calm my nerves, hangin' with narcos, shoot like vato
Bales at the loft, I can go golf, mmm
Flyin' out to New York, she do it with an arch
Rick James, drip on my cloth
Why must I explain? When I'm with my dawg, right or wrong

Who they waitin' on? That's Pablo`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics9.addEventListener('click', () => {
        const lyrics = `"Louie Bags"
(feat. Jack Harlow)

[Kanye West:]
(We did it, we did it, Joe!)
I stopped buying Louis bags after Virgil passed
I stopped buying Louis bags after Virgil passed
I stopped buying Louis bags after Virgil passed
I stopped buying Louis bags after Virgil passed
I'm in the Louis store with a Gucci mask
I'm in the Louis store with a Gucci mask
I'm in the Louis store with a Gucci mask
I stopped buying Louis bags after Virgil passed

If we ain't doin' business, it won't be no business
If we ain't doin' business, it won't be no business
If we ain't doin' business, it won't be no business
If we ain't doin' business, it won't be no business
Pick [?] I'll take it, mmh
Pick another one and let it, mmh
Find another one and let it, mmh
Fine life and I could've—, mmh
I'm not gonna lie, I couldn't move
Couldn't even if I wanted to
Couldn't scare me if it haunted you
I'ma do what I wanna do
What you look like in that nasty Louis bag?
Remember I examined [?], too
What you look like in that nasty Louis bag?
We stopped buying Louis bags after Virgil passed

I stopped buying Louis bags after Virgil passed
I stopped buying Louis bags after Virgil passed
I stopped buying Louis bags after Virgil passed
I stopped buying Louis bags after Virgil passed
I stopped buying Louis bags after Virgil passed
I stopped buying Louis bags after Virgil passed
What you look like in that nasty Louis bag?
We stopped buying Louis bags after Virgil passed
I stopped buying Louis bags after Virgil passed
I stopped buying Louis bags after Virgil passed
What you look like in that nasty Louis bag?
We stopped buying Louis bags after Virgil passed
(We did it, we did it, Joe!) Ayy

[Jack Harlow:]
I'm my lil' cousin's favorite cousin
I gave 'em all my number in my phone, they stopped buzzin'
They listen to my songs and say their parents hate the cussin'
They asked if I was nervous on TV or if I wasn't
They asked me if it's true that I don't go to church
"My daddy said you don't," well, then I guess you know
I been thinkin' about goin', though, I might let you know
One day, I'll bring you to my concert if they let you go
Pumpin' gas alone in Texaco
Hopin' I don't get approached
Don't know if it's clear until I check the coast
All these rappers dyin', I don't wan' be one that's next to go
Paranoia tickin' in my head just like a metronome
I can't walk around like Jack that wore the spectacles
I shook the hands, took the pictures, made myself accessible
Threw the parties, showed love, kept it all respectable
Tried to give you something you ain't had before but
It's all over, they got the drop on my life, it's all over
All this pressure on me, they'd wish I'd fall over
Too bad I'm a winner like fall over
I dropped, uh, heat in February
Cocky tweets in February
All-Star weekend with the court-side seats in February
I'm the champ', you come second like the E in February
All that humble **** was fake, now, can we keep it legendary?
Please
`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics10.addEventListener('click', () => {
        const lyrics = `"Happy"
(feat. Future)

Woo
(I be, I be, I be, I—)
(I be, I be, I be, I—)
Woo

[Future:]
Cook the dope, let me cook it, yeah
Junkies layin' outside the bushes, yeah
Do-si-dos syrup, yeah
You gold diggers, I deserve, yeah
A gang of **** bought purses, yeah
I did it off of one verse, yeah
I'm sippin' syrup inside the vert, yeah
I'm leavin' my mark on the Earth
Takin' my drugs in doses
**** my bitch by the pack
Came from the-Came from mud
First to put the hood on the jet
First to put the hood on Molly
Then we put the hood on X
**** what a **** gotta say
I'm now securing my bag
Trappin' in Atlanta
Bought three, four, five Phantoms
Drug dealers, murders, and the scammers
Crocodile Birkin for your mama
Fourty-seven racks on sandals
Burberry Mink on camera
Pour the Wock' down in the Fanta
Walk a **** down on camera
Ski mask cover my face up
Skull wallet chain, Santana
Show a real-real what you made of
Hit 'em in the top right now
Drankin' on Wock' right now
Clutchin' my Glock right now
Marni on my sock right now
Your **** give me mop right now
To finesse on the road outta town
Drink the pain up then smoke up the pound
Selling dope outta grandma house
Bust juugs at grandma house
Cut sixteen-hundred out a ounce
Bought a foreign, could barely pronounce
One chain and it cost 'bout a house
Had them all a couple fives then bounce
Go tomato on the guts, a Ferrari
Hit this new lick, I'm snatchin' Bugatti
Sippin' oil out the drank, it's exotic
Get paid just to talk out of pocket
Once you finish loading up, then you cock it
Think these bitches outta France got me cocky
Rappers take off with the lingo and chop it
Make me crush up the scene with no problem
Swearin' these **** gon' try me in Atlanta

[Kanye West:]
Hopped out the Uber, next thing you know, I bought Uber
Hopped out the Uber, next thing you know, I bought Uber
Don't come in with the rumors, don't ask me nothin' you can Google
Do I look happy, do I look happy to you?
(Do I look happy to you?)
Comin' in like, damn, where you get it from?
Comin' in like, damn, where you **** from?
Had just hopped up out the Uber
Next week, that man probably bought Uber
Don't wanna come at me startin' with a rumor
Matter fact, ask me nothin' you can Google
**** runnin' up a million being frugal
**** I was at yo' mama house, eating noodles ****

And we all wanna be happy
Do I look happy, do I look happy to you?
(Do I look happy to you, do I look happy to you?)

And I know [?] with a tenant
And throw somethin', ain't somethin' I invented
Thought I had enough [?] get rented
[?] goin' dumb, pour some money in it
When the gun of sun, when I'm in it
Tinted, squint it, been it, y'all know it been a minute
Throwing in these [?]
Hold up, I'ma let you finish
'Pac goin' throw it up with a mini
I gave one song, count too many
Two mans hop out but I don't see any
How I'm gon' [?], leave you with me?
Dun-dun, come and get me
Throw the lights on and hit the getti
Four [?] now they hear me
Cocaine house round at Diddy's
Propane house like Minnie
Two night time like 50
Told my mama don't want many
Told my mama I'm winning
[?]
Tell 'em finna wanna live there

And we all wanna be happy
Do I look happy, do I look happy to you?
(Do I look happy to you, do I look happy?)
(Do I look happy to you, do I look happy?)
And we all wan— (Do I look happy to you, do I look happy?)
And we all wan—

When we done something, it's a movie
Probably get the job back at Louis
Probably got a nine, act a foolie
Someone actin' unruly
Pass out, wake up with a IV
I be—told my jeweler I'm too famous for the chain
Told my stylist I'm too famous for names
Told my jeweler I'm too famous for chains
Told MTV I'm too famous for the fame
Man, we ain't playin' no more games
Mortal Kombat and I finish you
Wanna throw me in the institute?
All you can do is salute

And we all wanna be happy
Do I look happy, do I look happy to you?
(Do I look happy to you, do I look happy?)
(Do I look happy to you, do I look happy?)
And we all wan— (Do I look happy to you, do I look happy?)
And we all wan—

Woo
(I be, I be, I be, I—)
(I be, I be, I be, I—)`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics11.addEventListener('click', () => {
        const lyrics = `"Sci Fi"
(feat. Sean Leon)

[Kim Kardashian:]
I married the best rapper of all time
Not only that, he's the richest Black man in America
A talented, legit genius who gave me four incredible kids

[Sean Leon:]
Let me not, let me not
I better not, it'd be best if I stop
Let me not, go apeshit, full BAPE
I was down, no es— (Yeah, ayy)
I was down, no escape
I was down, ain't no escape
There's no escape
Lupe out my town, had to skate, skate (Kick, push)
We just said goodbye but it's straight (But it's straight, ayy)
I fuck with her vibe, it's okay (It's okay, ayy)
Got me hypnotized, in a daze
Protect my mind, protectin' what's mine

[Kanye West:]
Welcome to the Sci-Fi
Make a choice, oxygen or Wi-Fi? (Wi-Fi)
Welcome to the Sci-Fi
Make a choice, oxygen or Wi-Fi? (Wi-Fi)

Do your thing now
Then and now, passin' out
When you lay down and I gave you the semen
I swear I heard God, the voice of Morgan Freeman (Freeman)
Baby, bye-bye, baby, baby, bye-bye
Baby, bye-bye, baby, baby, bye-bye
I'm just going to remove myself
From the situation 'fore I lose myself
From the situation 'fore I lose my health
I can't control you but I can rule myself

Welcome to the Sci-Fi
Welcome to the Sci-Fi
Welcome to the Sci-Fi
Make a choice, oxygen or Wi-Fi?
Welcome to the Sci-Fi
Make a choice already, oxygen or Wi-Fi?`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics12.addEventListener('click', () => {
        const lyrics = `"Selfish"
(feat. XXXTENTACION)

I gotta put me first
I gotta put me first
I gotta put me first, Lucious
I understand that, and I promise you—

Selfish, I just want you all to my own
These—these days, won't leave me alone
Damaged by the fact I'm alone

I put me first
I put me first, Lucian
What was it worth?
What was it worth in the end?
It was just a purse
It was just a purse, then again
I never seen a purse
Get took as personal as this
Don't make it worse
Don't make it worse than what it is
I spent a church
I spent a church on a Benz
I lost my shirt
Least now we playing shirts and skins
Shift to reverse
And then you skrrt off again
Lewinsky, treat me like the President
Don't look at me like I need medicine
Don't care what you heard
Don't care what you heard, CNN
Even friends got a E-N-D at the end

Selfish, I just want you all to my own
These—these days, won't leave me alone
Damaged by the fact I'm alone
Selfish, I just want you all to my own
These bitches won't leave me alone
Damaged by the fact I'm alone`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics13.addEventListener('click', () => {
        const lyrics = `"Lord Lift Me Up"
(feat. Vory)

Lord, lift me up, lift me up
Lift me up, oh, lift me up
Lord, lift me up, I've had enough
I've had too much
Too much, I don't seem to do much
Too much, I don't seem to do nothin'
Lord, lift me up, oh, lift me up
Lift me up, oh, lift me up
Lord, lift me up, lift me up
Oh, lift me up, lift me, lift me up

I pray what you wanted to be
Just takin' whatever You wanted from me
It turns out I want it to me
I'll take You wherever You wanted to be
The burden is all on to me
You're givin' them just what they wanted to see
They wanna see the family feud
But I can't let the family lose
They strugglin', like back and forth, like me and you

Oh, Lord, I call on You to
Lift me up, oh, lift me up, oh, lift me up
Oh, Lord, I call on You to

No strings attached, that's Bluetooth
That's you, too, sorry, sorry, true`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics14.addEventListener('click', () => {
        const lyrics = `"City Of Gods"

New York City, please go easy on me tonight
New York City, please go easy on this heart of mine (What?)

Yeah, look, huh, nigga, this is my shit
Welcome to the city of Gods (What?)
Pop was the king of New York, now I'm the nigga in charge
Only the drillers, the city is ours
We found out the opps and we pick 'em apart
I give 'em my time so I give 'em my heart
If the city love me, then I'm really a star (What?)

New York City, please go easy on me tonight
New York City, please go easy on this heart of mine
'Cause I'm losing my lover to the arms of another
New York City, please go easy on me

Yeah, look, this is the city of money and violence
Same thing you do is gonna come with a challenge
Every bitch you fuck is gonna come with a balance (What?)
Every shooter with me is coming in silence (What?)
And you niggas better pick a side (Better pick a side), you niggas side hoppers (You niggas side hoppers)
If I want 'em to not let you come into the city, it's my option (Bow)
This is the home of the fly Shaka (Yeah)
This where the bitches gon' watch pockets (Yeah)
When I'm on TV, I gotta look good, 'cause I know the whole block watchin'
We chill with the opps, we is not violent
If I see 'em in person, we Fox 5 'em
Yeah, the police was on us, we not stoppin'
(Yeah, the police was on us, we not stoppin', no)
This is the turn of the big drip (Big drip), smooth talk (Smooth talk, ha)
Milly Rock (Milly Rock), Shmoney Dance (Shmoney Dance), Woo Walk (Woo)
You will not survive being too soft (No)
Been a long time, we took a new law (No)
Shooters shoot so we got a new cause (Bow)
If we stuck then we lettin' it cool off (Bow, boom)

New York City, please go easy on me tonight
New York City, please go easy on this heart of mine
'Cause I'm losing my lover to the arms of another
New York City, please go easy on me

We went off the grid (What?)
We ain't watch the throne, we took it
We went viral on 'em, they lookin'
It's a Sunday Service in Brooklyn (What?)
It's the city that come with the lights
I'm with the drillers that come with the night
They ain't do four years in college, but they'll do twenty five to life
We make money every night (What?)
Never too big of a price (What?)
After I buy the Chicago Bulls (What?), I'ma go link with Mike (What?)
And if I let 'em have my wife, niggas should thank me
With this Balenciaga and Balenci' boots and a new blue Yankee
This is Ye, I'm so focused, throw on a mask, no COVID
I'ma turn your life to a meme, let Justin LaBoy post it
You got an album, postpone it
I drop two and they both going
I got a feeling they in they feelings
They filmin' a show, but won't show it
You gotta watch me in slow motion, I'm in a wide-body Benz
I go back to college, do an album and then drop out again
It took a minute to get here, my vision is crystal clear
Ayy, Fivi', excuse me, but this the feature of the year
I feel like Sinatra in these streets, me and Drizzy, we at peace
This the backpack with the Polo and the first Jesus piece
I'm from the Chi' but I'm always New York
The city that treat me like Jesus is walkin'
I been through the pain and all of the torment
I'm sayin' His name, I make it important (What?)
Now it's time to give 'em hell
Ask my staff, I pay 'em well
This afternoon, a hundred goons pullin' up to SNL (What?)
When I pull up, it's dead on arrival
They act like they love you, they don't even like you
They throw a party, won't even invite you
I seen the same thing happen to Michael
You black and you rich, they sayin' you psycho (What?), it's like a cycle
If you text me anything hype you better text back and say it's a typo
The city of Gods, no city is like you
This the new New York, Ye is the goat
Fivi' is viral and this is the B.I.B.L.E (What?)

New York City, please go easy on me tonight (What the fuck?, the fuck?)
(What, the fuck?) New York City, please go easy on this heart of mine
'Cause I'm losing my lover to the arms of another
New York City, please go easy on me

Don't leave me, go easy, go easy, go easy
Don't leave me, go easy, go easy, go easy
Don't leave me, go easy, go easy, go easy
New York City, please go easy on me`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics15.addEventListener('click', () => {
        const lyrics = `"First Time In A Long Time"
(feat. Soulja Boy)

For the first time in the longest time
For the first time in the longest time
For the first time in the longest time
For the first time in the longest time

This the first time in a long time
This the first time in a long
This the first time in a long time
This the first time in a long
This the first time in a long time
This the first time in a long
This the first time in a long time
This the first time in a long

I could see, I could breathe
Jesus freed me, Jesus freed me, now I'm free
I got kicked out the house for takin' sugar out the house
Steady, they don't wanna set me
My doctors on Sebi, my Christ is on heavy
My diamonds on Betty, bossed up, it's on jetty
My diamonds on petty, lightsaber like the Jedi
Somethin' sharp like a metty, born sharp but I'm petty
Pop with the man, the game, the world, the losers sold off
Poppin' the the sand, I covered the doors, I give them more though
Yeah, I lost my best man and I lost my spouse
Only billionaire you know that's sleeping on the couch (What?)

This the first time in a long time
This the first time in a long
This the first time in a long time
This the first time in a long
This the first time in a long time
This the first time in a long
This the first time in a long time
This the first time in a long

Let it rain, rain, rain
I need you home for the main
Let it rain, rain, rain
Hold my life, fall in the game
What is they thinkin' again?
What is they lookin' to gain?
Everything is to the future
I know it's just something and bumping in chains, baby

This the first time in a long time
This the first time in a long
This the first time in a long time
This the first time in a long (Yeah)
This the first time in a long time (Yeah)
This the first time in a long (Draco)
This the first time in a long time (Soulja)
This the first time in a long

This the first time in a long time
Used to be broke but I'm on now
I was just stuck at the bottom, grindin'
Now I'm shinin', sittin' at the top
I was just stuck in my feelings
Now I'm just ridin' around playin' with millions
Now I'm havin' racks to the ceilin'
Stackin' up cash, what a wonderful feelin'
We used to go walk in the mall to go shop
But now, we can walk in and buy the whole buildin'
We havin' mansions with acres
But honestly, we used to live in the trenches
I'ma fall like the county
And God ain't gon' give you no fight you can't handle
Back in the trap, we ain't even have cable
Now I see my face on the channel
And R.I.P. Virgil, that OFF-WHITE is on me
Lil' robbery, it's swervin'
I went to jail for that Draco, I guess that nobody's perfect
Ain't givin' out bond, I sat in that cell for a long time
Big Draco, big Ye, first time in a long time

This the first time in a long time
This the first time in a long
This the first time in a long time
This the first time in a long
This the first time in a long time
This the first time in a long
This the first time in a long time
This the first time in a long`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics16.addEventListener('click', () => {
        const lyrics = `"Eazy"

[The Game (Michel'le):]
(He was once a thug from around the way)
My life was never- (Eazy)
My life was never- (Eazy)

[The Game:]
Started in my Cutlass clutchin' heat like it's an open oven
Puffin' chronic, Puff and Biggie out the window, speaker subbin'
Runnin' to the crips, it ain't no discussion
Bullet wounds drenched in Hennessey and tea spoons of Robitussin
Head up faze, got a few concussion, yeah
Compton's amazed, Dr. Dre percussion
God, please grant my nigga eternal life, we need the beats
Aftermath where you fall asleep, you do not eat
And my belly is full, gorilla ridin' the bull
Banana clips in the pool, swan dive in Clase Azul
The opps, I'm on they ass
Grandmama whoopins in school
This Wilmington and Brazil where niggas die in they jewels
Too many Problems, too many YGs
So many ties to dollar signs, easy to end up on E
I got shot up like Columbine, the crips descended on me
Sign my name on the dotted line, that was Venice on beats
This is the way

[The Game (Michel'le):]
(He was once a thug from around the way)
My life was never- (Eazy)
My life was never- (Eazy)

[Kanye West:]
There it is, there it was
Don't interrupt just because it's no love
Shoulder shrug (Shrug)

How I ain't bring nothin' to the table, when I'm the table?
I'ma turn up the music, wake up the neighbors
I'ma get that "Thug life" tatted 'cross the navel
This is how I am in real life, not just on cable
"Mr. Narcissist," tell me 'bout my arrogance
No more counselin', I don't negotiate with therapists
God Ye, wanna let God in?
But tonight, I guess I'll let my pride win
Cousin Dre sent me scriptures, helped me see life better
Nigga, we havin' the best divorce ever
If we go to court, we'll go to court together
Matter of fact, pick up your sis', we'll go to Kourt's together
I watched four kids for like five hours today
I wear these Yeezy boots everywhere, even in the shower today
I got love for the nannies, but real family is better
The cameras watch the kids, y'all stop takin' the credit
Noncustodial dad, I bought the house next door
What you think the point of really bein' rich for?
When you give 'em everything they only want more
Boujee and unruly, y'all need to do some chores
Rich ass kids, this ain't yo mama's house
Climb on your brother's shoulders, get that top ramen out
God saved me from that crash
Just so I can beat Pete Davidson's ass (Who?)
And my new bitch bad, I know Illuminati mad
This that New-minati bitch
This that two Bugatti rich
This that "God did this"
Only God did this

There it is, there it was
Don't interrupt, just because
Ain't no love, shoulder shrug
Won't He do it? Yes He does
Won't He do it? Yes He does
Won't He do it?

[Kanye West (Michel'le):]
My life was never- (Eazy)
This next one gon' be- (Eazy)

[Michel'le:]
(He was once a thug from around the way)
(He was once a thug from around the way, easy)
(He was-he was)
(He was-he was)
(He was once a-once a-)
(Thug from a-thug from a-from around the way)`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });
</script>

<!-- Call up the footer-->
<?php
include 'includes/footer.php';
?>