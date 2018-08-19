<?php 
	use Lablnet\Logger;
	require '../vendor/autoload.php';
	$logger = new Logger;
	$logger->debug("Hi im log msg and im {field}" , ['field' => 'debug']);
	var_dump($logger->get());