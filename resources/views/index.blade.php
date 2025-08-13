<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SM Golam Azam | Professional Portfolio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #2c3e50;
            --secondary-color: #3498db;
            --accent-color: #e74c3c;
            --light-color: #ecf0f1;
            --dark-color: #2c3e50;
            --text-color: #333;
            --text-light: #fff;
            --section-bg: #f9f9f9;
            --card-bg: #fff;
            --box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: var(--light-color);
            color: var(--text-color);
            line-height: 1.6;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header Styles */
        header {
            background-color: var(--primary-color);
            color: var(--text-light);
            padding: 2rem 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: var(--box-shadow);
        }

        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo h1 {
            font-size: 1.8rem;
            font-weight: 700;
        }

        .logo span {
            color: var(--secondary-color);
        }

        nav ul {
            display: flex;
            list-style: none;
        }

        nav ul li {
            margin-left: 2rem;
        }

        nav ul li a {
            color: var(--text-light);
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
        }

        nav ul li a:hover {
            color: var(--secondary-color);
        }

        /* Hero Section */
        .hero {
            height: 100vh;
            display: flex;
            align-items: center;
            background: linear-gradient(rgba(44, 62, 80, 0.8), rgba(44, 62, 80, 0.8)), 
                          url('https://images.unsplash.com/photo-1498050108023-c5249f4df085') center/cover no-repeat;
            color: var(--text-light);
            text-align: center;
            padding-top: 80px;
        }

        .hero-content {
            max-width: 800px;
            margin: 0 auto;
        }

        .hero h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        .hero h2 {
            font-size: 1.8rem;
            margin-bottom: 2rem;
            color: var(--secondary-color);
        }

        .hero p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
        }

        .btn {
            display: inline-block;
            background-color: var(--secondary-color);
            color: var(--text-light);
            padding: 0.8rem 2rem;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #2980b9;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        /* Section Styles */
        section {
            padding: 6rem 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 4rem;
        }

        .section-title h2 {
            font-size: 2.5rem;
            color: var(--dark-color);
            position: relative;
            display: inline-block;
            padding-bottom: 1rem;
        }

        .section-title h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background-color: var(--secondary-color);
        }

        /* About Section */
        .about {
            background-color: var(--section-bg);
        }

        .about-content {
            display: flex;
            align-items: center;
            gap: 3rem;
        }

        .about-img {
            flex: 1;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: var(--box-shadow);
        }

        .about-img img {
            width: 100%;
            height: auto;
            display: block;
        }

        .about-text {
            flex: 1;
        }

        .about-text h3 {
            font-size: 1.8rem;
            margin-bottom: 1.5rem;
            color: var(--dark-color);
        }

        .about-text p {
            margin-bottom: 1.5rem;
        }

        .skills {
            margin-top: 2rem;
        }

        .skills h4 {
            margin-bottom: 1rem;
            font-size: 1.2rem;
        }

        .skill-item {
            margin-bottom: 1rem;
        }

        .skill-name {
            display: flex;
            justify-content: space-between;
            margin-bottom: 0.5rem;
        }

        .skill-bar {
            height: 10px;
            background-color: #ddd;
            border-radius: 5px;
            overflow: hidden;
        }

        .skill-progress {
            height: 100%;
            background-color: var(--secondary-color);
            border-radius: 5px;
        }

        /* Experience Section */
        .experience {
            background-color: var(--card-bg);
        }

        .timeline {
            position: relative;
            max-width: 800px;
            margin: 0 auto;
        }

        .timeline::after {
            content: '';
            position: absolute;
            width: 6px;
            background-color: var(--secondary-color);
            top: 0;
            bottom: 0;
            left: 50%;
            margin-left: -3px;
        }

        .timeline-item {
            padding: 10px 40px;
            position: relative;
            width: 50%;
            box-sizing: border-box;
        }

        .timeline-item::after {
            content: '';
            position: absolute;
            width: 25px;
            height: 25px;
            background-color: var(--card-bg);
            border: 4px solid var(--secondary-color);
            border-radius: 50%;
            top: 15px;
            z-index: 1;
        }

        .left {
            left: 0;
        }

        .right {
            left: 50%;
        }

        .left::after {
            right: -12px;
        }

        .right::after {
            left: -12px;
        }

        .timeline-content {
            padding: 20px;
            background-color: var(--section-bg);
            border-radius: 8px;
            box-shadow: var(--box-shadow);
        }

        .timeline-content h3 {
            margin-bottom: 0.5rem;
            color: var(--dark-color);
        }

        .timeline-content h4 {
            margin-bottom: 0.5rem;
            color: var(--secondary-color);
        }

        .timeline-content p {
            margin-bottom: 0;
        }

        /* Education Section */
        .education {
            background-color: var(--section-bg);
        }

        .education-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .education-card {
            background-color: var(--card-bg);
            border-radius: 8px;
            padding: 2rem;
            box-shadow: var(--box-shadow);
            transition: transform 0.3s;
        }

        .education-card:hover {
            transform: translateY(-10px);
        }

        .education-card h3 {
            color: var(--dark-color);
            margin-bottom: 1rem;
        }

        .education-card h4 {
            color: var(--secondary-color);
            margin-bottom: 0.5rem;
        }

        .education-card p {
            margin-bottom: 0.5rem;
        }

        .education-card .date {
            color: #7f8c8d;
            font-weight: 500;
        }

        /* Projects Section */
        .projects {
            background-color: var(--card-bg);
        }

        .projects-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .project-card {
            background-color: var(--card-bg);
            border-radius: 8px;
            overflow: hidden;
            box-shadow: var(--box-shadow);
            transition: transform 0.3s;
        }

        .project-card:hover {
            transform: translateY(-10px);
        }

        .project-img {
            height: 200px;
            overflow: hidden;
        }

        .project-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s;
        }

        .project-card:hover .project-img img {
            transform: scale(1.1);
        }

        .project-content {
            padding: 1.5rem;
        }

        .project-content h3 {
            margin-bottom: 0.5rem;
            color: var(--dark-color);
        }

        .project-content p {
            margin-bottom: 1rem;
            color: #7f8c8d;
        }

        .project-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
            margin-bottom: 1rem;
        }

        .project-tags span {
            background-color: var(--secondary-color);
            color: var(--text-light);
            padding: 0.3rem 0.8rem;
            border-radius: 50px;
            font-size: 0.8rem;
        }

        .project-links {
            display: flex;
            gap: 1rem;
        }

        .project-links a {
            color: var(--secondary-color);
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s;
        }

        .project-links a:hover {
            color: var(--dark-color);
        }

        /* Achievements Section */
        .achievements {
            background-color: var(--section-bg);
        }

        .achievements-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .achievement-card {
            background-color: var(--card-bg);
            border-radius: 8px;
            padding: 2rem;
            text-align: center;
            box-shadow: var(--box-shadow);
            transition: transform 0.3s;
        }

        .achievement-card:hover {
            transform: translateY(-10px);
        }

        .achievement-icon {
            font-size: 3rem;
            color: var(--secondary-color);
            margin-bottom: 1rem;
        }

        .achievement-card h3 {
            margin-bottom: 0.5rem;
            color: var(--dark-color);
        }

        .achievement-card p {
            color: #7f8c8d;
        }

        /* Contact Section */
        .contact {
            background-color: var(--card-bg);
        }

        .contact-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 3rem;
        }

        .contact-info {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }

        .contact-item {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .contact-icon {
            width: 50px;
            height: 50px;
            background-color: var(--secondary-color);
            color: var(--text-light);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
        }

        .contact-text h3 {
            color: var(--dark-color);
            margin-bottom: 0.3rem;
        }

        .contact-text a {
            color: #7f8c8d;
            text-decoration: none;
            transition: color 0.3s;
        }

        .contact-text a:hover {
            color: var(--secondary-color);
        }

        .contact-form {
            background-color: var(--section-bg);
            padding: 2rem;
            border-radius: 8px;
            box-shadow: var(--box-shadow);
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            color: var(--dark-color);
            font-weight: 500;
        }

        .form-control {
            width: 100%;
            padding: 0.8rem;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
        }

        textarea.form-control {
            min-height: 150px;
            resize: vertical;
        }

        /* Footer */
        footer {
            background-color: var(--dark-color);
            color: var(--text-light);
            text-align: center;
            padding: 3rem 0;
        }

        .social-links {
            display: flex;
            justify-content: center;
            gap: 1.5rem;
            margin-bottom: 2rem;
        }

        .social-links a {
            color: var(--text-light);
            font-size: 1.5rem;
            transition: color 0.3s;
        }

        .social-links a:hover {
            color: var(--secondary-color);
        }

        .copyright {
            margin-bottom: 1rem;
        }

        .back-to-top {
            display: inline-block;
            width: 40px;
            height: 40px;
            background-color: var(--secondary-color);
            color: var(--text-light);
            border-radius: 50%;
            text-align: center;
            line-height: 40px;
            transition: all 0.3s;
        }

        .back-to-top:hover {
            background-color: var(--accent-color);
            transform: translateY(-5px);
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .header-container {
                flex-direction: column;
                text-align: center;
            }

            nav ul {
                margin-top: 1rem;
                justify-content: center;
            }

            nav ul li {
                margin: 0 0.5rem;
            }

            .hero h1 {
                font-size: 2.5rem;
            }

            .hero h2 {
                font-size: 1.5rem;
            }

            .about-content {
                flex-direction: column;
            }

            .timeline::after {
                left: 31px;
            }

            .timeline-item {
                width: 100%;
                padding-left: 70px;
                padding-right: 25px;
            }

            .timeline-item::after {
                left: 18px;
            }

            .left::after, .right::after {
                left: 18px;
            }

            .right {
                left: 0;
            }
        }
    </style>
</head>

<body>
    <!-- Header -->
    <header>
        <div class="container header-container">
            <div class="logo">
                <h1>SM <span>Golam Azam</span></h1>
            </div>
            <nav>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#experience">Experience</a></li>
                    <li><a href="#education">Education</a></li>
                    <li><a href="#projects">Projects</a></li>
                    <li><a href="#achievements">Achievements</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="container">
            <div class="hero-content">
                <h1>SM Golam Azam</h1>
                <h2>Professional [Your Profession]</h2>
                <p>I specialize in creating innovative solutions that bridge technology and business needs with a focus on user experience and measurable results.</p>
                <a href="#contact" class="btn">Get In Touch</a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about">
        <div class="container">
            <div class="section-title">
                <h2>About Me</h2>
            </div>
            <div class="about-content">
                <div class="about-text">
                    <h3>Professional Profile</h3>
                    <p>I am a passionate and results-driven professional with [X] years of experience in [your field]. My expertise lies in [key skills or areas], and I have a proven track record of delivering high-quality solutions that drive business growth and efficiency.</p>
                    <p>My approach combines technical excellence with strategic thinking, ensuring that every project I undertake not only meets but exceeds expectations. I thrive in collaborative environments and am committed to continuous learning and professional development.</p>
                    
                    <div class="skills">
                        <h4>Key Skills</h4>
                        <div class="skill-item">
                            <div class="skill-name">
                                <span>Web Development</span>
                                <span>90%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" style="width: 90%;"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="skill-name">
                                <span>UI/UX Design</span>
                                <span>85%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" style="width: 85%;"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="skill-name">
                                <span>Project Management</span>
                                <span>80%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" style="width: 80%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="about-img">
                    <img src="https://via.placeholder.com/400x500" alt="SM Golam Azam">
                </div>
            </div>
        </div>
    </section>

    <!-- Experience Section -->
    <section id="experience" class="experience">
        <div class="container">
            <div class="section-title">
                <h2>Professional Experience</h2>
            </div>
            <div class="timeline">
                <div class="timeline-item left">
                    <div class="timeline-content">
                        <h3>Senior Web Developer</h3>
                        <h4>Tech Solutions Inc.</h4>
                        <p class="date">Jan 2020 - Present</p>
                        <p>Led a team of 5 developers to create responsive web applications using modern frameworks. Implemented CI/CD pipelines that reduced deployment time by 40%.</p>
                    </div>
                </div>
                <div class="timeline-item right">
                    <div class="timeline-content">
                        <h3>Web Developer</h3>
                        <h4>Digital Creations</h4>
                        <p class="date">Mar 2017 - Dec 2019</p>
                        <p>Developed and maintained client websites, improving load times by 30% through performance optimization. Collaborated with designers to implement pixel-perfect UIs.</p>
                    </div>
                </div>
                <div class="timeline-item left">
                    <div class="timeline-content">
                        <h3>Junior Developer</h3>
                        <h4>StartUp Ventures</h4>
                        <p class="date">Jun 2015 - Feb 2017</p>
                        <p>Assisted in building the company's flagship product from scratch. Gained experience in full-stack development and agile methodologies.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Education Section -->
    <section id="education" class="education">
        <div class="container">
            <div class="section-title">
                <h2>Education</h2>
            </div>
            <div class="education-container">
                <div class="education-card">
                    <h3>Master of Computer Science</h3>
                    <h4>University of Technology</h4>
                    <p class="date">2013 - 2015</p>
                    <p>Specialized in Artificial Intelligence and Machine Learning. Graduated with honors (GPA: 3.8/4.0).</p>
                </div>
                <div class="education-card">
                    <h3>Bachelor of Science in Software Engineering</h3>
                    <h4>State University</h4>
                    <p class="date">2009 - 2013</p>
                    <p>Focus on web technologies and database systems. Completed senior project on e-commerce platform development.</p>
                </div>
                <div class="education-card">
                    <h3>Professional Certification</h3>
                    <h4>Cloud Architecture</h4>
                    <p class="date">2018</p>
                    <p>AWS Certified Solutions Architect with expertise in designing distributed systems on cloud infrastructure.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="projects">
        <div class="container">
            <div class="section-title">
                <h2>Featured Projects</h2>
            </div>
            <div class="projects-container">
                <div class="project-card">
                    <div class="project-img">
                        <img src="https://via.placeholder.com/400x300" alt="E-Commerce Platform">
                    </div>
                    <div class="project-content">
                        <h3>E-Commerce Platform</h3>
                        <p>A full-featured online shopping platform with payment integration, inventory management, and analytics dashboard.</p>
                        <div class="project-tags">
                            <span>React</span>
                            <span>Node.js</span>
                            <span>MongoDB</span>
                        </div>
                        <div class="project-links">
                            <a href="#"><i class="fas fa-external-link-alt"></i> Live Demo</a>
                            <a href="#"><i class="fab fa-github"></i> Source Code</a>
                        </div>
                    </div>
                </div>
                <div class="project-card">
                    <div class="project-img">
                        <img src="https://via.placeholder.com/400x300" alt="Task Management App">
                    </div>
                    <div class="project-content">
                        <h3>Task Management App</h3>
                        <p>Productivity application with team collaboration features, real-time updates, and cross-platform compatibility.</p>
                        <div class="project-tags">
                            <span>Vue.js</span>
                            <span>Firebase</span>
                            <span>PWA</span>
                        </div>
                        <div class="project-links">
                            <a href="#"><i class="fas fa-external-link-alt"></i> Live Demo</a>
                            <a href="#"><i class="fab fa-github"></i> Source Code</a>
                        </div>
                    </div>
                </div>
                <div class="project-card">
                    <div class="project-img">
                        <img src="https://via.placeholder.com/400x300" alt="Health Monitoring System">
                    </div>
                    <div class="project-content">
                        <h3>Health Monitoring System</h3>
                        <p>IoT solution for remote patient monitoring with data visualization and alert systems for healthcare providers.</p>
                        <div class="project-tags">
                            <span>Python</span>
                            <span>Django</span>
                            <span>IoT</span>
                        </div>
                        <div class="project-links">
                            <a href="#"><i class="fas fa-external-link-alt"></i> Live Demo</a>
                            <a href="#"><i class="fab fa-github"></i> Source Code</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Achievements Section -->
    <section id="achievements" class="achievements">
        <div class="container">
            <div class="section-title">
                <h2>Achievements & Awards</h2>
            </div>
            <div class="achievements-container">
                <div class="achievement-card">
                    <div class="achievement-icon">
                        <i class="fas fa-trophy"></i>
                    </div>
                    <h3>Best Innovation Award 2021</h3>
                    <p>Recognized for developing an innovative solution that improved operational efficiency by 35%.</p>
                </div>
                <div class="achievement-card">
                    <div class="achievement-icon">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <h3>Top Performer</h3>
                    <p>Awarded for consistently exceeding project goals and delivering exceptional results for clients.</p>
                </div>
                <div class="achievement-card">
                    <div class="achievement-icon">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h3>Patent Holder</h3>
                    <p>Co-inventor of a patented technology for secure data transmission in web applications.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact">
        <div class="container">
            <div class="section-title">
                <h2>Get In Touch</h2>
            </div>
            <div class="contact-container">
                <div class="contact-info">
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-text">
                            <h3>Location</h3>
                            <p>Dhaka, Bangladesh</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-text">
                            <h3>Email</h3>
                            <a href="mailto:contact@smgolamazam.com">contact@smgolamazam.com</a>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="contact-text">
                            <h3>Phone</h3>
                            <a href="tel:+8801234567890">+880 1234 567890</a>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="contact-text">
                            <h3>Working Hours</h3>
                            <p>Mon-Fri: 9am - 5pm</p>
                        </div>
                    </div>
                </div>
                <div class="contact-form">
                    <form action="#" method="POST">
                        <div class="form-group">
                            <label for="name">Your Name</label>
                            <input type="text" id="name" name="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Your Email</label>
                            <input type="email" id="email" name="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" id="subject" name="subject" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Your Message</label>
                            <textarea id="message" name="message" class="form-control" required></textarea>
                        </div>
                        <button type="submit" class="btn">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="social-links">
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                <a href="#"><i class="fab fa-github"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
            <p class="copyright">&copy; 2023 SM Golam Azam. All Rights Reserved.</p>
            <a href="#home" class="back-to-top"><i class="fas fa-arrow-up"></i></a>
        </div>
    </footer>

    <script src="{{ asset('asset/script.js') }}"></script>
</body>

</html>