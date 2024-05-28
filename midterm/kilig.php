<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KELEEEEEG AKOOOOOOOOOO!!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: #f4f4f4;
        }
        button {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }
        #message {
            display: none;
            margin-top: 20px;
            font-size: 18px;
            color: #333;
            transition: opacity 0.3s ease-in-out;
        }
        #message.show {
            display: block;
            opacity: 1;
        }
        #message.hide {
            opacity: 0;
        }
    </style>
<body>
    <h1 class="text-center">ME RIGHT NOW: 👉👈</h1>
    <br>
    <p class="text-center">👇👇👇👇👇</p>
    <img id="proposal-image" src="ha.gif" class="img-fluid img-thumbnail blurred" alt="..." width="400" height="400">
    <hr class="text-dark">
    <div class="text-center bg-dark" style="border: 5px solid white; padding: 10px;">
    <h3 class="text-light">PLAY THIS</h3>
    <audio id="background-music" src="haha.mp3" loop></audio>

    <button id="play-button">Play Music</button>
    <button id="pause-button" style="display:none;">Pause Music</button>
</div>
    <hr class="dark">
    <div class="text-center">
    <button id="toggle-button">Click Me</button>
    <div class="border border-dark"id="message">I LOVE YOUUU SOOOOO MUCH!!!</div>

    </div>
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
         document.getElementById('toggle-button').addEventListener('click', function() {
            var message = document.getElementById('message');
            if (message.classList.contains('show')) {
                message.classList.remove('show');
                message.classList.add('hide');
                setTimeout(function() {
                    message.style.display = 'none';
                }, 300); // match this time to the transition duration
            } else {
                message.classList.remove('hide');
                message.style.display = 'block';
                setTimeout(function() {
                    message.classList.add('show');
                }, 10); // small delay to trigger transition
            }
        });
    </script>
</body>
</html>
