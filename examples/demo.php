<?php

$zipf = new ZipfDistributionGenerator;
$zipf->size = 10;
$zipf->skew = .5;
$zipf->generate();

for ($i = 1; $i < 10; $i++) {
    $prabability = $zipf->getProbability($i);
    echo $prabability;
}
