<?php

namespace coinmonkey\entities;

use coinmonkey\interfaces\AmountInterface;
use coinmonkey\interfaces\CoinInterface;

class Amount implements AmountInterface
{
    private $amount;
    private $coin;

    public function __construct($amount, CoinInterface $coin)
    {
        $this->amount = $amount;
        $this->coin = $coin;
    }

    public function getCoin(): CoinInterface
    {
        return $this->coin;
    }

    public function getAmount()
    {
        return $this->amount;
    }

    public function setCoin(CoinInterface $coin)
    {
        $this->coin = $coin;
    }

    public function setAmount($amount)
    {
        $this->amount = $amount;
    }
}
