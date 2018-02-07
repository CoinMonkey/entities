<?php

namespace coinmonkey\entities;

use coinmonkey\interfaces\StatusInterface;

class Status implements StatusInterface
{
    private $status;
    private $tx1Id;
    private $tx2Id;

    public function __construct(int $status, $tx1Id = null, $tx2Id = null)
    {
        $this->status = $status;
        $this->tx1Id = $tx1Id;
        $this->tx2Id = $tx2Id;
    }

    public function getStatus() : int
    {
        return $this->status;
    }

    public function getTxs() : array
    {
        return [
            1 => $this->tx1Id,
            2 => $this->tx2Id
        ];
    }
}
