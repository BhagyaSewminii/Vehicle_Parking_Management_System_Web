<!-- admin/dashboard.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Admin Dashboard - VPMS</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">VPMS Admin</a>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="../logout.php">Logout</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container mt-4">
    <h2 class="mb-4">Admin Dashboard</h2>
    <div class="row">
      <div class="col-md-3">
        <div class="card text-bg-primary mb-3">
          <div class="card-body">
            <h5 class="card-title"><i class="fas fa-parking"></i> Total Slots</h5>
            <p class="card-text">120</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card text-bg-success mb-3">
          <div class="card-body">
            <h5 class="card-title"><i class="fas fa-car"></i> Booked Slots</h5>
            <p class="card-text">48</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card text-bg-warning mb-3">
          <div class="card-body">
            <h5 class="card-title"><i class="fas fa-check"></i> Available Slots</h5>
            <p class="card-text">72</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card text-bg-info mb-3">
          <div class="card-body">
            <h5 class="card-title"><i class="fas fa-users"></i> Registered Users</h5>
            <p class="card-text">65</p>
          </div>
        </div>
      </div>
    </div>

    <div class="card mt-5">
      <div class="card-body">
        <h5 class="card-title">Slot Usage Overview</h5>
        <canvas id="usageChart"></canvas>
      </div>
    </div>
  </div>

  <script>
    const ctx = document.getElementById('usageChart').getContext('2d');
    new Chart(ctx, {
      type: 'doughnut',
      data: {
        labels: ['Booked', 'Available'],
        datasets: [{
          label: 'Slots',
          data: [48, 72],
          backgroundColor: ['#28a745', '#ffc107'],
        }]
      },
      options: {
        responsive: true,
        plugins: { legend: { position: 'bottom' } }
      }
    });
  </script>

</body>
</html>
<?php
session_start();
if ($_SESSION["role"] !== "admin") {
  header("Location: ../login.php");
  exit;
}
?>
