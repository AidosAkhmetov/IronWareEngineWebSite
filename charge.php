<?php
require_once('vendor/autoload.php');
require_once('config/db.php');
require_once('lib/pdo_db.php');
require_once('models/Transaction.php');
require_once('models/Customer.php');
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
  "amount" => 990,
  "currency" => "usd",
  "description" => "Three Month Subscription",
  "customer" => $customer->id
));
$customerData = [
  'id' => $charge->customer,
  'first_name' => $first_name,
  'last_name' => $last_name,
  'email' => $email
];
$transactionData = [
  'id' => $charge->id,
  'customer_id' => $charge->customer,
  'email' => $email,
  'product' => $charge->description,
  'amount' => $charge->amount,
  'currency' => $charge->currency,
  'status' => $charge->status,
];

$customer = new Customer();

$customer->addCustomer($customerData);

// Instantiate Transaction
$transaction = new Transaction();

// Add Transaction To DB
echo $transactionData['customer_id'];
$transaction->addTransaction($transactionData);

// Redirect to success
header('Location: success.php?tid='.$charge->id.'&product='.$charge->description);


