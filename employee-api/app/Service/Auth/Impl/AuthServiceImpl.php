<?php

namespace App\Service\Auth\Impl;

use App\Http\DataTransferObjects\Auth\LoginData;
use App\Http\DataTransferObjects\User\GetData;
use App\Http\DataTransferObjects\User\SaveData;
use App\Service\Auth\AuthService;
use App\Service\User\UserService;
use Illuminate\Support\Facades\Hash;

//use App\Service\Auth\SaveData;

class AuthServiceImpl implements AuthService
{

    public function __construct(protected UserService $userService)
    {
    }

    public function register(SaveData $data): array
    {
        $user =  $this->userService->create($data);
        $token = $this->generateAuthenticationToken($user);
        return [
            'user' => $user,
            'token' => $token
        ];
    }

    public function login(LoginData $data): array
    {
        $user = $this->userService->get($data);
        if(!Hash::check($data->password, $user->password)){
            abort(422, "Datos incorrectos");
        }
        $token = $this->generateAuthenticationToken($user);
        return [
            'user' => $user,
            'token' => $token
        ];
    }

    public function removeAuthenticationToken(mixed $user): void
    {
        $user->currentAccessToken()->delete();
    }

    public function generateAuthenticationToken(mixed $user): string
    {
        $user->tokens()->whereName('api-token')->delete();
        return $user->createToken('api-token')->plainTextToken;
    }
}