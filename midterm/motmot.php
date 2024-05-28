<!DOCTYPE html>
<html>
<head>
    <title>Happy MotMot</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    audio {
            width: 300px;
            height: 50px;
            background-color: #f3f3f3;
            border-radius: 10px;
            outline: none;
        }


    body, html {
      margin: 0;
      padding: 0;
      height: 100%;
      background: url('heart.jpg') no-repeat fixed center;
    background-size: cover;
    }
    .border-with-text {
            border: 2px solid black;
            padding: 20px;
            text-align: center;
    }
    .square {
    width: 200px; /* Adjust the width as needed */
    height: 200px; /* Make sure it matches the width to create a square */
    display: flex;
    justify-content: center;
    align-items: center;
}

    
    </style>
<body>
<div class="container mt-5">
        <h1 class="display-2 text-center text-light fw-bolder">My Pretty Darling 🥰</h1>

        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="ella.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="ella2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="ella1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="ella3.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="ella4.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="ella5.jpg" class="d-block w-100" alt="...">
                </div>
               
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

    </div>
    <br><br>
    <div class="text-center bg-dark" style="border: 5px solid white; padding: 10px;">
    <h3 class="text-light">Kindly Play this song While Reading</h3>
    <audio id="background-music" src="loves.mp3" loop></audio>

    <button id="play-button">Play Music</button>
    <button id="pause-button" style="display:none;">Pause Music</button>

</div>
<br><br>


    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 centered-content">
                <div class="border-dark bg-light border-with-text">
                    <h2>HAPPY FIRST MONTHSARY!</h2>
                    <hr>
                    <p>My Dearest Darling (Ella Mae),

As I write down my message onto this page, I'm overcome with an overwhelming sense of gratitude for having you in my life. You, my love, are a rare gem, a beacon of kindness and strength that lights up my world in ways I never knew possible.

From the moment I met you, I was captivated by your unwavering strength. Your attitude, so fierce and determined, yet tempered with a gentle kindness that speaks volumes about the depth of your character. It's one of the many reasons I find myself drawn to you, day after day, falling more deeply in love with you with each passing moment.

Yes, you have your moods, my darling, but oh, how they only add to your allure. There's something enchanting about the way you navigate through life, embracing every emotion with a raw honesty that leaves me in awe. Whether you're brimming with joy or weathering a storm of emotions, your spirit remains unyielding, a testament to the strength that resides within you.

But amidst the highs and lows, it's your capacity for love that truly sets you apart. Your heart, so vast and overflowing with affection, never fails to envelop me in warmth and comfort. The love you give so freely, so unconditionally, is a gift I treasure more than words can express. It's in your tender gestures, your reassuring words, and the way you hold me close, that I find solace in this chaotic world.

And then there's your beauty, my love, a beauty that transcends the superficiality of makeup. With each glance, I'm reminded of the breathtaking wonder that is you. Your natural radiance, unadorned and pure, leaves me utterly mesmerized. But it's not just your outward appearance that captivates me; it's the beauty that emanates from within, illuminating every corner of my existence with its brilliance.

My darling, you have a way of turning even the simplest moments into something extraordinary. Whether it's a quiet evening spent curled up on the couch or an adventure in the great outdoors, your zest for life infuses every experience with magic. Your adventurous spirit inspires me to embrace each day with an open heart and a willingness to explore the wonders of the world by your side.

But it's not just the grand adventures that leave an imprint on my soul; it's the little things, too. The way you laugh with abandon, your eyes sparkling with joy. The way you tenderly care for those around you, offering a shoulder to lean on and a listening ear without hesitation. It's these small gestures of love and kindness that remind me of the incredible woman you are, and I feel truly blessed to call you mine.

And then there are the moments of vulnerability, the times when you let down your guard and allow me to see the depths of your heart. It's in those moments that I feel the strongest connection to you, as we share our hopes, our fears, and our dreams for the future. Your willingness to be open and honest with me is a gift I cherish, for it allows us to build a bond that is unbreakable, built on a foundation of trust and mutual respect.

As I look ahead to the countless adventures that await us, I do so with a heart full of love and gratitude. For you have brought so much light and joy into my life, and I am endlessly thankful for the gift of your love. Together, we'll navigate the highs and lows, cherishing each moment and growing stronger with every challenge we face. With you by my side, my darling, I know that anything is possible, and I can't wait to continue this beautiful journey together.

From the bottom of my heart, I love you So much and Happy 1st monthsary to us💖</p>
<br><br>
<a class="btn btn-danger" href="proposal.php" role="button">Click here Darling</a>
                </div>
            </div>
        </div>
    </div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    var audio = document.getElementById('background-music');
        var playButton = document.getElementById('play-button');
        var pauseButton = document.getElementById('pause-button');

        playButton.addEventListener('click', function() {
            audio.play();
            playButton.style.display = 'none';
            pauseButton.style.display = 'inline';
        });

        pauseButton.addEventListener('click', function() {
            audio.pause();
            playButton.style.display = 'inline';
            pauseButton.style.display = 'none';
        });




    // JavaScript to initialize the carousel
    var myCarousel = document.querySelector('#carouselExampleSlidesOnly')
    var carousel = new bootstrap.Carousel(myCarousel, {
      interval: 2000, // Set the interval for automatic cycling (in milliseconds), set to 0 for no cycling
      wrap: true // Whether the carousel should cycle continuously or have hard stops
    })
</script>
</body>
</html>
