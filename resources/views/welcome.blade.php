@extends('index')
@section('main-content')
<div class="body">
  <img id="avatar" class="img" height="300" width="300" style="border-radius: 50%" src="images/image.jpg" alt="profile">
  <h1>SM Golam Azam</h1>
  <div class="nav">
      <a href="#about">About</a>
      <a href="#projects">Projects</a>
      <a href="#contact">Contact</a>
  </div>
    <div class="container">
      <button class="b1">Download CV</button>
      <button class="b2">This button for js</button>
    </div>
</div>

<div class="container">

  <div id="about" class="about">
    <h2>About Me</h2>
    <div class="about-content">
      <div class="ct1">
        <p>I am SM Golam Azam, a passionate developer and cybersecurity enthusiast. I love building creative,
          efficient, and secure web and mobile apps.</p>
      </div>
      <img class="img2" src="images/azam2.jpg" alt="aboutme">
    </div>
  </div>
  

  <div id="projects" class="projects">
      <h2>Projects</h2>
      <div class="space">
          <div class="project-card">
              <h3>Skill Swap</h3>
              <p>A course exchange platform for learning by sharing.</p>
          </div>
          <div class="project-card">
              <h3>KaajWala</h3>
              <p>Connecting households with electricians, plumbers, and mechanics.</p>
          </div>
          <div class="project-card">
              <h3>DNS Logger</h3>
              <p>A tool to display and log public IPs on DNS search.</p>
          </div>
      </div>
  </div>

  <div id="contact" class="contact">
      <h2>Contact Me</h2>
      <form>
          <input type="text" placeholder="Your Name" required>
          <input type="email" placeholder="Your Email" required>
          <textarea rows="4" placeholder="Your Message" required></textarea>
          <button type="submit">Send Message</button>
      </form>
  </div>

</div>
<footer>
<div class="footer">
  <p>SM Golam Azam</p>
  <p>Batch: 61</p>
  <p>Section : A</p>
  <p>ID: 221-15-4654</p>
  <p>Subject: Web Engineering lab</p>
</div>
</footer>

@endsection