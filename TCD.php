<!-- Call up the header and navbar and set page title-->
<?php
$page_title = "The College Dropout";
include 'includes/header.php';
include 'includes/nav.php';
?>

<!-- set the splitscreen -->
<div class="container" style="max-width:100%;">
    <div class="row split">
        <div class="col left" style="background-color:#411218;"> <!-- left col -->
            <div class="leftT" style="background-color:#8087b5;"></div> <!-- top section of left col -->
            <div id="leftM"> <!-- middle section of left col -->
                <!-- i frame for songs -->
                <iframe class="video" id="video-player" width="240px" height="240px" frameborder="0"></iframe> 

                 <!-- div for song lyrics -->
                <div id="LyricsContainer" style="display: none; max-height:205px; background-color:#ddb890; padding-left: 20px; padding-top: 10px;">  
                </div>

            </div>
            <div class=leftB style="background-color:#8087b5;"> <!-- bottom section of left col -->
            </div>

        </div>
        <!-- right col -->
        <div class="col right" style="background-color:#e8982e;"> 
            <br>
            <div class="albumcover"><img src="image/TCDcover.webp" class="img-fluid" alt="Image could not load"></div> <!-- album cover -->
            <br>
            <h3 class="albumtitle">The College Dropout</h3> <!-- title of the album -->
            <!-- Description/background of album -->
            <p class="albumdesp">Kanye Wests's debut album is called "The College Dropout". The album was released in 2004 by Roc-A-Fella Records and Def Jam Recordings. The album features a variety of musical styles, ranging from soulful and introspective tracks to upbeat and celebratory anthems. The album was a commercial and critical success, reaching number two on the US Billboard 200 and earning West ten Grammy nominations, of which he won three.</p>
            <p class="albumdesp">One of the central themes of The College Dropout is the tension between the pursuit of wealth and success and the desire for artistic integrity and creative freedom. This tension is reflected in tracks like "All Falls Down," which critiques consumerism and materialism, and "Last Call," which features West's own personal story of struggling to break into the music industry while also staying true to his artistic vision. Another key theme of the album is the experience of being a black American in the early 21st century. This theme is explored in tracks like "We Don't Care," which deals with the impact of the war on drugs on black communities, and "Jesus Walks," which speaks to the role of faith and religion in black culture.</p>
            <p class="albumdesp">Musically, The College Dropout draws on a wide range of influences, from classic soul and R&B to gospel and early 2000s hip-hop. The album features collaborations with a number of notable artists, including Jay-Z, Mos Def, and Jamie Foxx. One of the most distinctive elements of the album is West's use of samples, which often serve as the foundation for his beats and provide a nostalgic and soulful backdrop for his lyrics. Tracks like "Through the Wire," which features a sample of Chaka Khan's "Through the Fire," and "Slow Jamz," which samples Luther Vandross's "A House is Not a Home," demonstrate West's skill at repurposing classic tracks for a new generation of listeners.</p>
            <p class="albumdesp">Overall, The College Dropout is a powerful and provocative debut that established Kanye West as one of the most innovative and influential voices in hip-hop. Through its exploration of themes like artistic integrity, consumerism, and race, the album remains relevant and resonant today. Musically, the album's fusion of classic soul and R&B with contemporary hip-hop and electronic production techniques continues to inspire and influence a new generation of artists.</p>

            <!-- tracklist -->
            <ul class="list-group">
                <li class="list-group-item albumtrack" style="background-color:#e8982e;">Intro <!-- Song title -->
                    <span class="artist">• Kanye West • DeRay Davis</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="OTZzjAU0Kg0"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics1" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Interlude">I</span> <!-- Interlude symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color:#e8982e;">We Don't Care <!-- Song title -->
                    <span class="artist">• Kanye West</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="0Tdpq3FRGhY"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics2" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color:#e8982e;">Graduation Day <!-- Song title -->
                    <span class="artist">• Kanye West • DeRay Davis • John Legend</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="tbmNuB7spmA"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics3" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                    <span class="badge bg-secondary text-dark icon" title="Interlude">I</span> <!-- Interlude symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color:#e8982e;">All Falls Down <!-- Song title -->
                    <span class="artist">• Kanye West • Syleena Johnson</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="uHcP8XX5IJA"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics4" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color:#e8982e;">I'll Fly Away <!-- Song title -->
                    <span class="artist">• Kanye West</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="psb2dFToHLA"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics5" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Interlude">I</span> <!-- Interlude symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color:#e8982e;">Spaceship <!-- Song title -->
                    <span class="artist">• Kanye West • GLC • Consequence</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="mn77gzjBl1U"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics6" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color:#e8982e;">Jesus Walks <!-- Song title -->
                    <span class="artist">• Kanye West</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="1fpkdSfPzio"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics7" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color:#e8982e;">Never Let Me Down <!-- Song title -->
                    <span class="artist">• Kanye West • Jay-Z • J-Ivy</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="p4NvOKy7GOU"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics8" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color:#e8982e;">Get Em High <!-- Song title -->
                    <span class="artist">• Kanye West • Talib Kweli • Common</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="UHpaLbhk8vM"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics9" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color:#e8982e;">Workout Plan <!-- Song title -->
                    <span class="artist">• Kanye West</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="hLeS2By_zPE"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics10" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                    <span class="badge bg-secondary text-dark icon" title="Interlude">I</span> <!-- Interlude symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color:#e8982e;">The New Workout Plan <!-- Song title -->
                    <span class="artist">• Kanye West</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="IzNunT2AOO4"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics11" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color:#e8982e;">Slow Jamz <!-- Song title -->
                    <span class="artist">• Kanye West • Twista • Jamie Foxx</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="pwkYUhePecQ"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics12" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color:#e8982e;">Breathe In Breathe Out <!-- Song title -->
                    <span class="artist">• Kanye West • Ludacris</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="E3dWKq3s6u0"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics13" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color:#e8982e;">School Spirit Skit 1 <!-- Song title -->
                    <span class="artist">• Kanye West • DeRay Davis</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="g9xopViBKOQ"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics14" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                    <span class="badge bg-secondary text-dark icon" title="Interlude">I</span> <!-- Interlude symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color:#e8982e;">School Spirit <!-- Song title -->
                    <span class="artist">• Kanye West</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="-MOIPnu50O4"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics15" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color:#e8982e;">School Spirit Skit 2 <!-- Song title -->
                    <span class="artist">• Kanye West • DeRay Davis</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="7xL9VLARq8k"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics16" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Interlude">I</span> <!-- Interlude symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color:#e8982e;">Lil Jimmy Skit <!-- Song title -->
                    <span class="artist">• Kanye West</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="ufN8MxyMlEQ"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics17" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Interlude">I</span> <!-- Interlude symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color:#e8982e;">Two Words <!-- Song title -->
                    <span class="artist">• Kanye West • Mos Def • Freeway • The Harlem Boys Choir</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="cgo2IKS4inU"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics18" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color:#e8982e;">Through The Wire <!-- Song title -->
                    <span class="artist">• Kanye West</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="AE8y25CcE6s"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics19" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color:#e8982e;">Family Business <!-- Song title -->
                    <span class="artist">• Kanye West</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="JwAjANmjajc"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics20" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color:#e8982e;">Last Call <!-- Song title -->
                    <span class="artist">• Kanye West</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="cpbeS15sHZ0"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
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
        const lyrics = `"Intro"

[DeRay Davis:]
Kanye, can I talk to you for a minute?
Me and the other faculty members was wonderin'
Could you do a lil' som...
Somethin' beautiful, somethin' that the kids are gon' love when they hear it
That's gon' make them start jumpin' up and down, and sharin' candy and stuff
Think you could probably do somethin', for the kids, for graduation to sing?`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics2.addEventListener('click', () => {
        const lyrics = `"We Don't Care"

Oh, yeah
I got the perfect song for the kids to sing
And all my people that's—

Drug dealin' just to get by
Stack your money 'til it get sky high
We wasn't supposed to make it past twenty-five
Joke's on you, we still alive
Throw your hands up in the sky and say
"We don't care what people say"

If this is your first time hearing this
You are about to experience something so cold, man
We never had nothin' handed, took nothin' for granted
Took nothin' from no man, man, I'm my own man
But as a shorty, I looked up to the dope man
Only adult man I knew that wasn't broke, man
Flicking Starter coats, man—man, you don't know, man
We don't care what people say
This is for my niggas outside all winter
'Cause this summer they ain't finna say, "Next summer, I'm finna..."
Sitting in the hood like community colleges
This dope money here is Lil' Trey's scholarship
'Cause ain't no tuition for having no ambition
And ain't no loans for sitting your ass at home
So we forced to sell crack, rap, and get a job
You gotta do something, man, your ass is grown

Drug dealin' just to get by
Stack your money 'til it get sky high
(Kids, sing! Kids, sing!)
We wasn't supposed to make it past twenty-five
Joke's on you, we still alive
Throw your hands up in the sky and say
"We don't care what people say"

This second verse is for my dogs working nine to five that still hustle
'Cause a nigga can't shine off $6.55
And everybody selling makeup, Jacob's
And bootlegged tapes just to get they cake up
We put shit on lay-away, then come back
We claim other people kids on our income tax
We take that money, cop work, then push packs to get paid
And we don't care what people say
Mama say she wanna move South
Scratching lottery tickets, eyes on a new house
'Round the same time, Doe ran up in dude house
Couldn't get a job
So since he couldn't get work, he figured he'd take work
The drug game bulimic, it's hard to get weight
So niggas' money is homo, it's hard to get straight
But we gon' keep bakin' 'til the day we get cake
And we don't care what people say, my niggas—

Drug dealin' just to get by (Yeah)
Stack your money 'til it get sky high
Kids, sing! Kids, sing!
We wasn't supposed to make it past twenty-five
Joke's on you, we still alive (Alive, uh-huh)
Throw your hands up in the sky and say
"We don't care what people say" (Yeah, yeah, ugh)

You know the kids gon' act a fool
When you stop the programs for after school
And they DCFS, some of 'em dyslexic
They favorite 50 Cent song "12 Questions"
We scream, "Rocks, blow, weed, park," see, now we smart
We ain't retards the way teachers thought
Hold up, hold fast, we make more cash
Now, tell my mama I belong in that slow class
It's bad enough we on welfare
They tryna put me on the school bus with the space for the wheelchair
I'm tryna get the car with the chrome-y wheels here
They tryna cut our lights out like we don't live here
Look what was handed us, fathers abandoned us
When we get them hammers, go on, call the ambulance
Sometimes, I feel no one in this world understands us
But we don't care what people say, my niggas—

Drug dealin' just to get by
Stack your money 'til it get sky high
Kids, sing! Kids, sing!
We wasn't supposed to make it past twenty-five
Joke's on you, we still alive
Throw your hands up in the sky and say
"We don't care what people say"`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics3.addEventListener('click', () => {
        const lyrics = `"Graduation Day"

[DeRay:]
What in the fuck was that, Kanye?! I told you to do some shit for the kids! You can give me your motherfuckin' graduation ticket right now! You give me this motherfuckin' robe before you catch some senioritis! You will not walk across that stage! You won't slide across that stage! Motherfucker can't pull you across that motherfucking stage, Kanye! Who told you? See, I told you to do something uplifting! I'm tryna get you out here with these white people and this how you're gonna do me! You know what, you's a nigga. And I don't mean that in no nice way. Had little kids sing about the shit—now the joke's on you. You throw your motherfucking hands in the air and wave goodbye to every-motherfucking-body! 'Cause you getting the fuck out of this campus! What the fuck you gon' do now? Kanye...

[John Legend:]
I'm no longer confused, but don't tell anybody
I'm about to break the rules, but don't tell anybody
I got something better than school, so don't tell anybody
My momma would kill me, so don't tell anybody
She wants me to get a good ass job, just like everybody
She ain't walked in my shoes, I'm just not everybody`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics4.addEventListener('click', () => {
        const lyrics = `"All Falls Down"
(feat. Syleena Johnson)

[Syleena Johnson and Kanye West:]
Oh, when it all, it all falls down
Yeah, this the real one, baby
I'm tellin' you all, it all falls down
Uh, Chi-Town, stand up!
Oh, when it all, it all falls down
Southside, Southside
We gon' set this party off right
I'm tellin' you all, it all falls down
Westside, Westside
We gon' set this party off right
Oh, when it all

[Kanye West:]
Man, I promise, she's so self-conscious
She has no idea what she doin' in college
That major that she majored in don't make no money
But she won't drop out, her parents'll look at her funny
Now, tell me that ain't insecure
The concept of school seems so secure
Sophomore, three years, ain't picked a carrier
She like, "Fuck it, I'll just stay down here and do hair."
'Cause that's enough money to buy her a few pairs
Of new Airs, 'cause her baby daddy don't really care
She's so precious with the peer pressure
Couldn't afford a car, so she named her daughter Alexis
She had hair so long that it looked like weave
Then she cut it all off, now she look like Eve
And she be dealin' with some issues that you can't believe
Single black female addicted to retail, and well

[Syleena Johnson and Kanye West:]
Oh, when it all, it all falls down
And when it falls down, who you gon' call now?
I'm tellin' you all, it all falls down
C'mon, c'mon, and when it falls down
Oh, when it all

[Kanye West:]
Man, I promise, I'm so self-conscious
That's why you always see me with at least one of my watches
Rollie's and Pasha's done drove me crazy
I can't even pronounce nothin', pass that Ver-say-see!
Then I spent four hundred bucks on this
Just to be like, "Nigga, you ain't up on this."
And I can't even go to the grocery store
Without some Ones that's clean and a shirt with a team
It seem we livin' the American Dream
But the people highest up got the lowest self-esteem
The prettiest people do the ugliest things
For the road to riches and diamond rings
We shine because they hate us, floss 'cause they degrade us
We tryna buy back our 40 acres
And for that paper, look how low we'll stoop
Even if you in a Benz, you still a nigga in a coupe

[Syleena Johnson and Kanye West:]
Oh, when it all, it all falls down
Come on, come on
I'm tellin' you all, it all falls down
And when it falls down, who you gon' call now?
Oh, when it all, it all falls down
Come on, come on
I'm tellin' you all, it all falls down
And when it all falls down

[Kanye West:]
I say, "Fuck the police," that's how I treat 'em
We buy our way out of jail, but we can't buy freedom
We'll buy a lot of clothes, but we don't really need 'em
Things we buy to cover up what's inside
'Cause they made us hate ourself and love they wealth
That's why shorty's hollerin', "Where the ballers at?"
Drug dealer buy Jordan, crackhead buy crack
And the white man get paid off of all of that
But I ain't even gon' act holier than thou
'Cause fuck it, I went to Jacob with 25 thou
Before I had a house and I'd do it again
'Cause I wanna be on 106 and Park, pushin' a Benz
I want to act ballerific like it's all terrific
I got a couple past-due bills, I won't get specific
I got a problem with spendin' before I get it
We all self-conscious, I'm just the first to admit it

[Syleena Johnson and Kanye West:]
Oh, when it all, it all falls down
C'mon, c'mon
And when it falls down, who you gon' call now?
I'm tellin' you all, it all falls down
C'mon c'mon, and when it falls down
Oh, when it all, it all falls down
Southside, Southside
We gon' set this party off right
I'm tellin' you all, it all falls down
Westside, Westside
We gon' set this party off right
Oh when it all, it all falls down
Chi-Town, Chi-Town
We gon' show 'em how we get down
I'm tellin' you all, it all falls down
Now, Syleena, you just like a safe belt, you saved my life
C'mon
Oh when it all, it all falls down
I'm tellin' you all, it all falls down`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics5.addEventListener('click', () => {
        const lyrics = `"I'll Fly Away"

One glad morning when this life is over,
I'll fly away.
To a land where joy shall never end,
I'll fly away.

I'll fly away, O Glory,
I'll fly away.
When I die, Hallelujah, bye and bye,
I'll fly away.`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics6.addEventListener('click', () => {
        const lyrics = `"Spaceship"
(feat. GLC, Consequence)

[Kanye West & GLC:]
I've been working this grave-shift
And I ain't made shit (Yeah, yeah)
I wish I could (Me too)
Buy me a spaceship and fly (Swear I do)
Past the sky, oh
GLC feel you, baby—I feel you, man
I've been working this grave-shift
And I ain't made shit
I wish I could
Buy me a spaceship and fly
Past the sky (Man, man, man...)
Oh, oh, oh

[Kanye West:]
If my manager insults me again
I will be assaulting him
After I fuck the manager up
Then, I'm gonna shorten the register up
Let's go back, back to the Gap
Look at my check—wasn't no scratch
So if I stole, wasn't my fault
Yeah, I stole—never got caught
They take me to the back and pat me
Asking me about some khakis
But let some black people walk in
I bet you they show off their token blackie
Oh, now they love Kanye
"Let's put him all in the front of the store"
So I'm on break
Next to the "No Smoking" sign with a blunt in the mall
Taking my hits, writing my hits
Writing my rhymes, playing my mind
This fucking job can't help him
So I quit; y'all welcome
Y'all don't know my struggle
Y'all can't match my hustle
You can't catch my hustle
You can't fathom my love, dude
Lock yourself in a room
Doing five beats a day for three summers
That's A Different World like Cree Summer's
I deserve to do these numbers
"The kid that made that deserves that Maybach!"
So many records in my basement
I'm just waitin' on my spaceship, blaow!

[Kanye West, GLC, & Kanye:]
I've been working this grave-shift
And I ain't made shit
I wish I could buy me a spaceship and fly
Past the sky, oh
I've been working this grave-shift
And I ain't made shit
I wish I could buy me a spaceship and fly
Past the sky
Tryna tell you, man, way past the sky
Oh, oh (Let's go, ugh)

[GLC:]
And I didn't even try to work a job
Represent the mob at the same time (Woo)
Thirsty on the grind, Chi state of mind
Lost my mama, lost my mind (Aww)
Life, my love, that's not mine
"Why you ain't signed?" Wasn't my time
Leave me alone, work for y'all
Half of it's yours, half of it's mine
Only wanna ball, never wanna fall (Ugh)
Gotta get mine, gotta take mine (Ugh)
Got a Tec-9, reach my prime (Ugh)
Gotta make these haters respect mine (Yeah)
In the mall 'til 12 when my schedule had said 9
Putting them pants on shelves
Waiting patiently; I ask myself
Where I wanna go, where I wanna be
Life is much more than running in the streets
Holler at 'Ye, hit me with the beat
Put me on my feet, sounds so sweet
Yes, I'm the same ol' G
Same goatee, stayin' low-key, nope
Holler at God, "Man, why'd you have to take my folks?"
Hope to see Freddie G., Yusef G, love my G
Rolly G, police watch me
Smoke my weed and count my Gs
Got a lot of people counting on me (That's right)
And I'm just tryin' to find my peace (That's right)
Should've finished school like my niece
Then I finally wouldn't use my piece, blaow!

[Kanye West, GLC, & Kanye:]
I've been working this grave-shift
Aww, man, this pressure
And I ain't made shit
I wish I could
Buy me a spaceship and fly
Past the sky, oh
I've been working this grave-shift
And I ain't made shit
I wish I could
Buy me a spaceship and fly
Past the sky
Oh, oh, oh

[Consequence:]
I 'member having to take the dollar cab
Coming home real late at night
Standing on my feet all damn day
Tryna make this thing right
And havin' one of my co-workers say, "Yo, you look just like
This kid I seen in an old Busta Rhymes video the other night"
Well, easy come, easy go, how that saying goes
No more broad service, cars, and them TV shows
That all had got snatched from me, A&Rs and they faculties
All turn their back on me and didn't wanna hear a rap from me
So naturally, actually, had to face things factually
Had to be a catastrophe, empty fridge is staring back at me
'Cause nothing's there, nothing's fair
I don't wanna ever go back there
So I won't be taking no days off 'til my spaceship takes off, bow!

[Kanye West & Kanye:]
I've been working this grave-shift
And I ain't made shit
I wish I could
Buy me a spaceship and fly
Past the sky, oh
I've been working this grave-shift
And I ain't made shit
I wish I could
Buy me a spaceship and fly
Past the sky
Oh, oh, oh

[Tony Williams:]
I wanna fly
I wanna fly
I said I want my chariot to pick me up
And take a brother for a ride
(Heaven knows, heaven knows)`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics7.addEventListener('click', () => {
        const lyrics = `"Jesus Walks"

We at war
We at war with terrorism, racism
But most of all we at war with ourselves

(Jesus walk)
God show me the way because the Devil's tryna break me down
(Jesus walk with me)

You know what the Midwest is? Young and restless
Where restless (Niggas) might snatch your necklace
And next these (Niggas) might jack your Lexus
Somebody tell these (Niggas) who Kanye West is
I walk through the valley of the Chi where death is
Top floor the view alone will leave you breathless
Try to catch it it's kinda hard
Getting choked by detectives, yeah, yeah, now check the method
They be askin' us questions, harass and arrest us
Sayin' "We eat pieces of shit like you for breakfast"
Huh? Y'all eat pieces of shit? What's the basis?
We ain't going nowhere but got suits and cases
A trunk full of coke, rental car from Avis
My mama used to say only Jesus can save us
Well mama I know I act a fool
But I'll be gone 'til November, I got packs to move
I hope

(Jesus walk)
God show me the way because the Devil's tryna break me down
(Jesus walk with me)
The only thing that I pray is that my feet don't fail me now
(Jesus walk)
And I don't think there's nothin' I can do now to right my wrongs
(Jesus walk with me)
I wanna talk to God but I'm afraid 'cause we ain't spoke in so long
(Jesus walk)
God show me the way because the Devil's tryna break me down
(Jesus walk with me)
The only thing that I pray is that my feet don't fail me now
(Jesus walk)
And I don't think there's nothin' I can do now to right my wrongs
(Jesus walk with me)
I wanna talk to God but I'm afraid 'cause we ain't spoke in so long
So long, so long
(Jesus walk with me)

To the hustlers, killers, murderers, drug dealers, even the scrippers
(Jesus walks for them)
To the victims of welfare feel we livin' in Hell here, hell yeah
(Jesus walks for them)
Now, hear ye, hear ye, want to see Thee more clearly
I know He hear me when my feet get weary
'Cause we're the almost nearly extinct
We rappers is role models: we rap, we don't think
I ain't here to argue about His facial features
Or here to convert atheists into believers
I'm just tryna say the way school need teachers
The way Kathie Lee needed Regis, that's the way I need Jesus
So here go my single, dawg, radio needs this
They say you can rap about anything except for Jesus
That means guns, sex, lies, videotape
But if I talk about God my record won't get played, huh?
Well if this take away from my spins
Which'll probably take away from my ends
Then I hope this take away from my sins
And bring the day that I'm dreamin' about
Next time I'm in the club, everybody screamin' out

(Jesus walk)
God show me the way because the Devil's tryna break me down
(Jesus walk with me)
The only thing that I pray is that my feet don't fail me now`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics8.addEventListener('click', () => {
        const lyrics = `"Never Let Me Down"
(feat. Jay-Z & J-Ivy)

When it comes to being true, at least true to me
One thing I've found, one thing I found
Oh no, you'll never let me down
Get up, I get down, get up, I get down
Get up, I get down, get up, I get down
Get up, I get down, get up, I get down

[Jay-Z:]
Yo, first I snatched the streets, then I snatched the charts
First I had their ear, now I have their heart
Rappers came and went, I've been here from the start
I seen them put it together, watched them take it apart
Seen the Rovers roll up with ribbons
I seen them re-po'd, re-sold, then re-driven
So when I reload, he holds number one position
When you hot, I'm hot
And when your feet cold, mines is sizzling
It's plain to see, niggas can't fuck with me
'Cause I'ma be that nigga for life
This is not an image, this is God-given
This is hard-livin', mixed with Cristal sippin'
It's the most consistent, Hov
Give you the most hits you can fit inside a whole disc and
Nigga I'm home on these charts, y'all niggas visitin'
It's Hov tradition, Jeff Gordon of rap
I'm back to claim pole position, holla at ya boy

When it comes to being true, at least true to me
One thing I've found, one thing I found
Oh no, you'll never let me down
Get up, I get down, get up, I get down
Get up, I get down, get up, I get down
Get up, I get down, get up

[Kanye West:]
I get down for my grandfather who took my mama
Made her sit in that seat where white folks ain't want us to eat
At the tender age of 6, she was arrested for the sit-ins
And with that in my blood I was born to be different
Now niggas can't make it to ballots to choose leadership
But we can make it to Jacob's and to the dealership
That's why I hear new music and I just don't be feelin' it
Racism's still alive, they just be concealin' it
But I know they don't want me in the damn club
They even made me show ID to get inside of Sam's Club
I done did dirt and went to church to get my hands scrubbed
Swear I've been baptized 'least three or four times
But in the land where niggas praise Yukons and getting paid
It's gonna take a lot more than coupons to get us saved
Like it take a lot more than doo rags to get you waves
Nothing sad as that day my girl's father passed away
So I promised to Mr. Rainey I'm gonna marry your daughter
And you know I gotta thank you for the way that she was brought up
And I know that you were smiling when you see the car I bought her
You sent tears from heaven when you seen my car get balled up
But I can't complain what the accident did to my left eye
'Cause look what an accident did to Left Eye
First Aaliyah now Romeo must die
I know I got angels watching me from the other side

When it comes to being true, at least true to me
One thing I've found, one thing I found
Oh no, you'll never let me down
Get up, I get down, get up, I get down
Get up, I get down, get up, I get down
Get up, I get down, get up, I get down

[J. Ivy:]
We are all here for a reason on a particular path
You don't need a curriculum to know that you're a part of the math
Cats think I'm delirious but I'm so damn serious
That's why I expose my soul to the globe; the world
I'm trying to make it better for these little boys and girls
I'm not just another individual
My spirit is a part of this that's why I get spiritual
But I get my hymns from Him
So it's not me, it's He that's lyrical
I'm not a miracle, I'm a heaven-sent instrument
My rhythmatic regiment navigates melodic notes
For your soul and your mental
That's why I'm instrumental, vibrations is what I'm into
Yeah I need my loot by rent day
But that ain't what gives me the heart of Kunta Kinte
I'm trying to get us "us free" like Cinque
I can't stop, that's why I'm hot
Determination, dedication, motivation
I'm talking to you of my many inspirations
When I say I can't let you or self-down
If I were on the highest cliff, on the highest riff
And if you slipped off the side and clinched on to your life
In my grip, I would never ever let you down
And when these words are found
Let it be known that God's penmanship has been signed
With a language called love
That's why my breath is felt by the deaf
And while my words are heard and confined to the ears of the blind
I too dream in color and in rhyme
So I guess I'm one of a kind in a full house
'Cause whenever I open my heart, my soul or my mouth
A touch of God reigns out
Take 'em to church

When it comes to being true, at least true to me
One thing I found, one thing I found
Oh no, you'll never let me down
Get up, I get, get up, I get
Get up, I get, get up, I get
Get up, I get, get up, I get down

[Jay-Z and Kanye West:]
Who else you know been hot this long?
(Oh yeah, we ain't finished)
Started from nothing but he got this strong
(The Roc is in the building)
Built the Roc from a pebble, peddled rock before I met you
Pedaled bikes, got my nephews pedal bikes because they're special (Wooooo)
Let you tell it, man, I'm falling
Well, somebody must have caught him
'Cause every fourth quarter, I like to Mike Jordan them
Number one albums, what I got? Like four of them
More of them on the way, the eighth wonder on the way
Clear the way, I'm here to stay
Y'all can save the chitter chat, this and that
This is Jay, dissing Jay will get you maced
When I start spitting them lyrics niggas get very religious
Six Hail Marys, 'Please Father forgive us'
Young the archbishop, the Pope John Paul of y'all niggas
The way y'all all follow Jigga
Hov's a living legend and I'll tell you why
Everybody wanna be Hov and Hov's still alive`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics9.addEventListener('click', () => {
        const lyrics = `"Get Em High"
(feat. Talib Kweli, Common)

[Kanye West:]
Uh-uh, I'm tryna catch the beat, uh
I'm tryna to catch the beat
I'm tryna to catch the beat, uh uh, uh
I'm tryna to catch the beat

[Kanye West:]
N-now, th-th-throw your motherfuckin' hands
(Get 'em high)
All the girls pass the weed to yo' motherfuckin' man
(Get 'em high)
Now I ain't never tell you to put down your hands
(Keep 'em high)
And if you're losin' your high then smoke again
(Keep 'em high)

[Kanye West:]
N-n-n-now, my flow
Is in the pocket like wallets, I got the bounce like hydraulics
I can't call it, I got the swerve like alcoholics
My freshman year I was going through hella problems
'Til I, built up the nerve to drop my ass up out of college
My teacher said I'se a loser, I told her "Why don't you kill me?"
I give a fuck if you fail me, I'm gonna follow my heart
And if you follow the charts, or the plaques or the stacks
You ain't gotta guess who's back, you see
I'm so Chi that you thought I was bashful
But this bastard's flow will bash your skull
And I will, cut your girl like Pastor Tro'
And I don't, usually smoke, but pass the 'dro
And I won't, give you that money that you askin' for
Why you think me and Dame cool? We assholes
That's why we hear your music in fast forward
'Cause we don't wanna hear that weak shit no mo'

[Kanye West:]
N-now, th-th-throw your motherfuckin' hands
(Get 'em high)
All the girls pass the weed to your motherfuckin' man
(Get 'em high)
Now I ain't never tell you to put down your hands
(Keep 'em high)
And if you're losin' yo' high, then smoke again
(Keep 'em high)

[Kanye West & Sumeke Rainey:]
("You've got mail!") N-n-n-n-n-now who the hell is this
E-mailing me at 11:26?
Telling me that she 36-26, plus double D
You know how girls on Black Planet be when they get bubbly
At NYU but she hail from Kansas
Right now she just lampin', chillin' on campus
Sent me a picture with her feelin' on Candice
Who said her favorite rapper was the late great Francis
W-H-I-T, it's getting late mami
Your screen saver say tweet, so you got to "call me"
And bring a friend for my friend, his name Kweli
(You mean Talib? Lyrics stick to your rib)
I mean (That's my favorite CD that I play at my crib)
I mean (You don't really know him, why is you lyin'?)
Yo Kwe, she don't believe me, please pick up the line
She gon' think that I'm lyin', just spit a couple of lines
Then maybe I'll be able to give her dick all the time
And get her high! Owww!

[Talib Kweli:]
Yeah, I can't believe this nigga use my name for pickin' up dimes
But never mind, I need some tracks, you tryin' to pull tracks out
And my rhymes is finna blow, you trying to blow backs out
Well OK, you twisted my arm, I'll assist with the charm
Ayo, ain't you meet that chick at that conference with your moms?
And sister's the bomb, boy she got the bougie behavior
Always got something to say like a OK player hater
Anyways, I don't usually fuck with the Internet
Or chicks with birth control stuck to they arm like Nicorette
You really fuckin' that much or tryna get off cigarettes? (Keep 'em high)
If she think it's fly, she ain't met a real nigga yet
Now I apologize if I come off a little inconsiderate
I got the bubba kush and a sister could get a hit of it, yeah

[Common:]
Yo, yo
Get 'em high like noon or the moon
Or a room filled with smoke, a hype-filled with dope
Y'all assumed I was doomed, out of tune
But I still filled the notes with real nigga quotes
Real rappers is hard to find, like a remote
Control rap is out of
Used to, but still got love
That's why I abuse you who are not thugs
Rock clubs, it's like Tiger Woods in the hood
Should have my own reality show, called Soul Survivor
I stole on liver niggas than you
You's a bitch I got ones that are thicker than you
How could I ever let your words affect me?
They say hip-hop is dead, I'm here to resurrect me
Marsha's too sexy to even make songs like these
That's why the raw don't know your name, like Alicia Keys
Too many featured MCs, and producers is popular
Twelve thousand spins, nobody got to coppin' a
Album, how come you the hot garbage of
The year? It's clear your image is looped up
Label got you souped up, tellin' you you sick
When you a dick with a loose nut
Video hard to watch like Medusa
Even your club record need a booster, chimped up
With a pimp cup, illiterate nigga, read the infra-
Red across your head, I'm bred king like Simba
Bolder than Denver, I ain't a Madd Rapper
Just a MC with a temper
You dancin' for money like Honey, I did this my way
So when the industry crash, I survive like Kanye
Spittin' through wires and fires, MCs retirin'
Got your hands up, get them motherfuckers higher then

[Kanye West & Common:]
N-now, th-th-throw your motherfuckin' hands
(Get 'em high, yeah)
All the girls pass the weed to your motherfuckin' man
(Get 'em high, mm-mm, uh-uh)
Now I ain't never tell you to put down your hands
(Keep 'em high, keep 'em high, keep 'em high, uh-uh)
And if you're losin' your high then smoke again
(Keep 'em high)
`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics10.addEventListener('click', () => {
        const lyrics = `"Workout Plan"

[Girl #1]
Ay what's up girl

[Girl #2]
Hey girl

[Girl #3]
Hey how you doin'?

[Girl #1]
Ay you know I finally got my shit together been watching that workout plan girl!

[Girl #2]
Well you lookin' all good and stuff you got you a-

[Girl #1]
Girl I know it's that workout

[Girl #2]
Got you a six pack Shakur and stuff

[Girl #1]
Don't say it

[Girl #3]
My nigga my nigga I'm tired of putting 1-8-7 in my nigga's pager that shit ain't workin' no more

[Girl #1]
Girl you know I'ma video hofesional now (girl) since I copped this new workout plan my shit
Is right rollin' in Lexus, Acuras everything girl

[Girl #3]
Girl you need to let me know where I can cop that how much is it?

[Girl #1]
Girl you know you ain't gotta pay nothing around me I'm the bootleg queen I'll give it to
You for free.99

[Both girls #2 and #3]
FREE.99!

[Girl #3]
That's my dawg you always looking out for us

[Girl #2]
My nigga now I can throw away my bus pass and shit oh my God

[Girl #3]
Oh shit`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics11.addEventListener('click', () => {
        const lyrics = `"The New Workout Plan"

You just popped in the Kanye West
Get Right for the Summer workout tape
And ladies if you follow these instructions exactly
You might be able to pull you a rapper, a NBA player
Man, at least a dude with a car
So, first of all, we gon' work on the stomach
Nobody wants a little tight ass

1, and 2, and 3, and 4, and get them sit ups right, and
Tuck your tummy tight and do your crunches like this
Give head, stop, breathe, get up, check your weave
Don't drop the blunt and disrespect the weed
Pick up your son and don't disrespect your seed
It's a party tonight and ooh she's so excited
Tell me who's invited: you, your friends and my dick
(Ah!) What's scary to me is
Henny makes girls look like Halle Berry to me
So excuse me miss, I forgot your name
Thank you, God bless you, good night I came, I came, I came

It's been a week without me
And she feel weak without me
She wanna talk it out but
Ain't nothing to talk about
Unless she talk about freaking out
Then maybe we can work it out
Work it out, work it out
Work it out, work it out now
Maybe we can work it out

Oh, girl, your silhouette make me wanna light a cigarette
My name Kanye from the Jigga set, Twista said "Get It Wet"
Ooh girl your breath is harsh!
Cover your mouth up like you got SARS
Off them tracks yea I bought them cars
Still, kill a nigga on 16 bars
We ain't sweating to the oldies, we juking to a cold beat
Maybe one day girl we can bone
So you can brag to all your homies now
But I still mess with a big girl, if you ain't fit girl, I'll still hit girl
1 and, you brought 2 friends, OK, 3 more now hop in the Benz
4-door: do you know the difference between a 5, 6, 7, 8?
All the mocha lattes, you gotta do Pilates
You gotta pop this tape in before you start back dating
Hustlers, gangstas, all us ballas

It's been a week without me
And she feel weak without me
She wanna talk it out but
Ain't nothing to talk about
Unless she talk about freaking out
Then maybe we can work it out
Work it out, work it out
Work it out, work it out now
Maybe we can work it out

Hi, my name is Jill, I just want to say thanks to Kanye's workout plan. I
Was able to pull a NBA player. And like now I shop every day on Rodeo
Drive. I just want to say, thank you Kanye! Woooo! Woooo! Woooo!

My name is Lasandra, and I just want to say that ever since listening to
Kanye's workout tape, I was able to get my phone bill paid, I got sounds
And 13's put up in my Cavalier and I was able to get a free trip to
Cancun. And what's most importantly is that I ain't gotta fuck with
Ray-Ray's broke ass no more

Work it (more)
Juke it (more) Pump it (more)
Chi-Town (more) Let's go (more)

My name is Ella-May from Mobile, Alabama, and I just want to say since
Listening to Kanye's workout tape, I been able to date outside the family,
I got a double wide, and I rode a plane, rode a plane, rode a plane

Thanks to Kanye's workout plan
I'm the envy of all my friends
See I pulled me a baller man
And I ain't gotta work at the mall again

(Lemme break ya with a piece of)
My favorite work out plan (Oh! Oh! Oh!)
I wanna see you work out
(Yeah, yeah, yeah, yeah, yeah, yeah, yeah, yeah)
I wanna see you work out
(It's like that old Michael Jackson shit)

That's right, put in work, move your ass, go berserk
Eat your salad, no dessert, get that man you deserve

It's Kanye's workout plan
I said it's Kanye's workout plan (Ladies and gentlemen)
It's Kanye's workout plan (Allow myself to introduce myself)
His workout plan (This time around, I want y'all to clap like this)

That's right, put in work
Move your ass, go berserk
Eat your salad, no dessert
Get that man you deserve (Stop!)

It's Kanye's workout plan (OK, breathe)
I said it's Kanye's workout plan (I know y'all ain't tired)
It's Kanye's workout plan (But I hope not 'cause on this one I need ya)
His workout plan (To give me a soul clap, OK?)
(Double time)

That's right, put in work (Woo!)
Move your ass, go berserk (Ow!)
Eat your salad, no dessert (Ugh!)
Get that man you deserve

That's right, put in work (Put in work)
Move your ass, go berserk (Go berserk)
Eat your salad, no dessert (No dessert)
Get that man you deserve (You hear, ugh)

That's right, put in work (That's right put in work)
Move your ass, go berserk (Go berserk)
Eat your salad, no dessert (Eat your salad, no dessert)
Get that man you deserve (Woo!)

(OK, OK, OK, that's, that'd be good)
(I appreciate your time)
I want to see you work out for me
Whoa, yeah, whoa yeah
Do-do-do-do-do-do-do-do-do-do, yo`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics12.addEventListener('click', () => {
        const lyrics = `"Slow Jamz"
(feat. Twista, Jamie Foxx)

[Jamie Foxx:]
Kanye, it's Foxx, man
I'm just sayin' I was talkin' to the girls you know
And we don't put enough emphasis on the ladies sometime
You know, I was talkin' to this girl
She was talkin' about the music all fast in the club you know
She gotta drink water 'cause she thirsty
She danced like 92 hundred songs back to back
With ain't nobody really try to find out what she feelin'
Like how she feel... you know what she told me?
(Are you gonna be?) Check it out, this is what she said
(Say that you're gonna be) Ooh, ooh, ooh, ooh, oooh

[Luther Vandross:]
Are you gonna be?
Say that you're gonna be

[Jamie Foxx:]
Oh oh oh oh oh

[Jamie Foxx:]
She said she want some Marvin Gaye, some Luther Vandross, a little Anita, will definitely set this party off right
(Are you gonna be, are you gonna be, are you gonna be, are you gonna be, are you gonna be? Well well well well well)
She said she want some Ready for the World, some New Edition, some Minnie Riperton will definitely set this party off right
(Are you gonna be, are you gonna be, are you gonna be, are you gonna be, are you gonna be? Well well well well well)

[Kanye West:]
It definitely will!
You know what I told her?

[Kanye West:]
I told her to drive over in your new whip
Bring some friends you cool with
I'm gonna bring the cool whip
Then I want you to strip
See you is my new chick
So we get our grind on
She be grabbing, calling me Biggie like Shyne home
Man, I swear she fine homes
Why she always lying though
Telling me them diamonds when she know they rhinestones
She got a light skinned friend look like Michael Jackson
Got a dark skinned friend look like Michael Jackson
I played 'Ready for the World' - she was ready for some action
My dog said you ain't no freak, so you're 'bout to prove my man wrong
I'm a play this Vandross
You're gonna take your pants off
I'm gonna play this Gladys Knight
Me and you're gonna get right

She said she want some Marvin Gaye, some Luther Vandross
A little Anita will definitely set this party off right
(Are you gonna be, are you gonna be, are you gonna be
Are you gonna be, are you gonna be, well well well well)
She said she want some Ready for the World, some New Edition
Some Minnie Riperton will definitely set this party off right
(Are you gonna be, are you gonna be, are you gonna be
Are you gonna be, are you gonna be, well well well well)

[Jamie Foxx:]
Smokey Robinson, Smokey Robinson
Freddie Jackson, everything, everything (Well well well well)
Smokey Robinson, Ashford & Simpson (Are you gonna be)
Set the party, really set the party off right
Yes it will, yes it will (Well well well well)
Al Green, oh! Al Green, ohh yeah!
Oooh!
Whatcha know about the Isley Brothers?

[Aisha Tyler & Kanye West:]
Now Kanye, I know I told you to slow it down, baby
It's good, it's all good, it's beautiful
But now I need you to do it faster baby
Can you please? Do it faster, baby, do it faster!
Damn, baby; I can't do it that fast... but I know somebody who can, Twista!

[Twista:]
Got you looking at the glist on my hands and wrist
While I'm laying back smoking on my cannabis
When it come to rocking the rhythm like Marvin and Luther
I can tell you ain't no messing with Kan-man and Twist
From the Chi and I be
Sipping Hennessy
Play some R&B
While I smoke a B
you can preferably find that I'm a G?
And all this (well well well well well)
Come with me and sip on some Evelyn Champagne
You ain't know Twista work it like the Whispers
Hit the stop light, move it to some Isleys
The rims still moving so I bump a little Spinners
While I'm smoking on a B
Dipping through the streets
Bumping R&B
And I got the heat on the 23s?
And I do it (well well well well well)
With my Earth and the Wind smoke a Fire
Let me get your sheets wet listening to Keith Sweat
Put you in a daze with Maze
Fulfilling our every temptation slow jamming having deep sex
You ready for the world girl
Come on go with me I touch you all over your body baby don't say no to me
And every moment you controllin' me I'm loving the way you be holding me when I be listening to Jodeci
And when I come over and bend your ass
You be bumping Teddy Pendergrass
I'd hit it from the back to the melody and rode it slow
Now I gotta go up in it fast, but I'm 'a finish last
No matter how much of a thug you see
I still spit it like it's R&B, come to the club with me
And when some Luther come on I hope you feeling me and still will be in love with me
Chi ride

[Jamie Foxx:]
She said she want some Marvin Gaye, some Luther Vandross, a little Anita, will definitely set this party off right
(Are you gonna be, are you gonna be, are you gonna be, are you gonna be, are you gonna be? Well well well well well)
She said she want some Ready for the World, some New Edition, some Minnie Riperton will definitely set this party off right
(Are you gonna be, are you gonna be, are you gonna be, are you gonna be, are you gonna be? Well well well well well)

[Jamie Foxx & Tracie Spencer]

[Jamie Foxx):]
She said she want some Marvin Gaye, some Luther Vandross, a little Anita, will definitely set this party off right
(Are you gonna be, are you gonna be, are you gonna be, are you gonna be, are you gonna be? Well well well well well)
She said she want some Ready for the World, some New Edition, some Minnie Riperton will definitely set this party off right
(Are you gonna be, are you gonna be, are you gonna be, are you gonna be, are you gonna be? Well well well well well)
`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics13.addEventListener('click', () => {
        const lyrics = `"Breathe In Breathe Out"
(feat. Ludacris)

[Ludacris:]
Yeah, breathe in, breathe out
If ya iced up, pull ya sleeves out
Push a big truck, pull ya keys out
Girls go wild and pull ya D's out
Breathe in, breathe out
Let them hoes fight, pull her weave out
If a nigga act up, pull a Desert E's out
When I pull the piece out niggas like "Peace out!"

[Kanye West:]
Golly, more of that bullshit ice rap
I got to 'pologize to Mos and Kweli (probably)
But is it cool to rap about gold
If I told the world I copped it from Ghana and Mali? (Mali!)
First nigga with a Benz and a backpack
Ice chain, Carti lens, and a knapsack
Always said if I rapped I'd say somethin' significant
But now I'm rappin' 'bout money, hoes, and rims again
And it's still about the Benjamins
Big faced hundreds and whatever other synonyms
Strippers named Cinnamon, more chips than Pentium
"What'cha gon' buy next?" Whatever new trend it is
I'm tryin' to spend my stacks, and I'm so broke
I look back like "Damn, was I on crack?"
I mean, twelve platinum chains, was I on that?
What the hell was wrong with me dog?
Sing along with me y'all

[Ludacris:]
Yeah, breathe in, breathe out
If ya iced up, pull ya sleeves out
Push a big truck, pull ya keys out
Girls go wild and pull ya D's out
Breathe in, breathe out
Let them hoes fight, pull her weave out
If a nigga act up, pull a Desert E's out
When I pull the piece out niggas like "Peace out!"

[Kanye West:]
Now even though I went to college
And dropped out of school quick
I always had a Ph.D: a pretty huge dick
Ladies tired of gettin' ripped off by guys like this
And givin' head is like a whale that's usin' a toothpick
Well, I'm in the club for a limited time
Act now and get some action for a $free.99
Later on, I might charge for ménage
Heard her man was the boss of the floss
But she still want to toss me the drawers
And it ain't gon' cost me because she my caddy
Cuz she grabbed my golf balls in the club
And I'm still actin' calm den-a-muhh, she asked
"Can you drive me in the hundreds where my Altima was?"
While we drive she tellin' me 'bout problems with her man
Baby, I fully understand, let me help you with a plan
While he trickin' off, don't get no rich nigga
Give me some head, that'll really piss him off

[Ludacris:]
Yeah, breathe in, breathe out
If ya iced up, pull ya sleeves out
Push a big truck, pull ya keys out
Girls go wild and pull ya D's out
Breathe in, breathe out
Let them hoes fight, pull her weave out
If a nigga act up, pull a Desert E's out
When I pull the piece out niggas like "Peace out!"

[Kanye West:]
I blow past low-class niggas with no cash
In the four dash six, bitch you can go ask
So when I go fast popo just laugh
Right until I run out of gas or 'til I go crash
Whatever comes first I'm prepared for the worst
Whatever comes second I'll be there with my weapon
Pullin' up in the Lexuses, one on both hand
So I guess them GSes was ambidextrous
Coulda sworn her breasteses was sendin' me messages
"K I need a free hand mammogram
I got weed, drink, and a Handicam
All of which is legal in Amsterdam"
So say my name like Candyman
And I'ma come and fix you up like the handyman
But if you don't need a fix, girl you gotta leave
You can't take that all at one time ya gotta breathe

[Ludacris:]
Yeah, breathe in, breathe out
If ya iced up, pull ya sleeves out
Push a big truck, pull ya keys out
Girls go wild and pull ya D's out
Breathe in, breathe out
Let them hoes fight, pull her weave out
If a nigga act up, pull a Desert E's out
When I pull the piece out niggas like "Peace out!"

"And you say Chi city?"`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics14.addEventListener('click', () => {
        const lyrics = `"School Spirit Skit 1"

[DeRay Davis:]
Now beat that!
And your mother's saying "Go to college"
So you finish college and it's wonderful
You feel so good
And after all the partying and craziness
And don't forget about that drug habit you picked up at school being around your peers
Hey!
Now you'll get that 25-thous job a year
And you'll spend all your money on crack cocaine
But, it'll be your money
No more borrowing from mom for my high!
So now you get your degree tattooed on your back you're so excited about it
If you continue to work at the Gap, after several interviews, oh my God
You'll come in at a entry-level position
And when you do that
If you kiss enough ass
You'll move up to the next level
Which is being a secretary's secretary
And boy is that great
You get to take messages for the secretary
Who never went to college
She's actually the boss's niece!
So now you're part of the family
You know what college does for you?
It makes you really smart, man
All you kids want to talk in the back of the class
Not me, I listened
OK?
I was a hall monitor
This was meant to be
You know how many classes I took?
Extra classes, extra classes
No, I've never had sex
But you know what?
My degree keeps me satisfied
When a lady walks up to me and says
"Hey, you know what's sexy?"
I say no, I don't know what it is
But I bet I can add up all the change in your purse very fast`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics15.addEventListener('click', () => {
        const lyrics = `"School Spirit"

School spirit, motherfucker

Alpha, step, Omega, step
Kappa, step, Sigma, step
Gangstas walk, pimps gon' talk
Ooh, hecky nah, that boy is raw
AKA, step, Delta, step
S.G. Rho, step, Zeta, step
Gangstas walk, pimps gon' talk
Ooh, hecky nah, that boy is raw

I'ma get on this TV, mama
I'ma, I'ma put shit down
I'ma make sure these light-skinned niggas
Never, ever, never come back in style
Told 'em I finished school and I started my own business
They say, "Oh you graduated?" No, I decided I was finished
Chasing y'all dreams and what you've got planned
Now I spit it so hot, you got tanned
Back to school and I hate it there, I hate it there
Everything I want, I gotta wait a year, I wait a year
This nigga graduated at the top of our class
I went to Cheesecake, he was a motherfucking waiter there

Alpha, step, Omega, step
Kappa, step, Sigma, step
Gangstas walk, pimps gon' talk
Ooh, hecky nah, that boy is raw
AKA, step, Delta, step
S.G. Rho, step, Zeta, step
Gangstas walk, pimps gon' talk
Ooh, hecky nah, that boy is raw

I got a Jones like Norah for your soror-
Bring more of them girls, I've seen in The Aurora
Tammy, Becky, and Laura, or a Shirley
I'm trying to hit it early, like I'm in a hurry
See, that's how dude became the young Pootie Tang: "tippy tow"
Roc-A-Fella chain, yeah that's my rapper style
Rosary piece, yeah that's my Catholic style
Red and white Ones, yeah that's my Kappa style
And I ain't even pledge
Crack my head on the steering wheel and I ain't even dead
If I could go through all that and still be breathing
Bitch, bend over, I'm here for a reason

Alpha, step, Omega, step
Kappa, step, Sigma, step
Gangstas walk, pimps gon' talk
Ooh, hecky nah, that boy is raw
AKA, step, Delta, step
S.G. Rho, step, Zeta, step
Gangstas walk, pimps gon' talk
Ooh, hecky nah, that boy is raw

I feel a woo coming on, cuz
I feel a woo coming on, cuz
(Woo!)
There it was
I feel some woos coming on, cuz
A couple woos coming on, cuz
(Woo! Woo!)
There they was
I feel a woo coming on, cuz
I feel a woo coming on, cuz
(Woo!)
There it was
A couple woos coming on, cuz
A couple woos coming on, cuz
(Woo! Woo!)
There they was`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics16.addEventListener('click', () => {
        const lyrics = `"School Spirit Skit 2"

You keep it going man, you keep those books rolling,
You pick up all those books that you're gonna read and not remember and you roll man.
You get that associate's degree, okay,
Then you get your bachelor's, then you get your master's
Then you get your master's master's,
Then you get your doctrine,
You go man, and then when everybody says, "Quit,"
You show them those degrees man,
When everyone says, "Hey, you're not working,
You're not making any money,
You say, "You look at my degrees and you look at my life,
Yeah I'm 52. So what? Hate all you want,
But I'm smart, I'm so smart, and I'm in school,
And these guys are out here, um, making
Money all these ways, and I'm spending mine to be smart.
You know why?
'Cause when I die, buddy, you know
What's gonna keep me warm? That's right! Those degrees."
`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics17.addEventListener('click', () => {
        const lyrics = `"Lil Jimmy Skit"

[Man:]
Hey Jimmy where you going?

[Jimmy:]
I don't know where I'm going.
My Dad died, and, uh, he left me his degrees.
My mom would always say "Dad, why don't you work?",
But he just kept learning.
All the other kids' parents were working and saving up money for school,
And I was actually in school all while my dad was in school.
He was so greedy with degrees, he took my degree.
And now I'm just glad he left me these.
Because all the regular homeless people have newspaper, and look what I have.
These are documented.
My father left them to me.
And I'm going to leave them to my kids.
I'm going to learn too.
I'm going to get super smart, so I too can die without money.
But I'll be the smartest dead guy.
Who has that?
`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics18.addEventListener('click', () => {
        const lyrics = `"Two Words"
(feat. Mos Def, Freeway, The Harlem Boys Choir)

[Kanye West:]
We in the streets, playa, get ya mail
It's only two places you end up, either dead or in jail
Still nowhere to go
Still nowhere to go
Now throw ya hands up, hustlers, busters, boosters, hoes
Everybody, fuck that
Still nowhere to go
Still nowhere to go

[Mos Def:]
Two words, United States, no love, no breaks
Low brow, high stakes, crack smoke, black folks
Big Macs, fat folks, ecstasy capsules
Presidential scandals, everybody move
Two words, Mos Def, K. West, hot shit
Calm down, get back, ghetto people, got this
Game 'pon lock shit, gun 'pon cock shit
We won't stop shit, everybody move
Two words, BK, NY, Bed Stuy
Too harsh, too hungry, too many, that's why
These streets know game, can't ball, don't play
Heavy traffic, one lane, everybody move
Two words, Mos Def, Black Jack, hot shit
Calm down, get back, ghetto people, got this
Game 'pon lock, gun 'pon cock
We won't stop, everybody move

[Kanye West (Harlem Boys Choir):]
Now throw ya hands up, hustlers, busters, boosters, hoes
(Throw your hands up high) Everybody, fuck that
Still nowhere to go
Still nowhere to go
And keep ya hands up, hustlers, busters, boosters
Hoes ('Til they reach the sky), everybody, fuck that
Still nowhere to go
Still nowhere to go

[Kanye West:]
Two words: Chi-Town, Southside, worldwide
'Cause I rep that 'til I fuckin' die
One neck, two chains, one waist, two gats
One wall, twenty plaques, dues paid, gimme that
I am limelight, Blueprint, five mics
Go-Getters rhyme, like, should've been signed twice
Most imitated, Grammy-nominated
Hotel accommodated, cheerleader prom-dated
Barbershop playa-hated, mom-and-pop bootlegged it
Felt like it rained 'til the roof caved in
Two words: Chi-Town raised me, crazy
So I live by two words: "Fuck you, pay me"
Screaming, "Jesus, save me!"
You know how the game be, I can't let 'em change me
'Cause on judgment day, you gon' blame me
Look, God, it's the same me
And I basically know now, we get racially profiled
'Cuffed up and hosed down, pimped up and ho'd down
Plus, I got a whole city to hold down
From the bottom, so the top's the only place to go now

[Kanye West (Harlem Boys Choir):]
Now throw ya hands up hustlers, busters, boosters, hoes
(Throw your hands up high)
Oh, everybody, fuck that
Still nowhere to go
Still nowhere to go

[Freeway:]
Two words, Freeway, two letters, AR
Turn y'all rap niggas to two words: fast runners
Like Jackie Joyner, you better sleep with your burner
The heat skeet, blow a reef through your car, my God
Two words: no guns, break arms
Break necks, break backs, Steven Seagal
Free, young boss, freshman of the Roc
With the beef in the pot Jay sent for his dogs to brawl
Forget your squad, better fend for yourself
Have you screamin' out four words, "Send for the law?" ugh
Two words: Freeway, slightly retarded
Fuck around, throw a clip in your artist, leave with his broad

[Mos Def (Harlem Boys Choir):]
Red, white, blue, black (Throw your hands up)
Calm down, move back
Motherfuckers asking, "Who is that?"
You know it's the almighty Black Jack
Mos Def, K. West
Ghetto people get this shit off ya chest
North to the south, to the east, to the west
Black Jack Johnson, it's no contest
(High) And show it to 'em like`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics19.addEventListener('click', () => {
        const lyrics = `"Through The Wire"

Yo, Gee, they can't stop me from rappin', can they?
Can they, Hop?

Through the fire, to the limit, to the wall
For a chance to be with you, I'd gladly risk it all
Through the fire, through whatever, come what may
For a chance at loving you, I'd take it all the way
Right down to the wire, even through the fire

I spit it through the wire, man
There's too much stuff on my heart right now, man
I'd gladly risk it all right now
It's a life-or-death situation, man
Y'all, y'all don't really understand how I feel right now, man
It's your boy, Kanye to the…
Chi-Town, what's goin' on?

I drink a Boost for breakfast, an Ensure for dessert
Somebody ordered pancakes, I just sip the sizzurp
That right there could drive a sane man berserk
Not to worry, Mr. H-to-the-Izzo's back to wizzerk
How do you console my mom or give her light support
Tellin' her her son's on life support?
And just imagine how my girl feel
On the plane scared as hell that her guy look like Emmett Till
She was with me before the deal, she'd been tryna be mine
She a Delta, so she'd been throwin' that Dynasty sign
No use in me tryna be lyin', I been tryna be signed
Tryin' to be a millionaire, how I used two lifelines
In the same hospital where Biggie Smalls died
The doctor said I had blood clots, but I ain't Jamaican, man
Story on MTV and I ain't tryna make a band
I swear, this right here, history in the makin', man

Through the fire, to the limit, to the wall
For a chance to be with you, I'd gladly risk it all
Through the fire, through whatever, come what may
For a chance at loving you, I'd take it all the way
Right down to the wire, even through the fire

I really apologize for everything right now
If it's unclear at all, man
They got my mouth wired shut
For like… I dunno, the doctor said like six weeks
Y'know, he had, I had reconstructive surgery on my jaw
I looked in the mirror
And half my jaw was in the back of my mouth, man
I couldn't believe it
But I'm still here for y'all right now, man
This what I got to say right here, dawg
Yeah, turn me up, yeah, uh

What if somebody from the Chi' that was ill got a deal
On the hottest rap label around?
But he wasn't talkin' 'bout coke and birds
It was more like spoken word, 'cept he's really puttin' it down?
And he explained the story 'bout how blacks came from glory
And what we need to do in the game
Good dude, bad night, right place, wrong time
In the blink of a eye, his whole life changed
If you could feel how my face felt
You would know how Mase felt (Mason Betha!)
Thank God I ain't too cool for the safe belt
I swear to God, driver two wanna sue
I got a lawyer for the case, to keep what's in my safe safe
My dawgs couldn't tell if I…
I looked like Tom Cruise in Vanilla Sky, it was televised
There's been an accident like GEICO
They thought I was burnt up like Pepsi did Michael
I must got a angel, 'cause look how death missed his ass
Unbreakable, what, you thought they'd call me Mr. Glass?
Look back on my life like the Ghost of Christmas Past
Toys "R" Us where I used to spend that Christmas cash
And I still won't grow up, I'm a grown-ass kid
Swear I should be locked up for stupid shit that I did
But I'm a champion, so I turned tragedy to triumph
Make music that's fire, spit my soul through the wire

Through the fire, to the limit, to the wall
For a chance to be with you, I'd gladly risk it all
Through the fire, through whatever, come what may
For a chance at loving you, I'd take it all the way
Right down to the wire, even through the fire

Y'know what I'm sayin'?
When the doctor told me I had, um
That I was gonna have to have a plate in my chin
I said, "Dawg, don't you realize I'll never make it on a plane now?"
"It's bad enough I got all this jewelry on!"
You can't be serious, man`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics20.addEventListener('click', () => {
        const lyrics = `"Family Business"

How's your son? (all the things)
He made the team this year? (all, all, all the things things)
Aight, they said he wasn't tall enough
(...all all that glitters is not gold
And all gold is not reality
Real is what you lays on me)
Ma we here we gon' cook this Sunday OK?
That's a new girlfriend?

This is family business
And this is for the family that can't be with us
And this is for my cousin locked down, know the answer's in us
This why I spit it in my songs so sweet like a photo
Of your granny's picture, now that you're gone, it hit us
Super hard on Thanksgiving and Christmas, this can't be right
Yeah, you heard the track I did man, "This Can't Be Life"
Somebody please say grace so I can save face
And have a reason to cover my face
I even made you a plate, soul food, know how Granny do it
Monkey bread on the side, know how the family do it
When I brought it why the guard have to look all through it?
As kids, we used to laugh
Who knew that life would move this fast?
Who knew I'd have to look at you through a glass?
And look, you tell me you ain't did it then you ain't did it
And if you did, then that's family business

And I don't care 'bout
(All the diamond rings all the diamond rings)
They don't mean a thing (all, all, all the things)
All these fancy things
I tell you that all is my weight and gold
(All that glitters is not gold, now gold is not reality)
Now all I know I know all these things
(Real is what you lease on me)

This is family business
And this is for everybody standing with us
Come on, let's take a family Grammy picture
Abi, remember when they ain't believe in me?
Now she like "See, that's my cousin on TV!"
Now, we gettin' it and we gon' make it
And they gon' hate it and I'm his favorite
I can't deny it, I'm a straight rider
But when we get together be electric slidin'
Grandma, get 'em shook up
Aw naw, don't open the photo book up
I got an Aunt Ruth that can't remember your name
But I bet them Polaroids'll send her down memory lane
You know that one auntie, you don't mean to be rude
But every holiday nobody eating her food
And you don't wanna stay there cause them your worst cousins
Got roaches at their crib like them your first cousins
Act like you ain't took a bath with your cousins
Fit 3 in the bed if it's 6 of y'all
I'm talkin' 'bout three by the head and three by the leg
But you ain't have to tell my girl I used to pee in the bed

Rain, rain, rain go away
Let the sun come out and all the children say
Rain, rain, rain go away
Let the sun come out and all the children say

I woke up early this morning with a new state of mind
A creative way to rhyme without using knives and guns
Keep your nose out the sky, keep your heart to God
And keep your face to the risin' sun
All my niggas from the Chi, that's my family, dog
And my niggas ain't my guys, they my family, dog
I feel like one day you'll understand me, dog
You can still love your man and be manly, dog
You ain't got to get heated at every house warmin'
Sittin' here, grillin' people like George Foreman
Why Uncle Ray and Aunt Shiela always performin'?
The second she storm out then he storm in
Y'all gon' sit down, have a good time this reunion
And drink some wine like Communion
And act like everything fine and if it isn't
We ain't letting everybody in our family business, uh

(All all all the diamond rings diamond rings)
They don't mean a thing (all, all, all the things)
They don't mean a thing (all, all, all the things)
(All all that glitters is not gold, now gold is not reality)
They don't mean a thing a thing
(All, all, all the things)
They don't mean a thing a thing a thing
I don't care what they don't mean a thing
(All, all, all the things) all these fancy things
I tell you that all is my weight and gold
All I know, I know all these things
All these things, all these things
All these things, all these things

CLK Mercedes Benz
All these things, all these things
All these things, all these things
All these things, all these things
A whole lotta money
All these things, all these things
All these things, all these things
All these things, all these things
Mommy and Daddy, will you please stop fighting?
All these things, all these things
All these things, (and I don't care why) all these things
All these things, all these things
All these things, all these things
Let's get Stevie outta jail`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics21.addEventListener('click', () => {
        const lyrics = `"Last Call"

[JAY-Z:]
Aight, let's run it, let's run it
Yo fuck you, Kanye, first and foremost
For making me do this shit. Muh'fucker
Had to throw everybody out the motherfucking room
Cause they don't fucking

[Kanye West:]
I'd like to propose a toast
I said toast motherfucker!

[Kanye West:]
And I am
(Here's to the Roc)
And they ask me, they ask me, they ask me, I tell them
(Here's to Roc-A-Fella)
Raise your glasses, your glasses, your glasses to the sky and
(Here's to the Roc)
This is the last call for alcohol, for the
(Mr. Rockefeller)
So get your ass up off the wall

[Kanye West:]
The all around the world Digital Underground Pac
The Rudolph the red-nosed reindeer of the Roc
I take my chain, my 15 seconds of fame
And come back next year with the whole fucking game
Ain't nobody expect Kanye to end up on top
They expected that College Dropout to drop and then flop
Then maybe he stop savin' all the good beats for himself
Roc-A-Fella's only niggas that helped
My money was thinner than Sean Paul's goatee hair
Now Jean Paul Gaultier cologne fill the air, here
They say he bougie, he big-headed
Would you please stop talking about how my dick head is
Flow infectious, give me 10 seconds
I'll have a buzz bigger than insects in Texas
It's funny how wasn't nobody interested
'Til the night I almost killed myself in Lexus

[Kanye West:]
Now I am
(Here's to the Roc)
And they ask me, they ask me, they ask me, I tell them
(Here's to Roc-A-Fella)
Raise your glasses, your glasses, your glasses to the sky and
(Here's to the Roc)
This is the last call for alcohol, for the
(Mr. Rockefeller)
So get your ass up off the wall

[Kanye West:]
Now was Kanye the most overlooked? Yes sir
Now is Kanye the most overbooked? Yes sir
Though the fans want the feeling of A Tribe Called Quest
But all they got left is this guy called West
That'll take Freeway, throw him on tracks with Mos Def
Call him Kwa-li or Kwe-li, I put him on songs with JAY-Z
I'm the Gap like Banana Republic and Old Navy, and oooh
It come out sweeter than old Sadie
Nice as Bun-B when I met him at the Source awards
Girl he had with him - ass coulda won the horse awards
And I was almost famous, now everybody love Kanye
I'm almost Raymond
Some say he arrogant, can y'all blame him?
It was straight embarrassing how y'all played him
Last year shoppin' my demo, I was tryin' to shine
Every motherfucker told me that I couldn't rhyme
Now I could let these dream killers kill my self-esteem
Or use my arrogance as the steam to power my dreams
I use it as my gas, so they say that I'm gassed
But without it I'd be last, so I ought to laugh
So I don't listen to the suits behind the desk no more
You niggas wear suits cause you can't dress no more
You can't say shit to Kanye West no more
I rocked 20,000 people, I was just on tour, nigga
I'm Kon, the Louis Vuitton Don
Bought my mom a purse, now she Louis Vuitton Mom
I ain't play the hand I was dealt, I changed my cards
I prayed to the skies and I changed my stars
I went to the malls and I balled too hard
"Oh my god, is that a black card?"
I turned around and replied, "Why yes
But I prefer the term African American Express"
Brains, power, and muscle, like Dame, Puffy, and Russell
Your boy back on his hustle, you know what I've been up to
Killin y'all niggas on that lyrical shit
Mayonnaise-colored Benz, I push Miracle Whips

[Kanye West:]
And I am
(Here's to the Roc)
And they ask me, they ask me, they ask me, I tell them
(Here's to Roc-A-Fella)
Raise your glasses, your glasses, your glasses to the sky and
(Here's to the Roc)
This is the last call for alcohol, for my niggas
(Mr. Rockefeller)
So get your ass up off the wall

So this A&R over at Roc-A-Fella, named Hiphop Picked the "Truth" beat for Beanie. And I was in the session with him. I had my demo with me. You know, like I always do. I play the songs, he's like "Who that spittin'?" I'm like "It's me." He's like "Oh, well okay."
Uhh, he started talkin' to me on the phone, going back and forth
Just askin' me to send him beats, and I'm thinking he's trying to get into managing producers, cause he had this other kid named Just Blaze he was messin' with

So won't you raise your glass won't you
So won't you raise your glass won't you
So won't you raise your glass won't you
So won't you raise your glass won't you

And um, he was friends with my mentor, No ID. And No ID told him, "Look, man, you wanna mess with Kanye you need to tell him that you like the way he rap"

[No ID:] "Yo, you wanna sign him, tell him you like how he rap"

I was all, I dunno if he was gassin' me or not but he's like he wanna manage me as a rapper AND a producer

[Hiphop:] "I'll sign you as a producer and a rapper"

I'm like oh shit. I was messin' with, uh, D-Dot also. People were like this, started talking about the ghost production but that's how I got in the game. If it wasn't for that, I wouldn't be here. So you know, after they picked that "Truth" beat I was figuring I was gonna do some more work but shit just wasn't poppin' off like that. I was stayin' in Chicago, I had my own apartment, I be doin' like, just beats for local acts just to try to keep the lights on, and then to go out and buy, get a Pelle Pelle off lay-away, get some Jordans or something or get a TechnoMarine, that's what we wore back then

I made this one beat where I sped up this Harold Melvin sample I played it for Hip over the phone, he's like, "Oh, yo that shit is crazy Jay might want it for this compilation album he doin', called The Dynasty. And at that time, like the drums really weren't soundin' right to me So I went and um, I was listening to Dre Chronic 2001 at that time. And really I just, like bit the drums off "Xxplosive" and put it like with a sped-up sample, and now it's kind of like my whole style, when it started, when he rapped on "This Can't Be Life."

And that was like, really the first beat of that kind that was on The Dynasty album. I could say that was the the resurgence of the soul sound You know, I got to come in and track the beat and at the time I was still with my other management. I really wanted to roll with Hiphop cause I, I just needed some fresh air, you know what I'm sayin' cause I been there for a while. I appreciated what they did for me but, you know there's a time in every man's life where he gotta make a change. Try to move up to the next level. And that day I came and I tracked the beat and I got to meet JAY-Z and he said, "Oh you a real soulful dude."

[JAY-Z:] "Oh you a real soulful dude, man"

And he, uh, played the song cause he already spit his verse by the time I got to the studio. You know how he do it, one take. And he said

[JAY-Z:] "Check this out, tell me what you think of this, right here"

"Tell me what you think of this." And I heard it, and I was thinking like, man, I really wanted more like of the simple type JAY-Z. I ain't want like the, the more introspective, complicated rhy- or the... in my personal opinion. So he asked me, "What you think of it?"

[JAY-Z:] "So what you think of this?"

And I was like, "Man that shit tight," you know what I'm sayin', man what I'ma tell him? I was on the train, man, you know. So after that, I went back home. And man I'm, I'm just in Chicago, I'm trying to do my thing. You know, I got groups. I got acts I'm trying to get on, and like there wasn't nothin' really like poppin' off the way it should have been. One of my homies that was one of my artists, he got signed. But it was supposed to really go through my production company, but he ended up going straight with the company. So, like I'm just straight holdin' the phone, gettin' the bad news that dude was tryin' to leave my company. And I got evicted at the same time. So I went down and tracked the beats from him, I took that money, came back, packed all my shit up in a U-Haul, maybe about ten days before I had to actually get out so I ain't have to deal with the landlord cause he's a jerk. Me and my mother drove to

[Mother:] "Come on, let's just go"

...Newark, New Jersey. I hadn't even seen my apartment. I remember I pulled up

[Mother:] "Kanye, baby, we're here"

...I unpacked all my shit. You know, we went to Ikea, I bought a bed, I put the bed together myself. I loaded up all my equipment, and the first beat I made was, uh, "Heart of the City." And Beans was still working on his album at that time, so I came up there to Baseline, it was Beans' birthday, matter of fact, and I played like seven beats. And, you know I guess he was in the zone, he already had the beats that he wanted, I had did "Nothing Like It" already at that time but then Jay walked in. I remember he had a Gucci bucket hat on. I remember it like, like it was yesterday. And Hiphop said, "Yo play that one beat for him." And I played "Heart of the City." And really I made "Heart of the City," I really wanted to give that beat to DMX

[Hiphop:] "No I think Jay gon' like this one right here"

And I played another beat, and I played another beat. And I remember that Gucci bucket, he took it and like put it over his face and made one of them faces like 'OOOOOOOOOOH.' Two days later I'm in Baseline and I seen Dame. Dame didn't know who I was and I was like, "Yo what's up I'm Kanye."

[Dame:] "Yo, you that kid, Kanye?"

"You that kid that gave all them beats to Jay? Yo, this nigga got classics to your beats"

[Dame:] "Jay got classics, G."

You know I ain't talkin' shit. I'm like "oh shit." And all this time I'm starstruck, man. I'm still thinking 'bout, you know I'm picturing these niggas on the show, The Streets is Watching, I'm lookin', these were superstars in my eyes. And they still are, you know. So, Jay came in and he spit all these songs like in one day, and in two days... I gotta bring up one thing, you know, come back to the story, the day I did the 'Can't be Life' beat on track, I remember Lenny S, he had some Louis Vuitton sneakers on, he think he fly. And Hiphop was there, I think Ty-Ty, John Meneilly, a bunch of people. I didn't know all these people at the time they was in the room, and I said, "yo Jay I could rap." And I spit this rap that said, uh "I'm killin' y'all niggas on that lyrical shit. Mayonnaise colored Benz, I push miracle whips." And I saw his eyes light up when I said that line. But you know the rest, the rap was like real wack and shit, so that's all the response. He said, "Man that was tight."

[JAY-Z:] "That, that was cool. That was hot."

That was it. You know, I ain't get no deal then, hehe. Okay, fast forward. So, Blueprint, "H to the Izzo," my first hit single. And I just took that proudly, built relationships with people. My relationship with Kweli I think was one of the best ones to ever happen to my career as a rapper. Because, you know, of course, later he allowed me to go on tour with him. Man, I appre-- I love him for that. And at this time, you know I didn't have a deal, I had songs, and I had relationships with all these A&R's, and they wanted beats from me, so they'd call me up, I'd play them some beats. "Gimme a beat that sound like JAY-Z." You know, they dick riders. Whatever. So I'll play them these post-Blueprint beats or whatever and then I'll play my shit. I'll be like, "Yo but I rap too." Hey, I guess they was lookin' at me crazy cause you know, cause I ain't have a jersey on or whatever. Everybody out there listen here: I played them 'Jesus Walks' and they didn't sign me. You know what happened, it was some A&R's that fucked with me though, but then like the heads, it'd be somebody at the company that'll say, "Naw." Like, Dave Lighty fucked with me, my nigga Mel brought me to a bunch of labels. Jessica Rivera, man

[Jessica:] "Man, you niggas is stupid if y'all don't sign Kanye, for real."

I'm not gonna say nothin' to mess my promotion up

"Y'all niggas is stupid"

Let's just say I didn't get my deal. The nigga that was behind me, I mean, he wasn't even a nigga, you know? The person who actually kicked everything off was Joe 3H from Capitol Records. He wanted to sign me really bad

[Joe:] "We gonna change the game, buddy."

Dame was like, "Yo you got a deal with Capitol? Okay man, just make sure it's not wack."

[Dame:] "You gotta make sure it's not wack."

Then one day I just went ahead and played it, I wanted to play some songs, cause you know Cam was in the room, Young Guru, and Dame was in the room. So I played... actually it's a song that you'll never hear, but maybe I might use it. So, it's called 'Wow.'

"I go to Jacob with 25 thou, you go with 25 hundred, wow
I got 11 plaques on my walls right now
You got your first gold single, damn, nigga, wow."

Like the chorus went. Don't bite that chorus, I might still use it. So I play that song for him and he's like "oh shit"

[Dame:] "Oh shit it's not even wack."

"I ain't gonna front, it's kinda hot."

[Dame:] "It's actually kinda hot."

Like they still weren't looking at me like a rapper. And I'm sure Dame figured, 'Like man. If he do a whole album, if his raps is wack at least we can throw Cam on every song and save the album, you know. So uh Dame took me into the office, and he's like "yo man, B, B, you don't want a brick, you don't want a brick"

[Dame:] "You don't wanna catch a brick"

"You gotta be under an umbrella, you'll get rained on." I told Hiphop and Hiphop was all, "Oh, word?" Actually, even with that, I was still about to take the deal with Capitol cause it was already on the table and cause of my relationship with 3H. That, you know, cause I told him I was gonna do it, and I'm a man of my word, I was gonna roll with what I said I was gonna do. Then, you know, I'm not gonna name no names, but people told me, "oh he's just a producer-rapper," and told 3H that told the heads of the Capitol, and right-- the day I'm talking about, I planned out everything I was gonna do. Man, I had picked out clothes, I already started booking studio sessions, I started arranging my album, thinking of marketing schemes, man I was ready to go. And they had Mel call me, they said, "yo... Capitol pulled on the deal"

[Mel:] "Yo, Capitol pulled out on the deal."

And, you know I told them that Roc-A-Fella was interested and I don't know if they thought that was just something I was saying to gas them up to try to push the price up or whatever. I went up... I called G, I said, "man, you think we could still get that deal with Roc-A-Fella?"

So won't you raise your glass, won't you
So won't you raise your glass, won't you
So won't you raise your glass, won't you
So won't you raise your glass, won't you`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });
</script>

<!-- Call up the footer-->
<?php
include 'includes/footer.php';
?>