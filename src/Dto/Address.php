<?php

namespace MullIo\Core\Dto;

class Address implements \Stringable
{
    public function __construct(
        public string $street = '',
        public string $houseNumber = '',
        public string $zip = '',
        public string $city = '',
        public string $country = '',
    )
    {
    }

    public function __toString(): string
    {
        return $this->street . ' ' . $this->houseNumber . ', ' . $this->zip . ' ' . $this->city . ', ' . $this->country;
    }
}