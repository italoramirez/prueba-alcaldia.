<?php

namespace App\Http\DataTransferObjects\Auth;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\Support\Validation\ValidationContext;

class LoginData extends Data
{

    public function __construct(
        public string $email,
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
            'email' => 'required',
            'password' => 'required'
        ];
    }
}
