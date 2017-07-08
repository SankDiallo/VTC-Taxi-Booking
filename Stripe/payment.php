<?php
require_once('Stripe/init.php');

\Stripe\Stripe::setApiKey("sk_test_HruuLfakh7XU3JQQrawL3Bwd");

// Get the credit card details submitted by the form
$token = $_POST['stripeToken'];

// Create a charge: this will charge the user's card
try {
  $charge = \Stripe\Charge::create(array(
    "amount" => 1000, // Amount in cents
    "currency" => "eur",
    "source" => $token,
    "description" => "Example charge"
    ));
    echo "Success";
} catch(\Stripe\Error\Card $e) {
  // The card has been declined
    echo "noy success";
}
exit;
?>