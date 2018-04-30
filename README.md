# ZipfDistributionGenerator
A PHP Library for Generating Zipf Distribution

Wikipedia Definition
-----------------------
https://en.wikipedia.org/wiki/Zipf%27s_law
Zipf's law (/ˈzɪf/) is an empirical law formulated using mathematical statistics that refers to the fact that many types of data studied in the physical and social sciences can be approximated with a Zipfian distribution, one of a family of related discrete power law probability distributions. Zipf distribution is related to the zeta distribution, but is not identical.

Usage
--------

	<?php

	require __DIR__ . '/../src/ZipfDistributionGenerator.php';

	$zipf = new ZipfDistributionGenerator;
	$zipf->size = 10;
	$zipf->skew = 1;
	$zipf->generate();

	$prabability = [];
	for ($i = 1; $i <= 10; $i++) {
	    $prabability[] = $zipf->getProbability($i);
	}

	echo '<pre>';
	print_r($prabability);

Result
----------

	Array
	(
	    [0] => 0.35348576237902
	    [1] => 0.17674288118951
	    [2] => 0.11782858745967
	    [3] => 0.088371440594754
	    [4] => 0.070697152475803
	    [5] => 0.058914293729836
	    [6] => 0.050497966054145
	    [7] => 0.044185720297377
	    [8] => 0.039276195819891
	    [9] => 0.035348576237902
	)

