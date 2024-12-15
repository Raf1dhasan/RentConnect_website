<?php
// Start the session
session_start();

// Check if user is logged in, otherwise redirect to login page
if (!isset($_SESSION['username'])) {
    header("Location: index.html");
    exit;
}

$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome - Rent-Connect.</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Ensure no margins or padding on the root and body elements */
        html, body {
            margin: 0;
            padding: 0;
            background-color: white; /* Set to black to remove any white gap */
        }

        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
        }

        .intro-section {
            background-image: url('image_city2.jpg'); /* Background image for intro */
            background-size: cover;
            background-position: center;
            color: white;
            padding: 100px 20px 120px 20px; /* Adjust as necessary */
            text-align: center;
            position: relative;
            margin: 0; /* No margin on top */
        }

        /* Dark overlay for better contrast */
        .intro-section::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent black overlay */
            z-index: 1;
        }

        .intro-section h1,
        .intro-section p {
            position: relative;
            z-index: 2;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7); /* Shadow for text readability */
        }

        /* General section spacing */
        section {
            padding: 60px 20px;
        }

        .why-us-section {
            background-color: #f8f9fa;
            padding: 60px 20px;
            text-align: center;
        }

        .why-us-section h2 {
            margin-bottom: 30px;
        }

        .why-us-section .feature {
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .feature-icon {
            font-size: 30px;
            color: #1e90ff;
        }

        .footer {
            background-color: #29394C; /* Matches main theme color */
            color: white;
            padding: 20px 0;
        }

        .property-card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 8px;
            overflow: hidden;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Rent-Connect.</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#intro-section">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#listings-section">Listings</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services-section">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="add_property.php">Add Property</a></li>
                    <li class="nav-item"><a class="nav-link" href="about_us.html">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="logout.php">Sign Out</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Introductory Section -->
    <section id="intro-section" class="intro-section">
        <div class="container">
            <h1>Welcome, <?php echo htmlspecialchars($username); ?>!</h1>
            <p>Discover the best properties tailored just for you. Browse through our listings and find your next home!</p>
        </div>
    </section>

     <!-- Listings Section -->
    <section id="listings-section" class="container my-5">
        <h2 class="text-center mb-4">Our Listings</h2>
        <div class="input-group mb-4">
            <input type="text" id="search-bar" class="form-control" placeholder="Search listings..." aria-label="Search listings">
            <button class="btn btn-primary" onclick="searchListings()">Search</button>
            <button class="btn btn-secondary" onclick="clearSearch()">Clear</button>
        </div>

        <!-- Property Cards -->
        <div class="row" id="property-list">
            <?php
            $properties = [
                ["image" => "prop1_img1.webp", "price" => "$1,550", "description" => "Cozy 2-bedroom apartment in Downtown.", "detailsPage" => "property1_details.php"],
                ["image" => "prop2_img1.webp", "price" => "$2,400", "description" => "Spacious 3-bedroom Sahali apartment.", "detailsPage" => "property2_details.php"],
                ["image" => "prop3_img1.webp", "price" => "$3,500", "description" => "Elegant countryside home on Valleyview.", "detailsPage" => "property3_details.php"],
                ["image" => "prop4_img1.webp", "price" => "$5,000", "description" => "Luxurious 4-bedroom villa with a pool.", "detailsPage" => "property4_details.php"],
                ["image" => "prop5_img1.webp", "price" => "$1,900", "description" => "Bright and modern 2-bedroom condo in Downtown.", "detailsPage" => "property5_details.php"],
                ["image" => "prop6_img1.webp", "price" => "$950", "description" => "Compact studio in a vibrant area.", "detailsPage" => "property6_details.php"],
                ["image" => "prop7_img1.webp", "price" => "$2,400", "description" => "Spacious house in Northshore.", "detailsPage" => "property7_details.php"],
                ["image" => "prop8_img1.webp", "price" => "$1,200", "description" => "Affordable basement in Summit Dr.", "detailsPage" => "property8_details.php"],
                ["image" => "prop9_img1.webp", "price" => "$2,600", "description" => "Scenic Retreat in Aberdeen.", "detailsPage" => "property9_details.php"],
                ["image" => "prop10_img1.webp", "price" => "$2,500", "description" => "Modern house in Pineview.", "detailsPage" => "property10_details.php"],
                ["image" => "prop11_img1.webp", "price" => "$3,200", "description" => "Lakeview House in Westsyde.", "detailsPage" => "property11_details.php"],
                ["image" => "prop12_img1.webp", "price" => "$1,800", "description" => "Old Farmhouse in Rayleigh.", "detailsPage" => "property12_details.php"],
            ];

            foreach ($properties as $property) {
                echo '<div class="col-md-4">';
                echo '    <div class="card property-card">';
                echo '        <img src="' . $property['image'] . '" class="card-img-top" alt="Property Image">';
                echo '        <div class="card-body">';
                echo '            <h5 class="card-title">' . $property['price'] . '</h5>';
                echo '            <p class="card-text">' . $property['description'] . '</p>';
                echo '            <a href="' . $property['detailsPage'] . '" class="btn btn-primary">View Details</a>';
                echo '        </div>';
                echo '    </div>';
                echo '</div>';
            }
            ?>
        </div>
    </section>
 <!-- Services Section -->
    <section id="services-section" class="container-fluid py-5 text-light" style="position: relative; background-image: url('img99.png'); background-size: cover; background-position: center;">
    <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background-color: rgba(0, 0, 0, 0.5);"></div>
    <div class="container text-center position-relative" style="z-index: 1;">
        <h2 class="text-center mb-4">Our Services</h2>
        <p class="text-center">Partnered with Top-Notch Property Solutions and Cleaning Services.</p>
        <div class="text-center">
            <a href="services_details.html" class="btn btn-primary">Learn More</a>
        </div>
    </div>
</section>
    <!-- Why Us Section -->
    <section class="why-us-section">
        <div class="container">
            <h2>Why Choose Us?</h2>
            <div class="row">
                <div class="col-md-6 feature">
                    <div class="feature-icon">&#9733;</div>
                    <div><strong>Wide Variety of Listings</strong> - From affordable apartments to luxury villas, we have options for every preference and budget.</div>
                </div>
                <div class="col-md-6 feature">
                    <div class="feature-icon">&#128222;</div>
                    <div><strong>24/7 Support</strong> - Our team is available around the clock to help you with any inquiries or issues.</div>
                </div>
                <div class="col-md-6 feature">
                    <div class="feature-icon">&#128295;</div>
                    <div><strong>Transparency in Pricing</strong> - No hidden fees. All property prices and details are clearly listed.</div>
                </div>
                <div class="col-md-6 feature">
                    <div class="feature-icon">&#128736;</div>
                    <div><strong>Verified Properties</strong> - All listings are thoroughly vetted to ensure quality and reliability.</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="footer">
        <div class="container text-center">
            <p>Contact Us: 123-456-7890 | Email: info@rentconnect.com</p>
            <p>&copy; 2024 Rent-Connect. All rights reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap and jQuery JS -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Search Listings Functionality
        function searchListings() {
            const query = $('#search-bar').val().toLowerCase();
            $('#property-list .card').each(function() {
                const description = $(this).find('.card-text').text().toLowerCase();
                if (description.includes(query)) {
                    $(this).closest('.col-md-4').show();
                } else {
                    $(this).closest('.col-md-4').hide();
                }
            });
        }

        // Clear Search Functionality
        function clearSearch() {
            $('#search-bar').val(''); // Clear the search input
            $('#property-list .col-md-4').show(); // Show all listings
        }
    </script>
</body>
</html>
