<?php

declare(strict_types=1);

namespace MullIo\Core\Attribute;

use MullIo\Core\Dto\Address;

#[\Attribute(\Attribute::TARGET_CLASS | \Attribute::IS_REPEATABLE)]
class TestAddress
{
    public function __construct(
        public Address $address
    )
    {
    }
}
