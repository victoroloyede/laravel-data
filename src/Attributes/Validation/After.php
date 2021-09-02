<?php

namespace Spatie\LaravelData\Attributes\Validation;

use Attribute;

#[Attribute(Attribute::TARGET_PROPERTY)]
class After implements ValidationAttribute
{
    public function __construct(private string $date)
    {
    }

    public function getRules(): array
    {
        return ['after:' . $this->date];
    }
}
