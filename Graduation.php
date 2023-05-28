<!-- Call up the header and navbar and set page title-->
<?php
$page_title = "Graduation";
include 'includes/header.php';
include 'includes/nav.php';
?>

<!-- set the splitscreen -->
<div class="container" style="max-width:100%;">
    <div class="row split">
        <div class="col left" style="background-color:#853082;"> <!-- left col -->
            <div class="leftT" style="background-color:#b9b353;"></div> <!-- top section of left col -->
            <div id="leftM"> <!-- middle section of left col -->
                <!-- i frame for songs -->
                <iframe class="video" id="video-player" width="240px" height="240px" frameborder="0"></iframe> 

                 <!-- div for song lyrics -->
                <div id="LyricsContainer" style="display: none; max-height:205px; background-color:#ffffff; padding-left: 20px; padding-top: 10px;">  
                </div>

            </div>
            <div class=leftB style="background-color:#b9b353;"> <!-- bottom section of left col -->
            </div>

        </div>
        <!-- right col -->
        <div class="col right" style="background-color:#b25186;"> 
            <br>
            <div class="albumcover"><img src="image/GraduationCover.jpg" class="img-fluid" alt="Image could not load"></div> <!-- album cover -->
            <br>
            <h3 class="albumtitle">Graduation</h3> <!-- title of the album -->
            <!-- Description/background of album -->
            <p class="albumdesp">Graduation is the third studio album by Kanye West, released in 2007. The album is a celebration of personal growth, exploring themes of success, perseverance, and self-discovery. It marked a departure from West's previous sound, embracing a more electronic and futuristic sound that reflected his interest in pop art and design.</p>
            <p class="albumdesp">One of the most notable tracks on the album is "Stronger," which samples Daft Punk's "Harder, Better, Faster, Stronger" and embodies the album's futuristic sound and themes of perseverance and triumph. Other standout tracks include "Good Life" and "Flashing Lights," featuring collaborations with T-Pain and Dwele, respectively, and showcasing West's ability to seamlessly blend electronic and hip-hop sounds.</p>
            <p class="albumdesp">In addition to the album's 13 tracks, there are also two bonus tracks: "Good Night" featuring Mos Def and "Bittersweet Poetry" featuring John Mayer. These tracks add to the overall musical and thematic diversity of the album and provide a glimpse into West's collaborative spirit.</p>
            <p class="albumdesp">Overall, Graduation is a standout album in West's discography, showcasing his artistic growth and innovation. Its themes of personal growth and perseverance continue to resonate with audiences of all ages, and its blend of electronic and hip-hop sounds has influenced countless artists in the years since its release. The addition of bonus tracks further cements the album's status as a complete work of art.</p>

            <!-- tracklist -->
            <ul class="list-group">
                <li class="list-group-item albumtrack" style="background-color: #b25186;">Good Morning <!-- Song title -->
                    <span class="artist">• Kanye West</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="WwYbTxOZF0k"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics1" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #b25186;">Champion <!-- Song title -->
                    <span class="artist">• Kanye West</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="jKT4ArZCkso"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics2" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #b25186;">Stronger <!-- Song title -->
                    <span class="artist">• Kanye West • Daft Punk</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="2ulp_AMut14"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics3" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #b25186;">I  Wonder <!-- Song title -->
                    <span class="artist">• Kanye West • Labi Siffre</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="MxEjnYdfLXU"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics4" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #b25186;">Good Life <!-- Song title -->
                    <span class="artist">• Kanye West • T-Pain</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="GTmbyuTKT_c"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics5" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #b25186;">Can't Tell Me Nothing <!-- Song title -->
                    <span class="artist">• Kanye West • Young Jeezy</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="hqvcww4ydh8"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics6" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #b25186;">Barry Bonds <!-- Song title -->
                    <span class="artist">• Kanye West • Lil Wayne</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="LYa5q2AjWNQ"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics7" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #b25186;">Drunk & Hot Girls <!-- Song title -->
                    <span class="artist">• Kanye West • Mos Def</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="9uOg6LyIAUo"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics8" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #b25186;">Flashing Lights <!-- Song title -->
                    <span class="artist">• Kanye West • Dwele</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="cxKs2b5lRsA"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics9" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #b25186;">Everything I Am <!-- Song title -->
                    <span class="artist">• Kanye West</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="ZtkNfC5Oymw"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics10" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #b25186;">The Glory <!-- Song title -->
                    <span class="artist">• Kanye West • Laura Nyro • John Legend</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="e-IAGmTuUmw"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics11" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #b25186;">Homecoming <!-- Song title -->
                    <span class="artist">• Kanye West • Chris Martin</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="YOzAdMs5dEc"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics12" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #b25186;">Big Brother <!-- Song title -->
                    <span class="artist">• Kanye West</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="HInIGGXhJHs"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics13" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #b25186;">Good Night <!-- Song title -->
                    <span class="artist">• Kanye West • Al Be Back • Mos Def</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="_J-OaFVdTKE"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics14" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                    <span class="badge bg-secondary text-dark icon" title="Bonus Track"><span class="fas fa-star"></span></span> <!-- Deluxe song symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #b25186;">Bittersweet Poetry <!-- Song title -->
                    <span class="artist">• Kanye West • John Mayer</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="35c8IW0vsSE"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics15" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                    <span class="badge bg-secondary text-dark icon" title="Bonus Track"><span class="fas fa-star"></span></span> <!-- Deluxe song symbol -->
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

    // Change the content of the div when buttons are clicked
    lyrics1.addEventListener('click', () => {
        const lyrics = `"Good Morning"

[Kanye West:]
Good morning!
Good morning!
Good morning!
Good morning!

[Kanye West:]
Wake up Mr. West, Mr. West
Mr. Fresh, Mister, by himself he's so impressed
I mean damn, did you even see the test?
You got D's, motherfucker D's, Rosie Perez
And your ass barely passed any and every class
Looking at every ass, cheated on every test
I guess, this is my dissertation
Homie this shit is basic, welcome to Graduation

[Kanye West:]
Good morning!
Good morning!
Good morning!
Good morning!

[Kanye West:]
Good morning, on this day we become legendary
Everything we dreamed of
I'm like the fly Malcolm X, buy any jeans necessary
Detroit Red cleaned up
From the streets to the league, from an eighth to a key
But you graduate when you make it up outta the streets
From the moments of pain, look how far we done came
Haters saying you changed, now you doing your thang

[Kanye West:]
Good morning!
Good morning!
Good morning and—
Good morning!

[Kanye West:]
Good morning and look at the valedictorian
Scared of the future while I hop in the DeLorean
Scared to face the world, complacent career student
Some people graduate, but be still stupid
They tell you read this, eat this, don't look around
Just peep this, preach this, teach us, Jesus
Okay look up now, they done stole yo' streetness
After all of that you received this

[Kanye West and JAY-Z:]
Good morning!
Hustlers that's if you're still living, get on down
Every time that we hear them
Good morning!
Hustlers that's if you're still living, get on down
Every time that we hear them
Good morning!
Hustlers that's if you're still living, get on down
Every time that we hear them
Good morning!
Hustlers that's if you're still living, get on down

[JAY-Z:]
Get on down
Get— get on down
Get on down
Get— get on down
`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics2.addEventListener('click', () => {
        const lyrics = `"Champion"

Did you realize
That you were a champion in their eyes?

Yes, I did
So I packed it up and brought it back to the crib
Just a little something, show you how we live
Everybody want it but it ain't that serious
Mhm, that's that shit
So if you gon' do it, do it just like this

Did you realize
That you were a champion in their eyes?

You don't see just how wild the crowd is
You don't see just how fly my style is
I don't see why I need a stylist
When I shop so much I can speak Italian
I don't know, I just want it better for my kids
And I ain't sayin' we was from the projects
But every time I wanted layaway or a deposit
My dad'd say, "When you see clothes, close your eyelids."
We was sort of like Will Smith and his son
In the movie, I ain't talkin' 'bout the rich ones
'Cause every summer he'd get some
Brand new harebrained scheme to get rich from
And I don't know what he did for dough
But he'd send me back to school with a new wardrobe, but ayy

Did you realize
That you were a champion in their eyes?

I think he did
When he packed it up and brought it back to the crib
Just a little something, show you how we live
Everything I wanted, man it seem so serious
Mhm, that's that shit
So if you gon' do it, do it just like this

Did you realize
That you were a champion in their eyes?

When it feel like living's harder than dyin'
For me givin' up's way harder than tryin'
Lauryn Hill said her heart was in Zion
I wish her heart still was in rhymin'
'Cause who the kids gon' listen to, huh?
I guess me if it isn't you
Last week I paid a visit to the institute
They got the dropout keepin' kids in the school
I guess I cleaned up my act like Prince'd do
If not for pleasure, then at least for the principle
They got the CD, they got to see me
Drop gems like I dropped out of PE
They used to feel invisible
Now they know they invincible

Did you realize
That you were a champion in their eyes?

This is the story of a champion
Runners on their mark and they pop their guns
Stand up, stand up, here he comes
Tell me what it takes to be number one
Tell me what it takes to be number one
This is the story of a champion
Runners on their mark and they pop their guns
Stand up, stand up, here he comes
Tell me what it takes to be number one
Tell me what it takes to be number one

Did you realize
That you were a champion in their eyes?

Yes I did
So I packed it up and brought it back to the crib
Just a little something, show you how we live
Everybody want it, but it ain't that serious
Mhm, that's that shit
So if you gon' do it, do it just like this... like this

Did you realize
That you were a champion in their eyes?`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics3.addEventListener('click', () => {
        const lyrics = `"Stronger"

[Daft Punk:]
Work it, make it, do it, makes us
Harder, better, faster, stronger

[Kanye West and Daft Punk:]
N-Now th-that that don't kill me
Can only make us stronger
I need you to hurry up now
'Cause I can't wait much longer
I know I got to be right now
'Cause I can't get much wronger
Man, I've been waiting all night now
That's how long I been on ya
(Work it harder, make it better
Do it faster, makes us stronger)
(I need you right now!)
(More than ever, hour after hour
Work–)
(I need you right now!)

[Kanye West:]
Let's get lost tonight
You could be my black Kate Moss tonight
Play secretary, I'm the boss tonight
And you don't give a fuck what they all say, right?
Awesome, the Christian in Christian Dior
Damn, they don't make 'em like this anymore
I ask, 'cause I'm not sure
Do anybody make real shit anymore?
Bow in the presence of greatness
'Cause right now, thou hast forsaken us
You should be honored by my lateness
That I would even show up to this fake shit
So go ahead, go nuts, go apeshit!
'Specially in my Pastellé, on my Bape shit
Act like you can't tell who made this
New Gospel, homie, take six
And take this, haters!

[Kanye West and Daft Punk:]
N-Now th-that that don't kill me
Can only make me stronger
I need you to hurry up now
'Cause I can't wait much longer
I know I got to be right now
'Cause I can't get much wronger
Man, I've been waiting all night now
That's how long I been on ya
(Work it harder, make it better
Do it faster, makes us stronger)
(I need you right now!)
(More than ever, hour after hour
Work–)
(I need you right now!) Me likey!

[Kanye West and Daft Punk:]
I don't know if you got a man or not
If you made plans or not
If God put me in your plans or not
I'm trippin', this drink got me saying a lot
But I know that God put you in front of me
So how the hell could you front on me?
There's a thousand you's, there's only one of me
I'm trippin', I'm caught up in the moment, right?
'Cause it's Louis Vuitton Don night
So we gon' do everything that Kan like
Heard they'd do anything for a Klondike
Well, I'd do anything for a blonde dyke
And she'll do anything for the limelight
And we'll do anything when the time's right
Uh, baby, you're makin' it–
(Harder, better, faster, stronger)

N-Now th-that that don't kill me (Oh)
Can only make me stronger (Oh)
I need you to hurry up now (Oh)
'Cause I can't wait much longer (Oh)
I know I got to be right now (Oh)
'Cause I can't get much wronger (Oh)
Man, I've been waiting all night now
That's how long I been on ya
(Work it harder, make it better
Do it faster, makes us stronger)
(I need you right now!)
(I need you right now!)

You know how long I've been on ya
Since Prince was on Apollonia
Since O.J. had Isotoners
Don't act like I never told ya
Don't act like I never told ya
Don't act like I never told ya
Don't act like I never told ya
Don't act like I never told ya
Baby, you're makin' it
(Harder, better, faster, stronger)

N-Now th-that that don't kill me
Can only make me stronger
I need you to hurry up now
'Cause I can't wait much longer
I know I got to be right now
'Cause I can't get much wronger
Man, I've been waiting all night now
That's how long I been on ya
(Work it harder, make it better
Do it faster, makes us stronger)
(I need you right now!)
(I need you right now!)
Right now!
Work it harder, make it better
Do it faster, makes us stronger
(I need you right now!)
(I need you right now!)

You know how long I've been on ya
Since Prince was on Apollonia
Since O.J. had Isotoners
Don't act like I never told ya
You know how long I've been on ya
Since Prince was on Apollonia
Since O.J. had Isotoners
Don't act like I never told ya told ya told ya
Never told ya…told ya told ya told ya
Never told ya…told ya told ya told ya
Never told ya…told ya told ya told ya
Never told ya…told ya told ya told ya
Never over…Never over… Never over… Never over…
Never over…Never over… Never over… Never over…
(Harder, better, faster, stronger)
Work it harder, make it better
Do it faster, makes us stronger
More than ever, hour after
Our work is never over
Work it harder, make it better
Do it faster, makes us stronger
More than ever, hour after—
Our work is never over
Work it harder, make it better
Do it faster, makes us stronger
More than ever, hour after hour
Work is never over
Work it harder, make it better
Do it faster, makes us stronger
More than ever, hour after hour
Work is never over`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics4.addEventListener('click', () => {
        const lyrics = `"I Wonder"

[Labi Siffre:]
Find your dreams come true
And I wonder
If you know
What it means
What it means
And I wonder
If you know
What it means
What it means
And I wonder
If you know
What it means
To find your dreams, and I wonder

[Kanye West and Labi Siffre:]
I've been waiting on this my whole life (And I wonder)
These dreams be waking me up at night (And I wonder)
You say I think I'm never wrong (And I wonder)
You know what? Maybe you're right
Aight?

[Labi Siffre:]
And I wonder if you know
What it means, what it means
And I wonder if you know
What it means to find your dreams
And I wonder

[Kanye West and Labi Siffre:]
You say he get on your fucking nerves (And I wonder)
You hope that he get what he deserves—word! (And I wonder)
Do you even remember what the issue is?
You just trying to find where the tissue is
You can still be who you wish you is
It ain't happen yet, and that's what intuition is (And I wonder)
When you hop back in the car
Drive back to the crib, run back to their arms
The smokescreens, the chokes and the screams
You ever wonder what it all really means?

[Labi Siffre:]
And I wonder
If you know
What it means
What it means
And I wonder
If you know
What it means
To find your dreams, and I wonder

[Kanye West and Labi Siffre:]
And I'm back on my grind
A psychic read my lifeline, told me in my lifetime
My name would help light up the Chicago skyline
And that's why I'm (And I wonder)
Seven o'clock, that's prime-time
Heaven'll watch, God calling from the hotlines
Why he keep giving me hot lines?
I'm a star—how could I not shine? (And I wonder)
How many ladies in the house? (If you know)
How many ladies in the house without a spouse? (What it means)
Something in your blouse got me feeling so aroused (What it means)
What you about? (And I wonder)
On that independent shit (If you know)
Trade it all for a husband and some kids (What it means)
You ever wonder what it all really mean?
You wonder if you'll ever find your dreams?
To find your dreams come true
`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics5.addEventListener('click', () => {
        const lyrics = `"Good Life"
(feat. T-Pain)

[Kanye West and T-Pain:]
Like we always do at this time
I go for mine, I gots to shine
(Now throw your hands up in the sky)
I go go for mine, I gots to shine
(Now throw your hands up in the sky)
I'ma get on this TV momma, I'ma
I'ma put shit down
(Ayy) ayy (Ayy), ayy
(Ayy) ayy (Ayy), I'm good

[Kanye West:]
Welcome to the good life, where niggas who sell D
Won't even get pulled over in they new V
The good life, let's go on a living spree
Shit, they say the best things in life are free
The good life, it feel like Atlanta
It feel like L.A., it feel like Miami
It feel like NY, summertime Chi
Ah! (Now throw your hands up in the sky)
So I roll through good
Y'all pop the trunk, I pop the hood, Ferrari
And she got the goods
And she got that ass, I got to look, sorry!

Yo, it's got to be 'cause I'm seasoned
Haters give me them salty looks, Lawry's
50 told me, "Go 'head, switch the style up
And if they hate then let 'em hate and watch the money pile up"
The good life

[Kanye West and T-Pain:]
Now I, I go for mine, I got to shine
(Now throw your hands up in the sky)
Now I, I go for mine, I got to shine
(Now throw your hands up in the sky)
(I'ma get on this TV momma, I'ma)
(I'ma put shit down)
Ayy (Ayy), ayy (Ayy)
Ayy (Ayy), ayy (I'm good)

[Kanye West (T-Pain):]
Welcome to the good life!
Where we like the girls who ain't on TV
'Cause they got more (Ass than the models)
The good life, so keep it comin' with the bottles
'Cause she feel booze like she bombed at Apollo
The good life, it feel like Houston
It feel like Philly, it feel like D.C
It feel like VA or the Bay or Yay
Ayy, this is the good life (Welcome to the good life)
Homie, tell me what's good
Why I only got a problem when you in the hood (Welcome to the good life)
Like I'm new in the hood
The only thing I wish, I wish a nigga would (Welcome to the good life!)
He probably think he could
But, but, I don't think he should (Welcome to the good life)
50 told me, "Go 'head, switch the style up
And if they hate then let 'em hate and watch the money pile up"
The good life

[Kanye West and T-Pain:]
Now I, I go for mine, I gots to shine
(Now throw your hands up in the sky)
Now I, I go for mine, I gots to shine
(Now throw your hands up in the sky)
I'ma get on the TV momma, I'ma
I'ma put shit down
(Ayy) ayy (Ayy), ayy
(Ayy) ayy (Ayy), I'm good

[Kanye West:]
Have you ever popped champagne on a plane, while gettin' some brain
Whipped it out, she said, "I never seen Snakes on a Plane."
Whether you broke or rich you gotta get this
Havin' money's not everything, not havin' it is
I was splurgin' on Tryst, but when I get my card back
Activated, I'm back to Vegas
'Cause (The good life) I always had a passion for flashin'
Befo' I had it, I closed my eyes and imagined the good life

[T-Pain:]
Better than the life I lived
When I thought that I was gonna go crazy
And now my grandmamma
Ain't the only girl callin' me "baby"
If you feelin' me now
Then put your hands up in the sky, and let me hear you say
Hey, hey, ooh I'm good!`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics6.addEventListener('click', () => {
        const lyrics = `"Can't Tell Me Nothing"

[Kanye (Young Jeezy):]
La, la, la la (Yeah)
Wait 'til I get my money right

[Kanye West:]
I had a dream I could buy my way to heaven
When I awoke, I spent that on a necklace
I told God I'd be back in a second
Man it's so hard not to act reckless
To whom much is given, much is tested
Get arrested guess until he get the message
I feel the pressure, under more scrutiny
And what I do? Act more stupidly
Bought more jewelry, more Louis V
My mama couldn't get through to me
The drama, people suing me
I'm on TV talking like it's just you and me
I'm just saying how I feel man
I ain't one of the Cosby's, I ain't go to Hillman
I guess the money should've changed him
I guess I should've forgot where I came from

[Kanye (Young Jeezy):]
La, la, la la
Wait 'til I get my money right
La, la, la la
Then you can't tell me nothing, right?
Excuse me, was you saying something?
Uh-uh, you can't tell me nothing
You can't tell me nothing
Uh-uh, you can't tell me nothing

[Kanye West:]
Let up the suicide doors
This is my life, homie, you decide yours
I know that Jesus died for us
But I couldn't tell ya who decide wars
So I parallel double parked that motherfucker sideways
Old folks talking 'bout, "Back in my day"
But homie, this is my day
Class started 2 hours ago, oh, am I late?
No, I already graduated
And you can live through anything if Magic made it
They say I talk with so much emphasis
Ooh, they so sensitive
Don't ever fix your lips like collagen
And say something when you gon' end up apolog'ing
Let me know if it's a problem then, aight, man, holla, then

[Kanye (Young Jeezy):]
La, la, la la
Wait 'til I get my money right
La, la, la la
Then you can't tell me nothing, right?
Excuse me, was you saying something?
Uh-uh, you can't tell me nothing
You can't tell me nothing
Uh-uh, you can't tell me nothing

[Kanye West:]
Let the champagne splash, let that man get cash
Let that man get past
He don't even stop to get gas
If he can move through the rumors, he can drive off of fumes 'cause
How he move in a room full of no's?
How he stay faithful in a room full of hoes?
Must be the pharaohs, he in tune with his soul
So when he buried in a tomb full of gold
Treasure, what's your pleasure?
Life is a, UH, depending how you dress her
So if the Devil wear Prada, Adam Eve wear nada
I'm in between but way more fresher
With way less effort, 'cause when you try hard
That's when you die hard
Your homies looking like why God
When they reminisce over you, my God

[Kanye (Young Jeezy):]
La, la, la la
Wait 'til I get my money right
La, la, la la
Then you can't tell me nothing, right?
Excuse me, was you saying something?
Uh-uh, you can't tell me nothing
You can't tell me nothing
Uh-uh, you can't tell me nothing

[Kanye (Young Jeezy):]
La, la, la la
Wait 'til I get my money right
La, la, la la
Then you can't tell me nothing, right?
(I'm serious, nigga, I got money)`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics7.addEventListener('click', () => {
        const lyrics = `"Barry Bonds"
(feat. Lil Wayne)

[Kanye West:]
It's what you all been waiting for, ain't it?
What people pay paper for, damn it
They can't stand it, they want something new
So let's get re-acquainted, became the hood favorite
I can't even explain it, I surprise myself too

[Kanye West:]
Life of a Don, lights keep glowin'
Comin' in the club wit' that fresh shit on
Wit' somethin' crazy on my arm, uh-huh-hum
And here's another hit, Barry Bonds

[Kanye West:]
We outta here, baby! We outta here, baby!
We outta here, baby!

[Kanye West:]
Dude! Fresh off the plane—Konnichiwa, bitches
Turn around another plane, my passport on pivot
Ask for it, I did it—that asshole done did it
Talked it, then he lived it, spit it, then he shit it
I don't need writers, I might bounce ideas
But only I could come up with some shit like this
I done played the underdog my whole career
I've been a very good sport, haven't I, this year?
They say, "He goin' crazy and we seen this before"
But I'm doing pretty good as far as geniuses go
And I'm doing pretty hood in my pink polo
Nigga, please, how you gon' say I ain't no Lo-head?
'Cause my Dior got me more model head?
I'm insulted, you should go 'head
And bow so hard 'til your knees hit your forehead
And the flow just hit code red
Top five MCs, you ain't gotta remind me
Top five MCs, you gotta rewind me
I'm high up on the line, you could get behind me
But my head's so big, you can't sit behind me

[Kanye West:]
Life of a Don, lights keep glowin'
Comin' in the club wit' that fresh shit on
Wit' somethin' crazy on my arm, uh-huh-hum
And here's another hit, Barry Bonds

[Lil Wayne:]
Yeah, yeah, we outta here, baby!
What? What? We outta here, baby!
Ayy, Mr. West, we so outta here, baby!
And me? I'm Mr. Weezy Baby, yeah!

[Lil Wayne:]
I'm so bright, not shady
My teeth and my ice so white like Shady
Ice in my teeth so refrigerated
I'm so fuckin' good like I'm sleepin' with Meagan (Ha!)
I'm all about my Franklins, Lincolns, and Reagans
Whenever they make them, I shall have them
Oops, I meant "have them"—I'm so crazy
But if you play crazy, you be sleeping with daisies
I'm such a havoc—oops, I meant "havoc"
And my drink's still pinker than the Easter rabbit
And I'm still col' like Keyshia's family
Stove on my waist turn beef to patties (Bow!)
And I ate it 'cause I'm so avid (No homo)
And I don't front and I don't go backwards
And I don't practice, and I don't lack shit
And you can get buried—suck my bat, bitch (ha!)

[Kanye West & Lil Wayne:]
We outta here, baby!
We outta here, baby!
We outta here, baby!
Swag at a hundred and climbin', baby, yeah!

[Lil Wayne:]
Life of a Don, lights keep glowin'
Comin' in the club wit' that fresh shit on
Wit' somethin' crazy on my arm, uh-huh-hum
And here's another hit, Barry Bonds
`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics8.addEventListener('click', () => {
        const lyrics = `"Drunk & Hot Girls"
(feat. Mos Def)

[Mos Def:]
La-da-da da-da da-da da-da da-da da
Blap!

[Kanye West:]
We go through too much bullshit
Just to mess with these drunk and hot girls
We go through too much bullshit
Just to mess with these drunk and hot girls
We go
Through too
Much shit
To mess
Mess with
These drunk
All of these drunk and hot girls

[Kanye West:]
Driving around town looking for the best spot
For the drunk and hot girls
Up in the club look at here what we got
Some drunk and hot girls
Stop dancing with your girlfriend and come dance with me
Stop talking 'bout your boyfriend since he is not me
Stop running up my tab 'cause these drinks is not free
You drunk and hot girl

[Kanye West:]
We go through too much bullshit
Just to mess with these drunk and hot girls
We go through too much bullshit
Just to mess with these drunk and hot girls
We go
Through too
Much shit
To mess
Mess with
These drunk
All of these drunk and hot girls

[Kanye West:]
I don't want to drop your friends off, I just want you
You drunk and hot girl
You want to sit down but we hit the drive-thru
You drunk and hot girl
Please don't fall asleep, baby, we almost back
Please don't throw up in the car, we almost crashed
Oh, now you sober, how'd I know you'd say that
You drunk and hot girl

[Kanye West:]
We go through too much bullshit
Just to mess with these drunk and hot girls
We go through too much bullshit
Just to mess with these drunk and hot girls
We go
Through too
Much shit
To mess
Mess with
These drunk
All of these drunk and hot girls

[Mos Def:]
Love the dangerous necessity that people seek
Without regard to where they are
The human heart is curious
Above all things, love, the lights are low, your eyes are bright
The music plays, it's sweet delight
It's out of sight, I'm feeling right
Your dress is tight
Oh how, I want you right now

[Kanye West with Mos Def:]
Don't tell me, you sing, you about to get a deal
You drunk and hot girl
"Ah da da da da," That's how the fuck you sound
You drunk and hot girl, yeah
You only live once, do whatever you like
I thought I'd be with you for only one night
Now I'm with this girl for the rest of my life
That drunk and hot girl

[Kanye West with Mos Def:]
We go through too much bullshit just to mess with these drunk and hot girls
(A little sippy sippy)
We gonna through too much bullshit just to mess with these drunk and hot girls
(Did she say she want a brewski?)
We go
Through too
Much shit
To mess
Mess with
These drunk
All of these drunk and hot girls
`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics9.addEventListener('click', () => {
        const lyrics = `"Flashing Lights"
(feat. Dwele)

Flashing lights (lights, lights)
Flashing lights (lights, lights)
Flashing lights (lights, lights)
Flashing lights (lights, lights)

[Kanye West:]
She don't believe in shootin' stars
But she believe in shoes and cars
Wood floors in the new apartment
Couture from the store's departments
You more like "love to start shit"
I'm more of the trips to Florida
Ordered the hors d'oeuvres, views of the water
Straight from a page of your favorite author
And the weather so breezy
Man, why can't life always be this easy?
She in the mirror dancin' so sleazy
I get a call like, "Where are you, Yeezy?"
And try to hit you with the ol-wu-wopte
'Til I got flashed by the paparazzi
Damn, these niggas got me
I hate these niggas more than the Nazis

[Dwele:]
As I recall, I know you love to show off
But I never thought that you would take it this far
What do I know?
Flashing lights (lights, lights)
What do I know? Know
Flashing lights (lights, lights)

[Kanye West:]
I know it's been a while, sweetheart
We hardly talk, I was doin' my thang
I know I was foul, baby
Aye, babe, lately, you've been all on my brain
And if somebody would've told me a month ago
Frontin', though, yo, I wouldn't wanna know
If somebody would've told me a year ago
It'll go get this difficult
Feelin' like Katrina with no FEMA
Like Martin with no Gina
Like a flight with no visa
First class with the seat back, I still see ya
In my past, you on the other side of the glass
Of my memory's museum
I'm just sayin', hey, Mona Lisa
Come home, you know you can't roam without Caesar

[Dwele:]
As I recall, I know you love to show off
But I never thought that you would take it this far
What do I know?
Flashing lights (lights, lights)
What do I know? Know
Flashing lights (lights, lights)

[Dwele:]
As you recall, you know I love to show off
But you never thought that I would take it this far
What do you know?
Flashing lights, lights, lights
What do you know? Know
Flashing lights (lights, lights)
Flashing lights (lights, lights, lights, lights…)`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics10.addEventListener('click', () => {
        const lyrics = `"Everything I Am"

Damn, here we go again
Common passed on this beat, I made it to a jam
Now everything I'm not made me everything I am
Damn, here we go again
People talking shit, but when the shit hit the fan
Everything I'm not made me everything I am

I'll never be picture-perfect Beyoncé
Be light as Al B or black as Chauncey
Remember him from Blackstreet? He was black as the street was
I'll never be laid back as this beat was
I never could see why people'll reach a
Fake-ass facade that they couldn't keep up
You see how I creeped up?
You see how I played a big role in Chicago like Queen Latifah?
I'll never rock a mink coat in the winter time like Killa Cam
Or rock some mink boots in the summertime like will.i.am
Let me know if you feel it, man
'Cause everything I'm not made me everything I am

Damn, here we go again
Everybody saying what's not for him
But everything I'm not made me everything I am
Damn, here we go again
People talking shit, but when the shit hit the fan
Everything I'm not made me everything I am

And I'm back to tear it up
Haters start your engines, I hear 'em gearing up
People talk so much shit about me at barbershops
They forget to get their hair cut
Okay, fair enough, the streets is flaring up
'Cause they want gun talk, or I don't wear enough
Baggy clothes, Reeboks, or A-di-dos
Can I add that he do spaz out at his shows
So say goodbye to the NAACP Award
Goodbye to the India Arie Award
They'd rather give me the N-nigga Please Award
But I'll just take the I Got a Lot of Cheese Award

Damn, here we go again
Bum-tu-bum-bum-bum
But everything I'm not made me everything I am
Damn, here we go again
People talking shit, but when the shit hit the fan
Everything I'm not made me everything I am

I know people wouldn't usually rap this
But I got the facts to back this
Just last year, Chicago had over 600 caskets
Man, killing's some wack shit
Oh, I forgot, 'cept for when niggas is rappin'
Do you know what it feel like when people is passin'?
He got changed over his chains a block off Ashland
I need to talk to somebody, pastor
The church want tithe, so I can't afford to pay
Pink slip on my door, 'cause I can't afford to stay
My fifteen seconds up, but I got more to say
That's enough Mr. West, please, no more today

Damn, here we go again
Everybody saying what's not for him
But everything I'm not made me everything I am
Damn, here we go again
People talking shit, but when the shit hit the fan
Everything I'm not made me everything I am`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics11.addEventListener('click', () => {
        const lyrics = `"The Glory"

[Kanye West and Laura Nyro:]
In my soul
Gonna take you to the glory
Goal, in my mind I can't study war, yeah my
I can't study war, yeah my
I can't study war, yeah my
I can't study war, yeah my

[Kanye West (John Legend):]
Now where the South Side
I can't study no, yeah my
I can't study no, yeah my
Now where the West Side
I can't study no, yeah my
I can't study no, yeah my

[Kanye West:]
Can I talk my shit again?
Even if I don't hit again?
Dog, are you fucking kidding?
My hat, my shoes, my coat
Louis Vuitton stitch, with Donatella Versace
That's Louis Vuitton, bitch
I think Hennessy, I drink, I'm gone
Off that Bacardi Limon and Corona. I'm zonin'
Class back in session so I upped it a grade
In two years Dwayne Wayne became Dwyane Wade
And hey, please don't start me
I'm like Gnarls Barkley meets Charles Barkley
I'm pop the Barkers, I'm hood the Parkers
While y'all was in limbo I raised the bar up
I touched on everything
Married to the game, rock a chain 'stead of wedding ring
Y'all bridesmaids catch the garter
On nights when 'Ye romance
Cameras flash so much
That I gotta do that Yayo dance
I'm on a world tour with Common, my man
After each and every show a couple dykes in the van
It's easy
The hood love to listen to Jeezy and Weezy
And, oh yeah, Yeezy
I did it for the glory

[Kanye West (John Legend):]
Yeah my
I can't study no, yeah my
I can't study no, yeah my
The glory
I can't study no, yeah my
I can't study no, yeah my
I did it for the glory
I can't study no, yeah my
I can't study no, yeah my
The glory
I can't study no, yeah my
I can't study no, yeah my

[Kanye West:]
What am I supposed to do now?
Man the game all messed up
How I'm suppose to stand out when everybody get dressed up?
So yeah, at the Grammys I went ultra Travolta
Yeah that tuxedo might have been a little guido
But with my ego
I can stand there in a Speedo
And be looked at like a fucking hero
The glory, the story, the chain, the polo, the night
The grind, the empty bottles of No-Doz
Tank on empty, whipping my mamma's Volvo
I spent that gas money on clothes with logos
The fur is Hermes, shit that you don't floss
The Goyard so hard man, I'm Hugo's boss
Why I gotta ask what that TUDOR cost?
House on the hill
Two doors from Tracey Ross
And I'm asking about her girlfriends
Yeah, the dark skin'ed ones
She asking about the speed boats yeah I admit we rented 'em
When you meet me in person what do you feel like?
I know, I know I look better in real life
I hear people compare themselves to big a lot
You know B.I.G. and Pac, you know to get it hot
I guess after I live I wanna be compared to B.I.G.
Any one: Big Pun, Big L or Notorious
'Till then, get money and stunt and stay glorious
And I'm gonna stop killing these niggas soon as the chorus hit
Yeah I'mma stop killing these niggas soon as the chorus hit
These haters be killing themselves they wanna come and get the glory

[Kanye West (John Legend):]
Yeah my
I can't study no, yeah my
I can't study no, yeah my
The glory
I can't study no, yeah my
I can't study no, yeah my
Now where the South Side
I can't study no, yeah my
I can't study no, yeah my
Now where the West Side
I can't study no, yeah my
I can't study no, yeah my

[Laura Nyro:]
I can't study war, yeah my
I can't study war, yeah my
I can't study war, yeah my
I can't study war, yeah my`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics12.addEventListener('click', () => {
        const lyrics = `"Homecoming"

[Kanye West:]
Yeah
And you say Chi city!
Chi city! Chi city!

[Chris Martin and Kanye West:]
I'm comin' home again
Do you think about me now and then? (Yeah)
Do you think about me now and then?
'Cause I'm comin' home again (Ow!)
-Min' home again

[Kanye West:]
I met this girl when I was three years old
And what I loved most, she had so much soul
She said, "Excuse me, little homie, I know you don't know me
But my name is Windy and I like to blow trees."
And from that point, I never blow her off
Niggas come from out of town, I like to show her off
They like to act tough, she like to toe 'em off
And make 'em straighten up their hat 'cause she know they soft
And when I grew up, she showed me how to go downtown
In the nighttime, her face lit up, so astoundin'
I told her in my heart is where she'll always be
She never messed with entertainers 'cause they always leave
She said, "It felt like they walked and drove on me."
Knew I was gang affiliated, got on TV and told on me
I guess that's why last winter she got so cold on me
She said, "'Ye, keep makin' that, keep makin' that platinum and gold for me!"

[Chris Martin:]
I'm comin' home again
Do you think about me now and then?
Do you think about me now and then?
'Cause I'm comin' home again
-Min' home again
Do you think about me now and then?
Do you think about me now and then? Oh!
Now I'm comin' home again
Maybe we can start again

[Kanye West:]
But if you really cared for her
Then you wouldn't've never hit the airport to follow your dreams
Sometimes I still talk to her
But when I talk to her, it always seems like she talkin' 'bout me
She said, "You left your kids, and they just like you
They wanna rap and make soul beats just like you
But they just not you," and I just got through
Talkin' 'bout what niggas tryin' to do: just not new
Now everybody got the game figured out all wrong
I guess you never know what you got 'til it's gone
I guess that's why I'm here and I can't come back home
And guess when I heard that? When I was back home
Every interview, I'm representin' you, makin' you proud
Reach for the stars, so if you fall, you land on a cloud
Jump in the crowd, spark your lighters, wave 'em around
If you don't know by now, I'm talkin' 'bout Chi-Town

[Chris Martin:]
I'm comin' home again
Do you think about me now and then?
Do you think about me now and then?
'Cause I'm comin' home again
-Min' home again
Baby, do you remember when
Fireworks at Lake Michigan? Oh!
Now I'm comin' home again
-Min' home again
Baby, do you remember when
Fireworks at Lake Michigan? Oh!
Now I'm comin' home again
Maybe we can start again

[Chris Martin:]
Loyal, loyal
Comin' home again
Loyal, loyal
Comin' home again
Maybe we can start again`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics13.addEventListener('click', () => {
        const lyrics = `"Big Brother"

Stadium status

My big brother was B.I.G.'s brother
Used to be Dame and Biggs' brother
Who was Hip Hop brother, who was No I.D. friend
No I.D. my mentor, now let the story begin

It's the Hard Knock Life Tour, sellout
Picture us in the mall, coppin' Iceberg and yell out "Jigga"
Yeah, that's what we'll yell out, yell out
You know the name do I gotta spell out or tell 'bout
J-A-Y, and 'Ye so shy
Now he won't even step to his idol to say hi
Standing there like a mime and let the chance pass by
Back of my mind, "He could change your life
With all these beats I did, at least let him hear it
At least you can brag to your friends back at the gig"
But he got me out my momma crib
Then he help me get my momma a crib

Big brother was B.I.G.'s brother
Used to be Dame and Biggs' brother
Who was Hip Hop brother, who was No I.D. friend
No I.D. my mentor, now let the story begin, begin
Let the story begin
If you feel the way I feel why don't you wave your hands?

Fresh off the plane, I'm off to Baseline
Nothing handed out, I'm 'bout to take mine
'Round the same time of that Blueprint 1
And these beats in my pocket was that blueprint for him
I'd play my little songs in that old back room
He'd bob his head and say "Damn! Oh, that's you?"
But by The Black Album, I was blacking out
Partyin' S.O.B.'s and we had packed a crowd
Big brother got his show up at Madison Square
And I'm like "Yeah, yeah, we gon' be there" but
Not only did I not get a chance to spit it
Carline told me I could buy two tickets
I guess big brother was thinkin' a little different
And kept little brother at bay, at a distance
But everything that I felt was more bogus
Only made me more focused, only wrote more potent
Only thing I wanna know is why I get looked over
I guess I'll understand when I get more older
Big brother saw me at the bottom of the totem
Now I'm on the top and everybody on the scrotum

My big brother was B.I.G.'s brother
Used to be Dame and Biggs' brother
Who was Hip Hop brother, who was No I.D. friend
No I.D. my mentor, now let the story begin, begin
Let the story begin
If you feel the way I feel why don't you wave your hands?

Have you ever walked in the shadow of a giant?
Not only a client, the Presidito, hola, Hovito
The game gettin' foul so here's a free throw
I was always on the other side of the peephole
Then I dropped "Jesus Walks" now I'm on the steeple
And we know, "New Jack City"—got to keep my brother
But to be number one I'ma beat my brother
On that "Diamonds" remix I swore I spazzed
Then my big brother came through and kicked my ass
Sibling rivalry, only I could see
It was the pride in me that was drivin' me
At the Grammys I said, "I inspired me"
But my big brother who I always tried to be
When I kicked a flow it was like pick-and-roll
Cause even if he gave me the rock, it's give-and-go
I guess Beanie's style was more of a slam dunk
And my shit was more like a finger roll
But I had them singles though
And them hoes at the show gonna mingle, yo, heh, y'all know
I told Jay I did a song with Coldplay
Next thing I know he got a song with Coldplay
Back in my mind I'm like, "Damn, no way"
Translate, español: "No way, José"
Then I went and told Jay Brown
Shoulda known that was gonna come back around
Shoulda talked to you like a man, shoulda told you first
But I told somebody else and that's what made shit worse

My big brother was B.I.G.'s brother
So here's a few words from your kid brother
If you admire somebody you should go on 'head tell 'em
People never get the flowers while they can still smell 'em
A idol in my eyes, god of the game
Heart of the City, Roc-a-Fella chain
Never be the same, never be another
Number one, Young Hov, also my big brother

My big brother was B.I.G.'s brother
Used to be Dame and Biggs' brother
Who was Hip Hop brother, who was No I.D. friend
No I.D., my mentor, and that's where the story ends

Toomp killed this shit`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics14.addEventListener('click', () => {
        const lyrics = `"Good Night"
(feat. Al Be Back, Mos Def)

[Mos Def:]
I'm not sure anymore, more
Who is knocking at my door, door
All the faces that I know
Ja make them so sunny and true

[Mos Def:]
I don't wanna say goodbye, to you
So I'll just say good night, to you
My people, no goodbyes to you
I'm just gon' say good night

[Kanye West:]
Uh
Good night
Right now I can see it so vivid
Like it was just yesterday, like I could relive it
Me and my grandparents on a field trip
And I'm the little kid tryna touch the exhibits
But it'll fade before I get to get a hold of that
Man, I wish I could stop time like a photograph
Every joke that they told I'd know to laugh
Man (man), I wouldn't let a moment pass
What do it mean when you dream that you fallin'?
What do it mean when you dream that you ballin'?
What do it mean when you never dream at all then
And you don't really know 'cause you can't recall them?
It's sorta fly you get a chance to say hi to
People you never got a chance to say bye to
Maybe you could pull em up outta your dreams
Into real life (real life), if you try to
So close (so close), but so far (but so far)
And so far (and so far), no cigar (no cigar)
We can't dwell on the past, all we got is today
So I'ma live like it's no tomorrow, no goodbyes

[Mos Def:]
I don't wanna say goodbye, to you
So I'll just say good night, to you
My people, no goodbyes to you
I'm just gon' say good night

[Al Be Back:]
Uh, to you
If I part, my art will live through you
Dream beautiful and unusual
Wake up like every day new to you
Stay true to you, a hood musical
My art will live through you
Dream beautiful and unusual
Wake up like every day new to you
Stay true to you, a hood musical

[Mos Def:]
I don't wanna say goodbye, to you
So I'll just say good night, to you
My people, no goodbyes to you
I'm just gon' say good night

[Mos Def:]
I'm not sure anymore, more
Who is knocking at my door, door
All the faces that I know
Ja make them so sunny and true
I'm not sure anymore, more
Who is knocking at my door, door
All the faces that I know
Ja make them so sunny and true
I'm not sure anymore, more
Who is knocking at my door, door
All the faces that I know
Ja make them so sunny and true
I'm not sure anymore, more
Who is knocking at my door, door
All the faces that I know
Ja make them so sunny and true`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics15.addEventListener('click', () => {
        const lyrics = `"Bittersweet Poetry"
(feat. John Mayer)

[John Mayer:]
Bittersweet
You're gonna be the death of me
I don't want you, but I need you
I love you and hate you at the very same time
Bittersweet

[Kanye West:]
See, what I want so much should never hurt this bad
Never did this before, that's what the virgin says
We've been generally warned, that's what the surgeon says
God, talk to me now, this is an emergency
And she claims she only with me for the currency
You cut me deep, bitch, cut me like surgery
And I was too proud to admit that it was hurting me
I'd never do that to you, at least purposely
We breaking up again, we making up again
But we don't love no more, I guess we fucking then
Have you ever felt you ever want to kill her?
And you mix them emotions with tequila
And you mix that with a little bad advice
On one of them bad nights, y'all have a bad fight
And you talk about her family, her aunts and shit
And she say, "Motherfucker, your momma's a bitch"
You know, domestic drama and shit, all the attitude
I'd never hit a girl, but I'll shake the shit out of you
But I'mma be the bigger man, big pimpin' like Jigga man
Oh, I guess I figure it's

[John Mayer:]
Bittersweet
You're gonna be the death of me
I don't want you, but I need you
I love you, hate you at the very same time
Bittersweet

[Kanye West:]
See, what I want so much should never hurt this bad
Never did this before, that's what the virgin says
We've been generally warned, that's what the surgeon says
God, talk to me now, this is an emergency
And my niggas said I shouldn't let it worry me
I need to focus on the girls we getting currently
But I been thinking and it got me back to sinking
And this relationship, it even got me back to drinking
Now this Hennessy, uh, it's gonna be the death of me
And I always thought that you having my child was our destiny
But I can't even vibe with you sexually
'Cause every time that I'd try, you would question me
Saying, "You fucking them girls, disrespecting me
You don't see how your lies is affecting me?
You don't see how our life was supposed to be?
And I never let a nigga get that close to me
And you ain't cracked up to what you were supposed to be
You always gone, you always be where them hoes will be"
And this the first time she ever spilled her soul to me

[John Mayer and Kanye West:]
Bittersweet (I fucked up and I know it, G)
You're gonna be the death of me (I guess it's bittersweet poetry)
I don't want you, but I need you
I love you and hate you at the very same time
Bittersweet
You're gonna be the death of me
I don't want you, but I need you
I love you and hate you at the very same time

[Kanye West:]
See, what I want so much should never hurt this bad
Never did this before, that's what the virgin says
We've been generally warned, that's what the surgeon says
God, talk to me now, this is an emergency
See, what I want so much should never hurt this bad
Never did this before, that's what the virgin says
We've been generally warned, that's what the surgeon says
God, talk to me now, this is an emergency

[John Mayer:]
Bittersweet
You're gonna be the death of me
I don't want you, but I need you
I love you and hate you at the very same time
(Bittersweet
You're gonna be the death of me
I don't want you
...very same time)`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });
</script>

<!-- Call up the footer-->
<?php
include 'includes/footer.php';
?>