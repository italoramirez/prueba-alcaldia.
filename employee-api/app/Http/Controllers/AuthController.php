<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request): array
    {
//        dd($request->all());
        return $this->authService->login(LoginData::from($request));
    }
}
