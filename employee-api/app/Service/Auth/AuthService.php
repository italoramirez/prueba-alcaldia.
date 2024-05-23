<?php

namespace App\Service\Auth;

use App\Http\DataTransferObjects\Auth\LoginData;
use App\Http\DataTransferObjects\User\SaveData;

interface AuthService
{
    /**
     * @param SaveData $data
     * @return array
     */
    public function register(SaveData $data): array;

    /**
     * @param LoginData $data
     * @return array
     */
    public function login(LoginData $data): array;

    /**
     * @param mixed $user
     * @return void
     */
    public function removeAuthenticationToken(mixed $user): void;

    /**
     * @param mixed $user
     * @return string
     */
    public function generateAuthenticationToken(mixed $user): string;
}