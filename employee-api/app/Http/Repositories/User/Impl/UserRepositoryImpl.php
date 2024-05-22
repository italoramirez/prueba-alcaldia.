<?php

namespace App\Http\Repositories\User\Impl;

use App\Http\Repositories\User\UserRepository;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class UserRepositoryImpl implements UserRepository
{

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
}
