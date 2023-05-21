<!-- Call up the header and navbar and set page title-->
<?php
$page_title = "My Beautiful Dark Twisted Fantasy";
include 'includes/header.php';
include 'includes/nav.php';
?>

<!-- set the splitscreen -->
<div class="container" style="max-width:100%;">
    <div class="row split">
        <div class="col left" style="background-color:#2a5931;"> <!-- left col -->
            <div class="leftT" style="background-color:#f2274c;"></div> <!-- top section of left col -->
            <div id="leftM"> <!-- middle section of left col -->
                <!-- i frame for songs -->
                <iframe class="video" id="video-player" width="240px" height="240px" frameborder="0"></iframe> 

                 <!-- div for song lyrics -->
                <div id="LyricsContainer" style="display: none; max-height:205px; background-color:#d99d8f; padding-left: 20px; padding-top: 10px;">  
                </div>

            </div>
            <div class=leftB style="background-color:#f2274c;"> <!-- bottom section of left col -->
            </div>

        </div>
        <!-- right col -->
        <div class="col right" style="background-color:#03658c;"> 
            <br>
            <div class="albumcover"><img src="image/MBDTFcover.jpeg" class="img-fluid"></div> <!-- album cover -->
            <br>
            <h3 class="albumtitle">My Beautiful Dark Twisted Fantasy</h3> <!-- title of the album -->
            <!-- Description/background of album -->
            <p class="albumdesp">My Beautiful Dark Twisted Fantasy is the fifth studio album by Kanye West, released in 2010 to critical acclaim. The album represents a turning point in West's career, following a tumultuous period that saw him receive backlash for interrupting Taylor Swift at the MTV Video Music Awards and other controversies.</p>
            <p class="albumdesp">MBDTF is a deeply introspective and personal album, exploring themes of fame, love, and power. The album's opening track, "Dark Fantasy," sets the tone with its lush orchestral production and biting commentary on the pitfalls of celebrity culture. Other standout tracks such as "Power," "Runaway," and "All of the Lights" showcase West's ability to blend different genres and musical styles into a cohesive whole.</p>
            <p class="albumdesp">The album features collaborations with a range of artists, including Bon Iver, Jay-Z, and Nicki Minaj, each adding their own unique flavor to the album's sound. The album's extensive use of sampling, live instrumentation, and maximalist production also set it apart from West's previous work, resulting in a rich and complex sonic landscape.</p>
            <p class="albumdesp">Overall, My Beautiful Dark Twisted Fantasy is widely conside#03658c; to be one of Kanye West's greatest artistic achievements. Its exploration of fame, love, and power remains relevant and thought-provoking today, and its musical innovations continue to influence and inspire a new generation of artists.</p>

            <!-- tracklist -->
            <ul class="list-group">
                <li class="list-group-item albumtrack" style="background-color: #03658c;">Dark Fantasy <!-- Song title -->
                    <span class="artist">• Kanye West • Nicki Minaj</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="UTH1VNHLjng"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics1" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->  
                </li>
                <li class="list-group-item albumtrack" style="background-color: #03658c;">Gorgeous <!-- Song title -->
                    <span class="artist">• Kanye West • Kid Cudi • Raekwon</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="miJAfs7jhak"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics2" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->  
                </li>
                <li class="list-group-item albumtrack" style="background-color: #03658c;">Power <!-- Song title -->
                    <span class="artist">• Kanye West • Dwele</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="k8JflBNovLE"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics3" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->  
                </li>
                <li class="list-group-item albumtrack" style="background-color: #03658c;">All Of The Lights (Interlude) <!-- Song title -->
                    <span class="artist">• Kanye West</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="WHxRd_va950"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics4" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Interlude"> I</span> <!-- Interlude symbol --> 
                </li>
                <li class="list-group-item albumtrack" style="background-color: #03658c;">All Of The Lights <!-- Song title -->
                    <span class="artist">• Kanye West • Rihanna</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="w2Yh9sxfTd8"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics5" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->  
                </li>
                <li class="list-group-item albumtrack" style="background-color: #03658c;">Monster <!-- Song title -->
                    <span class="artist">• Kanye West • Rick Ross • Jay-Z • Nicki Minaj • Bon Iver</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="pS6HRKZQLFA"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics6" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->  
                </li>
                <li class="list-group-item albumtrack" style="background-color: #03658c;">So Appalled <!-- Song title -->
                    <span class="artist">• Kanye West • Swizz Beatz • Jay-Z • Pusha T • Cyhi • RZA</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="0o9HzQ3zAcE"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics7" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->  
                </li>
                <li class="list-group-item albumtrack" style="background-color: #03658c;">Devil In A New Dress <!-- Song title -->
                    <span class="artist">• Kanye West • Rick Ross</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="sk3rpYkiHe8"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics8" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->  
                </li>
                <li class="list-group-item albumtrack" style="background-color: #03658c;">Runaway <!-- Song title -->
                    <span class="artist">• Kanye West • Pusha T</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="VhEoCOWUtcU"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics9" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->  
                </li>
                <li class="list-group-item albumtrack" style="background-color: #03658c;">Hell Of A Life <!-- Song title -->
                    <span class="artist">• Kanye West</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="tJKNcI6jC6A"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics10" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->  
                </li>
                <li class="list-group-item albumtrack" style="background-color: #03658c;">Blame Game <!-- Song title -->
                    <span class="artist">• Kanye West • John Legend</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="6mp72xUirfs"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics11" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->  
                </li>
                <li class="list-group-item albumtrack" style="background-color: #03658c;">Lost In The World <!-- Song title -->
                    <span class="artist">• Kanye West • Bon Iver</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="1Dzh0XkuNPg"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics12" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->  
                </li>
                <li class="list-group-item albumtrack" style="background-color: #03658c;">Who Will Survive In America <!-- Song title -->
                    <span class="artist">• Kanye West • Gil Scott-Heron</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="UB6sXiZ1ldw"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics13" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Interlude"> I</span> <!-- Interlude symbol --> 
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

    // Change the content of the div when buttons are clicked
    lyrics1.addEventListener('click', () => {
        const lyrics = `"Dark Fantasy"

[Nicki Minaj:]
You might think you've peeped the scene
You haven't, the real one's far too mean
The watered-down one, the one you know
Was made up centuries ago
They made it sound all wack and corny
Yes, it's awful blasted boring
Twisted fictions, sick addiction
Well, gather 'round, children, zip it, listen

[Justin Vernon and Teyana Taylor:]
Can we get much higher? (So high)
Oh, oh, oh
Oh, oh, oh-oh, oh (Oh)
Can we get much higher? (So high)
Oh, oh, oh
Oh, oh, oh-oh, oh
Can we get much higher? (So high)
Oh, oh, oh
Oh, oh, oh-oh, oh (Oh)
Can we get much higher? (So high)
Oh, oh, oh
Oh, oh, oh-oh, oh

[Kanye West:]
Yeah, yeah, yeah, yeah
I fantasized 'bout this back in Chicago
Mercy, mercy me, that Murciélago
That's me the first year that I blow
How you say broke in Spanish? Mi no hablo
Me drown sorrow in that Diablo
Me found bravery in my bravado
DJs need to listen to the models
You ain't got no fuckin' Yeezy in your Serato?
(You ain't got no Yeezy, nigga?)
Stupid, but what the hell do I know?
I'm just a Chi-Town nigga with a Nas flow
And my chick in that new Phoebe Philo
So much head, I woke up to Sleepy Hollow

[Justin Vernon and Teyana Taylor:]
Can we get much higher?
Oh, oh, oh
Oh, oh, oh-oh, oh

[Kanye West:]
Look like a fat booty Celine Dion
Sex is on fire, I'm the King of Leona Lewis
Beyond the truest
Hey, teacher, teacher, tell me how do you respond to students?
And refresh the page and restart the memory?
Re-spark the soul and rebuild the energy?
We stopped the ignorance, we killed the enemy
Sorry for the night demons that still visit me
The plan was to drink until the pain over
But what's worse, the pain or the hangover?
Fresh air, rollin' down the window
Too many Urkels on your team, that's why your wins low
Don't make me pull the toys out, huh
Don't make me pull the toys
And fire up the engines, huh
And then they make noise

[Justin Vernon and Teyana Taylor:]
Can we get much higher? (So high)
Oh, oh, oh
Oh, oh, oh-oh, oh

[Justin Vernon and Kanye West:]
At the mall, there was a seance
Just kids, no parents
Then the sky filled with herons
Saw the devil in a Chrysler LeBaron
And the hell, it wouldn't spare us
And the fires did declare us
But after that, took pills, kissed an heiress
And woke up back in Paris

[Justin Vernon and Teyana Taylor:]
Can we get much higher? (So high)
Oh, oh, oh
Oh, oh, oh-oh, oh, oh

[Justin Vernon and Teyana Taylor:]
Can we get much higher? (So high)
Oh, oh, oh
Oh, oh, oh-oh, oh (Oh)
Can we get much higher? (So high)
Oh, oh, oh
Oh, oh, oh-oh, oh
Can we get much higher? (So high)
Oh, oh, oh
Oh, oh, oh-oh, oh (Oh)
Can we get much higher? (So high)
Oh, oh, oh
Oh, oh, oh-oh, oh, oh`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics2.addEventListener('click', () => {
        const lyrics = `"Gorgeous"
(feat. Kid Cudi & Raekwon)

[Kid Cudi:]
Ain't no question if I want it, I need it
I can feel it slowly drifting away from me
I'm on the edge, so why you playing? I'm saying
I will never ever let you live this down, down, down
Not for nothing, I've foreseen it, I dreamed it
I can feel it slowly drifting away from me
No more chances, if you blow this, you bogus
I will never ever let you live this down, down, down

[Kanye West:]
Penitentiary chances, the devil dances
And eventually answers to the call of autumn
All them fallin' for the love of ballin'
Got caught with thirty rocks, the cop look like Alec Baldwin
Inter-century anthems based off inner-city tantrums
Based off the way we was branded
Face it, Jerome get more time than Brandon
And at the airport, they check all through my bag
And tell me that it's random
But we stay winning
This week has been a bad massage, I need a happy ending
And a new beginning and a new fitted
And some job opportunities that's lucrative
This the real world, homie, school finished
They done stole your dreams, you don't know who did it
I treat the cash the way the government treats AIDS
I won't be satisfied 'til all my niggas get it, get it?

[Kid Cudi:]
Ain't no question if I want it, I need it
I can feel it slowly drifting away from me
I'm on the edge, so why you playing? I'm saying
I will never ever let you live this down, down, down

[Kanye West:]
Is hip-hop just a euphemism for a new religion?
The soul music of the slaves that the youth is missing
But this is more than just my road to redemption
Malcolm West had the whole nation standing at attention
As long as I'm in Polo smiling, they think they got me
But they'd try to crack me if they ever see a Black me
I thought I chose a field where they couldn't sack me
If a nigga ain't shootin' a jumpshot, runnin' a track meet
But this pimp is at the top of Mount Olympus
Ready for the world's games, this is my Olympics
We make 'em say ho 'cause the game is so pimpish
Choke a South Park writer with a fish-stick
I insisted to get up off of this dick
And these drugs, niggas can't resist it
Remind me when they tried to have Ali enlisted
If I ever wasn't the greatest, nigga, I must have missed it

[Kid Cudi:]
Ain't no question if I want it, I need it
I can feel it slowly drifting away from me
I'm on the edge, so why you playing? I'm saying
I will never ever let you live this down, down, down

[Kanye West:]
I need more drinks and less lights
And that American Apparel girl in just tights
She told the director she tryna get in a school
He said, "Take them glasses off and get in the pool"
It's been a while since I watched the tube
'Cause like a Crip set, I got way too many blues for any more bad news
I was looking at my resume, feeling real fresh today
They rewrite history, I don't believe in yesterday
And what's a Black Beatle anyway, a fuckin' roach?
I guess that's why they got me sitting in fuckin' coach
My guy said I need a different approach
'Cause people is looking at me like I'm sniffin' coke
It's not funny anymore, try different jokes
Tell 'em hug and kiss my ass, X and O
And kiss the ring while they at it, do my thing while I got it
Play strings for the dramatic ending of that wack shit
Act like I ain't had a belt in two classes
I ain't got it, I'm coming after whoever who has it
I'm coming after whoever, who has it?
You blowin' up, that's good, fantastic
That, y'all, it's like that, y'all
I don't really give a fuck about it at all
'Cause the same people that tried to blackball me
Forgot about two things, my Black balls

[Kid Cudi:]
Ain't no question if I want it, I need it
I can feel it slowly drifting away from me
I'm on the edge, so why you playing? I'm saying
I will never ever let you live this down, down, down

[Raekwon:]
Ayy, yo
I done copped Timbs, lived in lenses, kid
Armani suits, fresh fruits, Bally boots, and Benzes
Counting up, smoking, one cuff
Live as a red Jag', a Louis bag, grabbin' a blunt, fuck it
Steam about a hundred and one Ls
Kites off to jails, buyin' sweats, running up in Stetson
Nigga hat game was special
It matched every black pair of Nikes, throwing dice for decimals
The older head, bolder head, would train a soldier head
Make sure he right in the field, not a soldier dead
That meant code red, bent off the black skunk
The black Dutch, back of the old shed
If you can't live, you dying, you give or buy in
Keep it real or keep it moving, keep grinding
Keep shining, to every young man, this is a plan
Learn from others like your brothers Rae and Kanye

[Kid Cudi:]
Not for nothing, I've foreseen it, I dreamed it
I can feel it slowly drifting away from me
No more chances, if you blow this, you bogus
I will never ever let you live this down, down, down`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics3.addEventListener('click', () => {
        const lyrics = `"Power"
(feat. Dwele)

[Kanye West:]
I'm living in that 21st century, doing something mean to it
Do it better than anybody you ever seen do it
Screams from the haters got a nice ring to it
I guess every superhero need his theme music

[Kanye West:]
No one man should have all that power
The clock's ticking, I just count the hours
Stop tripping, I'm tripping off the power
(21st-century schizoid man)

[Kanye West:]
The system broken, the school's closed, the prison's open
We ain't got nothing to lose, motherfucker, we rolling
Huh? Motherfucker, we rolling
With some light-skinned girls and some Kelly Rowlands
In this white man world, we the ones chosen
So goodnight, cruel world, I'll see you in the morning
Huh? I'll see you in the morning
This is way too much, I need a moment

[Kanye West:]
No one man should have all that power
The clock's ticking, I just count the hours
Stop tripping, I'm tripping off the power
'Til then, fuck that, the world's ours
And they say, and they say
And they say, and they say
And they say, and they say
(21st-century schizoid man)

[Kanye West:]
Fuck SNL and the whole cast
Tell them Yeezy said they can kiss my whole ass
More specifically, they can kiss my asshole
I'm an asshole? You niggas got jokes
You short-minded niggas' thoughts is Napoleon
My furs is Mongolian, my ice brought the goalies in
I embody every characteristic of the egotistic
He knows he's so fuckin' gifted
I just needed time alone with my own thoughts
Got treasures in my mind, but couldn't open up my own vault
My childlike creativity, purity, and honesty
Is honestly being crowded by these grown thoughts
Reality is catching up with me
Taking my inner child, I'm fighting for custody
With these responsibilities that they entrusted me
As I look down at my diamond-encrusted piece

[Kanye West:]
Thinking no one man should have all that power
The clock's ticking, I just count the hours
Stop tripping, I'm tripping off the powder
'Til then, fuck that, the world's ours
And they say, and they say
And they say, and they say
And they say, and they say
(21st-century schizoid man)

[Kanye West:]
Colin Powells, Austin Powers
Lost in translation with a whole fuckin' nation
They say I was the abomination of Obama's nation
Well, that's a pretty bad way to start the conversation
At the end of the day, goddamned, I'm killing this shit
I know damn well y'all feeling this shit
I don't need your pussy, bitch, I'm on my own dick
I ain't gotta power trip, who you goin' home with?
How Ye doing? I'm survivin'
I was drinkin' earlier, now I'm drivin'
Where the bad bitches, huh? Where you hidin'?
I got the power make your life so excitin'

[Kanye West and Dwele:]
Now this will be a beautiful death
I'm jumping out the window, I'm letting everything go
I'm letting everything go
Mmm, now this will be a beautiful death
I'm jumping out the window, I'm letting everything go
I'm letting everything go
Now this will be a beautiful death
Jumping out the window, letting everything go
Letting everything go
You got the power to let power go?
(21st-century schizoid man)`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics4.addEventListener('click', () => {
        const lyrics = `*Instrumental*
        
        
        
        
        
        
        
        `; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics5.addEventListener('click', () => {
        const lyrics = `"All Of The Lights"
(feat. John Legend, The-Dream, Elly Jackson, Alicia Keys, Fergie, Kid Cudi, Elton John, Rihanna)

All of the lights
Lights, lights
All of the lights

[Rihanna:]
Turn up the lights in here, baby
Extra bright, I want y'all to see this
Turn up the lights in here, baby
You know what I need, want you to see everything
Want you to see all of the lights

[Elly Jackson and Rihanna:]
Fast cars, shooting stars
All of the lights, all of the lights
Until it's Vegas everywhere we are (All of the lights)
If you want it, you can get it for the rest of your life
If you want it, you can get it for the rest of your life

[Kanye West:]
Somethin' wrong, I hold my head
MJ gone, our nigga dead
I slapped my girl, she called the feds
I did that time and spent that bread
I'm heading home, I'm almost there
I'm on my way, heading up the stairs
To my surprise, a nigga replacing me
I had to take him to that ghetto university

[Kanye West:]
(All of the lights), lights
Cop lights, flashlights, spotlights
Strobe lights, street lights (All of the lights, all of the lights)
Fast life, drug life, thug life
Rock life every night (All of the lights)

[Rihanna:]
Turn up the lights in here, baby
Extra bright, I want y'all to see this
Turn up the lights in here, baby
You know what I need, want you to see everything
Want you to see all of the lights

[Kanye West:]
Restraining order, can't see my daughter
Her mother, brother, grandmother hate me in that order
Public visitation, we met at Borders
Told her she take me back, I'll be more supportive
I made mistakes, I bumped my head
Them courts sucked me dry, I spent that bread
She need her daddy, baby, please
Can't let her grow up in that ghetto university

[Kanye West:]
(All of the lights), lights
Cop lights, flashlights, spotlights
Strobe lights, street lights (All of the lights, all of the lights)
Fast life, drug life, thug life
Rock life every night (All of the lights)

[Rihanna:]
Turn up the lights in here, baby
Extra bright, I want y'all to see this
Turn up the lights in here, baby
You know what I need, want you to see everything
Want you to see all of the lights

[Kid Cudi:]
Gettin' mine, baby
Gotta let these niggas know, yeah
Gettin' right, babe
You should go and get your own
Gettin' mine, baby
Gotta let these niggas know, yeah
Gettin' right, babe
You should go and get your own

[Fergie, Rihanna and Drake:]
Unemployment line, credit card declined
Did I not mention I was about to lose my mind?
And also was about to do that line
'Kay, okay, you know we going all the way this time
We going all the way this time
We going all the way this time
We going all the way this time
We going all the way this time

Turn up the lights in here, baby
Extra bright, I want y'all to see this
Turn up the lights in here, baby
You know what I need, want you to see everything
Want you to see all of the lights

[Alicia Keys and Elton John:]
Whoa, whoa
(I tried to tell you, but all I could say was oh)
Whoa, whoa
(I tried to tell you, but all I could say was oh)
Whoa, whoa
(I tried to tell you, but all I could say was oh)
Whoa, whoa
(I tried to tell you, but all I could say)
`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics6.addEventListener('click', () => {
        const lyrics = `"Monster"
(feat. Rick Ross, Jay-Z, Bon Iver & Nicki Minaj)

[Justin Vernon:]
I shoot the lights out
Hide 'til it's bright out
Oh, just another lonely night
Are you willing to sacrifice your life?

[Rick Ross:]
Bitch, I'm a monster, no-good bloodsucker
Fat motherfucker, now look who's in trouble
As you run through my jungles, all you hear is rumbles
Kanye West samples, here's one for example

[Kanye West:]
Gossip, gossip, nigga, just stop it
Everybody know I'm a motherfuckin' monster
I'ma need to see your fuckin' hands at the concert
I'ma need to see your fuckin' hands at the concert
Profit, profit, nigga, I got it
Everybody know I'm a motherfuckin' monster
I'ma need to see your fuckin' hands at the concert
I'ma need to see your fuckin' hands

[Kanye West:]
Uh, the best living or dead hands down, huh
Less talk, more head right now, huh
And my eyes more red than the devil is
And I'm 'bout to take it to another level, bitch
Matter who you go and get, ain't nobody cold as this
Do the rap and the track, triple-double, no assists
And my only focus is stayin' on some bogus shit
Arguin' with my older bitch, actin' like I owe her shit
I heard the beat, the same raps that gave the track pain
Bought the chain that always give me back pain
Fucking up my money so, yeah, I had to act sane
Chi nigga, but these hoes love my accent
Chick came up to me and said, "This the number to dial
If you wanna make your number one your number two now"
Mix that Goose and Malibu, I call it "Malibooyah"
Goddamn, Yeezy always hit 'em with a new style
Know that motherfucker, well, what you gon' do now?
Whatever I wanna do, gosh, it's cool now
Know I'm gonna do, ah, it's the new now
Think you motherfuckers really really need to cool out
'Cause you'll never get on top of this
So, mami, best advice is just to get on top of this
Have you ever had sex with a pharaoh?
Ah, put the pussy in a sarcophagus
Now she claiming that I bruised her esophagus
Head of the class and she just won a swallowship
I'm livin' in the future so the present is my past
My presence is a present, kiss my ass

[Kanye West and Jay Z:]
Gossip, gossip, nigga, just stop it
Everybody know I'm a motherfuckin' monster
I'ma need to see your fuckin' hands at the concert
I'ma need to see your fuckin' hands at the concert (Yeah)
Profit, profit, nigga, I got it
Everybody know I'm a motherfuckin' monster
I'ma need to see your fuckin' hands at the concert
I'ma need to see your fuckin' hands

[Jay Z:]
Sasquatch, Godzilla, King Kong, Loch Ness
Goblin, ghoul, a zombie with no conscience
Question, what do these things all have in common?
Everybody knows I'm a motherfuckin' monster
Conquer, stomp ya, stop your silly nonsense
Nonsense, none of you niggas know where the swamp is
None of you niggas have seen the carnage that I've seen
I still hear fiends scream in my dreams
Murder, murder in black convertibles, I
Kill a block, I murder the avenues, I
Rape and pillage your village, women and children
Everybody want to know what my Achilles heel is
Love, I don't get enough of it
All I get is these vampires and bloodsuckers
All I see is these niggas I made millionaires
Millin' about, spillin' their feelings in the air
All I see is these fake fucks with no fangs
Tryna draw blood from my ice-cold veins
I smell a massacre
Seems to be the only way to back you bastards up

[Kanye West:]
Gossip, gossip, nigga, just stop it
Everybody know I'm a motherfuckin' monster
I'ma need to see your fuckin' hands at the concert
I'ma need to see your fuckin' hands at the concert
Profit, profit, nigga, I got it
Everybody know I'm a motherfuckin' monster
I'ma need to see your fuckin' hands at the concert
I'ma need to see your fuckin' hands

[Nicki Minaj:]
Pull up in the monster, automobile gangsta
With a bad bitch that came from Sri Lanka
Yeah, I'm in that Tonka, color of Willy Wonka
You could be the king, but watch the queen conquer
OK, first things first, I'll eat your brains
Then I'ma start rocking gold teeth and fangs
'Cause that's what a motherfuckin' monster do
Hair dresser from Milan, that's the monster 'do
Monster Giuseppe heel, that's the monster shoe
Young Money is the roster and a monster crew
And I'm all up, all up, all up in the bank with the funny face
And if I'm fake, I ain't notice 'cause my money ain't
So let me get this straight, wait, I'm the rookie?
But my features and my shows ten times your pay?
50K for a verse, no album out
Yeah, my money's so tall that my Barbies got to climb it
Hotter than a Middle Eastern climate, violent
Tony Matterhorn, dutty wine it, wine it
Nicki on them titties when I sign it
That's how these niggas so one-track-minded
But really, really I don't give an F-U-C-K
"Forget Barbie, fuck Nicki, sh-she's fake"
"She on a diet," but my pockets eatin' cheesecake
And I'll say, bride of Chucky, it's child's play
Just killed another career, it's a mild day
Besides, Ye, they can't stand besides me
I think me, you, and Am' should ménage Friday
Pink wig, thick ass, give 'em whiplash
I think big, get cash, make 'em blink fast
Now look at what you just saw, this is what you live for
Ah, I'm a motherfuckin' monster

[Justin Vernon and Charlie Wilson:]
I, I crossed the limelight
And I'll, I'll let God decide
And I, I wouldn't last these shows
So I, I am headed home (Headed home)
I, I crossed the limelight
And I'll, I'll let God decide, 'cide (No)
And I, I wouldn't last these shows
So I, I am headed home (Head home)
I, I crossed the limelight (No, the limelight)
And I'll, I'll let God decide, 'cide
And I, I wouldn't last these shows
So I, I am headed home
`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics7.addEventListener('click', () => {
        const lyrics = `"So Appalled"
(feat. RZA, Jay-Z, Pusha T, Swizz Beatz & Cyhi the Prynce)

[Swizz Beatz:]
One hand in the air if you don't really care
Two hands in the air if you don't really care
It's like that sometimes, I mean ridiculous
It's like that sometimes, this shit ridiculous
One hand in the air if you don't really care
Middle finger in the air if you don't really care
It's like that sometimes, man, ridiculous
Life can be sometimes ridiculous

[Kanye West:]
I'm so appalled, Spalding, ball
Balding Donald Trump taking dollars from y'all
Baby, you're fired, your girlfriend hired
But if you don't mind, I'ma keep you on call
We above the law, we don't give a fuck 'bout y'all
I got dogs that'll chew a fuckin' hole through the wall
But since they all lovers, I need more rubbers
And if I don't use rubbers, need more covers
Housekeeping, I mean, goddamn
One time, let it be a bad bitch sweeping
That know we get O's like Cheerios
That know because they seen us in the videos
That know the day that you play me
Would be the same day MTV play videos
That was a little joke, voila
Praises due to the most high, Allah
Praises due to the most fly, Prada
Baby, I'm magic, tada
Address me as your highness, high as United
Thirty thousand feet up and you are not invited
Niggas be writing bullshit like they gotta work
Niggas is going through real shit, man, they out of work
That's why another goddamn dance track gotta hurt
That's why I'd rather spit something that got a purp'

[Kanye West and CyHi The Prynce:]
Champagne wishes, thirty white bitches
I mean this shit is fuckin' ridiculous
Fuckin' ridiculous
I mean this shit is fuckin' ridiculous
Five-star dishes, different exotic fishes
Man, this shit is fuckin' ridiculous
Fuckin' ridiculous

[Jay-Z:]
How should I begin this? I'm just so offended
How am I even mentioned by all these fuckin' beginners?
I'm so appalled, I might buy the mall
Just to show niggas how much more I have in store
I'm fresher than you all, so I don't have to pause
All of y'all can suck my balls through my drawers
Dark Knight feeling, die and be a hero
Or live long enough to see yourself become a villain
I went from the favorite to the most hated
But would you rather be underpaid or overrated?
Moral victories is for minor league coaches
And Ye already told you we major, you cockroaches
Show me where the boats is, Ferrari Testarossas
And Hammer went broke so you know I'm more focused
I lost thirty mil', so I spent another thirty
'Cause unlike Hammer, thirty million can't hurt me
Fuckin' insane, the fuck am I saying?
Not only am I fly, I'm fuckin' not playing
All these little bitches too big for they britches
Burning they little bridges, fuckin' ridiculous

[Kanye West and CyHi The Prynce:]
Champagne wishes, thirty white bitches
I mean this shit is fuckin' ridiculous
Fuckin' ridiculous
I mean this shit is fuckin' ridiculous
Five-star dishes, different exotic fishes
Man, this shit is fuckin' ridiculous
Fuckin' ridiculous

[Pusha T:]
Success is what you make it, take it how it come
A half a mil' in twenties like a billion where I'm from
An arrogant drug dealer, the legend I become
CNN said I'd be dead by twenty-one
Blackjack, I just pulled an ace
As you looking at the king in his face
Everything I dream, motherfuckers, I'm watchin' it take shape
While to you I'm just a young rich nigga that lacks faith
Range Rove', leather roof, love war, fuck a truce
Still move a bird like I'm in bed with Mother Goose
Them hoes coming in a baker's dozen
Claiming they was with me when they know they really wasn't
I keep the city's best, never said she was the brightest
So if you had her too, it don't affect me in the slightest
I never met a bitch that didn't need a little guidance
So I dismiss her past until she disappoints your highness
I speak the gospel, hostile
Tony doing time for what he did to nostrils
Paranoid mind, I'm still under the watchful
Eye of the law, aspire for more
Them kilos came, we gave you Bobby Brown jaw
Flaws ain't flaws when it's you that makes the call
Flow similar to the legends of the falls
Spillin', I own you all, yuugh

[Swizz Beatz:]
One hand in the air if you don't really care
Two hands in the air if you don't really care
It's like that sometimes, I mean ridiculous
It's like that sometimes, this shit ridiculous
One hand in the air if you don't really care
Middle finger in the air if you don't really care
It's like that sometimes, man, ridiculous
Life can be sometimes ridiculous

[CyHi The Prynce:]
Hah, I am so outrageous
I wear my pride on my sleeve like a bracelet
If God had an iPod, I'd be on his playlist
My phrases amazes the faces in places
The favorite, hah, my cup overrunneth with hundreds
Dummy, damn, it's hard not for me to waste it
The new Commandment, "Thou shalt not hate, kid"
My movement is like the Civil Rights, I'm Ralph David
Abernathy, so call my lady Rosa Parks
I am nothing like them niggas, baby, those are marks
I met this girl on Valentine's Day, fucked her in May
She found out about April, so she chose to march
Hah, damn, another broken heart
I keep bitches by the twos, nigga, Noah's Ark
I got a seven on me, I call my 'dro Lamar
Plus a Trojan in my pocket, Matt Leinart, hah
G-A-T in the Pathfinder
'Cause you haters got PhDs
Y'all just some major haters and some math minors
Tiger Woods, don't make me grab iron

[RZA:]
Ayy, yo, champagne wishes and thirty white bitches
You know this shit is fuckin' ridiculous
Fuckin' ridiculous
You know this shit is fuckin' ridiculous
Cars for the missus and furs for the mistress
You know that shit is fuckin' ridiculous
Fuckin' ridiculous
You know this shit is fuckin' ridiculous
Fuckin' ridiculous
Fuckin' ridiculous
Fuckin' ridiculous

[Swizz Beatz:]
One hand in the air if you don't really care
Two hands in the air if you don't really care
It's like that sometimes, I mean ridiculous
It's like that sometimes, this shit ridiculous
One hand in the air if you don't really care
Middle finger in the air if you don't really care
It's like that sometimes, man, ridiculous
Life can be sometimes ridiculous, huh?
`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics8.addEventListener('click', () => {
        const lyrics = `"Devil In A New Dress"

[Kanye West:]
Uh uh
I love it, though
I love it, though, huh, you know?

[Kanye West:]
Put your hands to the constellations
The way you look should be a sin, you my sensation
I know I'm preachin' to the congregation
We love Jesus, but you done learned a lot from Satan
I mean, a nigga did a lot of waiting
We ain't married, but tonight I need some consummation

[Kanye West:]
May the Lord forgive us, may the gods be with us
In that magic hour, I seen good Christians
Make brash decisions, oh, she do it
What happened to religion? Oh, she lose it
She putting on her makeup, she casually allure
Text message break-ups, the casualty of tour
How she gon' wake up and not love me no more?
I thought I was the asshole, I guess it's rubbin' off
Hood phenomenon, the LeBron of rhyme
Hard to be humble when you stunting on a jumbotron
I'm looking at her like, "This what you really wanted, huh?"
Why we argue anyway? Oh, I forgot, it's summertime

[Kanye West:]
Put your hands to the constellations
The way you look should be a sin, you my sensation
I know I'm preachin' to the congregation
We love Jesus, but she done learned a lot from Satan
Satan, Satan, Satan
I mean, a nigga did a lot of waiting
We ain't married, but tonight I need some consummation

[Kanye West:]
When the sun go down, it's the magic hour, the magic hour
And outta all the colors that'll fill up the skies
You got green on your mind, I can see it in your eyes
Why you standing there with your face screwed up?
Don't leave while you're hot, that's how Mase screwed up
Throwin' shit around, the whole place screwed up
Maybe I should call Mase so he could pray for us
I hit the Jamaican spot, at the bar, take a seat
I ordered the jerk, she said you are what you eat
You see, I always loved that sense of humor
But tonight, you should have seen how quiet the room was
The Lyor Cohen of Dior Homme
That's "Dior Homme," not "Dior, homie"
The crib Scarface, could it be more Tony?
You love me for me, could you be more phony?

[Kanye West:]
Put your hands to the constellations
The way you look should be a sin, you my sensation
Haven't said a word, haven't said a word to me this evening
Cat got your tongue?

[Rick Ross:]
Lookin' at my bitch, I bet she give your ass a bone
Lookin' at my wrist, it'll turn your ass to stone
Stretch limousine, sipping rosé all alone
Double-headed monster with a mind of his own
Cherry-red chariot, excess is just my character
All-black tux, nigga's shoes lavender
I never needed acceptance from all you outsiders
Had cyphers with Yeezy before his mouth wired (Uh)
Before his jaw shattered, climbing up the Lord's ladder
We still speedin', running sign' like they don't matter, uh
Hater talkin' never made me mad
Never that, not when I'm in my favorite paper tag
Therefore, G4s at the Clearport
When it come to tools, fool, I'm a Pep Boy
When it came to dope, I was quick to export
Never tired of ballin', so it's on to the next sport
New Mercedes sedan, the Lex' sport
So many cars, DMV thought it was mail fraud
Different traps I was gettin' mail from
Polk County, Jacksonville, right in Melbourne
Whole clique appetites had tapeworms
Spinnin' Teddy Pendergrass vinyl as my J burns
I shed a tear before the night's over
God bless the man I put this ice over (Uh)
Getting 2Pac money twice over
Still a real nigga, red Coogi sweater, dice-roller
I'm makin' love to the angel of death
Catchin' feelings, never stumble, retracin' my steps (Uh)
`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics9.addEventListener('click', () => {
        const lyrics = `"Runaway"
(feat. Pusha T)

[Rick James and James Brown:]
Look at you, look at you, look at you, look at you
Look at you, look at you, look at you, look at you
Look at you, look at you, look at you, look at you
Look at you, look at you, look at you, look at you
(Ladies and gentlemen, ladies, ladies and gentlemen)

[Kanye West:]
And I always find, yeah, I always find something wrong
You been puttin' up with my shit just way too long
I'm so gifted at finding what I don't like the most
So I think it's time for us to have a toast

[Kanye West:]
Let's have a toast for the douchebags
Let's have a toast for the assholes
Let's have a toast for the scumbags
Every one of them that I know
Let's have a toast for the jerk-offs
That'll never take work off
Baby, I got a plan
Run away fast as you can

[Kanye West:]
She find pictures in my e-mail
I sent this bitch a picture of my dick
I don't know what it is with females
But I'm not too good at that shit
See, I could have me a good girl
And still be addicted to them hood rats
And I just blame everything on you
At least you know that's what I'm good at

[Kanye West:]
And I always find, yeah, I always find
Yeah, I always find something wrong
You been puttin' up with my shit just way too long
I'm so gifted at finding what I don't like the most
So I think it's time for us to have a toast

[Kanye West:]
Let's have a toast for the douchebags
Let's have a toast for the assholes
Let's have a toast for the scumbags
Every one of them that I know
Let's have a toast for the jerk-offs
That'll never take work off
Baby, I got a plan
Run away fast as you can

[Kanye West and Rick James:]
Run away from me, baby
Ah, run away
Run away from me, baby (Look at you, look at you, look at you)
Run away
When it starts to get crazy (Look at you, look at you, look at you)
Then run away
Babe, I got a plan, run away as fast as you can
Run away from me, baby
Run away
Run away from me, baby (Look at, look at, look at, look at, look at, look at, look at you)
Run away
When it starts to get crazy (Look at you, look at you, look at you, look at you)
Why can't she just run away?
Baby, I got a plan
Run away as fast as you can (Look at you, look at you, look at you)

[Pusha T:]
Twenty-four seven, three sixty-five, pussy stays on my mind
I-I-I-I did it, alright, alright, I admit it
Now pick your next move, you could leave or live with it
Ichabod Crane with that motherfuckin' top off
Split and go where? Back to wearing knock-offs?
Haha, knock it off, Neimans, shop it off
Let's talk over mai tais, waitress, top it off
Hoes like vultures, wanna fly in your Freddy loafers
You can't blame 'em, they ain't never seen Versace sofas
Every bag, every blouse, every bracelet
Comes with a price tag, baby, face it
You should leave if you can't accept the basics
Plenty hoes in the baller-nigga matrix
Invisibly set, the Rolex is faceless
I'm just young, rich, and tasteless, P

[Kanye West:]
Never was much of a romantic
I could never take the intimacy
And I know I did damage
'Cause the look in your eyes is killing me
I guess you knew of that advantage
'Cause you could blame me for everything
And I don't know how I'ma manage
If one day, you just up and leave

[Kanye West:]
And I always find, yeah, I always find something wrong
You been puttin' up with my shit just way too long
I'm so gifted at finding what I don't like the most
So I think it's time for us to have a toast

[Kanye West:]
Let's have a toast for the douchebags
Let's have a toast for the assholes
Let's have a toast for the scumbags
Every one of them that I know
Let's have a toast for the jerk-offs
That'll never take work off
Baby, I got a plan
Run away fast as you can`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics10.addEventListener('click', () => {
        const lyrics = `"Hell Of A Life"

I think I just fell in love with a porn star
Turn the camera on, she a born star
Turn the corners in a foreign car
Call the coroners, do the CPR
She gave that old nigga a ulcer
Her bittersweet taste made his gold teeth ache, uh
Make her knees shake, make a priest faint, uh
Make a nun cum, make her cremate, uh
Move downtown, cop a sweet space, uh
Livin' life like we won the sweepstakes, what?
We headed to hell for Heaven's sakes, huh
Well, I'ma levitate, make the devil wait, yeah

Have you lost your mind?
Tell me when you think we crossed the line
No more drugs for me, pussy and religion is all I need
Grab my hand and baby, we'll live a hell of a life

Never in your wildest dreams
Never in your wildest dreams, in your wildest
You could hear the loudest screams
Comin' from inside the screen, you a wild bitch
Tell me what I gotta do to be that guy
Said her price go down, she ever fuck a black guy
Or do anal, or do a gang-bang
It's kinda crazy that's all considered the same thing
Well, I guess a lotta niggas do gang-bang
And if we run trains, we all in the same gang
Runaway slaves all on a chain gang
Bang, bang, bang, bang, bang

Have you lost your mind?
Tell me when you think we crossed the line
No more drugs for me, pussy and religion is all I need
Grab my hand and baby, we'll live a hell of a life

One day, I'm gon' marry a porn star
We'll have a big-ass crib and a long yard
We'll have a mansion and some fly maids
Nothin' to hide, we both screwed the bridesmaids
She wanna role-play 'til I roll over
I'ma need a whole day, at least roll doja
What party is we goin' to on Oscar day?
'specially if she can't get that dress from Oscar de
La Renta, they wouldn't rent her, they couldn't take the shame
Snatched the dress off her back and told her, "Get away"
How could you say they live they life wrong?
When you never fuck with the lights on

Fuck with the lights
Fuck with the, with the lights on
Fuck with the lights
Fuck with the, with the lights on
Fuck with the lights on
With the, with the lights on
Fuck with the lights
Fuck with the, with the lights on
Fuck, fuck with the lights
Fuck with the, with the lights on
Fuck with the lights
Fuck with the, with the lights on

Have you lost your mind?
Tell me when you think we crossed the line
No more drugs for me, pussy and religion is all I need
Grab my hand and baby, we'll live a hell of a life

I think I fell in love with a porn star
And got married in the bathroom
Honeymoon on the dance floor
And got divorced by the end of the night
That's one hell of a life`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics11.addEventListener('click', () => {
        const lyrics = `"Blame Game"
(feat. John Legend)

[Kanye West:]
Whose fault?

[John Legend:]
Let's play the blame game, I love you more
Let's play the blame game for sure
Let's call out names, names, I hate you more
Let's call out names, names for sure

[John Legend:]
I'll call you bitch for short
As a last resort and my first resort
You call me motherfucker for long
At the end of it, you know we both were wrong

[John Legend:]
But I love to play the blame game, I love you more
Let's play the blame game for sure
Let's call out names, names, I hate you more
Let's call out names, names for sure

[Kanye West:]
On the bathroom wall I wrote
"I'd rather argue with you than to be with someone else"
I took a piss and dismiss it like "fuck it"
And I went and found somebody else
Fuck arguing and harvesting the feelings
Yo, I'd rather be by my fuckin' self
'Til about 2 A.M. and I call back
And I hang up and I start to blame myself
Somebody help

[John Legend:]
Let's play the blame game, I love you more
Let's play the blame game for sure
Let's call out names, names, I hate you more
Let's call out names, names for sure

[Kanye West:]
You weren't perfect, but you made life worth it
Stick around, some real feelings might surface
Been a long time since I spoke to you in a bathroom
Grippin' you up, fuckin' and chokin' you
What the hell was I supposed to do?
I know you ain't gettin' this type of dick from that local dude
And if you are, I hope you have a good time
'Cause I definitely be havin' mine
And you ain't finna see a mogul get emotional
Every time I hear about other niggas is strokin' you
Lie and say I hit you, he sittin' there consoling you
Runnin' my name through the mud, who's provoking you?
You should be grateful a nigga like me ever noticed you
Now you noticeable and can't nobody get control of you
1 A.M. and can't nobody get a hold of you
I'm callin' your brother's phone, like, what was I supposed to do?
Even though I knew he never told the truth
He was just gon' say whatever that you told him to
At a certain point, I had to stop asking questions
Y'all got dirt on each other like mud wrestlers
I heard he bought some coke with my money, that ain't right, girl
You gettin' blackmailed for that white girl
You always said, "Yeezy, I ain't your right girl
You'll probably find one of them 'I like art'-type girls"
"All of the lights," she was caught in the hype, girl
And I was satisfied bein' in love with a lie
Now who to blame? You to blame?
Me to blame? For the pain
And it poured every time when it rained

[John Legend:]
Let's play the blame game, I love you more
Let's play the blame game for sure

[Kanye West:]
Things used to be, now they not
Anything but us is who we are
Disguising ourselves as secret lovers
We've become public enemies
We walk away like strangers in the street
Gone for eternity
We erased one another
So far from where we came
With so much of everything
How do we leave with nothing?
Lack of visual empathy equates the meaning of L-O-V-E
Hatred and attitude tear us entirely
Chloe Mitchell

[Kanye West:]
Let's play the blame game, I love you more
Let's play the blame game for sure
Let's call out names, names, I hate you more
Let's call out names, names, for sure

[Kanye West:]
I can't love you this much, I can't love you this much
I can't love you this much, I can't love you this much
I can't love you this much, no, I can't love you this much
I can't love you this much, I can't love you this much

[Kanye West:]
And I know that you are somewhere doing your thing
And when the phone called, it just ring and ring
You ain't pick up, but your phone accidentally called me back
And I heard the whole thing
I heard the whole thing, whole thing, whole thing

[Chris Rock and Salma Kenas ("The Best Birthday"):]
Oh my God
Baby, you done took this shit to another motherfuckin' level
Now, a neighborhood nigga like me ain't supposed to be gettin' no pussy like this
Goddamn, goddamn
Who taught you how to get sexy for a nigga?
(Yeezy taught me)
You never used to talk dirty, but now you goddamn disgusting
My, my God, where'd you learn that?
(Yeezy taught me)
Look at you, motherfuckin' butt-ass-naked
With them motherfuckin' Jimmy Choos on
Who taught you how to put some motherfuckin' Jimmy Choos on?
(Yeezy taught me)
Yo, you took your pussy game up a whole 'nother level
This is some Cirque du Soleil pussy now, shit
You done went all porno on a nigga, okay?
And I-I-I-I, I love it, and I thank you
I thank you, my dick thanks you
How'd you learn, how, how did your pussy game come up?
(Yeezy taught me)
I was fuckin' parts of your pussy I'd never fucked before
I was in there like, "Oh shit, I never been here before
I've never even seen this part of Pussy Town before"
It's like you got this shit reupholstered or some shit
What the fuck happened?
Who, who the fuck got your pussy all reupholstered?
(Yeezy reupholstered my pussy)
You know what, I got to thank Yeezy
And when I see that nigga, I'ma thank him
I'ma buy the album, I'ma download that motherfucker
I'ma shoot a bootlegger
That's how good I feel about this nigga
Ah
I still can't believe you got me this watch
This motherfucker is the exact motherfucker I wanted
With the bezel? This is the motherfucker I wanted
I saw this shit, I saw it, Twista had this shit on in The Source
I 'member, Twista had this motherfucker on in The Source
That's right, that's right
Yo, yo, babe, yo, yo, this the best birthday ever
Where'd you learn to treat a nigga like this?
(Yeezy taught me)
Yeezy taught you well
Yeezy taught you well
`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics12.addEventListener('click', () => {
        const lyrics = `"Lost In The World"
(feat. Justin Vernon of Bon Iver)

[Justin Vernon:]
I'm up in the woods, I'm down on my mind
I'm building a still to slow down the time
I'm up in the woods, I'm down on my mind
I'm building a still to slow down the time
I'm up in the woods, I'm down on my mind
I'm building a still, down the time

[Kanye West and Justin Vernon:]
I'm lost in the world, been down my whole life
I'm new in the city, and I'm down for the night
Down for the night, said she's down for the night
Ooh, ooh, ooh, ooh
Ooh, ooh, ooh (Slow down the time), ooh
I'm lost in the world, been down my whole life
I'm new in the city, but I'm down for the night
Down for the night, down for the night

[Kanye West:]
You're my devil, you're my angel
You're my heaven, you're my hell
You're my now, you're my forever
You're my freedom, you're my jail
You're my lies, you're my truth
You're my war, you're my truce
You're my questions, you're my proof
You're my stress and you're my masseuse
Ma-ma-se, ma-ma-se, ma-ma-ku-sa
Lost in this plastic life
Let's break out of this fake-ass party
Turn this into a classic night
If we die in each other's arms
Still get laid in the afterlife
If we die in each other's arms
Still get laid, yeah, yeah, yeah

[Kanye West and Elly Jackson:]
Run from the lights, run from the night, run for your life
Down for the night, down for the night, down for the night

[Kanye West:]
I'm lost in the world, been down my whole life
I'm new in the city, and I'm down for the night
Down for the night, down for the night

[Gil Scott Heron and Kanye West:]
Who will survive in America?
Who will survive in America? (Down for the night)
Who will survive in America?
Who will survive in America?

[Kanye West:]
I'm lost in the world, been down my whole life
I'm new in the city
And I'm down for the night, down for the night
I'm lost in the world, been down my whole life
I'm new in the city
But I'm down for the night, down for a night
Oh-oh, get down`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics13.addEventListener('click', () => {
        const lyrics = `"Who Will Survive In America"

[Gil Scott-Heron:]
Us living as we do upside-down
And the new word to have is revolution
People don't even want to hear the preacher spill or spiel
Because God's whole card has been thoroughly piqued
And America is now blood and tears instead of milk and honey
The youngsters who were programmed to continue fucking up woke up one night
Digging Paul Revere and Nat Turner as the good guys
America stripped for bed and we had not all yet closed our eyes
The signs of truth were tattooed across our often-entered vagina
We learned to our amazement, the untold tale of scandal
Two long centuries buried in the musty vault
Hosed down daily with a gagging perfume
America was a bastard
The illegitimate daughter of the mother country
Whose legs were then spread around the world
And a rapist known as freedom, free-doom
Democracy, liberty, and justice were revolutionary code names that preceded the bubbling, bubbling, bubbling, bubbling, bubbling
In the mother country's crotch
What does Webster say about soul?
All I want is a good home and a wife
And a children, and some food to feed them every night
After all is said and done, build a new route to China if they'll have you
Who will survive in America?
Who will survive in America?
Who will survive in America?
Who will survive in America?`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });
</script>

<!-- Call up the footer-->
<?php
include 'includes/footer.php';
?>