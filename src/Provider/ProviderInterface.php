<?php

declare(strict_types=1);

namespace MullIo\Core\Provider;

use MullIo\Core\Dto\Address;

interface ProviderInterface
{
    public function getProviderName(): string;

    public function getProviderUri(): string;

    public function canHandleAddress(Address $address): bool;

    public function getGarbageInformation(Address $address): ProviderResult;
}
