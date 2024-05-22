<?php

namespace App\Http\Repositories\User;

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
}
