<!-- Call up the header and navbar and set page title-->
<?php
$page_title = "Ye";
include 'includes/header.php';
include 'includes/nav.php';
?>

<!-- set the splitscreen -->
<div class="container" style="max-width:100%;">
    <div class="row split">
        <div class="col left" style="background-color:#284061;"> <!-- left col -->
            <div class="leftT" style="background-color:#2c4454;"></div> <!-- top section of left col -->
            <div id="leftM"> <!-- middle section of left col -->
                <!-- i frame for songs -->
                <iframe class="video" id="video-player" width="240px" height="240px" frameborder="0"></iframe> 

                 <!-- div for song lyrics -->
                <div id="LyricsContainer" style="display: none; max-height:205px; background-color:#5c7ca4; padding-left: 20px; padding-top: 10px;">  
                </div>

            </div>
            <div class=leftB style="background-color:#2c4454;"> <!-- bottom section of left col -->
            </div>

        </div>
        <!-- right col -->
        <div class="col right" style="background-color:#40b16d;"> 
            <br>
            <div class="albumcover"><img src="image/YeCover.jpeg" class="img-fluid"></div> <!-- album cover -->
            <br>
            <h3 class="albumtitle">Ye</h3> <!-- title of the album -->
            <!-- Description/background of album -->
            <p class="albumdesp">The Ye album, released in 2018, is a raw and emotionally charged work that explores Kanye West's personal struggles with mental health and addiction. The album is a testament to West's willingness to be vulnerable and honest with his listeners, and is characterized by its stripped-down production and confessional lyrics.</p>
            <p class="albumdesp">At just seven tracks in length, Ye is a concise and focused work that packs a powerful emotional punch. Tracks like "Ghost Town" and "Violent Crimes" are deeply personal and introspective, with West grappling with his fears, regrets, and insecurities in a way that is both relatable and deeply affecting.</p>
            <p class="albumdesp">Musically, Ye is a departure from the bombastic, maximalist style of West's previous works, instead opting for a more stripped-down and minimalist approach. The album features sparse, ethereal production that allows West's voice and lyrics to take center stage, creating a deeply intimate and introspective atmosphere.</p>
            <p class="albumdesp">Despite its relatively short length, Ye is a deeply impactful work that showcases West's continued evolution as an artist and his willingness to confront his own demons and share his struggles with his listeners. The album is a testament to the healing power of music and the transformative potential of personal growth and self-reflection.</p>

            <!-- tracklist -->
            <ul class="list-group">
                <li class="list-group-item albumtrack" style="background-color: #40b16d;">I Thought About Killing You <!-- Song title -->
                    <span class="artist">• Kanye West</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="no1YszVVybo"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics1" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #40b16d;">Yikes <!-- Song title -->
                    <span class="artist">• Kanye West</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="kPPyUO6m3-4"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics2" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #40b16d;">All Mine <!-- Song title -->
                    <span class="artist">• Kanye West • Valee • Ty Dolla $ign</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="YdA7swZoxks"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics3" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #40b16d;">Wouldn't Leave <!-- Song title -->
                    <span class="artist">• Kanye West • PARTYNEXTDOOR • Ty Dolla $ign • Jeremih</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="nMkXJohQiuQ"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics4" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #40b16d;">No Mistakes <!-- Song title -->
                    <span class="artist">• Kanye West • Kid Cudi • Charlie Wilson</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="4I8gDpuvZt4"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics5" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #40b16d;">Ghost Town <!-- Song title -->
                    <span class="artist">• Kanye West • 070 Shake • PARTYNEXTDOOR • Kid Cudi</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="qAsHVwl-MU4"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics6" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #40b16d;">Violent Crimes <!-- Song title -->
                    <span class="artist">• Kanye West • 070 Shake</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="dTcyiwCbXSE"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
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
        const lyrics = `"I Thought About Killing You"

[Francis and the Lights and Kanye West:]
I know, I know, I know, I know, know
I know, I know, I know, I know, know
I, I know it, I know it

[Kanye West:]
The most beautiful thoughts are always besides the darkest
Today, I seriously thought about killing you
I contemplated, premeditated murder
And I think about killing myself
And I love myself way more than I love you, so…
Today, I thought about killing you, premeditated murder
You'd only care enough to kill somebody you love
The most beautiful thoughts are always inside the darkest
(Mhm—mhm—mhm—mhm—mhmm)
Just say it out loud to see how it feels
People say "don't say this, don't say that"
Just say it out loud, just to see how it feels
Weigh all the options, nothing's off the table
Today, I thought about killing you, premeditated murder
I think about killing myself
And I, I love myself way more than I love you
The most beautiful thoughts are always besides the darkest
(Mhm—mhm—mhm—mhm—mhm—mhm—mhm—mhm—mhmm)
I think this is the part where I'm supposed to say somethin' good to compensate it so it doesn't come off bad
But sometimes I think really bad things
Really, really, really bad things
And I love myself way more than I love you
See, if I was tryin' to relate it to more people
I'd probably say I'm struggling with loving myself
Because that seems like a common theme
But that's not the case here
I love myself way more than I love you
And I think about killing myself
So, best believe, I thought about killing you today
Premeditated murder

[Kanye West:]
I called up my loved ones, I called up my cousins
I called up the Muslims, said I'm 'bout to go dumb
Get so bright, it's no sun, get so loud, I hear none
Screamed so loud, got no lungs, hurt so bad, I go numb
Time to bring in the drums, that prra-pa-pa-pum
Set the NewTone on 'em, set the nuke off on 'em
I need Coke with no rum, I taste coke on her tongue
I don't joke with no one, they'll say "He died so young"
I done had a bad case of too many bad days
Got too many bad traits, used the floor for ashtrays
I don't do shit halfway, I'ma clear the cache
I'ma make my name last, put that on my last name
It's a different type of rules that we obey
Ye, Ye, Ye season, nigga, we Old Bay
We was all born to die, nigga, DOA
Niggas say they hero, mm, I don't see no cape
Mm, I don't see no, mm, yeah, I don't see no, mm, mm
If I wasn't shinin' so hard, wouldn't be no shade
Buckwheat-ass nigga, it's gon' be o-tay
Sorry, but I chose not to be no slave
Young nigga shit, nigga, we don't age
I thought I was past my Deebo ways
Even when I went broke, I ain't break
How you gon' hate? Nigga, we go way back
To when I had the braids and you had the wave cap
Drop a pin for the fade and I'm on my way ASAP
Don't get socked in the mouth, you know homie don't play that
Pay the fire marshal bill 'cause this shit done got way packed
They wanna see me go ape (Ape, ape)
All you gotta do is speak on Ye
All you gotta do is speak on Ye
Don't get your tooth chipped like Frito-Lay`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics2.addEventListener('click', () => {
        const lyrics = `"Yikes"

Shit could get menacin', frightenin', find help
Sometimes I scare myself, myself
Shit could get menacin', frightenin', find help
Sometimes I scare, myself, myself

Tweakin', tweakin' off that 2C-B, huh
Is he gon' make it? TBD, huh
Thought I was gon' run, DMC, huh
I done died and lived again on DMT, huh
See, this a type of high that won't come down
This the type of high that get you gunned down
Yeezy, Yeezy trollin' OD, huh
Turn TMZ to Smack DVD, huh
Russell Simmons wanna pray for me too
I'ma pray for him 'cause he got MeToo'd
Thinkin' what if that happened to me too
Then I'm on E! News

Shit could get menacin', frightenin', find help
Sometimes I scare myself, myself
Shit could get menacin', frightenin', find help
Sometimes I scare myself, myself

Ayy, hospital band a hundred bands, fuck a watch
Hundred grand'll make your best friends turn to opps
I hear y'all bringin' my name up a lot
Guess I just turned the clout game up a notch
See, y'all really shocked, but I'm really not
You know how many girls I took to the titty shop?
If she get the ass with it, that's a 50 pop
I still bring the bad bitches in the city out
Uh, just a different type of leader
We could be in North Korea, I could smoke with Wiz Khalifa, uh
Told my wife I've never seen her
After I hit it, bye Felicia, that's the way that I'ma leave it up

Shit could get menacin', frightenin', find help
See, this is why all the bitches fuck with Ye!
Fuck what they talkin' 'bout!
Sometimes I scare myself, myself
They take me on meds, off meds, ask yourself
Shit could get menacin', frightenin', find help
Ask your homegirl right now, "Look, you had a shot at Ye?"
Sometimes I scare myself, myself
You'd drop everything!

Tweakin', tweakin' off that 2C-B, huh
This is why your bitches fuck with me, huh
Smash, she gon' end up on TV, huh
Last thing that you ever wanna see, huh
I can feel the spirits all around me
I think Prince and Mike was tryna warn me
They know I got demons all on me
Devil been tryna make an army
They been strategizin' to harm me
They don't know they dealin' with a zombie
Niggas been tryna test my Gandhi
Just because I'm dressed like Abercrombie

You see? You see?
That's what I'm talkin' 'bout!
That's why I fuck with Ye!
See, that's my third per-
That's my bipolar shit, nigga, what?
That's my superpower, nigga, ain't no disability
I'm a superhero! I'm a superhero!
Agghhh!`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics3.addEventListener('click', () => {
        const lyrics = `"All Mine"
(feat. Valee, Ty Dolla $ign)

[Ant Clemons:]
Yeah, you supermodel thick
Damn, that ass bustin' out the bottom
I'ma lose my mind in it
Crazy, that medulla oblongata
Get to rubbin' on my lamp
Get the genie out the bottle

[Ty Dolla $ign and Ant Clemons:]
Fuck it up, fuck it up
Pussy good, go and back it up
Pipe her up, I'ma pipe her up
Make her mine, I done fell in love
Juicy thing, make that pussy sing
One more time, baby, do it big
Make it cry, come boohoo this shit

[Ant Clemons:]
Yeah, you supermodel thick
Damn, that ass bustin' out the bottom
I'ma lose my mind in it
Crazy, that medulla oblongata
Get to rubbin' on my lamp
Get the genie out the bottle

[Kanye West:]
If I pull up with a Kerry Washington
That's gon' be an enormous scandal
I could have Naomi Campbell
And still might want me a Stormy Daniels
Sometimes you gotta bag the boss up
I call that takin' Corey Gambles
Find yourself up in the food court
You might have to enjoy a sample
All these thots on Christian Mingle
Almost what got Tristan single
If you don't ball like him or Kobe
Guarantee that bitch gonna leave you
Ayy, time is extremely valuable
And I prefer to waste it on girls that's basic
That's just some Ye shit
Right now, let's do what we want
Let's have a threesome: me, you, and a blunt
I love your titties 'cause they prove
I can focus on two things at once

[Ant Clemons:]
Yeah, you supermodel thick
Damn, that ass bustin' out the bottom
I'ma lose my mind in it
Crazy, that medulla oblongata
Get to rubbin' on my lamp
Get the genie out the bottle
Get the genie out the bottle

[Kanye West:]
Let me hit it raw like fuck the outcome
Ayy, none of us'd be here without cum
Ayy, if it ain't all about the income
Ayy, ayy, let me see you go ahead and spend some
Ayy, if you drivin' 'round in some Dri-Fit
Ayy, I'ma think that you the type to dry snitch
Hm, mhm, if I see you pull up with the three stripes
Ayy, ayy, I'ma fuck around and make you my bitch

[Ant Clemons:]
Yeah, you supermodel thick
Damn, that ass bustin' out the bottom
I'ma lose my mind in it
Crazy, that medulla oblongata
Get to rubbin' on my lamp
Get the genie out the bottle
Get the genie out the bottle`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics4.addEventListener('click', () => {
        const lyrics = `"Wouldn't Leave"
(feat. Ty Dolla $ign, Jeremih, PARTYNEXTDOOR)

[PARTYNEXTDOOR and Kanye West:]
I don't feel that she's mine enough
God, I feel I couldn't have you windin' up
Butterfly in my wrist
You make pretty women out of my skin
And I don't feel like
And I know you wouldn't leave

[Kanye West:]
They say, "Build your own"—I said, "How, Sway?"
I said, "Slavery a choice"—they said, "How, Ye?"
Just imagine if they caught me on a wild day
Now I'm on fifty blogs gettin' fifty calls
My wife callin', screamin', say we 'bout to lose it all
Had to calm her down 'cause she couldn't breathe
Told her she could leave me now, but she wouldn't leave

[Kanye West:]
And I know you wouldn't leave

[Jeremih:]
And I sometimes wish
We doin' such things
We could wait longer than this
Yes, you know you're one of these
We can run through with the top chopped, yeah
And the sundress down, ooh

[Kanye West:]
And I know you wouldn't...

[Kanye West:]
Oh, don't bring that up, that's gon' get me sentimental
You know I'm sensitive, I got a gentle mental
Every time somethin' happen they want me sent to mental
We had an incident, but I cover incidentals
You want me workin' on my messagin'
When I'm thinkin' like George Jetson
But soundin' like George Jefferson
Then they're questionin' my methods then
If you tweakin' out on my texts again
Then I don't get reception here
I got the mind state to take us past the stratosphere
I use the same attitude that done got us here
I live for now, I don't know what happen after here
I live for now, I don't know what happen after here
Plus, what was meant to be was meant to be
Even if, publicly, I lack the empathy
I ain't finna talk about it, 'nother four centuries
One and one is two, but me and you, that's infinity

[Kanye West:]
And I know you wouldn't...

[PARTYNEXTDOOR and Ty Dolla $ign:]
I don't feel like she's mine enough
God, I feel I couldn't have you windin' up (Why?)
Butterfly in my wrist
You make pretty women out of my skin (Out of my skin)
And I don't feel like (Uh)
And I know you wouldn't leave (Love me or hate me)

[Kanye West and Ty Dolla $ign:]
For any guy that ever fucked up (Love me or hate me)
Ever embarrassed their girl (Love me or hate me)
Ever embarrassed their wife (Gone when you miss me)
She told you not to do that shit (Oh)
She told you you's gon' fuck the money up
But you ain't wanna listen, did you?
Keep that same energy
Keep that same energy
Keep that same energy
Now you testin' her loyalty
This what they mean when they say
"For better or for worse", huh?
For every down female that stuck with their dude
Through the best times, through the worst times
This for you

[Kanye West:]
And I know you wouldn't leave`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics5.addEventListener('click', () => {
        const lyrics = `"No Mistakes"
(feat. Kid Cudi, Charlie Wilson)

[Slick Rick:]
Believe it or not
Believe it or not

[Charlie Wilson and Kid Cudi:]
Make no mistake, girl, still love you
Make no mistake, girl, still love you
Make no mistake, girl, still love you
Make no mistake, girl, still love you

[Kanye West and Slick Rick:]
Take the top off, let the sun come in (The lord still shines on you)
Whoa, for all my dogs that stayed down, we up again (Again)
Oh, I got dirt on my name, I got white on my beard
I had debt on my books, it's been a shaky-ass year
Let me make this clear, so all y'all see
I don't take advice from people less successful than me
Hah? Ain't no love lost, but the gloves off
And we up in this bitch until they turn the club off
Had to tell the dogs, "Turn the snubs off!"
Plus they already mad that the Cubs lost
(Believe it or not) These two wrongs'll right you
(Believe it or not) I was too grown in high school
(Believe it or not) The true soul of Ice Cube
Too close to snipe you, truth told, I like you
Too bold to type you, too rich to fight you
Calm down, you light skin!

[Charlie Wilson and Kid Cudi (Slick Rick):]
Make no mistake, girl, still love you (Make no)
Make no mistake, girl, still love you (No way)
(Believe it or not, the Lord still shines on you)
Make no mistake, girl, still love you
(Believe it or not, the Lord still shines on you)
Make no mistake, girl, still love you
(Believe it or not, the Lord still shines on you)
Make no mistake, girl, still love you (No way)
Make no mistake, girl, still love you
`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics6.addEventListener('click', () => {
        const lyrics = `"Ghost Town"
(feat. 070 Shake, PARTYNEXTDOOR)

[Shirley Ann Lee:]
Some day, some day
Some day I'll, I wanna wear a starry crown

[PARTYNEXTDOOR:]
Some day, some day, some day
I wanna lay down, like God did, on Sunday
Hold up, hold up
Some day, some days, I remembered this on a Sunday
Back way, yeah, way, way, burning, mhm-mhm
Uh, some days, not gonna please everybody
Some days I wanna hit the red dot on everybody
Some days, oh (Heatstroke)
Now that I'm livin' high, I'm smokin' marijuana
Now that I'm livin' high, I do what I wanna, oh, yeah

[Kid Cudi:]
I've been tryin' to make you love me
But everything I try just takes you further from me

[Kanye West:]
Some day we gon' set it off
Some day we gon' get this off
Baby, don't you bet it all
On a pack of Fentanyl
You might think they wrote you off
They gon' have to rope me off
Someday the drama'll be gone
And they'll play this song on and on
Sometimes I take all the shine
Talk like I drank all the wine
Years ahead but way behind
I'm on one, two, three, four, five
No half-truths, just naked minds
Caught between space and time
This not what we had in mind
But maybe some day

[Kid Cudi:]
I've been tryin' to make you love me
But everything I try just takes you further from me

[070 Shake:]
Whoa, once again I am a child
I let it all go, of everything that I know, yeah
Of everything that I know, yeah
And nothing hurts anymore, I feel kinda free
We're still the kids we used to be, yeah, yeah
I put my hand on a stove, to see if I still bleed, yeah
And nothing hurts anymore, I feel kinda free
We're still the kids we used to be, yeah, yeah
I put my hand on a stove, to see if I still bleed, yeah
And nothing hurts anymore, I feel kinda free
We're still the kids we used to be, yeah, yeah
I put my hand on a stove, to see if I still bleed, yeah
And nothing hurts anymore, I feel kinda free
We're still the kids we used to be, yeah, yeah
I put my hand on a stove, to see if I still bleed, yeah
And nothing hurts anymore, I feel kinda free`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics7.addEventListener('click', () => {
        const lyrics = `"Violent Crimes"

[070 Shake:]
Fallin', dreamin', talkin' in your sleep
I know you want to cry all night, all night
Plottin', schemin', findin'
Reason to defend all of your violent nights
Promise me you will see

[070 Shake:]
Don't you grow up in a hurry, your mom'll be worried, aw
It was all part of the story, even the scary nights
Thank you for all of the glory, you will be remembered, aw
Thank you to all of the heroes of the night (night, night)
They gotta repaint the colors, the lie is wearin' off
Reality is upon us, colors drippin' off
Colors drippin' off

[Kanye West:]
Niggas is savage, niggas is monsters
Niggas is pimps, niggas is players
'Til niggas have daughters, now they precautious
Father, forgive me, I'm scared of the karma
'Cause now I see women as somethin' to nurture
Not somethin' to conquer
I hope she like Nicki, I make her a monster
Not havin' ménages, I'm just bein' silly
I answered the door like Will Smith and Martin
Nigga, do we have a problem?
Matter fact, Marlon, this ain't Meet the Fockers
I'll beat his ass, pray I beat the charges
No, Daddy don't play, not when it come to they daughters
Don't do no yoga, don't do Pilates
Just play piano and stick to karate
I pray your body's draped more like mine
And not like your mommy's
Just bein' salty, but niggas is nuts
And I am a nigga, I know what they want
I pray that you don't get it all at once
Curves under your dress, I know it's pervs all on the net
All in the comments, you wanna vomit
That's your baby, you love her to death
Now she cuttin' class and hangin' with friends
You break a glass and say it again
She can't comprehend the danger she in
If you whoop her ass, she move in with him
Then he whoop her ass, you go through it again
But how you the devil rebukin' the sin?
Let's pray we can put this behind us
I swear that these times is the wildest
She got the scars, they serve as reminders
Blood still on her pajamas
But yesterday is dead, yeah, moment of silence
Next, she'll be off to college and then at the altar
'Cause she know that niggas is savage, niggas is monsters
Niggas is pimps, niggas is players, 'til niggas have daughters
Niggas is pimps, niggas is players, 'til niggas have daughters

[070 Shake & Ty Dolla $ign:]
Don't you grow up in a hurry, your mom'll be worried, aw
It was all part of the story, even the scary nights
Thank you for all of the glory, you will be remembered, aw
Thank you to all of the heroes of the night (night, night)
They gotta repaint the colors, the lie is wearin' off
Reality is upon us, colors drippin' off
Colors drippin' off

[Nicki Minaj:]
I'm saying it like...
"I want a daughter like Nicki, aw, man, I promise
I'ma turn her to a monster, but no ménages"
I don't know how you saying it but, let 'em hear this`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });
</script>

<!-- Call up the footer-->
<?php
include 'includes/footer.php';
?>