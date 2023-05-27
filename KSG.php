<!-- Call up the header and navbar and set page title-->
<?php
$page_title = "Kids See Ghosts";
include 'includes/header.php';
include 'includes/nav.php';
?>

<!-- set the splitscreen -->
<div class="container" style="max-width:100%;">
    <div class="row split">
        <div class="col left" style="background-color:#0A6AA6;"> <!-- left col -->
            <div class="leftT" style="background-color:#F2A950;"></div> <!-- top section of left col -->
            <div id="leftM"> <!-- middle section of left col -->
                <!-- i frame for songs -->
                <iframe class="video" id="video-player" width="240px" height="240px" frameborder="0"></iframe> 

                 <!-- div for song lyrics -->
                <div id="LyricsContainer" style="display: none; max-height:205px; background-color:#F2AA80; padding-left: 20px; padding-top: 10px;">  
                </div>

            </div>
            <div class=leftB style="background-color:#F2A950;"> <!-- bottom section of left col -->
            </div>

        </div>
        <!-- right col -->
        <div class="col right" style="background-color:#F25E95;"> 
            <br>
            <div class="albumcover"><img src="image/KSGcover.jpeg" class="img-fluid" alt="Image could not load"></div> <!-- album cover -->
            <br>
            <h3 class="albumtitle">Kids See Ghosts</h3> <!-- title of the album -->
            <!-- Description/background of album -->
            <p class="albumdesp">Kids See Ghosts, a collaborative album released by Kanye West and Kid Cudi in 2018, is a groundbreaking work that showcases the two artists' creative synergy and musical vision. The album is a deeply introspective and emotionally charged exploration of themes like mental health, anxiety, and self-discovery, set against a backdrop of experimental and genre-bending production.</p>
            <p class="albumdesp">At just seven tracks in length, Kids See Ghosts is a concise and focused work that packs a powerful punch. Tracks like "Reborn" and "Fire" are uplifting and inspiring, with West and Kid Cudi offering messages of hope and resilience in the face of adversity. Meanwhile, tracks like "Freeee (Ghost Town Pt. 2)" and "Feel the Love" showcase the album's more experimental and avant-garde side, with glitchy production and bold sonic experimentation.</p>
            <p class="albumdesp">Thematically, Kids See Ghosts is a deeply personal and introspective work that explores the artists' struggles with mental health and addiction. The album is a testament to the healing power of creativity and the transformative potential of self-expression, and serves as an inspiration and rallying cry for listeners who may be struggling with their own mental health challenges.</p>
            <p class="albumdesp">Overall, Kids See Ghosts is a groundbreaking and deeply impactful work that showcases the creative genius of two of hip-hop's most visionary artists. The album is a testament to the power of collaboration and the transformative potential of artistic expression, and stands as a defining work of the genre.</p>

            <!-- tracklist -->
            <ul class="list-group">
                <li class="list-group-item albumtrack" style="background-color: #F25E95;">Feel The Love <!-- Song title -->
                    <span class="artist">• Kids See Ghosts</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id=""><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics1" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #F25E95;">Fire <!-- Song title -->
                    <span class="artist">• Kids See Ghosts</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id=""><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics2" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #F25E95;">4th Dimension <!-- Song title -->
                    <span class="artist">• Kids See Ghosts • Louis Prima</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id=""><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics3" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #F25E95;">Freeee (Ghost Town, Pt. 2) <!-- Song title -->
                    <span class="artist">• Kids See Ghosts</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id=""><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics4" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #F25E95;">Reborn <!-- Song title -->
                    <span class="artist">• Kids See Ghosts</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id=""><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics5" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #F25E95;">Kids See Ghosts <!-- Song title -->
                    <span class="artist">• Kids See Ghosts</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id=""><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics6" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #F25E95;">Cudi Montage <!-- Song title -->
                    <span class="artist">• Kids See Ghosts</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id=""><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics7" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
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

    // Change the content of the div when buttons are clicked
    lyrics1.addEventListener('click', () => {
        const lyrics = `"Feel The Love"

[Chorus: Kid Cudi]
I can still feel the love
I can still feel the love
I can still feel the love
Feel the love

[Pusha-T (Kid Cudi):]
We not worried 'bout no other niggas, we them other niggas
You bust down a Rollie, I bust down a brick, then I flood it, nigga
I am not to be compared to you rappers (Eazy-Duz-It) nigga
I am more Eazy, you tryin' your best to become me, nigga
She like them bottles with bubbles in it
Buy her Loewe and other linen
Why would I wait when there's other women?
Why would I hate? We in love with winnin', ooh
Buy her bundles, fly her out, bring her friend, I try her out
Ain't no worries findin' out, the details is ironed out
Easily they plays along, hopin' that I play a song
Love to fuck to trap music (feel the love)
([Kanye West:] Grrrat-gat-gat-gat-gat)
Dope money just came along (woo)

[Kanye West (Kid Cudi):]
Grrrat-gat (I can still feel the love)
Gat-gat, gat, ga-gat-ga-ga-gat
Grrrat, gat-gat-gat (I can still feel the love)
Gat-gat-gat-gat-gat-gat-gat, grrrat
Gat-gat-gat-gat (feel the love)
Ga-ga-gat, ga-gat, ga-gat, ga-gat-gat, grrrat

Ba-ba-ba-ba
Brrrat-tat-da-da-da, da
Ga-ga-ga-ga
Brrr-ah-da-da-da, brrr-ah-da-da-da
Brrr-ah-da-da-da, brrr-ah-da-da-da
Brrr-ah-brrr-ah, brrr-ah-ga-grrrat
Rude-rude-rude-rude-woo!

Where the chorus?

[Kid Cudi:]
I can still feel the love
I can still feel the love
I can still feel the love
Feel the love
[Kanye West:]
Woo!
[Kid Cudi:]
I can still feel the love
I can still feel the love
I can still feel the love
I can still feel the love
I can still feel the love
[Kanye West:]
Ba-ba-ba-ba-ba-ba-ba
Ba-ba-ba-ba
Rude-rude-rude-rude-woo!`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics2.addEventListener('click', () => {
        const lyrics = `"Fire"

[Kanye West:]
I love all your shit talkin', I love all your shit talkin'
You ain't got nothin' better to... do with yourself?

I done proved to myself, back on that rulin' myself
I got new news to tell, act like you knew you done failed
Only true know how I feel and only if you knew how I felt
Sniffed a lil' bootch off the nail
Through with mixed messages, through with the mail
Only a few in the field, little bit off for the real

[Kid Cudi:]
It's so many days I prayed to God
All this pain, I couldn't seem to find a way
On a mission livin', carry on
Got my family, I'm seein' through by the days
Never late, pull up a seat and come grab a plate
Check the date, let 'em hate
This the type shit that they couldn't make, watch the fakes
Leave 'em buzzin', thought they wasn't, huh?
Tell all your kinfolk and cousins, huh?
This is the package you ordered, huh?
Beautiful madness

On this road I find, hmm-mmm
These scars I left behind, hmm-mmm
Heaven, lift me up, hmm-mmm
Heaven, lift me up, hmm-mmm
On this road I find, hmm-mmm
These scars I left behind, hmm-mmm
Heaven lift me up, hmm-mmm
Heaven lift me up, hmm-mmm
`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics3.addEventListener('click', () => {
        const lyrics = `"4th Dimension"
(feat. Louis Prima)

[Louis Prima:]
"Down the chimney, he will come
With his great big smile
And you'll find that even the kiddies
Are swingin' in the latest style
Oh, oh, oh
What is Santa bringing?
Oh, oh, oh
I wonder whether he'll be swingin'"

[Kanye West:]
It feels so good, it should cost
Bought an alligator, I ain't talkin' Lacoste
Made me say, "Ooh, uh"
Like I'm mixing Master P and Rick Ross (uh, uh)
She seem to make me always feel like a boss (uh, uh)
She said I'm in the wrong hole, I said I'm lost (uh, uh)
She said I'm goin' too fast, I'm exhausted
Now drop to your knees for the offerin'
This the theme song, oh somethin' wrong
Might need an intervention for this new dimension
That's too new to mention, or fit in a sentence
If I get locked up, I won't finish the sent—

[Louis Prima:]
"Oh, oh, oh
What is Santa bringin'?
Oh, oh, oh
I wonder whether he'll be swingin'"

[*laughter*]

[Kid Cudi:]
Gettin' loose while I'm on the deuce, see me roll out
What you surf, hit the coast, and this feelin', I got
Plenty of adventures for the evenin', we go journey, we off
From the light to guide us home, we in the moment, oh-oh
Such a lost boy, caught up in the darkest I had
What's the cost, boy? Losin' everything that I had
She been on me, boy, unless you got somethin' to tell
Sittin', waitin' for me slippin', yeah, I'll see you in hell
Tell the cougar get up off me, no, my soul ain't for sale
All the evils in the world, they keepin' on me for real
I really hope the Lord won't hurt me, we all live in sin
Kids see ghost off the ropes, Ric Flair on your bitch
Now this the theme song, this the theme song
The put the beams on, get your, get your dream on
But you don't hear me though, drama: we let it go
Watch the guitars roll and let your friends know

[Louis Prima:]
"Oh, oh, oh
What is Santa bringin'?
Oh, oh, oh
I wonder whether he'll be swingin'"

[Shirley Anne Lee:]
"Just do that and then let the music do somethin', then do that again, that'd be enough for a record
I mean, you only want two and a half minutes if you can get it, you know, three minutes max—"`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics4.addEventListener('click', () => {
        const lyrics = `"Freeee (Ghost Town, Pt. 2)"

[Marcus Garvey:]
May I say something to you to give you a true knowledge of yourself and life?
Man in the full knowledge of himself is a superb and supreme creature of creation
When man becomes possessor of the knowledge of himself, he becomes the master of his environment

[Kanye West:]
I don't feel pain anymore
Guess what, baby? I feel freeee (scoop!)
Nothin' hurts me anymore
Guess what, baby? I feel freeee

[Kid Cudi:]
I'm so complete anymore
[Kanye West:]
Guess what, baby? I feel freeee
And you know damn well
[Ty Dolla $ign:]
He lift me up every time that I fell
And set me freeee, yeah
[Kanye West:]
Ah! You should quit your job to this
[Ty Dolla $ign:]
Hold up, that'll politic, ooh
One day they hate you
Next day they love you
I'm still yellin' "fuck you"
I could never trust—

[Ty Dolla $ign & Anthony Hamilton:]
Freeee, I feel freeee
I feel freeee, I feel freeee

[Kid Cudi:]
I don't feel pain anymore
Guess what, babe? I am freeee
Yeah, nothin' hurts me anymore
Guess what, babe? I am freeee

Yeah, yeah, yeah, yeah
Feelin' out of my past life
Died and came back twice
Now I'm freeee

I don't feel pain anymore
Hmm, guess what, babe? I am freeee

[Ty Dolla $ign & Anthony Hamilton:]
I feel freeee, I feel freeee
I feel freeee, I feel freeee
`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics5.addEventListener('click', () => {
        const lyrics = `"Reborn"

[Kid Cudi:]
I'm so—I'm so reborn, I'm movin' forward
Keep movin' forward, keep movin' forward
Ain't no stress on me Lord, I'm movin' forward
Keep movin' forward, keep movin' forward
I'm so—I'm so reborn, I'm movin' forward
Keep movin' forward, keep movin' forward
Ain't no stress on me Lord, I'm movin' forward
Keep movin' forward, keep movin' forward

[Kanye West:]
Very rarely do you catch me out
Ya'll done "specially invited guest"'d me out
Y'all been tellin' jokes that's gon' stress me out
Soon as I walk in, I'm like, "Let's be out"
I was, off the chain, I was often drained
I was off the meds, I was called insane
What a awesome thing, engulfed in shame
I want all the rain, I want all the pain
I want all the smoke, I want all the blame
Cardio audio, let me jog your brain
Caught in the Audy Home, we was all detained
All of you Mario, it's all a game

[Kid Cudi:]
I'm so—I'm so reborn, I'm movin' forward
Keep movin' forward, keep movin' forward
Ain't no stress on me Lord, I'm movin' forward
Keep movin' forward, keep movin' forward
I'm so—I'm so reborn, I'm movin' forward
Keep movin' forward, keep movin' forward
Ain't no stress on me Lord, I'm movin' forward
Keep movin' forward, keep movin' forward

I had my issues, ain't that much I could do
But, peace is somethin' that starts with me, with me
At times, wonder my purpose
Easy then to feel worthless
But, peace is somethin' that starts with me (with me, with me)
Had so much on my mind, I didn't know where to go
I've come a long way from them hauntin' me
Had me feelin' oh so low
Ain't no stoppin' you no way
All things, the night before
Ain't no stoppin' you no way
No stress yes, I'm so blessed and-

I'm so—I'm so reborn, I'm movin' forward
Keep movin' forward, keep movin' forward
Ain't no stress on me Lord, I'm movin' forward
Keep movin' forward, keep movin' forward
I'm so—I'm so reborn, I'm movin' forward
Keep movin' forward, keep movin' forward
Ain't no stress on me Lord, I'm movin' forward
Keep movin' forward, keep movin' forward

Movin' forward, movin' forward, movin' forward
Keep movin' forward (somethin's wrong)
Keep movin' forward (I don't know why)
Keep movin' forward (so long)
Keep movin' forward (sit here in the storm)
Keep movin' forward (time goes on)
Keep movin' forward (been lookin' for my way out)
Keep movin' forward (from the storm)
Keep movin' forward (which way do I go?)

I'm so—I'm so reborn, I'm movin' forward (which way do I go?)
Keep movin' forward, keep movin' forward (which way do I go?)
Ain't no stress on me Lord, I'm movin' forward (which way do I go?)
Keep movin' forward, keep movin' forward
Keep movin' forward, keep movin' forward
Keep movin' forward, keep movin' forward
Keep movin' forward, keep movin' forward
Keep movin' forward, keep movin' forward
I'm so—I'm so reborn, I'm movin' forward
Keep movin' forward, keep movin' forward
Ain't no stress on me Lord, I'm movin' forward
Keep movin' forward, keep movin' forward`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics6.addEventListener('click', () => {
        const lyrics = `"Kids See Ghosts"

[Yasiin Bey:]
Kids see ghosts sometimes
Kids see ghosts sometimes
Kids see ghosts sometimes
Spirit, movin' around, just movin' around
Kids see ghosts sometimes
Kids see ghosts sometimes
Kids see ghosts
Spirit, yeah, that's the king

[Kid Cudi:]
Stop that movement, stop that movement
Y'all can't move me, this my movie
Y'all can't stop me, y'all too sloppy
Carbon copied, carbon
Same thing, in a room
Sittin' by myself, findin' heaven soon
Many things that will trouble you
Look beyond for a feelin' like you never knew
Reachin' out, huntin' for the truth
I guessin' I'm just sick of runnin'
All this time searchin' hard for somethin'
I can hear the angels comin'

Kids see ghosts sometimes
Kids see ghosts sometimes
Kids see ghosts sometimes
Spirit, movin' around, just movin' around
Kids see ghosts sometimes
Kids see ghosts sometimes
Kids see ghosts
Spirit, yeah, that's the king

[Kanye West:]
Well, it took me long enough to rap on this strong enough
Paid this shit just gon' give up, 'cause Ye just gon' live up
To everything that sucks to you and that's never enough
Thought I'd be clever enough to give up while I'm ahead
I like breakfast in bed, but I love breakfast and head
For anybody who said that I was better off dead
Told 'em, "Don't ever believe nothin' that you ever read"
Got a Bible by my bed, oh yes, I'm very Christian
Constantly repentin', 'cause, yes, I never listen
Don't like bein' questioned and don't like bein' less
Than any a competition in any of my professions
So I gotta guess then, I gotta stay the best man
What else you expect from, uh, Mr. West, man
Painted from Western, space like a relative
Bet you ain't see it, man, call on the telephone
And when they see you they say, “Damn you got hella grown
Always thought you'd make it, but damn now you hella known"
Let's address some topics that I can embellish on
How we made enough bread for us to put some relish on
I'ma relish on the fact vibin' on the future
Ultralight buildin' in the buildin' by Miuccia
Herzog and De Meuron in an office out in Basel
No not Miami, Switzerland (Switzerland, ahahaha)

[Yasiin Bey:]
Kids see ghosts sometimes
Kids see ghosts sometimes
Kids see ghosts sometimes
Spirit, movin' around, just movin' around
Kids see ghosts sometimes
Kids see ghosts sometimes
Kids see ghosts
Spirit, yeah, that's the king

Civilization without society
Power and wealth with nobility
Stability without stasis
Places and spaces
Civilization without society
Power and wealth with nobility
Stability without stasis
Spaces and places

Kids see ghosts sometimes
Kids see ghosts—ghosts sometimes
Kids see ghosts sometimes
Yeah, that's the king
And what's a crown for the clouds, movin' around
Yeah, that's the king
And what's a crown to the clouds, movin' around`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics7.addEventListener('click', () => {
        const lyrics = `"Cudi Montage"

[Kid Cudi:]
Find my back in the cold
Trapped in another soul, they can hear me holler
I'm colder than the game
See 'em all strapped in an' can't move and I'm sinkin' lower
Heaven gonna help me
'Cause I feel the world weighin' on me heavy, tryna keep it steady
Ready for the mission
God, shine your love on me, save me, please
If I'm goin' alone, I've been gone for so long
Ain't nobody, you can't hear a word
Perched in the night, lookin’ out nowhere
Where's home on this hidden earth?
Pain in my eyes, in the time I find, I'm stronger than I ever was
Here we go again, God, shine your love on me, save me, please

[Mr. Hudson (Kid Cudi):]
(Hmm-mm-mm, woah, woah)
Stay strong
(Hmm-mm-mm, woah, woah)
Stay strong
(Hmm-mm-mm, woah, woah)
Save me, Lord
(Hmm-mm-mm, woah, woah)
Stay strong
(Hmm-mm-mm, woah, woah)
Save me, Lord
(Hmm-mm-mm, woah, woah)
Stay strong
(Hmm-mm-mm, woah, woah)
Save me, Lord
(Hmm-mm-mm, woah, woah)

[Kanye West:]
Everybody want world peace
'Til your niece get shot in the dome-piece
Then you go and buy your own piece
Hopin' it'll help you find your own peace
Bring light to what they don't see
Auntie cryin' on the concrete
Talkin' to dispatcher then the phone beep
On the other line was the homies
Told her that you ain't comin' home, see
When she heard the news it hurt her bone-deep
Caught with the rifle with the long reach
Just another cycle of the lonely
All growin' up in environment
Where doin' crime the requirement
They send us off to prison for retirement
Hopefully Alice Johnson will inspire men

[Mr. Hudson (Kid Cudi) {Kanye West}:]
{Lord shine your light on me, save me, please}
(Hmm-mm-mm, woah, woah)
Stay strong
{Lord shine your light on me, save me, please}
(Hmm-mm-mm, woah, woah)
Stay strong
{Lord shine your light on me, save me, please}
(Hmm-mm-mm, woah, woah)
Save me, Lord
{Lord shine your light on me, save me, please}
(Hmm-mm-mm, woah, woah)
Stay strong
{Lord shine your light on me, save me, please}
(Hmm-mm-mm, woah, woah)
Save me, Lord
{Lord shine your light on me, save me, please}
(Hmm-mm-mm, woah, woah)
Stay strong
{Lord shine your light on me, save me, please}
(Hmm-mm-mm, woah, woah)
Save me, Lord
{Lord shine your light on me, save me, please}
(Hmm-mm-mm, woah, woah)
{Lord shine your light on me, save me, please}
(Hmm-mm-mm, woah, woah)
Stay strong
{Lord shine your light on me, save me, please}
(Hmm-mm-mm, woah, woah)
Stay strong

{Both sides lose somebody}
(Hmm-mm-mm, woah, woah)
Save me, Lord
{Somebody dies, somebody goes to jail}
(Hmm-mm-mm, woah, woah)
Stay strong
{Light on me, save me, please}
(Hmm-mm-mm, woah, woah)
Stay strong
{Lord, shine your light on me, save me, please}
(Hmm-mm-mm, woah, woah)
Stay strong
{Shine your light on me, save me, please}
(Hmm-mm-mm, woah, woah)
Save me, Lord
{Shine your light on me}
(Hmm-mm-mm, woah, woah)
Stay strong`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });
</script>

<!-- Call up the footer-->
<?php
include 'includes/footer.php';
?>