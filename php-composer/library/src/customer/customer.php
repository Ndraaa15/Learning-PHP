<?php

namespace Ndraaa15\CreateLibrary\customer;

class customer{
    public function __construct(private string $name, private string $address, private string $phone)
    {
        $this->name;
        $this->address;
        $this->phone;
    }

    public function __getName()
    {
        return $this->name;
    }
}


?>