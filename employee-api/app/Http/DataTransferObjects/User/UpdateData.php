<?php

namespace App\Http\DataTransferObjects\User;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\Support\Validation\ValidationContext;

class UpdateData extends Data
{
    /**
     * @param string $email
     * @param string $name
     * @param string $last_name
     * @param string $address
     * @param string $phone
     * @param string $department_id
     */
    public function __construct(
        public string $email,
        public string $name,
        public string $last_name,
        public string $address,
        public string $phone,
//        public ?string $password,
        public string $department_id
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
//            'password' => 'nullable|min:3|max:15',
            'department_id' => 'required|int'
        ];
    }

}
