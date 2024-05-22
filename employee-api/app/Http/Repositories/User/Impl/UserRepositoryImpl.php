<?php

namespace App\Http\Repositories\User\Impl;

use App\Http\DataTransferObjects\User\SaveData;
use App\Http\Repositories\User\UserRepository;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class UserRepositoryImpl implements UserRepository
{

    /**
     * @param $data
     * @return User|Model|null
     */

    public function get($data): null|User|Model
    {
        return User::whereEmail($data->email)
            ->firstOrFail();
    }

    public function save($data): User
    {
        return User::updateOrCreate([
            'email' => $data->email
        ], $data->toArray());
    }

    /**
     * @param array $data
     * @param int $id
     * @return User
     */
    public function update(array $data, int $id): Model
    {
        $user = User::findOrFail($id);
        $user->update($data);

        return $user;
    }

    public function getUser(int $id): User
    {
        return User::findOrFail($id)->load('department');
    }
}
