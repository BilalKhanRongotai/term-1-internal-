<!-- Call up the header and navbar and set page title-->
<?php
$page_title = "Watch The Throne";
include 'includes/header.php';
include 'includes/nav.php';
?>

<!-- set the splitscreen -->
<div class="container" style="max-width:100%;">
    <div class="row split">
        <div class="col left" style="background-color:#e1c034;"> <!-- left col -->
            <div class="leftT" style="background-color:#f0d771;"></div> <!-- top section of left col -->
            <div id="leftM"> <!-- middle section of left col -->
                <!-- i frame for songs -->
                <iframe class="video" id="video-player" width="240px" height="240px" frameborder="0"></iframe> 

                 <!-- div for song lyrics -->
                <div id="LyricsContainer" style="display: none; max-height:205px; background-color:#ffe9a3; padding-left: 20px; padding-top: 10px;">  
                </div>

            </div>
            <div class=leftB style="background-color:#f0d771;"> <!-- bottom section of left col -->
            </div>

        </div>
        <!-- right col -->
        <div class="col right" style="background-color:#eccd4b;"> 
            <br>
            <div class="albumcover"><img src="image/WTTcover.jpeg" class="img-fluid" alt="Image could not load"></div> <!-- album cover -->
            <br>
            <h3 class="albumtitle">Watch The Throne</h3> <!-- title of the album -->
            <!-- Description/background of album -->
            <p class="albumdesp">Watch the Throne is a collaborative studio album by Jay-Z and Kanye West, released in 2011. The album represents a landmark moment in hip-hop, bringing together two of the genre's most influential and celebrated artists for a project that explores themes of luxury, excess, and power.</p>
            <p class="albumdesp">The album's opening track, "No Church in the Wild," sets the tone with its heavy percussion and commentary on social and political unrest. Other standout tracks such as "Niggas in Paris," "Otis," and "Gotta Have It" showcase the duo's lyrical prowess and their ability to create infectious, high-energy tracks.</p>
            <p class="albumdesp">The album also features a range of guest appearances, including Frank Ocean, Beyonce, and Kid Cudi, each adding their own unique flavor to the album's sound. The album's production, featuring contributions from Hit-Boy, Mike Dean, and others, is characterized by its opulence and grandeur, with orchestral arrangements and soaring synths providing a fitting backdrop to the duo's larger-than-life personas.</p>
            <p class="albumdesp">Overall, Watch the Throne is a landmark album that showcases the collaborative potential of hip-hop's biggest stars. Its themes of luxury and excess are juxtaposed with poignant social commentary, creating a thought-provoking and entertaining listening experience. The album's bold production and masterful lyricism continue to inspire and influence artists today.</p>

            <!-- tracklist -->
            <ul class="list-group">
                <li class="list-group-item albumtrack" style="background-color: #eccd4b;">No Church In The Wild <!-- Song title -->
                    <span class="artist">• Jay Z • Kanye West • Frank Ocean</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="MjcMfHRrNBA"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics1" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #eccd4b;">Lift Off <!-- Song title -->
                    <span class="artist">• Jay Z • Kanye West • Beyoncé</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="EWo6HUY_RrQ"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics2" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #eccd4b;">Niggas In Paris <!-- Song title -->
                    <span class="artist">• Jay Z • Kanye West</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="J9ZkorSMMIc"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics3" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #eccd4b;">Otis <!-- Song title -->
                    <span class="artist">• Jay Z • Kanye West • Otis Redding</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="LwPn3xPf3NQ"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics4" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #eccd4b;">Gotta Have It <!-- Song title -->
                    <span class="artist">• Jay Z • Kanye West</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="Qssp4u9t1CQ"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics5" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #eccd4b;">New Day <!-- Song title -->
                    <span class="artist">• Jay Z • Kanye West • La Roux</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="IDywouI85rM"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics6" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #eccd4b;">That's My Bitch <!-- Song title -->
                    <span class="artist">• Jay Z • Kanye West</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="0OyJXRx8ahM"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics7" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #eccd4b;">Welcome To The Jungle <!-- Song title -->
                    <span class="artist">• Jay Z • Kanye West • Swizz Beatz</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="_POxFM5RX1g"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics8" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #eccd4b;">Who Gon Stop Me <!-- Song title -->
                    <span class="artist">• Jay Z • Kanye West</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="ZI55AqRbi6Q"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics9" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #eccd4b;">Murder To Excellence <!-- Song title -->
                    <span class="artist">• Jay Z • Kanye West</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="HdPcPAVF8sM"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics10" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #eccd4b;">Made In America <!-- Song title -->
                    <span class="artist">• Jay Z • Kanye West • Frank Ocean</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="UN3Yhl6LzaU"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics11" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #eccd4b;">Why I Love You <!-- Song title -->
                    <span class="artist">• Jay Z • Kanye West • Mr. Hudson</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="W7hG-a25tQQ"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics12" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #eccd4b;">Illest Motherfucker Alive <!-- Song title -->
                    <span class="artist">• Jay Z • Kanye West</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="RXeERYB4GbU"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics13" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                    <span class="badge bg-secondary text-dark icon" title="Deluxe"><span class="fas fa-star"></span></span> <!-- Deluxe song symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #eccd4b;">H.A.M <!-- Song title -->
                    <span class="artist">• Jay Z • Kanye West</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="dudUcaDwXss"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics14" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                    <span class="badge bg-secondary text-dark icon" title="Deluxe"><span class="fas fa-star"></span></span> <!-- Deluxe song symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #eccd4b;">Primetime <!-- Song title -->
                    <span class="artist">• Kanye West • Jay Z</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="LJdX_pIn3tk"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics15" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                    <span class="badge bg-secondary text-dark icon" title="Deluxe"><span class="fas fa-star"></span></span> <!-- Deluxe song symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #eccd4b;">The Joy <!-- Song title -->
                    <span class="artist">• Jay Z • Kanye West • Curtis Mayfield</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="FFUXAiyp8aI"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics16" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
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

    // Change the content of the div when buttons are clicked
    lyrics1.addEventListener('click', () => {
        const lyrics = `"No Church In The Wild"
(feat. Frank Ocean)

[Frank Ocean:]
Human beings in a mob
What's a mob to a king? What's a king to a god?
What's a god to a non-believer who don't believe in anything?
Will he make it out alive? Alright, alright, no church in the wild

[Jay Z:]
Tears on the mausoleum floor
Blood stains the Colosseum doors
Lies on the lips of a priest
Thanksgiving disguised as a feast
Rolling in the Rolls Royce Corniche
Only the doctors got this, I'm hiding from police
Cocaine seats
All white like I got the whole thing bleached
Drug dealer chic
I'm wondering if a thug's prayers reach
Is Pious pious 'cause God loves pious?
Socrates asked, whose bias do y'all seek?
All for Plato, screech
I'm out here balling, I know y'all hear my sneaks
Jesus was a carpenter, Yeezy laid beats
Hova flow the Holy Ghost, get the hell up out your seats
Preach

[Frank Ocean:]
Human beings in a mob
What's a mob to a king? What's a king to a god?
What's a god to a non-believer who don't believe in anything?
Will he make it out alive? Alright, alright, no church in the wild

[The-Dream:]
I live by you, desire
I stand by you, walk through the fire
Your love is my scripture
Let me in through your encryption
Yeah, yeah

[Kanye West:]
Coke on her black skin made it stripe like a zebra
I call that jungle fever
You will not control the threesome
Just roll the weed up until I get me some
We formed a new religion
No sins as long as there's permission
And deception is the only felony
So never fuck nobody without telling me
Sunglasses and Advil
Last night was mad real
Sun coming up, 5 AM
I wonder if they got cabs still
Thinking 'bout the girl in all leopard
Who was rubbing the wood like Kiki Shepard
Two tattoos: one read "No Apologies"
The other said "Love is Cursed by Monogamy"
It's something that the pastor don't preach
It's something that a teacher can't teach
When we die, the money we can't keep
But we probably spend it all 'cause the pain ain't cheap
Preach

[Frank Ocean:]
Human beings in a mob
What's a mob to a king? What's a king to a god?
What's a god to a non-believer who don't believe in anything?
Will he make it out alive? Alright, alright, no church in the wild

[Frank Ocean:]
No church in the wild
No church in the wild
No church in the wild
`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics2.addEventListener('click', () => {
        const lyrics = `"Lift Off"
(feat. Beyonce)

[Jack King:]
All engines running

[Beyoncé:]
We gon' take it to the moon, take it to the stars
How many people you know can take it this far?
I'm supercharged
We 'bout to take this whole thing to Mars (Lift off)
Now we gon' take it to the moon, take it to the stars
We don't know what we could do to make it this far
So many scars
We 'bout to take this whole thing to Mars

[Kanye West:]
Lift off (lift off), lift off, takin' my coat off
Showing my tattoos, I'm such a show off, huh
I feel the pain and then roll off
I got the whole city, they about to go off
How many niggas with me up and in the aisle? (Lift off)
How many people want to roll on me now? (Lift off)
Like you know na na na, you know me by now (Lift off)
Know me (Lift off), know me by now

[Beyoncé:]
We gon' take it to the moon, take it to the stars
How many people you know can take it this far?
I'm supercharged
We 'bout to take this whole thing to Mars (Lift off)
Now we gon' take it to the moon, take it to the stars
We don't know what we could do to make it this far
So many scars
We 'bout to take this whole thing to Mars

[Kanye West:]
Lift off (Lift off), off, ah, like you know, na-na-na
You know me by now, know me, know me by now
You know me, know me by now, know me, know me by now

[Jay-Z:]
Lift off
Rappers hear Watch the Throne, they gon' be pissed off
Earth is boring to 'em, shit is making my dick soft
When you earn hard as me, eventually you hit a big wall
5-4, 3-2, we need fuel, lift off

[Beyoncé:]
Now we gon' take it to the moon, take it to the stars
How many people you know can take it this far?
I'm supercharged
We 'bout to take this whole thing to Mars (All engines running)
Now we gon' take it to the moon, take it to the stars
We don't know what we could do to make it this far
So many scars
We 'bout to take this whole thing to Mars (Lift off)

[Jack King:]
(Lift off) 20 seconds and counting (Lift off)
(Lift off) T minus 15 seconds, guidance is internal (Lift off)
12, 11, 10, 9, ignition sequence start
6, 5, 4, 3, 2, 1, 0, all engines running
Lift off, we have a lift off (Lift off, lift off, lift off, lift off...)

[Beyoncé:]
Jump
Now we gon', now we gon', now we gon', now we gon' (J-jump)
Now we gon' take it to the moon
Now we gon', now we gon' (J-j-jump)
We gon' take it to the moon
Take it to the stars (J-j-jump)
We gon' take it to the moon
Take it to the stars
How many people you know can take it this far?
Take it to the stars
How many people you know can take it this far?
Now we gon', now we gon', now we gon', now we gon', now`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics3.addEventListener('click', () => {
        const lyrics = `"Niggas In Paris"

["Blades of Glory":]
"We're going to skate to one song, one song only"

Ball so hard motherfuckers wanna fine me

[Jay-Z:]
So I ball so hard motherfuckers wanna fine me
But first niggas gotta find me
What's fifty grand to a motherfucker like me?
Can you please remind me?
(Ball so hard) This shit crazy
Y'all don't know that don't shit faze me
The Nets could go 0 for 82
And I'd look at you like this shit gravy
(Ball so hard) This shit weird
We ain't even 'posed to be here
(Ball so hard) Since we here
It's only right that we'd be fair
Psycho: I'm liable to go Michael, take your pick
Jackson, Tyson, Jordan, Game 6
(Ball so hard) Got a broken clock
Rollies that don't tick-tock
Audemars that's losing time
Hidden behind all these big rocks
(B-ball so hard) I'm shocked too
I'm supposed to be locked up too
If you escaped what I've escaped
You'd be in Paris getting fucked up too
(B-ball so hard) Let's get faded
Le Meurice for like six days
Gold bottles, scold models
Spillin' Ace on my sick J's
(Ball so hard) Bitch, behave
Just might let you meet 'Ye
Chi-Town's D. Rose
I'm moving the Nets to BK

[Jay-Z and Kanye West:]
Ball so hard motherfuckers wanna fine me
That shit cray, that shit cray, that shit cray
B-ball so hard motherfuckers wanna fine me
That shit cray, that shit cray, that shit cray

[Kanye West and Jay-Z:]
She said, "'Ye, can we get married at the mall?"
I said, "Look, you need to crawl 'fore you ball
Come and meet me in the bathroom stall
And show me why you deserve to have it all"
(Ball so hard) That shit cray, ain't it, Jay?
(B-ball so hard) What she order, fish fillet?
(B-ball so hard) "Your whip so cold" – this old thing?
(Ball so hard) Act like you'll ever be around motherfuckers like this again
Bougie girl, grab my hand
Fuck that bitch; she don't wanna dance
Excuse my French, but I'm in France, ah ah, I'm just sayin'
Prince Williams ain't do it right if you ask me
'Cause I was him I would have married Kate and Ashley
What's Gucci, my nigga? What's Louis, my killer?
What's drugs, my dealer? What's that jacket, Margiela?
Doctors say I'm the illest 'cause I'm suffering from realness
Got my niggas in Paris and they going gorillas, huh

["Blades of Glory":]
"I don't even know what that means
No one knows what it means, but it's provocative
No, it's not, it's gross
Gets the people going"

[Jay-Z:]
Ball so hard motherfuckers wanna fine me
B-ball so hard motherfuckers wanna fine me

[Kanye West, Jay-Z:]
You are now watching the throne
Don't let me get in my zone
Don't let me get in my zone
Don't let me get in my zone
These other niggas is lyin'
Actin' like the summer ain't mine
(I got that hot bitch in my home)
(You know how many hot bitches I own?)
Don't let me get in my zone
Don't let me get in my zone
Don't let me get in my zone
Don't let me get in my zone
The stars is in the building
They hands is to the ceiling
I know I'm 'bout to kill it
How you know? I got that feeling
You are now watching the throne
Don't let me into my zone
Don't let me into my zone
(I'm definitely in my zone, zone, zone, zone, zone)`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics4.addEventListener('click', () => {
        const lyrics = `"Otis"
(feat. Otis Redding)

[Otis Redding and Jay-Z:]
It makes it easier, easier to bear
You won't regret it, no, no, no
Some girls, they don't forget it
Love is their only happiness
Squeeze her, don't tease her, never leave her
Sounds so soulful, don't you agree?

[Jay-Z:]
Uh, I invented swag
Poppin' bottles, puttin' supermodels in the cab
Proof
I guess I got my swagger back, truth
New watch alert: Hublots
Or the big face Rollie, I got two of those
Arm out the window through the city, I maneuver slow
Cock back, snap back, see my cut through the holes

[Kanye West:]
Damn, Yeezy and Hov, where the hell you been?
Niggas talking real reckless; stuntmen
I adopted these niggas, Phillip Drummond them
Now I'm 'bout to make them tuck their whole summer in
They say I'm crazy, but I'm 'bout to go dumb again
They ain't seen me 'cause I pulled up in my other Benz
Last week I was in my other, other Benz
Throw your diamonds up 'cause we in this bitch another 'gain

[Jay-Z:]
Photo shoot fresh, looking like wealth
I'm 'bout to call the paparazzi on myself
Uh, live from the Mercer
Run up on Yeezy the wrong way, I might murk ya
Flee in the G450, I might surface
Political refugee, asylum can be purchased
Uh, everything's for sale
I got five passports, I'm never going to jail

[Kanye West:]
I made Jesus Walks, I'm never going to hell
Couture level flow is never going on sale
Luxury rap, the Hermès of verses
Sophisticated ignorance, write my curses in cursive
I get it custom, you a customer
You ain't accustomed to going through customs
You ain't been nowhere, hah?
And all the ladies in the house got 'em showing off
I'm done, I'll hit you up maña...nah!

[Jay-Z:]
Welcome to Havana
Smoking Cubanos with Castro in cabanas
Viva México, Cubano
Dominicano, all the plugs that I know
Driving Benzes with no benefits
Not bad, huh, for some immigrants?
Build your fences, we diggin' tunnels
Can't you see we gettin' money up under you?

[Kanye West, Jay-Z:]
Can't you see the private jets flying over you?
Maybach bumper sticker read: "What would Hova do?"
Jay is chillin' (Uh), Ye is chillin' (Uh)
What more can I say? We killin' 'em
Hold up before we end this campaign
As you can see, we done bodied the damn lames
Lord, please let them accept the things they can't change
And pray that all of their pain be champagne

Scream it
Give it
Scream it`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics5.addEventListener('click', () => {
        const lyrics = `"Gotta Have It"

[Kanye West:]
Turn my headphones up, louder, uh-huh, uh-huh

[James Brown:]
What you need, what–what you need
I got what you need, what–what you need (Bam)
What you need, what–what you need
I got what you need

[Kanye West and Jay-Z:]
Hello, hello, hello, hello, white America, assassinate my character
Money matrimony, yeah, they tryna break the marriage up
Who gon' act phony, or who gon' try to embarrass ya?
I'ma need a day off, I think I'll call Ferris up
Bueller had a Muller but I switched it for a Mille
'Cause I'm richer, and prior to this shit, was movin' free base
Had a conference with the DJs (Yeah?), Puerto Rico three days
Poli with the PDs, now they got our shit on replay
Sorry I'm in pajamas but I just got off the PJ
And last party we had, they shut down Prive
Ain't that where the Heat play? (Yeah)
Niggas hate ballers these days (Yeah)
Ain't that like LeBron James?
Ain't that just like D-Wade? Wait

[James Brown:]
What you need, what–what you need
I got what you need, what–what you need (Bam)
What you need, what–what you need
I got what you need (Bam, bam, bam, bam, bam)

[Jay-Z and Kanye West:]
Wussup, wussup, wussup, wussup
Wussup, muh'fucka? Where my money at?
You gon' make me come down to your house where yo' mommy at
Mummy wrap the kids, have 'em cryin' for they mommy back
Dummy that your daddy is, tell 'em I just want my racks
Racks on racks on racks (Racks!)
Maybachs on bachs on bachs on bachs on bachs
Who in that? Oh shit, it's just blacks on blacks on blacks
Hunnid stack–How you get it? Nigga layin' raps on tracks
I wish I could give you this feeling, I'm planking on a million
I'm riding through yo' hood, you can bank I ain't got no ceiling
Made a left on Nostrand Ave., (Right), we in Bed Stuy
Made a right on 79th, I'm coming down South Shore Drive
I remain Chi-town, Brooklyn 'til I die

[James Brown:]
Take 'em on home, take 'em on home
Take 'em on home, take 'em on home
I got what you need, what–what you need
Take 'em on home
What you need, what–what you need
I got what you need, what–what you need
Take 'em on home, take 'em on home
Take 'em on home, take 'em on home
Tryna hurt my name, huh?`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics6.addEventListener('click', () => {
        const lyrics = `"New Day"

[Nina Simone and Kanye West:]
Yeah, uh
Sun in the sky, you know how I feel
Me and the RZA connect
Breeze driftin' on by
Yeah, me and the RZA connect
Breeze driftin' on by (Uh)
It's a new life for me, yeah
It's a new dawn, it's a new day
It's a new life for me, ooh (Uh)
And I'm feeling good
Yeah, uh

[Kanye West:]
And I'll never let my son have an ego
He'll be nice to everyone, wherever we go
I mean, I might even make him be Republican
So everybody know he love white people
And I'll never let him leave his college girlfriend
And get caught up with the groupies in the whirlwind
And I'll never let him ever hit the telethon
I mean, even if people dyin' and the world ends
See, I just want him to have an easy life, not like Yeezy life
Just want him to be someone people like
Don't want him to be hated all the time, judged
Don't be like your daddy that'd never budge
And I'll never let him ever hit a strip club
I learned the hard way, that ain't the place to get love
And I'll never let his mom move to LA
Knowin' she couldn't take the pressure now we all pray

[Nina Simone and Jay-Z:]
Sun in the sky, you know how I feel
Breeze driftin' on by
Breeze driftin' on by
Me and the RZA connect
It's a new life for me, ooh
Me and the RZA connect
And I'm feeling good
Yeah

[Jay-Z:]
Sorry, junior, I already ruined ya
'Cause you ain't even alive, paparazzi pursuin' ya
Sins of a father make your life ten times harder
I just wanna take ya to a barber
Bondin' on charters, all the shit that I never did
Teach you good values so you cherish it
Took me 26 years to find my path
My only job is cut the time in half
So at 13, we'll have our first drink together
Black bar mitzvahs, mazel tov, mogul talk
Look a man dead in his eyes
So he know you talk truth when you speak it
Give your word, keep it
And if the day comes I only see him on the weekend
I just pray we was in love on the night that we conceived him
Promise to never leave him even if his mama tweakin'
'Cause my dad left me and I promise never repeat him
Never repeat him, never repeat him

[Nina Simone:]
Sun in the sky, you know how I feel
Breeze driftin' on by
Breeze driftin' on by
It's a new life for me, yeah
It's a new dawn, it's a new day
It's a new life for me, ooh
And I'm feeling good
Sun in the sky, you know how I feel
Breeze driftin' on by
Breeze driftin' on by
It's a new life for me, yeah
It's a new dawn, it's a new day
It's a new life for me, ooh
And I'm feeling
Birds flyin' high, you know how I feel`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics7.addEventListener('click', () => {
        const lyrics = `"That's My Bitch"
(feat. La Roux)

[Kanye West:]
Uh, hello, can I speak to, uh, uh
Yeah, you know who you are, look
You had no idea what ya dealing with
Something on some of this realest shit
Pop champagne, I'll give you a sip
'Bout to go dumb: how come?
Yeah, that's my bitch, that's my bitch
Sh-shorty right there? That's my bitch
That's my bitch

[Elly Jackson and Kanye West:]
I've been waiting for a long, long time
Just to get off and throw my hands up high
And live my life and live my life (Yeah)
Just to get off and throw my hands up high

[Kanye West:]
I paid for them titties, get your own
It ain't safe in the city, watch the throne
She say I care more about them basquions
Basquiats, she learning a new word, it's 'yacht'
Blew the world up as soon as I hit the club with her
Too Short called, told me I fell in love with her
Seat by actors, ball players and drug dealers
And some lesbians that never loved niggas
Twisted love story, True Romance
Mary Magdalene from a pole dance
I'm a freak, huh?! Rockstar life
The second girl with us, that's our wife
Hey, boys and girls, I got a new riddle
Who's the new old perv that's tryna play second fiddle?
No disrespect, I'm not tryna belittle
But my dick worth money, I put Monie in the middle
Where she at? In the middle

[Elly Jackson:]
I've been waiting for a long, long time
Just to get off and throw my hands up high
And live my life and live my life
Just to get off and throw my hands up high, high, high, high

[Justin Vernon:]
Swilling little licks and mixes 'til mornin'
I'm yearnin', ooh, yeah
Could I maybe have another dab of your potion?
Stop motion, ooh, yeah

[Jay-Z:]
Ahh, hahh!
Go harder than a nigga for a nigga, go figure
Told me keep my own money if we ever did split up
How could somethin' so gangsta be so pretty in pictures?
Ripped jeans and a blazer and some Louboutin slippers
Uh! Picasso was alive he woulda made her
That's right, nigga, Mona Lisa can't fade her
I mean Marilyn Monroe, she's quite nice
But why all the pretty icons always all white?
Put some colored girls in the MoMA
Half these broads ain't got nothing on Willona
Don't make me bring Thelma in it
Bring Halle, bring Penélope and Salma in it—uh
Back to my Beyoncés
You deserve three stacks—word to André
Call Larry Gagosian, you belong in mo-seums
You belong in vintage clothes crushing the whole building
You belong with niggas who used to be known for dope dealing
You too dope for any of those civilians
Now shoo, children—stop looking at her tits
Get ya own dog, ya heard? That's my bitch

[Elly Jackson:]
I've been waiting for a long, long time
Just to get off and throw my hands up high
And live my life and live my life
Just to get off and throw my hands up high, high, high, high`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics8.addEventListener('click', () => {
        const lyrics = `"Welcome To The Jungle"
(feat. Swizz Beatz)

[Swizz Beatz and Jay-Z:]
Uh, right, oh, oh
Right (Yeah), one-two, one-two, ay

[Swizz Beatz, Kanye West and Jay-Z:]
Welcome to the jungle, welcome to the jungle, well
(Yeah, yeah)
Welcome to the jungle, welcome to the jungle, well
(Yeah, uh, yeah)
I asked her where she wanna be when she 25 (Five)
She turned around and looked at me and said "Alive"
Welcome to the jungle, welcome to the jungle, well
(Uh, oh)

[Jay-Z and Swizz Beatz:]
Black Axl Rose, move halves and wholes (Right)
Come down to the jungle, just ask for Hov (Right)
Move blocks and squares, move apples and pears (Oh)
Work pots and pans (Goddammit), just to cop me some Airs
My uncle died, my daddy did too (Ay)
Paralyzed by the pain, I can barely move
My nephew gone, my heart is torn
Sometimes I look to the sky, ask why I was born
My faith in God, every day is hard
Every night is worse, that's why I pray so hard

[Kanye West and Jay-Z:]
Why I pray so hard, this is crazy God
Just when I thought I had everything, I lost it all
So que será (Welcome to the jungle), get a case of Syrah
Let it chase the pain, 'fore it goes too far

[Jay-Z and Kanye West:]
Yeah, my dreams is big, reality set in (Huh)
Let off a clip from a automatic weapon (Yeah)
Through shots in the door, it died in Vegas
Though it fought so hard, I knew it wouldn't make it
I'm a tortured soul, I live in disguise
Rest in peace to the leader of the Jackson 5 (Ooh, woo)
I died in my sleep, I'm still Big Pimpin'
I ball at the mall, beginning of the ending (Yeah)
Where the fuck is the sun? It's been a while
Momma, look at ya son, what happened to my smile?
My tears is tatted, my rag in my pocket
I'm just looking for love, I know somebody got it
Champagne for the pain, weed for the low
Goddamn, I'm so high, where the fuck did I go?
I'm losing myself, I'm stuck in the moment
I look in the mirror, my only opponent
Where the fuck is the press? Where the fuck is the Pres?
Either they know or don't care, I'm fucking depressed
No crying in public, just lying to judges
Risking my life, I'm already dying, so fuck it, well

[Swizz Beatz:]
Welcome to the jungle, welcome to the jungle, well
Goddammit`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics9.addEventListener('click', () => {
        const lyrics = `"Who Gon Stop Me"

[Flux Pavilion:]
I can't stop-op-op-op
I can't stop

[Kanye West and Jay-Z:]
This is something like the Holocaust
Millions of our people lost
Bow our heads and pray to the Lord
'Til I die, I'ma fucking ball
Now who gon' stop me? Who gon' stop me, huh?
Who gon' stop me? Who gon' stop me, huh?
Black cards, black cars, black on black, black broads
Whole lotta money in a black bag
Black strap: you know what that's for

[Jay-Z, Kanye West:]
Who gon' stop me, huh?
Who gon' stop me, huh?
Yeah, who gon' stop me?
No brakes, I need State Farm
So many watches, I need eight arms
One neck but got eight charms
Who gon' stop me, huh?

[Kanye West:]
Niggas talking, they bitch-made, ix-nay off my dicks-nay
That's Pig Latin, itch-bay; who gon' stop me, huh?
Last night ain't go so well, got kicked up out the hotel
Got a little freaky like Marvin Albert, "Yes!" Tell Howard Cosell
You just a commentator if you getting paper
Everybody I know from the hood got common haters
In some relations, you just supposed to say none
Heard she fucked the doorman
Well, that's cool, I fucked the waitress
Heard Yeezy was racist, well, I guess that's on one basis
I only like green faces

[Kanye West and Jay-Z:]
This is something like the Holocaust
Millions of our people lost
Bow our heads and pray to the Lord
'Til I die, I'ma fucking ball
Now who gon' stop me? Who gon' stop me, huh?
Who gon' stop me? Who gon' stop me, huh?
Black cards, black cars, black on black, black broads
Whole lotta money in a black bag
Black strap: you know what that's for

[Kanye West and Jay-Z:]
Y'all weed purple, my money purple
Y'all Steve Urkel, I'm Oprah's circle (Yeah, yeah, let's go)
I wrote the verse that I hope will hurt you

[Jay-Z and Kanye West:]
Who gon' stop me, huh?
Beat the odds, beat the Feds
It wouldn't be wise to bet against the kid
Start me broke, I bet I get rich
Night shift: six to six
Give me one shot, one pot
I'll show up in all white, wearin' no socks
No ceiling, new coupe
They know I'm a dope boy, they don't have no proof
I'm three steps removed, I know how to move
It's looking like I don't know how to lose
I'm winning again, I'm at the Wynn
I'm at the table, I'm gamblin'
Lucky lefty, I expect a seven
I went through hell, I'm expectin' heaven
I'm owed, 'cause I'm dough, and I stuck to the G-code
I'm here, oh yeah, I promise I ain't going nowhere
OK, here, like a hare, like a rabbit, I like karats
I'm allergic to havin' bunny ears, like broke, like nope
Like ha, I ain't no joke
I can't be stopped, like nope, like nope
Extend the beat, Noah (...and pray to the Lord), uh

[Jay-Z:]
Two seats in the 911, uh
No limit on the Black Card, uh
Told y'all I was gonna go H·A·M, uh
'Til the ocean was my backyard, uh
No lies in my verses, hey
Please pardon all the curses, hey
Shit gotta come in some way, fuck
When you're growing up worthless, uh
Middle finger to my old life, uh
Special shout-out to my old head, uh
If it wasn't for your advice, uh
A nigga would have been so dead, uh
I'm living life 'til these niggas kill me
Turn this up if you niggas feel me
I'm riding dirty, tryna get filthy
Pablo Picasso, Rothkos, Rilkes
Graduated to the MoMA
And I did all of this without a diploma
Graduated from the corner
Y'all can play me for a motherfuckin' fool if you wanna
Street-smart and I'm book-smart
Coulda been a chemist 'cause I cook smart
Only thing that can stop me is me, hey
And I'ma stop when the hook start, hol' up

[Kanye West and Jay-Z:]
This is something like the Holocaust
Millions of our people lost
Bow our heads and pray to the Lord
'Til I die, I'ma fucking ball
Now who gon' stop me? Who gon' stop me, huh?
Who gon' stop me? Who gon' stop me, huh?
Black cards, black cars, black on black, black broads
Whole lotta money in a black bag
Black strap: you know what that's for
`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics10.addEventListener('click', () => {
        const lyrics = `"Murder To Excellence"

[I. "Murder"]

[Jay-Z:]
Uh, bloody murder, murder, murder
Bloody murder, murder, murder, murder
Bloody murder, murder, murder, murder
Bloody murder, murder, murder

[Kanye West:]
Paper read: "Murder, black-on-black murder"
Paper read: "Murder, black-on-black murder" again

[Jay-Z:]
Uh, this is to the memory of Danroy Henry
Too much enemy fire to catch a friendly
Strays from the same shade, nigga, we on the same team
Giving you respect, I expect the same thing, uh
All-black everything, nigga, you know my fresh code
I'm out here fighting for you, don't increase my stress load
Niggas watching the throne, very happy to be you
Power to the people, when you see me, see you

[Kanye West:]
And I'm from the murder capital where they murder for capital
Heard about at least three killings this afternoon
Looking at the news like, "Damn! I was just with him after school"
No shop class, but half the school got a tool
And a "I could die any day"-type attitude
Plus his little brother got shot reppin' his avenue
It's time for us to stop and redefine black power
Forty-one souls murdered in fifty hours

[Kanye West:]
The paper read: "Murder, black-on-black murder"
The paper read: "Murder, black-on-black murder" again
"Murder" again

[Kanye West:]
Is it genocide?
'Cause I can still hear his mama cries
Know the family traumatized
Shots left holes in his face about piranha-sized
The old pastor closed the cold casket
And said the church ain't got enough room for all the tombs
It's a war going on outside we ain't safe from
I feel the pain in my city wherever I go
314 soldiers died in Iraq, 509 died in Chicago

[Jay-Z:]
I arrived on the day Fred Hampton died
Uh, real niggas just multiply
And they say by 21, I was supposed to die
So I'm out here celebrating my post-demise
If you put crabs in a barrel to ensure your survival
You're gon' end up pulling down niggas that look just like you
What up, Blood? Uh, what up, cuz? Uh, it's all black, uh, I love us

[Kanye West:]
The paper read: "Murder, black-on-black murder"
The paper read: "Murder, black-on-black murder" again
"Black-on-black murder" again
"Black-on-black murder" again

[II. "Excellence"]

[Jay-Z:]
It's a celebration of black excellence, black tie, black Maybachs
Huh, yeah, uh

[Jay-Z:]
Black excellence, opulence, decadence
Tuxes next to the president, I'm present
I dress in Dries, and other boutique stores in Paris
In sheepskin coats, I silence the lambs
Do you know who I am, Clarice?
No cheap cologne whenever I "shh-shh"
Success never smelled so sweet
I stink of success, the new black elite
They say my Black Card bears the mark of the beast
I repeat: my religion is the beat
My verse is like church, my Jesus piece
Now please, domino, domino
Only spot a few blacks the higher I go, uh
What's up to Will? Uh, shout out to O, uh
That ain't enough, we gonna need a million more, uh
Kick in the door, uh, Biggie flow
I'm all dressed up with nowhere to go, uh

[Kanye West:]
Yeah, it's all messed up when it's nowhere to go
So we won't take the time out 'til we reach the T-O-P
From parolees that hold G's, sold keys, low keys
We like the promised land of the OG's
In the past if you picture events like a black tie
What's the last thing you expect to see? Black guys
What's the life expectancy for black guys?
The system's working effectively, that's why
I'll be a real man, take care of your son
Every problem you had before this day is now done
New crib, watch a movie
'Cause ain't nothin' on the news but the blues
Hit the mall, pick up some Gucci
Now ain't nothing new but your shoes
Sunday morning, praise the Lord
You the girl that Jesus had been saving me for
So let's savor this moment and take it to the floor
Black excellence, truly yours
`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics11.addEventListener('click', () => {
        const lyrics = `"Made In America"
(feat. Frank Ocean)

[Frank Ocean:]
And He'll bring you out the, out the darkness

[Frank Ocean:]
Sweet king Martin, sweet queen Coretta
Sweet brother Malcolm, sweet queen Betty
Sweet Mother Mary, sweet father Joseph
Sweet Jesus, we made it in America
Sweet baby Jesus (Ooh, ooh-ooh-ooh, ooh-ooh-ooh)
Oh, sweet baby Jesus, we made it in America
Sweet baby Jesus (Ooh, ooh-ooh-ooh-ooh)
Oh, sweet baby Jesus, we made it in America

[Kanye West:]
I told my mama I was on the come up
She said, "You going to school, I'll give you a summer"
Then she met No I.D. and gave me his number
Ten years later, she driving a Hummer
Niggas hustle every day for a beat from Ye
What I do? Turn around, gave them beats to Jay
And I'm rapping on the beats they was supposed to buy
I guess I'm getting high off my own supply
Downtown, mixing fabrics, tryna find the magic
Started a little blog just to get some traffic
Old folks'll tell you not to play in traffic, uh
A million hits and the web crashes, damn
South Park had 'em all laughing
Now all my niggas designing and we all swaggin', uh
Ignore the critics just to say we did it
This ain't no fashion show, motherfucker, we live it

[Frank Ocean:]
Sweet king Martin, sweet queen Coretta
Sweet brother Malcolm, sweet queen Betty
Sweet Mother Mary, sweet father Joseph
Sweet Jesus, we made it in America
Sweet baby Jesus (Ooh, ooh-ooh-ooh, ooh-ooh-ooh)
Oh, sweet baby Jesus, we made it in America
Sweet baby Jesus (Ooh, ooh-ooh-ooh-ooh)
Oh, sweet baby Jesus, we made it in America

[Jay-Z:]
I pledge allegiance to my Grandma
For that banana pudding, our piece of Americana
Our apple pie was supplied through Arm and Hammer
Straight out the kitchen, shh, don't wake Nana
Built a republic that still stands
I'm tryna lead a nation to leave to my little man's
Or my daughter, so I'm boiling this water
The scales was lopsided, I'm just restoring order
Hold up, here comes grandma, what's up Yaya?
What's that smell? Oh, I'm just boiling some agua
No papa, bad Santa
The streets raised me, pardon my bad manners
I got my liberty chopping grams up
Street justice, I pray God understand us
I pledge allegiance to all the scramblers
This is the Star Spangled Banner

[Frank Ocean:]
Sweet king Martin, sweet queen Coretta
Sweet brother Malcolm, sweet queen Betty
Sweet Mother Mary, sweet father Joseph
Sweet Jesus, we made it in America
Sweet baby Jesus (Ooh, ooh-ooh-ooh, ooh-ooh-ooh)
Oh, sweet baby Jesus, we made it in America
Sweet baby Jesus (Ooh, ooh-ooh-ooh-ooh)
Oh, sweet baby Jesus, we made it in America
Yes, we did

[Frank Ocean:]
Sweet baby Jesus (Ooh, ooh-ooh-ooh, ooh-ooh-ooh)
Oh, sweet baby Jesus, we made it in America
Sweet baby Jesus (Ooh, ooh-ooh-ooh-ooh)
Oh, sweet baby Jesus, we made it in America
Yes, we did`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics12.addEventListener('click', () => {
        const lyrics = `"Why I Love You"
(feat. Mr. Hudson)

[Mr. Hudson:]
Ooooh, I love you so
But why I love you, I'll never know
(Ooooh, I love you so
But why I love you, I'll never know)
Ooooh, I love you so
But why I love you, I'll never know
(Ooooh, I love you so
But why I love you, I'll never know)

[Jay-Z:]
Picture, if you will, that the throne's burning
Rome's burning, and I'm sitting in the corner all alone, burning
Why does it always end up like this?
Something that we don't determine
Same people that I fought for, that I fight for, that I ride for
That I live for, that I die for
Be the reason that these niggas is alive for
And they want me dead, but I'm sorry, but I just can't die for you
But I can make 'em put their hands in the sky for you
We waiting for the fireworks like July 4th
Get fly more, get high more, cry boy, why for?
When the grief is over, beef is over
I'll be fly when Easter's over
I tried to teach niggas how to be kings
And all they ever wanted to be was soldiers
So when love is gone 'til blood is drawn
'Cause we no longer wear the same uniform
Fuck you, squares, the circle got smaller
The castle got bigger, the walls got taller
And truth be told, after all that said
Niggas still got love for you

[Mr. Hudson:]
Ooooh, I love you so
But why I love you, I'll never know
(Ooooh, I love you so
But why I love you, I'll never know)
Ooooh, I love you so
But why I love you, I'll never know
(Ooooh, I love you so
But why I love you, I'll never know)

[Jay-Z and Kanye West:]
Showed love to you niggas
You ripped out my heart and you stepped on it
I picked up the pieces 'fore you swept on it
Goddamn, this shit leaves a mess, don't it?
Shit feelin' like death, don't it?
Charge it to the game, whatever's left on it
I spent about a minute, maybe less on it
Fly, pelican, fly, turn the jets on it
But first I shall digress on it
Wasn't I a good king?
Maybe too much of a good thing, huh?
Didn't I spoil you? Me or the money, what you loyal to?
Huh, I gave you my loyalty
Made you royalty and royalties
Took care of these niggas' lawyer fees
And this is how niggas rewarded me, damn

[Mr. Hudson:]
Ooooh, I love you so
But why I love you, I'll never know
(Ooooh, I love you so
But why I love you, I'll never know)

[Jay-Z and Kanye West:]
Bussin' at me, b-b-b-bussin' at me
But I'm bulletproof, bitch, you can't get nothin' past me
Got body armor
A nigga gotta watch the throne
And I'm bussin' back
So niggas in a glass house should not throw stones
What do you do when the love turns to hate?
Gotta separate from these fuckin' fakes
Caesar didn't see it so he ceased to exist
So the nigga that killed him had keys to his shit
Am I my brother's keeper?
Only if that nigga don't creep up
Got a pistol under my pillow
I've never been a deep sleeper
P-p-p-paranoia, 'cause the nigga that said he'll
Blast for ya is now blastin' for ya
That's an assassin for ya
These niggas got a shot, they'll shoot
Please Lord, forgive him
For these niggas not know what they do, ooh`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics13.addEventListener('click', () => {
        const lyrics = `"Illest Motherfucker Alive"

[Kanye West:]
1985 white Lamborghini Countach, two of 'em

[Kanye West:]
I need a slow motion video right now
'Cause I'm movin' in slow motion, slow motion
Feelin' like Hype Williams shootin' a nigga
Shootin' a nigga, hey, hey, hey
I need a slow motion video right now, ay, ay

[Kanye West:]
Damn, baby, pussy can't be your only hustle
Unless you bad as Naomi Russell
I mean a lot of niggas got money
So basically, Russell ain't the only Russell
Russell Brand, Russell Crowe
Zero, zero, zero, zero, a whole lot of Os
What you after, actor money?
You in line behind currency, yeah, you after money
Bulletproof condom when I'm in these hoes
Got staples on my dick, why? Fuckin' centerfolds
And I swear to God they so cold
Got a nigga in Miami wearing winter clothes
I got my fur on, feelin' like Jerome
She got her fur too, we get our his and her on
Don't look at the jewelry, or get your blur on
Too close, you comatose, so dope, you overdose
Get back, you overclose, oh no
The hood was strugglin' but then I blessed them with that Polo
Niggas was making music and then my first solo
Collo Drolo, sponsored by Manolo
She got Zeppi Notos ready for some photos
Yeah and I'm cold, bitch, please try to keep the door closed
Lanvin thousand-dollar tee with no logos
Let me show you what I see when my eyes closed

[Jay Z and Kanye West:]
Take it how you want 'til a nigga dead
'Til then, I'm the illest motherfucker alive
Yeah, yeah, uh-huh
Whole world aiming at a nigga head
Because I'm the illest motherfucker alive
Yeah, yeah, uh-huh, hol' up

[Jay Z:]
King Hov, I'm exactly what the fuck you think
Eleven in a row, Bill Russell rings
Michael Jordan swag, y'all think Michael Jordan bad
Nigga, I got five more rings than Michael Jordan had
Elvis has left the building, now I'm on the Beatles ass
Niggas hear Watch the Throne, yeah, it's like the Beatles back
Bey-Bey my Yoko Ono, Rih-Rih complete the family
Imagine how that's gon' look front row at the Grammys
Fuck your awards like Eddie Murphy's couch
The Roc is in the building, we should have stayed in the house
I don't even know what we doing here
Seems to me a complete waste of gear
Just a fuckin' waste of time, a complete waste of bottles
Niggas' fashion is weak, they be wastin' all the models
Got the oversized Rollie, let me show thee how to do it
When I say it then you see it, it ain't only in the music
Basquiats, Warhols, serving as my muses
My house like a museum so I see 'em when I'm peeing
Usually you have this much taste, you European
That's the end of that way of thinking, nigga, never again
Know when to leave when the heat is coming, I learnt that
This is where DeNiro would be if he ain't turn back
Fuck Sosa, this Hova, this is real life
This is what the ending of Scarface should feel like

[Kanye West and Kid Cudi:]
I need a slow motion video right now
'Cause I'm movin' in slow motion, slow motion
(I'm moving in slow motion, slow motion)
Feelin' like Hype Williams shootin' a nigga
(I'm moving in slow motion, slow motion)
Shootin' a nigga, hey, hey, hey
(I'm moving in slow motion, slow motion)
I need a slow motion video right now
(I'm moving in slow motion, slow motion)
Ay, ay
(I'm moving in slow motion, slow motion)`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics14.addEventListener('click', () => {
        const lyrics = `"H.A.M"

[Kanye West:]
It was all good just a week ago, niggas feel theyself
And that Watch the Throne drop, niggas kill theyself
What niggas gon' do, Hov?
This the new crack, on a new stove
I'm in the two-door, true that, niggas telling me, "You back!"
Like a nigga ever left up out this bitch, huh?
And if life's a bitch, bet she suck my dick, huh
And I bet she fucked the whole clique, huh
By the way, nigga, you should fucking quit, nigga
Just forget it, you talk it, I live it
Like Eli, I did it, joke's on you, motherfucker, and I get it, ha ha
No paper, ho, but you can have some more of me
Or-a-gy or are we speaking metaphorically?
Historically I'm kicking bitches out like Pam, nigga
Going HAM, nigga; me and Jigga
And a nigga still young, why I have no kids
But I've been practicing with some actresses as bad as shit
Had a few white girls, asses flat as shit
But the head's so good, damn, a nigga glad he hit
Got 'em jumping out the building, watch out below
A million out the door

[Kanye West:]
I'm about to go HAM
Hard as a motherfucker, let these niggas know who I am
I'm about to go HAM
Hard as a motherfucker, let these niggas know who I am

[Jay-Z:]
Fuck y'all mad at me for?
Y'all don't even know what I've been through
I played chicken with a Mack truck
Y'all motherfuckers woulda been moved
I swam waters with Great Whites
Y'all motherfuckers woulda been chewed
I hustled with vultures late nights
Y'all motherfuckers woulda been food
Fuck wrong with these dudes? Try to walk around in these shoes
See the shit I saw growing up
Then maybe you could take a peek at these boos
Niggas fantasize about the shit that I do daily
Like these rappers rap about all the shit that I do really
I'm like, "Really; half a billi,' nigga, really?" You got baby money
Keep it real with niggas, niggas ain't got my lady's money
Watch the throne, don't step on our robe
Bad enough we let you step on our globe
With my nephew die, daddy's dead
Nigga took the price on my uncle's head
Nobody called the cops as my uncle bled
So I feel like I would like to know my uncle's bread
Bow down, brother, pay homage
Don't spill hate all on my garments
Comme des Garçons, fuck yo' fresh
Head shots, nigga, fuck your vest
Fuck the pigs, no pork on my fork
Peace, God, 'cause you know a nigga just went

[Jay-Z:]
HAM
Hard as a motherfucker, let these niggas know who I am
Yeah, I'm 'bout to go HAM
Hard as a motherfucker, let these niggas know who I am
Yeah, I'm 'bout to go HAM

Vivat rex in homine
Vivat rex in homine
Vivat rex in homine
Vivat rex in homine
`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics15.addEventListener('click', () => {
        const lyrics = `"Primetime"

[Jay-Z:]
We in the time of our lives, baby
Turn the music up, primetime

[Jay-Z:]
Uh, yeah, primetime, beat by Dion
Our third eon, that's what the fuck we on
Mo' money, 40-year-old phenom
My 15 minutes of fame has stretched beyond
At 42, be better than 24s
I carried the 4-5, mastered 48 laws
Still wearing my 23s, they can't fuck with the boy
As far as them 16s, I'm 23 of it all
Primetime, riding that six-deuce
That 911, I only subtract the roof
I started in '88, got warm in '92
I landed in '96, that's the year I came through
I hit the club, ordered some Grey Goose
Switched it for CÎROC to give Puff's stock a boost
New money, I found the fountain of youth
I'm headed to Miami to fuck up the Fontainebleau
A case of Ace... make it two
Nigga, we rollin', beat the deuce
The night is young, what the fuck we gon' do? Ooh

[Kanye West:]
Ooh, the night is young, what the fuck you wanna do, huh?
The night is young, what the fuck we gon' do, huh?
The night is young, what you really wanna do, huh?

[Kanye West:]
Primetime, basking in the lime
Cassius in his prime, coloring out of the line
'Cause they don't want nobody that's colored out of the lines
So I'm late as a motherfucker, colored people time
Damn, Yeezy, they all gotta be dimes?
Well, Adam gave up a rib, so mine better be prime
Niggas gon' kill me, I swear they better be lying
I never live in fear, I'm too out of my mind
Primetime, never hit these heights
I mean it's like, it's like our first first-class flight
I'm tripping on it, socks on marble floors, I'm slipping on it
Champagne, I'm sipping on it, shit tastes different, don't it?
You know what? You right
It's like the best damn champagne I had in my life
"When you coming home?" That's a text from my wife
I told her run a bubble bath
And float in that motherfucker like a hovercraft
And soak in that motherfucker 'til I call you back
I mean, who says shit like that and doesn't laugh?
Hah

[Kanye West:]
The night is young, what the fuck you wanna do, huh?
The night is young, what the fuck we gon' do, huh?
The night is young, what you really wanna do, huh?`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics16.addEventListener('click', () => {
        const lyrics = `"The Joy"
(feat. Curtis Mayfield)

[Curtis Mayfield, Pete Rock and Charlie Wilson:]
Add a little sugar (Ow!), honeysuckle and (Woo!)
A great big expression of happiness
Boy, you couldn't miss (Uh-huh; uh-huh) with a dozen roses
(Ay, uh; Mr. West) Such would astound you
(Pete Rock) The joy of children laughing around you
(Uh) These are all the makings of you (Woo!)

[Kanye West and Pete Rock:]
I do it for the forefathers, yeah, the street authors
That are now A&Rs in the cheap office
Rappers that never got signed but they keep offers
Girls that's way too fine for us to keep off us
Gave her a handshake, only for my man's sake
She in her birthday suit 'cause of the damn cake
Now there's crumbs all over the damn place (Uh-huh)
And she want me to cum all over her damn face
I never understood Planned Parenthood
'Cause I never met nobody planned to be a parent in the hood
Taking refills of that Plan B pill
Another shorty that won't make it to the family will
If I don't make it, can't take it, hope the family will
They ain't crazy, they don't know how insanity feel
Don C. just had a shorty, so it's not that bad
But I still hear the ghosts of the kids I never had

[Curtis Mayfield, Pete Rock and Charlie Wilson:]
Add a little sugar (Woo!), honeysuckle and (Come on)
A great big expression of happiness (Ow!)
Boy, you couldn't miss (Uh-huh; uh) with a dozen roses
(Kanye; ay, uh) Such would astound you
(Pete Rock) The joy of children laughing around you
(Uh) These are all the makings of you (Yeah)

[Kanye West:]
No electro, no metro, a little retro, ah, perfecto
You know the demo, your boy act wild
You ain't get the memo? Yeezy's back in style
Now one room got Gidget—the other got Bridget
What's more tripped out, dawg, is they sisters
Nah, you ain't listen; they black—they sistas
They mama named 'em after white bitches
So next time you see me on your Fallopian
Though the jewelry's Egyptian, know the hunger's Ethiopian
Stupid questions like, "Is he gon' be dope again?
Have you seen him? Has anybody spoke to him?"
This beat deserves Hennessy
A bad bitch, and a bag of weed: the Holy Trinity
In the mirror where I see my only enemy
Your life's cursed? Well, mine's an obscenity

[Curtis Mayfield, Pete Rock, Charlie Wilson and Jay-Z:]
Add a little sugar (Woo!), honeysuckle and (Come on; red lights)
A great big expression of happiness (Ow!)
Boy, you couldn't miss (Let that thing roll; uh-huh; uh) with a dozen roses
(Kanye; Ay, uh) Such would astound you
(Pete Rock; uh) The joy of children laughing around you
(Uh) These are all the makings of you (Yeah)
(Ow!)

[Jay-Z and Pete Rock:]
This is my mama's shit
I used to hear this through the walls in the hood (Uh-huh)
When I was back in my pajama shit
Afros and marijuana sticks (Woo!), seeds in the ganja
Had it poppin' like the sample that I'm rhymin' with
Pete Rock (Uh), let the needle drop
I seen so much as a kid they surprised I don't needle pop (Uh-huh)
Takin' sips of Pop's six-pack of Miller nips
Pink Champale, Ballantine Ale (Woo!)
Ballys on my feet help me balance out well
That and the shit I used to balance on the scale
I got it honest from the parties from my mama's
Virgin Marys try to judge her
I'm like, "Where are them Madonnas now?"
Give all glory to Gloria (One-two, okay)
They said, "You raised that boy too fast"
But you was raising a warrior (One-two, okay)
We victorious, they'll never take the joy from us, uh

[Kid Cudi and Pete Rock:]
Keep your hands up, get 'em high now (It's Pete Rock, Kanye)
Don't let them take your fire
Keep your hands up, get 'em high now (One-two, okay)
Don't let them take your fire
Keep your hands up, get 'em high now (It's Pete Rock, Kanye)
Don't let them take your fire
Keep your hands up, get 'em high now, yeah (One-two, okay)
It's Pete Rock, Kanye; one-two, okay
It's Pete Rock, Kanye; one-two, okay
It's Pete Rock, Kanye; one-two, okay
It's Pete Rock, Kanye; one-two, okay`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });
</script>

<!-- Call up the footer-->
<?php
include 'includes/footer.php';
?>