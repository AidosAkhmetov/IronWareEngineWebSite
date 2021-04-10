<?php
//subscription plans
//interval month,three month or year
$plans= array(
	'1' => array(
		'name' => 'Monthly Subscription',
		'price' => 3.99,
		'interval' => 'month'
	),
	'2' => array(
		'name' => 'Three Monthly Subscription',
	    'price'=> 9.99,
	 	'interval' => 'threemonth'
	 ),
	'3' =>array(
		'name' => 'Yearly Subscription',
		'price' => 19.99,
		'interval' =>'year'
	)
);
$currency = "USD";
define('STRIPE_API_KEY','sk_test_51IeM9DDWVBkfAewQoYkW9N9fuk0fjGZ0H4bVawG0HQJ81c5yPdYTVh2bDL9KSeenRkhe7guYCEWTyulgp6DeNdsW007QSIXFmg');
define('STRIPE_PUBLISHABLE_KEY','pk_test_51IeM9DDWVBkfAewQKorC9JtIg2RWlLBzAg1fUe9jEBejtllQcLToLHO74ama4RcIAMXHHSGyXDwn3Q0svfsGkx9Z00kMKq1ra4');
define('DB_HOST', 'localhost'); 
define('DB_USERNAME', 'root'); 
define('DB_PASSWORD', ''); 
define('DB_NAME', 'ironware');