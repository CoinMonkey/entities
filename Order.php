<?php

namespace coinmonkey\entities;

use coinmonkey\interfaces\SumInterface;
use coinmonkey\entities\Currency;

class Order implements SumInterface
{
    private $sum;
    private $currency;
    private $operations = [];
    
    const STATUS_FAIL = 0;
    const STATUS_WAIT_YOUR_TRANSACTION = 1;
    const STATUS_WAIT_PARTNER_TRANSACTION = 2;
    const STATUS_WAIT_MONKEY_TRANSACTION = 3;
    const STATUS_DONE = 4;
    const STATUS_PARTNER_PROCESSING = 5;
    const STATUS_YOU_DID_TRANSACTION = 6;
    
    public function __construct($sum, Currency $currency, $operations = [])
    {
        $this->sum = $sum;
        $this->currency = $currency;
        $this->operations = $operations;
    }

    public function getCurrency(): Currency
    {
        return $this->currency;
    }

    public function getSum()
    {
        return $this->sum;
    }

    public function setSum($sum)
    {
        $this->sum = $sum;
    }

    public function setCurrency(Currency $currency)
    {
        $this->currency = $currency;
    }

    public function getOperations(): array
    {
        return $this->operations;
    }

    public function execute()
    {
        $report = [];

        foreach($this->operations as $operation) {
            $exchanger = $operation->getExchanger();

            if($operation->getDeal() == 'buy') {
                $report[] = [
                    'result' => $exchanger->buy($operation->getMarket(), $operation->getSum(), $operation->getRate()),
                    'operation' => $operation,
                    'deal' => 'buy',
                ];
            } else {
                $report[] = [
                    'result' => $exchanger->sell($operation->getMarket(), $operation->getSum(), $operation->getRate()),
                    'operation' => $operation,
                    'deal' => 'sell',
                ];
            }
        }

        return $report;
    }
}
