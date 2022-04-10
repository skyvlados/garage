<?php

namespace Models;

class Stock
{
    private array $items=[];

    public function register(AbstractTransport $transport):self
    {
        $this->items[]=$transport;
        return $this;
    }

    /**
     * @return array|AbstractTransport[]
     */
    public function getAll():array
    {
        return $this->items;
    }
}