<?php

require_once __DIR__ . '/src/Rand.php';
/**
 *
 */
class ZipfDistributionGenerator
{
    private $rnd;
    private $size;
    private $skew;
    private $bottom = 0;

    /**
     * @param  int
     * @param  int
     * @return null
     */
    public function generate()
    {
        for ($i = 1; $i < $size; $i++) {
            $this->bottom += (1 / (pow($i, $this->skew)));
        }
        return;
    }

    /**
     * @return null
     */
    private function getRand()
    {
        $this->rnd = new Rand(mt_rand());
        return;
    }

    /**
     * @return  int
     */
    // the next() method returns an random rank id.
    // The frequency of returned rank ids are follows Zipf distribution.
    public function next()
    {
        $rank;
        $friquency = 0;
        $dice;

        $this->getRand();
        $rank = $this->rnd->nextInt($this->size);
        $friquency = (1.0 / pow($rank, $this->skew)) / $this->bottom;
        $dice = $this->rnd->nextInt();

        while (!($dice < $friquency)) {
            $rank = $this->rnd->nextInt($this->size);
            $friquency = (1.0 / pow($rank, $this->skew)) / $this->bottom;
            $dice = $this->rnd->nextInt();
        }
        return $rank;
    }

    /**
     * @return int
     */
    // // This method returns a probability that the given rank occurs.
    public function getProbability($rank)
    {
        return (1.0 / pow($rank, $this->skew)) / $this->bottom;
    }

}
