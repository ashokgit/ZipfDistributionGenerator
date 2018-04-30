# ZipfDistributionGenerator
A Simple PHP Zipf Distribution Generator

Wikipedia Definition
-----------------------
https://en.wikipedia.org/wiki/Zipf%27s_law
Zipf's law (/ˈzɪf/) is an empirical law formulated using mathematical statistics that refers to the fact that many types of data studied in the physical and social sciences can be approximated with a Zipfian distribution, one of a family of related discrete power law probability distributions. Zipf distribution is related to the zeta distribution, but is not identical.

Usage
--------

    $zipf = new ZipfDistributionGenerator;
    $zipf->size = 10;
    $zipf->skew = .5;
    $zipf->generate();

    for ($i = 1; $i < 10; $i++) {
        $prabability = $zipf->getProbability($i);
        echo $prabability;
    }

