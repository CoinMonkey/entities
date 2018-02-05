<?php

namespace coinmonkey\entities;

class Coin implements \coinmonkey\interfaces\CoinInterface
{
    private $code;
    private $name;

    public function __construct($code, $name = '')
    {
        $this->code = $code;
        $this->name = $name;
    }

    public function getCode() : string
    {
        return $this->code;
    }

    public function getName() : string
    {
        return $this->name;
    }
}
