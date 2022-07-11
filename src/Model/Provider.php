<?php

namespace APP\Model;

class Provider{
    //propriedades 
    private string $name;
    private string $phone;
    private string $cnpj;
    private bool $isActivity;

    public function __construct(
        string $name,
        string $phone,
        string $cnpj,
        bool $isActivity = true
    )
    {
        $this->name = $name;
        $this->phone = $phone;
        $this->cnpj = $cnpj;
        $this->isActivity = $isActivity;
    }
}