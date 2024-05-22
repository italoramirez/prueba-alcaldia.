<?php

namespace App\Http\DataTransferObjects\User;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\Support\Validation\ValidationContext;

class SaveData extends Data
{
    public function __construct(
        public string $email,
        public string $name,
        public string $password
    )
    {
    }

    /**
     * @return string[]
     */
    public static function rules(): array
    {
        return [
            'email' => 'required|max:255',
            'name' => 'required|max:255',
            'password' => 'required|min:3|max:15'
        ];
    }

}
