<!-- Call up the header and navbar and set page title-->
<?php
$page_title = "Yeezus";
include 'includes/header.php';
include 'includes/nav.php';
?>

<!-- set the splitscreen -->
<div class="container" style="max-width:100%;">
    <div class="row split">
        <div class="col left" style="background-color:#f22613;"> <!-- left col -->
            <div class="leftT" style="background-color:#d5f2f2;"></div> <!-- top section of left col -->
            <div id="leftM"> <!-- middle section of left col -->
                <!-- i frame for songs -->
                <iframe class="video" id="video-player" width="240px" height="240px" frameborder="0"></iframe> 

                 <!-- div for song lyrics -->
                <div id="LyricsContainer" style="display: none; max-height:205px; background-color:#eeeeee; padding-left: 20px; padding-top: 10px;">  
                </div>

            </div>
            <div class=leftB style="background-color:#d5f2f2;"> <!-- bottom section of left col -->
            </div>

        </div>
        <!-- right col -->
        <div class="col right" style="background-color:#b4b8bf;"> 
            <br>
            <div class="albumcover"><img src="image/YeezusCover.jpeg" class="img-fluid" alt="Image could not load"></div> <!-- album cover -->
            <br>
            <h3 class="albumtitle">Yeezus</h3> <!-- title of the album -->
            <!-- Description/background of album -->
            <p class="albumdesp">Yeezus is a groundbreaking album that marks a significant departure from Kanye West's previous work. The album's minimalistic and abrasive sound reflects West's desire to break away from the lush, soulful arrangements of his earlier albums and explore new territory. The result is a dense and challenging sonic landscape that rewards repeated listens and demands attention from listeners.</p>
            <p class="albumdesp">One of the most striking elements of Yeezus is its use of industrial and electronic sounds, which give the album a raw and aggressive edge. From the distorted synths of "On Sight" to the pulsing beats of "I Am a God," the album creates a dystopian atmosphere that reflects West's disillusionment with contemporary society. The album's production, which features contributions from Daft Punk, Hudson Mohawke, and Rick Rubin, is a testament to West's willingness to collaborate with a diverse range of artists to achieve his creative vision.</p>
            <p class="albumdesp">Lyrically, Yeezus is a provocative and often confrontational album that challenges listeners to confront uncomfortable truths about society and themselves. West's lyrics tackle themes such as race, consumerism, and the corrupting influence of fame, often in explicit and provocative terms. Tracks like "New Slaves" and "Blood on the Leaves" have been hailed as some of West's most powerful and politically charged work, showcasing his ability to use music as a platform for social commentary.</p>
            <p class="albumdesp">Overall, Yeezus is a landmark album that showcases West's artistic ambition and willingness to take risks. Its challenging sound and provocative lyrics have inspired a new generation of artists and continue to push the boundaries of what is considered acceptable in mainstream music. While it may not be to everyone's taste, Yeezus remains an essential work in West's discography and a testament to his ongoing evolution as an artist.</p>

            <!-- tracklist -->
            <ul class="list-group">
                <li class="list-group-item albumtrack" style="background-color: #b4b8bf;">On Sight <!-- Song title -->
                    <span class="artist">• Kanye West</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="uU9Fe-WXew4"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics1" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #b4b8bf;">Black Skinhead <!-- Song title -->
                    <span class="artist">• Kanye West</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="LXeQ6bmV7oU"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics2" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #b4b8bf;">I Am A God <!-- Song title -->
                    <span class="artist">• Kanye West</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="KuQoQgL63Xo"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics3" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #b4b8bf;">New Slaves <!-- Song title -->
                    <span class="artist">• Kanye West</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="vQ0u09mFodw"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics4" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #b4b8bf;">Hold My Liquor <!-- Song title -->
                    <span class="artist">• Kanye West • Chief Keef • Justin Vernon</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="bvBfiRWLj_0"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics5" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #b4b8bf;">I'm In It <!-- Song title -->
                    <span class="artist">• Kanye West • Justin Vernon</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="_jZuz3NEr18"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics6" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #b4b8bf;">Blood On The Leaves  <!-- Song title -->
                    <span class="artist">• Kanye West • Tony Williams</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="KEA0btSNkpw"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics7" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #b4b8bf;">Guilt Trip <!-- Song title -->
                    <span class="artist">• Kanye West • Kid Cudi</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="5hthMeEqf40"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics8" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #b4b8bf;">Send It Up <!-- Song title -->
                    <span class="artist">• Kanye West • King L</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="vUFiVwa6U_c"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics9" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Explicit">E</span> <!-- Explicit symbol -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #b4b8bf;">Bound 2 <!-- Song title -->
                    <span class="artist">• Kanye West • Charlie Wilson</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="5gjKuISTMRE"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics10" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
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

    // Change the content of the div when buttons are clicked
    lyrics1.addEventListener('click', () => {
        const lyrics = `"On Sight"

[Kanye West:]
Yeezy season approachin'
Fuck whatever y'all been hearin'
Fuck what, fuck whatever y'all been wearin'
A monster about to come alive again
Soon as I pull up and park the Benz
We get this bitch shaking like Parkinsons
Take my number and lock it in
Indian hair, no moccasins
It's too many hoes in this house of sin
Real nigga back in the house again
Black Timbs all on your couch again
Black dick all in your spouse again
And I know she like chocolate men
She got more niggas off than Cochran, hah!

[Kanye West:]
On sight, on sight

[Kanye West:]
How much do I not give a fuck?
Let me show you right now 'fore you give it up
How much do I not give a fuck?
Let me show you right now 'fore you give it up

Oh, he'll give us what we need
It may not be what we want

[Kanye West:]
Baby girl tryna get a nut
And her girl tryna give it up
Chopped 'em both down
Don't judge 'em, Joe Brown
One last announcement
No sports bra, let's keep it bouncin'
Everybody wanna live at the top of the mountain
Took her to the 'Bleau, she tried to sip the fountain
That when David Grutman kicked her out
But I got her back in and put my dick in her mouth

[Kanye West:]
On sight, on sight

Right now
I need right now
Right now
I need, I need right now
Right now
I need, I need right now
`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics2.addEventListener('click', () => {
        const lyrics = `"Black Skinhead"

For my theme song, my leather black jeans on
My by any means on, pardon I'm getting my scream on
Enter the kingdom but watch who you bring home
They see a black man with a white woman at the top floor they gone come to kill King Kong
Middle America packed in, came to see me in my black skin
Number one question they asking. Fuck every question you asking
If I don't get ran out by Catholics, here come some conservative Baptists
Claiming I'm overreacting like them black kids in Chiraq bitch

Four in the morning, and I'm zonin'
They say I'm possessed, it's an omen
I keep it 300, like the Romans
300 bitches, where's the Trojans?
Baby we livin' in the moment
I've been a menace for the longest
But I ain't finished I'm devoted
And you know it, and you know it

So follow me up cause this shit's about to go down
I'm doin' 500, I'm outta control now
But there's nowhere to go, now
And there's no way to slow down
If I knew what I knew in the past
I would have been blacked out on your ass

Four in the mornin', and I'm zonin'
They say I'm possessed, it's an omen
I keep it 300, like the Romans
300 bitches, where's the Trojans?
Baby we livin' in the moment
I've been a menace for the longest
But I ain't finished, I'm devoted
And you know it, and you know it

Stop all that coon shit, early morning cartoon shit
This is that goon shit, fuck up your whole afternoon shit
I'm aware I'm a wolf, soon as the moon hit
I'm aware I'm a king, back out the tomb bitch
Black out the room bitch, stop all that coon shit
These niggas ain't doin' shit, them niggas ain't doin' shit
Come on, homie, what happened?
You niggas ain't breathing you gasping
These niggas ain't ready for action
(Ready, ready for action)

Four in the mornin', and I'm zonin'
I think I'm possessed, it's an omen
I keep it 300, like the Romans
300 bitches, where's the Trojans?
Baby we're livin' in the moment
I've been a menace for the longest
But I ain't finished, I'm devoted
And you know it, and you know it

So follow me up cause this shit's about to go down
I'm doin' 500, I'm outta control now
But there's nowhere to go, now
And there's no way to slow down
If I knew what I knew in the past
I would've been blacked out on your ass

God [11x]`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics3.addEventListener('click', () => {
        const lyrics = `"I Am A God"

[Kanye West and Capelton:]
Blazin', mi don't want dem
Mi need dem
Blazin
Suh mi tek har outta bugah red and put her in a tall skirt
And now she find out what life is really worth
No to X rated
Yo mi tek har outta bugah red and put her in a tall skirt
And now she find out what life is really worth
No to X rated
I am a god
I am a god
I am a god

[Kanye West:]
I am a god
Hurry up with my damn massage
Hurry up with my damn ménage
Get the Porsche out the damn garage
I am a god
Even though I'm a man of God
My whole life in the hand of God
So y'all better quit playin' with God

[Kanye West:]
Soon as they like you make 'em unlike you
Cause kissin' people ass is so unlike you
The only rapper compared to Michael
So here's a few hatin'-ass niggas to fight you
And here's a few snake-ass niggas to bite you
And I don't even wanna hear 'bout what niggas might do
Old niggas mentally still in high school
Since the tight jeans they ain't never liked you
Pink-ass polos with a fuckin' backpack
But everybody know you brought real rap back
Nobody had swag, man, we the Rat Pack
Virgil, Pyrex, Don C snapback
Ibn diamond, Chi-town shinin'
Monop' in this bitch again, changed the climate
Hop in this bitch to give Saint the garment
Until the day I get struck by lightning

[Kanye West:]
I am a god
So hurry up with my damn massage
In a French-ass restaurant
Hurry up with my damn croissants
I am a god
I am a god
I am a god

[Kanye west:]
I just talked to Jesus
He said, "What up, Yeezus?"
I said, "Shit—I'm chillin'
Tryna stack these millions"
I know he the most high
But I am a close high
Mi casa, su casa
That's our cosa nostra
I am a god
I am a god
I am a god

[Justin Vernon:]
Ain't no way I'm givin' up, I'm a god`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics4.addEventListener('click', () => {
        const lyrics = `"New Slaves"

[Swizz Beatz:]
Chill, chill, chill, chill, chill, chill
Chill, chill, chill, chill, chill, chill

[Kanye West:]
My mama was raised in the era when
Clean water was only served to the fairer skin
Doin' clothes, you woulda thought I had help
But they wasn't satisfied unless I picked the cotton myself
You see it's broke nigga racism
That's that "Don't touch anything in the store"
And it's rich nigga racism
That's that "Come in, please buy more"
"What you want, a Bentley? Fur coat? A diamond chain?
All you blacks want all the same things"
Used to only be niggas, now everybody playin'
Spendin' everything on Alexander Wang
New slaves

[Kanye West:]
You see it's leaders and it's followers
But I'd rather be a dick than a swallower
You see it's leaders and it's followers
But I'd rather be a dick than a swallower

[Kanye West:]
I throw these Maybach keys, I wear my heart on the sleeve
I know that we the new slaves, I see the blood on the leaves
I see the blood on the leaves, I see the blood on the leaves
I know that we the new slaves, I see the blood on the leaves
They throwin' hate at me, want me to stay at ease
Fuck you and your corporation, y'all niggas can't control me
I know that we the new slaves, I know that we the new slaves
I'm 'bout to wild the fuck out, I'm goin' Bobby Boucher
I know that pussy ain't free, you niggas pussy, ain't me
Y'all throwin' contracts at me, you know that niggas can't read
Throw on some Maybach keys, fuck it, c'est la vie
I know that we the new slaves, y'all niggas can't fuck with me
Y'all niggas can't fuck with Ye, y'all niggas can't fuck with Ye
I'll move my family out the country so you can't see where I stay
So go and grab the reporters, so I can smash their recorders
See, they'll confuse us with some bullshit like the New World Order
Meanwhile the DEA teamed up with the CCA
They tryna lock niggas up, they tryna make new slaves
See, that's that privately owned prison, get your piece today
They prolly all in the Hamptons, braggin' 'bout what they made
Fuck you and your Hampton house, I'll fuck your Hampton spouse
Came on her Hampton blouse and in her Hampton mouth
Y'all 'bout to turn shit up, I'm 'bout to tear shit down
I'm 'bout to air shit out, now what the fuck they gon' say now?

[Kanye West, Frank Ocean and Kóbor János:]
I won't end this high, not this time again
So long, so long, so long, you cannot survive
And I'm not dyin', and I can't lose
I can't lose, no, I can't lose
'Cause I can't leave it to you
So let's get too high, get too high again
Too high again, too high, ooh hoo-hoo-hoo, woo
Yeah, h-h-h-high, h-high-high, high-high high-igh-high-high
H-high-igh, yeah, high, high-igh
Egyszer a Nap úgy elfáradt (mhm-igh)
Elaludt mély zöld tó ölén
Az embereknek fájt a sötét
Ő megsajnált, eljött közénk
`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics5.addEventListener('click', () => {
        const lyrics = `"Hold My Liquor"
(feat. Chief Keef & Justin Vernon)

[Justin Vernon:]
I can hold my liquor
But this man can't handle his weed
Dark and lonely now
On Chicago, south of town
I'm on to Indiana
I heard it in the radio now

[Chief Keef:]
I can't handle no liquor
But these bitches can't handle me
I can't control my niggas
And my niggas they can't control me
You say you know me, my nigga
But you really just know the old me

[Kanye West:]
Bitch, I'm back out my coma
Wakin' up on your sofa
When I park my Range Rover
Slightly scratch your Corolla
Okay, I smashed your Corolla
I'm hangin' on a hangover
Five years we been over
Ask me why I came over
One more hit and I can own ya
One more fuck and I can own ya
One cold night in October
Pussy had me floatin'
Feel like Deepak Chopra
Pussy had me dead
Might call 2Pac over
Yeezy's all on your sofa
These the Red Octobers
Still ain't learn me no manners
You love me when I ain't sober
You love me when I'm hungover
Even when I blow doja
Then her auntie came over
Skinny bitch with no shoulders
Tellin' you that I'm bogus
Bitch, you don't even know us
"Baby girl, he's a loner"
"Baby girl, he's a loner"
Late-night organ donor
After that, he disown ya
After that he's just hopeless
Soul mates become soulless
"When it's over it's over"
And bitch, I'm back out my coma

[Justin Vernon:]
Callin' up your uncle's place
Shit's all over the place
I don't hear your phone
Oh, I wanna phone home

[Chief Keef:]
I can't handle no liquor
But these bitches can't handle me
I can't control my niggas
And my niggas they can't control me
You say you know me, my nigga
But you really just know the old me

[Justin Vernon and Kanye West:]
I heard you need a new fad (A new girl)
I heard you need a new stack (A new girl)
I heard you need a new phone (A new girl)
I know your 'rents ain't be home (A new girl)

[Justin Vernon:]
Callin' up your uncle's place
Shit's all over the place
I don't hear your phone
Oh, I wanna phone home`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics6.addEventListener('click', () => {
        const lyrics = `"I'm In It"
(feat. Justin Vernon)

[Kanye West:]
Damn, your lips very soft
As I turn my Blackberry off
And I turn your bathwater on
And you turn off your iPhone
Careless whispers, eye fuckin', bitin' ass
Neck, ears, hair, legs, eating ass
Your pussy's too good, I need to crash
Your titties, let 'em out, free at last
Thank God almighty, they free at last
We was up at the party but we was leavin' fast
Had to stop at 7-Eleven like I needed gas
I'm lyin', I needed condoms, don't look through the glass
Chasin' love, all the bittersweet hours lost
Eatin' Asian pussy, all I need was sweet and sour sauce
Tell your boss you need an extra hour off
Get you super wet after we turn the shower off

[Assassin:]
That's all them can do (Say wah? Say wah? Say wah? Say wah?)
That's all them can do
We deal with action ting
Just a badman ting a-dat man do
Action ting, yo, a badman ting

I'm a badman if you know say
Disrespect we no tek, no way José
Try that 'pon February the 30th
That's right, couldn't try that no day
When we roll 'round 'pon your block
Nuh badda feel seh we won't spray, like a aerosol can
When we roll 'round 'pon your block
Nuh badda feel seh we won't spray, like an aerosol can
We a gon' smile 'pon court day
Becuh we beat murder charge like OJ

[Kanye West (Justin Vernon):]
That's right, I'm in it
(Should've known I would fall)
I'm in it
(Steppin' on cracks on the floor)
That's right
(And your boys at your door)
That's right, I'm in it
(Well, you need to fight for your own)
That's right, I'm in it
(Then don't let me at your table)
I'm in it
(If you just gonna lay there)
Damn right
(Fist jumps in the air, you love flame wars)
(I'll be gone long, grab that ass, shed your clothes)

[Kanye West:]
Uh, picked up where we left off
Uh, I need you home when I get off
Uh, you know I need that wet mouth
Uh, I know you need that reptile
Uh, she cut from a different textile
Uh, she love different kinds of sex now
Uh, black girl sippin' white wine
Put my fist in her like a civil rights sign
And grabbed it with a slight grind
And held it 'til the right time
Then she came like ah!

[Assassin (Kanye West):]
(That's why I'm in it and I can't get out)
That's all them can do (Say wah? Say wah? Say wah? Say wah?)
(That's why I'm in it and I can't get out)
(That's all them can do)
That's all them can do
We deal with action ting
Just a badman ting a-dat man do
(That's right I'm in it)

[Justin Vernon:]
I'll be gone long, grab that ass, shed your clothes

[Justin Vernon:]
Say you long for me, for you
Lay it off with all your rules
Star fucker
Star fucker
Star fucker
Who, where?

[Kanye West:]
Time to take it too far now
Uh, Michael Douglas out the car now
Uh, got the kids-and-the-wife life
Uh, but can't wake up from the nightlife
Uh, I'm so scared of my demons
Uh, I go to sleep with a nightlight
Uh, my mind move like a Tron bike
Uh, pop a wheelie on the Zeitgeist
Uh, I'm finna start a new movement
Uh, being led by the drums
Uh, I'm a rap-lic priest
Uh, gettin' head by the nuns
Uh, they don't play what I'm playin'
Uh, they don't see what I'm sayin'
Uh, they be ballin' in the D-League
Uh, I be speakin' Swaghili
`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics7.addEventListener('click', () => {
        const lyrics = `"Blood On The Leaves"
(feat. Tony Williams)

[Nina Simone:]
Strange fruit hangin' from the poplar trees
Blood on the leaves

I just need to clear my mind now
It's been racin' since the summertime
Now I'm holdin' down the summer now
And all I want is what I can't buy now
'Cause I ain't got the money on me right now
And I told you to wait
Yeah, I told you to wait
So I'ma need a little more time now
'Cause I ain't got the money on me right now
And I thought you could wait
Yeah, I thought you could wait
These bitches surroundin' me
All want something out me
Then they talk about me
Would be lost without me
We could've been somebody
Thought you'd be different 'bout it
Now I know you not it
So let's get on with it

We could've been somebody
'stead you had to tell somebody
Let's take it back to the first party
When you tried your first molly
And came out of your body
And came out of your body
Running naked down the lobby
And you was screamin' that you love me
Before the limelight tore ya
Before the limelight stole ya
Remember we were so young
When I would hold you
Before the blood on the leaves
I know there ain't wrong with me
Something strange is happenin'

You could've been somebody
We could've, ugh, we could've been somebody
Or was it on the first party
When we tried our first molly
And came out of our body
And came out of our body
Before they call lawyers
Before you tried to destroy us
How you gon' lie to the lawyer?
It's like I don't even know ya
I gotta bring it back to the 'nolia

Fuck them other niggas 'cause I'm down with my niggas
Fuck them other niggas 'cause I'm down with my niggas
Fuck them other niggas 'cause I'm down with my niggas
I ride with my niggas, I'd die for my...

To all my second-string bitches, tryin' get a baby
Tryin' get a baby, now you talkin' crazy
I don't give a damn if you used to talk to Jay-Z
He ain't with you, he with Beyoncé, you need to stop actin' lazy
She Instagram herself like #BadBitchAlert
He Instagram his watch like #MadRichAlert
He only wanna see that ass in reverse
Two-thousand-dollar bag with no cash in your purse
Now you sittin' courtside, wifey on the other side
Gotta keep 'em separated, I call that apartheid
Then she said she pregnant-ated, that's the night your heart died
Then you gotta go and tell your girl and report that
Main reason 'cause your pastor said you can't abort that
Now your driver say that new Benz, you can't afford that
All that cocaine on the table, you can't snort that
That go into that, all that money that the court got
All in on that alimony, uh
Yeah-yeah, she got you, homie, yeah
'Til death, but do your part, uh
Unholy matrimony

That summer night holdin' long and long, 'din long
Now waiting for the summer rose and (Breathe)
And breathe and breathe
And breathe and breathe
And breathe and breathe
And live and learn
And live and learn
And livin' and livin' like I'm lonely
Lonely, lonely
And livin' all I have
And livin' all
And live
And live`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics8.addEventListener('click', () => {
        const lyrics = `"Guilt Trip"
(feat. Kid Cudi)

[Kanye West:]
I need to call it off
I need to, I need to make it known
'Nother one, something gone
Capricorn
Dancing out on the lawn
Fancy like the things she likes
She lives her life
I'm living mine

[Popcaan:]
All dem a gwaan dem a dem a dem a gwaan
Dem a gwaan gwaan gwaan, sof-sof-softer sof-softer
All dem a gwaan dem a dem a dem a gwaan
Dem a gwaan gwaan gwaan, softer than clay

[Kanye West:]
Maybe it's 'cause she into Leos and I was into trios
Plus all the trips to Rio couldn't have helped
It's gettin' cold, better bring your ski clothes
Peekin' through the keyhole, the door locked by myself
And I'm feelin' it right now
'Cause it's the time when my heart got shot down
Blocka, blocka, blocka-blocka, blocka
Pour a little champagne, cranberry vodka
Feelin' lied to like parents never said you adopted
Your feelings like Zulu, then nothing is a Shaka
I hit her with Jamaican dick, I'm the new Shabba
She lookin' for her daddy, call me Big Poppa
On to the next saga
Focus on the future and let the crew knock her
Star Wars fur, yeah, I'm rockin' Chewbacca
The one Chief Rocka, number-one Chief Rocka

[Popcaan:]
All dem a gwaan dem a dem a dem a gwaan
Dem a gwaan gwaan gwaan, sof-sof-softer sof-softer
All dem a gwaan dem a dem a dem a gwaan
Dem a gwaan gwaan gwaan, softer than clay

[Popcaan:]
None ah dem have the guts to rise it and spray
None ah dem have the guts to bust the SK

[Kid Cudi:]
Ohh, ohh, ohh
If you love me so much then why'd you let me go?
If you love me so much then why'd you let me go?
If you love me so much then why'd you let me go?
Let me go, let me go, let me go, let me go, hmm
If you love me so much then why'd you let me go?
Let me go, let me go, hmm

[Popcaan:]
All dem a gwaan dem a dem a dem a gwaan
Dem a gwaan gwaan gwaan, sof-sof-softer sof-softer
All dem a gwaan dem a dem a dem a gwaan
Dem a gwaan gwaan gwaan, softer than clay

[Popcaan:]
None ah dem have the guts to rise it and spray
None ah dem have the guts to bust the SK
`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics9.addEventListener('click', () => {
        const lyrics = `"Send It Up"
(feat. King L)

[Beenie Man:]
Relivin' the past?
Your loss!

[King Louie:]
Rockstar, bitch, call me Elvis
M.O.B., she call me selfish
Success got 'em jealous
Shorty's killin', while I'm drillin'
Tattoos, how they break the news
It was real if you made the news
Last night, my bitches came in twos
And they both sucked like they came to lose
Dropped out the first day of school
'Cause niggas got cocaine to move
I be goin' hard, I got a name to prove
Killin' 'em, honey how I make the pain improve

[King Louie:]
We can send this bitch up, it can go down
We can send this bitch up, it can go down
We can send this bitch up, it can go down
We can send this bitch up, it can go down
We can send this bitch up, it can go down
We can send this bitch up, it can go down
We can send this bitch up, it can go down
We can send this bitch up, it can go down

[Kanye West:]
This the cray-ist shit in the club
Since "In Da Club"
It's so packed I might ride around
On my bodyguard's back like Prince in the club
She say "Can you get my friends in the club?"
I say "Can you get my Benz in the club?"
If not, treat your friends like my Benz
Park they ass outside 'til the evenin' end
When I go raw, I like to leave it in
When I wake up, I like to go again
When I go to work, she gotta call it in
She can't go to work, same clothes again
And her heart colder than the souls of men
Louboutin on the toes again
Tight dress dancin' close to him
Yeezus just rose again

[King Louie:]
We can send this bitch up, it can go down
We can send this bitch up, it can go down
We can send this bitch up, it can go down
We can send this bitch up, it can go down

[Beenie Man:]
Memories don't leave like people do
They always 'member you
Whether things are good or bad
It's just the memories that you have
Memories don't leave like people do
They always 'member you
Whether things are good or bad
It's just the memories that you have
`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics10.addEventListener('click', () => {
        const lyrics = `"Bound 2"
(feat. Charlie Wilson)

[Ponderosa Twins Plus One and Brenda Lee:]
B-B-B-B-Bound to fall in love
Bound to fall in love
Uh-huh, honey

[Kanye West:]
All them other niggas lame, and you know it now
When a real nigga hold you down, you s'posed to drown

[Ponderosa Twins Plus One, Brenda Lee and Kanye West:]
Bound to fall in love (Bound)
B-B-B-B-Bound to fall in love (Bound)
Uh-huh, honey

[Kanye West:]
What you doin' in the club on a Thursday?
She say she only here for her girl birthday
They ordered champagne but still look thirsty
Rock Forever 21 but just turned thirty
I know I got a bad reputation
Walking-round-always-mad reputation
Leave-a-pretty-girl-sad reputation
Start a Fight Club, Brad reputation
I turnt the nightclub out of the basement
I'll turn the plane around, your ass keep complainin'
How you gon' be mad on vacation?
Dutty wining 'round all these Jamaicans
Uh, this that prom shit
This that what-we-do-don't-tell-your-mom shit
This that red-cup-all-on-the-lawn shit
Got a fresh cut, straight out the salon, bitch

[Charlie Wilson and Brenda Lee:]
I know you're tired of lovin', of lovin'
With nobody to love, nobody, nobody (Uh-huh, honey)

[Kanye West, Ponderosa Twins Plus One and Brenda Lee:]
Close your eyes and let the word paint a thousand pictures
One good girl is worth a thousand bitches
Bound (Bound to fall in love)
Bound (Bound to fall in love)
Uh-huh, honey

[Kanye West:]
I wanna fuck you hard on the sink
After that, give you somethin' to drink
Step back, can't get spunk on the mink
I mean damn, what would Jeromey Romey Romey Rome think?
Hey, you remember where we first met?
Okay, I don't remember where we first met
But hey, admittin' is the first step
And hey, you know ain't nobody perfect
And I know, with the hoes I got the worst rep
But hey, their backstroke I'm tryna perfect
And hey, ayo, we made it: Thanksgivin'
So hey, maybe we can make it to Christmas
She asked me what I wished for on my wishlist
Have you ever asked your bitch for other bitches?
Maybe we could still make it to the church steps
But first, you gon' remember how to forget
After all these long-ass verses
I'm tired, you tired, Jesus wept

[Charlie Wilson and Brenda Lee:]
I know you're tired of lovin', of lovin'
With nobody to love, nobody, nobody
So just grab somebody, no leavin' this party
With nobody to love, nobody, nobody
Uh-huh, honey

[Kanye West, Ponderosa Twins Plus One, and Brenda Lee:]
Jerome's in the house, watch your mouth
Jerome's in the house, watch your mouth
Bound to fall in love
Bound
Bound to fall in love
Bound
Uh-huh, honey`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });
</script>

<!-- Call up the footer-->
<?php
include 'includes/footer.php';
?>