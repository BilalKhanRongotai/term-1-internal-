<!-- Call up the header and navbar and set page title-->
<?php
$page_title = "Kanye West Presents: Good Music - Cruel Summer";
include 'includes/header.php';
include 'includes/nav.php';
?>

<!-- set the splitscreen -->
<div class="container" style="max-width:100%;">
    <div class="row split">
        <div class="col left" style="background-color:#7c7c7c;"> <!-- left col -->
            <div class="leftT" style="background-color:#747474;"></div> <!-- top section of left col -->
            <div id="leftM"> <!-- middle section of left col -->
                <!-- i frame for songs -->
                <iframe class="video" id="video-player" width="240px" height="240px" frameborder="0"></iframe> 

                 <!-- div for song lyrics -->
                <div id="LyricsContainer" style="display: none; max-height:205px; background-color:#e6e6e6; padding-left: 20px; padding-top: 10px;">  
                </div>

            </div>
            <div class=leftB style="background-color:#747474;"> <!-- bottom section of left col -->
            </div>

        </div>
        <!-- right col -->
        <div class="col right" style="background-color:#c4c4c4;"> 
            <br>
            <div class="albumcover"><img src="image/KWPGMCScover.jpeg" class="img-fluid" alt="Image could not load"></div> <!-- album cover -->
            <br>
            <h3 class="albumtitle">Kanye West Presents: Good Music - Cruel Summer</h3> <!-- title of the album -->
            <!-- Description/background of album -->
            <p class="albumdesp">Cruel Summer is a collaborative album by the artists of Kanye West's GOOD Music label, released in 2012. The album features contributions from a range of artists, including Kid Cudi, Pusha T, and Big Sean, as well as appearances from guest artists such as Jay-Z and R. Kelly.</p>
            <p class="albumdesp">The album's sound is characterized by its heavy use of electronic and trap-influenced beats, creating a high-energy and club-ready sound that remains a hallmark of modern hip-hop. Standout tracks such as "Mercy," "Clique," and "Cold" showcase the artists' lyrical abilities and their ability to create catchy, anthemic hooks.</p>
            <p class="albumdesp">The album also features a range of experimentation, such as on the atmospheric "To the World" and the haunting "Sin City." The album's production, led by West himself along with contributions from Hit-Boy and others, creates a cohesive and immersive listening experience that reflects the diverse talents of the artists involved.</p>
            <p class="albumdesp">Overall, Cruel Summer is a celebration of collaboration and creativity within the hip-hop community. Its high-energy sound and diverse range of influences continue to inspire and influence artists today, while its showcase of emerging talent from GOOD Music's roster helped to solidify the label's status as a major force in the industry.</p>

            <!-- tracklist -->
            <ul class="list-group">
                <li class="list-group-item albumtrack" style="background-color: #c4c4c4;">To The World <!-- Song title -->
                    <span class="artist">• Kanye West • R Kelly • Teyana Taylor</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="nAO5UJi1QEo"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics1" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #c4c4c4;">Clique <!-- Song title -->
                    <span class="artist">• Kanye West • Jay Z • Big Sean</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="aUAPsa5NfR4"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics2" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #c4c4c4;">Mercy.1 <!-- Song title -->
                    <span class="artist">• Kanye West • Big Sean • Pusha T • 2 Chainz</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="mT4xWPHM8SE"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics3" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #c4c4c4;">New God Flow.1 <!-- Song title -->
                    <span class="artist">• Kanye West • Pusha T • Ghostface Killah</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="lwkZBq_-G94"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics4" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #c4c4c4;">The Morning <!-- Song title -->
                    <span class="artist">• Raekwon • Pusha T • Common • 2 Chainz • CyHi • Kid Cudi</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="FMFkjC456lc"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics5" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #c4c4c4;">Cold.1 <!-- Song title -->
                    <span class="artist">• Kanye West • DJ Khaled</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="8ZE9vP3pyiw"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics6" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #c4c4c4;">Higher <!-- Song title -->
                    <span class="artist">• The-Dream • Pusha T • Ma$e • Cocaine 80s</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="VT6eQoTS31c"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics7" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #c4c4c4;">Sin City <!-- Song title -->
                    <span class="artist">• John Legend • Travis Scott • Teyana Taylow • CyHi • Malik Yusef</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="nO9rxmVOFGU"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics8" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #c4c4c4;">The One <!-- Song title -->
                    <span class="artist">• Kanye West • Big Sean • 2 Chainz • Marsha Ambrosius</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="cwKIioh25r8"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics9" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #c4c4c4;">Creepers <!-- Song title -->
                    <span class="artist">• Kid Cudi</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="_8W_bOBq01M"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics10" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #c4c4c4;">Bliss <!-- Song title -->
                    <span class="artist">• John Legend • Teyana Taylor</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="8VVjVQ_G5k4"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics11" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #c4c4c4;">Don't Like.1 <!-- Song title -->
                    <span class="artist">• Kanye West • Chief Keef • Pusha T • Big Sean • Jadakiss</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="n3yyNfZS7pQ"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics12" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
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
    // Change the content of the div when buttons are clicked
    lyrics1.addEventListener('click', () => {
        const lyrics = `"To The World"
(feat. R. Kelly & Teyana Taylor)

[R. Kelly:]
Let me see you put your middle fingers up
To the world, I made up in my mind (ohh)
I'm doin' things my way, I'm burnin' shit down tonight
I'm doin' things my way (ohh)
It's my way or the highway, let me say it one more time
Middle fingers up to the world, to the world
To the wor-or-or-or-or-or-or-or-or-or-or-orld
To the world, to the world
To the wor-or-or-or-or-or-or-or-or-or-or-orld
Let me see you put your middle fingers up!
Middle fingers up!

[R. Kelly:]
(Motherfucker) Deuces minus one
Middle finger to the sky tonight (Ay, ay, ay)
The whole world is a couch
Bitch, I'm Rick James tonight (I don't give a fuck)
Throw it up (ay) throw it up (ay) cause you can't take it with you
Funny how they wait 'til you gone just to miss you
To the world (ay) to the world (ay) then I'm on my Sinatra
I'm doing it my way, let's take it a notch up
Take it u-u-u-up

[R. Kelly:]
Let me see you put your middle fingers up!
To the world, I made up in my mind (ohh)
Doing things my way, I'm burning shit down tonight
I'm doing things my way (ohh)
It's my way or the highway, let me say it one more time
Middle fingers up to the world, to the world
To the wor-or-or-or-or-or-or-or-or-or-or-orld

[Kanye West:]
Mmm, ain't this some shit? Pulled up in the A-V-entador
And the doors, raise up like praise the Lord
Did the fashion show, and a tour, this the movie and the score
This a ghetto opera, Francis Foreign Car Coppola
I need a new crib to hold my plaques, Rick Ross had told me that
Said I be all up in Goldman Sachs, like these niggas tryna hold me back
These niggas tryna hold me back, I'm just tryna protect my stacks
Mitt Romney don't pay no tax, Mitt Romney don't pay no tax
Chi-Town 'til I'm on my back, Chi-Town 'til I'm on my back
Only nigga in Beverly Hills, where the hell is Axel Foley at?
"Ease up there, baby boy": Ving Rhames told Jody that
R. Kelly and the God of rap, shitting on you, holy crap

[R. Kelly:]
Let me see you put your middle fingers up!
To the world, to the world
To the wor-or-or-or-or-or-or-or-or-or-or-orld
To the world, to the world
To the wor-or-or-or-or-or-or-or-or-or-or-orld
Let me see you put your middle fingers up!

[Teyana Taylor:]
I could give it all up, but it's not enough
Ay ay, here you go, my middle finger
To the world, to the world, from the ground to the moon
Hills to the mountains, yeah, hands to the roof
Give it up, give it up, won't let you deny me
Makin' you love me, makin' you love me`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics2.addEventListener('click', () => {
        const lyrics = `"Clique"
(with Big Sean, Jay-Z)

[James Fauntleroy and Big Sean:]
What of the dollar you murdered for?
Is that the one fighting for your soul?
Or your brother's the one that you're running from?
But if you got money, fuck it, 'cause I want some
B-I-G, who fuckin' with me?
Oh, God! Whoa, OK

[Big Sean:]
Ain't nobody fuckin' with my clique
Clique, clique, clique, clique
Ain't nobody fresher than my muh'fuckin' clique
Clique, clique, clique, clique
As I look around, they don't do it like my clique
Clique, clique, clique, clique
And all these bad bitches, man
They want the-, they want the-, they want the-

[Big Sean:]
(B-I-G, oh, God! Go)
I tell a bad bitch do whatever I say
My block behind me, like I'm coming out the driveway
It's grind day, from Friday to next Friday
I been up straight for nine days, I need a spa day (spa day)
Yup, she tryin' to get me that poon-tang
I might let my crew bang, my crew deeper than Wu-Tang
I'm rollin' with... fuck I'm saying? Girl, you know my crew name
You know 2 Chainz? Scrrr!
I'm pullin' up in that Bruce Wayne
But I'm the fuckin' villain
Man, they kneelin' when I'm walking in the buildin'
Freaky women I be feelin' from the bank accounts I'm fillin'
What a feelin'! Ah man, they gotta be
Young player from the D
That's killing everything that he see for the dough

[Big Sean:]
Ain't nobody fuckin' with my clique
Clique, clique, clique, clique
Ain't nobody fresher than my muh'fuckin' clique
Clique, clique, clique, clique
As I look around, they don't do it like my clique
Clique, clique, clique, clique
And all these bad bitches, man
They want the, they want the, they want the

[Jay-Z:]
(Click clack, stick 'em up!)
Yeah, I'm talkin' Ye, yeah, I'm talkin' Rih
Yeah, I'm talkin' B, nigga, I'm talkin' me
Yeah, I'm talkin' bossy, I ain't talkin' Kelis
Your money too short, you can't be talking to me
Yeah, I'm talkin' LeBron, we ball in our family tree
G.O.O.D. Music drug-dealing cousin
Ain't nothin' fuckin' with we, me
Turn that 62 to 125, 125 to a 250
250 to a half a million, ain't nothin' nobody can do with me
Now, who with me? ¡Vámonos! Call me Hov or Jefe
Translation: I'm the shit, 'least that what my neck say
'Least that what my check say, lost my homie for a decade
Nigga down for like 12 years
Ain't hug his son since the second grade
Uh, he never told—who he gonna tell?
We top of the totem pole
It's the Dream Team meets the Supreme Team
And all our eyes green, it only means one thing
You ain't fuckin' with the clique

[Big Sean:]
Ain't nobody fuckin' with my clique
Clique, clique, clique, clique
Ain't nobody fresher than my muh'fuckin' clique
Clique, clique, clique, clique
As I look around, they don't do it like my clique
Clique, clique, clique, clique
And all these bad bitches, man
They want the, they want the, they want the

[Kanye West:]
Break records at Louis, ate breakfast at Gucci
My girl a superstar all from a home movie
Bow on our arrival, the un-American idols
What niggas did in Paris, got 'em hangin' off the Eiffel
Yeah, I'm talkin' business, we talkin' CIA
I'm talkin' George Tenet, I seen him the other day
He asked me about my Maybach, think he had the same
Except mine tinted and his might have been rented
You know, white people get money, don't spend it
Or maybe they get money, buy a business
I rather buy 80 gold chains and go ign'ant
I know Spike Lee gon' kill me, but let me finish
Blame it on the pigment, we livin' no limits
Them gold Master P ceilings was just a figment
Of our imagination, MTV cribs
Now I'm lookin' at a crib right next to where TC lives
That's Tom Cruise, whatever she accuse
He wasn't really drunk, he just had a frew brews
Pass the refreshments, a cool, cool beverage
Everything I do need a news crew's presence
Speedboat swerve, homie, watch out for the waves
I'm way too black to burn from sunrays
So I just meditate at the home in Pompeii
About how I could build a new Rome in one day
Every time I'm in Vegas they screamin' like he's Elvis
But I just wanna design hotels and nail it
Shit is real, got me feelin' Israelian
Like Bar Refaeli, or Gisele—no, that's Brazilian
Went through, deep depression when my mama passed
Suicide, what kinda talk is that?
But I been talkin' to God for so long
That if you look at my life I guess he's talkin' back
Fuckin' with my clique

[Big Sean:]
Ain't nobody fresher than my muh'fuckin' clique
As I look around, they don't do it like my clique
And all these bad bitches, man
They want the, they want the, they want the
Go!`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics3.addEventListener('click', () => {
        const lyrics = `"Mercy"
(with Big Sean, Pusha T & 2 Chainz)

[Fuzzy Jones:]
Well, it is a weepin' and a moanin' and a gnashin' of teeth
It is a weepin' and a mournin' and a gnashin' of teeth
It is a—when it comes to my sound which is the champion sound
Believe, believe

[YB, Big Sean and Fuzzy Jones:]
O-o-o-o-o-OK, Lamborghini Mercy
Your chick, she so thirsty
I-I-I-I-I'm in that two-seat Lambo
With your girl, she tryna jerk me (Believe)
O-o-o-o-o-OK, Lamborghini Mercy
Your chick, she so thirsty
I-I-I-I-I'm in that two-seat Lambo
With your girl, she tryna jerk me
O-o-o-o-o-OK, Lamborghini Mercy (Swerve)
Your chick, she so thirsty (Swerve)
I-I-I-I-I'm in that two-seat Lambo
With your girl, she tryna jerk me (Woah, believe)
O-o-o-o-o-OK, Lamborghini Mercy
Your chick, she so thirsty (Boy)
I-I-I-I-I'm in that two-seat Lambo (Boy)
With your girl, she tryna jerk me

[Big Sean and Kanye West:]
OK, drop it to the floor, make that ass shake (Shake, shake)
Woah, make the ground move: that's an ass quake
Built a house up on that ass: that's an ass-state
Roll–roll–roll my weed on it: that's an ass tray
Say, Ye, say, Ye, don't we do this every day–day? (Huh?)
I work them long nights, long nights to get a payday (Huh?)
Finally got paid, now I need shade and a vacay
And niggas still hatin'
So much hate, I need a AK (AK)
Now we out in Paris, yeah, I'm Perrierin'
White girls politickin': that's that Sarah Palin
Get–get–get–get–get–gettin' hot, Californicatin'
I give her that D, 'cause that's where I was born and raised in

[YB, Big Sean and Fuzzy Jones:]
O-o-o-o-o-OK, Lamborghini Mercy (Swerve)
Your chick, she so thirsty (Swerve)
I-I-I-I-I'm in that two-seat Lambo (Swerve)
With your girl, she tryna jerk me (Swerve, believe)
O-o-o-o-o-OK, Lamborghini Mercy (Swerve)
Your chick, she so thirsty (Swerve)
I-I-I-I-I'm in that two-seat Lambo (Swerve)
With your girl, she tryna jerk me (Swerve)

[Fuzzy Jones and Big Sean:]
Well, it is a weepin' and a moanin' (Swerve)
And a gnashin' of teeth (Swerve)
It is a weepin' and a mournin' (Swerve)
And a gnashin' of teeth (Swerve)
It is a—when it comes to my sound (Swerve)
Which is the champion sound (Swerve)
Believe, believe (Swerve)
Believe, believe (Swerve)

[Pusha T:]
Yuugh! It's prime time, my top back, this pimp game, ho
I'm red leather, this cocaine, I'm Rick James, ho
I'm bill-droppin', Ms. Pac-Man, this pill-poppin' ass ho
I'm poppin' too, these blue dolphins need two coffins
All she want is some heel money
All she need is some bill money
He take his time, he counts it out
I weighs it up, that's real money
Check the neck, check the wrist
Them heads turnin': that's exorcist
My Audemars like Mardi Gras
That's Swiss time, and that's excellence
Two-door preference
Roof gone, George Jefferson
That white frost on that pound cake
So your Duncan Hines is irrelevant, woo
Lambo Murciélago
She go wherever I go
Wherever we go, we do it pronto, it's like—

[YB, Big Sean and Fuzzy Jones:]
O-o-o-o-o-OK, Lamborghini Mercy (Swerve)
Your chick, she so thirsty (Swerve)
I-I-I-I-I'm in that two-seat Lambo (Swerve)
With your girl, she tryna jerk me (Swerve, believe)
O-o-o-o-o-OK, Lamborghini Mercy (Swerve)
Your chick, she so thirsty (Swerve)
I-I-I-I-I'm in that two-seat Lambo (Swerve)
With your girl, she tryna jerk me (Swerve)

[Fuzzy Jones and Big Sean:]
Well, it is a weepin' and a moanin' (Swerve)
And a gnashin' of teeth (Swerve)
It is a weepin' and a mournin' (Swerve)
And a gnashin' of teeth (Swerve)
It is a—when it comes to my sound (Swerve)
Which is the champion sound (Swerve)
Believe, believe (Swerve)
Believe (Swerve)

[Fuzzy Jones:]
Well, it is a weepin' and a moanin'
And a gnashin' of teeth in the dancehall
And who no have teeth gwan rub pon dem gums
Cuh when time it comes to my sound
Which is the champion sound
The bugle has blown fi many times
And it still have one more time left
Cuh the amount of stripe weh deh pon our shoulder

[Kanye West and 2 Chainz:]
Let the suicide doors up
I threw suicides on the tour bus
I threw suicides on the private jet
You know what that mean, I'm fly to death
I step in Def Jam buildin' like I'm the shit
Tell 'em gimme fifty million or I'ma quit
Most rappers' taste level ain't at my waist level
Turn up the bass 'til it's up-in-yo-face level
Don't do no press but I get the most press kit
Plus, yo, my bitch make your bitch look like Precious
Somethin' 'bout Mary, she gone off that molly
Now the whole party is melting like Dalí
Now everybody is movin' they body
Don't sell me apartment, I'll move in the lobby (Yah)
Niggas is loiterin' just to feel important
You gon' see lawyers and niggas in Jordans (2 Chainz)

[2 Chainz and Big Sean:]
OK, now catch up to my campaign
Coupe the color of mayonnaise
I'm drunk and high at the same time
Drinkin' champagne on the airplane (Tell 'em)
Spit rounds like a gun range (Baow)
Beat it up like Rampage
Hundred bands, cut your girl
Now your girl need a Band-Aid (Damn)
Grade A, A1
Chain the color of Akon
Black diamonds, backpack rhymin'
Co-signed by Louis Vuitton (Yep)
Horsepower, horsepower
All this Polo on, I got horsepower
Pound of this cost four thousand
Now I make it rain, she want more showers
Rain (Rain) pourin' (Pourin')
All my cars is foreign (Foreign)
All my broads is foreign (Foreign)
Money tall like Jordan

[YB, Big Sean and Fuzzy Jones:]
O-o-o-o-o-OK, Lamborghini Mercy (Swerve)
Your chick, she so thirsty (Swerve)
I-I-I-I-I'm in that two-seat Lambo (Swerve)
With your girl, she tryna jerk me (Swerve)
O-o-o-o-o-OK, Lamborghini Mercy (Swerve)
Your chick, she so thirsty (Swerve)
I-I-I-I-I'm in that two-seat Lambo (Swerve, believe)
With your girl, she tryna jerk me (Swerve, believe)

[Fuzzy Jones and Big Sean:]
Well, it is a weepin' and a moanin' (Swerve)
And a gnashin' of teeth (Swerve)
It is a weepin' and a mournin' (Swerve)
And a gnashin' of teeth (Swerve)
It is a—when it comes to my sound (Swerve)
Which is the champion sound (Swerve)
Believe, believe (Swerve)
Believe, believe (Swerve)
Well, it is a weepin' and a moanin' and a gnashin' of teeth
It is a weepin' and a mournin' and a gnashin' of teeth
It is a—when it comes to my sound which is the champion sound
Believe, believe, believe, believe`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics4.addEventListener('click', () => {
        const lyrics = `"New God Flow"
(feat. Pusha T & Ghostface Killah)

[Ghostface Killah:]
Shake that body, party that bod-
Shake that body, party that bod-
Shake that body, party that body
Come and have a good time with G-O-D

[Pusha T and Kanye West:]
I believe there's a God above me
I'm just the god of everything else
I put holes in everything else
"New God Flow," fuck everything else
Supreme dope dealer, write it in bold letters
They love a nigga's spirit like Pac at the Coachella
They said Push ain't fit with the umbrella
But I was good with the yay' as a whole-seller
I think it's good that 'Ye got a blow dealer
A hot temper, matched with a cold killer
I came aboard for more than just to rhyme with him
Think '99, when Puff woulda had Shyne with him, yuugh!
Matchin' Daytonas, rose gold on us
Goin' HAM in Ibiza done took a toll on us
But since you overdo it, I'ma pour more
Well if you goin' coupe, I'm goin' four door

[Ghostface Killah and Kanye West:]
Shake that body, party that bod- (that's rare, nigga!)
Shake that body, party that bod- (Ric Flair, nigga!)
Shake that body, party that body (yeah, nigga!)
Come and have a good time with G-O-D (yeah)
Shake that body, party that bod- (whoa!)
Shake that body, party that bod- (whoa!)
Shake that body, party that body (it's the new God flow, niggas)
Come and have a good time with G-O-D (yo)

[Pusha T:]
Step on they necks 'til they can't breathe
Claim they five stars but sell you dreams
They say death multiplies by threes
Line them all up and let's just see
Fuck em 'Ye, fuck em 'Ye!
I wouldn't piss on that nigga with Grand Marnier
(Woo!) They shit is shoppin' at Targét
(Woo!) My shit is luxury Balmain (ay!)
I'm balling, Amar'e
A nick sold in the park then I want in
What's a king without a crown, nigga? (What?)
What's a circus without you clown niggas? (Hah)
What's a brick from an outta-town nigga
When you flood and you can drown niggas? (Yuuugh!)
Here's the G.O.O.D. Music golden child
M.A. dollar sign, can't nobody hold me down

[Ghostface Killah:]
Shake that body, party that bod-
Shake that body, party that bod-
Shake that body, party that body
Come and have a good time with G-O-D

[Kanye West:]
Hold up, I ain't trying to stunt, man
But the Yeezys jumped over the Jumpman
Went from most hated to the champion god flow
I guess that's a feeling only me and LeBron know
I'm living three dreams
Biggie Smalls', Dr. King, Rodney King's, uh
Cause we can't get along – no resolution
'Til we drown all these haters, rest in peace to Whitney Houston
Cars, money, girls and the clothes
Aww man, you sold your soul
Naw man, mad people was frontin'
Aww man, made somethin' from nothin'
Picture workin' so hard, and you can't cut through
That can mess up your whole life, like an uncle that touched you
What has the world come to? I'm from the 312
Where cops don't come through and dreams don't come true
Like there the God go, in his Murcielago
From workin' McDonald's, barely payin' the car note
He even got enough, to get his mama a condo
Then they ran up and shot him, right in front of his mom
40 killings in a weekend, 40 killings in a week
Man, the summer too hot, you can feel it in the street
Welcome to Sunday service, if you hope to someday serve us
We got green in our eyes, just follow my Erick Sermon
Did Moses not part the water with the cane?
Did strippers not make an ark when I made it rain?
Did Yeezy not get signed by Hov and Dame?
And ran to Jacob and made the new Jesus chains?
In Jesus' name, let the choir say
"I'm on fire, ay," that's what Richard Pryor say
And we'll annihilate anybody that violate
Ask any dope boy you know, they admire 'Ye

[Ghostface Killah:]
Shake that body, party that bod-
Shake that body, party that bod-
Shake that body, party that body
Come and have a good time with G-O-D

[Ghostface Killah:]
Yeah nigga, yeah I had my, I had my Jesus piece since '94
I don't know what I, I don't know what y'all talkin' bout
And my eagle — still got it all in the bag, B
Yeah, all I did was play possum
Yo, come on

[Ghostface Killah:]
600 Cuban cigar in the big tub
Medallion on, Dove soap on the fresh cut
With soap suds on the MAC-11
My big lion haven't ate since 12, and it's after seven
We feed the nigga like 40 chickens
His tail wag when I send him a bag with just one victim
Uh-huh, now let me show you what my closet on
Gems in the display case, call it a rock-a-thon
I got soccer moms payin' for cock
Asians get it from behind while they cleanin' their wok
Comin' with flows that is toxic
Deadly fumes when I'm in the room
Repercussions occur when you dry snitch
Red light, green light, one, two, three
Look mean, got my machine, cried and hit you, please
Say shake that body, scar up that body
Should I kill him now Tone? I said probably
Side bets are four and better
Bust hammers with pot holders
And yo, dead a cow for his fuckin' leather
I'm not bow-legged but old school like Redd Foxx
My favorite color in my hustle days was red tops
My gold eagle arm shitted out a red rock
Threw it off my project roof, saw red dots
Kanye, shine a light on my Wallabees
You can have a good time with G.O.D

[Ghostface Killah and Kanye West:]
Shake that body, party that bod- (that's rare, nigga!)
Shake that body, party that bod- (Ric Flair, nigga!)
Shake that body, party that body (yeah, nigga!)
Come and have a good time with G-O-D (yeah)
Shake that body, party that bod- (whoa!)
Shake that body, party that bod- (whoa!)
Shake that body, party that body (it's the new God flow, niggas)
Come and have a good time with G-O-D (yo)

[Kanye West:]
G.O.O.D. Music! G.O.O.D. Music!
G.O.O.D. Music! G.O.O.D. Music!
And all my niggas say "G.O.O.D. Music!"
And all my ladies say "G.O.O.D. Music!"
I don't know but I've been told
(I don't know but I've been told)
If you get fresh get all the hoes
(If you get fresh get all the hoes)
I'm way fresher than all my foes
(I'm way fresher than all my foes)
Somebody, please pick out they clothes
(Somebody, please pick out they clothes)
And all my niggas say "G.O.O.D. Music!"
And all my ladies say "G.O.O.D. Music!"
Who runnin' shit today? G.O.O.D. Music!
Who runnin' shit today? G.O.O.D. Music!`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics5.addEventListener('click', () => {
        const lyrics = `"The Morning"
(feat. Common, Cyhi the Prynce, Kid Cudi, D'banj, Raekwon & 2 Chainz)

[D'banj:]
Stuttering
Giving 'em rest and making love again
In my best, I be the run again
And I have the man them stuttering, -ing

[Andrea Martin:]
I'm getting this nigga in the morning
He gon' think he been chiefing, just too long when
He see me in the evening, wanna catch all these feelings
Well, let me be the first to get mine, oh!

[Raekwon:]
Yeah, ayo, ayo
Barbeque and blow in the back of the crib
Sitting and counting, smoking a spliff, this shit's a gift
All my niggas' watches is rough
Grabbin' our crotches, yellin', "What up?" The jeans cost 500? Fuck
Stop it, keep baking, see the smell, it's a statement
One freeze of this shit, you won't feel your legs kid
I'm a gangster corporate hustler, my voice is illustrious
Hounded by vicious dons, nigga we armed, trust me bruh
They yellin', "Chef, kill the plate with the cooks"
I say yay with two chains on, we common, let's push
Burn another bush then burn another, we brothers
Love us or not, the Mark Zuckerbergs of the block
Hug a knot, staying rich, we was built for the guap
Park the green six deuce on the deuce just props
Rock a kilt, mean Glock, I'm all machinery, ock
Cling to me, now see how the scenery rock, yo?

[Andrea Martin:]
I'm getting this nigga in the morning
He gon' think he been chiefing, just too long when
He see me in the evening, wanna catch all these feelings
Well, let me be the first to get mine, oh!

[Common:]
I was born by a lake, chicken shack and a church
That mean the flow got wings and it come from the dirt
Godly, I know she wanna test the 'Rari
Eye on a dollar like Illuminati
Life is foggy, tryna see through the mist of it
Could have been living it, you was Mrs. Mischievous
This is just a letter to better your development (Oh!)
Situation delicate

[Pusha T:]
Some claim God body, blame Illuminati
All 'cause his pockets now knotty as his hair, yeah
All Sonny, no Cher, only solitaires
You clusterfucks could cluster up
On tippy-toe and still not muster up
So it's (Ashes to ashes, dust to dust)
In God we trust, the game is all us
'Til the sky calls or it's flames on us
Push

[Andrea Martin:]
I'm getting this nigga in the morning
He gon' think he been chiefing, just too long when
He see me in the evening, wanna catch all these feelings
Well, let me be the first to get mine, oh!

[2 Chainz:]
2 Chainz!
I'm chilling in my camo, flipping through the channel
On my G.O.O.D. Music shit, my logo's a Lambo
Four doors of ammo, ammunition I'm pitching
To make your body switch another position

[Cyhi the Prynce:]
I hope the people is listening
I could never sell my soul, I gave it back to God at my christening
It's tickling when I hear what haters be whispering
What makes you think an Illuminati would ever let some niggas in?
Huh, fake friends and siblings
Like to wish you well but ain't never flip the nickel in
Haters wanna pull they pistol when they see me in this race car
But you can't spell war without an A-R
15, I was pushing carts at K-Mart
By 21, they said I'd be inside a graveyard
Can't wait to get that black American Express
So I can show them white folks how to really pull the race card

[Kid Cudi and Kanye West:]
(Whoa) Yeah, you feeling on top now
Getting that money nigga? (You, you sold your soul)
(Hey) Yeah, you feeling on top now
(Hey) Getting that money nigga? (You sold your soul)
(Whoa) Yeah, you feeling on top now
Getting that money nigga?
(Hey) Naw man, mad people was fronting
(Hey) Aw man, made something from nothing

[Kanye West:]
I treat the label like money from my shows
G.O.O.D. woulda been G.O.D. except I added more O's
If I knew she was cheating and still bought her more clothes
It's cause I was too busy with my Baltimore, you know
Some people call that the art of war, you know
I guess it depends what you falling for, the clothes?
Cars, money, girls and the clothes
Aww money, you sold your soul
Nah man, mad people was fronting
Goddamn, we made something from nothing`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics6.addEventListener('click', () => {
        const lyrics = `"Cold"
(feat. DJ Khaled)

[Kanye West and DJ Khaled:]
Uhh, can the headphones go louder?
Kanye West!
Yup, Swag King Cole, yup
DJ Khaled!

[Kanye West:]
Can't a young nigga get money any more?
Tell PETA my mink is dragging on the floor
Can I have a bad bitch without no flaws
Come to meet me without no drawers?

[Kanye West:]
Dinner with Anna Wintour, racing with Anja Rubik
I told you motherfuckers it was more than the music
In the projects one day, to Project Runway
We done heard all that loud-ass talking, we're used to it
I'm from where shorties fucked up, double-cupped up
Might even kill somebody and YouTube it
To whoever think their words affect me is too stupid
And if you can do it better than me, then you do it!
We flyer than a parakeet, floatin' with no parachute
Six thousand dollar pair of shoes, we made it to the Paris news!
Don't talk about style cause I embarrass you
Shut the fuck up when you talk to me 'fore I embarrass you

[Kanye West:]
Can't a young nigga get money any more?
Tell PETA my mink is dragging on the floor
Can I have a bad bitch without no flaws
Come to meet me without no drawers?

[Kanye West:]
And the whole industry want to fuck your old chick
Only nigga I got respect for is Wiz
And I'll admit, I had fell in love with Kim
Around the same time she had fell in love with him
Well that's cool, baby girl, do ya thang
Lucky I ain't had Jay drop him from the team
La Familia, Roc Nation
We in the building, we still keep it basement
Flyer than a parakeet, floatin' with no parachute
Six thousand dollar pair of shoes, I made it to the Paris news
Don't talk about style cause I'll embarrass you
Shut the fuck up when you talk to me 'fore I embarrass you
G.O.O.D. Music, we fresh, we fresh
Anything else, we detest, detest
Bitch-ass niggas got ass and breasts
All that said, let me ask this quest'

[Kanye West:]
Can't a young nigga get money any more?
Tell PETA my mink is dragging on the floor
Can I have a bad bitch without no flaws
Come to meet me without

[Kanye West:]
Don't talk to me 'bout style, nigga, I'll motherfuckin' embarrass you
Talking 'bout clothes, I'll motherfuckin' embarrass you
Hollering 'bout some hoes, I'll motherfuckin' embarrass you
Way too cold, I promise you'll need some Theraflu
(Uh, uh, uh, uh, uh) Get the Theraflu
(Uh, uh-uh, uh-uh, uh) Get the Theraflu
(Uh, uh-uh, uh-uh, uh, uh-uh, uh-uh)
(Uh, uh-uh, uh-uh, uh) Get the Theraflu

[DJ Pharris:]
This Chicago, nigga
South Side, we in this bitch
East Side crazy, blow that loud
Low End, 39th, The Ickes
47th Street, Garfield Park, 79th
Stony Island, K-Town, Wild 100's
This Chi-Town, Dro City, The Village
Harvey World, O Block, 64th and Normal
64th and King Drive, what up?
83rd, Cottage Grove, the Gardens
This Chicago nigga!
The Dearborns, 55th, Cabrini-Green
Terror Town, West Side, Pocket Town
This Chicago! Halsted to the Ida B. Wells
New York City, Atlanta, London Town
Chiraq Drillinoise
This DJ Pharris, fuck around and get embarrassed`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics7.addEventListener('click', () => {
        const lyrics = `"Higher"
(feat. The-Dream & Mase)

[The Dream:]
Look at your money, ooh momma, this could be you
On the right side of this drop
Ooh momma, throw it in reverse
I call that back it up and drop a
Baby, baby baby, baby baby
Baby, baby baby, baby baby
Baby, baby baby, baby baby
Baby, baby baby, baby baby

[The Dream:]
Oh, girl, I think that she like
I got that shit that make niggas want fight
I got that shit that make bitches act right
Make bitches act out of spite, aight
Oh momma, I got that bomb
I got that shit make your ass go run
My shit knock, make niggas get guns
But the white girls say, "Where you get that cool beat from?"

[The Dream:]
She love it (she love it)
Every beat of the drum, she sprung
She say I make her wanna touch it, she love it (she love it)
She make me wanna touch it, I love it (I love it)

[The Dream:]
We buzzin', yeah
Higher than a motherfucker
Higher than a motherfucker
Higher than a motherfucker, yeah

[Pusha T:]
Yeah, I've been known to chase 'em, known to replace 'em
Shoe game outta this world, I outer space 'em
Known to have a hundred and one, like Dalmatians
Maybe if she special enough, I'll glass case her
Get caught cheating and I gotta let you stick me up
Let you shop 'til you drop as a pick-me-up
Bergdorf bandit, Barney's for the burglary
But these bands lift the whole store like Hercules
Get raunchy in Givenchy, my palm reads
Passports, Pinot Noir in arm's reach
Paddle shiftin', push-button, no car keys
The penthouses are poolside with palm trees

[The Dream:]
She love it (she love it)
Every beat of the drum, she sprung
She say I make her wanna touch it, she love it (she love it)
She make me wanna touch it, I love it (I love it)

[The Dream:]
We buzzin', yeah
Higher than a motherfucker
Higher than a motherfucker
Higher than a motherfucker, yeah

[Ma$e:]
Uh, one-two, one-two, guess who back again
Uh, Harlem in this-what? Yeezy let Manhattan in
Get my mic right, turn my levels up
Get the light right, turn my bezel up
You either bounce on it, go 'head throw your mouth on it
So many ghosts in my garage they think my house haunted
Long as my buckle say Hermes, the rumors I'm not concerned with
They wanna garnish my earnings before I send it I burn it
You know them people too convinced that my money's gettin' rinsed
Her Lou B's seven inch, they TMZ me through my tint
I bumped into Loon he like, "Well, as-salamu alaykum"
You know I ain't Muslim my nigga, I'm about my bacon
The shot niggas takin' you'd think I'm rollin' 'round with Reagan
A Mexican landscaping couldn't rake in what I'm makin'
Think you blew me up with your bougie butt
But you ain't slow me up, I'm on the charts, you move me up
I'm like a drug overlord, my jewelry's overboard
It's hard to believe dollar sign e-even know the Lord
Already wrote it off, so just ignore the cost
So when I'm rollin' off I'm showin' off with no remorse
Shamone!

[The Dream:]
We buzzin', yeah
Higher than a motherfucker
Higher than a motherfucker
Higher than a motherfucker, yeah

[James Fauntleroy:]
Bitch hold smoke longer
Chokehold so strong, broke your armor
Now you're wide open, right?
You ain't even smokin' right
Bitch hold the smoke
Cough hope, Harpo
Purple gotcha knocked out, now you know you're smokin' loud
You're higher than a motherfucker
High in this bitch, high as a motherfucker
I'm high and this bitch fine as a motherfucker
I'm high as a motherfucker
I hear sirens, she dying in this motherfucker
Moment of silence for this motherfucker
I'm just higher than a motherfucker
I'm higher than a motherfucker
I'm higher than a mother`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics8.addEventListener('click', () => {
        const lyrics = `"Sin City"
(feat. Teyana Taylor, CyHi The Prynce, Malik Yusef & Travis Scott)

[Travis Scott:]
10 A.M., it's Ransomnia
She see the dust, it's so obvious
Run from home, after tonight, we up out of here
Don't go home, 'cause they just ran me up out of there
All of those drunken nights, then fuckin' every night
She run her mouth but can't eat right?
Don't read between the line and figure out how to be white
She smelled the line, baby you know you don't need white
Now look what we did now, the cops behind us
Ran that red light, did you have to be mindless?
SMH, we all know that cocaine killed Abel
From the scholar, letters devour this
She stepped into hell, 'cause winter got cold
Don't look in her eyes, you might see straight to her soul
Don't say yes to that good, 'cause you'll never know
'Cause we lost in the city where sin is no biggy

[Teyana Taylor:]
I'm here with open arms and I got her
Here is where her heart belongs
Her heart belongs with me
Here is where her heart
I'm here and I won't go without her
This is where her heart belongs
It should be here with me
Here is where her heart

[Teyana Taylor and John Legend:]
I beg for mercy today
They won't take me away
Take me away from you
Don't know what I would do
Don't let us die in vain
Don't let them see our pain
Wash these demons away
Wash these demons away

[Malik Yusef:]
You are all unwelcome to Sin City
Yet the population still increases its density
And that increases its intensity
Which increases the propensity
To complicate your simplicity
No matter your ethnicity
All for the sake of publicity, in this city

[CyHi The Prynce:]
Huh, bad bitches with ass shots
Use a house as a stash spot
Lexus coupe with the rag-top
I'm in the loop, boy I'm tied like an ascot
I used to run with the have-nots
Kept the ave hot just so we could have knots
A lot of niggas see they dreams in a glass pot
Until the judge throw you in that box and watch your ass rot
We broke all the commandments
Authentic, I'm hand-stitched
Come spend a day in my Hamlet
My city lost, some say it's Atlantis
I went to Cannes with a tan bitch, Francis
She rode the broom on the beach, that's a sand witch
So I ate her like it, haters hate to like it
Sex, drugs, and playin' dices, those are our favorite vices
But this life'll take a toll on ya
Well I guess you gotta pay the prices
I know who Christ is and he never hung with the saints
It makes no sense to save the righteous
By the age ten, we were caged in
Now they raise men in the state pen
Fake friends, forgive 'em for they sins
God bless the city, amen

[Teyana Taylor:]
I'm here with open arms and I got her
Here is where her heart belongs
Her heart belongs with me
Here is where her heart
I'm here and I won't go without her
This is where her heart belongs
It should be here with me

[Malik Yusef:]
And now I'm one of the residents
They walk with none of the repercuss but all of the decadence
And all the fuckin' debauchery
Adult film star, somebody's fuckin' watchin' me
I always feel like, I'm almost Phil like
'Cause I could feel it in the air tonight
I did some wrongs I wouldn't dare to right
And wrote some songs I wouldn't dare recite
But I am willing to share tonight
In the city that is as unfair as life`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics9.addEventListener('click', () => {
        const lyrics = `"The One"
(feat. 2 Chainz & Marsha Ambrosius)

[Marsha Ambrosius:]
The storm is on the horizon
I'm standing here alone
Got a pistol on my hip and it's gonna be some shit
If you want it then bring it on
See I'm a motherfuckin' soldier
And I'ma be here 'til it's done
And when they asking who I'm is, shit
You just tell them that I'm the one
(One, one, one)
Tell them that I'm the one
(One, one, one)
Tell them that I'm the one

[Kanye West:]
I'm the one, baby, yeah, I'm the one, baby
Since God gave his only begotten son, baby
It's hard preachin' the gospel to the slums lately
So I had to put the church on the drums, baby
You on a run, baby, you on a run, baby
You think you free but you a slave to the funds, baby
You think you me, but you ain't me, what you done lately?
Mhm that's cool but I been runnin' on the sun, baby
We on a galaxy the haters cannot visit
That's my reality so get off my Scott Disick
If you ever held a title belt, you would know how Michael felt
Tyson, Jackson, Jordan – Michael Phelps
Yeah, had to take it to another realm
Cause everything around me got me underwhelmed
Best way to describe my position is at the helm
Best way to describe my new whip – yeaaaalm!

[Marsha Ambrosius:]
The storm is on the horizon
I'm standing here alone
Got a pistol on my hip and it's gonna be some shit
If you want it then bring it on
See I'm a motherfuckin' soldier
And I'ma be here 'til it's done
And when they asking who I'm is, shit
You just tell them that I'm the one
(One, one, one)
Tell them that I'm the one
(One, one, one)
Tell them that I'm the one

[Big Sean:]
I told Detroit I'mma fuckin' get it
I told my brother we'll be fuckin' winnin'
Ye told me I'm the man for the job
So I told my mom, call her's up and tell 'em that she quittin'
Started off in that Chevrolet, but it's Ferraris I gotta drive
I'm on HBO with my entourage, I'm 5'9" fuckin' 9 to 5
I need a hundred million no compromise, I'm a double X-L nigga
Magazine and condom size, see what I seen and be traumatized
I don't wait, I marinate, variate, everyday
Every state, sold out, fuck around and need a barricade
My weed loud, I need a hearing aid
Livin' life behind a pair of shades
I be a billionaire if I could get a dollar
For all the bullshit that I hear a day
I did it

[Marsha Ambrosius:]
The storm is on the horizon
I'm standing here alone
Got a pistol on my hip and it's gonna be some shit
If you want it then bring it on
See I'm a motherfuckin' soldier
And I'ma be here 'til it's done
And when they asking who I'm is, shit
You just tell them that I'm the one
(One, one, one)
Tell them that I'm the one
(One, one, one)
Tell them that I'm the one

[2 Chainz:]
Treat the back seat like a sofa bed
Break bread with my niggas, call it profit sharing
This some good shit, but it get better
And yeah my bitch cold, nigga thin sweater
Like my verse suede and the beat leather
Just tryin' to stay above sea level
When my nigga went to jail, I said, "Free Gucci"
I done bought so much shit, I should get free Gucci
Bought my baby momma anaconda bags
I shouldn't have bought it all, I should've went and cut the grass
Snake ass niggas in my fuckin' face
Bring your girl here nigga so I could fuck her face
Yeah I run this place, this is cashmere swag
Niggas tread-millin' goin' nowhere fast
Sittin' court-side at the Hawks game
Louie's on, I could trip a fuckin' ball player

[James Fauntleroy:]
Fuck yeah, awesome, yeah I lost some, of my mind
And then I found peace, it was really kind
Of awesome, it's possible, goddamn right
Yeah I've been honest the whole time
Fuck yeah, awesome, yeah I lost some, of my mind
And then I found peace, it was really kind
Of awesome, it's possible, goddamn right
Yeah I've been honest the whole time`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics10.addEventListener('click', () => {
        const lyrics = `"Creepers"

Yeah, I see you hatin' over there
See you jockin' over there, see you lookin' at my girl over here
Why you worried 'bout the girl over here?
Keep your eyes over there, it is creepy when you stare
Come on, hey, I see you hatin' over there
I see you jockin' over there, think about your own life
Why you talkin' 'bout the young hippie?
I'm just doin' my thang, if you know what I mean, get it right
And they think they know
And they think they know the deal, for real
I'm just doin' my thang, if you know what I mean, get it right
And they think they know
And they think they know the deal, for real
I'm just doin' my thang, if you know what I mean, yo

I don't love who I am so I'm workin' on a fix
I don't need a bitch tryna tear my mind on my grip
If I had one wish, it'd be to have more wishes, duh
Fuck tryna make it rhyme
Throw them stones, with your bitch ass
Cutting me deep and even though I bleed
I stand alone, alone I'll be
Heart of a lion still shinin' in this sucker ass
Workin', workin', workin', for inner peace
Fightin' for the freedom of my soul, I can hear the speech
Yeah I mumble while I'm tripping on so many pills
Hah, they figured that they know a nigga

Yeah, I see you hatin' over there
See you jockin' over there, see you lookin' at my girl over here
Why you worried 'bout the girl over here?
Keep your eyes over there, it is creepy when you stare
Come on, hey, I see you hatin' over there
I see you jockin' over there, think about your own life
Why you talkin' 'bout the young hippie?
I'm just doin' my thang, if you know what I mean, get it right
And they think they know
And they think they know the deal, for real
I'm just doin' my thang, if you know what I mean, get it right
And they think they know
And they think they know the deal, for real
I'm just doin' my thang, if you know what I mean, yo`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics11.addEventListener('click', () => {
        const lyrics = `"Bliss"

[Teyana Taylor:]
Ooh baby, the day you stepped into my world
You noticed I'm that kind of girl
Who loves her diamonds and white pearls
Oh-whoa, oh-whoa-oh
So tempt me
To jet-set away in London, to sip on some tea
You surprise me with gifts from Tiffany
Oh (la la la la la la la la)
I love the way we livin' boy
But my daddy say, "You don't need that boy"
So let's run away, let's run away, way-way
Momma say I'm too young for love
And lovin' you is all I'm thinkin' of
My heart tells me that you're the one
It's the feeling you give, it is

[Teyana Taylor:]
Pure bliss
Like you've got the key to my heart
Simple as a touch and a kiss
Never knew a feeling like this
Pure bliss, pure bliss
Nobody can tear us apart
Baby it's as good as it gets (kiss kiss kiss)
Loving you will never be hard
This is pure bliss

[John Legend:]
I remember, when the pilot closed the door
He said, "It's time for lift-off"
You said, "What'd you choose me for?"
Don't ever wonder, cause you deserve the best
Once you reach the top, you'll never question why you left
Oh, my world is yours
What you waitin' for?
Let's run away, let's run away!
Our friends, say we're crazy
But we can't listen, baby
They've never had it like this
They don't know what it is

[John Legend and Teyana Taylor:]
Pure bliss
Like you've got the key to my heart
Simple as a touch and a kiss
Never knew a feeling like this
Pure bliss, pure bliss
Nobody can tear us apart
Baby, it's as good as it gets (kiss kiss kiss)
Loving you will never be hard
This is pure bliss`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics12.addEventListener('click', () => {
        const lyrics = `"I Don't Like"
(feat. Pusha T, Chief Keef, Jadakiss & Big Sean)

[Pusha T:]
Fraud niggas, y'all niggas, that's that shit I don't like
Your shit make-believe, rappin' about my own life
Real names kill things, that's that shit I won't write
'Cause my niggas still sellin' dope
Like they ain't on their third strikes
Campin' out in that corridor, fuck you waitin' on Jordans for?
I middle-man it for twenty-three
Just meet me somewhere 'round Baltimore
(Woo!) That's rare, nigga (Woo!) Ric Flair, nigga
(Woo!) The power's in my hair, nigga
(Woo!) I give this beat the chair, nigga
SoHo or Tribeca, three hoes: trifecta
Dope money, hope money, Hublot, my watch better
My pen's better, you don't write, trendsetter, you clone-like
Pay homage or K's vomit, ungrateful niggas I don't like—rrrah!

[Chief Keef (Pusha T):]
A fuck nigga, that's that shit I don't like (bang bang)
A snitch nigga, that's that shit I don't like (bang bang)
A bitch nigga, that's that shit I don't like (bang bang, ha ha!)
Sneak disser, that's that shit I don't like
(This Chicago, nigga!)

[Kanye West:]
They smile in my face is what I don't like
They steal your whole sound: that's a soundbite
The media crucify me like they did Christ
They want to find me not breathin' like they found Mike
(Whoa-oh-oh) A girl'll run her mouth only out of spite
(Whoa-oh-oh) But I'd never hit a woman, never in my life
(Ayy!) I was in too deep like Mekhi Phife'
(Ayy!) In that pussy so deep I could have drowned twice
(Whoa-oh-oh) Rose gold Jesus piece with the brown ice
(Whoa-oh-oh) Eatin' good: vegetarian with the brown rice
(Ayy!) Girls kissin' girls, 'cause it's hot, right?
(Ayy!) But unless they use a strap-on, then they not dykes
(Whoa-oh-oh) They ain't about that life, they ain't about that life
(Whoa-oh-oh) We hangin' out the window: it's about to be a Suge night
(Ayy!) Free Bump J, real nigga for life
(Ayy!) Shout-out to Derrick Rose, man, that nigga nice
(Whoa-oh-oh) Shoutout to L.E.P., Jay Boogie, right?
(Whoa-oh-oh) Chief Keef, King Louie, this is Chi, right? Right?!

[Chief Keef:]
A fuck nigga, that's that shit I don't like (right now)
A snitch nigga, that's that shit I don't like (right now)
A bitch nigga, that's that shit I don't like (right now)
Sneak disser, that's that shit I don't like
Don't like (like) don't like (right now)
A snitch nigga, that's that shit I don't like
(Young Chop on the beat)

[Chief Keef:]
Fake Gucci, that's that shit that I don't like (nah, nah)
Smokin' on this dope, higher than a kite
This bitch gon' love me now, she gon' let me pipe (nah)
Screamin', "Sosa, that's that nigga that I like!" (Sosa)
I don't want relations, I just want one night (one night)
'Cause a thirsty bitch, that's the shit that I don't like (nah)
I got tats up on my arm 'cause this shit is life (that's life, tatted)
And I stunt so much in clothes 'cause I'm livin' life (life)
I come up on the scene, and I'm stealin' light
Bitch, I'm high off life, got me feelin' right (300)
Bitch, I'm Chief Keef, fuck who don't like!
An-an-and bitch, we GBE, we just go on sight

[Chief Keef and Big Sean:]
A fuck nigga, that's that shit I don't like (right now)
A snitch nigga, that's that shit I don't like (right now)
A bitch nigga, that's that shit I don't like (right now)
Sneak disser, that's that shit I don't like
Chief Keef, Chi-Town, D-Town, you know?

[Big Sean:]
Whoa, we are not one and the same
Nigga, I'm fuckin' insane, fuck is you sayin'?
Yo' ass been doin' the same
Shit, not doin' what you sayin', dang
I told yo' old bitch she was fuckin' a lame
Turn one ho to a train
Blaow, blang, my niggas holdin' that pain
I just hope you been prayin'—bang bang!
Ridin' for my niggas and that's for life
High class, I'm just surrounded by these low lives
And I run this bitch like it's no lights
Goin' hard the whole night 'cause I ain't goin' back to my old life
I promise

[Chief Keef and Jadakiss:]
A fuck nigga, that's that shit I don't like (right now!)
A snitch nigga, that's that shit I don't like (nah!)
A bitch nigga, that's that shit I don't like (right now!)
Sneak disser, that's that shit I don't like
Heeeeh!

[Jadakiss:]
I done sold purp (purple), I done sold white (white)
Runnin' outta work, that's that shit I don't like (nah)
She never let me hit it (nah), she gave me dome twice (ha ha)
She blowin' up my phone, that's that bitch I don't like
Nah, jean jacket with the sleeves cut
Put the pressure on 'em, just when they think that I eased up
Thirty for the Cuban, 'nother thirty for the Jesus (uh-huh)
Believe in ourselves when nobody else believed us, suckers!

[Chief Keef:]
A fuck nigga, that's that shit I don't like (bang bang)
A snitch nigga, that's that shit I don't like (bang bang)
A bitch nigga, that's that shit I don't like (bang bang)
Sneak disser, that's that shit I don't like
`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });
</script>

<!-- Call up the footer-->
<?php
include 'includes/footer.php';
?>