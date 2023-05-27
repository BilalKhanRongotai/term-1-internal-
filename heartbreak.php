<!-- Call up the header and navbar and set page title-->
<?php
$page_title = "808s and Heartbreak";
include 'includes/header.php';
include 'includes/nav.php';
?>

<!-- set the splitscreen -->
<div class="container" style="max-width:100%;">
    <div class="row split">
        <div class="col left" style="background-color:#b72124;"> <!-- left col -->
            <div class="leftT" style="background-color:#c2cece;"></div> <!-- top section of left col -->
            <div id="leftM"> <!-- middle section of left col -->
                <!-- i frame for songs -->
                <iframe class="video" id="video-player" width="240px" height="240px" frameborder="0"></iframe> 

                 <!-- div for song lyrics -->
                <div id="LyricsContainer" style="display: none; max-height:205px; background-color:#de6656; padding-left: 20px; padding-top: 10px;">  
                </div>

            </div>
            <div class=leftB style="background-color:#c2cece;"> <!-- bottom section of left col -->
            </div>

        </div>
        <!-- right col -->
        <div class="col right" style="background-color:#a89c9a;"> 
            <br>
            <div class="albumcover"><img src="image/808sCover.jpeg" class="img-fluid" alt="Image could not load"></div> <!-- album cover -->
            <br>
            <h3 class="albumtitle">808s and Heartbreak</h3> <!-- title of the album -->
            <!-- Description/background of album -->
            <p class="albumdesp">"808s & Heartbreak" is Kanye West's fourth album, released in 2008, and is widely regarded as a pivotal moment in his career. The album's sound and themes were influenced by a series of personal and emotional events in West's life, including the death of his mother, Donda West, in November 2007, and the end of his engagement to fashion designer Alexis Phifer.</p>
            <p class="albumdesp">The album reflects a profound sense of loss, pain, and vulnerability, with West using Auto-Tune and electronic production to create a haunting and introspective sound. Songs like "Say You Will" and "Welcome to Heartbreak" convey a sense of isolation and despair, with West using his voice as an instrument to express his emotions in a way that transcends language.</p>
            <p class="albumdesp">West's use of the Roland TR-808 drum machine, a staple of electronic and hip-hop music, gives the album its distinctive sound, which has since become a hallmark of West's later work. The album's sonic experimentation was a departure from West's earlier sound, which had been characterized by soul samples and live instrumentation.</p>
            <p class="albumdesp">Despite initial mixed reviews, "808s & Heartbreak" has come to be recognized as a groundbreaking and influential album that paved the way for West's subsequent work. Its emotional depth and sonic innovation have inspired a new generation of artists and solidified West's place as one of the most creative and influential figures in contemporary music.</p>

            <!-- tracklist -->
            <ul class="list-group">
                <li class="list-group-item albumtrack" style="background-color: #a89c9a;">Say You Will <!-- Song title -->
                    <span class="artist">• Kanye West</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="d9BMPmfxaoM"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics1" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button --> 
                </li>
                <li class="list-group-item albumtrack" style="background-color: #a89c9a;">Welcome To Heartbreak <!-- Song title -->
                    <span class="artist">• Kanye West • Kid Cudi</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="tX3IvpH6loc"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics2" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button --> 
                </li>
                <li class="list-group-item albumtrack" style="background-color: #a89c9a;">Heartless <!-- Song title -->
                    <span class="artist">• Kanye West</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="s40BTpfAELs"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics3" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button --> 
                </li>
                <li class="list-group-item albumtrack" style="background-color: #a89c9a;">Amazing <!-- Song title -->
                    <span class="artist">• Kanye West • Young Jeezy</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="KaumK4b6DqQ"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics4" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button --> 
                </li>
                <li class="list-group-item albumtrack" style="background-color: #a89c9a;">Love Lockdown <!-- Song title -->
                    <span class="artist">• Kanye West</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="ek_T6atbfe0"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics5" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button --> 
                </li>
                <li class="list-group-item albumtrack" style="background-color: #a89c9a;">Paranoid <!-- Song title -->
                    <span class="artist">• Kanye West</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="CiY8-LYkCEk"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics6" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button --> 
                </li>
                <li class="list-group-item albumtrack" style="background-color: #a89c9a;">RoboCop <!-- Song title -->
                    <span class="artist">• Kanye West</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="kVl__NgDAdw"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics7" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button --> 
                </li>
                <li class="list-group-item albumtrack" style="background-color: #a89c9a;">Street Lights <!-- Song title -->
                    <span class="artist">• Kanye West</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="TUfuDKKGQxU"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics8" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button --> 
                </li>
                <li class="list-group-item albumtrack" style="background-color: #a89c9a;">Bad News <!-- Song title -->
                    <span class="artist">• Kanye West</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="1BlH1JZBeXI"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics9" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button --> 
                </li>
                <li class="list-group-item albumtrack" style="background-color: #a89c9a;">See You In My Nightmares <!-- Song title -->
                    <span class="artist">• Kanye West • Lil Wayne</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="T5e-nhk4HTQ"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics10" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button --> 
                </li>
                <li class="list-group-item albumtrack" style="background-color: #a89c9a;">Coldest Winter <!-- Song title -->
                    <span class="artist">• Kanye West</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="tpT7H7qIHIo"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics11" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button --> 
                </li>
                <li class="list-group-item albumtrack" style="background-color: #a89c9a;">Pinocchio Story <!-- Song title -->
                    <span class="artist">• Kanye West</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="OeCdG0Mzrkw"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics12" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button --> 
                </li>
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

    // Change the content of the div when buttons are clicked
    lyrics1.addEventListener('click', () => {
        const lyrics = `"Say You Will"

Why would she make calls out the blue?
Now I'm awake, sleep (less in June) or (missing you)

Hey, hey, hey, hey
Don't say you will, unless you will
Hey, hey, hey, hey
Don't say you will, then play you will, I pray you will

Mrs. So Fly crash-lands in my room
Can't waste no time, she might leave soon

Hey, hey, hey, hey
Don't say you will, you do
Hey, hey, hey, hey
Don't say you will, one day you will, I pray you will

When I grab your neck, I touch your soul
Take off your cool then lose control

Hey, hey, hey, hey
Don't say you will, you will, you will
Hey, hey, hey, hey
Don't say you will, if you will, I pray you will

I wish this song would really come true
I admit I still fantasize about you, about you

Hey, hey, hey, hey
Don't say you will, you will, you will
Hey, hey, hey, hey
Please say you will, for real, I pray you will
`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics2.addEventListener('click', () => {
        const lyrics = `"Welcome To Heartbreak"
(feat. Kid Cudi)

[Kanye West:]
My friend showed me pictures of his kids
And all I could show him was pictures of my cribs
He said his daughter got a brand new report card, card
And all I got was a brand new sports car, oh

[Kid Cudi and Kanye West:]
And my head keeps spinning
Can't stop having these visions
I gotta get with it (Ooh, ooh, ooh)
And my head keeps spinning
I can't stop having these visions
I gotta get with it (Ooh, ooh, ooh)

[Kanye West:]
Dad cracked a joke, all the kids laughed
But I couldn't hear him all the way in first class
Chased the good life my whole life long
Look back on my life and my life gone
Where did I go wrong?

[Kid Cudi and Kanye West:]
And my head keeps spinning
Can't stop having these visions
I gotta get with it (Ooh, ooh, ooh)
And my head keeps spinning
I can't stop having these visions
I gotta get with it (Ooh, ooh, ooh)

[Kanye West:]
I've seen it, I've seen it before
I've seen it, I've seen it before
I've seen it, I've seen it before
I've seen it, I've seen it before

[Kanye West:]
My god-sister getting married by the lake
But I couldn't figure out who I'd wanna take
Bad enough that I showed up late
I had to leave 'fore they even cut the cake
Welcome to heartbreak

[Kid Cudi and Kanye West:]
And my head keeps spinning
Can't stop having these visions
I gotta get with it (Ooh, ooh, ooh)
And my head keeps spinning
I can't stop having these visions
I gotta get with it (Ooh, ooh, ooh)

[Kanye West:]
Ooh-hoo
Ooh-hoo
Ooh-hoo
And I, and I can't stop
No, no, I can't stop
No, no, no, no, I can't stop
No, no, no, no, I can't stop
Can't stop, I can't stop, I can't stop
No, no, no, no
No, no, no, no
No, no, no, no
No, no, I can't stop
No, can't stop having these visions
I gotta get with it
Ooh, ooh, ooh
Hoo-hoo, ho-ho-hoo
Ooh-hoo`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics3.addEventListener('click', () => {
        const lyrics = `"Heartless"

In the night, I hear 'em talk
The coldest story ever told
Somewhere far along this road
He lost his soul to a woman so heartless
How could you be so heartless?
Oh, how could you be so heartless?

How could you be so
Cold as the winter wind when it breeze, yo?
Just remember that you talkin' to me though
You need to watch the way you talkin' to me, yo
I mean, after all the things that we been through
I mean, after all the things we got into
Ayo, I know of some things that you ain't told me
Ayo, I did some things but that's the old me
And now you wanna get me back and you gon' show me
So you walk around like you don't know me
You got a new friend, well, I got homies
But in the end, it's still so lonely

In the night, I hear 'em talk
The coldest story ever told
Somewhere far along this road
He lost his soul to a woman so heartless
How could you be so heartless?
Oh, how could you be so heartless?

How could you be so Dr. Evil?
You're bringin' out a side of me that I don't know
I decided we wasn't gon' speak so
Why we up 3 AM on the phone?
Why do she be so mad at me for?
Homie, I don't know, she's hot and cold
I won't stop, won't mess my groove up
'Cause I already know how this thing go
You run and tell your friends that you're leavin' me
They say that they don't see what you see in me
You wait a couple of months, then you gon' see
You'll never find nobody better than me

In the night, I hear 'em talk (Me)
The coldest story ever told
Somewhere far along this road
He lost his soul to a woman so heartless
How could you be so heartless?
Oh, how could you be so heartless?

Talk and talk and talk and talk
Baby, let's just knock it off
They don't know what we been through
They don't know 'bout me and you
So I got somethin' new to see
And you just gon' keep hatin' me
And we just gon' be enemies
I know you can't believe
I could just leave it wrong
And you can't make it right
I'm gon' take off tonight into the night

In the night, I hear 'em talk
The coldest story ever told
Somewhere far along this road
He lost his soul to a woman so heartless
How could you be so heartless? (How, how?)
Oh, how could you be so heartless?

On and on and on and on
And on and, and on and on and on
`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics4.addEventListener('click', () => {
        const lyrics = `"Amazing"
(feat. Young Jeezy)

[Kanye West:]
It's amazing, I'm the reason
Everybody fired up this evening
I'm exhausted, barely breathing
Holding on to what I believe in

[Kanye West:]
No matter what, you'll never take that from me
My reign is as far as your eyes can see, it's amazing
So amazing, so amazing, so amazing, it's amazing
So amazing, so amazing, so amazing, it's amazing

[Kanye West:]
I'm a monster, I'm a killer
I know I'm wrong, yeah
I'm a problem
That'll never ever be solved

[Kanye West:]
And no matter what, you'll never take that from me
My reign is as far as your eyes can see, it's amazing
So amazing, so amazing, so amazing, it's amazing
So amazing, so amazing, so amazing, it's amazing

[Kanye West:]
I'm a monster, I'm a maven
I know this world is changing
Never gave in, never gave up
I'm the only thing I'm afraid of

[Kanye West:]
No matter what, you'll never take that from me
My reign is as far as your eyes can see, it's amazing
So amazing, so amazing, so amazing, it's amazing
So amazing, so amazing, so amazing, it's amazing
So amazing, so amazing, so amazing, it's amazing
So amazing, so amazing, so amazing, it's amazing

[Young Jeezy:]
I'm amazing (Amazing) yeah I'm all that (All that)
If I ain't on my grind, then what you call that? (What you call that?)
Victorious, yeah we warriors
We make history, strive off victory (Yeah)
Standing at my podium, I'm trying to watch my sodium
Die high blood pressure, either let the Feds catch ya (Yeah)
I'm amazing, born on a full moon
I was bred to get it in, no spoon
That's why I'm so goon, summertime, no June
Big family, small house, no room
They like "Oh God, why he go so hard?
Look what he's been through, he deserves an applause"

[Kanye West:]
So amazing, so amazing, so amazing, it's amazing
So amazing, so amazing, so amazing, it's amazing
So amazing, so amazing, so amazing, it's amazing
So amazing, so amazing, so amazing, it's amazing
`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics5.addEventListener('click', () => {
        const lyrics = `"Love Lockdown"

I'm not loving you, way I wanted to
What I had to do, had to run from you
I'm in love with you, but the vibe is wrong
And that haunted me, all the way home
So you never know, never, never know
Never know enough, 'til it's over love
'Til we lose control, system overload
Screaming, "No, no, no, n-no!"
I'm not loving you, way I wanted to
See I wanna move, but can't escape from you
So I keep it low, keep a secret code
So everybody else don't have to know

So keep your love lockdown—your love lockdown
Keeping your love lockdown—your love lockdown
Now keep your love lockdown—your love lockdown
Now keep your love lockdown—you lose

I'm not loving you, way I wanted to
I can't keep my cool, so I keep it true
I got something to lose, so I gotta move
I can't keep myself and still keep you too
So I keep in mind, when I'm on my own
Somewhere far from home, in the danger zone
How many times did I tell you 'fore it finally got through?
You lose, you lose
I'm not loving you, way I wanted to
See I had to go, see I had to move
No more wasting time, you can't wait for life
We're just racin' time, where's the finish line?

So keep your love lockdown—your love lockdown
Keeping your love lockdown—your love lockdown
Now keep your love lockdown—your love lockdown
Now keep your love lockdown—you lose

I'm not loving you, way I wanted to
I bet no one knew, I got no one new
Know I said I'm through, but got love for you
But I'm not loving you, the way I wanted to
Gotta keep it goin', keep the loving goin'
Keep it on the roll, only God knows
If I be with you, baby, I'm confused
You choose, you choose
I'm not loving you, way I wanted to
Where I wanna go, I don't need you
I've been down this road too many times before
I'm not loving you, way I wanted to

So keep your love lockdown—your love lockdown
Keeping your love lockdown—your love lockdown
Now keep your love lockdown—your love lockdown
Now keep your love lockdown—you lose

You lose, you lose
You lose, you lose`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics6.addEventListener('click', () => {
        const lyrics = `"Paranoid"
(feat. Mr Hudson)

[Kanye West:]
She really thought that? (Yeah)
Yeah, she's so paranoid (Yeah, that's good, paranoid)
Girls gonna love this song, a-ha-ha
Why are you so paranoid? (A-ha-ha-ha-ha-ha)
Don't be so paranoid, don't be so

[Kanye West:]
Baby, don't worry 'bout it
Hey there, don't even think about it
You worry 'bout the wrong things, the wrong things
You worry 'bout the wrong things, the wrong things
You worry 'bout the wrong things, the wrong things
You worry 'bout the wrong things, the wrong things

[Kanye West:]
Tell me right now
You really wanna spend your whole life alone?
A little time out might do you good
Might do us good 'fore we be done for good
'Cause I could make it good, I could make it hood
I could make you come, I could make you go
I could make you high, I can make you fly
Make you touch the sky, hey, maybe so
All of the time
You be up in mine checkin' through my cell phone, baby, no
You wanna kill the vibe on another night
Here's another fight, oh, here we go (Oh, here we go)

[Kanye West, Mr. Hudson and Kid Cudi:]
Baby, don't worry about it
Lady, we'll go out to the floor
Anyway, they don't know you (They don't know) like I do
They'll never know you (Never know)
Anyway, they don't know you (Never know) like I do
They'll never know you

[Kanye West:]
All of the time
You wanna complain about the nights alone
So now you're here with me, show some gratitude
Leave the attitude way back at home
Yeah, you see 'em look
Baby, let 'em look, give ya cold looks 'cause we look cold
Yeah, you heard about all the word of mouth
Don't worry about what we can't control
All the talk in the world lost in the world
'Til you finally let that thing go
You wanna check into the heartbreak hotel
But sorry, we're closed

[Kanye West, Mr. Hudson and Kid Cudi:]
Baby, don't worry about it
Baby, we'll go out to the floor
Anyway (Hey) they don't know you (To the floor) like I do (Hey)
They'll never know you (Never know)
Anyway, they don't know you (They don't know) like I do
They'll never know you

[Kanye West:]
Baby, don't worry about it
Lady, don't even think about it
You worry 'bout the wrong things, the wrong things
You worry 'bout the wrong things, the wrong things
You worry 'bout the wrong things, the wrong things
You worry 'bout the wrong things, the wrong things

[Mr. Hudson and Kid Cudi:]
Anyway, they don't know you like I do
They'll never know you
Anyway, they don't know you like I do
They'll never know you
Anyway, they don't know you like I do
They'll never know you
Anyway, they don't know you like I do
They'll never know you
`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics7.addEventListener('click', () => {
        const lyrics = `"RoboCop"

'Bout the baddest girl I ever seen
Straight up out a movie scene
Who knew she was a drama queen
That'd turn my life to Stephen King's?
Up late night like she on patrol
Checking everything like I'm on parole
I told her there's some things she don't need to know
She never let it go, oh

OK, OK, OK, OK
You will never stop it now
You never stop it now
OK, OK, OK
You will never stop it now
You need to drop it now
Drop it, drop it

'Cause I don't want no RoboCop
You moving like a RoboCop
When did you become a RoboCop?
Now I don't need no RoboCop

Just looking at your history
You're like the girl from Misery
She said she ain't take it to this degree
Well let's agree to disagree
Shorty kind of crazy but it turn me on
Keep it up enough to keep it going on
I told her there's some things she don't need to know
She never let it go, oh

OK, OK, OK, OK
You will never stop it now
You never stop it now
OK, OK, OK
You will never stop it now
You need to drop it now
Drop it, drop it

'Cause I don't want no RoboCop
You moving like a RoboCop
When did you become a RoboCop?
Somebody please make her stop

Stop, drop, roll, pop
Bitch, I'm cold
I ain't used to being told, "Stop"
So I could never be your robot
Fast or slow, you can stay or can go
Now, now that you know
Now, now that you know
Yeah I had her before but that happened before
You get mad when you know so just don't ask me no more
OK, OK, OK, uh, uh
It ain't OK, OK, OK, uh

You spoiled little LA girl
You're just an LA girl
You spoiled little LA girl
You're just an LA girl
You spoiled little LA girl
You're just an LA girl (You need to stop it now)
You spoiled little LA girl
You're just an LA girl (You need to stop it now)
Oh you're kidding me
You must be joking
Or you are smoking
Oh oh you're kidding me
Oh you're kidding me
Ha-ha, that was a good one
Your first good one in a while
Your first good one in a while
You need to stop it now
You need to stop it now
Oh you need to stop it now
`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics8.addEventListener('click', () => {
        const lyrics = `"Street Lights"

Let me know
Do I still got time to grow?
Things ain't always set in stone
That be known let me know
Let me

Seems like street lights, glowing, happen to be
Just like moments, passing, in front of me
So I hopped in the cab and I paid my fare
See I know my destination, but I'm just not there
All the street lights, glowing, happen to be
Just like moments, passing, in front of me
So I hopped in the cab and I paid my fare
See I know my destination, but I'm just not there

In the streets
In the streets
I'm just not there in the streets
I'm just not there
Life's just not fair

Seems like street lights, glowing, happen to be
Just like moments, passing, in front of me
So I hopped in the cab and I paid my fare
See I know my destination, but I'm just not there
All the street lights, glowing, happen to be
Just like moments, passing, in front of me
So I hopped in the cab and I paid my fare
See I know my destination, but I'm just not there
All the street lights, glowing, happen to be
Just like moments, passing, in front of me
So I hopped in the cab and I paid my fare
See I know my destination, but I'm just not there

In the streets
In the streets
I'm just not there in the streets
I'm just not there
Life's just not fair
Life's just not fair
`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics9.addEventListener('click', () => {
        const lyrics = `"Bad News"

Didn't you know, I was waiting on you
Waiting on a dream that'll never come true
Didn't you know, I was waiting on you
My face turned to stone when I heard the news
When you decide to break the rules

'Cause I just heard some real bad news

People'll talk like it's old news
I played it off and act like I already knew
Let me ask you how long have you known dude
You played it off and act like he's brand new
When you decide, to break the rules

'Cause I just heard some real bad news
Real bad news
Real bad news
Real bad news

Oh, you just gon' keep another no you won't
Oh, you just gon' keep it like you never knew
Oh, you just gon' keep another love for you
Oh, you just gon' keep it like you never knew
While I'm waiting on a dream that'll never come true
Oh, you just gon' keep it like you never knew
My face turned to stone when I heard the news

What's on the news?
Channel cruise`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics10.addEventListener('click', () => {
        const lyrics = `"See You In My Nightmares"
(feat. Lil Wayne)

[Kanye West and Lil Wayne:]
I'm cold! (Yeah)
I'm cold! (Yeah)
I'm cold! (Yeah, yeah)

[Lil Wayne:]
I got the right to put up a fight
But not quite, 'cause you cut off my light
But my sight is better tonight
And I might see you in my nightmare
Ooh, how did you get there?
'Cause we were once a fairy tale
But this is farewell, yeah

[Kanye West:]
I got my life and it's my only one
I got the night, I'm running from the sun
So good night, I'm headed out the door
Door, door, door, door
After tonight there will be no return
After tonight I'm taking off on the road
I'm taking off on the road
And that you know

[Kanye West:]
That you know
Tell everybody that you know
That I don't love you no more
And that's one thing that you know, that you know

[Kanye West:]
Okay, I'm back up on my grind
You do you and I'm just gon' do mine
You do you 'cause I'm just gon' be fine
Okay, I got you out my mind
And the night is young, the drinks is cold
The stars is out, I'm ready to go
You always thought I was always wrong
Well, now you know

[Kanye West:]
Tell everybody, everybody that you know
Tell everybody that you know
That I don't love you no more
And that's one thing that you know, that you know

[Lil Wayne:]
I got the right to put up a fight
But not quite, 'cause you cut off my light
But my sight is better tonight
And I might see you in my nightmare
Ooh, how did you'd get there?
'Cause we were once a fairy tale
But this is farewell, yeah

[Lil Wayne:]
Baby girl I'm finished, I thought we were committed
I thought we were cemented, I really thought we meant it
But now we just repent it, and now we just resent it
The clouds is in my vision, look how high that I be getting
And it's all because of you, girl we through
You think your shit don't stank but you are Mrs. P-U
And I don't see you with me no more
Now tell everybody that you know, that you know

[Kanye West:]
That you know
Tell everybody that you know
That I don't love you no more
And that's one thing that you know, that you know
That you know
Tell everybody that you know
That I don't love you no more
And that's one thing that you know, that you know`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics11.addEventListener('click', () => {
        const lyrics = `"Coldest Winter"

On lonely nights, I start to fade
On lonely nights, I start to fade
Her love's a thousand miles away
Her love's a thousand miles away

Memories made in the coldest winter
Goodbye my friend, will I ever love again?
Memories made in the coldest winter

It's 4 A.M. and I can't sleep
It's 4 A.M. and I can't sleep
Her love is all that I can see
Her love is all that I can see

Memories made in the coldest winter
Goodbye my friend, will I ever love again?
Memories made in the coldest winter, winter, winter
Goodbye my friend, will I ever love again?
Goodbye my friend, will I ever love again?
Goodbye my friend, will I ever love again?

If spring can take the snow away
If spring can take the snow away
Can it melt away all our mistakes
Can it melt away all our mistakes

Memories made in the coldest winter
Goodbye my friend, I won't ever love again
Never again
`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics12.addEventListener('click', () => {
        const lyrics = `"Pinocchio Story"

Wise man say, wise man say
Wise man say
You'll never figure out real love
Never figure out real love
You'll never figure out real love

It's so crazy, crazy-crazy
I got everything figured out
But for some reason I can never find what real love is about, no doubt
Everything in the world figured out
But I can never seem to find what real love was about
Do you think I'd sacrifice real life
For all the fame and flashing lights?
Do you think I'd sacrifice a real life
For all the fame and flashing lights?
There is no Gucci I can buy
There is no Louis Vuitton to put on
There is no YSL that they could sell
To get my heart out of this hell and my mind out of this jail
There is no clothes that I could buy
That could turn back in time
There is no vacation spot I could fly
That could bring back a piece of real life
Real life, what does it feel like?
I ask you tonight, I ask you tonight
What does it feel like? I ask you tonight
To live a real life

I just wanna be a real boy
They always say, "Kanye, he keeps it real boy"
Pinocchio's story is, I just wanna be a real boy
Pinocchio's story goes, to be a real boy

It's funny
Pinocchio lied and that's what kept him from it
I tell the truth and I keep running
It's like I'm lookin' for something out there, tryna find something
I turn on the TV and see me and see nothing
What does it feel like to live real life, to be real?
Not some facade on TV that no one can really feel
Do you really have the stamina?
For everybody that sees you that say, "Where's my camera?"
For everybody that sees you to say, "Sign an autograph"
For everybody that sees you cryin' that say you oughta laugh
You oughta laugh

I just wanna be a real boy
Pinocchio's story goes
I just wanna be a real boy
Pinocchio's story goes

And there is no Gepetto to guide me
No one right beside me
The only one was behind me
I can't find her no more, I can't call her no more
I can't—
The only one that come out on the tour and stays
Back when I was livin' at home and this was all a big dream
And the fame will be get got
And the day I moved to L.A., maybe that was all my fault
All my fault to be a real boy, chasin' the American dream
Chasin' everything we seen up on the TV screen
And when uh, the Benz was left
And the clothes was left, and the hoes was left
You talk the hoes to death thinkin' the money that the—
You spend the dough to death
And tell me what be left for a real boy!
They say, "Kanye, you keep it too real boy"
Perspective and wise, man say
One day, you'll find your way
The wise man say you'll find your way
The wise man say you'll find your way
Wise man say`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

</script>

<!-- Call up the footer-->
<?php
include 'includes/footer.php';
?>