<?php

namespace coinmonkey\entities;

use coinmonkey\interfaces\AmountInterface;
use coinmonkey\interfaces\OrderInterface;
use coinmonkey\interfaces\AddressInterface;
use coinmonkey\interfaces\CoinInterface;

class Order implements OrderInterface
{
    private $amount;
    private $status;
    private $coin;
    private $givenAmount;

    const STATUS_FAIL = 0;
    const STATUS_WAIT_CLIENT_TRANSACTION = 1;
    const STATUS_WAIT_EXCHANGER_PROCESSING = 2;
    const STATUS_EXCHANGER_PROCESSING = 3;
    const STATUS_WAIT_EXCHANGER_TRANSACTION = 4;
    const STATUS_DONE = 5;

    public function __construct(AmountInterface $givenAmount, CoinInterface $coin, AddressInterface $address)
    {
        $this->givenAmount = $givenAmount;
        $this->coin = $coin;
        $this->address = $address;
    }

    public function getCoin(): CoinInterface
    {
        return $this->coin;
    }

    public function getAddress() : AddressInterface
    {
        return $this->address;
    }

    public function getAmount() : AmountInterface
    {
        return $this->givenAmount;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    public function setCoin(CoinInterface $coin)
    {
        $this->coin = $coin;
    }

    public function setAddress(AddressInterface $address)
    {
        $this->address = $address;
    }
}
