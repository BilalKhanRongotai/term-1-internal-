<!-- Call up the header and navbar-->
<?php
$page_title= "";
include 'includes/header.php';
include 'includes/nav.php';
?>

<div class="container" style="max-width:100%;">
    <div class="row split">
        <div class="col left">
        <div class="left0"></div>
        <div id="left1 video-container">
        <iframe id="video-player" width="560" height="315" frameborder="0" allowfullscreen></iframe>
        </div>


        </div>

        <div class="col right">
            <br>
            <div class="albumcover"><img src="image/808sCover.jpeg" class="img-fluid"></div>
            <br>
            <h3 class="albumtitle">808s & Heartbreak</h3>
            <p class="albumdesp">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum soluta eius praesentium amet odio assumenda. Suscipit aut reiciendis reprehenderit ipsum mollitia doloremque, voluptatibus autem officiis accusantium id, dolorum commodi vitae!</p>
            <p class="albumdesp">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam autem eaque natus nihil doloribus repellat nam aut temporibus quod laudantium quas molestias explicabo dolores consectetur ducimus at, architecto quam? Recusandae.</p>
            <p class="albumdesp">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor officiis unde ipsam. Amet tempora dolores quae ex, maxime assumenda aliquid, nulla perferendis a accusamus vitae! Autem quisquam sed molestiae doloremque!</p>
            <p class="albumdesp">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, provident facilis unde officiis ducimus, repellat saepe quibusdam exercitationem beatae quidem sed rerum consectetur itaque eveniet ullam harum pariatur praesentium cupiditate.</p>
            <ul class="list-group">
                <li class="list-group-item albumtrack">An item
                <span class="artist">• Kanye West • Jay Z</span>
                <span class="badge bg-secondary text-dark icon" title="Explicit">E</span>
                <span class="badge bg-secondary text-dark icon" title="Deluxe"><span class="fas fa-star"></span></span>
                <span class="badge bg-secondary text-dark icon" title="Interlude">I</span>
                <span class="badge bg-secondary text-dark icon" title="Lyrics"><span class="far fa-file-alt"></span></span>
                <span role="button"class="video-button badge bg-secondary text-dark icon" title="Play" data-video-id="sk3rpYkiHe8"><span class="fas fa-play"></span></span>
                </li>
                <br>
            </ul>
        </div>
    </div>
</div>

<script>
    const videoButtons = document.querySelectorAll('.video-button');
    const videoPlayer = document.getElementById('video-player');

    videoButtons.forEach((button) => {
        button.addEventListener('click', () => {
            const videoId = button.getAttribute('data-video-id');
            const videoUrl = `https://www.youtube.com/embed/${videoId}?autoplay=1`;
            videoPlayer.setAttribute('src', videoUrl);
        });
    });
</script>

<!-- Call up the footer-->
<?php
include 'includes/footer.php';
?>