<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Portfolio</title>
  <link rel="stylesheet" href="style.css">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
      line-height: 1.6;
      background-color: #f4f4f4;
      color: #333;
      padding: 20px;
    }

    header {
      text-align: center;
      padding: 40px 0;
      background-color: #333;
      color: white;
    }

    nav {
      display: flex;
      justify-content: center;
      gap: 20px;
      background-color: #444;
      padding: 10px 0;
    }

    nav a {
      color: white;
      text-decoration: none;
      font-weight: bold;
    }

    nav a:hover {
      text-decoration: underline;
    }

    section {
      padding: 20px 0;
      max-width: 800px;
      margin: auto;
    }

    .project {
      background-color: #fff;
      margin: 10px 0;
      padding: 15px;
      border-left: 5px solid #333;
    }

    footer {
      text-align: center;
      margin-top: 40px;
      padding: 20px;
      background-color: #333;
      color: white;
    }

    .profile-img {
      display: block;
      max-width: 150px;
      height: auto;
      border-radius: 50%;
      margin: 20px auto;
    }
    .alert{

    }
    

  </style>
</head>
<body>

  <header>
    <h1>SM Golam Azam</h1>
    <p id ="test">C++>Hardware Engineer | Designer | Programmer</p>
  </header>
 
  <nav>
    <div class ="alert">
    <a href="">About</a>
    <a href="">Projects</a>
    <a href="">Contact</a>
    </div>
  </nav>

  <section id="about">
    <h2>About Me</h2>
    <img src="images/image.jpg" alt="Profile Image" width="350" height="350">
    <p>Hello! I'm a Hardware Engineer with a passion for building beautiful and functional websites. I love coding, design, and bringing ideas to life online.</p>
  </section>

  <section id="projects">
    <h2>Projects</h2>
    <div class="project">
      <h3>Portfolio Website</h3>
      <p>A personal portfolio website to showcase my work and skills.</p>
    </div>
    <div class="project">
      <h3>To-Do App</h3>
      <p>A simple and elegant to-do list application built with HTML, CSS, and JavaScript.</p>
    </div>
  </section>

  <section id="contact">
    <h2>Contact Me</h2>
    <p>smazam999@gmail.com</p>
    <p>Facebook: <a href="www.facebook.com/smazam999">facebook.com</a></p>
  </section>

  <footer>
    <p>S.M Golam Azam</p>
  </footer>
  <script src="{{ asset('asset/script.js') }}"></script>

</body>
</html>
