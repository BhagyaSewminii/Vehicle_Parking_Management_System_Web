<?php
require 'vendor/autoload.php';

\Stripe\Stripe::setApiKey('sk_test_YourSecretKey'); // Replace with your real secret key

$YOUR_DOMAIN = 'http://localhost/vpms'; // Update with your local or live domain

$checkout_session = \Stripe\Checkout\Session::create([
    'payment_method_types' => ['card'],
    'line_items' => [[
        'price_data' => [
            'currency' => 'usd',
            'unit_amount' => 500, // Amount in cents (e.g. $5.00)
            'product_data' => [
                'name' => 'Parking Slot Booking',
                'description' => 'Slot A1, Date: 2025-05-15',
            ],
        ],
        'quantity' => 1,
    ]],
    'mode' => 'payment',
    'success_url' => $YOUR_DOMAIN . '/payment-success.php?session_id={CHECKOUT_SESSION_ID}',
    'cancel_url' => $YOUR_DOMAIN . '/payment-cancel.php',
]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Stripe Payment - VPMS</title>
  <script src="https://js.stripe.com/v3/"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>

  <div class="container text-center mt-5">
    <h2>Confirm Parking Payment</h2>
    <p>Pay $5.00 to complete your booking for Slot A1</p>
    <button id="checkout-button" class="btn btn-primary">Pay with Card</button>
  </div>

  <script>
    const stripe = Stripe('pk_test_YourPublishableKey'); // Replace with your real publishable key

    document.getElementById('checkout-button').addEventListener('click', () => {
      stripe.redirectToCheckout({
        sessionId: "<?php echo $checkout_session->id; ?>"
      });
    });
  </script>

</body>
</html>
