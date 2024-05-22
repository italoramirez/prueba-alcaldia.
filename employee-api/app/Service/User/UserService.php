<?php

namespace App\Service\User;

use App\Http\DataTransferObjects\User\GetData;
use App\Http\DataTransferObjects\User\SaveData;
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
     * @param GetData $data
     * @return User|null
     */
    public function get(GetData $data): ?User;

    /**
     * @param GetData $getData
     * @return LengthAwarePaginator
     */
    public function getUserWithPaginate(GetData $getData): LengthAwarePaginator;

    /**
     * @param SaveData $saveData
     * @param int $id
     * @return User
     */
    public function update(SaveData $saveData, int $id): User;

    public function getUser(int $id): User;
}