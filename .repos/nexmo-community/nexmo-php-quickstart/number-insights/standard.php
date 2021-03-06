<?php 
require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../vendor/autoload.php';

$basic  = new \Nexmo\Client\Credentials\Basic(NEXMO_API_KEY, NEXMO_API_SECRET);
$client = new \Nexmo\Client($basic);

$insights = $client->insights()->standard(NEXMO_TO_NUMBER);

echo "The number ".$insights->getNationalFormatNumber()." is registered to the network " . $insights->getCurrentCarrier()['name'];
