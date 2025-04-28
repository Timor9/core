<?php

namespace MullIo\Core;

use Symfony\Component\String\AbstractString;
use Symfony\Component\String\ByteString;
use Symfony\Component\String\UnicodeString;

class StringManipulation
{
    public static function create(string $string): AbstractString
    {
        try {
            return new UnicodeString($string);
        } catch (\Exception $exception) {
            return new ByteString($string);
        }
    }
}