<?php

namespace App\Service\User\Impl;

use App\Http\DataTransferObjects\Auth\LoginData;
use App\Http\DataTransferObjects\User\GetData;
use App\Http\DataTransferObjects\User\SaveData;
use App\Http\DataTransferObjects\User\UpdateData;
use App\Http\Repositories\User\UserRepository;
use App\Models\User;
use App\Service\User\UserService;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class UserServiceImpl implements UserService
{
    public function __construct(protected UserRepository $userRepository)
    {
    }

    /**
     * @param SaveData $data
     * @return User
     */
    public function create(SaveData $data): User
    {
        return $this->userRepository->save($data);
    }

    /**
     * @param LoginData $data
     * @return User|null
     */
    public function get(LoginData $data): ?User
    {
        return $this->userRepository->get($data);
    }

    /**
     * @param GetData $getData
     * @return LengthAwarePaginator
     */
    public function getUserWithPaginate(GetData $getData): LengthAwarePaginator
    {
        return User::query()->with('department')
            ->whereName($getData->name)
            ->whereDepartmentById($getData->departmentId)
            ->orderBy('users.created_at', 'asc')
            ->paginate($getData->perPage ?? 10);
    }

    /**
     * @param UpdateData $saveData
     * @param int $id
     * @return User
     */
    public function update(UpdateData $saveData, int $id): User
    {
        $payload = [
            'name' => $saveData->name,
            'email' => $saveData->email,
            'last_name' => $saveData->last_name,
            'phone' => $saveData->phone,
            'department_id' => $saveData->department_id
        ];
        return $this->userRepository->update($payload, $id);
    }

    /**
     * @param int $id
     * @return User
     */
    public function getUser(int $id): User
    {
        return $this->userRepository->getUser($id);
    }
}