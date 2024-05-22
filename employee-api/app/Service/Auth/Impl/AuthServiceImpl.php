<?php

namespace app\Service\Auth\Impl;

use app\Service\Auth\AuthService;
use app\Service\Auth\LoginData;
use app\Service\Auth\SaveData;

class AuthServiceImpl implements AuthService
{

    public function register(SaveData $data): array
    {
        // TODO: Implement register() method.
    }

    public function getUser(): mixed
    {
        // TODO: Implement getUser() method.
    }

    public function login(LoginData $data): array
    {
        // TODO: Implement login() method.
    }

    public function removeAuthenticationToken(mixed $user): void
    {
        // TODO: Implement removeAuthenticationToken() method.
    }

    public function generateAuthenticationToken(mixed $user): string
    {
        // TODO: Implement generateAuthenticationToken() method.
    }
}