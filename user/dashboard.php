<!-- user/dashboard.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>User Dashboard - VPMS</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="../css/style.css" />
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">VPMS User</a>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="../logout.php">Logout</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- User Dashboard Content -->
  <div class="container mt-4">
    <h2 class="mb-4">User Dashboard</h2>
    <div class="row">
      <div class="col-md-6">
        <div class="card border-info mb-3">
          <div class="card-body">
            <h5 class="card-title">Welcome, John Doe</h5>
            <p class="card-text">Vehicle No: KA-01-AB-1234</p>
            <a href="book-parking.html" class="btn btn-info">Book a Slot</a>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card border-success mb-3">
          <div class="card-body">
            <h5 class="card-title">My Bookings</h5>
            <p class="card-text">Last Booking: 10-May-2025</p>
            <a href="booking-history.html" class="btn btn-success">View History</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
session_start();
if ($_SESSION["role"] !== "user") {
  header("Location: ../login.php");
  exit;
}
?>
