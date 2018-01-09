<?php

namespace coinmonkey\entities;

use coinmonkey\interfaces\OperationInterface;
use coinmonkey\interfaces\ExchangerInterface;

class Operation implements OperationInterface
{
    private $market;
    private $exchanger;
    private $sum;
    private $rate;
    private $deal;
    private $status;

    public function __construct(ExchangerInterface $exchanger, $market, $deal, $sum, $rate)
    {
        $this->market = $market;
        $this->exchanger = $exchanger;
        $this->sum = $sum;
        $this->deal = $deal;
        $this->rate = $rate;
    }

    public function getExchanger() : ExchangerInterface
    {
        return $this->exchanger;
    }

    public function getMarket() : string
    {
        return $this->market;
    }

    public function getSum() : float
    {
        return $this->sum;
    }

    public function getDeal() : string
    {
        return $this->deal;
    }

    public function getRate() : float
    {
        return $this->rate;
    }
}
