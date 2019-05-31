<?php

	use Calculator\BasicOperations;

	require_once __DIR__ . '/../vendor/autoload.php';

	$bo = new BasicOperations;
	echo $bo->sum(3,5);

?>