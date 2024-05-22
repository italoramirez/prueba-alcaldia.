<?php

namespace App\Http\DataTransferObjects\User;

use Spatie\LaravelData\Data;

class GetData extends Data
{
    /**
     * @param string|null $name
     * @param int|null $departmentId
     * @param int|null $page
     * @param int|null $perPage
     */
    public function __construct(
        public ?string $name,
        public ?int $departmentId,
        public ?int $page,
        public ?int $perPage,
    )
    {
    }
}
