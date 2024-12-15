<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property Details - Cozy 2-Bedroom Apartment</title>
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
    <h1>Cozy 2-Bedroom Apartment in Downtown Kamloops</h1>
</header>

<!-- Property Details Section -->
<section class="property-details">
    <div class="container">
        <div class="row">
            <!-- Property Images -->
            <div class="col-md-8">
                <div class="property-images">
                    <img src="prop1_img1.webp" alt="Living Room">
                    <img src="prop1_img2.webp" alt="Bedroom">
                    <img src="prop1_img3.webp" alt="Kitchen">
	            <img src="prop1_img4.webp" alt="balcony">
                </div>
            </div>
            <!-- Property Details -->
            <div class="col-md-4">
                <h2>Property Details</h2>
                <p><strong>Price:</strong> <span class="price">$1,950/month</span></p>
                <p><strong>Details:</strong> Experience urban living at its finest with this cozy 2-bedroom apartment in downtown Kamloops. Featuring modern amenities, a spacious layout, and stunning city views from the balcony, this property is perfect for professionals or small families. Enjoy the convenience of nearby public transportation, secure parking, and a vibrant neighborhood with shops, restaurants, and parks just steps away. High-speed internet and 24/7 security included for your comfort and peace of mind.</p>
                <p><strong>Location:</strong> Downtown, Kamloops, BC</p>
                <p><strong>Bedrooms:</strong> 2</p>
                <p><strong>Bathrooms:</strong> 1</p>
                <p><strong>Features:</strong></p>
                <ul>
                    <li>Close to public transportation</li>
                    <li>Modern kitchen with appliances</li>
                    <li>High-speed internet ready</li>
                    <li>24/7 security</li>
                    <li>Balcony with city views</li>
                    <li>Parking available</li>
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
                        src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d435.2544412817218!2d-120.326657!3d50.6728505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2sca!4v1700516007987"
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
                    <div class="mb-3">
                        <label for="landlord" class="form-label">Current Landlord Name</label>
                        <input type="text" class="form-control" id="landlord">
                    </div>
                    <div class="mb-3">
                        <label for="landlordPhone" class="form-label">Landlord Phone</label>
                        <input type="tel" class="form-control" id="landlordPhone">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Do you have pets?</label><br>
                        <input type="radio" id="petsYes" name="pets" value="Yes" required> <label for="petsYes">Yes</label>
                        <input type="radio" id="petsNo" name="pets" value="No" required> <label for="petsNo">No</label>
                    </div>
                    <div class="mb-3">
                        <label for="occupants" class="form-label">Number of Occupants</label>
                        <input type="number" class="form-control" id="occupants" required>
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
