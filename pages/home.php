<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Vehicle Parking Management System</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .hero {
      background: url('../images/ex.jpg') center/cover no-repeat;
      color: white;
      padding: 100px 0;
      text-align: center;
    }
    .section-title {
      margin-bottom: 40px;
    }
    .offer-card img {
      height: 180px;
      object-fit: cover;
    }
    .pricing-table {
      background: #f8f9fa;
      padding: 40px 0;
    }
    .location-map iframe {
      width: 100%;
      height: 300px;
      border: none;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
  <div class="container">
    <a class="navbar-brand" href="#">VPMS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
        <li class="nav-item"><a class="nav-link" href="register.php">Register</a></li>
        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Hero -->
<section class="hero">
  <div class="container">
    <h1 class="display-4 fw-bold">Smart Parking Starts Here</h1>
    <p class="lead">Find and book your spot quickly & securely</p>
    <a href="register.php" class="btn btn-primary btn-lg">Get Started</a>
  </div>
</section>

<!-- Booking Form -->
<section class="container py-5">
  <h2 class="text-center section-title">Book Your Slot</h2>
  <form class="row g-3 justify-content-center" action="book-slot.php" method="POST">
    <div class="col-md-4">
      <input type="text" class="form-control" name="vehicle_no" placeholder="Vehicle Number" required>
    </div>
    <div class="col-md-4">
      <input type="datetime-local" class="form-control" name="entry_time" required>
    </div>
    <div class="col-md-4">
      <input type="datetime-local" class="form-control" name="exit_time" required>
    </div>
    <div class="col-md-12 text-center">
      <button type="submit" class="btn btn-success px-4">Book Now</button>
    </div>
  </form>
</section>

<!-- Offers Section -->
<section class="container py-5">
  <h2 class="text-center section-title">Offers</h2>
  <div class="row">
    <div class="col-md-4">
      <div class="card offer-card">
         <img src="../images/ex.jpg" class="card-img-top" alt="Offer">
        <div class="card-body">
          <h5 class="card-title">Weekend Discounts</h5>
          <p class="card-text">Save 20% on weekend bookings!</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card offer-card">
         <img src="../images/ex.jpg" class="card-img-top" alt="Offer">
        <div class="card-body">
          <h5 class="card-title">Early Bird</h5>
          <p class="card-text">Book 24 hrs in advance & get 15% off.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card offer-card">
         <img src="../images/ex.jpg" class="card-img-top" alt="Offer">
        <div class="card-body">
          <h5 class="card-title">Monthly Pass</h5>
          <p class="card-text">Get monthly subscriptions at best rates.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Location Map -->
<section class="location-map">
  <div class="container">
    <h2 class="text-center section-title">Our Location</h2>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4047293.668778966!2d78.06393626163876!3d7.849434874352315!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2593cf65a1e9d%3A0xe13da4b400e2d38c!2sSri%20Lanka!5e0!3m2!1sen!2sus!4v1747144763126!5m2!1sen!2sus" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
</section>

<!-- Pricing Table -->
<section class="pricing-table">
  <div class="container">
    <h2 class="text-center section-title">Pricing</h2>
    <div class="row justify-content-center">
      <div class="col-md-4">
        <ul class="list-group text-center">
          <li class="list-group-item active">Hourly Parking</li>
          <li class="list-group-item">$2 / hour</li>
        </ul>
      </div>
      <div class="col-md-4">
        <ul class="list-group text-center">
          <li class="list-group-item active">Daily Parking</li>
          <li class="list-group-item">$10 / day</li>
        </ul>
      </div>
      <div class="col-md-4">
        <ul class="list-group text-center">
          <li class="list-group-item active">Monthly Pass</li>
          <li class="list-group-item">$60 / month</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- Footer -->
<footer class="bg-dark text-white text-center py-3">
  <div class="container">
    &copy; 2025 Vehicle Parking Management System. All rights reserved.
  </div>
</footer>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
