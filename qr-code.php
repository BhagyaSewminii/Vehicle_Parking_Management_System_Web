<?php
require_once 'libs/phpqrcode/qrlib.php'; // Include the library

// Booking data (this can come from DB later)
$bookingId = 'BKG123456';
$vehicleNumber = 'KA-01-AB-1234';
$slot = 'A1';
$date = '2025-05-20';
$time = '10:00 AM';

// Data for QR
$data = "Booking ID: $bookingId\nVehicle: $vehicleNumber\nSlot: $slot\nDate: $date\nTime: $time";

// Output directory for QR code image
$qrDir = 'qrcodes/';
if (!file_exists($qrDir)) {
    mkdir($qrDir, 0777, true); // Create directory if not exists
}
$qrFile = $qrDir . $bookingId . '.png';

// Generate QR Code PNG image
QRcode::png($data, $qrFile, QR_ECLEVEL_H, 5);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>QR Code - VPMS</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container text-center mt-5">
    <h2>Your Booking QR Code</h2>
    <p>Show this at the entry gate</p>
    <img src="<?php echo $qrFile; ?>" alt="QR Code" class="img-fluid border p-2" />
    <br><br>
    <a href="dashboard.html" class="btn btn-primary">Back to Dashboard</a>
  </div>
</body>
</html>
