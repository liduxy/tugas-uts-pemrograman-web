<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Damar Tri Rahmadhani</title>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Orbitron', sans-serif;
            background-color: #f8f9fa;
        }
        .hero-section {
            padding: 100px 0;
            text-align: center;
            background: linear-gradient(to right, #0f2027, #203a43, #2c5364);
            color: white;
        }
        .project-card {
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .about-section, .contact-section {
            padding: 60px 0;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container">
        <a class="navbar-brand" href="#">Damar Tri R</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
                <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                <li class="nav-item "><a class="nav-link" href="login.php">Login</a></li>

            </ul>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<!-- Hero Section -->
<section id="home" class="hero-section d-flex align-items-center justify-content-center flex-column text-center">
    <div class="container">
        <h1 class="display-3 fw-bold">Damar Tri Rahmadhani</h1>
        <p class="lead">Frontend Developer | Creative Technologist | Lifelong Learner</p>
        <a href="#projects" class="btn btn-outline-light btn-lg mt-4">See My Work</a>
    </div>
</section>

<!-- Projects Section -->
<section id="projects" class="projects-section py-5 bg-light">
    <div class="container">
        <h2 class="mb-5 text-center">My Projects</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Project 1</h5>
                        <p class="card-text">Description of project 1. Built using HTML, CSS, and JavaScript.</p>
                        <a href="#" class="btn btn-outline-primary btn-sm">View More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Project 2</h5>
                        <p class="card-text">Description of project 2. This is a responsive web application.</p>
                        <a href="#" class="btn btn-outline-primary btn-sm">View More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Project 3</h5>
                        <p class="card-text">Description of project 3. Focused on UI/UX design and interaction.</p>
                        <a href="#" class="btn btn-outline-primary btn-sm">View More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="about-section py-5 bg-dark text-white">
    <div class="container">
        <h2 class="mb-5 text-center">About Me</h2>
        <div class="row align-items-center">
            <div class="col-md-4">
                <img src="https://via.placeholder.com/200" alt="Damar Photo" class="img-fluid rounded-circle mb-3">
            </div>
            <div class="col-md-8 text-start">
                <p class="fs-5">Hello! I'm <strong>Damar Tri Rahmadhani</strong>, a passionate developer with a futuristic vision. I focus on building responsive websites and digital experiences that are both functional and visually engaging.</p>
                <p class="fs-5">With a strong foundation in HTML, CSS, and JavaScript, I aim to continuously improve and learn new technologies to stay at the forefront of web development.</p>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="contact-section bg-light py-5">
    <div class="container">
        <h2 class="mb-4 text-center">Contact Me</h2>
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <form action="contact.php" method="post" class="p-4 bg-white rounded shadow-sm mx-auto">
                    <div class="mb-3 text-start">
                        <label class="form-label">Your Name</label>
                        <input type="text" name="name" class="form-control text-center" placeholder="Enter your name" required>
                    </div>
                    <div class="mb-3 text-start">
                        <label class="form-label">Your Email</label>
                        <input type="email" name="email" class="form-control text-center" placeholder="Enter your email" required>
                    </div>
                    <div class="mb-3 text-start">
                        <label class="form-label">Your Message</label>
                        <textarea name="message" class="form-control text-center" rows="5" placeholder="Type your message" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</section>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
