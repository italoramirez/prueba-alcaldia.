<?php

namespace App\Service\Auth;

use App\Http\DataTransferObjects\Auth\LoginData;

interface AuthService
{
    //public function register(SaveData $data): array;

    public function getUser(): mixed;

    public function login(LoginData $data): array;

    public function removeAuthenticationToken(mixed $user): void;

    public function generateAuthenticationToken(mixed $user): string;
}