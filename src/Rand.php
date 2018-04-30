<?php

class Rand
{
    protected $rseed;
    private $mul;
    private $add;

    public function __construct($s)
    {
        $this->rseed = $s;
        $this->mul = gmp_init(0x5DEECE66D);
        $this->add = gmp_init(0xB);
    }

    public function rnext($bits)
    {

        $a = gmp_add(gmp_mul(gmp_init($this->rseed), $this->mul), $this->add);
        $aInt = gmp_intval(gmp_mod($a, gmp_init(PHP_INT_MAX)));

        $b = (1 << 48) - 1;

        $this->rseed = $aInt & $b;
        $ret = ($this->rseed >> (48 - $bits));

        return $ret;
    }

    public function nextInt()
    {
        return $this->rnext(32);
    }
}
