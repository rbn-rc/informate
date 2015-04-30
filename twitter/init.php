<?php

session_start();
//print_r($_SESSION);

require_once('codebird.php');
require_once('DB.php');
require_once('TwitterAuth.php');

$db = new DB;

define('CONSUMER_KEY', 'ntzg2N3UMBOTkgHNZzGmlHTQy'); // replace with your key
define('CONSUMER_SECRET', 'GCo5NkrK9zhPEJWaat9eLB6i5lHR7zprvfzcX7EdzHANT49Jay'); // your secret instead

// no ' signs here:
\Codebird\Codebird::setConsumerKey(CONSUMER_KEY, CONSUMER_SECRET);
$client = \Codebird\Codebird::getInstance();

//var_dump($client); //Debug