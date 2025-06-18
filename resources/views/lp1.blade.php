<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .card{
            text-align: center;
      padding: 40px 0;
      background-color: #333;
      color: white;

        }
        .card:hover {
      box-shadow: 0 10px 20px rgba(0,0,0,0.2);
      transform: scale(1.05);
      background-color: blue;
    }
    </style>
</head>
<body>
<div class="card" onclick="toggleDetails()">
    <h3>Card Title</h3>
    <p>Short description of the card.</p>
    <div class="details" id="details">
      <p>This is more detailed information that appears when the card is clicked.</p>
    </div>
  </div>
    
      <div class ="card">
    <h1>SM Golam Azam</h1>
    <p id ="test">C++>Hardware Engineer | Designer | Programmer</p>
    <script>
    function toggleDetails() {
      const detail = document.getElementById("details");
      detail.style.display = detail.style.display === "block" ? "none" : "block";
    }
  </script>



    </div>
</body>
<script src="{{ asset('asset/script.js') }}"></script>
</html>