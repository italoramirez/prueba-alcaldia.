<?php

namespace App\Http\DataTransferObjects\User;

use Spatie\LaravelData\Data;

class GetData extends Data
{
    public function __construct(
        public ?string $email,
        public ?string $name
    )
    {
    }
}
