<?php
session_start();
// Example user data retrieval (replace with your actual data fetching logic)

// Retrieve session variables with fallback
$name = isset($_SESSION['user']['name']) ? $_SESSION['user']['name'] : 'Guest';
$email = isset($_SESSION['user']['email']) ? $_SESSION['user']['email'] : '';

// Check if the user is logged in

// Regenerate session ID to prevent session fixation attacks
session_regenerate_id();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .navbar-nav .nav-link {
            transition: background-color 0.3s; /* Smooth transition */
        }

        .navbar-nav .nav-link:hover {
            background-color: #007BFF; /* Change to blue on hover */
            color: white; /* Change text color for better visibility */
        }
    </style>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GCE Preparation - Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"><b>Kartouche</b></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a class="nav-link" href="#">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="#subjects">Subjects</a></li>
            <li class="nav-item"><a class="nav-link" href="#practice-tests">Practice Tests</a></li>
            <li class="nav-item"><a class="nav-link" href="#resources">Resources</a></li>
            <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
            <li class="nav-item"><a class="nav-link" href="../auth/logout.php">Logout</a></li> <!-- Added Logout -->
        </ul>
    </div>
</nav>

<!-- Hero Section -->
<header class="bg-primary text-white text-center py-5">
    <div class="container">
        <h1>Welcome to Your Dashboard</h1>
        <p class="lead">Prepare for Your GCE Exams with tailored resources.</p>
        <a href="#subjects" class="btn btn-secondary btn-lg">Get Started</a>
    </div>
</header>

<!-- Dashboard Section -->
<section id="dashboard" class="py-5">
    <div class="container">
        <h2 class="text-center">Welcome, <?php echo htmlspecialchars($name); ?>!</h2>
    </div>
</section>

<!-- Subjects Section -->
<section id="subjects" class="py-5">
    <div class="container">
        <h2 class="text-center">Subjects</h2>
        <p class="text-center">Choose a subject to start preparing.</p>
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Mathematics</h5>
                        <p class="card-text">Practice past questions and review study materials.</p>
                        <a href="../math.html" class="btn btn-primary">Start Math Prep</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">English</h5>
                        <p class="card-text">Learn key concepts and improve your language skills.</p>
                        <a href="#" class="btn btn-primary">Start English Prep</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Physics</h5>
                        <p class="card-text">Get ready for Physics exams with practice questions.</p>
                        <a href="#" class="btn btn-primary">Start Physics Prep</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Biology</h5>
                        <p class="card-text">Get ready for Biology exams with practice questions.</p>
                        <a href="#" class="btn btn-primary">Start Biology Prep</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Chemistry</h5>
                        <p class="card-text">Get ready for Chemistry exams with practice questions.</p>
                        <a href="#" class="btn btn-primary">Start Chemistry Prep</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Geography</h5>
                        <p class="card-text">Get ready for Geography exams with practice questions.</p>
                        <a href="#" class="btn btn-primary">Start Geography Prep</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Economics</h5>
                        <p class="card-text">Get ready for Economics exams with practice questions.</p>
                        <a href="#" class="btn btn-primary">Start Economics Prep</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Additional Mathematics</h5>
                        <p class="card-text">Get ready for Additional Mathematics exams with practice questions.</p>
                        <a href="#" class="btn btn-primary">Start Additional Mathematics Prep</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Practice Tests Section -->
<section id="practice-tests" class="bg-light py-5">
    <div class="container">
        <h2 class="text-center">Practice Tests</h2>
        <p class="text-center">Attempt timed practice exams to test your knowledge.</p>
        <div class="text-center">
            <a href="../choose-subject.html" class="btn btn-success btn-lg">Start Practice Test</a>
        </div>
    </div>
</section>

<!-- Resources Section -->
<section id="resources" class="py-5">
    <div class="container">
        <h2 class="text-center">Resources</h2>
        <p class="text-center">Downloadable materials to aid your study.</p>
        <ul class="list-group">
            <li class="list-group-item"><a href="../gce-math-study-guide.html">GCE Math Study Guide</a></li>
            <li class="list-group-item"><a href="../gce-english-study-guide.html">GCE English Past Papers</a></li>
            <li class="list-group-item"><a href="../gce-additional-math-studyguide.html">Additional Mathematics Revision Notes</a></li>
        </ul>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="bg-primary text-white py-5">
    <div class="container">
        <h2 class="text-center">Contact Us</h2>
        <p class="text-center">Have questions? Get in touch with us.</p>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form action="https://formspree.io/f/xeoqewgz" method="POST" aria-label="Contact Form">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-light">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="bg-dark text-white text-center py-4">
    <p>&copy; <?php echo date("Y"); ?> GCE Preparation. All rights reserved.</p>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
