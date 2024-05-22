<?php

namespace App\Http\DataTransferObjects\User;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\Support\Validation\ValidationContext;

class SaveData extends Data
{
    public function __construct(
        public string $email,
        public string $name,
        public string $last_name,
        public string $address,
        public string $phone,
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
            'last_name' => 'required|max:255',
            'address' => 'required|max:255',
            'phone' => 'required|max:30',
            'password' => 'required|min:3|max:15'
        ];
    }

}
