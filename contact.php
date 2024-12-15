<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Rent-Connect</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css"> <!-- Link to your stylesheet -->
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        .contact-section {
            background-image: url('image_city2.jpg');
            background-size: cover;
            background-position: center;
            padding: 60px 20px;
            position: relative;
            color: #fff;
            min-height: calc(100vh - 60px); /* Adjust to subtract the navbar height */
        }

        .contact-section::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 0;
        }

        .contact-content {
            position: relative;
            z-index: 1;
        }

        footer {
            margin: 0;
            padding: 20px 0;
            background-color: #29394C;
            color: white;
        }

        .btn-submit {
            background-color: #f8d23a; /* Bright yellow */
            color: #000; /* Black text */
            font-weight: bold;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2); /* Add shadow */
            transition: background-color 0.3s ease; /* Smooth hover effect */
        }

        .btn-submit:hover {
            background-color: #f7c521; /* Slightly darker yellow on hover */
            color: #000;
        }
    </style>
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="welcome.php">
            <img src="logo25.JPG" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
            <span>Rent-Connect</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="welcome.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about_us.html">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="services_details.html">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="add_property.php">Add Property</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="contact.php">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Sign Out</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Contact Section -->
<section class="contact-section">
    <div class="container contact-content">
        <h2 class="text-center mb-5">Get in Touch</h2>
        <div class="row">
            <div class="col-md-6">
                <h4>Contact Information</h4>
                <p><strong>Phone:</strong> <a href="tel:123-456-7890" style="color: #f8d23a;">123-456-7890</a></p>
                <p><strong>Email:</strong> <a href="mailto:info@rentconnect.com" style="color: #f8d23a;">info@rentconnect.com</a></p>
                <p><strong>Address:</strong> 123 Rent Street, Property City, PC 12345</p>
                <p>We'd love to hear from you! Feel free to reach out with any questions or concerns.</p>
            </div>
            <div class="col-md-6">
                <h4>Send Us a Message</h4>
                <form method="POST" action="contact.php">
                    <div class="mb-3">
                        <label for="name" class="form-label">Your Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Your Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Your Message</label>
                        <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-submit">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer>
    <div class="container text-center">
        <p>Contact Us: <a href="tel:123-456-7890">123-456-7890</a> | Email: <a href="mailto:info@rentconnect.com">info@rentconnect.com</a></p>
        <p>&copy; 2024 Rent-Connect. All rights reserved.</p>
    </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
