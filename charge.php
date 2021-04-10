<?php
require_once('vendor/autoload.php');

\Stripe\Stripe::setApiKey('sk_test_51IeM9DDWVBkfAewQoYkW9N9fuk0fjGZ0H4bVawG0HQJ81c5yPdYTVh2bDL9KSeenRkhe7guYCEWTyulgp6DeNdsW007QSIXFmg');

 $POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);
 $first_name = $POST['first_name'];
 $last_name = $POST['last_name'];
 $email = $POST['email'];
 $token = $POST['stripeToken'];

 $customer = \Stripe\Customer::create(array(
  "email" => $email,
  "source" => $token
));

$charge = \Stripe\Charge::create(array(
  "amount" => 5000,
  "currency" => "usd",
  "description" => "Intro To React Course",
  "customer" => $customer->id
));
header('Location: success.php?tid='.$charge->id.'&product='.$charge->description);