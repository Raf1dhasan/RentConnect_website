<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Property - Rent-Connect</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css"> <!-- Link to your stylesheet -->
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        .property-section {
            background-image: url('add_prop_back.jpg');
            background-size: cover;
            background-position: center;
            padding: 60px 20px;
            position: relative;
            color: #fff;
            min-height: calc(100vh - 60px); /* Adjust to subtract the navbar height */
        }

        .property-section::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 0;
        }

        .property-content {
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
                    <a class="nav-link active" aria-current="page" href="add_property.php">Add Property</a>
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

<!-- Property Section -->
<section class="property-section">
    <div class="container property-content">
        <h2 class="text-center mb-5">Add Your Property</h2>
        <form id="addPropertyForm" method="POST" enctype="multipart/form-data" action="submit_property.php">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="propertyName" class="form-label">Property Name</label>
                    <input type="text" class="form-control" id="propertyName" name="propertyName" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="text" class="form-control" id="phone" name="phone" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" id="address" name="address" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="bedrooms" class="form-label">Number of Bedrooms</label>
                    <input type="number" class="form-control" id="bedrooms" name="bedrooms" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="bathrooms" class="form-label">Number of Bathrooms</label>
                    <input type="number" class="form-control" id="bathrooms" name="bathrooms" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="price" class="form-label">Price ($)</label>
                    <input type="number" class="form-control" id="price" name="price" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="propertyType" class="form-label">Property Type</label>
                    <select class="form-control" id="propertyType" name="propertyType" required>
                        <option value="">Select Type</option>
                        <option value="Apartment">Apartment</option>
                        <option value="House">House</option>
                        <option value="Condo">Condo</option>
                        <option value="Townhouse">Townhouse</option>
                    </select>
                </div>
            </div>
            <div class="mb-3">
                <label for="photos" class="form-label">Add Photos</label>
                <input type="file" class="form-control" id="photos" name="photos[]" accept="image/*" multiple>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-submit">Submit Property</button>
            </div>
        </form>
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
<script>
    document.getElementById('addPropertyForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent form submission

        // Show toast notification or handle submission via AJAX
        alert('Your property has been submitted and is under review.');
    });
</script>
</body>
</html>
