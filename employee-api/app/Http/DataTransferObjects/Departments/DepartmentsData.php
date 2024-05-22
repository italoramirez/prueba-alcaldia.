<?php

namespace App\Http\DataTransferObjects\Departments;

use Spatie\LaravelData\Data;

class DepartmentsData extends Data
{
    public function __construct(
        public string $name,
    )
    {
    }

    /**
     * @return string[]
     */
    public static function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
        ];
    }

}