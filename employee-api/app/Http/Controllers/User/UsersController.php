<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\DataTransferObjects\User\GetData;
use App\Http\DataTransferObjects\User\SaveData;
use App\Http\DataTransferObjects\User\UpdateData;
use App\Models\User;
use App\Service\User\UserService;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class UsersController extends Controller
{

    public function __construct(protected UserService $userService)
    {
    }

    /**
     * @param Request $request
     * @return LengthAwarePaginator
     */
    public function getAllWithPaginate(Request $request): LengthAwarePaginator
    {
        return $this->userService->getUserWithPaginate(GetData::from($request->all()));
    }

    /**
     * @param Request $request
     * @param int $id
     * @return User
     */
    public function update(Request $request, int $id): User
    {
        return $this->userService->update(UpdateData::from($request->all()), $id);
    }

    public function show(int $id): User
    {
        return $this->userService->getUser($id);
    }
}
