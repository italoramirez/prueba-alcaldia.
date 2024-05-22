<?php

namespace App\Service\User;

use App\Http\DataTransferObjects\User\GetData;
use App\Http\DataTransferObjects\User\SaveData;
use App\Models\User;

interface UserService
{
    /**
     * @param SaveData $data
     * @return User
     */
    public function create(SaveData $data): User;

    /**
     * @param GetData $data
     * @return User|null
     */
    public function get(GetData $data): ?User;
}