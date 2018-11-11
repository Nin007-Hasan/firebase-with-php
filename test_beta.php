<?php
	require_once 'vendor/autoload.php';

	use Kreait\Firebase\Factory;
	use Kreait\Firebase\ServiceAccount;

	// This assumes that you have placed the Firebase credentials in the same directory
	// as this PHP file.
	$serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/application/key/cse499healthmanagement-1e4bd5cf7cbb.json');

	$firebase = (new Factory)
	    ->withServiceAccount($serviceAccount)
	    ->create();

	$database = $firebase->getDatabase();

	die(print_r($database));
?>