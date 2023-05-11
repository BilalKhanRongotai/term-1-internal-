<!-- Call up the header and navbar and set page title-->
<?php
$page_title = "Jesus Is King";
include 'includes/header.php';
include 'includes/nav.php';
?>

<!-- set the splitscreen -->
<div class="container" style="max-width:100%;">
    <div class="row split">
        <div class="col left" style="background-color:#0d15a6;"> <!-- left col -->
            <div class="leftT" style="background-color:#bf9e55;"></div> <!-- top section of left col -->
            <div id="leftM"> <!-- middle section of left col -->
                <!-- i frame for songs -->
                <iframe class="video" id="video-player" width="240px" height="240px" frameborder="0"></iframe> 

                 <!-- div for song lyrics -->
                <div id="LyricsContainer" style="display: none; max-height:205px; background-color:#797ed9; padding-left: 20px; padding-top: 10px;">  
                </div>

            </div>
            <div class=leftB style="background-color:#bf9e55;"> <!-- bottom section of left col -->
            </div>

        </div>
        <!-- right col -->
        <div class="col right" style="background-color:#0511f2;"> 
            <br>
            <div class="albumcover"><img src="image/JIKcover.jpeg" class="img-fluid"></div> <!-- album cover -->
            <br>
            <h3 class="albumtitle">Jesus Is King</h3> <!-- title of the album -->
            <!-- Description/background of album -->
            <p class="albumdesp">Jesus Is King, released in 2019, marks a significant departure from Kanye West's previous works and represents a bold new chapter in his musical and spiritual journey. The album is a powerful and deeply personal exploration of West's newfound faith and his relationship with Jesus Christ.</p>
            <p class="albumdesp">At its core, Jesus Is King is a gospel album that draws on a wide range of Christian themes and motifs, from salvation and redemption to sin and temptation. Tracks like "Follow God" and "Water" are powerful expressions of West's newfound faith, while "Hands On" and "God Is" reflect his struggles with public perception and criticism.</p>
            <p class="albumdesp">Musically, Jesus Is King is a departure from West's previous works, featuring minimalist production and sparse arrangements that emphasize the album's gospel influences. The album also features a wide range of collaborators, including the Sunday Service Choir, Ty Dolla $ign, and Clipse, who add their own unique voices and perspectives to the mix.</p>
            <p class="albumdesp">Despite its religious themes and focus, Jesus Is King is a deeply personal and introspective work that reflects West's continued growth and evolution as an artist and as a person. The album is a testament to the power of faith and the transformative potential of personal growth and self-discovery, and serves as an inspiring and uplifting work for listeners of all backgrounds and beliefs.</p>

            <!-- tracklist -->
            <ul class="list-group">
                <li class="list-group-item albumtrack" style="background-color: #0511f2;">Every Hour <!-- Song title -->
                    <span class="artist">• Kanye West • Sunday Service Choir</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="T58tRXzjC7c"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics1" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #0511f2;">Selah <!-- Song title -->
                    <span class="artist">• Kanye West</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="6CNPg2IQoC0"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics2" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #0511f2;">Follow God <!-- Song title -->
                    <span class="artist">• Kanye West</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="2yQ2sJkIaqE"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics3" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #0511f2;">Closed On Sunday <!-- Song title -->
                    <span class="artist">• Kanye West</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="s1NUxqSbFLc"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics4" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #0511f2;">On God <!-- Song title -->
                    <span class="artist">• Kanye West</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="AOBQkHy8_p8"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics5" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #0511f2;">Everything We Need <!-- Song title -->
                    <span class="artist">• Kanye West • Ty Dolla $ign • Ant Clemons</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="Mrfu0FBB110"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics6" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #0511f2;">Water <!-- Song title -->
                    <span class="artist">• Kanye West • Ant Clemons</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="-YfG1Xbo4OA"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics7" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #0511f2;">God Is <!-- Song title -->
                    <span class="artist">• Kanye West</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="G8u3P7Xqlvo"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics8" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #0511f2;">Hands On <!-- Song title -->
                    <span class="artist">• Kanye West</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="dojATOk1GHA"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics9" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #0511f2;">Use This Gospel <!-- Song title -->
                    <span class="artist">• Kanye West • Clipse • Kenny G</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="8yQVcGkbpAc"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics10" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                </li>
                <li class="list-group-item albumtrack" style="background-color: #0511f2;">Jesus Is Lord <!-- Song title -->
                    <span class="artist">• Kanye West</span> <!-- Songs artists -->
                    <span role="button" class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="rns_n82HiMo"><span class="fas fa-play"></span></span> <!-- Play song symbol/button -->
                    <span role="button" id="lyrics11" class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span> <!-- Lyrics symbol/button -->
                    <span class="badge bg-secondary text-dark icon" title="Interlude">I</span> <!-- Interlude symbol -->
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

    // Change the content of the div when buttons are clicked
    lyrics1.addEventListener('click', () => {
        const lyrics = `"Every Hour"
(feat. Sunday Service Choir)

Sing every hour (Every hour, 'til the power)
Every minute (Every minute, of the Lord)
Every second (Every second, comes)
Sing each and every millisecond (Down)
We need you (We need you, sing 'til the power)
We need you (We need you, of the Lord)
We need you (Comes)
Oh, we need you (Down)

Sing 'til the power of the Lord comes down
Sing 'til the power of the Lord comes down
Sing 'til the power of the Lord comes down (Let everything that have breath praise God)
Sing 'til the power of the Lord comes down ('Cause when we sing the glory of the Lord comes down, down)
Sing 'til the power of the Lord comes down (Praising the Lord, praise God in the sanctuary)
Sing 'til the power of the Lord comes down (For His mighty works and excellent grace and His mighty power, yeah)
Sing 'til the power of the Lord comes down (Sing 'til the power of the Lord falls down)
Sing 'til the power of the Lord comes down (We are to sing 'til the power of the Lord comes down)
Sing 'til the power of the Lord comes down (Let us sing, let us sing, oh, sing)
Sing 'til the power of the Lord comes down (Let us sing, let us sing, oh, sing)

Sing every hour (Every hour, 'til the power)
Every minute (Every minute, of the Lord)
Every second (Every second, comes)
Sing each and every millisecond (Down)
We need you (We need you, sing 'til the power)
We need you (We need you, of the Lord)
We need you (Comes)
Oh, we need you (Down)

Sing 'til the power of the Lord comes down (Sing 'til the power of the Lord falls down)
Sing 'til the power of the Lord comes down (We are to sing 'til the power of the Lord comes down)

Sing every hour (Every hour, 'til the power)
Every minute (Every minute, of the Lord)
Every second (Every second, comes)
Sing each and every millisecond (Down)
We need you (We need you, sing 'til the power)
We need you (We need you, of the Lord)
We need you (Comes)
Oh, we need you (Down)`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics2.addEventListener('click', () => {
        const lyrics = `"Selah"

[Kanye West:]
God is King, we the soldiers
Ultrabeam out the solar
When I get to Heaven's gates
I ain't gotta peek over
Keepin' perfect composure
When I scream at the chauffeur
I ain't mean, I'm just focused
I ain't mean, I'm just focused
Pour the lean out slower
Got us clean out of soda
Before the flood, people judge
They did the same thing to Noah
Everybody wanted Yandhi
Then Jesus Christ did the laundry
They say the week start on Monday
But the strong start on Sunday
Won't be in bondage to any man
John 8:33
We the descendants of Abraham
Ye should be made free
John 8:36
To whom the son set free is free indeed
He saved a wretch like me

[Sunday Service Choir:]
Hallelujah, hallelujah, hallelujah, hallelujah
Hallelujah, hallelujah, hallelujah, hallelujah
Hallelujah, hallelujah, hallelujah, hallelujah
Hallelujah, hallelujah, hallelujah, hallelujah
Hallelujah, hallelujah, hallelujah, hallelujah
Hallelujah, hallelujah, hallelujah, hallelujah
Hallelujah, hallelujah, hallelujah, hallelujah
Hallelujah, hallelujah, hallelujah, hallelujah
Hallelujah, hallelujah, hallelujah, hallelujah
Hallelujah, hallelujah, hallelujah, hallelujah
Hallelujah, He is wonderful

[Kanye West:]
If you woke, then wake up
With Judas, kiss and make up
Even with the bitter cup
Forgave my brothers and drank up
Did everything but gave up
Stab my back, I can't front
Still we win, we prayed up
Even when we die, we raise up (Hallelujah)
Ain't no wantin', no, we need it
The powers that be done been greedy
We need ours by this evening
No white flag or no treaty
We got the product, we got the tools
We got the minds, we got the youth
We goin' wild, we on the loose
People is lying, we are the truth
Everything old shall now become new
The leaves'll be green, bearing the fruit
Love God and our neighbor, as written in Luke
The army of God and we are the truth

[Kanye West:]
Wah, woo, wah, woo, woo, woo, woo, woo
Wah, woo, wah, woo, woo, woo, woo, woo
Woo, woo, woo, woo, woo, woo, woo, woo
Wah, woo, wah, woo, woo, woo, woo`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics3.addEventListener('click', () => {
        const lyrics = `"Follow God"

Father, I stretch
Stretch my hands to You

Lifelike, this is what your life like, try to live your life right
People really know you, push your buttons like typewrite
This is like a movie, but it's really very lifelike
Every single night, right, every single fight, right?
I was looking at the 'Gram and I don't even like likes
I was screamin' at my dad, he told me, "It ain't Christ-like"
I was screamin' at the referee just like Mike
Lookin' for a bright light, Sigel, what your life like
Riding on a white bike, feeling like Excitebike (Stretch my hands to You)
Pressin' on the gas, supernova for a night light
Screamin' at my dad and he told me, "It ain't Christ-like"
But nobody never tell you when you're being like Christ
Only ever seein' me only when they needin' me
Like if Tyler Perry made a movie for BET
Searchin' for a deity, now you wanna see it free
Now you wanna see if we, let's just see if three apiece
Tell me what your life like, turn it down, a bright light
Drivin' with my dad, and he told me, "It ain't Christ-like" (Stretch my hands to You)
I'm just tryna find, I've been lookin' for a new way
I'm just really tryin' not to really do the fool way
I don't have a cool way, bein' on my best, though
Block 'em on the text though, nothin' else next though
Not another word, letter, picture, or a decimal (Father, I stretch)
Wrestlin' with God, I don't really want to wrestle
Man, it's really lifelike, everything in my life (Stretch my hands to You)
Arguing with my dad, and he said, "It ain't Christ-like"

Man
You know, it's like
Somebody only close who can get you, like, off your
I be on my
I woke up this morning, I said my prayers
I'm all doing good, I tried to talk to my dad (Stretch my hands to You)
Give him some advice, he starts spazzin' on me
I start spazzin' back, He said "That ain't Christ-like"
I said, "Ah"`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics4.addEventListener('click', () => {
        const lyrics = `"Closed On Sunday"

Closed on Sunday, you're my Chick-fil-A
Closed on Sunday, you my Chick-fil-A
Hold the selfies, put the 'Gram away
Get your family, y'all hold hands and pray
When you got daughters, always keep 'em safe
Watch out for vipers, don't let them indoctrinate
Closed on Sunday, you my Chick-fil-A
You're my number one, with the lemonade
Raise our sons, train them in the faith
Through temptations, make sure they're wide awake
Follow Jesus, listen and obey
No more livin' for the culture, we nobody's slave

Stand up for my home
Even if I take this walk alone
I bow down to the King upon the throne
My life is His, I'm no longer my own
I pray to God that He'll strengthen my hand
They will think twice steppin' onto my land
I draw the line, it's written in the sand
Try me and you will see that I ain't playin'
Now, back up off my family, move your hands
I got my weapons in the spirit's land
I, Jezebel don't even stand a chance
Jezebel don't even stand a chance

[A$AP Bari:]
Chick-fil-A
`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics5.addEventListener('click', () => {
        const lyrics = `"On God"

Yo, Pi'erre, yo, Pi'erre

"How you get so much favor on your side?"
"Accept Him as your Lord and Saviour," I replied
Thou shalt love thy neighbor, not divide
I'ma ride, that's on God
His light shine the brightest in the dark
Single mothers know they got my heart
And all my brothers locked up on the yard
You can still be anything you wanna be
Went from one in four to one in three
Thirteenth amendment, gotta end it, that's on me
He the new commander and the chief
That's on Keef, that's on God
Before the ranch, I had horses in the garage
When the Forbes cover was just a mirage
They had me chasin' statues, that's on pride
"Oh my God," Bust said that's on Tribe
When I thought the Book of Job was a job
The Devil had my soul, I can't lie
Life gon' have some lows and some highs
Before the Grammy's ever gave a nod
I wore my heart on my sleeve, I couldn't hide
In '03, they told me not to drive
I bleached my hair for every time I could've died
But I survived, that's on God
I've been tellin' y'all since '05
The greatest artist restin' or alive
That's on L.A. Reid, that's on Clive
That's no Jive, that's on God
Off the 350s He supplied
The IRS want they fifty plus our tithe
Man, that's over half of the pie
I felt dry, that's on God
That's why I charge the prices that I charge
I can't be out here dancin' with the stars
No, I cannot let my family starve
I go hard, that's on God

(Yo Pi'erre, you wanna come out here?)
Okay, okay, okay, okay`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics6.addEventListener('click', () => {
        const lyrics = `"Everything We Need"
(feat. Ty Dolla $ign & Ant Clemons)

We began after the storm inside
Lay the land (Ah), it's just the morning light (Woo, woo)
Woo, woo, oh yeah

Woo-ooh, ooh-ooh
Switch your, switch your attitude
Go 'head, level up yourself
This that different latitude
Ooh-ooh, ooh-ooh
Life too short, go spoil yourself
Feel that feel, enjoy yourself 'cause

We have everything we need (Ooh-ooh, ooh-ooh, oh)
We have everything we need (Ooh-ooh, ooh-ooh, oh, oh)
We have everything we need (Ooh-ooh, ooh-ooh, oh)
We have everything we need (Ooh-ooh, ooh-ooh, oh, whoa)
We have everything we need

We began after the storm inside
Lay the land (Ah), it's just the morning light (Oh, yeah)

Switch my, switch my attitude
I'm so, I'm so radical
All these people mad at dude
This for who it matter to
What if Eve made apple juice?
You gon' do what Adam do?
Or say, "Baby, let's put this back on the tree" 'cause

We have everything we need (Ooh-ooh, ooh-ooh, oh)
We have everything we need (Ooh-ooh, ooh-ooh, oh, oh)
We have everything we need (Ooh-ooh, ooh-ooh, oh)
We have everything we need (Ooh-ooh, ooh-ooh, oh, whoa)
We have everything we need

We began after the storm inside
Lay the land (Ah), it's just the morning light`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics7.addEventListener('click', () => {
        const lyrics = `"Water"
(feat. Ant Clemons)

[Kanye West:]
Well, right
So, so well
Well, right
So, so
High as the sun come out
Plannin'
Bootin'
Plannin'
Movin'
Plannin'
Tubin', there
Well, well

[Ant Clemons:]
Clean us like the rain in spring
Take the chlorine out our conversation
Let Your light reflect on me
I promise I'm not hiding anything
It's water
We are water
Pure as water
Like a newborn daughter

[Ant Clemons:]
The storm may come
But we'll get through it because of Your love
Either way, we crash like water
Your love's water
Pure as water
We are water

[Kanye West:]
Jesus, flow through us
Jesus, heal the bruises
Jesus, clean the music
Jesus, please use us
Jesus, please help
Jesus, please heal
Jesus, please forgive
Jesus, please reveal
Jesus, give us strength
Jesus, make us well
Jesus, help us live
Jesus, give us wealth
Jesus is our safe
Jesus is our rock
Jesus, give us grace
Jesus, keep us safe

[Ant Clemons:]
Clean us like the rain in spring
Take the chlorine out our conversation
Let Your light reflect on me
I promise I'm not hiding anything
It's water
We are water
Pure as water
Like a newborn daughter

[Kanye West:]
We like water, mmh
We like water
Well, right
So, so well
Well, right
So, so
High as the sun come out
Plannin'
Bootin'
Plannin'
Movin'
Plannin'
Tubin', there
Well, well`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics8.addEventListener('click', () => {
        const lyrics = `"God Is"

God is
My light in darkness, oh
God, God is
He, He is my all and all (And I'll never turn back)
God is

Everything that hath breath praise the Lord
Worship Christ with the best of your portions
I know I won't forget all He's done
He's the strength in this race that I run
Every time I look up, I see God's faithfulness
And it shows just how much He is miraculous
I can't keep it to myself, I can't sit here and be still
Everybody, I will tell 'til the whole world is healed
King of Kings, Lord of Lords, all the things He has in store
From the rich to the poor, all are welcome through the door
You won't ever be the same when you call on Jesus' name
Listen to the words I'm sayin', Jesus saved me, now I'm sane
And I know, I know God is the force that picked me up
I know Christ is the fountain that filled my cup
I know God is alive, yeah
He has opened up my vision
Giving me a revelation
This ain't 'bout a dead religion
Jesus brought a revolution
All the captives are forgiven
Time to break down all the prisons
Every man, every woman
There is freedom from addiction
Jesus, You have my soul
Sunday Service on a roll
All my idols, let 'em go
All the demons, let 'em know
This a mission, not a show
This is my eternal soul
This my kids, this the crib
This my wife, this my life
This my God-given right
Thank You, Jesus, won the fight

That's what God is
That's what God is
That's what God is`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics9.addEventListener('click', () => {
        const lyrics = `"Hands On"

[Fred Hammond:]
Hand 'em
Hands up high, hands on, hands on
Hands on, hands up
In your face, the reason
Hands on, yeah, hands on

[Kanye West:]
Cut out all the lights, He the light
Got pulled over, see the brights
What you doin' on the street at night?
Wonder if they're gonna read your rights
Thirteenth Amendment, three strikes
Made a left when I should've made a right
Told God last time on life
Told the devil that I'm going on a strike
Told the devil when I see him, on sight
I've been working for you my whole life
Told the devil that I'm going on a strike
I've been working for you my whole life
Nothing worse than a hypocrite
Change, he ain't really different
He ain't even try to get permission
Ask for advice and they dissed him
Said I'm finna do a gospel album
What have you been hearin' from the Christians?
They'll be the first one to judge me
Make it feel like nobody love me
They'll be the first one to judge me
Feelin' like nobody love me
Told people God was my mission
What have you been hearin' from the Christians?
They'll be the first one to judge me
Make it feel like nobody love me
Make you feel alone in the dark and you'll never see the light
Man, you're never seein' home and you never see the domes
I can feel it when I write, point of livin' in the right
If they only see the wrongs, never listen to the songs
Just to listen is a fight, but you booked me for the fight
It's so hard to get along if they only see the slight
From the love of religion
What have you been hearin' from the Christians?
They'll be the first one to judge me
Make it seem like nobody love me
I'm not tryna lead you to Visas
But if I try to lead you to Jesus
We get called halfway believers
Only halfway read Ephesians
Only if they knew what I knew, uh
I was never new 'til I knew of
True and living God, Yeshua
The true and living God
(Somebody pray for me)

[Fred Hammond:]
Hand 'em
Hands up high, hands on, hands on
Hands on, hands up
In your face, the reason
Hands on, yeah, hands on

[Fred Hammond (Kanye West):]
I deserve all the criticism you got
If that's all the love you have, that's all you got
To sing of change, you think I'm joking
To praise His name, you ask what I'm smoking
Yes, I understand your reluctancy, yeah
But I have a request, you see
Don't throw me up, lay your hands on me
Please, pray for me
(Hold myself on death)
Hold it down, all fallen down
Somebody pray for me

[Fred Hammond:]
Hand 'em
Hands up high, hands on, hands on
Hands on, hands up
In your face, the reason
Hands on, yeah, hands on`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics10.addEventListener('click', () => {
        const lyrics = `"Use This Gospel"
(feat. Clipse & Kenny G)

Use this gospel for protection
It's a hard road to Heaven
We call on Your blessings
In the Father, we put our faith
King of the kingdom
Our demons are tremblin'
Holy angels defending
In the Father, we put our faith

[Pusha T:]
How could He not be the greatest?
In my bed, under covers, when under-covers had raided
My presence is happy belated
Fashionably late, I'm just glad that you made it
The best is yet to come, I'm just glad that you waited
They all say they real 'til it's time to appraise it
I seen them come and go, you only the latest
But who am I to judge? I'm crooked as Vegas

[Kanye West:]
Use this gospel for protection
It's a hard road to Heaven
We call on Your blessings
In the Father, we put our faith
King of the kingdom
Our demons are tremblin'
Holy angels defending
In the Father, we put our faith

[No Malice:]
A lot of damaged souls, I done damaged those
And in my arrogance took a camera pose
Caught with a trunk of Barry Manilows
They sing a different tune when the slammer close
From the concrete grew a rose
They give you Wraith talk, I give you faith talk
Blindfolded on this road, watch me faith walk
Just hold on to your brother when his faith lost

[Kanye West:]
Oh, oh, oh (Work, work, work, work)
Oh, oh, oh (Work, work, work, work)
Oh, oh, oh (Work, work, work, work)
Oh-oh, oh, oh (Work, work, work, work)
Oh, oh, oh (Work, work, work, work)
Oh, oh, oh (Work, work, work, work)
Oh, oh, oh (Work, work, work, work)
Oh-oh, oh, oh (Work, work, work, work)`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });

    lyrics11.addEventListener('click', () => {
        const lyrics = `"Jesus Is Lord"

Every knee shall bow
Every tongue confess
Jesus is Lord
Jesus is Lord

Every knee shall bow
Every tongue confess
Jesus is Lord
Jesus is Lord`; // Set the lyrics
        LyricsContainer.innerHTML = `<pre>${lyrics}</pre>`; // Set the text to the lyrics lyrics
        LyricsContainer.style.display = 'block'; // Make the div visable
    });
</script>

<!-- Call up the footer-->
<?php
include 'includes/footer.php';
?>