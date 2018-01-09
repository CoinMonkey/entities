<?php

namespace coinmonkey\entities;

class Status
{
    private $status;
    private $message;
    private $transaction;

    public function __construct($status, $transaction = null, $message = '')
    {
        $this->status = $status;
        $this->message = $message;
        $this->transaction = $transaction;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function getTransaction()
    {
        return $this->transaction;
    }
}
