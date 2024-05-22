<?php

namespace App\Http\Repositories\User;

use App\Http\DataTransferObjects\User\SaveData;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

interface UserRepository
{
    /**
     * @param $data
     * @return User|Model|null
     */
    public function get($data): null|User|Model;

    /**
     * @param $data
     * @return User
     */
    public function save($data): User;

    /**
     * @param array $data
     * @param int $id
     * @return User
     */
    public function update(array $data, int $id): Model;

    /**
     * @param int $id
     * @return User
     */
    public function getUser(int $id): User;
}
