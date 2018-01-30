<?php

namespace coinmonkey\entities;

use coinmonkey\interfaces\AddressInterface;

class Order implements AddressInterface
{
    private $exchangerId;
    
    public function __construct($exchangerId = null)
    {
        $this->exchangerId = $exchangerId;
    }
    
    public function getExchangerOrderId() : string
    {
        return $this->exchangerId;
    }
}
