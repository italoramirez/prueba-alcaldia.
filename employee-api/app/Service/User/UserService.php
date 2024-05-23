<?php

namespace App\Service\User;

use App\Http\DataTransferObjects\Auth\LoginData;
use App\Http\DataTransferObjects\User\GetData;
use App\Http\DataTransferObjects\User\SaveData;
use App\Http\DataTransferObjects\User\UpdateData;
use App\Models\User;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

interface UserService
{
    /**
     * @param SaveData $data
     * @return User
     */
    public function create(SaveData $data): User;

    /**
     * @param LoginData $data
     * @return User|null
     */
    public function get(LoginData $data): ?User;

    /**
     * @param GetData $getData
     * @return LengthAwarePaginator
     */
    public function getUserWithPaginate(GetData $getData): LengthAwarePaginator;

    /**
     * @param UpdateData $saveData
     * @param int $id
     * @return User
     */
    public function update(UpdateData $saveData, int $id): User;

    public function getUser(int $id): User;
}