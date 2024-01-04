<?php

namespace Ndraaa15\PhpComposer\data;

class people
{
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