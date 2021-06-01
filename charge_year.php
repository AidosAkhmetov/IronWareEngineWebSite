<?php
require_once('vendor/autoload.php');
require_once('config/db.php');
require_once('lib/pdo_db.php');
require_once('models/Transaction.php');
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
  "amount" => 1990,
  "currency" => "usd",
  "description" => "Year Subscription",
  "customer" => $customer->id
));

$transactionData = [
  'id' => $charge->id,
  'customer_id' => $charge->customer,
  'product' => $charge->description,
  'email' => $email,
  'amount' => $charge->amount,
  'currency' => $charge->currency,
  'status' => $charge->status,
];

// Instantiate Transaction
$transaction = new Transaction();

// Add Transaction To DB
$transaction->addTransaction($transactionData);

// Redirect to success
header('Location: success_year.php?tid='.$charge->id.'&product='.$charge->description);