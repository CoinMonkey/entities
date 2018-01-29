<?php

namespace coinmonkey\entities;

use coinmonkey\interfaces\SumInterface;
use coinmonkey\entities\Currency;

class Sum implements SumInterface
{
    private $sum;
    private $currency;

    public function __construct($sum, Currency $currency)
    {
        $this->sum = $sum;
        $this->currency = $currency;
    }

    public function getCurrency(): Currency
    {
        return $this->currency;
    }

    public function getSum()
    {
        return $this->sum;
    }

    public function setSum($sum)
    {
        $this->sum = $sum;
    }

    public function setCurrency(Currency $currency)
    {
        $this->currency = $currency;
    }
}
