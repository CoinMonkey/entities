<?php

namespace coinmonkey\entities;

use coinmonkey\interfaces\StatusInterface;

class Status implements StatusInterface
{
    const STATUS_FAIL = 0;
    const STATUS_WAIT_CLIENT_TRANSACTION = 1;
    const STATUS_WAIT_EXCHANGER_PROCESSING = 2;
    const STATUS_EXCHANGER_PROCESSING = 3;
    const STATUS_WAIT_EXCHANGER_TRANSACTION = 4;
    const STATUS_DONE = 5;

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

    public function getStatusName()
    {
        switch($this->status) {
            case self::STATUS_FAIL: return 'fail';
            case self::STATUS_WAIT_CLIENT_TRANSACTION: return 'wailt a client transaction';
            case self::STATUS_WAIT_EXCHANGER_PROCESSING: return 'wait an exchanger processing';
            case self::STATUS_EXCHANGER_PROCESSING: return 'exchanger processing';
            case self::STATUS_WAIT_EXCHANGER_TRANSACTION: return 'wait an exchanger transaction';
            case self::STATUS_DONE: return 'done';
        }

        return null;
    }
}
