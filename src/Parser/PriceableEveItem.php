<?php

namespace Depotism\Seat\SeatBuyback\Parser;

use RecursiveTree\Seat\TreeLib\Items\EveItem;
use Seat\Services\Contracts\IPriceable;

class PriceableEveItem extends EveItem implements IPriceable
{
    public bool $repro = false;
    public int $provider = -1;
    // public PriceableEveItem $parent;
    public $isReproResult = false;

    public function getTypeID(): int
    {
        return $this->typeModel->typeID;
    }

    public function getTypeName(): string
    {
        return $this->typeModel->typeName;
    }    

    public function getAmount(): int
    {
        return $this->amount;
    }

    public function setPrice(float $price): void
    {
        $this->price = $price;
        $this->marketPrice = $price;
    }
}