<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\DataTransferObjects\Auth\LoginData;
use App\Service\Auth\AuthService;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function __construct(
        protected AuthService $authService
    )
    {
    }
    public function login(Request $request): array
    {
        return $this->authService->login(LoginData::from($request));
    }
}
