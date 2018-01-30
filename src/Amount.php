<?php

namespace coinmonkey\entities;

use coinmonkey\interfaces\AmountInterface;
use coinmonkey\entities\Coin;

class Amount implements AmountInterface
{
    private $amount;
    private $coin;

    public function __construct($amount, Coin $coin)
    {
        $this->amount = $amount;
        $this->coin = $coin;
    }

    public function getCoin(): Coin
    {
        return $this->coin;
    }

    public function getAmount()
    {
        return $this->amount;
    }

    public function setCoin(Coin $coin)
    {
        $this->coin = $coin;
    }

    public function setAmount($amount)
    {
        $this->amount = $amount;
    }
}
