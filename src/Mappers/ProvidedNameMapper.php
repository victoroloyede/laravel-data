<?php

namespace Spatie\LaravelData\Mappers;

class ProvidedNameMapper implements NameMapper
{
    public function __construct(private string|int $name)
    {
    }

    public function map(int|string $name): string|int
    {
        return $this->name;
    }

    public function inverse(): NameMapper
    {
        return $this;
    }
}