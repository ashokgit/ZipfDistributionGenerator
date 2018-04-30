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
