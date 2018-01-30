<?php

namespace coinmonkey\entities;

use coinmonkey\interfaces\OperationInterface;
use coinmonkey\interfaces\ExchangerInterface;

class Operation implements OperationInterface
{
    private $market;
    private $exchanger;
    private $amount;
    private $rate;
    private $deal;
    private $status;

    public function __construct(ExchangerInterface $exchanger, $market, $deal, $amount, $rate)
    {
        $this->market = $market;
        $this->exchanger = $exchanger;
        $this->amount = $amount;
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

    public function getGivenAmount() : float
    {
        return $this->amount;
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
