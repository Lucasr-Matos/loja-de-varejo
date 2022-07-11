<?php

namespace APP\Model;

class Product
{
  //propriedades
    private string $name;
    private float $price;
    private int $quantity;
    private bool $isActivity;

    public function __construct(
        string $name,
        float $price,
        int $quantity,
        bool $isActivity = true

    )
    {
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
        $this->isActivity = $isActivity;
    }
}