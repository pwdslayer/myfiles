<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Will You Be My Forever?</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <style>
    body, html {
      margin: 0;
      padding: 0;
      height: 100%;
      background: url('emoji.jpg') no-repeat fixed center;
    background-size: cover;
    }

    .container {
      height: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .border {
      border: 2px solid black;
      padding: 20px;
      text-align: center;
      transition: transform 0.5s ease;
    }

    button {
      margin: 10px;
      padding: 10px 20px;
      font-size: 16px;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="border bg-dark">
      <h1 class="text-warning">Will you be my forever?</h1>
      <button id="yesButton">Yes</button>
      <button id="noButton">No</button>
    </div>
  </div>
  <script>
    let noButtonClickCount = 0;

    document.getElementById('noButton').addEventListener('click', function() {
      noButtonClickCount++;
      if (noButtonClickCount % 5 === 0) {
        alert("Please click 'Yes'.");
      } else {
        const border = document.querySelector('.border');
        const teleportDistance = 200; // Adjust teleport distance as needed
        const randomX = Math.random() * (teleportDistance * 2) - teleportDistance;
        const randomY = Math.random() * (teleportDistance * 2) - teleportDistance;
        border.style.transform = `translate(${randomX}px, ${randomY}px)`;
      }
    });

    document.getElementById('yesButton').addEventListener('click', function() {
      alert("Thank you for saying yes!");
      window.location.href = "motmot.php"; 
    });
  </script>
</body>
</html>
