<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Proposal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
      
       button {
      margin: 10px;
      padding: 10px 20px;
      font-size: 16px;
      cursor: pointer;
      position: relative; /* Ensure buttons are positioned relative to their container */
    }

    .blurred {
          filter: blur(50px);
          transition: filter 4s ease;
        }
</style>
</head>
<body class="bg-dark">
  <h1 class="fw-bolder text-light fs-1 text-center">MY PRE-PROPOSAL TO MY GIRLFRIEND</h1>
  <hr class="text-light">
  <div class="text-center bg-dark">
    <h3 class="text-light">PLEASE CLICK THIS</h3>
    <audio controls>
        <source src="ahe.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>
</div>
  <hr class="text-light">
  <div class="text-center">
  <h3 class="text-light">PLEASE CLICK THE BLURRED IMAGE</h3>
  <p>👇👇👇👇👇</p>
    <!-- Added an ID to the image for easy selection -->
    <img id="proposal-image" src="rings.jpg" class="img-fluid img-thumbnail blurred" alt="..." width="400" height="400">
<hr class="text-light">
<p class="fst-italic text-light fw-bolder">My Love,

From the moment I met you, my life has been filled with an indescribable joy. You are my best friend, my confidant, and my one true love. Every day with you is a new adventure, and I can't imagine my future without you by my side.

We’ve shared so many beautiful memories together, from the quiet moments to the unforgettable experiences, and through it all, my love for you has only grown stronger. You make me a better person, and your love gives me the strength and inspiration to face each day with hope and happiness.

As I look into your eyes, I see my forever. I see a lifetime of laughter, love, and endless possibilities. I want to continue building our dreams together, supporting each other through all of life’s ups and downs.

So, with all my heart, I ask you:

Will you marry me soon at the right time?</p>
<button class="bg-success text-light" id="yesButton">YES</button>
<button class="bg-danger text-light" id="noButton">NO</button>

</div>
</div>
<script>
document.getElementById("proposal-image").addEventListener("click", function() {
      // Toggle the "blurred" class on click
      this.classList.toggle("blurred");
    });




  let noButtonClickCount = 0;

  document.getElementById('noButton').addEventListener('click', function() {
    noButtonClickCount++;
    if (noButtonClickCount % 5 === 0) {
      alert("Please click 'Yes'.");
    } else {
      const noButton = document.getElementById('noButton');
      const teleportDistance = 90; // Adjust teleport distance as needed
      const randomX = Math.random() * (teleportDistance * 2) - teleportDistance;
      const randomY = Math.random() * (teleportDistance * 2) - teleportDistance;
      noButton.style.transform = `translate(${randomX}px, ${randomY}px)`;
    }
  });

  document.getElementById('yesButton').addEventListener('click', function() {
    alert("Thank you for saying yes!");
    window.location.href = "kilig.php"; // Replace "another-page.html" with the URL of the page you want to redirect to
  });
</script>
</body>
</html>
