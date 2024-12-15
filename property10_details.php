<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property Details - Modern House in Pineview</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        .property-header {
            background-color: #29394C;
            color: white;
            padding: 20px 0;
            text-align: center;
        }

        .property-images {
            display: flex;
            gap: 10px;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 20px;
        }

        .property-images img {
            width: 100%;
            max-width: 400px;
            border-radius: 5px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
        }

        .property-details {
            padding: 20px;
        }

        .property-details h2 {
            font-size: 24px;
            font-weight: bold;
        }

        .price {
            font-size: 28px;
            color: #f8d23a;
            font-weight: bold;
        }

        .btn-primary, .btn-success {
            background-color: #f8d23a;
            border: none;
            color: black;
            font-weight: bold;
        }

        .btn-primary:hover, .btn-success:hover {
            background-color: #e4b821;
        }

        .map-container iframe {
            width: 100%;
            height: 300px;
            border: 0;
            border-radius: 5px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
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
                    <a class="nav-link" href="contact.php">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Sign Out</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Property Header -->
<header class="property-header">
    <h1>Modern House in Pineview</h1>
</header>

<!-- Property Details Section -->
<section class="property-details">
    <div class="container">
        <div class="row">
            <!-- Property Images -->
            <div class="col-md-8">
                <div class="property-images">
                    <img src="prop10_img1.webp" alt="Exterior of Modern House">
                    
                    <img src="prop10_img3.webp" alt="Kitchen">
                    <img src="prop10_img4.webp" alt="Bedroom">
                    <img src="prop10_img5.webp" alt="Bathroom">
                </div>
            </div>
            <!-- Property Details -->
            <div class="col-md-4">
                <h2>Property Details</h2>
                <p><strong>Price:</strong> <span class="price">$2,500/month</span></p>
                <p><strong>Details:</strong> This modern house in Pineview offers contemporary and stylish living. With sleek modern design, open living spaces, and a quiet location, this property is ideal for families or professionals. Enjoy modern appliances, spacious bedrooms, and proximity to amenities.</p>
                <p><strong>Location:</strong> Pineview, Kamloops, BC</p>
                <p><strong>Features:</strong></p>
                <ul>
                    <li>Modern architecture and design</li>
                    <li>Spacious bedrooms</li>
                    <li>Fully equipped kitchen</li>
                    <li>Large garage and driveway</li>
                    <li>Quiet and peaceful neighborhood</li>
                </ul>
                <a href="welcome.php" class="btn btn-primary">Back to Listings</a>
                <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#bookingModal">Book Now</button>
            </div>
        </div>

        <!-- Map Section -->
        <div class="row mt-5">
            <div class="col-12">
                <h2>Location</h2>
                <div class="map-container">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2268.404234891117!2d-120.4014375!3d50.6544307!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x537e2c6d939f0111%3A0x2001234e56789abc!2sPineview%20Area!5e0!3m2!1sen!2sca!4v1698830000000"
                        allowfullscreen=""
                        loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Booking Modal -->
<div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="bookingModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="bookingModalLabel">Book Property</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="bookingForm">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Your Name</label>
                        <input type="text" class="form-control" id="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Your Email</label>
                        <input type="email" class="form-control" id="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Your Phone</label>
                        <input type="tel" class="form-control" id="phone" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Book Now</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Toast Notification -->
<div class="toast-container position-fixed bottom-0 end-0 p-3">
    <div id="toastMessage" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
            <strong class="me-auto">Rent-Connect</strong>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
            Your booking request has been submitted. Please wait for approval.
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="footer bg-dark text-white text-center py-3">
    <p>&copy; 2024 Rent-Connect. All rights reserved.</p>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Booking form submission
    document.getElementById('bookingForm').addEventListener('submit', function(e) {
        e.preventDefault();
        var toast = new bootstrap.Toast(document.getElementById('toastMessage'));
        toast.show();
        // Close the modal
        var modal = bootstrap.Modal.getInstance(document.getElementById('bookingModal'));
        modal.hide();
    });
</script>
</body>
</html>
