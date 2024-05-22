<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\DataTransferObjects\Auth\LoginData;
use App\Http\DataTransferObjects\User\SaveData;
use App\Service\Auth\AuthService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function __construct(
        protected AuthService $authService
    )
    {
    }

    /**
     * @param Request $request
     * @return array
     */
    public function register(Request $request): array
    {
        return $this->authService->register(SaveData::from($request));
    }

    /**
     * @param Request $request
     * @return array
     */
    public function login(Request $request): array
    {
        return $this->authService->login(LoginData::from($request));
    }

    /**
     * @return JsonResponse
     */
    public function logout(): JsonResponse
    {
        $this->authService->removeAuthenticationToken(request()->user());
        return response()->json([null => null], 204);
    }
}
