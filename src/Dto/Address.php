<?php

namespace MullIo\Core\Dto;

class Address implements \Stringable
{
    public function __construct(
        public string $street = 'Pumpernudl',
        public string $houseNumber = '3',
        public string $zip = '84104',
        public string $city = 'Rudelzhausen',
        public string $country = 'Deutschland',
    )
    {
    }

    public function __toString(): string
    {
        return $this->street . ' ' . $this->houseNumber . ', ' . $this->zip . ' ' . $this->city . ', ' . $this->country;
    }
}
